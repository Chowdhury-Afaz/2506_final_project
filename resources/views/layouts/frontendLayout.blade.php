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
    <link rel="stylesheet" href="{{ asset('frontend/css/customer_dashbaord.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/shop-redesign.css') }}">
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

<!-- ==========================
     User login
========================== -->

<div class="auth-links">

@auth('customer')

    <div class="user-menu">
        <button class="user-menu-btn" type="button">

            <div class="user-avatar">
                {{ strtoupper(substr(Auth::guard('customer')->user()->name, 0, 1)) }}
            </div>

            <span class="user-name">
                {{ Auth::guard('customer')->user()->name }}
            </span>

            <iconify-icon icon="mdi:chevron-down"></iconify-icon>

        </button>

        <div class="user-dropdown">

            <a href="{{ route('user.dashboard') }}">
                <iconify-icon icon="mdi:view-dashboard-outline"></iconify-icon>
                Dashboard
            </a>

            <a href="{{ route('user.orders') }}">
                <iconify-icon icon="mdi:package-variant-closed"></iconify-icon>
                My Orders
            </a>

            <a href="#" class="#">

            <iconify-icon icon="solar:user-linear"></iconify-icon>
            Profile

            </a>

                    <a href="#" class="#">

            <iconify-icon icon="solar:settings-linear"></iconify-icon>

            Settings

        </a>

            <div class="dropdown-divider"></div>

            <form action="{{ route('customer.signout') }}" method="POST">
                @csrf

                <button type="submit">
                    <iconify-icon icon="mdi:logout"></iconify-icon>
                    Logout
                </button>
            </form>

        </div>
    </div>

@else

    <a href="{{ route('customer.login') }}">
        Sign In
    </a>

    <span>/</span>

    <a href="{{ route('customer.register') }}">
        Sign Up
    </a>

@endauth

</div>

<!-- ==========================
     User login
========================== -->

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

                <form action="{{ route('shop') }}" method="GET" class="position-relative">

                    <div class="search-box">

                        <iconify-icon
                            icon="teenyicons:search-outline">
                        </iconify-icon>

                        <input
                            id="searchInput"
                            value="{{ request()->search }}"
                            name="search"
                            type="search"
                            placeholder="Search for products..."
                            autocomplete="off"
                            >

                        <button type="submit">
                            Search
                        </button>

                    </div>
                    <div class="searchResult">
                        <ul>
                            <li><a href=""><img src="{{ getImage(null) }}" width="50px" alt=""> Corn</a></li>
                        </ul>
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

                <a href="#" class="action-item cart" id="cartOpenBtn">

                    <span class="cart-icon">

                        <iconify-icon
                            icon="clarity:shopping-bag-line">
                        </iconify-icon>

                        <span class="badge">{{ $cartQty ?? 0 }}</span>

                    </span>

                    <div class="cart-info">
                        <small>Shopping Cart</small>
                        <strong>{{ 0 }}</strong>
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
                <a href="{{ route('homepage') }}" class="{{ request()->routeIs('homepage') ? 'active' : '' }}">Home</a>
            </li>

            <li>
                <a href="{{ route('shop') }}" class="{{ request()->routeIs('shop') ? 'active' : '' }}">Shop</a>
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
                 <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
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

<!-- ==========================
     Cart Sidebar
========================== -->

<div class="cart-overlay" id="cartOverlay"></div>

