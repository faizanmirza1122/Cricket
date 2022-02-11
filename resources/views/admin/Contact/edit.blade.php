@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Contact</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="#" class="breadcrumb-item">Contact</a>
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

                    <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Edit About</legend>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <div class="form-group form-group-float">
                                <label class="d-block">Map Link</label>
                                <input type="text" name="map" value="{{ old('map', $contact->map ?? '') }}" class="form-control"
                                    placeholder="Enter your map...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Title</label>
                                <input type="text" name="title" value="{{ old('title', $contact->title ?? '') }}" class="form-control"
                                    placeholder="Enter your title...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Contact Info Text</label>
                                <input type="text" name="contact_info" value="{{ old('contact_info', $contact->contact_info ?? '') }}" class="form-control"
                                    placeholder="Enter your contact_info...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"
                                    name="description">{{ $contact->description ?? '' }}</textarea>
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">General Inquries Title</label>
                                <input type="text" name="general_inquries_title" value="{{ old('general_inquries_title', $contact->general_inquries_title ?? '') }}" class="form-control"
                                    placeholder="Enter your general_inquries_title...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">General Inquries Email</label>
                                <input type="email" name="general_inquries_email" value="{{ old('general_inquries_email', $contact->general_inquries_email ?? '') }}" class="form-control"
                                    placeholder="Enter your general inquries email...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Social Link 1</label>
                                <input type="text" name="social_link_1" value="{{ old('social_link_1', $contact->social_link_1 ?? '') }}" class="form-control"
                                    placeholder="Enter your social links 1...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Social Link 2</label>
                                <input type="text" name="social_link_2" value="{{ old('social_link_2', $contact->social_link_2 ?? '') }}" class="form-control"
                                    placeholder="Enter your social links 2...">
                            </div>

                            <div class="form-group form-group-float">
                                <label class="d-block">Social Link 3</label>
                                <input type="text" name="social_link_3" value="{{ old('social_link_3', $contact->social_link_3 ?? '') }}" class="form-control"
                                    placeholder="Enter your social links 3...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Join Team Title</label>
                                <input type="text" name="join_team_title" value="{{ old('join_team_title', $contact->join_team_title ?? '') }}"
                                    class="form-control" placeholder="Enter your join team title...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Join Team Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"
                                name="join_team_description">{{ $contact->join_team_description ?? '' }}</textarea>
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Be Our partner Text</label>
                                <input type="text" name="be_our_partner_text" value="{{ old('be_our_partner_text', $contact->be_our_partner_text ?? '') }}"
                                    class="form-control" placeholder="Enter your join team title...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Be Our partner Email</label>
                                <input type="email" name="be_our_partner_email" value="{{ old('be_our_partner_email', $contact->be_our_partner_email ?? '') }}"
                                    class="form-control" placeholder="Enter your join team title...">
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
