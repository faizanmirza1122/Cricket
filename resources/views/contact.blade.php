@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <div class="site-wrapper site-layout--default">
        <main class="site-content contact-us-page" id="wrapper">
			<div class="site-content__inner">
				<div class="site-content__holder">
					<h1 class="page-title h3">{{ $contact->title  ?? '' }}</h1>
					<div class="page-content">
						<h4 class="text-sm">{{ $contact->contact_info ?? '' }}</h4>
						<p>
                            {!! $contact->description ?? '' !!}
                        </p>
						<div class="info-box">
							<div class="info-box__label">{{ $contact->general_inquries_title ?? '' }}</div>
							<div class="info-box__content"><a href="mailto:#">{{ $contact->general_inquries_email ?? '' }}</a></div>
						</div>
						<ul class="social-menu social-menu--links">
							<li><a href="{{ $contact->social_link_1 ?? '' }}"></a></li>
							<li><a href="{{ $contact->social_link_2 ?? '' }}"></a></li>
							<li><a href="{{ $contact->social_link_3 ?? '' }}"></a></li>
						</ul>
						<h4 class="text-sm">{{ $contact->join_our_team ?? '' }}</h4>
						<p>
                            {!!  $contact->join_team_description ?? '' !!}
                        </p>
						<div class="info-box">
							<div class="info-box__label">{{ $contact->be_our_partner_text ?? '' }}</div>
							<div class="info-box__content"><a href="mailto:{{ $contact->be_our_partner_email ?? '' }}">{{ $contact->be_our_partner_email ?? '' }}</a></div>
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
					<div class="gm-map gm-map--aside" data-map-style="necromancers" data-map-address="{{ $contact->map ?? '' }}" data-map-icon="{{ $contact->map ?? '' }}" data-map-zoom="15">
						<div class="gm-map__info">
							Necromancers</br>
							<span class="color-primary">Headquarters</span>
							<address>1284 W 52nd Street </br>Suite 8, New York</address>
						</div>
					</div>
                    {{-- <iframe
                        width="600"
                        height="450"
                        frameborder="0" style="border:0"
                        src="{{ $contact->map ?? '' }}
                        &q={{$loc->lat}},{{$loc->long}}" allowfullscreen>
                    </iframe> --}}
					<!-- Google Map / End -->
				</div>
			</div>
		</main>


        </div>
@endsection

