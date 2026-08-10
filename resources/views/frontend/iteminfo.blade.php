@extends('layouts.frontendLayout')

@section('title', $product->title ?? 'Shop Page')

@section('content')
<!-- Breadcrumb Navigation -->
<section id="pageBanner">

    <div class="container">

        <div class="pb-wrapper">

            <div class="pb-content">

                <h1>{{ $product->title }}</h1>

                <ul>

                    <li>
                        <a href="{{ route('homepage') }}">Home</a>
                    </li>

                    <li>
                        <iconify-icon icon="solar:alt-arrow-right-outline"></iconify-icon>
                    </li>

                    <li>
                        <a href="{{ route('shop') }}">Shop</a>
                    </li>

                    <li>
                        <iconify-icon icon="solar:alt-arrow-right-outline"></iconify-icon>
                    </li>

                    <li>
                        {{ $product->category->name ?? 'Category' }}
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>

<!-- ==========================
     Item Details Start
========================== -->
<section id="itemDetails">
    <div class="container">
        <div class="pd-wrapper">

            <!-- ========== LEFT : GALLERY ========== -->
            <div class="pd-gallery">

                <div class="pd-main-image">
                    <img src="{{ getImage($product->image) }}" alt="{{ $product->title }}" id="mainProductImage">
                </div>

                <div class="pd-thumbs">
                    @if ($product->gallery_image)
                        @foreach (json_decode($product->gallery_image, true) ?? [] as $image)
                            <button type="button"
                                    class="pd-thumb {{ $loop->first ? 'active' : '' }}"
                                    data-image="{{ getImage($image) }}">
                                <img src="{{ getImage($image) }}" alt="{{ $product->title }}" class="img-fluid">
                            </button>
                        @endforeach
                    @endif
                </div>

            </div>

            <!-- ========== RIGHT : INFO ========== -->
            <div class="pd-info">

                <div class="pd-badge">
                    {{ $product->category->name ?? 'Uncategorized' }}
                </div>

                <h1 class="pd-title">{{ $product->title }}</h1>

                <div class="pd-rating-row">

                    <div class="pd-stars">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= round($averageRating ?? 0))
                                <iconify-icon icon="ph:star-fill"></iconify-icon>
                            @else
                                <iconify-icon icon="ph:star"></iconify-icon>
                            @endif
                        @endfor
                    </div>

                    <span class="pd-rating-value">{{ number_format($averageRating ?? 0, 1) }}</span>
                    <span class="pd-reviews">({{ $totalReviews ?? 0 }} Reviews)</span>

                </div>

                <div class="pd-price-row">

                    <div class="pd-price">
                        ${{ $product->price ?? '0.00' }}
                    </div>

                    @if(isset($product->old_price))
                        <div class="pd-old-price">
                            ${{ $product->old_price }}
                        </div>
                    @endif

                    @if(isset($product->old_price) && $product->old_price > $product->price)
                        <div class="pd-discount">
                            {{ round((($product->old_price - $product->price) / $product->old_price) * 100) }}% OFF
                        </div>
                    @endif

                </div>

                <p class="pd-desc">
                    {{ $product->short_description ?? 'Fresh organic product collected directly from local farms.' }}
                </p>

                <div class="pd-meta">

                    <div class="pd-meta-item">
                        <span>Brand</span>
                        <strong>{{ $product->brand->name ?? 'Organic Farm' }}</strong>
                    </div>

                    <div class="pd-meta-item">
                        <span>SKU</span>
                        <strong>{{ $product->sku ?? 'N/A' }}</strong>
                    </div>

                    <div class="pd-meta-item">
                        <span>Stock</span>
                        <strong class="in-stock">In Stock</strong>
                    </div>

                </div>

                <!-- QUANTITY -->
                <div class="pd-quantity-card">

                    <span class="pd-label">Quantity</span>

                    <div class="pd-qty-box">
                        <button type="button" id="minusBtn">-</button>
                        <input type="text" id="quantity" value="1" readonly>
                        <button type="button" id="plusBtn">+</button>
                    </div>

                </div>

                <!-- ACTION BUTTONS -->
                <div class="pd-actions">

                        <button class="pd-cart-btn">

                            <iconify-icon icon="solar:cart-large-2-bold"></iconify-icon>

                            <span>Add To Cart</span>

                        </button>

                    <button class="pd-buy-btn">
                        <iconify-icon icon="solar:flash-bold"></iconify-icon>
                        Buy Now
                    </button>

                </div>

                <div class="pd-secondary-actions">

                    <button type="button">
                        <iconify-icon icon="solar:heart-bold"></iconify-icon>
                        Wishlist
                    </button>

                    <button type="button">
                        <iconify-icon icon="solar:sort-horizontal-bold"></iconify-icon>
                        Compare
                    </button>

                </div>

                <!-- DELIVERY -->
                <div class="pd-delivery">

                    <div class="pd-delivery-item">
                        <iconify-icon icon="solar:delivery-bold"></iconify-icon>
                        <div>
                            <h6>Free Delivery</h6>
                            <p>Within 2-4 business days</p>
                        </div>
                    </div>

                    <div class="pd-delivery-item">
                        <iconify-icon icon="solar:refresh-bold"></iconify-icon>
                        <div>
                            <h6>30 Days Return</h6>
                            <p>Money back guarantee</p>
                        </div>
                    </div>

                    <div class="pd-delivery-item">
                        <iconify-icon icon="solar:shield-check-bold"></iconify-icon>
                        <div>
                            <h6>Secure Payment</h6>
                            <p>100% secure checkout</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- ==========================
     Product Tabs Start
