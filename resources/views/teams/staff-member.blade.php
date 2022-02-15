@extends('layouts.master')

@section('content')


	<div class="site-wrapper site-layout--default-inverse">

		<!-- Content
		================================================== -->
		<main class="site-content" id="wrapper">
			<div class="site-content__inner">
				<div class="site-content__holder">
					<figure class="page-thumbnail page-thumbnail--default">
                        @if ($team)
						<img src="{{ asset('storage/' . $team->image) }}" alt="">
                            @else
                        @endif
					</figure>
					<div class="staff-member staff-member--single">
						<div class="staff-member__body">
							<div class="staff-member__position">{{ $team->designation ?? '' }}</div>
							<h2 class="staff-member__title h3">{{ $team->name ?? '' }}</h2>
							<ul class="staff-member__meta list-unstyled">
								<li class="staff-member__meta-item"><span>Age</span>{{ $team->age ?? '' }} years</li>
								<li class="staff-member__meta-item"><span>Joined</span>{{ $team->joining_date ?? '' }}6</li>
								<li class="staff-member__meta-item"><span>Country</span>{{ $team->country ?? '' }}</li>
							</ul>
							<div class="staff-member__content">
								<h5>Biography</h5>
								<p>{{ $team->country ?? '' }} </p>
								<div class="spacer-sm"></div>
								<h5>Previous Jobs</h5>
								<ul class="list">
									<li>{{ $team->description ?? '' }}</li>
								</ul>

							</div>
							<ul class="social-menu social-menu--links">
							</ul>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
@endsection
