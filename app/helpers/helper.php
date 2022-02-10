<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if(!function_exists('storeImage')){
    function storeImage(Request $request)
    {
        if ($request->file('storeImage')) {
            $image = $request->file('storeImage');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['storeImage'] = $imageName;
    }
    }
}
