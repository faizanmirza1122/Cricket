@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content site-content--center page" id="wrapper">
			<div class="container container--large">
				<div class="page-heading page-heading--default">
					<div class="page-heading__subtitle h5 color-primary">BNWESPORTS</div>
					<h1 class="page-heading__title h2">Upcoming Matches</h1>
				</div>
				{{-- <div class="matches-filter">
					<label class="matches-filter__label">Team filter</label>
					<select class="cs-select">
						<option value="">All Teams</option>
						<option value="" selected>Xenowatch</option>
						<option value="">League of Heroes</option>
						<option value="">Striker Go</option>
						<option value="">Fortdaite</option>
					</select>
				</div> --}}
				<div class="table-responsive mt-sm-auto mb-sm-auto">
                    <table class="table matches-table upcoming-table">
                        <tbody>
                            @forelse ($upcomingMatches as $match)
                            <tr>
                                {{-- {{ dd($match->team1[0]->title) }} --}}

								<td class="upcoming-table__date">
									<span>{{ date('d', strtotime($match->date)) }}</span>{{ date('F', strtotime($match->date)) }}
								</td>
                                <td class="upcoming-table__team">
									<figure  role="group">
										<figure class="match-team-logo match-team-logo--team-4" role="group">
											<img src="{{ asset('public/storage/' . $match->team2[0]->icon ?? '') }}" srcset="assets/img/samples/logo-panthers-42@2x.png 2x" alt="Ice Panthers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">{{ $match->team2[0]->title ?? '' }}</div>
												<div class="match-team__country ">{{ $match->team2[0]->country ?? '' }}</div>
										</figcaption>
									</figure>
								</td>
                                <td><span class="upcoming-table__team-vs">vs</span></td>
								<td class="upcoming-table__team">
									<figure  role="group">
										<figure class="match-team-logo match-team-logo--team-4" role="group">
											<img src="assets/img/samples/logo-panthers-42.png" srcset="assets/img/samples/logo-panthers-42@2x.png 2x" alt="Ice Panthers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">{{ $match->team1[0]->title ?? '' }}</div>
												<div class="match-team__country ">{{ $match->team1[0]->country ?? '' }}</div>
										</figcaption>
									</figure>
								</td>
								<td>
									{{ ($match->matchType->name ?? '') }}
									<span class="upcoming-table__label"> {{ ($match->matchType->type ?? '') }}</span>
								</td>

								<td>
									<?php $time = $match->match_start_time ?>
                                    {{\Carbon\Carbon::createFromFormat('H:i:s',$time)->format('h:i')}}
									<span class="upcoming-table__label">Time</span>
								</td>
							</tr>
                            @empty
                                <h1 class="text-center"> No Data Found</h1>
                            @endforelse

						</tbody>
					</table>
				</div>
			</div>
		</main>

@endsection