<div class="cart-sidebar" id="cartSidebar">

    <div class="cart-sidebar-header">
        <div>
            <h3>Shopping Cart</h3>
            <span>2 Items</span>
        </div>

        <button type="button" class="cart-close" id="cartCloseBtn">
            <iconify-icon icon="mdi:close"></iconify-icon>
        </button>
    </div>

    <div class="cart-sidebar-body">

        <!-- Cart Item -->
        <div class="cart-sidebar-item">

            <div class="cart-item-image">
                <img src="{{ asset('frontend/img/Apple.png') }}" alt="Green Apple">
            </div>

            <div class="cart-item-content">

                <h4>Green Apple</h4>

                <span class="cart-item-price">$15.00</span>

                <div class="cart-item-bottom">

                        <div class="cart-quantity">
                            <button type="button" class="quantity-minus">−</button>
                            <span class="quantity-value">1</span>
                            <button type="button" class="quantity-plus">+</button>
                        </div>

                    <button type="button" class="cart-remove">
                        <iconify-icon icon="mdi:trash-can-outline"></iconify-icon>
                    </button>

                </div>

            </div>

        </div>


        <!-- Cart Item -->
        <div class="cart-sidebar-item">

            <div class="cart-item-image">
                <img src="{{ asset('frontend/img/Malta.png') }}" alt="Indian Malta">
            </div>

            <div class="cart-item-content">

                <h4>Indian Malta</h4>

                <span class="cart-item-price">$15.00</span>

                <div class="cart-item-bottom">

                    <div class="cart-quantity">
                        <button type="button" class="quantity-minus">−</button>
                        <span class="quantity-value">1</span>
                        <button type="button" class="quantity-plus">+</button>
                    </div>

                    <button type="button" class="cart-remove">
                        <iconify-icon icon="mdi:trash-can-outline"></iconify-icon>
                    </button>

                </div>

            </div>

        </div>

    </div>


    <div class="cart-sidebar-footer">

        <div class="cart-subtotal">
            <span>Subtotal</span>
            <strong>$30.00</strong>
        </div>

        <a href="{{ route('checkout') }}" class="cart-checkout-btn">
            Proceed to Checkout
        </a>

        <button type="button" class="continue-shopping" id="continueShoppingBtn">
            Continue Shopping
        </button>

    </div>

</div>

    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>
    {{-- Main Content end --}}

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
    
    <script>
        $('#searchInput').focus(function(){
            $('.searchResult').fadeIn()
        })

        $('#searchInput').keyup(function(){
            let value = $(this).val();

            if(value.length <= 2){
                return false;
            }

            setTimeout(()=>{
                // Live Searching AJAX
                $.ajax({
                    url:`{{ route('shop.product.live') }}`,
                    method: `GET`,
                    data: {
                        userInput:  value
                    },
                    success: function(res){
                        let {products} = res
                        let htmlSearchResult = [];
                        let productImg = `{{ getImage('PLACEHOLDER_IMAGE') }}`
                        let url = `{{ route('shop.product', "PLACEHOLDER_URL") }}`
                        products.forEach(product => {
                            let isProductImg = product.image && product.image.length > 0 ? true : false;

                            let htmlProductLi=  `<li><a href="${url.replace('PLACEHOLDER_URL', product.slug)}"><img src="${isProductImg ? productImg.replace('PLACEHOLDER_IMAGE', product.image) : productImg.replace('storage/PLACEHOLDER_IMAGE', `images/placeholder.webp`)}" width="50px" alt=""> ${product.title}</a></li>`
                            htmlSearchResult.push(htmlProductLi)
                        });

                        $('.searchResult ul').html(htmlSearchResult)

                    },
                    error: function(err){
                        console.log(err)
                    },
                })



                return;
            }, 250)


        })

        // Cart 

        $(document).ready(function () {

    $('#cartOpenBtn').on('click', function (e) {
        e.preventDefault();

        $('#cartSidebar').addClass('active');
        $('#cartOverlay').addClass('active');

        $('body').css('overflow', 'hidden');
    });


    $('#cartCloseBtn, #cartOverlay, #continueShoppingBtn').on('click', function () {

        $('#cartSidebar').removeClass('active');
        $('#cartOverlay').removeClass('active');

        $('body').css('overflow', '');
    });

});

//cart quantity count 

$(document).on('click', '.quantity-plus', function () {

    let quantityElement = $(this)
        .siblings('.quantity-value');

    let quantity = parseInt(quantityElement.text());

    quantityElement.text(quantity + 1);

});


$(document).on('click', '.quantity-minus', function () {

    let quantityElement = $(this)
        .siblings('.quantity-value');

    let quantity = parseInt(quantityElement.text());

    if (quantity > 1) {
        quantityElement.text(quantity - 1);
    }

});
        
    </script>
    <script src="{{ asset('frontend/js/app.js') }}"></script>
</body>

</html>