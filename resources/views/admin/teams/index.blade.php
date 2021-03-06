@extends('admin.layouts.app')
@section('content')
    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Teams</span></h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-news2 mr-2"></i> Dashboard</a>
                            <a href="{{ route('team.index') }}" class="breadcrumb-item">team</a>
                            <span class="breadcrumb-item active">Index</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                </div>
            </div>
            <div class="content">
                <!-- Page header -->
                <!-- /page header -->

                <!-- Basic datatable -->
                <div class="card">
                    <div class="card-body ">
                        <a class="btn btn-primary float-right" href="{{ route('team.create') }}"> Add
                            New Team</a>
                    </div>

                    <table class="table datatable-basic">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Subtitle</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($teams as $key => $team)
                                <tr>

                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ asset('public/storage/' . $team->sidebar_icon) }}" width="100px"></td>
                                    <td>{{ $team->title }}</td>
                                    <td>{{ $team->subtitle }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">

                                                    <a href="{{ route('team.players.index', $team->id) }}"
                                                        class="dropdown-item"><i class="icon-pencil7"></i> View Players</a>
                                                    <form action="{{ route('team.destroy', $team->id) }}" method="POST">
                                                        <a href="{{ route('team.edit', $team->id) }}"
                                                            class="dropdown-item"><i class="icon-pencil7"></i> edit</a>
                                                        <a onclick="return confirm('Are you sure?')">
                                                            <button type="submit"
                                                                class="btn bg-transparent dropdown-item"><i
                                                                    class="icon-trash"></i> Delete</button>
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <h1 class="text-center ">No Data Found </h1>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- /basic datatable -->



            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->
@endsection
