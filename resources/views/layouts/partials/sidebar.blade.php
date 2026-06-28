<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a href="{{ route('admin.dashboard') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <!-- Product Management -->
    <li class="menu-item {{ request()->routeIs('admin.products.*') || request()->routeIs('admin.categories.*') ? 'open active' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-food-menu"></i>
            <div data-i18n="Product Management">Product Management</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                <a href="{{ route('admin.categories.index') }}" class="menu-link">
                    <div data-i18n="Category">Category</div>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                <a href="{{ route('admin.products.index') }}" class="menu-link">
                    <div data-i18n="Product">Product</div>
                </a>
            </li>
        </ul>
    </li>

    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pages</span>
    </li>
    <!-- Layouts -->
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Layouts</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item">
                <a href="layouts-without-menu.html" class="menu-link">
                    <div data-i18n="Without menu">Without menu</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="layouts-without-navbar.html" class="menu-link">
                    <div data-i18n="Without navbar">Without navbar</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="layouts-container.html" class="menu-link">
                    <div data-i18n="Container">Container</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="layouts-fluid.html" class="menu-link">
                    <div data-i18n="Fluid">Fluid</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="layouts-blank.html" class="menu-link">
                    <div data-i18n="Blank">Blank</div>
                </a>
            </li>
        </ul>
    </li>
</ul>