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
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Players</span></h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-news2 mr-2"></i> Dashboard</a>
                            <a href="{{ route('team.index') }}" class="breadcrumb-item">Team</a>
                            <a href="{{ route('team.players.index', $team) }}" class="breadcrumb-item">Player</a>
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
                        <a class="btn btn-primary float-right" href="{{ route('team.players.create', $team) }}"> Add
                            New Player</a>
                    </div>

                    <table class="table datatable-basic">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Player Name</th>
                                <th>Player Team</th>
                                <th>Player Role</th>
                                <th>Player Age</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ dd($players) }} --}}
                            @forelse($players as $key => $player)
                                <tr>

                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ asset('storage/' . $player->image) }}" width="100px"></td>
                                    <td>{{ $player->player_name }}</td>
                                    <td>{{ $player->player_team }}</td>
                                    <td>{{ $player->player_role }}</td>
                                    <td>{{ $player->player_age }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <form action="{{ route('team.players.destroy', [$team, $player->id]) }}"
                                                    method="POST">
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('team.players.edit', [$team, $player->id]) }}"
                                                            class="dropdown-item"><i class="icon-pencil7"></i> edit</a>
                                                        <a onclick="return confirm('Are you sure?')">
                                                            <button type="submit"
                                                                class="btn bg-transparent dropdown-item"><i
                                                                    class="icon-trash"></i> Delete</button>
                                                        </a>
                                                    </div>
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
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

