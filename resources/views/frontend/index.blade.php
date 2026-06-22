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
        <div class="bannerBottom">
            <div class="row">
                <div class="col-lg-3 d-flex">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/delivery-truck 1.png')}}" alt="">
                    </div>
                    <div class="col-8">
                        <h5>Free Shipping</h5>
                        <p>Free shipping on all your order</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/delivery-truck 1.png')}}" alt="">
                    </div>
                    <div class="col-8">
                        <h5>Free Shipping</h5>
                        <p>Free shipping on all your order</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/delivery-truck 1.png')}}" alt="">
                    </div>
                    <div class="col-8">
                        <h5>Free Shipping</h5>
                        <p>Free shipping on all your order</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex">
                    <div class="col-3">
                        <img src="{{ asset('frontend/img/delivery-truck 1.png')}}" alt="">
                    </div>
                    <div class="col-8">
                        <h5>Free Shipping</h5>
                        <p>Free shipping on all your order</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>

<section class="feature">
    <div class="container">
        <div class="featureHead">
            <h2>Featured Products</h2>
            <img src="{{ asset('frontend/img/Line.png')}}" alt="">
        </div>
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
<section class="featureTwo">
    <div class="container">
        <div class="row align-items-center">
            <div class="hotDeals col-lg-3">
                <h3>Hot Deals</h3>
                <div class="featureCardSm d-flex">
                    <div class="featureImgSm col-4">
                        <a href="#"><img src="{{ asset('frontend/img/Apple.png')}}" alt=""></a>
                    </div>
                    <div class="featureCntSm col-8">
                        <a href="#">Green Apple</a>
                        <p>$14.99</p>
                        <div class="stars d-flex">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                    </div>
                    <ul class="featSmQuick">
                        <li>
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="bx:show"></iconify-icon>
                        </li>
                    </ul>
                </div>
                <div class="featureCardSm d-flex">
                    <div class="featureImgSm col-4">
                        <a href="#"><img src="{{ asset('frontend/img/Malta.png')}}" alt=""></a>
                    </div>
                    <div class="featureCntSm col-8">
                        <a href="#">Indian Malta</a>
                        <p>$14.99</p>
                        <div class="stars d-flex">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                    </div>
                    <ul class="featSmQuick">
                        <li>
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="bx:show"></iconify-icon>
                        </li>
                    </ul>
                </div>
                <div class="featureCardSm d-flex">
                    <div class="featureImgSm col-4">
                        <a href="#"><img src="{{ asset('frontend/img/Lettuce.png')}}" alt=""></a>
                    </div>
                    <div class="featureCntSm col-8">
                        <a href="#">Green Lettuce</a>
                        <p>$14.99</p>
                        <div class="stars d-flex">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                    </div>
                    <ul class="featSmQuick">
                        <li>
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="bx:show"></iconify-icon>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hotDeals col-lg-3">
                <h3>Best Seller</h3>
                <div class="featureCardSm d-flex">
                    <div class="featureImgSm col-4">
                        <a href="#"><img src="{{ asset('frontend/img/Eggplant.png')}}" alt=""></a>
                    </div>
                    <div class="featureCntSm col-8">
                        <a href="#">Eggplant</a>
                        <p>$14.99</p>
                        <div class="stars d-flex">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                    </div>
                    <ul class="featSmQuick">
                        <li>
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="bx:show"></iconify-icon>
                        </li>
                    </ul>
                </div>
                <div class="featureCardSm d-flex">
                    <div class="featureImgSm col-4">
                        <a href="#"><img src="{{ asset('frontend/img/Ladisfinger.png')}}" alt=""></a>
                    </div>
                    <div class="featureCntSm col-8">
                        <a href="#">Ladisfinger</a>
                        <p>$14.99</p>
                        <div class="stars d-flex">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                    </div>
                    <ul class="featSmQuick">
                        <li>
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="bx:show"></iconify-icon>
                        </li>
                    </ul>
                </div>
                <div class="featureCardSm d-flex">
                    <div class="featureImgSm col-4">
                        <a href="#"><img src="{{ asset('frontend/img/Tomato.png')}}" alt=""></a>
                    </div>
                    <div class="featureCntSm col-8">
                        <a href="#">Red Tomato</a>
                        <p>$14.99</p>
                        <div class="stars d-flex">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                    </div>
                    <ul class="featSmQuick">
                        <li>
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="bx:show"></iconify-icon>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hotDeals col-lg-3">
                <h3>Top Rated</h3>
                <div class="featureCardSm d-flex">
                    <div class="featureImgSm col-4">
                        <a href="#"><img src="{{ asset('frontend/img/Big Potato.png')}}" alt=""></a>
                    </div>
                    <div class="featureCntSm col-8">
                        <a href="#">Big Potato</a>
                        <p>$14.99</p>
                        <div class="stars d-flex">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                    </div>
                    <ul class="featSmQuick">
                        <li>
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="bx:show"></iconify-icon>
                        </li>
                    </ul>
                </div>
                <div class="featureCardSm d-flex">
                    <div class="featureImgSm col-4">
                        <a href="#"><img src="{{ asset('frontend/img/Corn Sm.png')}}" alt=""></a>
                    </div>
                    <div class="featureCntSm col-8">
                        <a href="#">Corn</a>
                        <p>$14.99</p>
                        <div class="stars d-flex">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                    </div>
                    <ul class="featSmQuick">
                        <li>
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="bx:show"></iconify-icon>
                        </li>
                    </ul>
                </div>
                <div class="featureCardSm d-flex">
                    <div class="featureImgSm col-4">
                        <a href="#"><img src="{{ asset('frontend/img/Cauliflower.png')}}" alt=""></a>
                    </div>
                    <div class="featureCntSm col-8">
                        <a href="#">Fresh Cauliflower</a>
                        <p>$14.99</p>
                        <div class="stars d-flex">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
                    </div>
                    <ul class="featSmQuick">
                        <li>
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                        </li>
                        <li>
                            <iconify-icon icon="bx:show"></iconify-icon>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="featOffer col-lg-3">
                <h5>SUMMER SALE</h5>
                <p>75% off</p>
                <a href="#">
                    <button>Shop Now<iconify-icon icon="si:arrow-right-duotone"></iconify-icon></button>
                </a>
            </div>
        </div>
