@extends('layouts.frontendLayout')

@section('title', "Homepage")


@section('content')
<section id="banner">
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="row align-items-center">
                        <div class="bsOne col-lg-6 order-lg-1 order-2">
                            <h5>Welcome to Eco-Bazar</h5>
                            <h1>Fresh & Healthy Organic Food</h1>
                            <p>Sale up to <b>30% off</b></p>
                            <span class="d-lg-flex d-none">Free shipping on all your order. we deliver, you enjoy
                                <br></span>
                            <a href="#">
                                <button>Shop now<iconify-icon icon="si:arrow-right-duotone"></iconify-icon></button>
                            </a>
                        </div>
                        <div class="bsOne col-lg-6 order-lg-2 order-1">
                            <a href="#">
                                <img class="img-fluid" src="{{ asset('frontend/img/banner1.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row align-items-center">
                        <div class="bsOne col-lg-6 order-lg-1 order-2">
                            <h5>Welcome to shopery</h5>
                            <h1>Fresh & Healthy Organic Food</h1>
                            <p>Sale up to <b>30% off</b></p>
                            <span class="d-lg-flex d-none">Free shipping on all your order. we deliver, you enjoy
                                <br></span>
                            <a href="#">
                                <button>Shop now<iconify-icon icon="si:arrow-right-duotone"></iconify-icon></button>
                            </a>
                        </div>
                        <div class="bsOne col-lg-6 order-lg-2 order-1">
                            <a href="#">
                                <img class="img-fluid" src="{{ asset('frontend/img/banner1.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row align-items-center">
                        <div class="bsOne col-lg-6 order-lg-1 order-2">
                            <h5>Welcome to shopery</h5>
                            <h1>Fresh & Healthy Organic Food</h1>
                            <p>Sale up to <b>30% off</b></p>
                            <span class="d-lg-flex d-none">Free shipping on all your order. we deliver, you enjoy
                                <br></span>
                            <a href="#">
                                <button>Shop now<iconify-icon icon="si:arrow-right-duotone"></iconify-icon></button>
                            </a>
                        </div>
                        <div class="bsOne col-lg-6 order-lg-2 order-1">
                            <a href="#">
                                <img class="img-fluid" src="{{ asset('frontend/img/banner1.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
    </div>
</section>

<!-- ==========================
     Why-Choose-us
========================== -->

<section id="why-choose">

    <div class="container">

        <div class="row g-4">

            <!-- Item 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="why-card">

                    <div class="why-icon">
                        <iconify-icon icon="hugeicons:delivery-truck-02"></iconify-icon>
                    </div>

                    <div class="why-content">
                        <h5>Free Shipping</h5>
                        <p>Free shipping on all orders</p>
                    </div>

                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="why-card">

                    <div class="why-icon">
                        <iconify-icon icon="boxicons:headphone-mic-filled"></iconify-icon>
                    </div>

                    <div class="why-content">
                        <h5>24/7 Customer Support</h5>
                        <p>Instant access to expert support.</p>
                    </div>

                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="why-card">

                    <div class="why-icon">
                        <iconify-icon icon="solar:bag-check-outline"></iconify-icon>
                    </div>

                    <div class="why-content">
                        <h5>Secure Payment</h5>
                        <p>Your payment information is protected.</p>
                    </div>

                </div>
            </div>

            <!-- Item 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="why-card">

                    <div class="why-icon">
                        <iconify-icon icon="solar:box-linear"></iconify-icon>
                    </div>

                    <div class="why-content">
                        <h5>Money-Back Guarantee</h5>
                        <p>30-day hassle-free return policy.</p>
                    </div>

                </div>
            </div>

        </div>

    </div>

</section>

<!-- ==========================
     Category Start here
========================== -->

<section id="category">
    <div class="container">
        <div class="heading d-flex justify-content-between align-items-center">
            <h2>Popular Categories</h2>
            <a href="#">View All <span>
                    <iconify-icon icon="mynaui:arrow-right" width="24" height="24"></iconify-icon>
                </span></a>
        </div>
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-lg-2 col-3">
                <div class="categoryCard text-center">
                    <a href="{{ route('shop') }}?category={{ $category->slug }}"><img width="60px"
                            src="{{ getImage($category->image) }}" alt="{{ $category->name }}" class="img-fluid">
                        <h5>{{ $category->name }}</h5>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- ==========================
     Category End here
========================== -->

<!-- ==========================
     Porduct Start Here
