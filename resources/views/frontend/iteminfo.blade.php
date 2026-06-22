<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoBazar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="shortcut icon" href="./img/plant 1.png">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>
<body>
<header>
    <div id="headertop">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block text-center text-lg-start">
            <address>
                <iconify-icon icon="tdesign:location"></iconify-icon>Store Location: Lincoln- 344, Illinois, Chicago, USA
            </address>
            </div>
            <div class="col-lg-6 d-none d-lg-flex align-items-center justify-content-end">
                <form>
                    <select>
                        <option>Eng</option>
                        <option>Ban</option>
                    </select>
                    <select>
                        <option>USD</option>
                        <option>BDT</option>
                    </select>
                    <a href="./signin.html">Sign In / Sign Up</a>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div id="headermid">
        <div class="container d-none d-lg-block">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a href="#"><img src="./img/Logo.png" alt=""></a>
                </div>
                <div class="col-lg-6 m-auto">
                    <form>
                        <input type="search" placeholder="Search">
                        <iconify-icon icon="teenyicons:search-outline" width="15" height="15"  style="color: #000"></iconify-icon>
                        <button class="btnsearch">Search</button>
                    </form>
                </div>
                <div class="col-lg-3 d-flex justify-content-end">
                    <a href="#" class="iconsLove">
                        <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                    </a>
                    <a href="#" class="iconsCart">
                        <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        <p>2</p>
                    </a>
                    <div class="price">
                    <p>Shopping cart:</p>
                    <h6>$57.00</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="headerlast d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="nav col-lg-8">
                        <ul class="d-flex">
                            <li>
                                <a href="./index.html" class="active">Home</a>
                            </li>
                            <li>
                                <a href="./shop.html">Shop</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="./contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact col-lg-4 text-end">
                        <a href="tel:(219) 555-0114" class="callBtn"><iconify-icon icon="bx:phone-call" width="24" height="24"></iconify-icon> (219) 555-0114</a>
                    </div>
                </div>
            </div>
        </div>
    <div class="mblnavbar d-lg-none d-flex">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-1">
                  <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft">
                    <iconify-icon icon="heroicons-solid:menu-alt-1" style="color: #000"></iconify-icon>
                  </button> 
                </div>
                <div class="col-8 text-center">
                    <a href="#">
                        <img src="./img/Logo.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col">
                  <a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                     <iconify-icon icon="teenyicons:search-outline"></iconify-icon>
                  </a>
                  <a href="#" class="iconsCart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                     <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                     <p>2</p>
                  </a>   
                </div>
            </div>
        </div>
    </div>
    <div class="offCanvas d-lg-none d-flex">
        <div class="mblNavBtn">
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft" aria-controls="offcanvasLeft"></button>

<div class="offcanvas offcanvas-start" tabindex="1" id="offcanvasLeft" aria-labelledby="offcanvasLeftLabel">
  <div class="offcanvas-header">
    <a href="#"><img src="./img/Logo.png" class="offcanvas-title img-fluid" id="offcanvasLeftLabel" alt=""></a>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="nav flex-column">
        <a href="#" class="active">Home</a>
        <a href="./shop.html">Shop</a>
        <a href="#">Pages</a>
        <a href="#">Blog</a>
        <a href="#">About Us</a>
        <a href="./contact.html">Contact Us</a>
    </div>
  </div>
</div></div>
<div class="mblSearchBtn">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"></button>

<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasTopLabel"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <form>
        <input type="search" placeholder="Search">
        <iconify-icon icon="teenyicons:search-outline"></iconify-icon>
        <button class="btnsearch">Search</button>
    </form>
  </div>
</div>
</div>
<div class="mblCartBtn">
    <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Purchase item <img src="./img/plant 1.png" class="img-fluid"></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="buyItem">
        <div class="container">
            <div class="row">    
        <div class="carditem col-5">
            <a href="#">
                <img src="./img/Apple.png" alt="">
                <h5>Green Apple</h5>
                <p>2 Kg  <b>15$</b></p>
            </a>
        </div>
        <div class="carditem col-5">
            <a href="#">
                <img src="./img/Malta.png" alt="">
                <h5>Indian Malta</h5>
                <p>2 Kg  <b>15$</b></p>
            </a>
        </div>
    </div>
    </div>
        </div>
  </div>
