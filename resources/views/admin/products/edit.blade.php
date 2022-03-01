@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="{{ route('shop.index') }}" class="breadcrumb-item">Shop</a>
                        <span class="breadcrumb-item active">Edit</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('shop.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        @include('flash-message')
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Edit Product</legend>
                            @include('flash-message')

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Name</label>
                                <input type="text" name="product_name" value="{{ $product->product_name ?? '' }}" class="form-control"
                                    placeholder="Enter your product_name...">
                            </div>

                            <div class="form-group form-group-float">
                                @if ($product)
                                    <img src="{{ asset('public/storage/' . $product->featured_image) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Featured Image</label>
                                <input type="file" class="form-control" name="featured_image" id="featured_image">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Category</label>
                                <input type="text" name="product_category" value="{{ $product->product_category ?? '' }}" class="form-control"
                                    placeholder="Enter your product_category...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Price</label>
                                <input type="text" name="product_price" value="{{ $product->product_price ?? '' }}" class="form-control"
                                    placeholder="Enter your product_price...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Color</label>
                                <input type="text" name="product_color" value="{{ $product->product_color ?? '' }}" class="form-control"
                                    placeholder="Enter your product_color...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Size</label>
                                <input type="text" name="product_size" value="{{ $product->product_size ?? '' }}" class="form-control"
                                    placeholder="Enter your product_size...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Quantity</label>
                                <input type="text" name="product_quantity" value="{{ $product->product_quantity ?? '' }}" class="form-control"
                                    placeholder="Enter your product_quantity...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">product Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"
                                    name="product_description">{{ $product->product_description ?? '' }}</textarea>
                            </div>

                            {{-- <div class="form-group form-group-float">
                                @if ($product)
                                @foreach(json_decode($product->images, true) as $images)
                                    <img src="{{ asset('public/storage/' . $images->images) }}" width="100px">
                                @endforeach
                                    @else
                                @endif
                                <label class="d-block">images</label>
                                <input type="file" class="form-control" name="images" id="images">
                            </div> --}}

                            <button type="submit" class="btn btn-primary">Save</button>

                        </fieldset>
                    </form>
                </div>
            </div>
            <!-- /form inputs -->

        </div>
        <!-- /content area -->


    </div>
    <!-- /main content -->
@endsection
