
<!DOCTYPE html>
<html lang="zxx">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<title>BNW ESPORTS</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="eSports Team &amp; Gaming HTML Template">
	<meta name="author" content="Dan Fisher">
	<meta name="keywords" content="esports team news HTML template">

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
	<link href="assets/vendor/magnific-popup/css/magnific-popup.css" rel="stylesheet">
	<link href="assets/vendor/slick/css/slick.css" rel="stylesheet">
	<link href="assets/vendor/nanoscroller/css/nanoscroller.css" rel="stylesheet">
	<link href="assets/vendor/fontawesome/css/brands.css" rel="stylesheet">

	<!-- Template CSS-->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- Custom CSS-->
	<link href="assets/css/custom.css" rel="stylesheet">
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
		color:#ffd202
		}

		</style>


</head>

@if ($main)
<body class="site-layout--landing preloader-is--active bg-image bg-fixed "  style="background-image: url('{{ url('storage/' . $main->image ) }}')">
    @else
    <body class="site-layout--landing preloader-is--active bg-image bg-fixed ">
@endif

	<div class="site-wrapper">

		<!-- Header
		================================================== -->
		<header id="header" class="site-header site-header--landing">

			<!-- Main Navigation Left -->
			<nav class="main-nav">
				<ul class="main-nav__list">
					<li class=""><a href="{{ route('home') }}">Home</a></li>
					<li class="">
						<a href="#">Teams</a>
						<ul class="main-nav__sub">
							<li class="">
								<a href="#">Team Selections</a>
								<ul class="main-nav__sub main-nav__sub--dropup">
									<li class=""><a href="{{ route('ts2') }}">Teams</a></li>
								</ul>
							</li>
							<li class=""><a href="{{ route('staff-page') }}">Staff Page</a></li>
						</ul>
					</li>
					<li class=""><a href="#">Matches</a>
						<ul class="main-nav__sub">
							<li class=""><a href="{{ route('matches-scores') }}">Match Scores</a></li>
							<li class=""><a href="{{ route('upcoming-match') }}">Upcoming Matches</a></li>
							<li class=""><a href="{{ route('matches-standing') }}">Standings</a></li>
							<li class=""><a href="#">Match Stats</a>
								<ul class="main-nav__sub">
									<li class=""><a href="{{ route('match-stats1') }}">Match Stats v1</a></li>
								</ul>
							</li>
							<li class="">
								<a href="#">Match Lineups</a>
								<ul class="main-nav__sub">
									<li class=""><a href="{{ route('matches-lineups1') }}">Match Lineups v1</a></li>
								</ul>
							</li>
							<li class=""><a href="#">Match Overviews</a>
								<ul class="main-nav__sub">
									<li class=""><a href="{{ route('matches-overview1') }}">Match Overview v1</a></li>
								</ul>
							</li>
							<li class=""><a href="{{ route('matches-repaly') }}">Match Replay</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<!-- Main Navigation Left / End -->

			<!-- Logo - Image Based -->
			<div class="header-logo header-logo--img">
                @if ($main)
				<a href="/home"><img src="{{ url('public/storage/' . $main->logo) }}" alt="Necromancers"></a>
                @else
                @endif
            </div>
			<!-- Logo - Image Based / End -->

			<!-- Main Navigation Right -->
			<nav class="main-nav">
				<ul class="main-nav__list">
					<li class=""><a href="#">News</a>
						<ul class="main-nav__sub">
							<li class=""><a href="{{ route('news') }}">News v1</a></li>
						</ul>
					</li>
                    <li >
						<a href="#">About us</a>
						<ul class="main-nav__sub">
							<li class=""><a href="{{ route('contact') }}">Contact</a></li>
							<li class=""><a href="{{ route('faqs') }}">FAQS</a></li>
							<li class=""><a href="{{ route('about') }}">About</a></li>
						</ul>
					</li>
                    <li class="">
						<a href="#">Shop</a>
						<ul class="main-nav__sub">
							<li class=""><a href="{{ route('shop') }}">Shop Page v1</a></li>
						</ul>
					</li>
					<!-- Main Navigation Right / End -->
		</header>
		<!-- Header / End -->

		<!-- Content
		================================================== -->
		<main class="site-content text-center" id="wrapper">

			<div class="site-content__center" >
				<h1 class="text-white landing-title"><span class="subtitle landing-subtitle" style="color:#ffd202">{{ $main->subtitle ?? '' }}</span>{{ $main->title ?? '' }}</h1>
				<a href="{{ route('home') }}" class="btn bg-clr btn-lg btn--landing"><span>Start Browsing!</span></a>
			</div>

		</main>

		<!-- Footer
		================================================== -->
		<footer id="footer" class="footer text-center">
			<ul class="social-menu social-menu--landing social-menu--landing-glitch">
				<li>
					<a href="{{ $main->social_link_1 ?? '' }}" target="_blank">
						<i class="{{ $main->social_link_icon_class_1 ?? '' }}"></i>
						<span class="link-subtitle">{{ $main->social_link_name_1 ?? '' }}</span>{{ $main->social_link_text_1 ?? '' }}
					</a>
				</li>
				<li>
					<a href="{{ $main->social_link_2 ?? '' }}" target="_blank">
						<i class="{{ $main->social_link_icon_class_2 ?? '' }}"></i>
						<span class="link-subtitle">{{ $main->social_link_name_2 ?? '' }}</span>{{ $main->social_link_text_2 ?? '' }}
					</a>
				</li>
				<li>
					<a href="{{ $main->social_link_3 ?? '' }}" target="_blank">
						<i class="{{ $main->social_link_icon_class_3 ?? '' }}"></i>
						<span class="link-subtitle">{{ $main->social_link_name_3 ?? '' }}</span>{{ $main->social_link_text_3 ?? '' }}
					</a>
				</li>
				<li>
					<a href="{{ $main->social_link_4 ?? '' }}" target="_blank">
						<i class="{{ $main->social_link_icon_class_4 ?? '' }}"></i>
						<span class="link-subtitle">{{ $main->social_link_name_4 ?? '' }}</span>{{ $main->social_link_text_4 ?? '' }}
					</a>
				</li>
			</ul>
		</footer>
		<!-- Footer / End -->

		<div class="landing-detail landing-detail--left">
			<span>&nbsp;</span>
			<span>&nbsp;</span>
			<span>&nbsp;</span>
		</div>
		<div class="landing-detail-cover landing-detail-cover--left">
			<span>&nbsp;</span>
			<span>&nbsp;</span>
			<span>&nbsp;</span>
		</div>
		<div class="landing-detail landing-detail--right">
			<span>&nbsp;</span>
			<span>&nbsp;</span>
			<span>&nbsp;</span>
		</div>
		<div class="landing-detail-cover landing-detail-cover--right">
			<span>&nbsp;</span>
			<span>&nbsp;</span>
			<span>&nbsp;</span>
		</div>
		<!-- Overlay -->
		<div class="site-overlay"></div>
		<!-- Overlay / End -->


		<!-- Cart Panel / End -->
		<!-- Search Panel -->
		<div class="search-panel">
			<div class="search-panel__content">
				<form action="#" id="header-search-form" class="search-form search-form--header">
					<input type="text" class="form-control" value="" placeholder="What are you looking for...?">
				</form>
				<span>Write what you are looking for, choose the filters and press enter to begin your search!</span>
			</div>
		</div>
		<!-- Search Panel / End -->
		<!-- Menu Panel -->
		<div class="menu-panel">
			<ul class="menu-panel__mobile-bar list-unstyled d-md-none">
				<li class="mobile-bar-item">
					<a class="mobile-bar-item__header collapsed" data-toggle="collapse" href="#mobile_collapse_1" role="button" aria-expanded="false" aria-controls="mobile_collapse_1">
						Main Links
						<span class="main-nav__toggle">&nbsp;</span>
					</a>
					<div id="mobile_collapse_1" class="collapse mobile-bar-item__body">
						<!-- Mobile Navigation -->
						<nav class="mobile-nav">
							<ul class="mobile-nav__list">
								<li class="active">
									<a href="#">Main Pages</a>
									<ul class="mobile-nav__sub">
										<li class="active"><a href="index.html">Landing Image</a></li>
										<li class=""><a href="index-2.html">Landing Video</a></li>
										<li class=""><a href="home.html">Home page</a></li>
										<li class=""><a href="blog-post.html">Post Page</a></li>
										<li class=""><a href="blog-1.html">News v1</a></li>
										<li class=""><a href="blog-2.html">News v2</a></li>
										<li class=""><a href="blog-3.html">News v3</a></li>
										<li class=""><a href="blog-4.html">News v4</a></li>
										<li class=""><a href="shop-account-settings.html">Account Settings</a></li>
										<li class=""><a href="shop-account-orders.html">Account Orders</a></li>
										<li class=""><a href="login-register.html">Login & Register</a></li>
										<li class=""><a href="features-about-us.html">About Us</a></li>
										<li class=""><a href="features-contact-us.html">Contact Us</a></li>
										<li class=""><a href="features-faqs.html">FAQs</a></li>
										<li class=""><a href="management-and-staff.html">Staff</a></li>
										<li class=""><a href="staff-member.html">Staff Member<span class="badge badge-danger">New</span></a></li>
										<li class=""><a href="streams-archive.html">Streams Page</a></li>
										<li class=""><a href="partners.html">Our Partners</a></li>
										<li class=""><a href="features-shortcodes.html">Shortcodes</a></li>
										<li class=""><a href="features-typography.html">Typography</a></li>
										<li class=""><a href="features-icons.html">Icons</a></li>
										<li class=""><a href="features-404.html">404 Error <span class="badge badge-danger">New</span></a></li>
										<li class=""><a href="features-bg-1.html">Backgrounds</a></li>
									</ul>
								</li>
								<li class="">
									<a href="#">Team Pages</a>
									<ul class="mobile-nav__sub">
										<li class=""><a href="team-selection-1.html">Team Selection v1</a></li>
										<li class=""><a href="team-selection-2.html">Team Selection v2</a></li>
										<li class=""><a href="team-selection-3.html">Team Selection v3</a></li>
										<li class=""><a href="team-selection-4.html">Team Selection v4</a></li>
										<li class=""><a href="team-overview.html">Team Overview v1</a></li>
										<li class=""><a href="team-overview-2.html">Team Overview v2</a></li>
										<li><a href="team-overview.html?slide=1">Team Statistics</a></li>
										<li><a href="team-overview.html?slide=2">Team Achievements</a></li>
										<li><a href="team-overview.html?slide=3">Team Matches</a></li>
									</ul>
								</li>
								<li class="">
									<a href="#">Player Pages</a>
									<ul class="mobile-nav__sub">
										<li><a href="team-player-1.html">Player Overview</a></li>
										<li><a href="team-player-1.html?slide=1">Player Statistics</a></li>
										<li><a href="team-player-1.html?slide=2">Player Achievements</a></li>
										<li><a href="team-player-1.html?slide=3">Player Hardware</a></li>
										<li><a href="team-player-1.html?slide=4">Player Stream</a></li>
									</ul>
								</li>
								<li class="">
									<a href="#">Match Pages</a>
									<ul class="mobile-nav__sub">
										<li class=""><a href="matches-scores.html">Match Scores</a></li>
										<li class=""><a href="matches-upcoming.html">Upcoming Matches</a></li>
										<li class=""><a href="matches-standings.html">Standings</a></li>
										<li class=""><a href="matches-overview-1.html">Match Overview v1</a></li>
										<li class=""><a href="matches-overview-2.html">Match Overview v2</a></li>
										<li class=""><a href="matches-stats-1.html">Match Stats v1</a></li>
										<li class=""><a href="matches-stats-2.html">Match Stats v2</a></li>
										<li class=""><a href="matches-stats-3.html">Match Stats v3</a></li>
										<li class=""><a href="matches-lineups-1.html">Match Lineups v1</a></li>
										<li class=""><a href="matches-lineups-2.html">Match Lineups v2</a></li>
										<li class=""><a href="matches-lineups-3.html">Match Lineups v3</a></li>
										<li class=""><a href="matches-replay.html">Match Replay</a></li>
									</ul>
								</li>
								<li class="">
									<a href="#">Shop Pages</a>
									<ul class="mobile-nav__sub">
										<li class=""><a href="shop.html">Shop Page v1</a></li>
										<li class=""><a href="shop-2.html">Shop Page v2</a></li>
										<li class=""><a href="shop-product.html">Product Page</a></li>
										<li class=""><a href="shop-checkout.html">Checkout Page</a></li>
									</ul>
								</li>
							</ul>
						</nav>
						<!-- Mobile Navigation / End -->
					</div>
				</li>
				<li class="mobile-bar-item">
					<a class="mobile-bar-item__header collapsed" data-toggle="collapse" href="#mobile_collapse_2" role="button" aria-expanded="false" aria-controls="mobile_collapse_2">
						Social Links
						<span class="main-nav__toggle">&nbsp;</span>
					</a>
					<div id="mobile_collapse_2" class="collapse mobile-bar-item__body">
						<ul class="social-menu social-menu--mobile-bar">
							<li><a href="https://www.facebook.com/danfisher.dev/"><span>Facebook</span></a></li>
							<li><a href="https://twitter.com/danfisher_dev"><span>Twitter</span></a></li>
							<li><a href="https://twitch.tv"><span>Twitch</span></a></li>
							<li><a href="https://discordapp.com"><span>Discord</span></a></li>
						</ul>
					</div>
				</li>
				<li class="mobile-bar-item mobile-bar-item--info">
					<a class="mobile-bar-item__header collapsed" data-toggle="collapse" href="#mobile_collapse_3" role="button" aria-expanded="false" aria-controls="mobile_collapse_3">
						Get in Touch!
						<span class="main-nav__toggle">&nbsp;</span>
					</a>
					<div id="mobile_collapse_3" class="collapse mobile-bar-item__body">
						<div class="mobile-bar-item__inner">
							<ul class="list-unstyled">
								<li class="info-box">
									<div class="info-box__label">Max Parker - Recruiter</div>
									<div class="info-box__content"><a href="mailto:#">mp-recruit<span class="color-primary">@</span>necromancers.com</a></div>
								</li>
								<li class="info-box">
									<div class="info-box__label">Be our partner!</div>
									<div class="info-box__content"><a href="mailto:#">partners<span class="color-primary">@</span>necromancers.com</a></div>
								</li>
								<li class="info-box">
									<div class="info-box__label">General inquiries</div>
									<div class="info-box__content"><a href="mailto:#">inquiries<span class="color-primary">@</span>necromancers.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</li>
			</ul>

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
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/jquery/jquery-migrate.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/core.js"></script>

	<!-- Vendor JS -->

	<!-- Template JS -->
	<script src="assets/js/init.js"></script>
	<script src="assets/js/custom.js"></script>

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

</html>
