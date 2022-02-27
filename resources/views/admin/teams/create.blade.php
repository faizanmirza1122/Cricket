@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Team</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="form_inputs.html" class="breadcrumb-item">Team</a>
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

                    <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
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
                                <label class="d-block">Title</label>
                                <input type="text" value="{{ old('title') }}" name="title" class="form-control"
                                    placeholder="Enter title...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Subtitle</label>
                                <input type="text" value="{{ old('subtitle') }}" name="subtitle" class="form-control"
                                    placeholder="Enter subtitle...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Country</label>
                                <input type="text" value="{{ old('country') }}" name="country" class="form-control"
                                    placeholder="Enter country...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Since</label>
                                <input type="date" value="{{ old('since') }}" name="since" class="form-control"
                                    placeholder="Enter since...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Prize Earned</label>
                                <input type="text" value="{{ old('prize_earned') }}" name="prize_earned" class="form-control"
                                    placeholder="Enter prize_earned...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Description.."
                                    name="description">{{ old('description') }}</textarea>
                            </div>


                            <div class="form-group form-group-float">
                                <label class="d-block"> icon</label>
                                <input type="file" class="form-control" name="icon" id="icon">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Sidebar icon</label>
                                <input type="file" class="form-control" name="sidebar_icon" id="sidebar_icon">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Points</label>
                                <input type="number" value="{{ old('final_score') }}" name="final_score" class="form-control"
                                    placeholder="Enter final score...">
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
