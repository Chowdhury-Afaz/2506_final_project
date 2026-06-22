<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecobazar Shop</title>
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
                                <a href="#">Shop</a>
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
        <a href="./index.html" class="active">Home</a>
        <a href="#">Shop</a>
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
                    <li><a href="#"><iconify-icon icon="clarity:shopping-bag-line"></iconify-icon></a></li>
                    <li><a href="./index.html"><iconify-icon icon="cil:home"></iconify-icon></a></li>
                    <li><a href="#"><iconify-icon icon="teenyicons:discount-outline"></iconify-icon></a></li>
                    <li><a href="./signin.html"><iconify-icon icon="gg:profile"></iconify-icon></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<main>
<section id="shopBanner" class="d-none d-lg-flex">
    <div class="container">
        <div class="row align-item-center">
            <ul class="d-flex">
                <li><a href="./index.html"><iconify-icon icon="material-symbols:home-outline"width="24" height="24"></iconify-icon> > </a></li>
                <li><a href="#"> Catagory > </a></li>
                <li><a href="#"> Vagetable</a></li>
            </ul>
            <div class="shopBannertxt">
            <a href="#"><img src="./img/Discount Bannar.png" class="img-fluid" alt="">
            <p>Best Deals</p>
            <h2>Sale of the Month</h2>
            <div class="cot_sale_timer" id="cot_sale_timer">
                            
            </div>
            <button>Shop Now <iconify-icon icon="si:arrow-right-duotone"></iconify-icon> </button>
            <div class="circle">
                <h5>56%</h5>
                <span>off</span>
            </div>
            </div>
            </a>
        </div>
    </div>
</section>
<section id="filter" class="d-none d-lg-flex">
    <div class="container">
        <div class="row align-item-center">
            <div class="leftFilter col-lg-6 d-flex">
                <div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Select Category
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Vagetables</a></li>
    <li><a class="dropdown-item" href="#">Fruits</a></li>
    <li><a class="dropdown-item" href="#">Meat</a></li>
  </ul>
</div>
<div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Select Price
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">0$ - 10$</a></li>
    <li><a class="dropdown-item" href="#">10$ - 20$</a></li>
    <li><a class="dropdown-item" href="#">20$ - 30$</a></li>
    <li><a class="dropdown-item" href="#">30$ - 40$</a></li>
    <li><a class="dropdown-item" href="#">40$ - 50$</a></li>
    <li><a class="dropdown-item" href="#">50$ - 60$</a></li>
    <li><a class="dropdown-item" href="#">60$ - 70$</a></li>
    <li><a class="dropdown-item" href="#">70$ - 80$</a></li>
    <li><a class="dropdown-item" href="#">80$ - 90$</a></li>
    <li><a class="dropdown-item" href="#">90$ - 100$</a></li>
  </ul>
</div>
<div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Select Rating
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">
        <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
    </a></li>
    <li><a class="dropdown-item" href="#">
        <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
    </a></li>
    <li><a class="dropdown-item" href="#">
        <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
    </a></li>
    <li><a class="dropdown-item" href="#">
        <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
    </a></li>
    <li><a class="dropdown-item" href="#">
                        <div class="stars">
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                        </div>
    </a></li>
  </ul>
</div>
            </div>
            <div class="rightFilter col-lg-6 d-flex">
                <div class="dropdown ms-auto">
  <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Sort by: Latest
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Vagetables</a></li>
    <li><a class="dropdown-item" href="#">Fruits</a></li>
    <li><a class="dropdown-item" href="#">Meat</a></li>
  </ul>
</div>
<div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Show: 16
  </a>

  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Vagetables</a></li>
    <li><a class="dropdown-item" href="#">Fruits</a></li>
    <li><a class="dropdown-item" href="#">Meat</a></li>
  </ul>
</div>
            </div>
        </div>
    </div>
</section>
<section id="activeFilter" class="d-none d-lg-flex">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-start">
            <p> Active Filters: <b>Wing Chair</b> <iconify-icon icon="hugeicons:cancel-01"></iconify-icon> <b>Min $300 - Max 500</b> <iconify-icon icon="hugeicons:cancel-01"></iconify-icon> </p>
            </div>
            <div class="col-lg-6 text-end">
                <p><b>2,547</b> Results found.</p>
            </div>
        </div>
    </div>
