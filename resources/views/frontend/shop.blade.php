@extends('layouts.frontendLayout')
@section('title', 'Shop')

@section('content')

<!-- Shop Hero Banner -->


<!-- Mobile Filter Bar -->
<section id="shopMobileFilter" class="d-lg-none">
    <div class="container">
        <div class="mblFilterRow">
            <button class="mblFilterBtn" type="button" data-bs-toggle="offcanvas" data-bs-target="#filterOffcanvas">
                <iconify-icon icon="mdi:tune-variant" width="20" height="20"></iconify-icon>
                Filters
            </button>
            <div class="mblSortBtn">
                <select class="form-select" onchange="window.location.href='{{ route('shop') }}?sort='+this.value">
                    <option value="">Sort by: Latest</option>
                    <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                    <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Mobile Filter Offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="filterOffcanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Filter Products</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="{{ route('shop') }}" method="GET">
                <div class="filterGroup">
                    <h6 class="filterGroupTitle">Category</h6>
                    <div class="filterCheckList">
                        @foreach($categories as $category)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="category" value="{{ $category->id }}" id="mblCat{{ $category->id }}" {{ request('category') == $category->id ? 'checked' : '' }}>
                            <label class="form-check-label" for="mblCat{{ $category->id }}">{{ $category->name }}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="filterGroup">
                    <h6 class="filterGroupTitle">Price Range</h6>
                    <div class="priceRangeInputs">
                        <input type="number" class="form-control" name="min_price" placeholder="Min" value="{{ request('min_price') }}" min="0">
                        <span class="priceSep">-</span>
                        <input type="number" class="form-control" name="max_price" placeholder="Max" value="{{ request('max_price') }}" min="0">
                    </div>
                </div>

                <div class="filterGroup">
                    <h6 class="filterGroupTitle">Sort By</h6>
                    <div class="filterCheckList">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort" value="" id="mblSortLatest" {{ request('sort', '') == '' ? 'checked' : '' }}>
                            <label class="form-check-label" for="mblSortLatest">Latest</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort" value="price_low" id="mblSortLow" {{ request('sort') == 'price_low' ? 'checked' : '' }}>
                            <label class="form-check-label" for="mblSortLow">Price: Low to High</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sort" value="price_high" id="mblSortHigh" {{ request('sort') == 'price_high' ? 'checked' : '' }}>
                            <label class="form-check-label" for="mblSortHigh">Price: High to Low</label>
                        </div>
                    </div>
                </div>

                <div class="filterActions">
                    <button type="submit" class="filterApplyBtn">Apply Filters</button>
                    <a href="{{ route('shop') }}" class="filterClearBtn">Clear All</a>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Desktop Sidebar + Products -->
