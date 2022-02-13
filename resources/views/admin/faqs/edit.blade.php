@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">FAQ's</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="admin/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="{{ route('faqs.index') }}" class="breadcrumb-item">FAQ's</a>
                        <a href="form_inputs.html" class="breadcrumb-item">edit</a>
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

                    <form action="{{ route('faqs.update', $faqs->id) }}" method="post">
                        @csrf
                        @method('PUT')
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Edit FAQ'S</legend>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Question</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter Question"
                                    name="question">{{ $faqs->question ?? '' }}</textarea>
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Answer</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Enter Answer"
                                    name="answer">{{ $faqs->answer ?? '' }}</textarea>
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
