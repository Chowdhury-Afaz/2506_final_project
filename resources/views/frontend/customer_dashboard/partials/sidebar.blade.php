<aside class="customer-sidebar">

    {{-- User Info --}}
    <div class="customer-sidebar__user">

        <div class="customer-sidebar__avatar">
            @if (auth('customer')->user()->image)
            <img src="{{ auth('customer')->user()->image }}" alt="{{ auth('customer')->user()->name }}" />
            @else
            <iconify-icon icon="solar:user-bold">
            </iconify-icon>
            @endif
        </div>

        <div class="customer-sidebar__user-info">
            <h3>
                {{ auth('customer')->user()->name }}
            </h3>

            <p>
                {{ auth('customer')->user()->email }}
            </p>
        </div>

    </div>


    {{-- Navigation --}}
    <nav class="customer-sidebar__nav">

        {{-- Dashboard --}}
        <a href="{{ route('user.dashboard') }}"
            class="customer-sidebar__link {{ request()->routeIs('user.dashboard') ? 'active' : '' }}">

            <iconify-icon icon="solar:widget-2-linear"></iconify-icon>

            <span>Dashboard</span>

        </a>


        {{-- My Orders --}}
        <a href="{{ route('user.orders') }}"
            class="customer-sidebar__link {{ request()->routeIs('user.orders') ? 'active' : '' }}">

            <iconify-icon icon="solar:bag-4-linear"></iconify-icon>

            <span>My Orders</span>

        </a>


        {{-- Wishlist --}}
        <a href="#" class="customer-sidebar__link">

            <iconify-icon icon="solar:heart-linear"></iconify-icon>

            <span>Wishlist</span>

        </a>


        {{-- Addresses --}}
        <a href="#" class="customer-sidebar__link">

            <iconify-icon icon="solar:map-point-linear"></iconify-icon>

            <span>Addresses</span>

        </a>


        {{-- Reviews --}}
        <a href="#" class="customer-sidebar__link">

            <iconify-icon icon="solar:star-linear"></iconify-icon>

            <span>Reviews</span>

        </a>


        {{-- Profile --}}
        <a href="#" class="customer-sidebar__link">

            <iconify-icon icon="solar:user-linear"></iconify-icon>

            <span>Profile</span>

        </a>


        {{-- Divider --}}
        <div class="customer-sidebar__divider"></div>


        {{-- Settings --}}
        <a href="#" class="customer-sidebar__link">

            <iconify-icon icon="solar:settings-linear"></iconify-icon>

            <span>Settings</span>

        </a>

    </nav>


    {{-- Logout --}}
    <div class="customer-sidebar__logout">
        <form action="{{ route('customer.signout') }}" method="POST"
            class="customer-sidebar__link customer-sidebar__logout-link">
            @csrf
            <button class="btn">
                <iconify-icon icon="solar:logout-2-linear"></iconify-icon>
                <span>Logout</span>
            </button>
        </form>
    </div>

</aside>