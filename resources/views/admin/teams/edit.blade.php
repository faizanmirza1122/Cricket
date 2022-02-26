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

                    <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Edit Team</legend>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Title</label>
                                <input type="text" name="title" value="{{ old('title', $team->title ?? '' ) }}" class="form-control"
                                    placeholder="Enter title...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Subtitle</label>
                                <input type="text" name="subtitle" value="{{ old('subtitle', $team->subtitle ?? '' ) }}" class="form-control"
                                    placeholder="Enter subtitle...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Country</label>
                                <input type="text" value="{{ old('country', $team->country ?? '' ) }}" name="country" class="form-control"
                                    placeholder="Enter country...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Since</label>
                                <input type="date" value="{{ old('since', $team->since ?? '') }}" name="since" class="form-control"
                                    placeholder="Enter since...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Prize Earned</label>
                                <input type="text" value="{{ old('prize_earned', $team->prize_earned ?? '') }}" name="prize_earned" class="form-control"
                                    placeholder="Enter prize_earned...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Description</label>
                                <textarea rows="3" cols="3" class="form-control" placeholder="Description.."
                                    name="description">{{ old('description', $team->description ?? '') }}</textarea>
                            </div>

                            <div class="form-group form-group-float">
                                @if ($team)
                                    <img src="{{ asset('storage/' . $team->icon) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Icon</label>
                                <input type="file" class="form-control" name="icon" id="icon">
                            </div>

                            <div class="form-group form-group-float">
                                @if ($team)
                                    <img src="{{ asset('storage/' . $team->image) }}" width="100px">
                                @else
                                @endif
                                <label class="d-block">Image</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Final Score</label>
                                <input type="text" name="final_score" value="{{ old('final_score', $team->final_score ?? '' ) }}" class="form-control"
                                    placeholder="Enter final_score...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Match Result</label>
                                <select data-placeholder="Select Match Result"  name="match_result" class="form-control" >
                                    <option >--</option>
                                    <option value="win"  {{ $team->match_result == 'win' ? 'selected' : '' }}>Winner</option>
                                    <option value="loss"  {{ $team->match_result == 'loss' ? 'selected' : '' }}>Losser</option>
                                </select>
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Team Matchup Heading 1</label>
                                <input type="text" value="{{ old('team_matchup_heading_1', $team->team_matchup_heading_1 ?? '' ) }}" name="team_matchup_heading_1" class="form-control"
                                    placeholder="Enter team_matchup_heading_1...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Team Matchup Title 1</label>
                                <input type="text" value="{{ old('team_matchup_title_1', $team->team_matchup_title_1 ?? '' ) }}" name="team_matchup_title_1" class="form-control"
                                    placeholder="Enter final team_matchup_title_1...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Team Matchup Heading 2</label>
                                <input type="text" value="{{ old('team_matchup_heading_2', $team->team_matchup_heading_2 ?? '' ) }}" name="team_matchup_heading_2" class="form-control"
                                    placeholder="Enter team_matchup_heading_2...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Team Matchup Title 2</label>
                                <input type="text" value="{{ old('team_matchup_title_2', $team->team_matchup_title_2 ?? '' ) }}" name="team_matchup_title_2" class="form-control"
                                    placeholder="Enter final team_matchup_title_2...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Team Matchup Heading 3</label>
                                <input type="text" value="{{ old('team_matchup_heading_3', $team->team_matchup_heading_3 ?? '' ) }}" name="team_matchup_heading_3" class="form-control"
                                    placeholder="Enter team_matchup_heading_3...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Team Matchup Title 3</label>
                                <input type="text" value="{{ old('team_matchup_heading_3', $team->team_matchup_heading_3 ?? '' ) }}" name="team_matchup_title_3" class="form-control"
                                    placeholder="Enter final team_matchup_title_3...">
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
