@extends('layouts.master')

@section('content')
    <!-- Content
      ================================================== -->

    <div class="site-wrapper site-layout--default">


        <!-- Content
                    ================================================== -->
        <main class="site-content site-content--product-single" id="wrapper">
            <div class="site-content__inner">
                <div class="site-content__holder">
                    <!-- Post -->
                    <article class="product product--single">
                        <div class="product__thumbnail slick-slider">
                            {{-- @foreach ($pics as $image)
                                <div class="product__thumbnail-item slick-slide">
                                    @foreach (json_encode($image->images) as $picture) {
                                        <img src="{{ asset('public/storage/' . $picture->image) }}" alt="">
                                </div>
                            '@endforeach --}}
                            <div class="product__thumbnail-item slick-slide">
                                <img src="assets/img/samples/product-single-img-01.jpg" alt="">
                            </div>
                        </div>
                        <div class="product__header">
                            <ul class="product__cats list-unstyled">
                                <li class="product__cats-item color-warning">
                                    <a href="#">{{ $product->product_category ?? '' }}</a>
                                </li>
                            </ul>
                            <h2 class="product__title h3">{{ $product->product_name ?? '' }}</h2>
                            <ul class="product__meta list-unstyled">
                                <li class="product__meta-item product__price">${{ $product->product_price ?? '' }}</li>
                            </ul>
                        </div>
                        <div class="product__excerpt">
                            {{ $product->product_description ?? '' }}
                        </div>
                        <ul class="product__options list-unstyled">
                            <li class="product__option">
                                <span class="product__option-label">Color</span>
                                <ul class="color-control">
                                    <li><a class="active bg--product-color-01" href="#"></a></li>
                                    <li><a class="bg--product-color-02" href="#"></a></li>
                                    <li><a class="bg--product-color-03" href="#"></a></li>
                                </ul>
                            </li>
                            <li class="product__option">
                                <span class="product__option-label">Size</span>
                                <div class="size-control">
                                    <select name="select-size" id="select-size">
                                        <option value="small">Small</option>
                                        <option value="medium" selected="selected">Medium</option>
                                        <option value="large">Large</option>
                                    </select>
                                </div>
                            </li>
                            <li class="product__option">
                                <span class="product__option-label">Quantity</span>
                                <div class="quantity-control">
                                    <button class="quantity-control__minus">&nbsp;</button>
                                    <input type="number" step="1" value="2" size="4">
                                    <button class="quantity-control__plus">&nbsp;</button>
                                </div>
                            </li>
                        </ul>
                        <a class="product__button btn btn-lg" href="#">Add to cart +</a>
                    </article>
                    <!-- Post / End -->

                    <!-- Product Review Form -->
                    <div class="product-review-form">
                        <h4 class="product-review-form__title">Write a review</h4>
                        <form action="#" class="review-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="input-default"
                                            placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group select-wrapper">
                                        <select name="select-rating" id="select-rating">
                                            <option value="5">5 Stars</option>
                                            <option value="4">4 Stars</option>
                                            <option value="3">3 Stars</option>
                                            <option value="2">2 Stars</option>
                                            <option value="1">1 Stars</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="input-review" cols="30" rows="5" class="form-control"
                                            id="input-review" placeholder="Your Review"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-secondary">Post Review</button>
                        </form>
                    </div>
                    <!-- Product Review Form / End -->

                    <!-- Product Reviews -->
                    <div class="product-reviews">
                        <h4 class="product-reviews__title">Reviews (3)</h4>
                        <ol class="reviews">
                            <li class="review">
                                <div class="review__header">
                                    <div class="review__title">One of the best t-shirts in the world!!</div>
                                    <div class="fas star-rating">
                                        <span style="width: 100%;">&nbsp;</span>
                                    </div>
                                </div>
                                <div class="review__body">
                                    Magni dolores eos qui ratione voluptatem sequi nesciunt der voluptate velit esse cillum
                                    dolore eu pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit anim id est laborum.
                                </div>
                                <ul class="review__meta">
                                    <li class="review__author">by Mark Stark</li>
                                    <li class="review__date">5 minutes ago</li>
                                </ul>
                            </li>
                            <li class="review">
                                <div class="review__header">
                                    <div class="review__title">I love the fabric and print quality</div>
                                    <div class="fas star-rating">
                                        <span style="width: 100%;">&nbsp;</span>
                                    </div>
                                </div>
                                <div class="review__body">
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur adipisci
                                    velit sed quia.
                                </div>
                                <ul class="review__meta">
                                    <li class="review__author">by Marina Valentine</li>
                                    <li class="review__date">20 minutes ago</li>
                                </ul>
                            </li>
                            <li class="review">
                                <div class="review__header">
                                    <div class="review__title">I'm really buying t-shirts for all my family</div>
                                    <div class="fas star-rating">
                                        <span style="width: 100%;">&nbsp;</span>
                                    </div>
                                </div>
                                <div class="review__body">
                                    Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                    molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                                </div>
                                <ul class="review__meta">
                                    <li class="review__author">by Peter Morales</li>
                                    <li class="review__date">44 minutes ago</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <!-- Product Reviews / End -->
                </div>
            </div>
        </main>
    </div>
@endsection