========================== -->

<section id="product">
    <div class="container">
        <div class="heading d-flex justify-content-between align-items-center">
            <h2>Popular Products</h2>
            <a href="#">View All <span>
                    <iconify-icon icon="mynaui:arrow-right" width="24" height="24"></iconify-icon>
                </span></a>
        </div>
        <div class="row">

            @forelse($products as $product)

            <div class="col-lg-3 col-md-4 col-6">

                <div class="productCard">

                    <div class="productImg">

                        <div class="hoverIcon">
                            <a href="{{ route('shop.product', $product->slug) }}">
                                <iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon>
                            </a>

                            <a href="{{ route('shop.product', $product->slug) }}">
                                <iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon>
                            </a>
                        </div>

                        @if($product->price > $product->selling_price)

                        <div class="discount">

                            <p>
                                Sale
                                {{ round((($product->price - $product->selling_price) / $product->price) * 100) }}%
                            </p>

                        </div>

                        @endif

                        <a href="{{ route('shop.product', $product->slug) }}">

                            <img src="{{ getImage($product->image) }}" alt="{{ $product->title }}" class="img-fluid">

                        </a>

                    </div>

                    <div class="productCnt">

                        <a href="{{ route('shop.product', $product->slug) }}">
                            {{ $product->title }}
                        </a>

                        <p>

                            {{ formatPrice($product->selling_price) }}

                            @if($product->price > $product->selling_price)

                            <del>

                                {{ formatPrice($product->price) }}

                            </del>

                            @endif

                        </p>

                        <div class="rating">

                            <iconify-icon icon="ic:round-star"></iconify-icon>
                            <iconify-icon icon="ic:round-star"></iconify-icon>
                            <iconify-icon icon="ic:round-star"></iconify-icon>
                            <iconify-icon icon="ic:round-star"></iconify-icon>
                            <iconify-icon class="mutedStar" icon="ic:round-star"></iconify-icon>

                        </div>
                        @auth('customer')
                        <a href="{{ route('product.cart', $product->id) }}">
                            <div class="addToCart">
                                <iconify-icon icon="ph:handbag"></iconify-icon>
                            </div>
                        </a>
                        @endauth

                    </div>

                </div>

            </div>

            @empty

            <div class="col-12 text-center py-5">
                <h5>No Products Available</h5>
            </div>

            @endforelse

        </div>


    </div>
</section>

<!-- ==========================
     Porduct End Here
========================== -->


<section id="cot">
    <div class="container">
        <div class="row">
            <div class="col-lg mb-4 mb-lg-0 cot_bg1">
                <h6>BEST DEAL</h6>
                <h3>Sale of the month</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-8 d-flex justify-content-sm-center justify-content-between cot_sale_timer"
                        id="cot_sale_timer">

                    </div>
                </div>
                <a href="#">Shop Now <iconify-icon icon="si:arrow-right-duotone"></iconify-icon></a>
            </div>
            <div class="col-lg mb-4 mb-lg-0 cot_bg2">
                <h6>BEST DEAL</h6>
                <h3>Low-Fat Meat</h3>
                <p>Up to <span class='span_1'>64% OFF</span></p>
                <a href="#">Shop Now <iconify-icon icon="si:arrow-right-duotone"></iconify-icon></a>
            </div>
            <div class="col-lg mb-lg-0 cot_bg3">
                <h6>BEST DEAL</h6>
                <h3>100% Fresh Fruit</h3>
                <p>Starting from <span class="span_2">$79.99</span></p>
                <a href="#">Shop Now <iconify-icon icon="si:arrow-right-duotone"></iconify-icon></a>
            </div>
        </div>
    </div>
</section>

<!-- ==========================
     Hot Deal Start Here
========================== -->

