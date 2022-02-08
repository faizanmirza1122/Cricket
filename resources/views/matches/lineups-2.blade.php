@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->

        <main class="site-content site-content--center page" id="wrapper">
			<div class="container">
				<div class="page-heading page-heading--default text-small text-center w-100">
					<div class="page-heading__subtitle h5">
						<span class="color-primary">Friday Jan 4th, 2018 /</span> Necromancers <span class="color-primary">vs</span> Ice Panthers
					</div>
					<h1 class="page-heading__title h2">League of Heroes World Cup</h1>
				</div>

				<ul class="match-stats-links match-stats-links--main match-stats-links--color-light">
					<li>
						<a href="./matches-overview-1.html">
							<svg role="img" class="df-icon df-icon--overview">
								<use xlink:href="assets/img/necromancers.svg#overview"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="./matches-stats-1.html">
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
						<a href="./matches-replay.html">
							<svg role="img" class="df-icon df-icon--replay">
								<use xlink:href="assets/img/necromancers.svg#replay"/>
							</svg>
						</a>
					</li>
				</ul>

				<div class="matches-tabs mt-sm-auto mb-sm-auto">
					<ul class="matches-tabs__navigation matches-tabs__navigation--color-light nav" role="tablist">
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
							<div class="table-responsive">
								<table class="matches-table lineups-table lineups-table--style-2">
									<thead>
										<tr>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-1" role="group">
														<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Necromancers</div>
															<div class="match-team__result team-blue">team 01</div>
													</figcaption>
												</figure>
											</th>
											<th class="td-kda">K / D / A</th>
											<th class="td-strk">STRK</th>
											<th class="td-gold">Gold</th>
											<th class="td-cs td-center-left">CS</th>
											<th class="td-cs td-center-right">CS</th>
											<th class="td-gold">Gold</th>
											<th class="td-strk">STRK</th>
											<th class="td-kda">K / D / A</th>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-4" role="group">
														<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="Ice Panthers Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Ice Panthers</div>
															<div class="match-team__result team-red">team 02</div>
													</figcaption>
												</figure>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-01.jpg" alt="">
																<img src="assets/img/samples/match-skill-02.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">Mid | Solo</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">9 </span>/
												<span class="color-danger">4 </span>/
												<span class="color-warning">8</span>
											</td>
											<td class="team-blue">12</td>
											<td class="team-blue">12.934</td>
											<td class="td-center-left team-blue">183</td>
											<td class="td-center-right team-red">211</td>
											<td class="team-red">11.937</td>
											<td class="team-red">6</td>
											<td class="team-red">
												<span class="color-primary">7 </span>/
												<span class="color-danger">5 </span>/
												<span class="color-warning">3</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-06.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-08.jpg" alt="">
																<img src="assets/img/samples/match-skill-04.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">Pixelus.GD</span>
														<span class="match-player__name">Bot | Carry</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-02.jpg" alt="">
															<figcaption class="match-player__level">14</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-03.jpg" alt="">
																<img src="assets/img/samples/match-skill-04.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">JULIE_NOIRE</span>
														<span class="match-player__name">Bot | Support</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">1 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">21</span>
											</td>
											<td class="team-blue">8</td>
											<td class="team-blue">9.573</td>
											<td class="td-center-left team-blue">97</td>
											<td class="td-center-right team-red">57</td>
											<td class="team-red">8.913</td>
											<td class="team-red">8</td>
											<td class="team-red">
												<span class="color-primary">2 </span>/
												<span class="color-danger">9 </span>/
												<span class="color-warning">4</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-07.jpg" alt="">
															<figcaption class="match-player__level">12</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-05.jpg" alt="">
																<img src="assets/img/samples/match-skill-07.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">Striker15</span>
														<span class="match-player__name">Bot | Support</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-03.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-05.jpg" alt="">
																<img src="assets/img/samples/match-skill-06.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">G-Huntress</span>
														<span class="match-player__name">Bot | Carry</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">11 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">10</span>
											</td>
											<td class="team-blue">12</td>
											<td class="team-blue">16.109</td>
											<td class="td-center-left team-blue">267</td>
											<td class="td-center-right team-red">178</td>
											<td class="team-red">11.148</td>
											<td class="team-red">10</td>
											<td class="team-red">
												<span class="color-primary">3 </span>/
												<span class="color-danger">9 </span>/
												<span class="color-warning">9</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
															<figcaption class="match-player__level">14</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-10.jpg" alt="">
																<img src="assets/img/samples/match-skill-02.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">ARROWHEAD</span>
														<span class="match-player__name">Top | Solo</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-04.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-07.jpg" alt="">
																<img src="assets/img/samples/match-skill-08.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">Crazzzy_80</span>
														<span class="match-player__name">Top | Solo</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">8 </span>/
												<span class="color-danger">5 </span>/
												<span class="color-warning">17</span>
											</td>
											<td class="team-blue">9</td>
											<td class="team-blue">12.840</td>
											<td class="td-center-left team-blue">174</td>
											<td class="td-center-right team-red">207</td>
											<td class="team-red">13.218</td>
											<td class="team-red">8</td>
											<td class="team-red">
												<span class="color-primary">8 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">7</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-09.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-01.jpg" alt="">
																<img src="assets/img/samples/match-skill-09.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">TheLightning</span>
														<span class="match-player__name">Mid | Solo</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-05.jpg" alt="">
															<figcaption class="match-player__level">14</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-09.jpg" alt="">
																<img src="assets/img/samples/match-skill-10.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">FAYEDBEBOP</span>
														<span class="match-player__name">Jungle</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">7 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">14</span>
											</td>
											<td class="team-blue">5</td>
											<td class="team-blue">11.768</td>
											<td class="td-center-left team-blue">111</td>
											<td class="td-center-right team-red">156</td>
											<td class="team-red">11.189</td>
											<td class="team-red">9</td>
											<td class="team-red">
												<span class="color-primary">7 </span>/
												<span class="color-danger">7 </span>/
												<span class="color-warning">9</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
															<figcaption class="match-player__level">13</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-06.jpg" alt="">
																<img src="assets/img/samples/match-skill-03.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">Jungle</span>
													</figcaption>
												</figure>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="match-lineups-container tab-pane fade" id="tab-2" role="tabpanel">
							<div class="table-responsive">
								<table class="matches-table lineups-table lineups-table--style-2">
									<thead>
										<tr>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-1" role="group">
														<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Necromancers</div>
															<div class="match-team__result team-blue">team 01</div>
													</figcaption>
												</figure>
											</th>
											<th class="td-kda">K / D / A</th>
											<th class="td-strk">STRK</th>
											<th class="td-gold">Gold</th>
											<th class="td-cs td-center-left">CS</th>
											<th class="td-cs td-center-right">CS</th>
											<th class="td-gold">Gold</th>
											<th class="td-strk">STRK</th>
											<th class="td-kda">K / D / A</th>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-4" role="group">
														<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="Ice Panthers Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Ice Panthers</div>
															<div class="match-team__result team-red">team 02</div>
													</figcaption>
												</figure>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-02.jpg" alt="">
															<figcaption class="match-player__level">14</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-03.jpg" alt="">
																<img src="assets/img/samples/match-skill-04.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">JULIE_NOIRE</span>
														<span class="match-player__name">Bot | Support</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">1 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">21</span>
											</td>
											<td class="team-blue">8</td>
											<td class="team-blue">9.573</td>
											<td class="td-center-left team-blue">97</td>
											<td class="td-center-right team-red">57</td>
											<td class="team-red">8.913</td>
											<td class="team-red">8</td>
											<td class="team-red">
												<span class="color-primary">2 </span>/
												<span class="color-danger">9 </span>/
												<span class="color-warning">4</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-07.jpg" alt="">
															<figcaption class="match-player__level">12</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-05.jpg" alt="">
																<img src="assets/img/samples/match-skill-07.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">Striker15</span>
														<span class="match-player__name">Bot | Support</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-01.jpg" alt="">
																<img src="assets/img/samples/match-skill-02.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">Mid | Solo</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">9 </span>/
												<span class="color-danger">4 </span>/
												<span class="color-warning">8</span>
											</td>
											<td class="team-blue">12</td>
											<td class="team-blue">12.934</td>
											<td class="td-center-left team-blue">183</td>
											<td class="td-center-right team-red">211</td>
											<td class="team-red">11.937</td>
											<td class="team-red">6</td>
											<td class="team-red">
												<span class="color-primary">7 </span>/
												<span class="color-danger">5 </span>/
												<span class="color-warning">3</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-06.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-08.jpg" alt="">
																<img src="assets/img/samples/match-skill-04.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">Pixelus.GD</span>
														<span class="match-player__name">Bot | Carry</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-04.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-07.jpg" alt="">
																<img src="assets/img/samples/match-skill-08.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">Crazzzy_80</span>
														<span class="match-player__name">Top | Solo</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">8 </span>/
												<span class="color-danger">5 </span>/
												<span class="color-warning">17</span>
											</td>
											<td class="team-blue">9</td>
											<td class="team-blue">12.840</td>
											<td class="td-center-left team-blue">174</td>
											<td class="td-center-right team-red">207</td>
											<td class="team-red">13.218</td>
											<td class="team-red">8</td>
											<td class="team-red">
												<span class="color-primary">8 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">7</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-09.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-01.jpg" alt="">
																<img src="assets/img/samples/match-skill-09.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">TheLightning</span>
														<span class="match-player__name">Mid | Solo</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-05.jpg" alt="">
															<figcaption class="match-player__level">14</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-09.jpg" alt="">
																<img src="assets/img/samples/match-skill-10.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">FAYEDBEBOP</span>
														<span class="match-player__name">Jungle</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">7 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">14</span>
											</td>
											<td class="team-blue">5</td>
											<td class="team-blue">11.768</td>
											<td class="td-center-left team-blue">111</td>
											<td class="td-center-right team-red">156</td>
											<td class="team-red">11.189</td>
											<td class="team-red">9</td>
											<td class="team-red">
												<span class="color-primary">7 </span>/
												<span class="color-danger">7 </span>/
												<span class="color-warning">9</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
															<figcaption class="match-player__level">13</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-06.jpg" alt="">
																<img src="assets/img/samples/match-skill-03.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">Jungle</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-03.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-05.jpg" alt="">
																<img src="assets/img/samples/match-skill-06.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">G-Huntress</span>
														<span class="match-player__name">Bot | Carry</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">11 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">10</span>
											</td>
											<td class="team-blue">12</td>
											<td class="team-blue">16.109</td>
											<td class="td-center-left team-blue">267</td>
											<td class="td-center-right team-red">178</td>
											<td class="team-red">11.148</td>
											<td class="team-red">10</td>
											<td class="team-red">
												<span class="color-primary">3 </span>/
												<span class="color-danger">9 </span>/
												<span class="color-warning">9</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
															<figcaption class="match-player__level">14</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-10.jpg" alt="">
																<img src="assets/img/samples/match-skill-02.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">ARROWHEAD</span>
														<span class="match-player__name">Top | Solo</span>
													</figcaption>
												</figure>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<div class="match-lineups-container tab-pane fade" id="tab-3" role="tabpanel">
							<div class="table-responsive">
								<table class="matches-table lineups-table lineups-table--style-2">
									<thead>
										<tr>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-1" role="group">
														<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Necromancers</div>
															<div class="match-team__result team-blue">team 01</div>
													</figcaption>
												</figure>
											</th>
											<th class="td-kda">K / D / A</th>
											<th class="td-strk">STRK</th>
											<th class="td-gold">Gold</th>
											<th class="td-cs td-center-left">CS</th>
											<th class="td-cs td-center-right">CS</th>
											<th class="td-gold">Gold</th>
											<th class="td-strk">STRK</th>
											<th class="td-kda">K / D / A</th>
											<th class="td-player">
												<figure class="match-team" role="group">
													<figure class="match-team-logo match-team-logo--team-4" role="group">
														<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="Ice Panthers Logo">
													</figure>
													<figcaption>
														<div class="match-team__name">Ice Panthers</div>
															<div class="match-team__result team-red">team 02</div>
													</figcaption>
												</figure>
											</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-03.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-05.jpg" alt="">
																<img src="assets/img/samples/match-skill-06.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">G-Huntress</span>
														<span class="match-player__name">Bot | Carry</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">11 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">10</span>
											</td>
											<td class="team-blue">12</td>
											<td class="team-blue">16.109</td>
											<td class="td-center-left team-blue">267</td>
											<td class="td-center-right team-red">178</td>
											<td class="team-red">11.148</td>
											<td class="team-red">10</td>
											<td class="team-red">
												<span class="color-primary">3 </span>/
												<span class="color-danger">9 </span>/
												<span class="color-warning">9</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-08.jpg" alt="">
															<figcaption class="match-player__level">14</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-10.jpg" alt="">
																<img src="assets/img/samples/match-skill-02.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">ARROWHEAD</span>
														<span class="match-player__name">Top | Solo</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-04.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-07.jpg" alt="">
																<img src="assets/img/samples/match-skill-08.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">Crazzzy_80</span>
														<span class="match-player__name">Top | Solo</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">8 </span>/
												<span class="color-danger">5 </span>/
												<span class="color-warning">17</span>
											</td>
											<td class="team-blue">9</td>
											<td class="team-blue">12.840</td>
											<td class="td-center-left team-blue">174</td>
											<td class="td-center-right team-red">207</td>
											<td class="team-red">13.218</td>
											<td class="team-red">8</td>
											<td class="team-red">
												<span class="color-primary">8 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">7</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-09.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-01.jpg" alt="">
																<img src="assets/img/samples/match-skill-09.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">TheLightning</span>
														<span class="match-player__name">Mid | Solo</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-05.jpg" alt="">
															<figcaption class="match-player__level">14</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-09.jpg" alt="">
																<img src="assets/img/samples/match-skill-10.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">FAYEDBEBOP</span>
														<span class="match-player__name">Jungle</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">7 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">14</span>
											</td>
											<td class="team-blue">5</td>
											<td class="team-blue">11.768</td>
											<td class="td-center-left team-blue">111</td>
											<td class="td-center-right team-red">156</td>
											<td class="team-red">11.189</td>
											<td class="team-red">9</td>
											<td class="team-red">
												<span class="color-primary">7 </span>/
												<span class="color-danger">7 </span>/
												<span class="color-warning">9</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-10.jpg" alt="">
															<figcaption class="match-player__level">13</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-06.jpg" alt="">
																<img src="assets/img/samples/match-skill-03.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">PXSlasher</span>
														<span class="match-player__name">Jungle</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-02.jpg" alt="">
															<figcaption class="match-player__level">14</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-03.jpg" alt="">
																<img src="assets/img/samples/match-skill-04.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">JULIE_NOIRE</span>
														<span class="match-player__name">Bot | Support</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">1 </span>/
												<span class="color-danger">6 </span>/
												<span class="color-warning">21</span>
											</td>
											<td class="team-blue">8</td>
											<td class="team-blue">9.573</td>
											<td class="td-center-left team-blue">97</td>
											<td class="td-center-right team-red">57</td>
											<td class="team-red">8.913</td>
											<td class="team-red">8</td>
											<td class="team-red">
												<span class="color-primary">2 </span>/
												<span class="color-danger">9 </span>/
												<span class="color-warning">4</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-07.jpg" alt="">
															<figcaption class="match-player__level">12</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-05.jpg" alt="">
																<img src="assets/img/samples/match-skill-07.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">Striker15</span>
														<span class="match-player__name">Bot | Support</span>
													</figcaption>
												</figure>
											</td>
										</tr>

										<tr>
											<td class="team-blue">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-01.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-01.jpg" alt="">
																<img src="assets/img/samples/match-skill-02.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">DaVikinger90</span>
														<span class="match-player__name">Mid | Solo</span>
													</figcaption>
												</figure>
											</td>
											<td class="team-blue">
												<span class="color-primary">9 </span>/
												<span class="color-danger">4 </span>/
												<span class="color-warning">8</span>
											</td>
											<td class="team-blue">12</td>
											<td class="team-blue">12.934</td>
											<td class="td-center-left team-blue">183</td>
											<td class="td-center-right team-red">211</td>
											<td class="team-red">11.937</td>
											<td class="team-red">6</td>
											<td class="team-red">
												<span class="color-primary">7 </span>/
												<span class="color-danger">5 </span>/
												<span class="color-warning">3</span>
											</td>
											<td class="team-red">
												<figure class="match-player  match-player--small" role="group">
													<figure class="match-player__avatar">
															<img src="assets/img/samples/match-hero-avatar-06.jpg" alt="">
															<figcaption class="match-player__level">16</figcaption>
													</figure>
														<figure class="match-player__skills">
															<img src="assets/img/samples/match-skill-08.jpg" alt="">
																<img src="assets/img/samples/match-skill-04.jpg" alt="">
														</figure>
													<figcaption>
														<span class="match-player__nickname">Pixelus.GD</span>
														<span class="match-player__name">Bot | Carry</span>
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
			</div>
		</main>
@endsection

