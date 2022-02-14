@extends('layouts.master')

@section('content')
    <!-- Content
      ================================================== -->
    <main class="site-content" id="wrapper">

        <div class="widget-area widger-area--before-loop">
            <div class="widget widget-carousel slick-slider">
                <article class="widget-carousel__item post slick-slide">
                    <div class="post__thumbnail">
                        <img src="assets/img/samples/widget-posts-carousel-img-01.jpg" alt="">
                    </div>
                    <div class="post__body">
                        <ul class="post__cats list-unstyled">
                            <li class="post__cats-item color-primary">
                                <a href="#">Esports</a>
                            </li>
                        </ul>
                        <h2 class="post__title"><a href="blog-post.html">Fuzzydeath broke a new kills per minute
                                record</a></h2>
                        <ul class="post__meta list-unstyled">
                            <li class="post__meta-item post__meta-item--date">
                                <a href="#">July 29th, 2018</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="widget-carousel__item post slick-slide">
                    <div class="post__thumbnail">
                        <img src="assets/img/samples/widget-posts-carousel-img-02.jpg" alt="">
                    </div>
                    <div class="post__body">
                        <ul class="post__cats list-unstyled">
                            <li class="post__cats-item color-warning">
                                <a href="#">Gaming</a>
                            </li>
                        </ul>
                        <h2 class="post__title"><a href="blog-post.html">New stealth missions were added to fortdaite</a>
                        </h2>
                        <ul class="post__meta list-unstyled">
                            <li class="post__meta-item post__meta-item--date">
                                <a href="#">July 26th, 2018</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="widget-carousel__item post slick-slide">
                    <div class="post__thumbnail">
                        <img src="assets/img/samples/widget-posts-carousel-img-03.jpg" alt="">
                    </div>
                    <div class="post__body">
                        <ul class="post__cats list-unstyled">
                            <li class="post__cats-item color-warning">
                                <a href="#">Gaming</a>
                            </li>
                        </ul>
                        <h2 class="post__title"><a href="blog-post.html">Gunslinger is a really cool new class for
                                Xenowatch</a></h2>
                        <ul class="post__meta list-unstyled">
                            <li class="post__meta-item post__meta-item--date">
                                <a href="#">July 22nd, 2018</a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
        <div class="content blog-layout--style-1">
            @forelse ($news as $blog)
                <article class="post has-post-thumbnail ">
                    <div class="post__thumbnail">

                        @if ($blog)
                            <a href="#"><img src="{{ asset('storage/' . $blog->image) }}" alt=""></a>
                        @else
                        @endif

                    </div>
                    <div class="post__body">
                        <div class="post__header">
                            <ul class="post__cats list-unstyled">
                                <li class="post__cats-item color-warning">
                                    <a href="#">{{ $blog->category ?? '' }}</a>
                                </li>
                            </ul>
                            <h2 class="post__title h4"><a href="#">{{ $blog->title ?? '' }}</a></h2>
                            <ul class="post__meta list-unstyled">
                                <li class="post__meta-item post__meta-item--date">
                                    <a href="#">{{ date('F,d-Y', strtotime($blog->date ?? '')); }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="post__excerpt">
                            {{ $blog->description ?? '' }}
                        </div>
                    </div>
                </article>
            @empty
                <h1 class="text-center">No Data Found</h1>
            @endforelse

        </div>

    </main>

@endsection
