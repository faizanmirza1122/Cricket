@extends('admin.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Match</span></h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>
            </div>
            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
                        <a href="form_inputs.html" class="breadcrumb-item">Match</a>
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

                    <form action="{{ route('match.store') }}" method="post" enctype="multipart/form-data">
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
                            <legend class="text-uppercase font-size-sm font-weight-bold">Create Match</legend>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Match Type</label>
                                <select data-placeholder="Select Match Type" name="match_type_id"
                                    value="{{ old('match_type_id') }}" class="form-control">
                                    <option>--</option>
                                    @forelse ($matchTypes as $matchType)
                                        <option value="{{ $matchType->id }}">{{ $matchType->name }}</option>
                                    @empty
                                        <option> No Data Found</option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="form-group form-group-float d-flex">
                                <div class="col-md-5">
                                    <label class="d-block">Team 1</label>
                                    <select data-placeholder="Select Team 1" name="team_1" value="{{ old('team_1') }}"
                                        class="form-control">
                                        <option>--</option>
                                        @forelse ($team1 as $teamOne)
                                            <option value="{{ $teamOne->id }}">{{ $teamOne->title }}</option>
                                        @empty
                                            <option> No Data Found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="col-md-2 g text-center pt-4">
                                    <h2> VS</h2>
                                </div>
                                <div class="col-md-5">
                                    <label class="d-block">Team 2</label>
                                    <select data-placeholder="Select Team 2" name="team_2" value="{{ old('team_2') }}"
                                        class="form-control">
                                        <option>--</option>
                                        @forelse ($team2 as $teamTwo)
                                            <option value="{{ $teamTwo->id }}">{{ $teamTwo->title }}</option>
                                        @empty
                                            <option> No Data Found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>


                            <div class="form-group  form-group-float">
                                <label class="d-block">Match Date</label>
                                <input type="date" value="{{ old('date') }}" name="date" class="form-control"
                                    placeholder="Enter date...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">Start time</label>
                                <input type="time" value="{{ old('match_start_time') }}" name="match_start_time"
                                    class="form-control" placeholder="Enter match_start_time...">
                            </div>

                            <div class="form-group  form-group-float">
                                <label class="d-block">End time</label>
                                <input type="time" value="{{ old('match_end_time') }}" name="match_end_time"
                                    class="form-control" placeholder="Enter match_end_time...">
                            </div>

                            <fieldset>
                                <legend>Team 1 Information:</legend>

                                <div class="form-group col-md-12 form-group-float d-flex">
                                    <div class="col-md-3">
                                        <label class="d-block">Team 1 Score</label>
                                        <input type="number" value="{{ old('team_1_score') }}" name="team_1_score"
                                            class="form-control" placeholder="Enter Team 1 score...">
                                    </div>
                                    <div class="col-md-3">

                                        <div class="form-group  form-group-float">
                                            <label class="d-block">Team 1 Match Result</label>
                                            <select data-placeholder="Select Match Type" name="team_1_match_result"
                                                value="{{ old('team_1_match_result') }}" class="form-control">
                                                <option>--</option>
                                                <option value="win">Winner</option>
                                                <option value="loss">Losser</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Heading 1</label>
                                        <input type="text" value="{{ old('team_1_matchup_heading_1') }}"
                                            name="team_1_matchup_heading_1" class="form-control"
                                            placeholder="Enter team_1_matchup_heading_1...">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Title 1</label>
                                        <input type="text" value="{{ old('team_1_matchup_title_1') }}"
                                            name="team_1_matchup_title_1" class="form-control"
                                            placeholder="Enter team_1_matchup_title_1...">
                                    </div>


                                </div>
                                <div class="form-group col-md-12 form-group-float d-flex">
                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Heading 2</label>
                                        <input type="text" value="{{ old('team_1_matchup_heading_2') }}"
                                            name="team_1_matchup_heading_2" class="form-control"
                                            placeholder="Enter team_1_matchup_heading_2...">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Title 2</label>
                                        <input type="text" value="{{ old('team_1_matchup_title_2') }}"
                                            name="team_1_matchup_title_2" class="form-control"
                                            placeholder="Enter team_1_matchup_title_2...">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Heading 3</label>
                                        <input type="text" value="{{ old('team_1_matchup_heading_3') }}"
                                            name="team_1_matchup_heading_3" class="form-control"
                                            placeholder="Enter team_1_matchup_heading_3...">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Title 3</label>
                                        <input type="text" value="{{ old('team_1_matchup_title_3') }}"
                                            name="team_1_matchup_title_3" class="form-control"
                                            placeholder="Enter team_1_matchup_title_3...">
                                    </div>

                            </fieldset>

                            <fieldset>
                                <legend>Team 2 Information:</legend>

                                <div class="form-group col-md-12 form-group-float d-flex">
                                    <div class="col-md-3">
                                        <label class="d-block">Team 2 Score</label>
                                        <input type="number" value="{{ old('team_2_score') }}" name="team_2_score"
                                            class="form-control" placeholder="Enter Team 2 score...">
                                    </div>
                                    <div class="col-md-3">

                                        <div class="form-group  form-group-float">
                                            <label class="d-block">Team 2 Match Result</label>
                                            <select data-placeholder="Select Match Type" name="team_2_match_result"
                                                value="{{ old('team_2_match_result') }}" class="form-control">
                                                <option>--</option>
                                                <option value="win">Winner</option>
                                                <option value="loss">Losser</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Heading 1</label>
                                        <input type="text" value="{{ old('team_2_matchup_heading_1') }}"
                                            name="team_2_matchup_heading_1" class="form-control"
                                            placeholder="Enter team_2_matchup_heading_1...">
                                    </div>
                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Title 1</label>
                                        <input type="text" value="{{ old('team_2_matchup_title_1') }}"
                                            name="team_2_matchup_title_1" class="form-control"
                                            placeholder="Enter team_2_matchup_title_1...">
                                    </div>

                                </div>
                                <div class="form-group col-md-12 form-group-float d-flex">
                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Heading 2</label>
                                        <input type="text" value="{{ old('team_2_matchup_heading_2') }}"
                                            name="team_2_matchup_heading_2" class="form-control"
                                            placeholder="Enter team_2_matchup_heading_2...">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Title 2</label>
                                        <input type="text" value="{{ old('team_2_matchup_title_2') }}"
                                            name="team_2_matchup_title_2" class="form-control"
                                            placeholder="Enter team_2_matchup_title_2...">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Heading 3</label>
                                        <input type="text" value="{{ old('team_2_matchup_heading_3') }}"
                                            name="team_2_matchup_heading_3" class="form-control"
                                            placeholder="Enter team_2_matchup_heading_3...">
                                    </div>

                                    <div class="col-md-3">
                                        <label class="d-block">Team Matchup Title 3</label>
                                        <input type="text" value="{{ old('team_2_matchup_title_3') }}"
                                            name="team_2_matchup_title_3" class="form-control"
                                            placeholder="Enter team_2_matchup_title_3...">
                                    </div>

                            </fieldset>

                            <fieldset>
                                <legend>Additional Information:</legend>

                                <div class="form-group col-md-12 form-group-float d-flex">
                                    <div class="col-md-4">
                                        <label class="d-block">General Stats Map Heading </label>
                                        <input type="text" value="{{ old('general_stats_map_heading') }}"
                                            name="general_stats_map_heading" class="form-control"
                                            placeholder="Enter general_stats_map_heading...">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="d-block">General Stats Map Title </label>
                                        <input type="text" value="{{ old('general_stats_map_title') }}"
                                            name="general_stats_map_title" class="form-control"
                                            placeholder="Enter general_stats_map_title...">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="d-block">General Stats Mission Heading </label>
                                        <input type="text" value="{{ old('general_stats_mission_heading') }}"
                                            name="general_stats_mission_heading" class="form-control"
                                            placeholder="Enter general_stats_mission_heading...">
                                    </div>

                                </div>
                                <div class="form-group col-md-12 form-group-float d-flex">


                                    <div class="col-md-4">
                                        <label class="d-block">General Stats Mission Title </label>
                                        <input type="text" value="{{ old('general_stats_mission_title') }}"
                                            name="general_stats_mission_title" class="form-control"
                                            placeholder="Enter general_stats_mission_title...">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="d-block">General Duration Stats Heading</label>
                                        <input type="text" value="{{ old('general_stats_duration_heading') }}"
                                            name="general_stats_duration_heading" class="form-control"
                                            placeholder="Enter general_stats_duration_heading...">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="d-block">General Duration Stats Title</label>
                                        <input type="text" value="{{ old('general_stats_duration_title') }}"
                                            name="general_stats_duration_title" class="form-control"
                                            placeholder="Enter general_stats_duration_title...">
                                    </div>

                            </fieldset>
                            <div class="form-group  form-group-float">

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
