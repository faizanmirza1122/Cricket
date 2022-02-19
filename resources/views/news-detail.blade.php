@extends('layouts.master')

@section('content')
    <!-- Content
      ================================================== -->
    <div class="site-wrapper site-layout--default">
        <main class="site-content" id="wrapper">
            <div class="site-content__inner">
                <div class="site-content__holder">
                    <!-- Post -->
                    <article class="post post--single">
                        <figure class="post__thumbnail">
                            @if ($news)
                                <img src="{{ asset('storage/' . $news->image) }}" alt="">
                            @else
                            @endif
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
                                @if ($news)
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
                    {{-- <div class="post-comments" id="comments">
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
					</div> --}}
                    <!-- Post Comments / End -->
                    <!-- Comment Form -->
                    {{-- <div class="post-comments-form">
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
					</div> --}}
                    <!-- Comment Form / End -->
                </div>
            </div>
        </main>

    </div>
@endsection
