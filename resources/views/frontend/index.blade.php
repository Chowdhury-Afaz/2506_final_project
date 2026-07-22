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
                    <a href="#">View All <span><iconify-icon icon="mynaui:arrow-right" width="24" height="24"></iconify-icon></span></a>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/fresh-fruit.png')}}" alt="" class="img-fluid">
                            <h5>Fresh Fruit</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#">
                                <img src="{{ asset('frontend/img/vegetables.png')}}" alt="" class="img-fluid">
                            <h5>Vegetables</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/meat-fish.png')}}" alt="" class="img-fluid">
                            <h5>Meat & Fish</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/snacks.png')}}" alt="" class="img-fluid">
                            <h5>Snacks</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/beverages.png')}}" alt="" class="img-fluid">
                            <h5>Beverages</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/beauty-health.png')}}" alt="" class="img-fluid">
                            <h5>Beauty</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/bread-bakery.png')}}" alt="" class="img-fluid">
                            <h5>Bread & Bakery</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/baking.png')}}" alt="" class="img-fluid">
                            <h5>Baking Needs</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/cooking.png')}}" alt="" class="img-fluid">
                            <h5>Cooking</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/daibetic.png')}}" alt="" class="img-fluid">
                            <h5>Diabetic Food</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/detergents.png')}}" alt="" class="img-fluid">
                            <h5>Dish Detergents</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3">
                        <div class="categoryCard text-center">
                            <a href="#"><img src="{{ asset('frontend/img/oil.png')}}" alt="" class="img-fluid">
                            <h5>Oil</h5>
                            </a>
                        </div>
                    </div>
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
                    <a href="#">View All <span><iconify-icon icon="mynaui:arrow-right" width="24" height="24"></iconify-icon></span></a>
                </div>
                <div class="row">
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <div class="discount">
                                    <p>Sale 50%</p>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/apple.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Green Apple</a>
                                <p>$14.99 <del>$20.99</del></p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/malta.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Fresh Indian Malta</a>
                                <p>$19.99</p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/cabbage.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Chinese cabbage</a>
                                <p>$11.99</p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/lettuce.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Green Lettuce</a>
                                <p>$10.99</p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/eggplant.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Eggplant</a>
                                <p>$33.99</p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/potateos.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Big Potatoes</a>
                                <p>$19.99</p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/cron.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Corn</a>
                                <p>$19.99</p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/cauliflower.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Fresh Cauliflower</a>
                                <p>$11.99</p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <div class="discount">
                                    <p>Sale 50%</p>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/capsicum.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Green Capsicum</a>
                                <p>$10.99 <del>$20.99</del></p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg px-lg-0 col-6">
                        <div class="productCard">
                            <div class="productImg">
                                <div class="hoverIcon">
                                    <a href="#"><iconify-icon icon="solar:heart-linear" width="24" height="24"></iconify-icon></a>
                                    <a href="#"><iconify-icon icon="solar:eye-outline" width="24" height="24"></iconify-icon></a>
                                </div>
                                <a href="#"><img src="{{ asset('frontend/img/green-chili.png')}}" alt="" class="img-fluid"></a>
                            </div>
                            <div class="productCnt">
                                <a href="#">Green Chili</a>
                                <p>$10.99</p>
                                <div class="rating">
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon icon="ic:round-star" width="16" height="16"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star" width="16" height="16"></iconify-icon>
                                </div>
                                <div class="addToCart">
                                    <iconify-icon icon="ph:handbag" width="24" height="24"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
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
<section id="newestProducts">
    <div class="container">
        <div class="row">
            <h2 class="col-6">Newest Products</h2>
            <p class="col-6">view all <iconify-icon icon="si:arrow-right-duotone"></iconify-icon>
            </p>
        </div>
        <img src="{{ asset('frontend/img/Line.png')}}" alt="">
        <div class="swiperFeature swiper ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="featureCard">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/AppleBig.png')}}" alt=""></a>
                            <ul class="featureIcons">
                                <li><a href="#">
                                        <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                                    </a></li>
                                <li><a href="#">
                                        <iconify-icon icon="bx:show"></iconify-icon>
                                    </a></li>
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
                            <a href="#" class="cartBtn">
                                <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featureCard">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/Cabbage.png')}}" alt=""></a>
                            <ul class="featureIcons">
                                <li><a href="#">
                                        <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                                    </a></li>
                                <li><a href="#">
                                        <iconify-icon icon="bx:show"></iconify-icon>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#">Green Cabbage</a>
                            <p>$14.99</p>
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                            <a href="#" class="cartBtn">
                                <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featureCard">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/Green Lettuce.png')}}"
                                    alt=""></a>
                            <ul class="featureIcons">
                                <li><a href="#">
                                        <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                                    </a></li>
                                <li><a href="#">
                                        <iconify-icon icon="bx:show"></iconify-icon>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#">Green Lettuce</a>
                            <p>$14.99</p>
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                            <a href="#" class="cartBtn">
                                <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featureCard col-lg">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/Green Chili.png')}}"
                                    alt=""></a>
                            <ul class="featureIcons">
                                <li><a href="#">
                                        <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                                    </a></li>
                                <li><a href="#">
                                        <iconify-icon icon="bx:show"></iconify-icon>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#">Green Chili</a>
                            <p>$14.99</p>
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                            <a href="#" class="cartBtn">
                                <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featureCard">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/Corn.png')}}" alt=""></a>
                            <ul class="featureIcons">
                                <li><a href="#">
                                        <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                                    </a></li>
                                <li><a href="#">
                                        <iconify-icon icon="bx:show"></iconify-icon>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="#">Corn</a>
                            <p>$14.99</p>
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                            <a href="#" class="cartBtn">
                                <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featureCard">
                        <div class="featureImg">
                            <a href="#"><img class="img-fluid" src="{{ asset('frontend/img/AppleBig.png')}}" alt=""></a>
                            <ul class="featureIcons">
                                <li><a href="#">
                                        <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                                    </a></li>
                                <li><a href="#">
                                        <iconify-icon icon="bx:show"></iconify-icon>
                                    </a></li>
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
                            <a href="#" class="cartBtn">
                                <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<section id="testimonial">
    <div class="container">
        <h2>Client Testimonial</h2>
        <img src="{{ asset('frontend/img/Line.png')}}" alt="">
        <div class="swiper swiperReview ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="person">
                        <img src="{{ asset('frontend/img/coma.png')}}" alt="">
                        <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu
                            magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                        <div class="row clientsMain">
                            <div class="col-lg-8">
                                <div class="personName">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-3">
                                            <img src="{{ asset('frontend/img/man1.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <h6>Dianne Russell</h6>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="stars">
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="person">
                        <img src="{{ asset('frontend/img/coma.png')}}" alt="">
                        <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu
                            magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                        <div class="row clientsMain">
                            <div class="col-lg-8">
                                <div class="personName">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-3">
                                            <img src="{{ asset('frontend/img/man1.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <h6>Dianne Russell</h6>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="stars">
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="person">
                        <img src="{{ asset('frontend/img/coma.png')}}" alt="">
                        <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu
                            magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                        <div class="row clientsMain">
                            <div class="col-lg-8">
                                <div class="personName">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-3">
                                            <img src="{{ asset('frontend/img/man1.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <h6>Dianne Russell</h6>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="stars">
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="person">
                        <img src="{{ asset('frontend/img/coma.png')}}" alt="">
                        <p>Pellentesque eu nibh eget mauris congue mattis mattis nec tellus. Phasellus imperdiet elit eu
                            magna dictum, bibendum cursus velit sodales. Donec sed neque eget</p>
                        <div class="row clientsMain">
                            <div class="col-lg-8">
                                <div class="personName">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-3">
                                            <img src="{{ asset('frontend/img/man1.png')}}" class="img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <h6>Dianne Russell</h6>
                                            <p>Customer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="stars">
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="next">
            <iconify-icon icon="basil:arrow-right-solid"></iconify-icon>
        </div>
        <div class="prev">
            <iconify-icon icon="basil:arrow-left-solid"></iconify-icon>
        </div>
        <div class="dots"></div>
    </div>
