@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Staff Page</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="form_inputs.html" class="breadcrumb-item">Staff Page</a>
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

                    <form action="{{ route('management-team-members.store') }}" method="post" enctype="multipart/form-data">
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Create Team</legend>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Designation</label>
                                <input type="text" name="designation" value="{{ old('designation') }}" class="form-control"
                                    placeholder="Enter designation...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Name</label>
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                                    placeholder="Enter name...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Age</label>
                                <input type="number" value="{{ old('age') }}" name="age" class="form-control"
                                    placeholder="Enter age...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Joining Date</label>
                                <input class="form-control" type="date" value="{{ old('date') }}" name="joining_date">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Country</label>
                                <input type="text" value="{{ old('country') }}" name="country" class="form-control"
                                    placeholder="Enter country...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Description.."
                                    name="description">{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Social Media Link 1</label>
                                <input type="text" value="{{ old('social_media_link_1') }}" class="form-control" name="social_media_link_1" id="social_media_link_1">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Social Media Link 2</label>
                                <input type="text" value="{{ old('social_media_link_2') }}" class="form-control" name="social_media_link_2" id="social_media_link_2">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Social Media Link 3</label>
                                <input type="text" value="{{ old('social_media_link_3') }}" class="form-control" name="social_media_link_3" id="social_media_link_3">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Previous Work</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Where do you work? and when.."
                                    name="previous_work">{{ old('previous_work') }}</textarea>
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
