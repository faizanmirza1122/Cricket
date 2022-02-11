@extends('layouts.master')

@section('content')
    <!-- Content
          ================================================== -->
    <div class="site-wrapper site-layout--default">
        <main class="site-content" id="wrapper">
            <div class="site-content__inner">
                <div class="site-content__holder">
                    <figure class="page-thumbnail page-thumbnail--default">
                        @if ($about)
                            <img class="page-bg-logo" src="{{ asset('storage/' . $about->side_logo_1) }}" alt="">
                        @else
                        @endif
                        <!-- Decoration -->
                        <div class="ncr-page-decor">
                            <div class="ncr-page-decor__layer-1">
                                <div class="ncr-page-decor__layer-bg"></div>
                            </div>
                            <div class="ncr-page-decor__layer-2"></div>
                            <div class="ncr-page-decor__layer-3">
                                <div class="ncr-page-decor__layer-bg"></div>
                            </div>
                            <div class="ncr-page-decor__layer-4"></div>
                            <div class="ncr-page-decor__layer-5"></div>
                            <div class="ncr-page-decor__layer-6"></div>
                        </div>
                        <!-- Decoration / End -->
                    </figure>
                    <h1 class="page-title h3">{{ $about->title ?? '' }}</h1>
                    <div class="page-content">
                        <p>
                            {!! $about->description ?? '' !!}
                        </p>
                        <div class="spacer"></div>
                        @if ($about)
                            <div style="background-image: url('{{ asset('storage/' . $about->image) }}'); height:50%">
                            @else
                        @endif

                    </div>
                    <div class="spacer"></div>
                    <h4>{{ $about->why_us_title }}</h4>
                    <div class="spacer"></div>
                    <p>
                        {!! $about->why_us_description ?? '' !!}
                    </p>
                    <div class="spacer"></div>
                    <div class="row">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="counter">
                                <div class="counter__icon counter__icon--left">
                                    @if ($about)
                                        <img src="{{ asset('storage/' . $about->logo_1) }}" width="35px">
                                    @else
                                    @endif
                                </div>
                                <div class="counter__number">{{ $about->logo_number_1 ?? '' }}</div>
                                <div class="counter__label">{{ $about->logo_name_1 ?? '' }}</div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <div class="counter">
                                <div class="counter__icon counter__icon--left">
                                    @if ($about)
                                        <img src="{{ asset('storage/' . $about->logo_2) }}" width="35px">
                                    @else
                                    @endif
                                </div>
                                <div class="counter__number">{{ $about->logo_number_2 ?? '' }}</div>
                                <div class="counter__label">{{ $about->logo_name_2 ?? '' }}</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="counter">
                                <div class="counter__icon counter__icon--left">
                                    @if ($about)
                                        <img src="{{ asset('storage/' . $about->logo_3) }}" width="35px">
                                    @else
                                    @endif
                                </div>
                                <div class="counter__number">{{ $about->logo_number_3 ?? '' }}</div>
                                <div class="counter__label">{{ $about->logo_name_3 ?? '' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>
@endsection
