@extends('layouts.frontendLayout')

@section('title', $product->title ?? 'Shop Page')
    

@section('content')
<section>
    <div class="smallNav">
        <div class="container">
            <div class="row">
            <ul class="d-flex">
            <li><a href="./index.html"><iconify-icon icon="material-symbols-light:home-outline" width="24" height="24"></iconify-icon></a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">{{ $product->category->name }}</a></li>
            <li><a href="#" class="active">{{ $product->title }}</a></li>
            </ul>
            </div>
        </div>
    </div>
</section>

<!-- ==========================
     Item Details start here
========================== -->

<section id="itemDetails">

    <div class="container">

        <div class="product-layout">

            <div class="product-gallery">
                <div class="gallery-thumbnails">

    @if ($product->gallery_image)
        @foreach (json_decode($product->gallery_image, true) ?? [] as $image)

<div class="thumb active"
     data-image="{{ getImage($image) }}">

    <img src="{{ getImage($image) }}" alt="">

</div>

        @endforeach
    @endif

</div>

<div class="gallery-preview">

    <img
        src="{{ getImage($product->image) }}"
        alt="{{ $product->title }}"
        id="mainProductImage">

</div>
            </div>

            <div class="product-content">
                <div class="product-header">

    <span class="product-category">
        {{ $product->category->name }}
    </span>

    <h1 class="product-title">
        {{ $product->title }}
    </h1>

</div>


<div class="product-rating">

    <div class="stars">

        <iconify-icon icon="ph:star-fill"></iconify-icon>
        <iconify-icon icon="ph:star-fill"></iconify-icon>
        <iconify-icon icon="ph:star-fill"></iconify-icon>
        <iconify-icon icon="ph:star-fill"></iconify-icon>
        <iconify-icon icon="ph:star-fill"></iconify-icon>

    </div>

    <span>(126 Reviews)</span>

</div>


<div class="product-status">

    <span class="stock">

        In Stock

    </span>

    <span class="sku">

        SKU : 251594

    </span>

</div>


<div class="product-price">

    <h2>$17.28</h2>

    <del>$48.00</del>

    <span class="discount">

        64% OFF

    </span>

</div>


<p class="product-description">

    {{ $product->short_description ?? 'Fresh organic product collected directly from local farms.' }}

</p>


<div class="product-meta">

    <div>

        <strong>Brand</strong>

        <span>Organic Farm</span>

    </div>

    <div>

        <strong>Category</strong>

        <span>{{ $product->category->name }}</span>

    </div>

</div>

<div class="purchase-card">

    <div class="quantity-box">

        <span>Quantity</span>

        <div class="quantity-controller">

            <button id="minusBtn">-</button>

            <input type="text" id="quantity" value="1" readonly>

            <button id="plusBtn">+</button>

        </div>

    </div>


    <div class="purchase-buttons">

        <button class="cart-btn">

            <iconify-icon icon="solar:cart-large-2-bold"></iconify-icon>

            Add To Cart

        </button>

        <button class="buy-btn">

            <iconify-icon icon="solar:flash-bold"></iconify-icon>

            Buy Now

        </button>

    </div>


    <div class="extra-actions">

        <button>

            <iconify-icon icon="solar:heart-bold"></iconify-icon>

            Wishlist

        </button>

        <button>

            <iconify-icon icon="solar:sort-horizontal-bold"></iconify-icon>

            Compare

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
            </div>

        </div>

    </div>

</section>

<!-- ==========================
     Item Details End here
========================== -->

<section id="productTabs">

    <div class="container">

        <div class="tabs-card">

            <div class="tabs-nav">

                <button class="tab-btn active"
                        data-tab="description">
                    Description
                </button>

                <button class="tab-btn"
                        data-tab="specification">
                    Specification
                </button>

                <button class="tab-btn"
                        data-tab="reviews">
                    Reviews (124)
                </button>

                <button class="tab-btn"
                        data-tab="faq">
                    FAQ
                </button>

            </div>

            <div class="tabs-content">

                <div class="tab-panel active"
                     id="description">

                    Description Here

                </div>

                <div class="tab-panel"
                     id="specification">

                    Specification Here

                </div>

                <div class="tab-panel"
                     id="reviews">

                    Reviews Here

                </div>

                <div class="tab-panel"
                     id="faq">

                    FAQ Here

                </div>

            </div>

        </div>

    </div>

</section>

