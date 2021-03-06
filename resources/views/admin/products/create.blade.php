@extends('admin.layouts.app')
@section('head')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}

@endsection
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Product</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="form_inputs.html" class="breadcrumb-item">Add Product</a>
                        <span class="breadcrumb-item active">Create</span>
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

                    <form action="{{ route('shop.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Create Product</legend>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Name</label>
                                <input type="text" name="product_name" value="{{ old('product_name') }}"
                                    class="form-control" placeholder="Enter your product name...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Featured Image</label>
                                <input type="file" class="form-control" name="featured_image" id="featured_image">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Category</label>
                                <input type="text" name="product_category" value="{{ old('product_category') }}"
                                    class="form-control" placeholder="Enter your product category..">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Price</label>
                                <input type="number" name="product_price" value="{{ old('product_price') }}"
                                    class="form-control" placeholder="Enter your product price..">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Color</label>
                                <input type="text" name="product_color" value="{{ old('product_color') }}"
                                    class="form-control" placeholder="Enter your product color..">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product Size</label>
                                <input type="text" name="product_size" value="{{ old('product_size') }}"
                                    class="form-control" placeholder="Enter your product size..">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Product quantity</label>
                                <input type="text" name="product_quantity" value="{{ old('product_quantity') }}"
                                    class="form-control" placeholder="Enter your product quantity..">
                            </div>

                            <div class="input-group control-group increment">
                                <input type="file" name="images[]" class="form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button"><i
                                            class="glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                            </div>
                            <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="images[]" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" id="btnw" type="button"><i
                                                class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group  form-group-float">
                                <label class="d-block">Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Description"
                                    name="product_description">{{ old('product_description') }}</textarea>
                            </div>

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
    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function() {
                var html = $(".clone").html();
                $(".increment").after(html);
            });
            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".control-group").remove();
            });

        });
    </script>
@endsection
