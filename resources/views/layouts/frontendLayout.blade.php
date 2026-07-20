<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "Home") - EcoBazar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('frontend/img/plant 1.png')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>

<body>
    <header>
    
    <!-- ==========================
         Header Top start
    ========================== -->

<div id="headertop">
    <div class="container">

        <div class="header-top-wrapper">

            <!-- Left -->
            <div class="header-top-left">

                <iconify-icon icon="tdesign:location"></iconify-icon>

                <span>
                    Store Location: Lincoln-344, Illinois, Chicago, USA
                </span>

            </div>

            <!-- Right -->
            <div class="header-top-right">

                <div class="top-dropdown">
                    <select>
                        <option>ENG</option>
                        <option>BN</option>
                    </select>
                </div>

                <div class="top-dropdown">
                    <select>
                        <option>USD</option>
                        <option>BDT</option>
                    </select>
                </div>

                <div class="top-divider"></div>

                <div class="auth-links">

                    <a href="{{ route('login') }}">
                        Sign In
                    </a>

                    <span>/</span>

                    <a href="#">
                        Sign Up
                    </a>

                </div>

            </div>

        </div>

    </div>
</div>
        
<!-- ==========================
     Header Top end
========================== -->     

<div id="headermid">
    <div class="container">

        <div class="header-main">

            <!-- Logo -->
            <div class="header-logo">
                <a href="{{ route('homepage') }}">
                    <img src="{{ asset('frontend/img/Logo.png') }}" alt="EcoBazar">
                </a>
            </div>

            <!-- Search -->
            <div class="header-search">

                <form>

                    <div class="search-box">

                        <iconify-icon
                            icon="teenyicons:search-outline">
                        </iconify-icon>

                        <input
                            type="search"
                            placeholder="Search for products...">

                        <button type="submit">
                            Search
                        </button>

                    </div>

                </form>

            </div>

            <!-- Right -->
            <div class="header-action">

                <a href="#" class="action-item">

                    <iconify-icon
                        icon="simple-line-icons:heart">
                    </iconify-icon>

                </a>

                <div class="divider"></div>

                <a href="#" class="action-item cart">

                    <span class="cart-icon">

                        <iconify-icon
                            icon="clarity:shopping-bag-line">
                        </iconify-icon>

                        <span class="badge">2</span>

                    </span>

                    <div class="cart-info">
                        <small>Shopping Cart</small>
                        <strong>$57.00</strong>
                    </div>

                </a>

            </div>

        </div>

    </div>
</div>
<!-- ==========================
     Main Header End
========================== -->     

<div class="headerlast d-none d-lg-block">

    <div class="container">

<div class="header-navbar">

    <!-- Navigation -->
    <nav class="main-menu">
        <ul>

            <li>
                <a href="{{ route('homepage') }}" class="active">Home</a>
            </li>

            <li>
                <a href="#">Shop</a>
            </li>

            <li>
                <a href="#">Categories</a>
            </li>

            <li>
                <a href="#">Blog</a>
            </li>

            <li>
                <a href="#">About</a>
            </li>

            <li>
                <a href="{{ route('contact') }}">Contact</a>
            </li>

        </ul>
    </nav>

    <!-- Support -->
    <div class="nav-contact">
        <a href="tel:+12195550114">
            <iconify-icon icon="bx:phone-call"></iconify-icon>
            <span>(219) 555-0114</span>
        </a>
    </div>

</div>

    </div>

</div>
<!-- ==========================
     Header last End