</section>
<section id="activeFilterMbl" class="d-lg-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="mblFilterHeader">
                    <button class="filterBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#filterOffcanvas" aria-controls="filterOffcanvas">
                        <iconify-icon icon="mdi:filter-variant"></iconify-icon>
                        Filter
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Filter Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="filterOffcanvas" aria-labelledby="filterOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="filterOffcanvasLabel">Filter Products</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="filterSection">
                <h6 class="filterTitle">Category</h6>
                <div class="filterOptions">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="vegetables" id="categoryVegetables">
                        <label class="form-check-label" for="categoryVegetables">Vegetables</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="fruits" id="categoryFruits">
                        <label class="form-check-label" for="categoryFruits">Fruits</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="meat" id="categoryMeat">
                        <label class="form-check-label" for="categoryMeat">Meat</label>
                    </div>
                </div>
            </div>

            <div class="filterSection">
                <h6 class="filterTitle">Price Range</h6>
                <div class="priceRange">
                    <div class="priceInputs">
                        <input type="number" class="form-control" id="minPrice" placeholder="Min" min="0">
                        <span class="priceSeparator">-</span>
                        <input type="number" class="form-control" id="maxPrice" placeholder="Max" min="0">
                    </div>
                    <div class="priceSlider">
                        <input type="range" class="form-range" id="priceRange" min="0" max="100" value="50">
                    </div>
                </div>
            </div>

            <div class="filterSection">
                <h6 class="filterTitle">Rating</h6>
                <div class="ratingOptions">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="5" id="rating5">
                        <label class="form-check-label" for="rating5">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="4" id="rating4">
                        <label class="form-check-label" for="rating4">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3" id="rating3">
                        <label class="form-check-label" for="rating3">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" id="rating2">
                        <label class="form-check-label" for="rating2">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="rating1">
                        <label class="form-check-label" for="rating1">
                            <div class="stars">
                                <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                            </div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="filterActions">
                <button class="btn btn-primary applyFilters">Apply Filters</button>
                <button class="btn btn-outline-secondary clearFilters">Clear All</button>
            </div>
        </div>
    </div>
</section>
<section id="shopAreaOne">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
<section id="shopAreaTwo">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
<section id="shopAreaThree">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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
            <div class="col-6 col-lg-3">
                <div class="featureCard">
                        <div class="featureImg">
                            <a href="./iteminfo.html"><img class="img-fluid" src="./img/AppleBig.png" alt=""></a>
                            <ul class="featureIcons">
                            <li><a href="#"><iconify-icon icon="simple-line-icons:heart"></iconify-icon></a></li>
                            <li><a href="#" class="quickViewBtn" data-bs-toggle="modal" data-bs-target="#quickViewModal" data-img="./img/AppleBig.png" data-title="Green Apple" data-price="$14.99" data-sku="FRT-001" data-category="Fruits"><iconify-icon icon="bx:show"></iconify-icon></a></li>
                            </ul>
                        </div>
                        <div class="featureCnt">
                            <a href="./iteminfo.html">Green Apple</a>
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

    <!-- Quick View Modal -->
    <div class="modal fade" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quickViewModalLabel">Quick View</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="quickViewImg">
                                <img id="quickViewImage" src="./img/AppleBig.png" alt="Product Image" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="quickViewDetails">
                                <h3 id="quickViewTitle">Green Apple</h3>
                                <div class="quickViewRating">
                                    <div class="stars">
                                        <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                        <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                        <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                        <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                        <iconify-icon icon="material-symbols-light:star"></iconify-icon>
                                    </div>
                                    <span class="reviewCount">(5 Reviews)</span>
                                </div>
                                <div class="quickViewPrice">
                                    <span class="currentPrice" id="quickViewPrice">$14.99</span>
                                    <span class="oldPrice">$19.99</span>
                                </div>
                                <div class="quickViewDescription">
                                    <p>Fresh and organic green apples directly from the farm. Perfect for healthy snacking and cooking. Rich in fiber and vitamins.</p>
                                </div>
                                <div class="quickViewQuantity">
                                    <label>Quantity:</label>
                                    <div class="quantitySelector">
                                        <button class="qtyBtn minus">-</button>
                                        <input type="number" value="1" min="1" max="10" class="qtyInput">
                                        <button class="qtyBtn plus">+</button>
                                    </div>
                                </div>
                                <div class="quickViewActions">
                                    <button class="btn btn-primary addToCartBtn">
                                        <iconify-icon icon="clarity:shopping-bag-line"></iconify-icon>
                                        Add to Cart
                                    </button>
                                    <button class="btn btn-outline-secondary wishlistBtn">
                                        <iconify-icon icon="simple-line-icons:heart"></iconify-icon>
                                    </button>
                                </div>
                                <div class="quickViewMeta">
                                    <p><strong>SKU:</strong> <span id="quickViewSku">FRT-001</span></p>
                                    <p><strong>Category:</strong> <span id="quickViewCategory">Fruits</span></p>
                                    <p><strong>Tags:</strong> Organic, Fresh, Healthy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.iconify.design/iconify-icon/3.0.0/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./jQuery.countdown-master/jQuery.countdown-master/dist/jquery.countdown.min.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>
