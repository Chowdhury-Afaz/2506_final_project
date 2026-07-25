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
<section id="itemDetails">
    <div class="container">
            <div class="product-card">
  <div class="row g-0">
 
    <!-- LEFT: Images -->
    <div class="col-12 col-md-5">
      <div class="image-col">
        <!-- Thumbnails -->
        @if ($product->gallery_image)
        <div class="thumbnail-strip">
            @foreach (json_decode($product->gallery_image) as $gallImage)
                <div class="thumbnail active">
                    <img src="{{ getImage($gallImage) }}" class="img-fluid" alt="">
                </div>
            @endforeach
          
         
        </div>
        @endif
 
        <!-- Main Image Box (blank) -->
        <div class="main-image-box">
        <img src="{{ getImage($product->image) }}" class="img-fluid" alt="{{ $product->title }}">  
        </div>
      </div>
    </div>
 
    <!-- Divider -->
    <div class="col-auto d-none d-md-block">
      <div class="divider-col h-100"></div>
    </div>
 
    <!-- RIGHT: Info -->
    <div class="col-12 col-md-6">
      <div class="info-col">
 
        <!-- Title + Stock -->
        <div class="product-title-row">
          <h1 class="product-title">{{ $product->title }}</h1>
          <span class="stock-badge">In Stock</span>
        </div>
 
        <!-- Rating + SKU -->
        <div class="rating-row">
          <div class="stars">
            <iconify-icon icon="ph:star-fill" width="16"></iconify-icon>
            <iconify-icon icon="ph:star-fill" width="16"></iconify-icon>
            <iconify-icon icon="ph:star-fill" width="16"></iconify-icon>
            <iconify-icon icon="ph:star-fill" width="16"></iconify-icon>
            <iconify-icon icon="ph:star-fill" width="16"></iconify-icon>
          </div>
          <span>4 Review</span>
          <span class="rating-sep"></span>
          <span class="sku">SKU: 2,51,594</span>
        </div>
 
        <!-- Price -->
        <div class="price-row">
          <span class="price-original">$48.00</span>
          <span class="price-current">$17.28</span>
          <span class="discount-badge">64% Off</span>
        </div>
 
        <div class="h-divider"></div>
 
        <!-- Brand + Share -->
        <div class="brand-share-row">
          <div class="d-flex align-items-center">
            <span class="brand-label">Brand:</span>
            <img src="./img/Group 19.png" class="img-fluid" alt="">
          </div>
          <div class="d-none d-lg-flex align-items-center">
            <span class="share-label">Share item</span>
            <div class="socialMedia">
                    <ul class="d-flex">
                        <li><a href="#"><iconify-icon icon="ri:facebook-fill"></iconify-icon></a></li>
                        <li><a href="#"><iconify-icon icon="mynaui:twitter"></iconify-icon></a></li>
                        <li><a href="#"><iconify-icon icon="mingcute:pinterest-line"></iconify-icon></a></li>
                        <li><a href="#"><iconify-icon icon="mdi:instagram"></iconify-icon></a></li>
                    </ul>
                </div>
          </div>
        </div>
 
        <!-- Description -->
        <p class="product-desc">
          Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
          himenaeos. Nulla nibh diam, blandit vel consequat nec, ultrices et ipsum. Nulla
          varius magna a consequat pulvinar.
        </p>
 
        <!-- Cart Row -->
        <div class="cart-row">
          <!-- Quantity -->
          <div class="qty-control">
            <button class="qty-btn" onclick="changeQty(-1)">−</button>
            <input class="qty-value" id="qty" type="text" value="5" readonly />
            <button class="qty-btn" onclick="changeQty(1)">+</button>
          </div>
          
          <!-- Add to Cart -->
          <button class="add-to-cart-btn d-block d-lg-flex">
            <iconify-icon icon="ph:shopping-cart-simple-bold" width="18"></iconify-icon>
            Add to Cart
          </button>
 
          <!-- Wishlist -->
          <button class="wishlist-btn" title="Add to Wishlist">
            <iconify-icon icon="ph:heart-bold" width="20"></iconify-icon>
          </button>
        </div>
 
        <div class="h-divider"></div>
 
        <!-- Category + Tags -->
        <div class="meta-row">
          <span class="meta-key">Category:</span>
          &nbsp;<span class="meta-tag"><a href="#">Vegetables</a></span>
        </div>
        <div class="meta-row">
          <span class="meta-key">Tag:</span>
          &nbsp;
          <span class="meta-tag"><a href="#">Vegetables</a></span>
          <span class="meta-tag"><a href="#">Healthy</a></span>
          <span class="meta-tag"><a href="#" style="text-decoration:underline;">Chinese</a></span>
          <span class="meta-tag"><a href="#">Cabbage</a></span>
          <span class="meta-tag"><a href="#">Green Cabbage</a></span>
        </div>
 
      </div>
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
@endsection