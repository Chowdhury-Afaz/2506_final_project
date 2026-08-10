@extends('layouts.frontendLayout')

@section('content')

<section class="customer-dashboard">

    <div class="customer-dashboard__container">

        <div class="customer-dashboard__layout">

        @include('frontend.customer_dashboard.partials.sidebar')


            {{-- =========================================
                MY ORDERS CONTENT
            ========================================== --}}

            <div class="customer-dashboard__content">


                {{-- Page Header --}}
                <div class="customer-dashboard__header">

                    <div class="customer-dashboard__heading">

                        <span class="customer-dashboard__eyebrow">
                            Order History
                        </span>

                        <h1>My Orders</h1>

                        <p>
                            View and manage all your orders in one place.
                        </p>

                    </div>

                </div>


                {{-- =====================================
                    ORDER FILTERS
                ====================================== --}}

                <div class="customer-order-filters">

                    <button class="customer-order-filter active">
                        All Orders
                        <span>24</span>
                    </button>

                    <button class="customer-order-filter">
                        Processing
                        <span>02</span>
                    </button>

                    <button class="customer-order-filter">
                        Shipped
                        <span>01</span>
                    </button>

                    <button class="customer-order-filter">
                        Delivered
                        <span>18</span>
                    </button>

                    <button class="customer-order-filter">
                        Cancelled
                        <span>03</span>
                    </button>

                </div>


                {{-- =====================================
                    ORDERS CARD
                ====================================== --}}

                <div class="customer-all-orders">

                    {{-- Orders Header --}}
                    <div class="customer-all-orders__header">

                        <div>

                            <span class="customer-orders__eyebrow">
                                Your Orders
                            </span>

                            <h2>Order History</h2>

                            <p>
                                Track your orders and check their current status.
                            </p>

                        </div>


                        {{-- Search --}}
                        <div class="customer-orders__search">

                            <iconify-icon icon="solar:magnifer-linear"></iconify-icon>

                            <input
                                type="text"
                                placeholder="Search order..."
                            >

                        </div>

                    </div>


                    {{-- Orders Table --}}
                    <div class="customer-orders__table-wrapper">

                        <table class="customer-orders__table">

                            <thead>

                                <tr>

                                    <th>Order</th>

                                    <th>Date</th>

                                    <th>Items</th>

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
                                        3 Items
                                    </td>

                                    <td>

                                        <span class="customer-order-status customer-order-status--processing">
                                            Processing
                                        </span>

                                    </td>

                                    <td>
                                        <strong>৳2,450</strong>
                                    </td>

                                    <td>

                                        <a href="#"
                                           class="customer-order-view">

                                            View Order

                                            <iconify-icon
                                                icon="solar:arrow-right-up-linear">
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
                                        2 Items
                                    </td>

                                    <td>

                                        <span class="customer-order-status customer-order-status--delivered">
                                            Delivered
                                        </span>

                                    </td>

                                    <td>
                                        <strong>৳1,200</strong>
                                    </td>

                                    <td>

                                        <a href="#"
                                           class="customer-order-view">

                                            View Order

                                            <iconify-icon
                                                icon="solar:arrow-right-up-linear">
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
                                        5 Items
                                    </td>

                                    <td>

                                        <span class="customer-order-status customer-order-status--shipped">
                                            Shipped
                                        </span>

                                    </td>

                                    <td>
                                        <strong>৳3,850</strong>
                                    </td>

                                    <td>

                                        <a href="#"
                                           class="customer-order-view">

                                            View Order

                                            <iconify-icon
                                                icon="solar:arrow-right-up-linear">
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
                                        4 Items
                                    </td>

                                    <td>

                                        <span class="customer-order-status customer-order-status--delivered">
                                            Delivered
                                        </span>

                                    </td>

                                    <td>
                                        <strong>৳2,100</strong>
                                    </td>

                                    <td>

                                        <a href="#"
                                           class="customer-order-view">

                                            View Order

                                            <iconify-icon
                                                icon="solar:arrow-right-up-linear">
                                            </iconify-icon>

                                        </a>

                                    </td>

                                </tr>


                                {{-- Order 5 --}}
                                <tr>

                                    <td>
                                        <span class="customer-order-id">
                                            #EZ10241
                                        </span>
                                    </td>

                                    <td>
                                        Jul 29, 2026
                                    </td>

                                    <td>
                                        2 Items
                                    </td>

                                    <td>

                                        <span class="customer-order-status customer-order-status--cancelled">
                                            Cancelled
                                        </span>

                                    </td>

                                    <td>
                                        <strong>৳980</strong>
                                    </td>

                                    <td>

                                        <a href="#"
                                           class="customer-order-view">

                                            View Order

                                            <iconify-icon
                                                icon="solar:arrow-right-up-linear">
                                            </iconify-icon>

                                        </a>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>


                    {{-- Pagination --}}
                    <div class="customer-orders__pagination">

                        <button class="customer-pagination__button disabled">
                            <iconify-icon icon="solar:alt-arrow-left-linear"></iconify-icon>
                        </button>

                        <button class="customer-pagination__button active">
                            1
                        </button>

                        <button class="customer-pagination__button">
                            2
                        </button>

                        <button class="customer-pagination__button">
                            3
                        </button>

                        <span>...</span>

                        <button class="customer-pagination__button">
                            8
                        </button>

                        <button class="customer-pagination__button">
                            <iconify-icon icon="solar:alt-arrow-right-linear"></iconify-icon>
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection