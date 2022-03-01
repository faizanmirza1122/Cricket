<head>

	<!-- Basic Page Needs
	================================================== -->
	<title>BNW ESPORTS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="eSports Team &amp; Gaming HTML Template">
	<meta name="author" content="Dan Fisher">
	<meta name="keywords" content="esports team news HTML template">
@yield('head')
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicon.png') }}">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- Google Web Fonts
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700" rel="stylesheet">

	<!-- CSS
	================================================== -->
	<!-- Vendor CSS -->
	<link href="{{ asset('assets/vendor/magnific-popup/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/slick/css/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/nanoscroller/css/nanoscroller.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/fontawesome/css/brands.css') }}" rel="stylesheet">

	<!-- Template CSS-->
	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

	<!-- Custom CSS-->
	<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
	<style>
		.bg-clr{
			background-color:#ffd202;
		}
		.main-nav__toggle, .main-nav__toggle-2{
			background-color:#ffd202;
		}
		.main-nav__toggle:before, .main-nav__toggle-2:before{
		background-color:#ffd202;
		}
		.main-nav ul li a:hover{
		color:#ffd202;
		}
		.main-nav__list li.active > a{
		color:#ffd202;
		}
		.add-icon:after, .add-icon:before{
		background-color:#ffd202;
		}
		.color-primary {
	    color:#ffd202 !important;
		}
		.add-icon:hover {
    	border-color: #ffd202;
		}
		.widget-carousel .player__thumbnail .more-info-link:hover {
    	color: #ffd202;
		}
		.header-menu-toggle{
			background-color:#ffd202;
		}
		.dl-menuwrapper li.active > a{
		 color:#ffd202;
		}
		.dl-menuwrapper li a:hover{
		 color:#ffd202 ;
		}
		.dl-toggle:after, .dl-toggle:before{
		background-color:#ffd202;
		}
		.header-cart-toggle__items-count{
		 color:#ffd202 ;
		}


		</style>

</head>

