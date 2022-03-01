@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Edit Team</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="{{ route('team.index') }}" class="breadcrumb-item">Team</a>
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
                    {{-- {{ dd($team, $pl   ayer) }} --}}
                    <form action="{{ route('team.players.update', [$team ,$player->id]) }}" method="POST" enctype="multipart/form-data">
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Create Team</legend>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Name</label>
                                <input type="text" value="{{ old('player_name', $player->player_name ?? '' ) }}" name="player_name" class="form-control"
                                    placeholder="Enter player_name...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Age</label>
                                <input type="number" value="{{ old('player_age', $player->player_age ?? '' ) }}" name="player_age" class="form-control"
                                    placeholder="Enter player_age...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Since</label>
                                <input type="date" value="{{ old('player_since', $player->player_since ?? '' ) }}" name="player_since" class="form-control"
                                    placeholder="Enter player_since...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Country</label>
                                <input type="text" value="{{ old('player_born_country', $player->player_born_country ?? '' ) }}" name="player_born_country" class="form-control"
                                    placeholder="Enter player_born_country...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Team</label>
                                <input type="text" value="{{ old('player_team', $player->player_team ?? '' ) }}" name="player_team" class="form-control"
                                    placeholder="Enter player_team...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Role</label>
                                <input type="text" value="{{ old('player_role', $player->player_role ?? '' ) }}" name="player_role" class="form-control"
                                    placeholder="Enter player_role...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Description</label>
                                <input type="text" value="{{ old('player_description', $player->player_description ?? '' ) }}" name="player_description" class="form-control"
                                    placeholder="Enter player_description...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Social Link 1 </label>
                                <input type="text" value="{{ old('player_social_link_1', $player->player_social_link_1 ?? '' ) }}" name="player_social_link_1" class="form-control"
                                    placeholder="Enter player_social_link_1...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Social Link 2 </label>
                                <input type="text" value="{{ old('player_social_link_2', $player->player_social_link_2 ?? '' ) }}" name="player_social_link_2" class="form-control"
                                    placeholder="Enter player_social_link_2...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Social Link 3 </label>
                                <input type="text" value="{{ old('player_social_link_3', $player->player_social_link_3 ?? '' ) }}" name="player_social_link_3" class="form-control"
                                    placeholder="Enter player_social_link_3...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Player Social Link 4 </label>
                                <input type="text" value="{{ old('player_social_link_4', $player->player_social_link_4 ?? '' ) }}" name="player_social_link_4" class="form-control"
                                    placeholder="Enter player_social_link_4...">
                            </div>

                            <div class="form-group form-group-float">
                                @if ($player->image)
                                    <img src="{{ asset('public/storage/' . $player->image) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Image</label>
                                <input type="file" class="form-control" name="image" id="image">
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
