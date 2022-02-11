@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Main</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="form_inputs.html" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Create</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

            </div>
        </div>
        <!-- /page header -->
        <span class="text-center">
            @include('flash-message')
        </span>

        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('home.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Create Home</legend>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Title</label>
                                <input type="text" name="title" value="" class="form-control"
                                    placeholder="Enter your side poster title...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Subtitle</label>
                                <input type="text" name="subtitle" value="" class="form-control"
                                    placeholder="Enter your side poster subtitle...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Date</label>
                                <input class="form-control" type="date" name="date">
                                <span class="form-text text-muted">Using <code>input type="date"</code></span>
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"
                                    name="description"></textarea>
                            </div>

                            <div class="form-group form-group-float">
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
