@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <div class="site-wrapper site-layout--default">

            <!-- Content
            ================================================== -->
            <main class="site-content" id="wrapper">
                <div class="site-content__inner">
                    <div class="site-content__holder">
                        <figure class="page-thumbnail page-thumbnail--default">
                            <img class="page-bg-logo" src="assets/img/samples/page-bg-logo.png" alt="">
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
                        <h1 class="page-title h3">Faqs</h1>
                        <div class="page-content">
                            <div class="accordion" id="accordionFaqs">
                                @forelse ($faqs as $faq)
                                <div class="accordion-item">
                                    <div class="accordion-item__header" id="headingOne">
                                        <button class="accordion-item__link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{ $faq->question ?? '' }}
                                            <span class="accordion-item__icon">&nbsp;</span>
                                        </button>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFaqs">
                                        <div class="accordion-item__body">
                                            {{ $faq->answer ?? '' }}
                                        </div>
                                    </div>
                                </div>
                                @empty
                                    <h1 class="text-center"> No data Found </h1>
                                @endforelse


                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
@endsection