<section id="hotdeals">
    <div class="container">

        <div class="heading d-flex justify-content-between align-items-center">
            <h2>Hot Deals</h2>
            <a href="#">View All <span>
                    <iconify-icon icon="mynaui:arrow-right" width="24" height="24"></iconify-icon>
                </span></a>
        </div>

        <div class="hotdealTop">

            <!-- Featured card -->
            <div class="hotdealFeatured">

                <div class="hotdealBadges">
                    <span class="badge-sale">Sale 50%</span>
                    <span class="badge-best">Best Sale</span>
                </div>

                <div class="hotdealImgPlaceholder">
                    <img class="img-fluid" src="{{ asset('frontend/img/big-apple.png')}}" alt="" width="300px">
                </div>

                <div class="hotdealActions">
                    <button type="button" class="iconCircle" aria-label="Wishlist">&#9825;</button>
                    <button type="button" class="addToCartBtn">Add to Cart</button>
                    <a href="#" class="iconCircle" aria-label="Quick view">&#128065;</a>
                </div>

                <div class="hotdealInfo">
                    <a href="#" class="hotdealTitle">Chinese cabbage</a>

                    <p class="hotdealPrice">
                        $12.00 <del>$24.00</del>
                    </p>

                    <div class="rating">
                        <span class="star">★</span><span class="star">★</span><span class="star">★</span><span
                            class="star">★</span><span class="star muted">★</span>
                        <span class="feedbackCount">(524 Feedback)</span>
                    </div>

                    <div class="hotdealCountdown">
                        <p class="offerLabel">Hurry up! Offer ends in:</p>
                        <div class="countdownTimer" data-end="__SET_END_TIME_MS__">
                            <div class="timeBlock"><span class="days">01</span><small>Days</small></div>
                            <div class="timeBlock"><span class="hours">23</span><small>Hours</small></div>
                            <div class="timeBlock"><span class="mins">34</span><small>Mins</small></div>
                            <div class="timeBlock"><span class="secs">57</span><small>Secs</small></div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
</section>

<!-- ==========================
     Hot Deal End Here
========================== -->

<!-- ==========================
     Discount Banner start here
========================== -->

<section id="discount-banner">

    <div class="container">

        <div class="sale-banner">

            <div class="sale-banner__content">
                <span class="sale-banner__subtitle">SUMMER SALE</span>

                <h2 class="sale-banner__title">
                    <strong>37%</strong> OFF
                </h2>

                <p class="sale-banner__description">
                    Free on all your order, Free Shipping and 30 days
                    money-back guarantee
                </p>

                <a href="#" class="sale-banner__button">
                    Shop Now
                    <iconify-icon icon="solar:arrow-right-linear"></iconify-icon>
                </a>
            </div>

        </div>

    </div>
</section>
<!-- ==========================
     Discount Banner start here
========================== -->

<!-- ==================================
     Feature product start here
================================= -->
<section id="product">
    <div class="container">
        <div class="heading d-flex justify-content-between align-items-center mt-5 mt-lg-0">
            <h2>Featured Categories</h2>
            <a href="#">View All <span>
                    <iconify-icon icon="mynaui:arrow-right" width="24" height="24"></iconify-icon>
                </span></a>
        </div>
        <div class="row">

            @forelse($products as $product)

            <div class="col-lg-3 col-md-4 col-6">

                <div class="productCard">

                    <div class="productImg">

                        <div class="hoverIcon">
                            <a href="{{ route('shop.product', $product->slug) }}">
                                <iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon>
                            </a>

                            <a href="{{ route('shop.product', $product->slug) }}">
                                <iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon>
                            </a>
                        </div>

                        @if($product->price > $product->selling_price)

                        <div class="discount">

                            <p>
                                Sale
                                {{ round((($product->price - $product->selling_price) / $product->price) * 100) }}%
                            </p>

                        </div>

                        @endif

                        <a href="{{ route('shop.product', $product->slug) }}">

                            <img src="{{ getImage($product->image) }}" alt="{{ $product->title }}" class="img-fluid">

                        </a>

                    </div>

                    <div class="productCnt">

                        <a href="{{ route('shop.product', $product->slug) }}">
                            {{ $product->title }}
                        </a>

                        <p>

                            {{ formatPrice($product->selling_price) }}

                            @if($product->price > $product->selling_price)

                            <del>

                                {{ formatPrice($product->price) }}

                            </del>

                            @endif

                        </p>

                        <div class="rating">

                            <iconify-icon icon="ic:round-star"></iconify-icon>
                            <iconify-icon icon="ic:round-star"></iconify-icon>
                            <iconify-icon icon="ic:round-star"></iconify-icon>
                            <iconify-icon icon="ic:round-star"></iconify-icon>
                            <iconify-icon class="mutedStar" icon="ic:round-star"></iconify-icon>

                        </div>

                        <div class="addToCart">

                            <iconify-icon icon="ph:handbag"></iconify-icon>

                        </div>

                    </div>

                </div>

            </div>

            @empty

            <div class="col-12 text-center py-5">
                <h5>No Products Available</h5>
            </div>

            @endforelse

        </div>

    </div>
