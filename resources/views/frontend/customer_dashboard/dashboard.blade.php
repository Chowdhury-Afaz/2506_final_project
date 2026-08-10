@extends('layouts.frontendLayout')

@section('content')

<section class="customer-dashboard">

    <div class="customer-dashboard__container">

        <div class="customer-dashboard__layout">


            @include('frontend.customer_dashboard.partials.sidebar')



            {{-- =========================================
            CUSTOMER DASHBOARD CONTENT
            ========================================== --}}

            <div class="customer-dashboard__content">


                {{-- =====================================
                DASHBOARD HEADER
                ====================================== --}}

                <div class="customer-dashboard__header">

                    <div class="customer-dashboard__heading">

                        <span class="customer-dashboard__eyebrow">
                            My Account
                        </span>

                        <h1>Dashboard</h1>

                        <p>
                            Welcome back! Manage your account, orders and more.
                        </p>

                    </div>

                </div>



                {{-- =====================================
                DASHBOARD STATISTICS
                ====================================== --}}

                <div class="customer-dashboard__stats">


                    {{-- Total Orders --}}
                    <div class="customer-stat-card">

                        <div class="customer-stat-card__icon">

                            <iconify-icon icon="solar:bag-4-linear">
                            </iconify-icon>

                        </div>

                        <div class="customer-stat-card__content">

                            <span>Total Orders</span>

                            <h3>24</h3>

                        </div>

                    </div>


                    {{-- Pending Orders --}}
                    <div class="customer-stat-card">

                        <div class="customer-stat-card__icon">

                            <iconify-icon icon="solar:clock-circle-linear">
                            </iconify-icon>

                        </div>

                        <div class="customer-stat-card__content">

                            <span>Pending Orders</span>

                            <h3>02</h3>

                        </div>

                    </div>


                    {{-- Delivered Orders --}}
                    <div class="customer-stat-card">

                        <div class="customer-stat-card__icon">

                            <iconify-icon icon="solar:check-circle-linear">
                            </iconify-icon>

                        </div>

                        <div class="customer-stat-card__content">

                            <span>Delivered</span>

                            <h3>18</h3>

                        </div>

                    </div>


                    {{-- Total Spent --}}
                    <div class="customer-stat-card">

                        <div class="customer-stat-card__icon">

                            <iconify-icon icon="solar:wallet-money-linear">
                            </iconify-icon>

                        </div>

                        <div class="customer-stat-card__content">

                            <span>Total Spent</span>

                            <h3>৳45,850</h3>

                        </div>

                    </div>

                </div>



                {{-- =====================================
                RECENT ORDERS
                ====================================== --}}

                <div class="customer-orders">


                    {{-- Orders Header --}}
                    <div class="customer-orders__header">

                        <div>

                            <span class="customer-orders__eyebrow">
                                Order History
                            </span>

                            <h2>Recent Orders</h2>

                            <p>
                                Track your latest orders and their current status.
                            </p>

                        </div>


                        <a href="#" class="customer-orders__view-all">

                            View All

                            <iconify-icon icon="solar:arrow-right-linear">
                            </iconify-icon>

                        </a>

                    </div>



                    {{-- Orders Table --}}
                    <div class="customer-orders__table-wrapper">

                        <table class="customer-orders__table">

                            <thead>

                                <tr>

                                    <th>Order</th>

                                    <th>Date</th>

                                    <th>Status</th>

                                    <th>Total</th>

                                    <th>Action</th>

                                </tr>

                            </thead>


                            <tbody>


                                {{-- Order 1 --}}
                                <tr>

                                    <td>

                                        <span class="customer-order-id">
                                            #EZ10245
                                        </span>

                                    </td>

                                    <td>
                                        Aug 10, 2026
                                    </td>

                                    <td>

                                        <span class="customer-order-status customer-order-status--processing">
                                            Processing
                                        </span>

                                    </td>

                                    <td>

                                        <strong>
                                            ৳2,450
                                        </strong>

                                    </td>

                                    <td>

                                        <a href="#" class="customer-order-view">

                                            View

                                            <iconify-icon icon="solar:arrow-right-up-linear">
                                            </iconify-icon>

                                        </a>

                                    </td>

                                </tr>



                                {{-- Order 2 --}}
                                <tr>

                                    <td>

                                        <span class="customer-order-id">
                                            #EZ10244
                                        </span>

                                    </td>

                                    <td>
                                        Aug 08, 2026
                                    </td>

                                    <td>

                                        <span class="customer-order-status customer-order-status--delivered">
                                            Delivered
                                        </span>

                                    </td>

                                    <td>

                                        <strong>
                                            ৳1,200
                                        </strong>

                                    </td>

                                    <td>

                                        <a href="#" class="customer-order-view">

                                            View

                                            <iconify-icon icon="solar:arrow-right-up-linear">
                                            </iconify-icon>

                                        </a>

                                    </td>

                                </tr>



                                {{-- Order 3 --}}
                                <tr>

                                    <td>

                                        <span class="customer-order-id">
                                            #EZ10243
                                        </span>

                                    </td>

                                    <td>
                                        Aug 05, 2026
                                    </td>

                                    <td>

                                        <span class="customer-order-status customer-order-status--shipped">
                                            Shipped
                                        </span>

                                    </td>

                                    <td>

                                        <strong>
                                            ৳3,850
                                        </strong>

                                    </td>

                                    <td>

                                        <a href="#" class="customer-order-view">

                                            View

                                            <iconify-icon icon="solar:arrow-right-up-linear">
                                            </iconify-icon>

                                        </a>

                                    </td>

                                </tr>



                                {{-- Order 4 --}}
                                <tr>

                                    <td>

                                        <span class="customer-order-id">
                                            #EZ10242
                                        </span>

                                    </td>

                                    <td>
                                        Aug 02, 2026
                                    </td>

                                    <td>

                                        <span class="customer-order-status customer-order-status--delivered">
                                            Delivered
                                        </span>

                                    </td>

                                    <td>

                                        <strong>
                                            ৳2,100
                                        </strong>

                                    </td>

                                    <td>

                                        <a href="#" class="customer-order-view">

                                            View

                                            <iconify-icon icon="solar:arrow-right-up-linear">
                                            </iconify-icon>

                                        </a>

                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </div>

                </div>



                {{-- =====================================
                QUICK ACTIONS + ACCOUNT OVERVIEW
                ====================================== --}}

                <div class="customer-dashboard__bottom">


                    {{-- =================================
                    QUICK ACTIONS
                    ================================== --}}

                    <div class="customer-quick-actions">


                        <div class="customer-section-heading">

                            <div>

                                <span class="customer-section-heading__eyebrow">
                                    Shortcuts
                                </span>

                                <h2>Quick Actions</h2>

                                <p>
                                    Quickly access the things you use most.
                                </p>

                            </div>

                        </div>



                        <div class="customer-quick-actions__grid">


                            {{-- My Orders --}}
                            <a href="#" class="customer-action-card">

                                <span class="customer-action-card__icon">

                                    <iconify-icon icon="solar:bag-4-linear">
                                    </iconify-icon>

                                </span>

                                <span class="customer-action-card__content">

                                    <strong>My Orders</strong>

                                    <small>
                                        Track your orders
                                    </small>

                                </span>

                                <iconify-icon class="customer-action-card__arrow" icon="solar:arrow-right-linear">
                                </iconify-icon>

                            </a>



                            {{-- Wishlist --}}
                            <a href="#" class="customer-action-card">

                                <span class="customer-action-card__icon">

                                    <iconify-icon icon="solar:heart-linear">
                                    </iconify-icon>

                                </span>

                                <span class="customer-action-card__content">

                                    <strong>Wishlist</strong>

                                    <small>
                                        View saved products
                                    </small>

                                </span>

                                <iconify-icon class="customer-action-card__arrow" icon="solar:arrow-right-linear">
                                </iconify-icon>

                            </a>



                            {{-- Addresses --}}
                            <a href="#" class="customer-action-card">

                                <span class="customer-action-card__icon">

                                    <iconify-icon icon="solar:map-point-linear">
                                    </iconify-icon>

                                </span>

                                <span class="customer-action-card__content">

                                    <strong>My Addresses</strong>

                                    <small>
                                        Manage your addresses
                                    </small>

                                </span>

                                <iconify-icon class="customer-action-card__arrow" icon="solar:arrow-right-linear">
                                </iconify-icon>

                            </a>



                            {{-- Profile --}}
                            <a href="#" class="customer-action-card">

                                <span class="customer-action-card__icon">

                                    <iconify-icon icon="solar:user-linear">
                                    </iconify-icon>

                                </span>

                                <span class="customer-action-card__content">

                                    <strong>My Profile</strong>

                                    <small>
                                        Update your information
                                    </small>

                                </span>

                                <iconify-icon class="customer-action-card__arrow" icon="solar:arrow-right-linear">
                                </iconify-icon>

                            </a>


                        </div>



                        {{-- Continue Shopping --}}
                        <a href="{{ route('shop') }}" class="customer-browse-products">

                            <span>

                                <iconify-icon icon="solar:shop-linear">
                                </iconify-icon>

                                Continue Shopping

                            </span>

                            <iconify-icon icon="solar:arrow-right-linear">
                            </iconify-icon>

                        </a>

                    </div>



                    {{-- =================================
                    ACCOUNT OVERVIEW
                    ================================== --}}

                    <div class="customer-account-overview">


                        <div class="customer-section-heading">

                            <div>

                                <span class="customer-section-heading__eyebrow">
                                    Account
                                </span>

                                <h2>Account Overview</h2>

                                <p>
                                    Your account information at a glance.
                                </p>

                            </div>

                        </div>



                        <div class="customer-account-card">


                            {{-- Profile --}}
                            <div class="customer-account-card__profile">

                                <div class="customer-account-card__avatar">

                                    @if (auth('customer')->user()->image)
                                    <img src="{{ auth('customer')->user()->image }}" alt="{{ auth('customer')->user()->name }}" />
                                    @else
                                    <iconify-icon icon="solar:user-bold">
                                    </iconify-icon>
                                    @endif


                                </div>


                                <div>

                                    <h3>
                                        {{ auth('customer')->user()->name }}
                                    </h3>

                                    <p>
                                        {{ auth('customer')->user()->email }}
                                    </p>

                                </div>

                            </div>



                            {{-- Account Details --}}
                            <div class="customer-account-card__details">


                                {{-- Member Since --}}
                                <div class="customer-account-detail">

                                    <span class="customer-account-detail__icon">

                                        <iconify-icon icon="solar:calendar-linear">
                                        </iconify-icon>

                                    </span>


                                    <div>

                                        <span>
                                            Member Since
                                        </span>

                                        <strong>
                                            {{ auth('customer')->user()->created_at->format('M, Y') }}
                                        </strong>

                                    </div>

                                </div>



                                {{-- Address --}}
                                <div class="customer-account-detail">

                                    <span class="customer-account-detail__icon">

                                        <iconify-icon icon="solar:map-point-linear">
                                        </iconify-icon>

                                    </span>


                                    <div>

                                        <span>
                                            Default Address
                                        </span>

                                        <strong>
                                            {{ auth('customer')->user()->addr ?? 'Not set yet!' }}
                                        </strong>

                                    </div>

                                </div>


                            </div>



                            {{-- Edit Profile --}}
                            <a href="#" class="customer-account-card__button">

                                <span>
                                    Edit Profile
                                </span>

                                <iconify-icon icon="solar:arrow-right-linear">
                                </iconify-icon>

                            </a>


                        </div>

                    </div>


                </div>


            </div>{{-- customer-dashboard__content End --}}


        </div>{{-- customer-dashboard__layout End --}}


    </div>{{-- customer-dashboard__container End --}}

</section>

@endsection