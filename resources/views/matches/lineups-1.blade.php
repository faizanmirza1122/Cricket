@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content site-content--center page" id="wrapper">
			<div class="container">
				<div class="page-heading page-heading--default text-small text-center w-100">
					<div class="page-heading__subtitle h5">
						<span class="color-primary">Saturday Jan 5th, 2018 /</span> Necromancers <span class="color-primary">vs</span> Raging Rhinos
					</div>
					<h1 class="page-heading__title h2">Xenowatch West League</h1>
				</div>

				<ul class="match-stats-links match-stats-links--main">
					<li>
						<a href="{{ route('matches-overview1') }}">
							<svg role="img" class="df-icon df-icon--overview">
								<use xlink:href="assets/img/necromancers.svg#overview"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ route('match-stats1') }}">
							<svg role="img" class="df-icon df-icon--stats">
								<use xlink:href="assets/img/necromancers.svg#stats"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="#" class="active">
							<svg role="img" class="df-icon df-icon--lineups">
								<use xlink:href="assets/img/necromancers.svg#lineups"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ route('matches-repaly') }}">
							<svg role="img" class="df-icon df-icon--replay">
								<use xlink:href="assets/img/necromancers.svg#replay"/>
							</svg>
						</a>
					</li>
				</ul>

				<div class="matches-tabs mt-sm-auto mb-sm-auto">
					<ul class="matches-tabs__navigation nav" role="tablist">
						<li class="nav-item">
							<a href="#tab-1" role="tab" data-toggle="tab" class="active">Game 01</a>
						</li>
						<li class="nav-item">
							<a href="#tab-2" role="tab" data-toggle="tab" class="">Game 02</a>
						</li>
						<li class="nav-item">
							<a href="#tab-3" role="tab" data-toggle="tab" class="">Game 03</a>
						</li>
					</ul>
					<div class="matches-tabs__content tab-content">
						<div class="match-lineups-container tab-pane fade show active" id="tab-1" role="tabpanel">
							<table class="matches-table lineups-table lineups-table--style-1">
								<thead>
									<tr>
										<th>Player</th>
										<th class="td-role">Role</th>
										<th class="td-hero td-d-none-sm td-center-left">Hero</th>
										<th class="td-hero td-d-none-sm td-center-right">Hero</th>
										<th class="td-role">Role</th>
										<th>Player</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-01-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">DaVikinger90</span>
													<span class="match-player__name">James Spiegel</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--offense">
												<use xlink:href="assets/img/necromancers.svg#offense"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Ragnark</td>
										<td class="td-d-none-sm td-center-right">Grimdeath</td>
										<td>
											<svg role="img" class="df-icon df-icon--offense">
												<use xlink:href="assets/img/necromancers.svg#offense"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">Lionel-Reese</span>
													<span class="match-player__name">Marcus Jhonson</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-02-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">JULIE_NOIRE</span>
													<span class="match-player__name">Julie Rodgers</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--offense">
												<use xlink:href="assets/img/necromancers.svg#offense"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Valholl</td>
										<td class="td-d-none-sm td-center-right">Twisterfist</td>
										<td>
											<svg role="img" class="df-icon df-icon--tank">
												<use xlink:href="assets/img/necromancers.svg#tank"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">NekoKrisser</span>
													<span class="match-player__name">Tess Griffin</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-03-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">G-Huntress</span>
													<span class="match-player__name">April Summers</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--support">
												<use xlink:href="assets/img/necromancers.svg#support"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Valkyrine</td>
										<td class="td-d-none-sm td-center-right">Gastion</td>
										<td>
											<svg role="img" class="df-icon df-icon--defense">
												<use xlink:href="assets/img/necromancers.svg#defense"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">Sam-X-99</span>
													<span class="match-player__name">Wesley McCoy</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-04-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">Crazzzy_80</span>
													<span class="match-player__name">Mark Jhonson</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--defense">
												<use xlink:href="assets/img/necromancers.svg#defense"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Jaxxy Reev</td>
										<td class="td-d-none-sm td-center-right">Duvida</td>
										<td>
											<svg role="img" class="df-icon df-icon--defense">
												<use xlink:href="assets/img/necromancers.svg#defense"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">SHARK_BULLET</span>
													<span class="match-player__name">Todd Gryson</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-05-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">FAYEDBEBOP</span>
													<span class="match-player__name">Sarah Stacy</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--tank">
												<use xlink:href="assets/img/necromancers.svg#tank"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Bloodshied</td>
										<td class="td-d-none-sm td-center-right">Piedad</td>
										<td>
											<svg role="img" class="df-icon df-icon--support">
												<use xlink:href="assets/img/necromancers.svg#support"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">The Destroy</span>
													<span class="match-player__name">Mary Parker</span>
												</figcaption>
											</figure>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="match-lineups-container tab-pane fade" id="tab-2" role="tabpanel">
							<table class="matches-table lineups-table lineups-table--style-1">
								<thead>
									<tr>
										<th>Player</th>
										<th class="td-role">Role</th>
										<th class="td-hero td-d-none-sm td-center-left">Hero</th>
										<th class="td-hero td-d-none-sm td-center-right">Hero</th>
										<th class="td-role">Role</th>
										<th>Player</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-01-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">DaVikinger90</span>
													<span class="match-player__name">James Spiegel</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--defense">
												<use xlink:href="assets/img/necromancers.svg#defense"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Bloodshied</td>
										<td class="td-d-none-sm td-center-right">Grimdeath</td>
										<td>
											<svg role="img" class="df-icon df-icon--defense">
												<use xlink:href="assets/img/necromancers.svg#defense"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">Lionel-Reese</span>
													<span class="match-player__name">Marcus Jhonson</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-02-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">JULIE_NOIRE</span>
													<span class="match-player__name">Julie Rodgers</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--tank">
												<use xlink:href="assets/img/necromancers.svg#tank"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Valkyrine</td>
										<td class="td-d-none-sm td-center-right">Piedad</td>
										<td>
											<svg role="img" class="df-icon df-icon--support">
												<use xlink:href="assets/img/necromancers.svg#support"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">NekoKrisser</span>
													<span class="match-player__name">Tess Griffin</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-03-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">G-Huntress</span>
													<span class="match-player__name">April Summers</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--tank">
												<use xlink:href="assets/img/necromancers.svg#tank"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Gastion</td>
										<td class="td-d-none-sm td-center-right">Valholl</td>
										<td>
											<svg role="img" class="df-icon df-icon--offense">
												<use xlink:href="assets/img/necromancers.svg#offense"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">Sam-X-99</span>
													<span class="match-player__name">Wesley McCoy</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-04-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">Crazzzy_80</span>
													<span class="match-player__name">Mark Jhonson</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--offense">
												<use xlink:href="assets/img/necromancers.svg#offense"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Duvida</td>
										<td class="td-d-none-sm td-center-right">Jaxxy Reev</td>
										<td>
											<svg role="img" class="df-icon df-icon--offense">
												<use xlink:href="assets/img/necromancers.svg#offense"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">SHARK_BULLET</span>
													<span class="match-player__name">Todd Gryson</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-05-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">FAYEDBEBOP</span>
													<span class="match-player__name">Sarah Stacy</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--support">
												<use xlink:href="assets/img/necromancers.svg#support"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Ragnark</td>
										<td class="td-d-none-sm td-center-right">Twisterfist</td>
										<td>
											<svg role="img" class="df-icon df-icon--tank">
												<use xlink:href="assets/img/necromancers.svg#tank"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">The Destroy</span>
													<span class="match-player__name">Mary Parker</span>
												</figcaption>
											</figure>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="match-lineups-container tab-pane fade" id="tab-3" role="tabpanel">
							<table class="matches-table lineups-table lineups-table--style-1">
								<thead>
									<tr>
										<th>Player</th>
										<th class="td-role">Role</th>
										<th class="td-hero td-d-none-sm td-center-left">Hero</th>
										<th class="td-hero td-d-none-sm td-center-right">Hero</th>
										<th class="td-role">Role</th>
										<th>Player</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-01-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">DaVikinger90</span>
													<span class="match-player__name">James Spiegel</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--defense">
												<use xlink:href="assets/img/necromancers.svg#defense"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Ragnark</td>
										<td class="td-d-none-sm td-center-right">Bloodshied</td>
										<td>
											<svg role="img" class="df-icon df-icon--offense">
												<use xlink:href="assets/img/necromancers.svg#offense"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">Lionel-Reese</span>
													<span class="match-player__name">Marcus Jhonson</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-02-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">JULIE_NOIRE</span>
													<span class="match-player__name">Julie Rodgers</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--offense">
												<use xlink:href="assets/img/necromancers.svg#offense"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Jaxxy Reev</td>
										<td class="td-d-none-sm td-center-right">Gastion</td>
										<td>
											<svg role="img" class="df-icon df-icon--tank">
												<use xlink:href="assets/img/necromancers.svg#tank"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">NekoKrisser</span>
													<span class="match-player__name">Tess Griffin</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-03-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">G-Huntress</span>
													<span class="match-player__name">April Summers</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--support">
												<use xlink:href="assets/img/necromancers.svg#support"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Duvida</td>
										<td class="td-d-none-sm td-center-right">Twisterfist</td>
										<td>
											<svg role="img" class="df-icon df-icon--defense">
												<use xlink:href="assets/img/necromancers.svg#defense"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">Sam-X-99</span>
													<span class="match-player__name">Wesley McCoy</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-04-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">Crazzzy_80</span>
													<span class="match-player__name">Mark Jhonson</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--defense">
												<use xlink:href="assets/img/necromancers.svg#defense"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Valholl</td>
										<td class="td-d-none-sm td-center-right">Valkyrine</td>
										<td>
											<svg role="img" class="df-icon df-icon--offense">
												<use xlink:href="assets/img/necromancers.svg#offense"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">SHARK_BULLET</span>
													<span class="match-player__name">Todd Gryson</span>
												</figcaption>
											</figure>
										</td>
									</tr>
									<tr>
										<td>
											<figure class="match-player team-1" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-05-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">FAYEDBEBOP</span>
													<span class="match-player__name">Sarah Stacy</span>
												</figcaption>
											</figure>
										</td>
										<td>
											<svg role="img" class="df-icon df-icon--tank">
												<use xlink:href="assets/img/necromancers.svg#tank"/>
											</svg>
										</td>
										<td class="td-d-none-sm td-center-left">Grimdeath</td>
										<td class="td-d-none-sm td-center-right">Piedad</td>
										<td>
											<svg role="img" class="df-icon df-icon--support">
												<use xlink:href="assets/img/necromancers.svg#support"/>
											</svg>
										</td>
										<td>
											<figure class="match-player team-2" role="group">
												<figure class="match-player__avatar">
														<img src="assets/img/samples/match-player-unknow-right-90x60.png" alt="">
												</figure>
												<figcaption>
													<span class="match-player__nickname">The Destroy</span>
													<span class="match-player__name">Mary Parker</span>
												</figcaption>
											</figure>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</main>


@endsection