</section>

<!-- ==================================
     Feature product End here
================================= -->

<!-- ==============================
     Latest News Start
============================== -->

<section id="news">
    <div class="container d-lg-block d-none">

        <h2>Latest News</h2>

        <div class="row">

            <!-- News Card 01 -->
            <div class="col-lg-4">
                <div class="newsCard">

                    <div class="newsCardImg">
                        <div class="newsDate">
                            <h6>18</h6>
                            <p>Nov</p>
                        </div>

                        <a href="#">
                            <img src="{{ asset('frontend/img/news-malta.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="newsCardCnt">
                        <div class="newsInfo">

                            <div class="icon">
                                <a href="#">
                                    <iconify-icon icon="solar:chef-hat-linear"></iconify-icon>
                                    Food
                                </a>

                                <a href="#">
                                    <iconify-icon icon="solar:user-linear"></iconify-icon>
                                    By Admin
                                </a>

                                <a href="#">
                                    <iconify-icon icon="mdi-light:comment"></iconify-icon>
                                    65 Comments
                                </a>
                            </div>

                            <h4>
                                Curabitur porttitor orci eget neque accumsan venenatis.
                                Nunc fermentum.
                            </h4>

                            <a href="#">
                                Read More
                                <iconify-icon icon="si:arrow-right-line"></iconify-icon>
                            </a>

                        </div>
                    </div>

                </div>
            </div>


            <!-- News Card 02 -->
            <div class="col-lg-4">
                <div class="newsCard">

                    <div class="newsCardImg">
                        <div class="newsDate">
                            <h6>29</h6>
                            <p>Jan</p>
                        </div>

                        <a href="#">
                            <img src="{{ asset('frontend/img/news-egg.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="newsCardCnt">
                        <div class="newsInfo">

                            <div class="icon">
                                <a href="#">
                                    <iconify-icon icon="solar:chef-hat-linear"></iconify-icon>
                                    Food
                                </a>

                                <a href="#">
                                    <iconify-icon icon="solar:user-linear"></iconify-icon>
                                    By Admin
                                </a>

                                <a href="#">
                                    <iconify-icon icon="mdi-light:comment"></iconify-icon>
                                    65 Comments
                                </a>
                            </div>

                            <h4>
                                Eget lobortis lorem lacinia. Vivamus pharetra semper.
                            </h4>

                            <a href="#">
                                Read More
                                <iconify-icon icon="si:arrow-right-line"></iconify-icon>
                            </a>

                        </div>
                    </div>

                </div>
            </div>


            <!-- News Card 03 -->
            <div class="col-lg-4">
                <div class="newsCard">

                    <div class="newsCardImg">
                        <div class="newsDate">
                            <h6>21</h6>
                            <p>Feb</p>
                        </div>

                        <a href="#">
                            <img src="{{ asset('frontend/img/news-salad.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>

                    <div class="newsCardCnt">
                        <div class="newsInfo">

                            <div class="icon">
                                <a href="#">
                                    <iconify-icon icon="solar:chef-hat-linear"></iconify-icon>
                                    Food
                                </a>

                                <a href="#">
                                    <iconify-icon icon="solar:user-linear"></iconify-icon>
                                    By Admin
                                </a>

                                <a href="#">
                                    <iconify-icon icon="mdi-light:comment"></iconify-icon>
                                    65 Comments
                                </a>
                            </div>

                            <h4>
                                Maecenas blandit risus elementum mauris malesuada.
                            </h4>

                            <a href="#">
                                Read More
                                <iconify-icon icon="si:arrow-right-line"></iconify-icon>
                            </a>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==============================
     Latest News End
============================== -->

<!-- =====================================
     Testimonial Start
===================================== -->

