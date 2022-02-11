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

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-default"><i
                                class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i>
                            <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i>
                            <span>Schedule</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="form_inputs.html" class="breadcrumb-item">Main</a>
                        <span class="breadcrumb-item active">Edit</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
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

                    <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Edit About</legend>

                            <div class="form-group form-group-float">
                                @if ($about)
                                    <img src="{{ asset('storage/' . $about->side_logo_1) }}" width="100px" />
                                @else
                                @endif
                                <label class="d-block">Side Logo 1</label>
                                <input type="file" class="form-control" name="side_logo_1" id="side_logo_1">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Title</label>
                                <input type="text" name="title" value="{{ old('title', $about->title ?? '') }}"
                                    class="form-control" placeholder="Enter your title...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Subtitle</label>
                                <input type="text" name="subtitle" value="{{ old('subtitle', $about->subtitle ?? '') }}"
                                    class="form-control" placeholder="Enter your subtitle...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"
                                    name="description">{{ $about->description ?? '' }}</textarea>
                            </div>

                            <div class="form-group form-group-float">
                                @if ($about)
                                    <img src="{{ asset('storage/' . $about->image) }}" width="100px" />
                                @else
                                @endif
                                <label class="d-block">Image</label>
                                <input type="file" class="form-control" name="image" id="image" width="100px">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Why us Title</label>
                                <input type="text" name="why_us_title"
                                    value="{{ old('why_us_title', $about->why_us_title ?? '') }}" class="form-control"
                                    placeholder="Enter your why us title...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Why us Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"
                                    name="why_us_description">{{ $about->why_us_description ?? '' }}</textarea>
                            </div>

                            <div class="form-group form-group-float">
                                @if ($about)
                                    <img src="{{ asset('storage/' . $about->logo_1) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Logo 1</label>
                                <input type="file" class="form-control" name="logo_1" id="logo_1">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Logo name 1</label>
                                <input type="text" name="logo_name_1"
                                    value="{{ old('logo_name_1', $about->logo_name_1) }}" class="form-control"
                                    placeholder="Enter your why us Logo 1 name...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Logo number 1</label>
                                <input type="number" name="logo_number_1"
                                    value="{{ old('logo_number_1', $about->logo_number_1 ?? '') }}"
                                    class="form-control" placeholder="Enter your why us Logo 1 number...">
                            </div>

                            <div class="form-group form-group-float">
                                @if ($about)
                                    <img src="{{ asset('storage/' . $about->logo_2) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Logo 2</label>
                                <input type="file" class="form-control" name="logo_2" id="logo_2">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Logo name 2</label>
                                <input type="text" name="logo_name_2"
                                    value="{{ old('logo_name_2', $about->logo_name_2 ?? '') }}" class="form-control"
                                    placeholder="Enter your why us Logo 2 name...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Logo number 2</label>
                                <input type="number" name="logo_number_2"
                                    value="{{ old('logo_number_2', $about->logo_number_2 ?? '') }}"
                                    class="form-control" placeholder="Enter your why us Logo 2 number...">
                            </div>

                            <div class="form-group form-group-float">
                                @if ($about)
                                    <img src="{{ asset('storage/' . $about->logo_3) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Logo 3</label>
                                <input type="file" class="form-control" name="logo_3" id="logo_3">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Logo name 3</label>
                                <input type="text" name="logo_name_3"
                                    value="{{ old('logo_name_3', $about->logo_name_3 ?? '') }}" class="form-control"
                                    placeholder="Enter your why us Logo 3 name...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Logo number 3</label>
                                <input type="number" name="logo_number_3"
                                    value="{{ old('logo_number_3', $about->logo_number_3 ?? '') }}"
                                    class="form-control" placeholder="Enter your why us Logo 3 number...">
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
