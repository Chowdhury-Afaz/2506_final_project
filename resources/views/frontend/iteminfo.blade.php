@extends('layouts.frontendLayout')

@section('title', $product->title ?? 'Shop Page')

@section('content')
<!-- Breadcrumb Navigation -->
<section>
    <div class="smallNav">
        <div class="container">
            <div class="row">
                <ul class="d-flex">
                    <li><a href="{{ url('/') }}"><iconify-icon icon="material-symbols-light:home-outline" width="24" height="24"></iconify-icon></a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">{{ $product->category->name ?? 'N/A' }}</a></li>
                    <li><a href="#" class="active">{{ $product->title }}</a></li>
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
        <div class="product-layout">

            <!-- Product Gallery -->
            <div class="product-gallery">
                <div class="gallery-thumbnails">
                    @if ($product->gallery_image)
                        @foreach (json_decode($product->gallery_image, true) ?? [] as $image)
                            <div class="thumb {{ $loop->first ? 'active' : '' }}" data-image="{{ getImage($image) }}">
                                <img src="{{ getImage($image) }}" alt="{{ $product->title }}">
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="gallery-preview">
                    <img src="{{ getImage($product->image) }}" alt="{{ $product->title }}" id="mainProductImage">
                </div>
            </div>

            <!-- Product Content -->
            <div class="product-content">
                <div class="product-header">
                    <span class="product-category">{{ $product->category->name ?? 'Uncategorized' }}</span>
                    <h1 class="product-title">{{ $product->title }}</h1>

                    <!-- Dynamic Rating & Reviews Summary -->
                    <div class="product-rating d-flex align-items-center mb-3">
                        <div class="stars text-warning me-2">
                            @for($i = 1; $i <= 5; $i++)
                                @if($i <= round($averageRating ?? 0))
                                    <iconify-icon icon="ph:star-fill"></iconify-icon>
                                @else
                                    <iconify-icon icon="ph:star-bold"></iconify-icon>
                                @endif
                            @endfor
                        </div>
                        <span class="fw-bold me-1">{{ number_format($averageRating ?? 0, 1) }}</span>
                        <span class="text-muted">({{ $totalReviews ?? 0 }} Reviews)</span>
                    </div>
                </div>

                <div class="product-status">
                    <span class="stock">In Stock</span>
                    <span class="sku">SKU : {{ $product->sku ?? 'N/A' }}</span>
                </div>

                <div class="product-price">
                    <h2>${{ $product->price ?? '0.00' }}</h2>
                    @if(isset($product->old_price))
                        <del>${{ $product->old_price }}</del>
                    @endif
                </div>

                <p class="product-description">
                    {{ $product->short_description ?? 'Fresh organic product collected directly from local farms.' }}
                </p>

                <div class="product-meta">
                    <div>
                        <strong>Brand</strong>
                        <span>{{ $product->brand->name ?? 'Organic Farm' }}</span>
                    </div>
                    <div>
                        <strong>Category</strong>
                        <span>{{ $product->category->name ?? 'N/A' }}</span>
                    </div>
                </div>

                <!-- Purchase Card -->
                <div class="purchase-card">
                    <div class="quantity-box">
                        <span>Quantity</span>
                        <div class="quantity-controller">
                            <button type="button" id="minusBtn">-</button>
                            <input type="text" id="quantity" value="1" readonly>
                            <button type="button" id="plusBtn">+</button>
                        </div>
                    </div>

                    <div class="purchase-buttons">
                        <button type="button" class="cart-btn">
                            <iconify-icon icon="solar:cart-large-2-bold"></iconify-icon> Add To Cart
                        </button>
                        <button type="button" class="buy-btn">
                            <iconify-icon icon="solar:flash-bold"></iconify-icon> Buy Now
                        </button>
                    </div>

                    <div class="extra-actions">
                        <button type="button">
                            <iconify-icon icon="solar:heart-bold"></iconify-icon> Wishlist
                        </button>
                        <button type="button">
                            <iconify-icon icon="solar:sort-horizontal-bold"></iconify-icon> Compare
                        </button>
                    </div>

                    <div class="delivery-info">
                        <div class="delivery-item">
                            <div class="delivery-icon">
                                <iconify-icon icon="solar:delivery-bold"></iconify-icon>
                            </div>
                            <div class="delivery-content">
                                <h6>Free Delivery</h6>
                                <p>Delivery within 2–4 business days</p>
                            </div>
                        </div>

                        <div class="delivery-item">
                            <div class="delivery-icon">
                                <iconify-icon icon="solar:refresh-bold"></iconify-icon>
                            </div>
                            <div class="delivery-content">
                                <h6>30 Days Return</h6>
                                <p>Money Back Guarantee</p>
                            </div>
                        </div>

                        <div class="delivery-item">
                            <div class="delivery-icon">
                                <iconify-icon icon="solar:shield-check-bold"></iconify-icon>
                            </div>
                            <div class="delivery-content">
                                <h6>Secure Payment</h6>
                                <p>100% Secure SSL Checkout</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- /product-content -->
        </div> <!-- /product-layout -->
    </div>