</div>
</div>
    </div>
    <div class="mblFooterMenu d-lg-none">
        <div class="container">
            <div class="row align-items-center">
                <ul>
                    <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                    <li><a href="./shop.html"><iconify-icon icon="clarity:shopping-bag-line"></iconify-icon></a></li>
                    <li><a href="#"><iconify-icon icon="cil:home"></iconify-icon></a></li>
                    <li><a href="#"><iconify-icon icon="teenyicons:discount-outline"></iconify-icon></a></li>
                    <li><a href="./signin.html"><iconify-icon icon="gg:profile"></iconify-icon></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main>
<section>
    <div class="smallNav">
        <div class="container">
            <div class="row">
            <ul class="d-flex">
            <li><a href="./index.html"><iconify-icon icon="material-symbols-light:home-outline" width="24" height="24"></iconify-icon></a></li>
            <li><a href="#">Category</a></li>
            <li><a href="#">Vagetables</a></li>
            <li><a href="#" class="active">Chinese Cabbage</a></li>
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
        <div class="thumbnail-strip">
          <div class="thumbnail active">
            <img src="./img/Product Image.png" class="img-fluid" alt="">
          </div>
          <div class="thumbnail">
            <img src="./img/Product Image (1).png" class="img-fluid" alt="">
          </div>
          <div class="thumbnail">
            <img src="./img/Product Image (2).png" class="img-fluid" alt="">
          </div>
          <div class="thumbnail">
            <img src="./img/Product Image (3).png" class="img-fluid" alt="">
          </div>
        </div>
 
        <!-- Main Image Box (blank) -->
        <div class="main-image-box">
        <img src="./img/Product Image (4).png" class="img-fluid" alt="">  
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
          <h1 class="product-title">Chinese Cabbage</h1>
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
</main>
<footer>
    <div class="container">
        <div class="row pb-lg-5">
            <div class="col-lg-3">
                <div class="about d-none d-lg-block">
                    <h5>About Shopery</h5>
                    <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna congue nec.</p>
                    <a class="contact" href="callto:(219) 555-0114">(219) 555-0114</a>
                    <span>or</span>
                    <a class="contact" href="mailto:proxy@gmail.com">proxy@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-2">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="./signin.html">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Shopping Cart</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Setting</a></li>
                    </ul>
            </div>
            <div class="col-lg-2">
                    <h5>Help</h5>
                    <ul>
                        <li><a href="./contact.html">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
            </div>
            <div class="col-lg-2">
                    <h5>Proxy</h5>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Products Details</a></li>
                        <li><a href="#">Track Order</a></li>
                    </ul>
            </div>
            <div class="col-lg-3">
                <div class="apps">
                    <h5>Download Our Mobile App</h5>
                    <div class="row justify-content-between">
                        <div class="col-lg-6 col-6">
                            <div class="appStore">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <span class="appsLogo"><iconify-icon icon="ic:baseline-apple"></iconify-icon></span>
                                    </div>
                                    <div class="col-lg-9 col-9">
                                        <a href="#">
                                            Download on the <span>App Store</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="playStore">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 col-3">
                                        <span class="apps_logo"><iconify-icon icon="mage:playstore"></iconify-icon></span>
                                    </div>
                                    <div class="col-lg-9 col-9">
                                         <a href="#">
                                            Download on the <span>Play Store</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-lg-between copyright">
            <div class="col-lg-3">
                <div class="socialMedia">
                    <ul>
                        <li><a href="#"><iconify-icon icon="ri:facebook-fill"></iconify-icon></a></li>
                        <li><a href="#"><iconify-icon icon="mynaui:twitter"></iconify-icon></a></li>
                        <li><a href="#"><iconify-icon icon="mingcute:pinterest-line"></iconify-icon></a></li>
                        <li><a href="#"><iconify-icon icon="mdi:instagram"></iconify-icon></a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright col-lg-4 d-lg-flex justify-content-lg-center">
                <p>Ecobazar eCommerce © 2021. All Rights Reserved</p>
            </div>
            <div class="col-lg-4 d-lg-flex justify-content-lg-end">
                <ul class="payment d-flex">
                    <li>
                        <a href="#"><img src="./img/pay1.png" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/pay2.png" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/pay3.png" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/pay4.png" class="img-fluid" alt=""></a>
                    </li>
                    <li>
                        <a href="#"><img src="./img/pay5.png" class="img-fluid" alt=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
 </footer>
    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./jQuery.countdown-master/jQuery.countdown-master/dist/jquery.countdown.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./js/app.js"></script>
</body>
</html>