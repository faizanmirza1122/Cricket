@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <div class="site-wrapper site-layout--default">
        <main class="site-content contact-us-page" id="wrapper">
			<div class="site-content__inner">
				<div class="site-content__holder">
					<h1 class="page-title h3">Contact us</h1>
					<div class="page-content">
						<h4 class="text-sm">Contact info</h4>
						<p>
							If you have any questions, just send us and email and don’t forget to follow and like all our social accounts to keep updated!
						</p>
						<div class="info-box">
							<div class="info-box__label">General inquiries</div>
							<div class="info-box__content"><a href="mailto:#">inquiries<span class="color-primary">@</span>necromancers.com</a></div>
						</div>
						<ul class="social-menu social-menu--links">
							<li><a href="https://www.facebook.com/danfisher.dev/"></a></li>
							<li><a href="https://twitter.com/danfisher_dev"></a></li>
							<li><a href="https://twitch.tv"></a></li>
							<li><a href="https://discordapp.com"></a></li>
						</ul>
						<h4 class="text-sm">Join our team</h4>
						<p>
							We’re always looking for new talent to join our teams. If you wanna join us, just send us and email and we’ll get back to you!
						</p>
						<div class="info-box">
							<div class="info-box__label">Max Parker - Recruiter</div>
							<div class="info-box__content"><a href="mailto:#">mp-recruit<span class="color-primary">@</span>necromancers.com</a></div>
						</div>
						<div class="info-box">
							<div class="info-box__label">Be our partner!</div>
							<div class="info-box__content"><a href="mailto:#">partners<span class="color-primary">@</span>necromancers.com</a></div>
						</div>
						<span class="spacer-lg">&nbsp;</span>
						<h4>Send us a message</h4>
						<form action="#" class="form">
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
										<textarea name="input-message" cols="30" rows="5" class="form-control" id="input-message" placeholder="Your Message"></textarea>
									</div>
								</div>
							</div>
							<button class="btn btn-secondary">Send message</button>
						</form>
					</div>
					<!-- Google Map -->
					<div class="gm-map gm-map--aside" data-map-style="necromancers" data-map-address="645 5th Ave, New York, US" data-map-icon="assets/img/map-marker.png" data-map-zoom="15">
						<div class="gm-map__info">
							Necromancers</br>
							<span class="color-primary">Headquarters</span>
							<address>1284 W 52nd Street </br>Suite 8, New York</address>
						</div>
					</div>
					<!-- Google Map / End -->
				</div>
			</div>
		</main>


        </div>
@endsection