========================== -->
<section id="productTabs">

    <div class="container">

        <div class="pt-wrapper">

            <div class="pt-nav">

                <button class="pt-btn active" data-tab="description">
                    Description
                </button>

                <button class="pt-btn" data-tab="specification">
                    Specification
                </button>

                <button class="pt-btn" data-tab="reviews">
                    Reviews ({{ $totalReviews ?? 0 }})
                </button>

                <button class="pt-btn" data-tab="faq">
                    FAQ
                </button>

            </div>

            <div class="pt-body">

                <div class="pt-panel active" id="description">
                    {!! $product->description !!}
                </div>

                <div class="pt-panel" id="specification">
                    {!! $product->specification !!}
                </div>

                <div class="pt-panel" id="reviews">

                </div>

                <div class="pt-panel" id="faq">

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================
     Reviews & Feedback Section
========================== -->
<section id="desAddReview">
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
               <div class="reviews-wrapper">
    <h3 class="mb-4">Customer Reviews</h3>

    <div class="review-summary">

    <div class="review-overall">

        <h2>{{ number_format($averageRating ?? 0,1) }}</h2>

        <div class="overall-stars">

            @for($i=1;$i<=5;$i++)

                @if($i <= round($averageRating ?? 0))
                    ★
                @else
                    ☆
                @endif

            @endfor

        </div>

        <span>{{ $totalReviews ?? 0 }} Reviews</span>

    </div>

    <div class="review-progress">

        @for($star = 5; $star >= 1; $star--)

            @php
                $count = $product->reviews->where('rating',$star)->count();
                $percent = ($totalReviews ?? 0) ? ($count / $totalReviews) * 100 : 0;
            @endphp

            <div class="progress-item">

                <span>{{ $star }}★</span>

                <div class="progress">

                    <div class="progress-bar"
                         style="width:{{ $percent }}%">
                    </div>

                </div>

                <strong>{{ $count }}</strong>

            </div>

        @endfor

    </div>

</div>

    @if(isset($product->reviews) && $product->reviews->count() > 0)
        @foreach($product->reviews as $review)
            <div class="review-card mb-3 p-3 border rounded">
                
                <!-- Top Row: Avatar, Name & Time -->
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex align-items-center gap-3">
                        <div class="avatar">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($review->user->name ?? 'User') }}&background=28a745&color=fff" 
                                 alt="{{ $review->user->name ?? 'User' }}" 
                                 class="rounded-circle" width="48" height="48">
                        </div>
