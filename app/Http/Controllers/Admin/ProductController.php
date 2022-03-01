<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'featured_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:3048'],
            'product_category' => ['required', 'string', 'max:255'],
            'product_size' => ['required', 'string', 'max:255'],
            'product_color' => ['required', 'string', 'max:255'],
            'product_price' => ['required'],
            'product_quantity' => ['required'],
            'images' => ['nullable'],
            'images.*' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'product_description' => ['required'],

        ]);

        $data['slug'] = Str::slug($request->product_name, '-');
        $slug = $data['slug'];

        if ($request->file('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['featured_image'] = $imageName;
        }

        if ($request->hasfile('images')) {
            foreach($request->file('images') as $image)
            {
                $name = Str::random(8) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path().'/public/', $name);
                $data[] = $name;
            }
        }

        $data = new Product();
        $data->product_name =  $request->get('product_name');
        $data->slug =  $slug;
        $data->product_category =  $request->get('product_category');
        $data->product_size =  $request->get('product_size');
        $data->product_color =  $request->get('product_color');
        $data->product_quantity =  $request->get('product_quantity');
        $data->featured_image =  $imageName;;
        $data->product_price =  $request->get('product_price');
        $data->product_description =  $request->get('product_description');
        $data->images =  json_decode($data);
        $data->save();
        return redirect()->route('shop.index')->with('message', 'Product has been added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'product_name' => ['nullable', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'featured_image' => ['nullable'],
            'product_category' => ['nullable', 'string', 'max:255'],
            'product_size' => ['nullable', 'string', 'max:255'],
            'product_color' => ['nullable', 'string', 'max:255'],
            'product_price' => ['nullable'],
            'product_quantity' => ['nullable'],
            'images' => ['nullable'],
            'product_description' => ['nullable'],
        ]);

        $data['slug'] = Str::slug($request->product_name, '-');

        if ($request->file('featured_image')) {
            $image = $request->file('featured_image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['featured_image'] = $imageName;
        }else{
            $imageName = $request->image;
        }

        if ($request->hasfile('images')) {
            foreach($request->file('images') as $image)
            {
                $name = Str::random(8) . '.' . $image->getClientOriginalExtension();
                $image->move(public_path().'/public/', $name);
                $data[] = $name;
            }
        }else{
            $name = $request->image;
        }

        $data = Product::find($id);

        $data->product_name =  $request->get('product_name');
        $data->product_category = $request->get('product_category');
        $data->product_size = $request->get('product_size');
        $data->product_color = $request->get('product_color');
        $data->product_price = $request->get('product_price');
        $data->featured_image = $imageName;
        $data->product_quantity = $request->get('product_quantity');
        $data->images =  json_decode($data);
        $data->product_description = $request->get('product_description');
        // dd($data);
        $data->save();
        return redirect()->back()->with('message', 'Product has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect()->route('shop.index')
            ->with('success', 'Product deleted successfully');
    }
}