<section id="testimonial">
    <div class="container">

        <!-- Testimonial Heading -->
        <div class="testimonialHeading d-flex align-items-center justify-content-between">
            <h2>Client Testimonial</h2>

            <div class="arrowIcon">
                <iconify-icon icon="si:arrow-left-line" width="24" height="24"></iconify-icon>

                <iconify-icon icon="si:arrow-right-line" width="24" height="24"></iconify-icon>
            </div>
        </div>


        <!-- Testimonial Cards -->
        <div class="row">

            <!-- Testimonial Card 01 -->
            <div class="col-lg-4">
                <div class="testimonialCard">

                    <div class="testimonialCnt">
                        <iconify-icon icon="mdi:format-quote-close" width="40" height="40"></iconify-icon>

                        <p>
                            Pellentesque eu nibh eget mauris congue mattis mattis nec tellus.
                            Phasellus imperdiet elit eu magna dictum, bibendum cursus velit
                            sodales. Donec sed neque eget
                        </p>
                    </div>

                    <div class="testimonialPerson d-flex align-items-center justify-content-between">

                        <div class="personInfo d-flex align-items-center">

                            <div class="personImg">
                                <img src="{{ asset('frontend/img/robert.png') }}" class="img-fluid" alt="Robert Fox">
                            </div>

                            <div class="personName">
                                <h6>Robert Fox</h6>
                                <p>Customer</p>
                            </div>

                        </div>

                        <div class="rating">
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                        </div>

                    </div>

                </div>
            </div>


            <!-- Testimonial Card 02 -->
            <div class="col-lg-4">
                <div class="testimonialCard">

                    <div class="testimonialCnt">
                        <iconify-icon icon="mdi:format-quote-close" width="40" height="40"></iconify-icon>

                        <p>
                            Pellentesque eu nibh eget mauris congue mattis mattis nec tellus.
                            Phasellus imperdiet elit eu magna dictum, bibendum cursus velit
                            sodales. Donec sed neque eget
                        </p>
                    </div>

                    <div class="testimonialPerson d-flex align-items-center justify-content-between">

                        <div class="personInfo d-flex align-items-center">

                            <div class="personImg">
                                <img src="{{ asset('frontend/img/dianne.png') }}" class="img-fluid"
                                    alt="Dianne Russell">
                            </div>

                            <div class="personName">
                                <h6>Dianne Russell</h6>
                                <p>Customer</p>
                            </div>

                        </div>

                        <div class="rating">
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                        </div>

                    </div>

                </div>
            </div>


            <!-- Testimonial Card 03 -->
            <div class="col-lg-4">
                <div class="testimonialCard">

                    <div class="testimonialCnt">
                        <iconify-icon icon="mdi:format-quote-close" width="40" height="40"></iconify-icon>

                        <p>
                            Pellentesque eu nibh eget mauris congue mattis mattis nec tellus.
                            Phasellus imperdiet elit eu magna dictum, bibendum cursus velit
                            sodales. Donec sed neque eget
                        </p>
                    </div>

                    <div class="testimonialPerson d-flex align-items-center justify-content-between">

                        <div class="personInfo d-flex align-items-center">

                            <div class="personImg">
                                <img src="{{ asset('frontend/img/eleanor.png') }}" class="img-fluid" alt="Eleanor Pena">
                            </div>

                            <div class="personName">
                                <h6>Eleanor Pena</h6>
                                <p>Customer</p>
                            </div>

                        </div>

                        <div class="rating">
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                            <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- =====================================
     Testimonial End
===================================== -->

<!-- =====================================
     Advertisement Start
===================================== -->

<section id="advertisement">
    <div class="container">

        <div class="row align-items-center">

            <!-- Advertisement Logo 01 -->
            <div class="col-lg-2 col-2">
                <img src="{{ asset('frontend/img/step.png') }}" class="img-fluid" alt="Steps">
            </div>

            <!-- Advertisement Logo 02 -->
            <div class="col-lg-2 col-2">
                <img src="{{ asset('frontend/img/mango-company.png') }}" class="img-fluid" alt="Mango">
            </div>

            <!-- Advertisement Logo 03 -->
            <div class="col-lg-2 col-2">
                <img src="{{ asset('frontend/img/food.png') }}" class="img-fluid" alt="Food">
            </div>

            <!-- Advertisement Logo 04 -->
            <div class="col-lg-2 col-2">
                <img src="{{ asset('frontend/img/food-2.png') }}" class="img-fluid" alt="Food">
            </div>

            <!-- Advertisement Logo 05 -->
            <div class="col-lg-2 col-2">
                <img src="{{ asset('frontend/img/bookoff.png') }}" class="img-fluid" alt="BookOff">
            </div>

            <!-- Advertisement Logo 06 -->
            <div class="col-lg-2 col-2">
                <img src="{{ asset('frontend/img/g-seris.png') }}" class="img-fluid" alt="G-Series">
            </div>

        </div>
    </div>
</section>

<!-- =====================================
     Advertisement End
===================================== -->

<!-- ==========================
     Instagram Start
========================== -->

