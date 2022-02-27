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
						<a href="#" class="active">
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

				<div class="match-overview mt-sm-auto mb-sm-auto">
					<div class="match-overview__body">
						<figure class="match-team" role="group">
							<figure class="match-team-logo match-team-logo--team-1" role="group">
								<img src="assets/img/samples/logo-necromancers-180.png" srcset="assets/img/samples/logo-necromancers-180@2x.png 2x" alt="Necromancers Logo">
							</figure>
							<figcaption>
								<div class="match-team__name">Necromancers</div>
									<div class="match-team__country ">United States</div>
							</figcaption>
						</figure>
						<div class="col-md-4">
							<div class="match-overview__result">
								<div class="match-result match-result--winner-right">
									<span class="match-result__score">1 : 3</span>
									<span class="match-result__label">Final score</span>
								</div>
							</div>
						</div>
						<figure class="match-team" role="group">
							<figure class="match-team-logo match-team-logo--team-2" role="group">
								<img src="assets/img/samples/logo-rhinos-180.png" srcset="assets/img/samples/logo-rhinos-180@2x.png 2x" alt="Raging Rhinos Logo">
							</figure>
							<figcaption>
								<div class="match-team__name">Raging Rhinos</div>
									<div class="match-team__country ">Japan</div>
							</figcaption>
						</figure>
					</div>

				</div>
			</div>
		</main>
@endsection