========================== -->

        <div class="mblnavbar d-lg-none d-flex">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-1">
                        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft"
                            aria-controls="offcanvasLeft">
                            <iconify-icon icon="heroicons-solid:menu-alt-1" style="color: #000"></iconify-icon>
                        </button>
                    </div>
                    <div class="col-8 text-center">
                        <a href="#">
                            <img src="{{ asset('frontend/img/Logo.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                            aria-controls="offcanvasTop">
                            <iconify-icon icon="teenyicons:search-outline"></iconify-icon>
                        </a>
                        <a href="#" class="iconsCart" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                            <p>2</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="offCanvas d-lg-none d-flex">
            <div class="mblNavBtn">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLeft"
                    aria-controls="offcanvasLeft"></button>

                <div class="offcanvas offcanvas-start" tabindex="1" id="offcanvasLeft"
                    aria-labelledby="offcanvasLeftLabel">
                    <div class="offcanvas-header">
                        <a href="#"><img src="{{ asset('frontend/img/Logo.png')}}" class="offcanvas-title img-fluid"
                                id="offcanvasLeftLabel" alt=""></a>
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
                </div>
            </div>
            <div class="mblSearchBtn">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                    aria-controls="offcanvasTop"></button>

                <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop"
                    aria-labelledby="offcanvasTopLabel">
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
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight"></button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Purchase item <img
                                src="{{ asset('frontend/img/plant 1.png')}}" class="img-fluid"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="buyItem">
                            <div class="container">
                                <div class="row">
                                    <div class="carditem col-5">
                                        <a href="#">
                                            <img src="{{ asset('frontend/img/Apple.png')}}" alt="">
                                            <h5>Green Apple</h5>
                                            <p>2 Kg <b>15$</b></p>
                                        </a>
                                    </div>
                                    <div class="carditem col-5">
                                        <a href="#">
                                            <img src="{{ asset('frontend/img/Malta.png')}}" alt="">
                                            <h5>Indian Malta</h5>
                                            <p>2 Kg <b>15$</b></p>
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
                        <li><a href="#">
                                <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                            </a></li>
                        <li><a href="./shop.html">
                                <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                            </a></li>
                        <li><a href="#">
                                <iconify-icon icon="cil:home"></iconify-icon>
                            </a></li>
                        <li><a href="#">
                                <iconify-icon icon="teenyicons:discount-outline"></iconify-icon>
                            </a></li>
                        <li><a href="./signin.html">
                                <iconify-icon icon="gg:profile"></iconify-icon>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>
    {{-- Main Content end --}}

    <footer>
        <div class="container">
            <div class="row pb-lg-5">
                <div class="col-lg-3">
                    <div class="about d-none d-lg-block">
                        <h5>About Shopery</h5>
                        <p>Morbi cursus porttitor enim lobortis molestie. Duis gravida turpis dui, eget bibendum magna
                            congue nec.</p>
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
                                            <span class="appsLogo">
                                                <iconify-icon icon="ic:baseline-apple"></iconify-icon>
                                            </span>
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
                                            <span class="apps_logo">
                                                <iconify-icon icon="mage:playstore"></iconify-icon>
                                            </span>
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
                            <li><a href="#">
                                    <iconify-icon icon="ri:facebook-fill"></iconify-icon>
                                </a></li>
                            <li><a href="#">
                                    <iconify-icon icon="mynaui:twitter"></iconify-icon>
                                </a></li>
                            <li><a href="#">
                                    <iconify-icon icon="mingcute:pinterest-line"></iconify-icon>
                                </a></li>
                            <li><a href="#">
                                    <iconify-icon icon="mdi:instagram"></iconify-icon>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="copyright col-lg-4 d-lg-flex justify-content-lg-center">
                    <p>Ecobazar eCommerce © 2021. All Rights Reserved</p>
                </div>
                <div class="col-lg-4 d-lg-flex justify-content-lg-end">
                    <ul class="payment d-flex">
                        <li>
                            <a href="#"><img src="{{ asset('frontend/img/pay1.png')}}" class="img-fluid" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('frontend/img/pay2.png')}}" class="img-fluid" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('frontend/img/pay3.png')}}" class="img-fluid" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('frontend/img/pay4.png')}}" class="img-fluid" alt=""></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('frontend/img/pay5.png')}}" class="img-fluid" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/jQuery.countdown-master/jQuery.countdown-master/dist/jquery.countdown.min.js') }}">
    </script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>
</body>

</html>