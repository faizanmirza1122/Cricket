@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
		<main class="site-content" id="wrapper">

			<div class="widget-area widger-area--before-loop">
				<div class="widget widget-carousel slick-slider">
					<article class="widget-carousel__item player bg-image bg--ph-03">
                        <article class="widget-carousel__item player bg-image bg--ph-03">
						<div class="player__subtitle h6">Welcome</div>
						<h1 class="player__title h3 color-primary">JULIE_NOIRE</h1>
						<div class="player__body">
							<div class="h5">To the <span class="color-primary">Xenovrese</span> team!</div>
						</div>
						<div class="player__thumbnail">
							<img src="assets/img/samples/team-info-page-player-photo-03.png" alt="">
							<a href="team-player-3.html" class="more-info-link h6"><span class="add-icon"></span>More info</a>
						</div>
					</article>
					<article class="widget-carousel__item player bg-image bg--ph-05">
						<div class="player__subtitle h6">Congratulations!</div>
						<h1 class="player__title h3">Crazzzy_80</h1>
						<div class="player__body">
							<div class="h5 color-primary">Reached 10k twitch subs</div>
						</div>
						<div class="player__thumbnail">
							<img src="assets/img/samples/team-info-page-player-photo-04.png" alt="">
							<a href="team-player-4.html" class="more-info-link h6"><span class="add-icon"></span>More info</a>
						</div>
					</article>
					<article class="widget-carousel__item player bg-image bg--ph-06">
						<div class="player__subtitle h6">Featured player</div>
						<h1 class="player__title h3 color-warning">G-Huntress</h1>
						<div class="player__body">
							<ul class="player__stats">
								<li class="counter">
									<div class="counter__number">28</div>
									<div class="counter__label">Games</div>
								</li>
								<li class="counter">
									<div class="counter__number">73</div>
									<div class="counter__label">Kills</div>
								</li>
								<li class="counter">
									<div class="counter__number">96</div>
									<div class="counter__label">Win %</div>
								</li>
							</ul>
						</div>
						<div class="player__thumbnail">
							<img src="assets/img/samples/team-info-page-player-photo-02.png" alt="">
							<a href="team-player-2.html" class="more-info-link h6"><span class="add-icon"></span>More info</a>
						</div>
					</article>
				</div>
			</div>
			<div class="content blog-layout--style-1">


                @forelse ($homes as $home)
				<article class="post has-post-thumbnail ">
					<div class="post__thumbnail">

						<a href="blog-post.html"><img src="{{ asset('storage/' . $home->image) }}" alt=""></a>


					</div>

					<div class="post__body">
						<div class="post__header">
							<ul class="post__cats list-unstyled">
								<li class="post__cats-item color-warning">
									<a href="#">{{ $home->subtitle }}</a>
								</li>
							</ul>
							<h2 class="post__title h4"><a href="blog-post.html">{{ $home->title }}</a></h2>
							<ul class="post__meta list-unstyled">
								<li class="post__meta-item post__meta-item--date">
									<a href="#">{{ $home->date }}</a>
								</li>
							</ul>
						</div>
						<div class="post__excerpt">
							{{ $home->description }}
						</div>
					</div>
				</article>
                    @empty
                    <h1> No data Found </h1>
                    @endforelse



			</div>
		</main>

@endsection

