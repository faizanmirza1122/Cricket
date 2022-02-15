@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
		<main class="site-content" id="wrapper">

			<div class="page-heading page-heading--loop bg-image bg--ph-02">
				<div class="page-heading__subtitle h5 color-primary">Necromancers</div>
				<h1 class="page-heading__title h2">Management </br>& Staff</h1>
			</div>
			<div class="content staff-layout">
                @forelse ($teams as $team)
				<article class="staff-member has-post-thumbnail">
					<div class="staff-member__thumbnail">
                        @if ($team)
						<a href="{{ route('staff-member', [$team->slug]) }}"><img src="{{ asset('storage/' . $team->image) }}" alt="Marina Gonzales"></a>
                        @else
                        @endif
					</div>
					<div class="staff-member__body">
						<div class="staff-member__position">{{ $team->designation ?? ''  }}</div>
						<h2 class="staff-member__title h3"><a href="staff-member.html">{{ $team->name ?? '' }} years</a></h2>
						<ul class="staff-member__meta list-unstyled">
							<li class="staff-member__meta-item"><span>Age</span>{{ $team->age ?? '' }} year</li>
							<li class="staff-member__meta-item"><span>Joined</span>{{ $team->joining_date ?? '' }} </li>
							<li class="staff-member__meta-item"><span>Country</span>{{ $team->country ?? '' }} </li>
						</ul>
						<div class="staff-member__excerpt">{{ $team->description ?? '' }}</div>
						<ul class="social-menu social-menu--links">
							<li><a href="{{ $team->social_media_link_1 ?? '' }}"></a></li>
							<li><a href="{{ $team->social_media_link_2 ?? '' }} "></a></li>
							<li><a href="{{ $team->social_media_link_3 ?? '' }}"></a></li>
						</ul>
					</div>
				</article>
                @empty
                    <h1 class="text-center">No Data Found</h1>
                @endforelse

			</div>

		</main>

@endsection