<section id="instaPost">
    <div class="container">

        <h2>Follow Us On Instagram</h2>

        <div class="row">

            <!-- Instagram Item -->
            <div class="instaImg col-lg-2 col-4 mb-lg-0 mb-4">
                <div class="instaIcon">
                    <a href="#">
                        <iconify-icon icon="mdi:instagram" width="32" height="32"></iconify-icon>
                    </a>
                </div>

                <a href="#">
                    <img src="{{ asset('frontend/img/instra-tomatto.png') }}" class="img-fluid" alt="Instagram Post">
                </a>
            </div>

            <!-- Instagram Item -->
            <div class="instaImg col-lg-2 col-4 mb-lg-0 mb-4">
                <div class="instaIcon">
                    <a href="#">
                        <iconify-icon icon="mdi:instagram" width="32" height="32"></iconify-icon>
                    </a>
                </div>

                <a href="#">
                    <img src="{{ asset('frontend/img/instra-leaf.png') }}" class="img-fluid" alt="Instagram Post">
                </a>
            </div>

            <!-- Instagram Item -->
            <div class="instaImg col-lg-2 col-4 mb-lg-0 mb-4">
                <div class="instaIcon">
                    <a href="#">
                        <iconify-icon icon="mdi:instagram" width="32" height="32"></iconify-icon>
                    </a>
                </div>

                <a href="#">
                    <img src="{{ asset('frontend/img/instra-waterleaf.png') }}" class="img-fluid" alt="Instagram Post">
                </a>
            </div>

            <!-- Instagram Item -->
            <div class="instaImg col-lg-2 col-4">
                <div class="instaIcon">
                    <a href="#">
                        <iconify-icon icon="mdi:instagram" width="32" height="32"></iconify-icon>
                    </a>
                </div>

                <a href="#">
                    <img src="{{ asset('frontend/img/instra-salad.png') }}" class="img-fluid" alt="Instagram Post">
                </a>
            </div>

            <!-- Instagram Item -->
            <div class="instaImg col-lg-2 col-4">
                <div class="instaIcon">
                    <a href="#">
                        <iconify-icon icon="mdi:instagram" width="32" height="32"></iconify-icon>
                    </a>
                </div>

                <a href="#">
                    <img src="{{ asset('frontend/img/instra-lotleaf.png') }}" class="img-fluid" alt="Instagram Post">
                </a>
            </div>

            <!-- Instagram Item -->
            <div class="instaImg col-lg-2 col-4">
                <div class="instaIcon">
                    <a href="#">
                        <iconify-icon icon="mdi:instagram" width="32" height="32"></iconify-icon>
                    </a>
                </div>

                <a href="#">
                    <img src="{{ asset('frontend/img/instra-malta.png') }}" class="img-fluid" alt="Instagram Post">
                </a>
            </div>

        </div>
    </div>
</section>

<!-- ==========================
     Instagram End
========================== -->




<script>
    document.querySelectorAll('.countdownTimer').forEach(function (timer) {
    // Default: 1 day 23h 34m 57s from page load, since there's no backend end-time yet.
    // Once the backend is ready, set data-end to a real timestamp (ms) and this will pick it up automatically.
    var endAttr = timer.dataset.end;
    var end = (endAttr && endAttr !== '__SET_END_TIME_MS__')
        ? parseInt(endAttr, 10)
        : Date.now() + ((1 * 24 * 60 * 60) + (23 * 60 * 60) + (34 * 60) + 57) * 1000;
 
    var dayEl = timer.querySelector('.days');
    var hourEl = timer.querySelector('.hours');
    var minEl = timer.querySelector('.mins');
    var secEl = timer.querySelector('.secs');
 
    function pad(n) { return n.toString().padStart(2, '0'); }
 
    function tick() {
        var distance = end - Date.now();
        if (distance <= 0) {
            dayEl.textContent = hourEl.textContent = minEl.textContent = secEl.textContent = '00';
            clearInterval(interval);
            return;
        }
        var days = Math.floor(distance / 86400000);
        var hours = Math.floor((distance % 86400000) / 3600000);
        var mins = Math.floor((distance % 3600000) / 60000);
        var secs = Math.floor((distance % 60000) / 1000);
        dayEl.textContent = pad(days);
        hourEl.textContent = pad(hours);
        minEl.textContent = pad(mins);
        secEl.textContent = pad(secs);
    }
 
    tick();
    var interval = setInterval(tick, 1000);
});
</script>




@endsection