@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content site-content--center page" id="wrapper">
			<div class="container container--large">
				<div class="page-heading page-heading--default">
					<div class="page-heading__subtitle h5 color-primary">BNW ESPORTS</div>
					<h1 class="page-heading__title h2">Standings</h1>
				</div>
				{{-- <div class="matches-filter">
					<label class="matches-filter__label">Competition filter</label>
					<select class="cs-select">
						<option value="" selected>Xenowatch West League</option>
						<option value="">Xenowatch East League</option>
						<option value="">Xenowatch USA Cup</option>
					</select>
				</div> --}}
				<div class="table-responsive mt-sm-auto mb-sm-auto">
					<table class="table matches-table standings-table">
						<thead>
							<tr>
								<th>Pos</th>
								<th>Team</th>
								<th>Wins</th>
								<th>Losses</th>
								<th>Record</th>
							</tr>
						</thead>
						<tbody>
                            @forelse ($standings as $stand)
							<tr>
								<td>01</td>
								<td class="standings-table__team">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-4" role="group">
											<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="Ice Panthers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name"> {{ ($stand->team1->title ?? '' ) }}</div>
												<div class="match-team__country ">{{ ($stand->team1->country ?? '' ) }}</div>
										</figcaption>
									</figure>
								</td>
								<td class="standings-table__wins">{{ ($stand->team1->team_1_match_result ?? '' ) }}</td>
								<td class="standings-table__losses">{{ ($stand->team1->team_2_match_result ?? '' ) }}</td>

								<td>9:1</td>
							</tr>

                            @empty
                            <h1 class="text-center"> No Data Found</h1>
                            @endforelse

							{{-- <tr>
								<td>02</td>
								<td class="standings-table__team">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Necromancers</div>
												<div class="match-team__country ">United States</div>
										</figcaption>
									</figure>
								</td>
								<td class="standings-table__wins">15</td>
								<td class="standings-table__losses">5</td>
								<td>58</td>
								<td>36</td>
								<td>21</td>
								<td>7.5</td>
								<td>68.9k</td>
								<td>96.4k</td>
								<td><span class="standings-table__streak--wins">W</span> 4</td>
								<td>7:3</td>
							</tr>

							<tr>
								<td>03</td>
								<td class="standings-table__team">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-2" role="group">
											<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="Raging Rhinos Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Raging Rhinos</div>
												<div class="match-team__country ">Japan</div>
										</figcaption>
									</figure>
								</td>
								<td class="standings-table__wins">13</td>
								<td class="standings-table__losses">7</td>
								<td>52</td>
								<td>42</td>
								<td>22</td>
								<td>6.4</td>
								<td>60.1k</td>
								<td>77.5k</td>
								<td><span class="standings-table__streak--losses">L</span> 2</td>
								<td>6:2</td>
							</tr>

							<tr>
								<td>04</td>
								<td class="standings-table__team">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-5" role="group">
											<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="Fierce Eagles Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Fierce Eagles</div>
												<div class="match-team__country ">France</div>
										</figcaption>
									</figure>
								</td>
								<td class="standings-table__wins">10</td>
								<td class="standings-table__losses">12</td>
								<td>49</td>
								<td>40</td>
								<td>14</td>
								<td>6.0</td>
								<td>52.6k</td>
								<td>64.6k</td>
								<td><span class="standings-table__streak--wins">W</span> 2</td>
								<td>5:4</td>
							</tr>

							<tr>
								<td>05</td>
								<td class="standings-table__team">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-3" role="group">
											<img src="assets/img/samples/logo-bulls-30.png" srcset="assets/img/samples/logo-bulls-30@2x.png 2x" alt="Angry Bulls Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Angry Bulls</div>
												<div class="match-team__country ">Spain</div>
										</figcaption>
									</figure>
								</td>
								<td class="standings-table__wins">9</td>
								<td class="standings-table__losses">13</td>
								<td>33</td>
								<td>51</td>
								<td>11</td>
								<td>4.7</td>
								<td>51.9k</td>
								<td>50.8k</td>
								<td><span class="standings-table__streak--losses">L</span> 3</td>
								<td>4:2</td>
							</tr> --}}
						</tbody>
					</table>
				</div>
			</div>
		</main>

@endsection

