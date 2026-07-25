@extends('layouts.frontendLayout')
@section('title', 'Contact Us')

@section('content')

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

@endsection