<section id="desAddReview">
    <div class="reviewNav">
        <div class="container">
            <div class="row">
                <ul class="d-flex justify-content-center">
                    <li><a href="#">Description</a></li>
                    <li><a href="#">Additional Information</a></li>
                    <li><a href="#" class="active">Customer feedback</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

        
    <div class="reviews-wrapper">
 
  <!-- Review 1 -->
  <div class="review-item">
    <div class="avatar">
      <img src="./img/Image.png" alt="Kristin Watson"/>
    </div>
    <div class="review-body">
      <div class="review-header">
        <p class="reviewer-name">Kristin Watson</p>
        <span class="review-time">2 min ago</span>
      </div>
      <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
      <p class="review-text">Duis ut ullamcorper nulla, eu dictum eros.</p>
    </div>
  </div>
 
  <!-- Review 2 -->
  <div class="review-item">
    <div class="avatar">
      <img src="./img/Image (1).png" alt="Jane Cooper"/>
    </div>
    <div class="review-body">
      <div class="review-header">
        <p class="reviewer-name">Jane Cooper</p>
        <span class="review-time">30 Apr, 2021</span>
      </div>
      <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
      <p class="review-text">Keep the soil evenly moist for the healthiest growth. If the sun gets too hot, Chinese cabbage tends to 'bolt' or go to seed; in long periods of heat, some kind of shade may be helpful. Watch out for snails, as they will harm the plants.</p>
    </div>
  </div>
 
  <!-- Review 3 -->
  <div class="review-item">
    <div class="avatar">
      <img src="./img/Image (2).png" alt="Jacob Jones"/>
    </div>
    <div class="review-body">
      <div class="review-header">
        <p class="reviewer-name">Jacob Jones</p>
        <span class="review-time">2 min ago</span>
      </div>
      <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
      <p class="review-text">Vivamus eget euismod magna. Nam sed lacinia nibh, et lacinia lacus.</p>
    </div>
  </div>
 
  <!-- Review 4 -->
  <div class="review-item">
    <div class="avatar">
      <img src="./img/User 1.png" alt="Ralph Edwards"/>
    </div>
    <div class="review-body">
      <div class="review-header">
        <p class="reviewer-name">Ralph Edwards</p>
        <span class="review-time">2 min ago</span>
      </div>
      <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
      <p class="review-text">200+ Canton Pak Choi Bok Choy Chinese Cabbage Seeds Heirloom Non-GMO Productive Brassica rapa VAR. chinensis, a.k.a. Canton's Choice, Bok Choi, from USA</p>
    </div>
  </div>
 
  <a href="#"class="load-more-btn"><button>Load More</button></a>
 
</div>
</div>
    </div>
 
</section>
<section id="relatedProduct">
    <div class="container">
        <h2>Related Products</h2>
        <div class="row align-items-center">
            <div class="col-6 col-lg">
                <div class="featureCard">
                    <div class="offer">
                        <span>20% OFF</span>
                    </div>
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#">Green Apple</a>
                            <p>$14.99</p>
                            <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        <a href="#" class="cartBtn"><iconify-icon icon="clarity:shopping-bag-line"></iconify-icon></a>
                        </div>                  
                </div>
            </div>
            <div class="col-6 col-lg">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#">Green Apple</a>
                            <p>$14.99</p>
                            <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        <a href="#" class="cartBtn"><iconify-icon icon="clarity:shopping-bag-line"></iconify-icon></a>
                        </div>                  
                </div>
            </div>
            <div class="col-6 col-lg">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#">Green Apple</a>
                            <p>$14.99</p>
                            <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        <a href="#" class="cartBtn"><iconify-icon icon="clarity:shopping-bag-line"></iconify-icon></a>
                        </div>                  
                </div>
            </div>
            <div class="col-6 col-lg">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#">Green Apple</a>
                            <p>$14.99</p>
                            <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        <a href="#" class="cartBtn"><iconify-icon icon="clarity:shopping-bag-line"></iconify-icon></a>
                        </div>                  
                </div>
            </div>
            <div class="col-6 col-lg">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#">Green Apple</a>
                            <p>$14.99</p>
                            <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                        <a href="#" class="cartBtn"><iconify-icon icon="clarity:shopping-bag-line"></iconify-icon></a>
                        </div>                  
                </div>
            </div>
        </div>
    </div>
</section>


<Script>
  const tabs = document.querySelectorAll(".tab-btn");
const panels = document.querySelectorAll(".tab-panel");

tabs.forEach(tab => {

    tab.addEventListener("click", () => {

        tabs.forEach(btn => btn.classList.remove("active"));
        panels.forEach(panel => panel.classList.remove("active"));

        tab.classList.add("active");

        document
            .getElementById(tab.dataset.tab)
            .classList.add("active");

    });

});


const quantityInput = document.getElementById("quantity");
const plusBtn = document.getElementById("plusBtn");
const minusBtn = document.getElementById("minusBtn");

let quantity = 1;

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

const thumbnails = document.querySelectorAll(".thumb");
const mainImage = document.getElementById("mainProductImage");

thumbnails.forEach((thumb) => {

    thumb.addEventListener("click", () => {

        thumbnails.forEach(item => item.classList.remove("active"));

        thumb.classList.add("active");

        mainImage.src = thumb.dataset.image;

    });

});
</Script>

@endsection