</section>

<!-- ==========================
     Product Tabs Start
========================== -->
<section id="productTabs">
    <div class="container">
        <div class="tabs-card">
            <div class="tabs-nav">
                <button type="button" class="tab-btn active" data-tab="description">Description</button>
                <button type="button" class="tab-btn" data-tab="specification">Specification</button>
                <button type="button" class="tab-btn" data-tab="reviews">Reviews ({{ $totalReviews ?? 0 }})</button>
                <button type="button" class="tab-btn" data-tab="faq">FAQ</button>
            </div>

            <div class="tabs-content">
                <div class="tab-panel active" id="description">
                    {!! $product->description ?? 'No description available.' !!}
                </div>
                <div class="tab-panel" id="specification">
                    {!! $product->specification ?? 'No specifications available.' !!}
                </div>
                <div class="tab-panel" id="reviews">
                    <p>See customer reviews below.</p>
                </div>
                <div class="tab-panel" id="faq">
                    <p>frequently asked questions section.</p>
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
                            <h6 class="reviewer-name mb-0 fw-bold">{{ $review->user->name ?? 'Anonymous' }}</h6>
                            <span class="review-time text-muted small">{{ $review->created_at ? $review->created_at->diffForHumans() : '' }}</span>
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

                        <div class="mb-3">
                            <label class="form-label">Rating</label>
                            <select name="rating" class="form-select" required>
                                <option value="5">⭐⭐⭐⭐⭐ (5/5)</option>
                                <option value="4">⭐⭐⭐⭐ (4/5)</option>
                                <option value="3">⭐⭐⭐ (3/5)</option>
                                <option value="2">⭐⭐ (2/5)</option>
                                <option value="1">⭐ (1/5)</option>
                            </select>
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
    document.addEventListener('DOMContentLoaded', function () {
        // Tab Functionality
        const tabs = document.querySelectorAll(".tab-btn");
        const panels = document.querySelectorAll(".tab-panel");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                tabs.forEach(btn => btn.classList.remove("active"));
                panels.forEach(panel => panel.classList.remove("active"));

                tab.classList.add("active");
                const activePanel = document.getElementById(tab.dataset.tab);
                if (activePanel) activePanel.classList.add("active");
            });
        });

        // Quantity Controller
        const quantityInput = document.getElementById("quantity");
        const plusBtn = document.getElementById("plusBtn");
        const minusBtn = document.getElementById("minusBtn");

        if (quantityInput && plusBtn && minusBtn) {
            let quantity = parseInt(quantityInput.value) || 1;

            plusBtn.addEventListener("click", () => {
                quantity++;
                quantityInput.value = quantity;
            });

            minusBtn.addEventListener("click", () => {
                if (quantity > 1) {
                    quantity--;
                    quantityInput.value = quantity;
                }
            });
        }

        // Image Gallery Thumbnails Switching
        const thumbnails = document.querySelectorAll(".thumb");
        const mainImage = document.getElementById("mainProductImage");

        thumbnails.forEach((thumb) => {
            thumb.addEventListener("click", () => {
                thumbnails.forEach(item => item.classList.remove("active"));
                thumb.classList.add("active");
                if (mainImage && thumb.dataset.image) {
                    mainImage.src = thumb.dataset.image;
                }
            });
        });
    });
</script>
@endsection