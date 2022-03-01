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
                        <a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="{{ route('management-team-members.index') }}" class="breadcrumb-item">Staff Page</a>
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

                    <form action="{{ route('management-team-members.update', $member->id) }}" method="POST" enctype="multipart/form-data">
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
                                <label class="d-block">Name</label>
                                <input type="text" name="name" value="{{ old('name', $member->name ?? '' ) }}" class="form-control"
                                    placeholder="Enter name...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Designation</label>
                                <input type="text" name="designation" value="{{ old('designation', $member->designation ?? '' ) }}"
                                    class="form-control" placeholder="Enter designation...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">age</label>
                                <input type="number" name="age" value="{{ old('age', $member->age ?? '' ) }}"
                                    class="form-control" placeholder="Enter age...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Joining Date</label>
                                <input class="form-control" type="date" name="joining_date" value="{{ old('joining_date', $member->joining_date ?? '' ) }}">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Country</label>
                                <input type="text" name="country" value="{{ old('country', $member->country ?? '' ) }}"
                                    class="form-control" placeholder="Enter country...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter Description.."
                                    name="description">{{ old('description', $member->description ?? '' ) }}</textarea>
                            </div>

                            <div class="form-group form-group-float">
                                @if ($member)
                                    <img src="{{ asset('public/storage/' . $member->image) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">social Media Link 1</label>
                                <input type="text" name="social_media_link_1" value="{{ old('', $member->social_media_link_1 ?? '' ) }}" class="form-control"
                                    placeholder="Enter social media link 1...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">social Media Link 2</label>
                                <input type="text" name="social_media_link_2" value="{{ old('', $member->social_media_link_2 ?? '' ) }}" class="form-control"
                                    placeholder="Enter social media link 2...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">social Media Link 3</label>
                                <input type="text" name="social_media_link_3" value="{{ old('', $member->social_media_link_3 ?? '' ) }}" class="form-control"
                                    placeholder="Enter social media link 3...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Previous Work</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter previous work.."
                                    name="previous_work"> {{ old('previous_work', $member->previous_work ?? '' ) }} </textarea>
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
