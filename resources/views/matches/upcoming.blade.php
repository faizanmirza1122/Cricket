@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content site-content--center page" id="wrapper">
			<div class="container container--large">
				<div class="page-heading page-heading--default">
					<div class="page-heading__subtitle h5 color-primary">Necromancers</div>
					<h1 class="page-heading__title h2">Upcoming Matches</h1>
				</div>
				<div class="matches-filter">
					<label class="matches-filter__label">Team filter</label>
					<select class="cs-select">
						<option value="">All Teams</option>
						<option value="" selected>Xenowatch</option>
						<option value="">League of Heroes</option>
						<option value="">Striker Go</option>
						<option value="">Fortdaite</option>
					</select>
				</div>
				<div class="table-responsive mt-sm-auto mb-sm-auto">
					<table class="table matches-table upcoming-table">
						<tbody>
							<tr>
								<td class="upcoming-table__date">
									<span>25</span>Aug
								</td>
								<td class="upcoming-table__team">
									<span class="upcoming-table__team-vs">vs</span>
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-4" role="group">
											<img src="assets/img/samples/logo-panthers-42.png" srcset="assets/img/samples/logo-panthers-42@2x.png 2x" alt="Ice Panthers Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Ice Panthers</div>
												<div class="match-team__country ">Portugal</div>
										</figcaption>
									</figure>
								</td>
								<td>
									Xenowatch USA Cup
									<span class="upcoming-table__label">Competition</span>
								</td>
								<td>
									Week 2 Day 5
									<span class="upcoming-table__label">Instance</span>
								</td>
								<td>
									9:30pm PCT
									<span class="upcoming-table__label">Time</span>
								</td>
								<td>
									<a href="#" class="upcoming-table__tickets">Buy tickets!</a>
									<span class="upcoming-table__label">Tickets</span>
								</td>
							</tr>

							<tr>
								<td class="upcoming-table__date">
									<span>29</span>Aug
								</td>
								<td class="upcoming-table__team">
									<span class="upcoming-table__team-vs">vs</span>
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-2" role="group">
											<img src="assets/img/samples/logo-rhinos-42.png" srcset="assets/img/samples/logo-rhinos-42@2x.png 2x" alt="Raging Rhinos Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Raging Rhinos</div>
												<div class="match-team__country ">Japan</div>
										</figcaption>
									</figure>
								</td>
								<td>
									Xenowatch West League
									<span class="upcoming-table__label">Competition</span>
								</td>
								<td>
									Quarters
									<span class="upcoming-table__label">Instance</span>
								</td>
								<td>
									10:00pm PCT
									<span class="upcoming-table__label">Time</span>
								</td>
								<td>
									<span class="upcoming-table__tickets disable">Sold Out</span>
									<span class="upcoming-table__label">Tickets</span>
								</td>
							</tr>

							<tr>
								<td class="upcoming-table__date">
									<span>03</span>Sep
								</td>
								<td class="upcoming-table__team">
									<span class="upcoming-table__team-vs">vs</span>
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-3" role="group">
											<img src="assets/img/samples/logo-bulls-42.png" srcset="assets/img/samples/logo-bulls-42@2x.png 2x" alt="Angry Bulls Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Angry Bulls</div>
												<div class="match-team__country ">Spain</div>
										</figcaption>
									</figure>
								</td>
								<td>
									Xenowatch West League
									<span class="upcoming-table__label">Competition</span>
								</td>
								<td>
									Semifinals
									<span class="upcoming-table__label">Instance</span>
								</td>
								<td>
									8:00pm PCT
									<span class="upcoming-table__label">Time</span>
								</td>
								<td>
									<a href="#" class="upcoming-table__tickets">Buy tickets!</a>
									<span class="upcoming-table__label">Tickets</span>
								</td>
							</tr>

							<tr>
								<td class="upcoming-table__date">
									<span>06</span>Sep
								</td>
								<td class="upcoming-table__team">
									<span class="upcoming-table__team-vs">vs</span>
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-5" role="group">
											<img src="assets/img/samples/logo-eagles-42.png" srcset="assets/img/samples/logo-eagles-42@2x.png 2x" alt="Fierce Eagles Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">Fierce Eagles</div>
												<div class="match-team__country ">France</div>
										</figcaption>
									</figure>
								</td>
								<td>
									Xenowatch USA Cup
									<span class="upcoming-table__label">Competition</span>
								</td>
								<td>
									Week 3 Day 1
									<span class="upcoming-table__label">Instance</span>
								</td>
								<td>
									9:30pm PCT
									<span class="upcoming-table__label">Time</span>
								</td>
								<td>
									<a href="#" class="upcoming-table__tickets">Buy tickets!</a>
									<span class="upcoming-table__label">Tickets</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>

@endsection

