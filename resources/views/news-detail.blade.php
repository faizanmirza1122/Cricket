@extends('layouts.master')

@section('content')
 <!-- Header
                ================================================== -->
                <header id="header" class="site-header site-header--bottom"></header>
                <!-- Header / End -->
		<!-- Content
		================================================== -->
		{{-- <main class="site-content" id="wrapper">
            <div class="site-content__inner">
                <div class="site-content__holder">
                    <!-- Post -->
                    <article class="post post--single">
                        <figure class="post__thumbnail">
                            <img src="{{ asset('storage/' . $news->image) }}" width="1px">
                        </figure>

                        <div class="post__header">
                            <div class="post__cats h6">
                                <span class="color-warning">{{ $news->category ?? '' }}</span>
                            </div>
                            <h2 class="post__title h3">{{ $news->name ?? '' }}</h2>
                            <div class="post__meta">
                                <span class="meta-item meta-item--date">{{ $news->date ?? '' }}</span>
                            </div>
                        </div>
                        <div class="post__body">
                            <p>
                                {{ $news->description ?? '' }}
                            </p>
                            <figure>
                                <img src="{{ asset('storage/' . $news->body_image ?? '') }}" width="1px" alt="">
                                <figcaption>{{ $news->name ?? '' }}</figcaption>
                            </figure>
                            <p>
                                {{ $news->description_under_image ?? '' }}
                            </p>
                        </div>
                    </article>
                    <!-- Post / End -->
                    {{-- <!-- Post Comments -->
                    <div class="post-comments" id="comments">
                        <h4 class="post-comments__title">Comments (4)</h4>
                        <ol class="comments">
                            <li class="comment">
                                <div class="comment__avatar">
                                    <img src="assets/img/samples/news-post-img-03.jpg" alt="">
                                </div>
                                <div class="comment__body">
                                    <h6 class="comment__author">Mark Stark</h6>
                                    <p>
                                        Magni dolores eos qui ratione voluptatem sequi nesciunt der voluptate velit esse cillum dolore eu pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                    <div class="comment__meta">
                                        <time class="comment__date">5 minutes ago</time>
                                        <div class="comment__reply"><a href="#">Reply</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="comment">
                                <div class="comment__avatar">
                                    <img src="assets/img/samples/news-post-img-04.jpg" alt="">
                                </div>
                                <div class="comment__body">
                                    <h6 class="comment__author">Marina Valentine</h6>
                                    <p>
                                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia.
                                    </p>
                                    <div class="comment__meta">
                                        <time class="comment__date">23 minutes ago</time>
                                        <div class="comment__reply"><a href="#">Reply</a></div>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="comment">
                                        <div class="comment__avatar">
                                            <img src="assets/img/samples/news-post-img-05.jpg" alt="">
                                        </div>
                                        <div class="comment__body">
                                            <h6 class="comment__author">Nicholas Grissom</h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                            </p>
                                            <div class="comment__meta">
                                                <time class="comment__date">11 minutes ago</time>
                                                <div class="comment__reply"><a href="#">Reply</a></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="comment">
                                <div class="comment__avatar">
                                    <img src="assets/img/samples/news-post-img-06.jpg" alt="">
                                </div>
                                <div class="comment__body">
                                    <h6 class="comment__author">Peter Morales</h6>
                                    <p>
                                        Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                    </p>
                                    <div class="comment__meta">
                                        <time class="comment__date">1 hour ago</time>
                                        <div class="comment__reply"><a href="#">Reply</a></div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <!-- Post Comments / End -->
                    <!-- Comment Form -->
                    <div class="post-comments-form">
                        <h4 class="post-comments-form__title">Leave a comment</h4>
                        <form action="#" class="comment-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="input-name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="input-email" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="input-comment" cols="30" rows="5" class="form-control" id="input-comment" placeholder="Your Comment"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-secondary">Post Comment</button>
                        </form>
                    </div>
                    <!-- Comment Form / End -->
                </div>
            </div>
        </main> --}}



<body class="preloader-is--active ">

	<div class="site-wrapper site-layout--default">

		<!-- Header
		================================================== -->
		<header id="header" class="site-header site-header--bottom">

			<!-- Logo - Image Based -->
			<div class="header-logo header-logo--img">
				<a href="index.html"><img src="assets/img/logo.png" srcset="assets/img/logo@2x.png 2x" alt="Necromancers"></a>
			</div>
			<!-- Logo - Image Based / End -->


			<!-- Main Navigation -->
			<nav class="main-nav">
				<ul class="main-nav__list">
					<li class=""><a href="home.html">Home</a></li>
					<li class="">
						<a href="#">Teams</a>
						<ul class="main-nav__sub">
							<li class="">
								<a href="#">Team Selections</a>
								<ul class="main-nav__sub main-nav__sub--dropup">
									<li class=""><a href="team-selection-1.html">Team Selection v1</a></li>
									<li class=""><a href="team-selection-2.html">Team Selection v2</a></li>
									<li class=""><a href="team-selection-3.html">Team Selection v3</a></li>
									<li class=""><a href="team-selection-4.html">Team Selection v4</a></li>
								</ul>
							</li>
							<li class="">
								<a href="team-overview.html">Team Overview</a>
								<ul class="main-nav__sub">
									<li class=""><a href="team-overview.html">Team Overview v1</a></li>
									<li class=""><a href="team-overview-2.html">Team Overview v2</a></li>
								</ul>
							</li>
							<li class=""><a href="team-player-1.html">Player Page</a></li>
							<li class=""><a href="management-and-staff.html">Staff Page</a></li>
							<li class=""><a href="staff-member.html">Staff Member<span class="badge badge-danger">New</span></a></li>
						</ul>
					</li>
					<li class=""><a href="#">Matches</a>
						<ul class="main-nav__sub">
							<li class=""><a href="matches-scores.html">Match Scores</a></li>
							<li class=""><a href="matches-upcoming.html">Upcoming Matches</a></li>
							<li class=""><a href="matches-standings.html">Standings</a></li>
							<li class=""><a href="#">Match Stats</a>
								<ul class="main-nav__sub">
									<li class=""><a href="matches-stats-1.html">Match Stats v1</a></li>
									<li class=""><a href="matches-stats-2.html">Match Stats v2</a></li>
									<li class=""><a href="matches-stats-3.html">Match Stats v3</a></li>
								</ul>
							</li>
							<li class="">
								<a href="#">Match Lineups</a>
								<ul class="main-nav__sub">
									<li class=""><a href="matches-lineups-1.html">Match Lineups v1</a></li>
									<li class=""><a href="matches-lineups-2.html">Match Lineups v2</a></li>
									<li class=""><a href="matches-lineups-3.html">Match Lineups v3</a></li>
								</ul>
							</li>
							<li class=""><a href="#">Match Overviews</a>
								<ul class="main-nav__sub">
									<li class=""><a href="matches-overview-1.html">Match Overview v1</a></li>
									<li class=""><a href="matches-overview-2.html">Match Overview v2</a></li>
								</ul>
							</li>
							<li class=""><a href="matches-replay.html">Match Replay</a></li>
						</ul>
					</li>
					<li class="active"><a href="#">News</a>
						<ul class="main-nav__sub">
							<li class=""><a href="blog-1.html">News v1</a></li>
							<li class=""><a href="blog-2.html">News v2</a></li>
							<li class=""><a href="blog-3.html">News v3</a></li>
							<li class=""><a href="blog-4.html">News v4</a></li>
							<li class=""><a href="blog-classic.html">News Classic</a></li>
							<li class="active"><a href="blog-post.html">Post Page</a></li>
						</ul>
					</li>
					<li><a href="#">Features</a>
						<div class="main-nav__megamenu">
							<div class="row">
								<div class="col-md-4">
									<h6 class="main-nav__title">Main Pages</h6>
									<div class="row">
										<ul class="col-md-4">
											<li class=""><a href="index.html">Landing Image</a></li>
											<li class=""><a href="index-2.html">Landing Video</a></li>
											<li class=""><a href="blog-1.html">News v1</a></li>
											<li class=""><a href="blog-2.html">News v2</a></li>
											<li class=""><a href="blog-3.html">News v3</a></li>
											<li class=""><a href="blog-4.html">News v4</a></li>
											<li class=""><a href="blog-classic.html">News Classic</a></li>
										</ul>
										<ul class="col-md-4">
											<li class=""><a href="shop-account-settings.html">Account Settings</a></li>
											<li class=""><a href="shop-account-orders.html">Account Orders</a></li>
											<li class=""><a href="login-register.html">Login & Register</a></li>
											<li class=""><a href="features-about-us.html">About Us</a></li>
											<li class=""><a href="management-and-staff.html">Staff</a></li>
											<li class=""><a href="staff-member.html">Staff Member<span class="badge badge-danger">New</span></a></li>
											<li class=""><a href="features-contact-us.html">Contact Us</a></li>
											<li class=""><a href="features-faqs.html">FAQs</a></li>
										</ul>
										<ul class="col-md-4">
											<li class=""><a href="streams-archive.html">Streams Page</a></li>
											<li class=""><a href="partners.html">Our Partners</a></li>
											<li class=""><a href="features-shortcodes.html">Shortcodes</a></li>
											<li class=""><a href="features-typography.html">Typography</a></li>
											<li class=""><a href="features-icons.html">Icons</a></li>
											<li class=""><a href="features-404.html">404 Error<span class="badge badge-danger">New</span></a></li>
											<li class=""><a href="features-bg-1.html">Backgrounds</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										<h6 class="col-md-8 main-nav__title">Team Pages</h6>
										<h6 class="col-md-4 main-nav__title">Player Pages</h6>
									</div>
									<div class="row">
										<ul class="col-md-4">
											<li class=""><a href="team-selection-1.html">Team Selection v1</a></li>
											<li class=""><a href="team-selection-2.html">Team Selection v2</a></li>
											<li class=""><a href="team-selection-3.html">Team Selection v3</a></li>
											<li class=""><a href="team-selection-4.html">Team Selection v4</a></li>
											<li class=""><a href="team-overview.html">Team Overview v1</a></li>
											<li class=""><a href="team-overview-2.html">Team Overview v2</a></li>
										</ul>
										<ul class="col-md-4">
											<li><a href="team-overview.html?slide=1">Team Statistics</a></li>
											<li><a href="team-overview.html?slide=2">Team Achv</a></li>
											<li><a href="team-overview.html?slide=3">Team Matches</a></li>
										</ul>
										<ul class="col-md-4">
											<li><a href="team-player-1.html">Player Overview</a></li>
											<li><a href="team-player-1.html?slide=1">Player Statistics</a></li>
											<li><a href="team-player-1.html?slide=2">Player Achv</a></li>
											<li><a href="team-player-1.html?slide=3">Player Hardware</a></li>
											<li><a href="team-player-1.html?slide=4">Player Stream</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										<h6 class="col-md-8 main-nav__title">Match Pages</h6>
										<h6 class="col-md-4 main-nav__title">Shop Pages</h6>
									</div>
									<div class="row">
										<ul class="col-md-4">
											<li class=""><a href="matches-scores.html">Match Scores</a></li>
											<li class=""><a href="matches-upcoming.html">Upcoming Matches</a></li>
											<li class=""><a href="matches-standings.html">Standings</a></li>
											<li class=""><a href="matches-overview-1.html">Overview v1</a></li>
											<li class=""><a href="matches-overview-2.html">Overview v2</a></li>
											<li class=""><a href="matches-stats-1.html">Match Stats v1</a></li>
										</ul>
										<ul class="col-md-4">
											<li class=""><a href="matches-stats-2.html">Match Stats v2</a></li>
											<li class=""><a href="matches-stats-3.html">Match Stats v3</a></li>
											<li class=""><a href="matches-lineups-1.html">Match Lineups v1</a></li>
											<li class=""><a href="matches-lineups-2.html">Match Lineups v2</a></li>
											<li class=""><a href="matches-lineups-3.html">Match Lineups v3</a></li>
											<li class=""><a href="matches-replay.html">Match Replay</a></li>
										</ul>
										<ul class="col-md-4">
											<li class=""><a href="shop.html">Shop Page v1</a></li>
											<li class=""><a href="shop-2.html">Shop Page v2</a></li>
											<li class=""><a href="shop-product.html">Product Page</a></li>
											<li class=""><a href="shop-checkout.html">Checkout Page</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="">
						<a href="#">Shop</a>
						<ul class="main-nav__sub">
							<li class=""><a href="shop.html">Shop Page v1</a></li>
							<li class=""><a href="shop-2.html">Shop Page v2</a></li>
							<li class=""><a href="shop-product.html">Product Page</a></li>
							<li class=""><a href="shop-checkout.html">Checkout Page</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<!-- Main Navigation / End -->

			<!-- Header Actions -->
			<div class="header-actions">
				<div class="header-top-bar-toggle d-md-none hide">
					<svg role="img" class="df-icon df-icon--joystick">
						<use xlink:href="assets/img/necromancers.svg#joystick"/>
					</svg>
					<svg role="img" class="df-icon df-icon--close">
						<use xlink:href="assets/img/necromancers.svg#close"/>
					</svg>
				</div>
				<div class="header-social-toggle d-none d-md-block">
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
				</div>
				<div class="header-cart-toggle">
					<svg role="img" class="df-icon df-icon--bag">
						<use xlink:href="assets/img/necromancers.svg#bag"/>
					</svg>
					<svg role="img" class="df-icon df-icon--close">
						<use xlink:href="assets/img/necromancers.svg#close"/>
					</svg>
					<span class="header-cart-toggle__items-count">4</span>
				</div>
				<div class="header-search-toggle">
					<svg role="img" class="df-icon df-icon--search">
						<use xlink:href="assets/img/necromancers.svg#search"/>
					</svg>
					<svg role="img" class="df-icon df-icon--search-close">
						<use xlink:href="assets/img/necromancers.svg#search-close"/>
					</svg>
				</div>
				<div class="header-account hide">
					<div class="header-account__avatar">
						<img src="assets/img/samples/account-user-avatar.jpg" srcset="assets/img/samples/account-user-avatar@2x.jpg 2x" alt="">
					</div>
					<div class="header-account__body">
						Hello!
						<div class="header-account__name">James Spiegel</div>
					</div>
					<div class="header-account__icon">
						<a href="shop-account-settings.html">
							<svg role="img" class="df-icon df-icon--account">
								<use xlink:href="assets/img/necromancers.svg#account"/>
							</svg>
						</a>
						<a href="login-register.html">
							<svg role="img" class="df-icon df-icon--logout">
								<use xlink:href="assets/img/necromancers.svg#logout"/>
							</svg>
						</a>
					</div>
				</div>
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
		<main class="site-content" id="wrapper">
			<div class="site-content__inner">
				<div class="site-content__holder">
					<!-- Post -->
					<article class="post post--single">
						<figure class="post__thumbnail">
							<img src="assets/img/samples/news-post-img-01.jpg" alt="">
						</figure>
						<div class="post__header">
							<div class="post__cats h6">
								<span class="color-warning">{{ $news->category ?? '' }}</span>
							</div>
							<h2 class="post__title h3">{{ $news->title ?? '' }}</h2>
							<div class="post__meta">
								<span class="meta-item meta-item--date">{{ $news->date ?? '' }}</span>
							</div>
						</div>
						<div class="post__body">
							<p>
								{{ $news->description }}
							</p>
							<figure>
                                @if($news)
								<img src="{{ asset('storage/' . $news->image) }}" alt="">
								<figcaption>{{ $news->name }}</figcaption>
                                @else
                                @endif
							</figure>
							<p>
							{{ $news->description }}
							</p>
						</div>
					</article>
					<!-- Post / End -->
					<!-- Post Comments -->
					<div class="post-comments" id="comments">
						<h4 class="post-comments__title">Comments (4)</h4>
						<ol class="comments">
							<li class="comment">
								<div class="comment__avatar">
									<img src="assets/img/samples/news-post-img-03.jpg" alt="">
								</div>
								<div class="comment__body">
									<h6 class="comment__author">Mark Stark</h6>
									<p>
										Magni dolores eos qui ratione voluptatem sequi nesciunt der voluptate velit esse cillum dolore eu pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
									<div class="comment__meta">
										<time class="comment__date">5 minutes ago</time>
										<div class="comment__reply"><a href="#">Reply</a></div>
									</div>
								</div>
							</li>
							<li class="comment">
								<div class="comment__avatar">
									<img src="assets/img/samples/news-post-img-04.jpg" alt="">
								</div>
								<div class="comment__body">
									<h6 class="comment__author">Marina Valentine</h6>
									<p>
										Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci velit sed quia.
									</p>
									<div class="comment__meta">
										<time class="comment__date">23 minutes ago</time>
										<div class="comment__reply"><a href="#">Reply</a></div>
									</div>
								</div>
								<ul class="children">
									<li class="comment">
										<div class="comment__avatar">
											<img src="assets/img/samples/news-post-img-05.jpg" alt="">
										</div>
										<div class="comment__body">
											<h6 class="comment__author">Nicholas Grissom</h6>
											<p>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
											</p>
											<div class="comment__meta">
												<time class="comment__date">11 minutes ago</time>
												<div class="comment__reply"><a href="#">Reply</a></div>
											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="comment">
								<div class="comment__avatar">
									<img src="assets/img/samples/news-post-img-06.jpg" alt="">
								</div>
								<div class="comment__body">
									<h6 class="comment__author">Peter Morales</h6>
									<p>
										Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
									</p>
									<div class="comment__meta">
										<time class="comment__date">1 hour ago</time>
										<div class="comment__reply"><a href="#">Reply</a></div>
									</div>
								</div>
							</li>
						</ol>
					</div>
					<!-- Post Comments / End -->
					<!-- Comment Form -->
					<div class="post-comments-form">
						<h4 class="post-comments-form__title">Leave a comment</h4>
						<form action="#" class="comment-form">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="input-name" placeholder="Your Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="input-email" placeholder="Your Email">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="input-comment" cols="30" rows="5" class="form-control" id="input-comment" placeholder="Your Comment"></textarea>
									</div>
								</div>
							</div>
							<button class="btn btn-secondary">Post Comment</button>
						</form>
					</div>
					<!-- Comment Form / End -->
				</div>
			</div>
		</main>


		<!-- Overlay -->
		<div class="site-overlay"></div>
		<!-- Overlay / End -->

		<!-- Cart Panel -->
		<div class="cart-panel">
			<h4 class="cart-panel__title text-white">Shopping Cart (<span class="cart-panel__items-count">4</span>)</h4>
			<div class="cart-panel__content">
				<div class="table-responsive">
					<table class="table shop-table">
						<thead>
							<tr>
								<th class="product__info">Product</th>
								<th class="product__quantity">Quantity</th>
								<th class="product__total">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="product__info">
									<figure class="product__thumb">
										<a href="#"><img src="assets/img/cart-panel-img-01.jpg" alt=""></a>
									</figure>
									<div class="product__info-content">
										<h5 class="product__name"><a href="#">Magimons Black Frame Print</a></h5>
										<span class="product__cat">Framed Prints</span>
										<span class="product__info-details">24"x12" | Glossy</span>
									</div>
								</td>
								<td class="product__quantity">
									<div class="quantity-control">
										<button class="quantity-control__minus">&nbsp;</button>
										<input type="number" step="1" value="1" size="4">
										<button class="quantity-control__plus">&nbsp;</button>
									</div>
								</td>
								<td class="product__total"><span class="product__total-currency">$</span>38.00</td>
								<td class="product__remove"><a href="#" class="product__remove-icon"></a></td>
							</tr>
							<tr>
								<td class="product__info">
									<figure class="product__thumb">
										<a href="#"><img src="assets/img/cart-panel-img-02.jpg" alt=""></a>
									</figure>
									<div class="product__info-content">
										<h5 class="product__name"><a href="#">Necromancers Men's T-Shirt</a></h5>
										<span class="product__cat">Clothing</span>
										<span class="product__info-details">Black | Medium</span>
									</div>
								</td>
								<td class="product__quantity">
									<div class="quantity-control">
										<button class="quantity-control__minus">&nbsp;</button>
										<input type="number" step="1" value="2" size="4">
										<button class="quantity-control__plus">&nbsp;</button>
									</div>
								</td>
								<td class="product__total"><span class="product__total-currency">$</span>49.98</td>
								<td class="product__remove"><a href="#" class="product__remove-icon"></a></td>
							</tr>
							<tr>
								<td class="product__info">
									<figure class="product__thumb">
										<a href="#"><img src="assets/img/cart-panel-img-03.jpg" alt=""></a>
									</figure>
									<div class="product__info-content">
										<h5 class="product__name"><a href="#">Necromancers Ennamel Mug</a></h5>
										<span class="product__cat">Coffee Mugs</span>
										<span class="product__info-details">White</span>
									</div>
								</td>
								<td class="product__quantity">
									<div class="quantity-control">
										<button class="quantity-control__minus">&nbsp;</button>
										<input type="number" step="1" value="1" size="4">
										<button class="quantity-control__plus">&nbsp;</button>
									</div>
								</td>
								<td class="product__total"><span class="product__total-currency">$</span>16.00</td>
								<td class="product__remove"><a href="#" class="product__remove-icon"></a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="cart-panel__totals">
					<div class="table-responsive">
						<table class="table">
							<tfoot>
								<tr class="cart-panel__subtotal">
									<th>Cart Subtotal</th>
									<td>
										<span class="amount"><span class="amount-currency">$</span>103.98</span>
									</td>
								</tr>
								<tr class="cart-panel__shipping">
									<th>Estimated Shipping</th>
									<td><span class="amount"><span class="amount-currency">$</span>14.00</span></td>
								</tr>
								<tr class="cart-panel__order-total">
									<th>Cart Total</th>
									<td><span class="amount"><span class="amount-currency">$</span>117.98</span></td>
								</tr>
								</tfoot>
						</table>
						<a href="shop-checkout.html" class="btn btn-primary">Go to checkout</a>
					</div>
				</div>
			</div>
		</div>
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
								<li class="">
									<a href="#">Main Pages</a>
									<ul class="mobile-nav__sub">
										<li class=""><a href="index.html">Landing Image</a></li>
										<li class=""><a href="index-2.html">Landing Video</a></li>
										<li class=""><a href="home.html">Home page</a></li>
										<li class="active"><a href="blog-post.html">Post Page</a></li>
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
				<li class="mobile-bar-item mobile-bar-item--partners">
					<a id="mobile_collapse_4h" class="mobile-bar-item__header collapsed" data-toggle="collapse" href="#mobile_collapse_4" role="button" aria-expanded="false" aria-controls="mobile_collapse_4">
						Our Partners
						<span class="main-nav__toggle">&nbsp;</span>
					</a>
					<div id="mobile_collapse_4" class="collapse mobile-bar-item__body">
						<div class="mobile-bar-item__inner">
							<ul class="widget-partners-mobile-carousel">
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
					</div>
				</li>
				<li class="mobile-bar-item">
					<a class="mobile-bar-item__header" href="shop-account-settings.html">
						Account Settings
					</a>
				</li>
				<li class="mobile-bar-item">
					<a class="mobile-bar-item__header" href="login-register.html">
						Logout
					</a>
				</li>
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


	</div>


</body>

</html>



        @endsection