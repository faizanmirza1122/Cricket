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
                        <a href="{{ route('news.index') }}" class="breadcrumb-item">Staff Page</a>
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

                    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Edit Staff Page</legend>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Category</label>
                                <input type="text" name="category" value="{{ old('category', $news->category ?? '' ) }}"
                                class="form-control" placeholder="Enter category...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Title</label>
                                <input type="text" name="title" value="{{ old('title', $news->title ?? '' ) }}" class="form-control"
                                    placeholder="Enter title...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Date</label>
                                <input class="form-control" type="date" name="date" value="{{ old('date', $news->date ?? '' ) }}">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter Description.."
                                    name="description">{{ old('description', $news->description ?? '' ) }}</textarea>
                            </div>

                            <div class="form-group form-group-float">
                                @if ($news)
                                    <img src="{{ asset('storage/' . $news->body_image) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Body Image</label>
                                <input type="file" class="form-control" name="body_image" id="body_image">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Description Under Image</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter description_under_image.."
                                    name="description_under_image">{{ old('description_under_image', $news->description_under_image ?? '' ) }}</textarea>
                            </div>

                            <div class="form-group form-group-float">
                                @if ($news)
                                    <img src="{{ asset('storage/' . $news->image) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Image</label>
                                <input type="file" class="form-control" name="image" id="image">
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
@endsection