<section id="shopProducts">
    <div class="container">
        <div class="row">

            <!-- Desktop Sidebar -->
            <div class="col-lg-3 d-none d-lg-block">
                <div class="shopSidebar">

                    <!-- Search -->
                    <div class="sidebarWidget">
                        <h5 class="widgetTitle">Search</h5>
                        <form action="{{ route('shop') }}" method="GET" class="sidebarSearch">
                            <input type="text" name="search" class="form-control" placeholder="Search products..." value="{{ request('search') }}">
                            <button type="submit">
                                <iconify-icon icon="ic:round-search" width="20" height="20"></iconify-icon>
                            </button>
                        </form>
                    </div>

                    <!-- Category Filter -->
                    <div class="sidebarWidget">
                        <h5 class="widgetTitle">Categories</h5>
                        <ul class="sidebarCategoryList">
                            <li>
                                <a href="{{ route('shop') }}" class="{{ !request('category') ? 'active' : '' }}">
                                    All Products
                                </a>
                            </li>
                            @foreach($categories as $category)
                            <li>
                                <a href="{{ route('shop', ['category' => $category->slug]) }}" class="{{ request('category') == $category->slug ? 'active' : '' }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Price Filter -->
                    <div class="sidebarWidget">
                        <h5 class="widgetTitle">Price Range</h5>
                        <form action="{{ route('shop') }}" method="GET" class="sidebarPriceFilter">
                            @if(request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif
                            @if(request('sort'))
                            <input type="hidden" name="sort" value="{{ request('sort') }}">
                            @endif
                            <div class="priceRangeInputs">
                                <input type="number" name="min_price" class="form-control" placeholder="Min" value="{{ request('min_price') }}" min="0">
                                <span class="priceSep">-</span>
                                <input type="number" name="max_price" class="form-control" placeholder="Max" value="{{ request('max_price') }}" min="0">
                            </div>
                            <button type="submit" class="priceFilterBtn">Apply</button>
                        </form>
                    </div>

                    <!-- Promo Banner -->
                    <div class="sidebarPromo">
                        <div class="promoIcon">
                            <iconify-icon icon="mdi:truck-delivery-outline" width="40" height="40"></iconify-icon>
                        </div>
                        <h6>Free Delivery</h6>
                        <p>On orders over {{ formatPrice(500) }}</p>
                    </div>

                </div>
            </div>

            <!-- Products Grid -->
            <div class="col-lg-9">
                <!-- Sort Bar (Desktop) -->
                <div class="shopSortBar d-none d-lg-flex">
                    <div class="sortLeft">
                        <p>Showing <b>{{ $products->total() }}</b> results</p>
                    </div>
                    <div class="sortRight">
                        <label>Sort by:</label>
                        <select class="form-select" onchange="window.location.href='{{ route('shop', request()->except('sort', 'page')) }}&sort='+this.value">
                            <option value="" {{ request('sort', '') == '' ? 'selected' : '' }}>Latest</option>
                            <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                            <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>Oldest First</option>
                        </select>
                    </div>
                </div>

                <!-- Active Filters -->
                @if(request()->hasAny(['category', 'search', 'min_price', 'max_price']))
                <div class="activeFilters">
                    <span class="activeFilterLabel">Active Filters:</span>
                    @if(request('category'))
                        @php $cat = $categories->where('id', request('category'))->first(); @endphp
                        @if($cat)
                        <span class="filterTag">
                            {{ $cat->name }}
                            <a href="{{ route('shop', request()->except('category', 'page')) }}">
                                <iconify-icon icon="hugeicons:cancel-01" width="14" height="14"></iconify-icon>
                            </a>
                        </span>
                        @endif
                    @endif
                    @if(request('search'))
                        <span class="filterTag">
                            "{{ request('search') }}"
                            <a href="{{ route('shop', request()->except('search', 'page')) }}">
                                <iconify-icon icon="hugeicons:cancel-01" width="14" height="14"></iconify-icon>
                            </a>
                        </span>
                    @endif
                    @if(request('min_price') || request('max_price'))
                        <span class="filterTag">
                            {{ formatPrice(request('min_price', 0)) }} - {{ formatPrice(request('max_price', '∞')) }}
                            <a href="{{ route('shop', request()->except('min_price', 'max_price', 'page')) }}">
                                <iconify-icon icon="hugeicons:cancel-01" width="14" height="14"></iconify-icon>
                            </a>
                        </span>
                    @endif
                    <a href="{{ route('shop') }}" class="clearAllFilters">Clear All</a>
                </div>
                @endif

                <!-- Product Grid -->
                <div class="row shopProductGrid">
                    @forelse($products as $product)
                    <div class="col-6 col-md-4">
                        <div class="shopProductCard">
                            <div class="shopProductImg">
                                @if($product->price > $product->selling_price)
                                <div class="shopDiscountBadge">
                                    -{{ round((($product->price - $product->selling_price) / $product->price) * 100) }}%
                                </div>
                                @endif

                                <a href="{{ route('shop.product', $product->slug) }}">
                                    <img src="{{ getImage($product->image) }}" alt="{{ $product->title }}" class="img-fluid">
                                </a>

                                <div class="shopProductHover">
                                    <a href="#" class="shopHoverIcon" title="Add to Wishlist">
                                        <iconify-icon icon="solar:heart-linear" width="20" height="20"></iconify-icon>
                                    </a>
                                    <a href="{{ route('shop.product', $product->slug) }}" class="shopProductTitle" {{ $product->title }} class="shopHoverIcon" title="Quick View">
                                        <iconify-icon icon="solar:eye-outline" width="20" height="20"></iconify-icon>
                                    </a>
                                </div>
                            </div>

                            <div class="shopProductInfo">
                                <a href="#" class="shopProductTitle">{{ $product->title }}</a>
                                <div class="shopProductPrice">
                                    <span class="shopCurrentPrice">{{ formatPrice($product->selling_price) }}</span>
                                    @if($product->price > $product->selling_price)
                                    <del class="shopOldPrice">{{ formatPrice($product->price) }}</del>
                                    @endif
                                </div>
                                <div class="shopProductRating">
                                    <iconify-icon icon="ic:round-star"></iconify-icon>
                                    <iconify-icon icon="ic:round-star"></iconify-icon>
                                    <iconify-icon icon="ic:round-star"></iconify-icon>
                                    <iconify-icon icon="ic:round-star"></iconify-icon>
                                    <iconify-icon class="mutedStar" icon="ic:round-star"></iconify-icon>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <div class="shopEmptyState">
                            <iconify-icon icon="mdi:package-variant" width="64" height="64"></iconify-icon>
                            <h4>No Products Found</h4>
                            <p>Try adjusting your filters or search terms.</p>
                            <a href="{{ route('shop') }}" class="shopBtnPrimary">Clear Filters</a>
                        </div>
                    </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if($products->hasPages())
                <div class="shopPagination">
                    {{ $products->withQueryString()->links() }}
                </div>
                @endif

            </div>

        </div>
    </div>
</section>

@endsection