<div>

    <h6 class="reviewer-name">
        {{ $review->user->name ?? 'Anonymous' }}
    </h6>

    <span class="review-time">
        {{ $review->created_at ? $review->created_at->diffForHumans() : '' }}
    </span>

    <div class="verified-badge">
        <iconify-icon icon="solar:verified-check-bold"></iconify-icon>
        Verified Purchase
    </div>

</div>
                    </div>

                    <!-- Rating Stars -->
                    <div class="stars text-warning fs-5">
                        @for($i = 1; $i <= 5; $i++)
                            @if($i <= $review->rating)
                                ★
                            @else
                                ☆
                            @endif
                        @endfor
                    </div>
                </div>

                <!-- Review Content Row -->
                <div class="review-body mt-2">
                    @if($review->title)
                        <h6 class="fw-bold mb-1">{{ $review->title }}</h6>
                    @endif
                    <p class="review-text text-secondary mb-0">
                        {{ $review->comment }}
                    </p>
                </div>

            </div>
        @endforeach
    @else
        <p class="text-muted">No reviews yet for this product.</p>
    @endif
</div>
                <hr class="my-5">

                <!-- Write Review Form -->
                <h3>Write a Review</h3>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @auth
                    <form action="{{ route('review.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

<div class="review-rating">

    <label class="form-label">
        Rating
    </label>

    <div class="rating-stars">

        <input type="radio" id="star5" name="rating" value="5">

        <label for="star5">★</label>

        <input type="radio" id="star4" name="rating" value="4">

        <label for="star4">★</label>

        <input type="radio" id="star3" name="rating" value="3">

        <label for="star3">★</label>

        <input type="radio" id="star2" name="rating" value="2">

        <label for="star2">★</label>

        <input type="radio" id="star1" name="rating" value="1">

        <label for="star1">★</label>

    </div>

</div>

                        <div class="mb-3">
                            <label class="form-label">Review Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Summarize your review">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Comment</label>
                            <textarea name="comment" rows="4" class="form-control" placeholder="Write your feedback..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success">Submit Review</button>
                    </form>
                @else
                    <div class="alert alert-warning">
                        Please <a href="{{ route('login') }}" class="fw-bold">login</a> to write a review.
                    </div>
                @endauth
            </div>
        </div>
    </div>
</section>

<!-- JavaScript Functions -->
<script>
document.addEventListener("DOMContentLoaded", function () {

    /*==============================
        PRODUCT TABS
    ==============================*/

    const tabs = document.querySelectorAll(".pt-btn");
    const panels = document.querySelectorAll(".pt-panel");

    tabs.forEach(tab => {

        tab.addEventListener("click", function () {

            tabs.forEach(btn => btn.classList.remove("active"));
            panels.forEach(panel => panel.classList.remove("active"));

            this.classList.add("active");

            const panel = document.getElementById(this.dataset.tab);

            if(panel){
                panel.classList.add("active");
            }

        });

    });



    /*==============================
        QUANTITY
    ==============================*/

    const quantityInput = document.getElementById("quantity");
    const plusBtn = document.getElementById("plusBtn");
    const minusBtn = document.getElementById("minusBtn");

    if(quantityInput && plusBtn && minusBtn){

        plusBtn.addEventListener("click", function(){

            quantityInput.value = parseInt(quantityInput.value) + 1;

        });

        minusBtn.addEventListener("click", function(){

            let qty = parseInt(quantityInput.value);

            if(qty > 1){

                quantityInput.value = qty - 1;

            }

        });

    }



    /*==============================
        PRODUCT GALLERY
    ==============================*/

    const mainImage = document.getElementById("mainProductImage");
    const thumbnails = document.querySelectorAll(".pd-thumb");

    thumbnails.forEach(function(thumb){

        thumb.addEventListener("click", function(){

            thumbnails.forEach(item => item.classList.remove("active"));

            this.classList.add("active");

            if(mainImage){

                mainImage.src = this.dataset.image;

            }

        });

    });

});
</script>
@endsection