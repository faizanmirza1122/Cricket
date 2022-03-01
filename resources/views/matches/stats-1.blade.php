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
						<a href="#" class="active">
							<svg role="img" class="df-icon df-icon--stats">
								<use xlink:href="assets/img/necromancers.svg#stats"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="{{ route('matches-lineups1') }}">
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
						{{-- <li class="nav-item">
							<a href="#tab-2" role="tab" data-toggle="tab" class="">Game 02</a>
						</li>
						<li class="nav-item">
							<a href="#tab-3" role="tab" data-toggle="tab" class="">Game 03</a>
						</li> --}}
					</ul>
					<div class="matches-tabs__content tab-content">
						<div class="match-stats-container tab-pane fade show active" id="tab-1" role="tabpanel">
							<div class="match-stats-widget match-stats-widget--general">
								<div class="match-stats-widget__header">
									General Stats
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<figure class="match-team match-team--winner" role="group">
											<figure class="match-team-logo match-team-logo--team-1" role="group">
												<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">NCR</div>
													<div class="match-team__result ">won</div>
											</figcaption>
										</figure>
										<div class="match-result">
											<span class="match-result__score">2 : 0</span>
										</div>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-2" role="group">
												<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="RRH Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">RRH</div>
													<div class="match-team__result ">lost</div>
											</figcaption>
										</figure>
									</li>
									<li><span>{{  $stat->general_stats_map_heading ?? '' }}</span><span>{{ $stat->general_stats_map_title ?? '' }}</span></li>
									<li><span>{{  $stat->general_stats_mission_heading ?? '' }}</span><span>{{ $stat->general_stats_mission_title ?? '' }}</span></li>
									<li><span>{{  $stat->general_stats_duration_heading ?? '' }}</span><span>{{ $stat->general_stats_duration_title ?? '' }}</span></li>
									<li><span>{{  $stat->general_stats_status_heading ?? '' }}</span><span>{{ $stat->general_stats_status_title ?? '' }} </span></li>
								</ul>
							</div>
							<div class="match-stats-widget match-stats-widget--matchup">
								<div class="match-stats-widget__header">
									Teams Matchup
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<div class="match-stats-progress">
											<div class="match-stats-progress__label"> {{ $stat->team_1_matchup_heading_1 ?? '' }}</div>
											<div class="match-stats-progress__score">{{ $stat->team_1_matchup_title_1 ?? '' }}</div>
											<div class="match-stats-progress__bar">
												<span class="team-1" style="width: 24%">&nbsp;</span>
												<span class="team-2">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">{{ $stat->team_1_matchup_title_1 ?? '' }}</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress">
											<div class="match-stats-progress__label"> {{ $stat->team_1_matchup_heading_2 ?? '' }}</div>
											<div class="match-stats-progress__score">{{ $stat->team_1_matchup_heading_2 ?? '' }}</div>
											<div class="match-stats-progress__bar">
												<span class="team-1" style="width: 80%">&nbsp;</span>
												<span class="team-2">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">{{ $stat->team_2_matchup_title_2 ?? '' }}</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress">
											<div class="match-stats-progress__label"> {{ $stat->team_1_matchup_heading_3 ?? '' }} </div>
											<div class="match-stats-progress__score">{{ $stat->team_1_matchup_title_3 ?? '' }}</div>
											<div class="match-stats-progress__bar">
												<span class="team-1" style="width: 60%">&nbsp;</span>
												<span class="team-2">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">{{ $stat->team_2_matchup_title_3 ?? '' }}</div>
										</div>
									</li>
								</ul>
							</div>
							{{-- <div class="match-stats-widget match-stats-widget--leaders">
								<div class="match-stats-widget__header">
									Game Leaders
								</div>
								<ul class="match-stats-widget__item">
									<li>
										<figure class="match-player team-1" role="group">
											<figure class="match-player__avatar">
													<img src="assets/img/samples/match-player-01-90x70.png" alt="">
											</figure>
											<figcaption>
												<span class="match-player__nickname">DaVikinger90</span>
												<span class="match-player__name">James Spiegel</span>
											</figcaption>
										</figure>
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
										</figure>
									</li>
									<li><span>Most damage dealt</span><span>.365</span></li>
								</ul>
								<ul class="match-stats-widget__item">
									<li>
										<figure class="match-player team-2" role="group">
											<figure class="match-player__avatar">
													<img src="assets/img/samples/match-player-unknow-left-90x70.png" alt="">
											</figure>
											<figcaption>
												<span class="match-player__nickname">The Destroy</span>
												<span class="match-player__name">Mary Parker</span>
											</figcaption>
										</figure>
										<figure class="match-team-logo match-team-logo--team-2" role="group">
											<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="Raging Rhinos Logo">
										</figure>
									</li>
									<li><span>Most healing done</span><span>29.088</span></li>
								</ul>
							</div> --}}
						</div>
{{--
						<div class="match-stats-container tab-pane fade" id="tab-2" role="tabpanel">
							<div class="match-stats-widget match-stats-widget--general">
								<div class="match-stats-widget__header">
									General Stats
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<figure class="match-team match-team--winner" role="group">
											<figure class="match-team-logo match-team-logo--team-1" role="group">
												<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">NCR</div>
													<div class="match-team__result ">won</div>
											</figcaption>
										</figure>
										<div class="match-result">
											<span class="match-result__score">3 : 1</span>
										</div>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-2" role="group">
												<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="RRH Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">RRH</div>
													<div class="match-team__result ">lost</div>
											</figcaption>
										</figure>
									</li>
									<li><span>Map / Level</span><span>El Plateado</span></li>
									<li><span>Mission</span><span>Escort</span></li>
									<li><span>Duration</span><span>34:57</span></li>
									<li><span>Status</span><span>Final Score</span></li>
								</ul>
							</div>
							<div class="match-stats-widget match-stats-widget--matchup">
								<div class="match-stats-widget__header">
									Teams Matchup
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<div class="match-stats-progress">
											<div class="match-stats-progress__label">Total Kills</div>
											<div class="match-stats-progress__score">37</div>
											<div class="match-stats-progress__bar">
												<span class="team-1" style="width: 58%">&nbsp;</span>
												<span class="team-2">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">31</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress">
											<div class="match-stats-progress__label">Damage Dealt (K)</div>
											<div class="match-stats-progress__score">115.2</div>
											<div class="match-stats-progress__bar">
												<span class="team-1" style="width: 83%">&nbsp;</span>
												<span class="team-2">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">81.8</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress">
											<div class="match-stats-progress__label">Healing Done (K)</div>
											<div class="match-stats-progress__score">62.1</div>
											<div class="match-stats-progress__bar">
												<span class="team-1" style="width: 52%">&nbsp;</span>
												<span class="team-2">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">59.4</div>
										</div>
									</li>
									<li class="match-stats-widget__achievements">
										<ul>
											<li>
												<img src="assets/img/icon-medal-gold.png" alt="">2
											</li>
											<li>
												<img src="assets/img/icon-medal-silver.png" alt="">2
											</li>
											<li>
												<img src="assets/img/icon-medal-bronze.png" alt="">0
											</li>
										</ul>
										<ul>
											<li>
												<img src="assets/img/icon-medal-gold.png" alt="">1
											</li>
											<li>
												<img src="assets/img/icon-medal-silver.png" alt="">0
											</li>
											<li>
												<img src="assets/img/icon-medal-bronze.png" alt="">2
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget match-stats-widget--leaders">
								<div class="match-stats-widget__header">
									Game Leaders
								</div>
								<ul class="match-stats-widget__item">
									<li>
										<figure class="match-player team-2" role="group">
											<figure class="match-player__avatar">
													<img src="assets/img/samples/match-player-unknow-left-90x70.png" alt="">
											</figure>
											<figcaption>
												<span class="match-player__nickname">Lionel-Reese</span>
												<span class="match-player__name">Marcus Jhonson</span>
											</figcaption>
										</figure>
										<figure class="match-team-logo match-team-logo--team-2" role="group">
											<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="Raging Rhinos Logo">
										</figure>
									</li>
									<li><span>Most damage dealt</span><span>48.365</span></li>
								</ul>
								<ul class="match-stats-widget__item">
									<li>
										<figure class="match-player team-1" role="group">
											<figure class="match-player__avatar">
													<img src="assets/img/samples/match-player-01-90x70.png" alt="">
											</figure>
											<figcaption>
												<span class="match-player__nickname">DaVikinger90</span>
												<span class="match-player__name">James Spiegel</span>
											</figcaption>
										</figure>
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
										</figure>
									</li>
									<li><span>Most healing done</span><span>29.088</span></li>
								</ul>
							</div>
						</div>

						<div class="match-stats-container tab-pane fade" id="tab-3" role="tabpanel">
							<div class="match-stats-widget match-stats-widget--general">
								<div class="match-stats-widget__header">
									General Stats
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<figure class="match-team" role="group">
											<figure class="match-team-logo match-team-logo--team-1" role="group">
												<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">NCR</div>
													<div class="match-team__result ">lost</div>
											</figcaption>
										</figure>
										<div class="match-result">
											<span class="match-result__score">1 : 3</span>
										</div>
										<figure class="match-team match-team--winner" role="group">
											<figure class="match-team-logo match-team-logo--team-2" role="group">
												<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="RRH Logo">
											</figure>
											<figcaption>
												<div class="match-team__name">RRH</div>
													<div class="match-team__result ">won</div>
											</figcaption>
										</figure>
									</li>
									<li><span>Map / Level</span><span>El Plateado</span></li>
									<li><span>Mission</span><span>Escort</span></li>
									<li><span>Duration</span><span>34:17</span></li>
									<li><span>Status</span><span>Final Score</span></li>
								</ul>
							</div>
							<div class="match-stats-widget match-stats-widget--matchup">
								<div class="match-stats-widget__header">
									Teams Matchup
								</div>
								<ul class="match-stats-widget__body">
									<li>
										<div class="match-stats-progress">
											<div class="match-stats-progress__label">Total Kills</div>
											<div class="match-stats-progress__score">27</div>
											<div class="match-stats-progress__bar">
												<span class="team-1" style="width: 34%">&nbsp;</span>
												<span class="team-2">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">38</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress">
											<div class="match-stats-progress__label">Damage Dealt (K)</div>
											<div class="match-stats-progress__score">56.4</div>
											<div class="match-stats-progress__bar">
												<span class="team-1" style="width: 16%">&nbsp;</span>
												<span class="team-2">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">94.7</div>
										</div>
									</li>
									<li>
										<div class="match-stats-progress">
											<div class="match-stats-progress__label">Healing Done (K)</div>
											<div class="match-stats-progress__score">58.7</div>
											<div class="match-stats-progress__bar">
												<span class="team-1" style="width: 48%">&nbsp;</span>
												<span class="team-2">&nbsp;</span>
											</div>
											<div class="match-stats-progress__score">61.3</div>
										</div>
									</li>
									<li class="match-stats-widget__achievements">
										<ul>
											<li>
												<img src="assets/img/icon-medal-gold.png" alt="">0
											</li>
											<li>
												<img src="assets/img/icon-medal-silver.png" alt="">2
											</li>
											<li>
												<img src="assets/img/icon-medal-bronze.png" alt="">1
											</li>
										</ul>
										<ul>
											<li>
												<img src="assets/img/icon-medal-gold.png" alt="">2
											</li>
											<li>
												<img src="assets/img/icon-medal-silver.png" alt="">0
											</li>
											<li>
												<img src="assets/img/icon-medal-bronze.png" alt="">1
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="match-stats-widget match-stats-widget--leaders">
								<div class="match-stats-widget__header">
									Game Leaders
								</div>
								<ul class="match-stats-widget__item">
									<li>
										<figure class="match-player team-1" role="group">
											<figure class="match-player__avatar">
													<img src="assets/img/samples/match-player-01-90x70.png" alt="">
											</figure>
											<figcaption>
												<span class="match-player__nickname">DaVikinger90</span>
												<span class="match-player__name">James Spiegel</span>
											</figcaption>
										</figure>
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="Necromancers Logo">
										</figure>
									</li>
									<li><span>Most damage dealt</span><span>48.365</span></li>
								</ul>
								<ul class="match-stats-widget__item">
									<li>
										<figure class="match-player team-2" role="group">
											<figure class="match-player__avatar">
													<img src="assets/img/samples/match-player-unknow-left-90x70.png" alt="">
											</figure>
											<figcaption>
												<span class="match-player__nickname">Neko Krisser</span>
												<span class="match-player__name">Tess Griffin</span>
											</figcaption>
										</figure>
										<figure class="match-team-logo match-team-logo--team-2" role="group">
											<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="Raging Rhinos Logo">
										</figure>
									</li>
									<li><span>Most healing done</span><span>29.088</span></li>
								</ul>
							</div>
						</div> --}}
					</div>
				</div>
			</div>
		</main>
@endsection

