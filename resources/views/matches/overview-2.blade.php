@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content site-content--center page" id="wrapper">
			<div class="container">
				<div class="page-heading page-heading--default text-small text-center w-100">
					<div class="page-heading__subtitle h5">
						<span class="color-primary">Wednesday Feb 14th, 2018 /</span> Necromancers <span class="color-primary">vs</span> Fierce Eagles
					</div>
					<h1 class="page-heading__title h2">Striker Go Tournament</h1>
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
						<a href="./matches-stats-1.html">
							<svg role="img" class="df-icon df-icon--stats">
								<use xlink:href="assets/img/necromancers.svg#stats"/>
							</svg>
						</a>
					</li>
					<li>
						<a href="./matches-lineups-1.html">
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
						<div class="col-md-6 col-lg-4">
							<div class="match-overview__result">
								<div class="match-result match-result--winner-left">
									<span class="match-result__score">2 : 1</span>
									<span class="match-result__label">Final score</span>
								</div>
							</div>
							<table class="match-overview__table">
								<thead>
									<tr>
										<th>Games</th>
										<th>01</th>
										<th>02</th>
										<th>03</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Necromancers</td>
										<td><span class="color-primary">16</span></td>
										<td><span class="color-primary">14</span></td>
										<td>11</td>
									</tr>
									<tr>
										<td>Fierce Eagles</td>
										<td>12</td>
										<td>9</td>
										<td><span class="color-primary">17</span></td>
									</tr>
								</tbody>
							</table>
						</div>
						<figure class="match-team" role="group">
							<figure class="match-team-logo match-team-logo--team-5" role="group">
								<img src="assets/img/samples/logo-eagles-180.png" srcset="assets/img/samples/logo-eagles-180@2x.png 2x" alt="Fierce Eagles Logo">
							</figure>
							<figcaption>
								<div class="match-team__name">Fierce Eagles</div>
									<div class="match-team__country ">France</div>
							</figcaption>
						</figure>
					</div>
					<ul class="match-overview__footer list-unstyled">
						<li>
							<span>Instance</span>Semifinals
						</li>
						<li>
							<span>Time</span>9:00pm PCT
						</li>
						<li>
							<span>Total Duration</span>01:22:46
						</li>
						<li>
							<span>Venue</span>Firebird Stadium
						</li>
						<li>
							<span>Game</span>Striker Go
						</li>
					</ul>
				</div>
			</div>
		</main>

@endsection

