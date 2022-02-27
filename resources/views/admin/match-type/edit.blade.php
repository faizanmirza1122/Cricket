@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Match Type</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="{{ route('match-type.index') }}" class="breadcrumb-item">Match Type</a>
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

                    <form action="{{ route('match-type.update', $matchType->id) }}" method="POST" enctype="multipart/form-data">
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Edit Match Type</legend>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Name</label>
                                <input type="text" name="name" value="{{ old('name', $matchType->name ?? '' ) }}"
                                class="form-control" placeholder="Enter name...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Type</label>
                                <select data-placeholder="Select Match Type" name="type" value="{{old('type')}}" class="form-control" >
                                    <option >--</option>
                                    <option value="tournament" {{ $matchType->type == 'tournament' ? 'selected' : '' }}>Tournament</option>
                                    <option value="series" {{ $matchType->type == 'series' ? 'selected' :'' }}>Series</option>
                                    <option value="league" {{ $matchType->type == 'league' ? 'selected' : '' }}>League</option>
                                </select>
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
