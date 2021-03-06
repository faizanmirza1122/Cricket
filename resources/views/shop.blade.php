@extends('layouts.master')

@section('content')
<!-- Content
		================================================== -->
        <main class="site-content" id="wrapper">
			<div class="widget-area widger-area--before-loop">
				<div class="widget widget-featured-product bg-image bg--ph-03">
					<h1 class="widget__title h2"><span class="color-primary">BNW ESPORTS</span>Shop</h1>
				</div>
			</div>
			<div class="content shop-layout--style-1">
                @forelse ($products as $product)
				<article class="product">
					<div class="product__thumbnail">
						<a href="{{ route('shop-detail', $product->slug) }}"><img src="{{ asset('public/storage/' . $product->featured_image) }}" alt=""></a>
					</div>
					<div class="product__body">
						<div class="product__header">
							<ul class="product__cats list-unstyled">
								<li class="product__cats-item color-warning">
									<a href="#">{{ $product->product_categroy }}</a>
								</li>
							</ul>
							<h2 class="product__title h4"><a href="shop-product.html">{{ $product->product_name }}</a></h2>
							<ul class="product__meta list-unstyled">
								<li class="product__meta-item product__price">${{ $product->product_price }}</li>
								<li class="product__meta-item product__ratings">
									<div class="fas star-rating">
										<span style="width: 80%;">&nbsp;</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="product__excerpt">
							{{ $product->product_description }}
						</div>
						<a href="shop-product.html" class="btn btn-secondary">Add to cart +</a>
					</div>
				</article>
                @empty
                <h1 class="text-center"> No Data Found </h1>
                @endforelse
			</div>

		</main>

@endsection