</section>
<section class="topCatagory">
    <div class="container">
        <h2>Top Catagory</h2>
        <img class="ctgImg" src="{{ asset('frontend/img/Line.png')}}" alt="">
        <div class="swiper catagorySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="catagoryCard">
                        <a href="#">
                            <img class="ctgImg" src="{{ asset('frontend/img/Vegetable vector.png')}}" alt=""><br>
                            <h5>Vegetable</h5>
                            <p>165 Products</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="catagoryCard">
                        <a href="#">
                            <img class="ctgImg" src="{{ asset('frontend/img/Vegetable vector.png')}}" alt=""><br>
                            <h5>Vegetable</h5>
                            <p>165 Products</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="catagoryCard">
                        <a href="#">
                            <img class="ctgImg" src="{{ asset('frontend/img/Vegetable vector.png')}}" alt=""><br>
                            <h5>Vegetable</h5>
                            <p>165 Products</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="catagoryCard">
                        <a href="#">
                            <img class="ctgImg" src="{{ asset('frontend/img/Vegetable vector.png')}}" alt=""><br>
                            <h5>Vegetable</h5>
                            <p>165 Products</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="catagoryCard">
                        <a href="#">
                            <img class="ctgImg" src="{{ asset('frontend/img/Vegetable vector.png')}}" alt=""><br>
                            <h5>Vegetable</h5>
                            <p>165 Products</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="catagoryCard">
                        <a href="#">
                            <img class="ctgImg" src="{{ asset('frontend/img/Vegetable vector.png')}}" alt=""><br>
                            <h5>Vegetable</h5>
                            <p>165 Products</p>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="catagoryCard">
                        <a href="#">
                            <img class="ctgImg" src="{{ asset('frontend/img/Vegetable vector.png')}}" alt=""><br>
                            <h5>Vegetable</h5>
                            <p>165 Products</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="rightBtn">
                <iconify-icon icon="basil:arrow-right-solid" width="24" height="24" style="color: #000"></iconify-icon>
            </div>
            <div class="leftBtn">
                <iconify-icon icon="basil:arrow-left-solid" width="24" height="24" style="color: #000"></iconify-icon>
            </div>
        </div>
    </div>
</section>
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