</section>
<section id="ig">
    <div class="container">
        <div class="heading">
            <h4>Follow Us On Instagram</h4>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                <div class="igImage">
                    <img src="{{ asset('frontend/img/ig1.png')}}" class="img-fluid" alt="">
                    <div class="overlayIg">
                        <div class="overlayIgInfo">
                            <a href="#">
                                <iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                <div class="igImage">
                    <img src="{{ asset('frontend/img/ig2.png')}}" class="img-fluid" alt="">
                    <div class="overlayIg">
                        <div class="overlayIgInfo">
                            <a href="#">
                                <iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                <div class="igImage">
                    <img src="{{ asset('frontend/img/ig3.png')}}" class="img-fluid" alt="">
                    <div class="overlayIg">
                        <div class="overlayIgInfo">
                            <a href="#">
                                <iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                <div class="igImage">
                    <img src="{{ asset('frontend/img/ig4.png')}}" class="img-fluid" alt="">
                    <div class="overlayIg">
                        <div class="overlayIgInfo">
                            <a href="#">
                                <iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                <div class="igImage">
                    <img src="{{ asset('frontend/img/ig5.png')}}" class="img-fluid" alt="">
                    <div class="overlayIg">
                        <div class="overlayIgInfo">
                            <a href="#">
                                <iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-6 mb-3 mb-lg-0">
                <div class="igImage">
                    <img src="{{ asset('frontend/img/ig6.png')}}" class="img-fluid" alt="">
                    <div class="overlayIg">
                        <div class="overlayIgInfo">
                            <a href="#">
                                <iconify-icon icon="qlementine-icons:instagram-16"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="newsletter">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-2 col-md-2">
                <div class="newsletterLogo">
                    <img src="{{ asset('frontend/img/Logo.png')}}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 d-lg-flex justify-content-lg-end">
                <div class="newsletterTypo">
                    <h5>Subscribe to our Newsletter</h5>
                    <p>Pellentesque eu nibh eget mauris congue mattis matti</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 d-lg-flex justify-content-end">
                <div class="mailSubmit">
                    <input type="mail" placeholder="Your Email Address">
                    <a href="#">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection