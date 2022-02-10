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
                                <div class="accordion-item">
                                    <div class="accordion-item__header" id="headingOne">
                                        <button class="accordion-item__link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            How many teams do you currently have?
                                            <span class="accordion-item__icon">&nbsp;</span>
                                        </button>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFaqs">
                                        <div class="accordion-item__body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-item__header" id="headingTwo">
                                        <button class="accordion-item__link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Can I join one of your teams?
                                            <span class="accordion-item__icon">&nbsp;</span>
                                        </button>
                                    </div>

                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionFaqs">
                                        <div class="accordion-item__body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-item__header" id="headingThree">
                                        <button class="accordion-item__link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            How can I do if I wanna become one of your sponsors?
                                            <span class="accordion-item__icon">&nbsp;</span>
                                        </button>
                                    </div>

                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFaqs">
                                        <div class="accordion-item__body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-item__header" id="headingFour">
                                        <button class="accordion-item__link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                            Do you have plans to create new gaming teams?
                                            <span class="accordion-item__icon">&nbsp;</span>
                                        </button>
                                    </div>

                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFaqs">
                                        <div class="accordion-item__body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-item__header" id="headingFive">
                                        <button class="accordion-item__link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                            How can I order your merchandise?
                                            <span class="accordion-item__icon">&nbsp;</span>
                                        </button>
                                    </div>

                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFaqs">
                                        <div class="accordion-item__body">
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
@endsection

