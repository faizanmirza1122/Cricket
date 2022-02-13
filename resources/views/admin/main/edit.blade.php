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
                        <a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="#" class="breadcrumb-item">Main</a>
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

                    <form action="{{ route('main.store') }}" method="post" enctype="multipart/form-data">
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Edit Main</legend>

                            <div class="form-group form-group-float">
                                <label class="d-block">Title</label>
                                <input type="text" name="title" value="{{ $main->title ?? '' }}" class="form-control"
                                    placeholder="Enter your title...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Subtitle</label>
                                <input type="text" name="subtitle" value="{{ $main->subtitle ?? '' }}"
                                    class="form-control" placeholder="Enter your subtitle...">
                            </div>

                            <div class="form-group form-group-float">
                                @if ($main)
                                    <img src="{{ asset('storage/' . $main->logo) }}" width="100px" />
                                @else
                                @endif
                                <label class="d-block">Logo</label>
                                <input type="file" class="form-control" name="logo" id="logo">
                            </div>

                            <div class="form-group form-group-float">
                                @if ($main)
                                    <img src="{{ asset('storage/' . $main->image) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Background Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link 1</label>
                                <input type="text" name="social_link_1" value="{{ $main->social_link_1 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_1...">
                            </div>
                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link Name 1</label>
                                <input type="text" name="social_link_name_1" value="{{ $main->social_link_name_1 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_name_1...">
                            </div>
                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link Text 1</label>
                                <input type="text" name="social_link_text_1" value="{{ $main->social_link_text_1 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_text_1...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link 2</label>
                                <input type="text" name="social_link_2" value="{{ $main->social_link_2 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_2...">
                            </div>
                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link Name 2</label>
                                <input type="text" name="social_link_name_2" value="{{ $main->social_link_name_2 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_name_2...">
                            </div>
                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link Text 2</label>
                                <input type="text" name="social_link_text_2" value="{{ $main->social_link_text_2 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_text_2...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link 3</label>
                                <input type="text" name="social_link_3" value="{{ $main->social_link_3 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_3...">
                            </div>
                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link Name 3</label>
                                <input type="text" name="social_link_name_3" value="{{ $main->social_link_name_3 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_name_3...">
                            </div>
                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link Text 3</label>
                                <input type="text" name="social_link_text_3" value="{{ $main->social_link_text_3 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_text_3...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link 4</label>
                                <input type="text" name="social_link_4" value="{{ $main->social_link_4 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_4...">
                            </div>
                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link Name 4</label>
                                <input type="text" name="social_link_name_4" value="{{ $main->social_link_name_4 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_name_4...">
                            </div>
                            <div class="form-group  form-group-float">
                                <label class="d-block">Social Link Text 4</label>
                                <input type="text" name="social_link_text_4" value="{{ $main->social_link_text_4 ?? '' }}"
                                    class="form-control" placeholder="Enter your social_link_text_4...">
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