<body class="site-layout--horizontal preloader-is--active">

	<div class="site-wrapper">

		<!-- Header
		================================================== -->
		<header id="header" class="site-header site-header--bottom">

			<!-- Logo - Image Based -->
			<div class="header-logo header-logo--img">
                @if ($logo)
				<a href="{{ route('index') }}"><img src="{{ url('storage/'. $logo->image) }}"  alt=""></a>

                @endif
			</div>
			<!-- Logo - Image Based / End -->

			<!-- Main Navigation -->
			<nav class="main-nav">
				<ul class="main-nav__list">
					<li class="active"><a href="{{ route('home') }}">Home</a></li>
					<li class=""><a href="{{ route('ts2') }}">Teams</a></li>


					<li class=""><a href="#">Matches</a>
						<ul class="main-nav__sub">
							<li class=""><a href="{{ route('matches-scores') }}">Match Scores</a></li>
							<li class=""><a href="{{ route('upcoming-match') }}">Upcoming Matches</a></li>
							<li class=""><a href="{{ route('matches-standing') }}">Standings</a></li>
                            <li class=""><a href="{{ route('match-stats1') }}">Match Stats</a></li>
                            <li class=""><a href="{{ route('matches-lineups1') }}">Match Lineups</a></li>
                            <li class=""><a href="{{ route('matches-overview1') }}">Match Overview</a></li>
							<li class=""><a href="{{ route('matches-repaly') }}">Match Replay</a></li>
						</ul>
					</li>
					<li class=""><a href="{{ route('news') }}">News</a></li>
					<li >
						<a href="#">About us</a>
						<ul class="main-nav__sub">
							<li class=""><a href="{{ route('contact') }}">Contact</a></li>
							<li class=""><a href="{{ route('faqs') }}">FAQS</a></li>
							<li class=""><a href="{{ route('about') }}">About</a></li>
                            <li class=""><a href="{{ route('staff-page') }}">Staff Page</a></li>
						</ul>
					</li>

					<li class=""><a href="{{ route('shop') }}">Shop</a></li>

				</ul>
			</nav>
			<!-- Main Navigation / End -->

			<!-- Header Actions -->
			<div class="header-actions">



				{{-- <div class="header-social-toggle d-none d-md-block">
					<svg role="img" class="df-icon df-icon--thumb-up">
						<use xlink:href="assets/img/necromancers.svg#thumb-up"/>
					</svg>
					<span class="header-social-toggle__plus">&nbsp;</span>
					<ul class="social-menu social-menu--header">
						<li><a href="https://discord.gg/xxxx"><span class="link-subtitle">Discord</span>Necrochat</a></li>
						<li><a href="https://twitch.tv/"><span class="link-subtitle">Twitch</span>Necroplay</a></li>
						<li><a href="https://twitter.com/danfisher_dev"><span class="link-subtitle">Twitter</span>Necrotwt</a></li>
						<li><a href="https://www.facebook.com/danfisher.dev/"><span class="link-subtitle">Facebook</span>Necrogame</a></li>
					</ul>
				</div> --}}

				<div class="header-menu-toggle">
					<div class="header-menu-toggle__inner">
						<span>&nbsp;</span>
						<span>&nbsp;</span>
						<span>&nbsp;</span>
					</div>
				</div>
			</div>
			<!-- Header Actions / End -->
		</header>
		<!-- Header / End -->

		<!-- Content
		================================================== -->
		@yield('content')
		<!-- Overlay -->
		<div class="site-overlay"></div>
		<!-- Overlay / End -->

		<!-- Menu Panel -->
		<div class="menu-panel">
			<ul class="menu-panel__mobile-bar list-unstyled d-md-none">
				<li class="mobile-bar-item">
                    <li class="mobile-bar-item">
                        <a class="mobile-bar-item__header" href="{{ route('home') }}">
                            Home
                        </a>
                    </li>
                    <li class="mobile-bar-item">
                        <a class="mobile-bar-item__header" href="{{ route('ts2') }}">
                            Teams
                        </a>
                    </li>
					<a class="mobile-bar-item__header collapsed" data-toggle="collapse" href="#mobile_collapse_1" role="button" aria-expanded="false" aria-controls="mobile_collapse_1">
						MATCHES
						<span class="main-nav__toggle">&nbsp;</span>
					</a>
					<div id="mobile_collapse_1" class="collapse mobile-bar-item__body">
						<!-- Mobile Navigation -->
						<nav class="mobile-nav">
							<ul class="mobile-nav__list">
                            <li class=""><a href="{{ route('matches-scores') }}">Match Scores</a></li>
							<li class=""><a href="{{ route('upcoming-match') }}">Upcoming Matches</a></li>
							<li class=""><a href="{{ route('matches-standing') }}">Standings</a></li>
                            <li class=""><a href="{{ route('match-stats1') }}">Match Stats</a></li>
                            <li class=""><a href="{{ route('matches-lineups1') }}">Match Lineups</a></li>
                            <li class=""><a href="{{ route('matches-overview1') }}">Match Overview</a></li>
							<li class=""><a href="{{ route('matches-repaly') }}">Match Replay</a></li>
							</ul>
						</nav>
						<!-- Mobile Navigation / End -->
					</div>
                    <li class="mobile-bar-item">
                        <a class="mobile-bar-item__header" href="{{ route('news') }}">
                            News
                        </a>
                    </li>
				</li>
                <a class="mobile-bar-item__header collapsed" data-toggle="collapse" href="#mobile_collapse_2" role="button" aria-expanded="false" aria-controls="mobile_collapse_2">
                    About Us
                    <span class="main-nav__toggle">&nbsp;</span>
                </a>
                <div id="mobile_collapse_2" class="collapse mobile-bar-item__body">
                    <!-- Mobile Navigation -->
                    <nav class="mobile-nav">
                        <ul class="mobile-nav__list">
                            <li class=""><a href="{{ route('contact') }}">Contact</a></li>
							<li class=""><a href="{{ route('faqs') }}">FAQS</a></li>
							<li class=""><a href="{{ route('about') }}">About</a></li>
                            <li class=""><a href="{{ route('staff-page') }}">Staff Page</a></li>
                        </ul>
                    </nav>
                    <!-- Mobile Navigation / End -->
                </div>
                <li class="mobile-bar-item">
                    <a class="mobile-bar-item__header" href="{{ route('shop') }}">
                        Shop
                    </a>
                </li>
				{{-- <li class="mobile-bar-item">
					<a class="mobile-bar-item__header" href="shop-account-settings.html">
						Account Settings
					</a>
				</li> --}}

			</ul>
			<div class="menu-panel__top-bar">
				<div class="top-bar-filter">
					<label class="top-bar-filter__label">Competitions</label>
					<select class="cs-select">
						<option value="all" selected>All Competitions</option>
						<option value="x2018">Xenowatch 2018 Tournament</option>
						<option value="xwleague">Xenowatch West League</option>
						<option value="xeleague">Xenowatch East League</option>
						<option value="xusacup">Xenowatch USA Cup</option>
					</select>
				</div>
				<ul class="top-bar-carousel">
					<li class="top-bar-carousel__headline x2018">
						<span>Xenowatch 2018 Tournament</span>
					</li>
					<li class="top-bar-carousel__item x2018">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">2</span>
									</div>
									<div class="match-result match-result--live">
										<span class="match-result__label">25:42</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-2" role="group">
											<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="RRH Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">RRH</div>
												<div class="match-team__country ">JPN</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">1</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">01/12</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item x2018">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-5" role="group">
											<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="FEG Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">FEG</div>
												<div class="match-team__country ">FRA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">4</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">3</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">01/09</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item x2018">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">1</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-3" role="group">
											<img src="assets/img/samples/logo-bulls-30.png" srcset="assets/img/samples/logo-bulls-30@2x.png 2x" alt="AGB Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">AGB</div>
												<div class="match-team__country ">SPA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">3</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">01/05</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item x2018">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-4" role="group">
											<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="ICP Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">ICP</div>
												<div class="match-team__country ">POR</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">0</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">5</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">01/02</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>


					<li class="top-bar-carousel__headline xwleague">
						<span>Xenowatch West League</span>
					</li>
					<li class="top-bar-carousel__item xwleague">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">1</span>
									</div>
									<div class="match-result match-result--live">
										<span class="match-result__label">12:33</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-2" role="group">
											<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="RRH Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">RRH</div>
												<div class="match-team__country ">JPN</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">0</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">01/12</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item xwleague">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-4" role="group">
											<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="ICP Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">ICP</div>
												<div class="match-team__country ">POR</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">0</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">3</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">01/07</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item xwleague">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-5" role="group">
											<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="FEG Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">FEG</div>
												<div class="match-team__country ">FRA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">5</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">2</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">01/04</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item xwleague">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">1</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-3" role="group">
											<img src="assets/img/samples/logo-bulls-30.png" srcset="assets/img/samples/logo-bulls-30@2x.png 2x" alt="AGB Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">AGB</div>
												<div class="match-team__country ">SPA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">3</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">01/03</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>


					<li class="top-bar-carousel__headline xeleague">
						<span>Xenowatch East League</span>
					</li>
					<li class="top-bar-carousel__item xeleague">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">4</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-2" role="group">
											<img src="assets/img/samples/logo-rhinos-30.png" srcset="assets/img/samples/logo-rhinos-30@2x.png 2x" alt="RRH Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">RRH</div>
												<div class="match-team__country ">JPN</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">1</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">12/18</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item xeleague">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">4</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-3" role="group">
											<img src="assets/img/samples/logo-bulls-30.png" srcset="assets/img/samples/logo-bulls-30@2x.png 2x" alt="AGB Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">AGB</div>
												<div class="match-team__country ">SPA</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">3</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">12/11</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item xeleague">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-4" role="group">
											<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="ICP Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">ICP</div>
												<div class="match-team__country ">POR</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">0</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">2</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">12/09</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>


					<li class="top-bar-carousel__headline xusacup">
						<span>Xenowatch USA Cup</span>
					</li>
					<li class="top-bar-carousel__item xusacup">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">1</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-3" role="group">
											<img src="assets/img/samples/logo-bulls-30.png" srcset="assets/img/samples/logo-bulls-30@2x.png 2x" alt="AGB Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">AGB</div>
												<div class="match-team__country ">SPA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">3</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">11/17</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item xusacup">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-5" role="group">
											<img src="assets/img/samples/logo-eagles-30.png" srcset="assets/img/samples/logo-eagles-30@2x.png 2x" alt="FEG Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">FEG</div>
												<div class="match-team__country ">FRA</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">2</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">1</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">11/11</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="top-bar-carousel__item xusacup">
						<div class="match-score-inline">
							<div class="match-score-inline__body">
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-4" role="group">
											<img src="assets/img/samples/logo-panthers-30.png" srcset="assets/img/samples/logo-panthers-30@2x.png 2x" alt="ICP Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">ICP</div>
												<div class="match-team__country ">POR</div>
										</figcaption>
									</figure>
									<div class="match-result match-result--winner-right">
										<span class="match-result__score">3</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">Final</span>
									</div>
								</div>
								<div class="match-score-inline__body-inner">
									<figure class="match-team" role="group">
										<figure class="match-team-logo match-team-logo--team-1" role="group">
											<img src="assets/img/samples/logo-necromancers-30.png" srcset="assets/img/samples/logo-necromancers-30@2x.png 2x" alt="NCR Logo">
										</figure>
										<figcaption>
											<div class="match-team__name">NCR</div>
												<div class="match-team__country ">USA</div>
										</figcaption>
									</figure>
									<div class="match-result">
										<span class="match-result__score">2</span>
									</div>
									<div class="match-result">
										<span class="match-result__label">11/06</span>
									</div>
								</div>
							</div>
							<div class="match-score-inline__footer">
								<ul class="match-stats-links">
									<li>
										<a href="matches-overview-1.html">
											<svg role="img" class="df-icon df-icon--overview">
												<use xlink:href="assets/img/necromancers.svg#overview"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-stats-1.html">
											<svg role="img" class="df-icon df-icon--stats">
												<use xlink:href="assets/img/necromancers.svg#stats"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-lineups-1.html">
											<svg role="img" class="df-icon df-icon--lineups">
												<use xlink:href="assets/img/necromancers.svg#lineups"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="matches-replay.html">
											<svg role="img" class="df-icon df-icon--replay">
												<use xlink:href="assets/img/necromancers.svg#replay"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="menu-panel__content d-none d-md-flex">
				<div class="menu-panel__navigation">
					<div id="dl-menu" class="dl-menuwrapper">
						<!-- <button class="dl-trigger">Open Menu</button> -->
						<ul class="dl-menu dl-menuopen">
							<li class="active">
								<a href="{{ route('home') }}">Home</a>
							</li>
							<li class="">
								<a href="{{ route('ts2') }}">Teams</a>
							</li>

							<li class="">
								<a href="{{ route('news') }}">News</a>
							</li>

							<li class="">
								<a href="{{ route('about') }}">About Us</a>
							</li>

							<li class="">
								<a href="{{ route('shop') }}">Shop</a>
							</li>

							<li class="">
								<a href="{{ route('contact') }}">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="menu-panel__widget-area">
					<div class="row">
						<div class="col-md-12 col-lg-6 col-xl-5">
							<!-- Widget: Text -->
							<section class="widget widget-text">
								<h5 class="widget__title">Join our team</h5>
								<div class="widget__content">
									<p>
										We’re always looking for new talent to join our teams. If you wanna join us, just send us and email and we’ll get back to you!
									</p>
									<div class="info-box">
										<div class="info-box__label">Max Parker - Recruiter</div>
										<div class="info-box__content"><a href="mailto:#">mp-recruit<span class="color-primary">@</span>bnwesports.com</a></div>
									</div>
									<div class="info-box">
										<div class="info-box__label">Be our partner!</div>
										<div class="info-box__content"><a href="mailto:#">partners<span class="color-primary">@</span>bnwesports.com</a></div>
									</div>
								</div>
							</section>
							<!-- Widget: Text / End -->
						</div>
						<div class="col-md-12 col-lg-6 col-xl-5 offset-xl-2 mt-5 mt-lg-0">
							<!-- Widget: Contact Info -->
							<section class="widget widget-contact-info">
								<h5 class="widget__title">Contact Info</h5>
								<div class="widget__content">
									<p>
										If you have any questions, just send us and email and don’t forget to follow and like all our social accounts to keep updated!
									</p>
									<div class="info-box">
										<div class="info-box__label">General inquiries</div>
										<div class="info-box__content"><a href="mailto:#">inquiries<span class="color-primary">@</span>bnwesports.com</a></div>
									</div>
									<ul class="social-menu social-menu--default">
										<li><a href="https://www.facebook.com/danfisher.dev/"></a></li>
										<li><a href="https://twitter.com/danfisher_dev"></a></li>
										<li><a href="https://twitch.tv"></a></li>
										<li><a href="https://discord.gg/xxxx"></a></li>
									</ul>
								</div>
							</section>
							<!-- Widget: Contact Info / End -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- Widget: Partners Carousel -->
							<section class="widget widget-partners-carousel">
								<h5 class="widget__title">Our Partners</h5>
								<div class="widget__content">
									<ul>
										<li>
											<img src="assets/img/samples/partner-carousel-img-01.png" alt="">
										</li>
										<li>
											<img src="assets/img/samples/partner-carousel-img-02.png" alt="">
										</li>
										<li>
											<img src="assets/img/samples/partner-carousel-img-03.png" alt="">
										</li>
										<li>
											<img src="assets/img/samples/partner-carousel-img-01.png" alt="">
										</li>
										<li>
											<img src="assets/img/samples/partner-carousel-img-02.png" alt="">
										</li>
										<li>
											<img src="assets/img/samples/partner-carousel-img-03.png" alt="">
										</li>
									</ul>
								</div>
							</section>
							<!-- Widget: Partners Carousel / End -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Menu Panel / End -->

	</div>

	<div class="preloader-overlay">
		<div id="js-preloader" class="preloader">
			<div class="preloader-inner fadeInUp">
				<div class="pong-loader"></div>
				<svg role="img" class="df-icon df-icon--preloader-arcade">
					<use xlink:href="assets/img/necromancers.svg#preloader-arcade"/>
				</svg>
			</div>
		</div>
	</div>

	<!-- The cursor elements -->
	<div class="df-custom-cursor-wrap">
		<div id="df-custom-cursor"></div>
	</div>

	<!-- Javascript Files
	================================================== -->
	<!-- Core JS -->
	<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/jquery/jquery-migrate.min.js') }}"></script>
	<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/js/core.js') }}"></script>

	<!-- Vendor JS -->

	<!-- Template JS -->
	<script src="{{ asset('assets/js/init.js') }}"></script>
	<script src="{{ asset('assets/js/custom.js') }}"></script>

	<!-- Duotone SVG color filter -->
	<svg xmlns="http://www.w3.org/2000/svg" class="svg-filters">
		<filter id="duotone_base">
			<feColorMatrix type="matrix" result="grayscale"
				values="1 0 0 0 0
								1 0 0 0 0
								1 0 0 0 0
								0 0 0 1 0" />
			<feComponentTransfer color-interpolation-filters="sRGB" result="duotone_base_filter">
				<feFuncR type="table" tableValues="0.082352941176471 0.419607843137255"></feFuncR>
				<feFuncG type="table" tableValues="0.090196078431373 0.443137254901961"></feFuncG>
				<feFuncB type="table" tableValues="0.125490196078431 0.6"></feFuncB>
				<feFuncA type="table" tableValues="0 1"></feFuncA>
			</feComponentTransfer>
		</filter>
	</svg>

</body>
