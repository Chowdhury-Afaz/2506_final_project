@extends('layouts.backend')

@section('main')

<div class="admin-order-view-page">

        <a href="{{ route('admin.orders') }}" class="admin-order-back-btn">
            <i class="bx bx-arrow-back"></i>
            <span>Back to Orders</span>
        </a>

    <!-- =========================================
         Page Header
    ========================================== -->

<div class="admin-order-view-header">

    <!-- Left Section -->
    <div class="admin-order-view-header-left">

        <div class="admin-order-view-title-area">

            <div class="admin-order-view-title-row">

                <div class="admin-order-id-wrap">
                    <h2 class="admin-order-view-title">
                        #ORD-1001
                    </h2>
                </div>

                <span class="admin-order-status admin-order-status-processing">
                    <span class="admin-order-status-dot"></span>
                    Processing
                </span>

            </div>

            <div class="admin-order-view-meta">

                <span>
                    <i class="bx bx-calendar"></i>
                    Aug 17, 2026
                </span>

                <span class="admin-order-meta-divider"></span>

                <span>
                    <i class="bx bx-time-five"></i>
                    10:42 AM
                </span>

            </div>

        </div>

    </div>


    <!-- Right Actions -->
    <div class="admin-order-view-header-actions">

        <button
            type="button"
            class="admin-order-view-print-btn"
        >
            <i class="bx bx-printer"></i>
            <span>Print Order</span>
        </button>

        <button
            type="button"
            class="admin-order-view-delete-btn"
            id="viewDeleteOrder"
            aria-label="Delete order"
        >
            <i class="bx bx-trash"></i>
        </button>

    </div>

</div>


    <!-- =========================================
         Order Status Progress
    ========================================== -->

    <div class="admin-order-progress-card">

        <div class="admin-order-progress-header">

            <div>
                <h3>Order Status</h3>

                <p>
                    Track the current order progress
                </p>
            </div>

            <span class="admin-order-progress-current">
                Processing
            </span>

        </div>


        <div class="admin-order-progress">

            <!-- Pending -->

            <div class="admin-order-progress-step completed">

                <div class="admin-order-progress-icon">
                    <i class="bx bx-check"></i>
                </div>

                <div class="admin-order-progress-text">

                    <strong>Order Placed</strong>

                    <span>
                        Aug 17, 10:42 AM
                    </span>

                </div>

            </div>


            <!-- Processing -->

            <div class="admin-order-progress-step active">

                <div class="admin-order-progress-icon">
                    <i class="bx bx-loader-circle"></i>
                </div>

                <div class="admin-order-progress-text">

                    <strong>Processing</strong>

                    <span>
                        Aug 17, 11:20 AM
                    </span>

                </div>

            </div>


            <!-- Shipped -->

            <div class="admin-order-progress-step">

                <div class="admin-order-progress-icon">
                    <i class="bx bx-package"></i>
                </div>

                <div class="admin-order-progress-text">

                    <strong>Shipped</strong>

                    <span>
                        Waiting
                    </span>

                </div>

            </div>


            <!-- Completed -->

            <div class="admin-order-progress-step">

                <div class="admin-order-progress-icon">
                    <i class="bx bx-check-circle"></i>
                </div>

                <div class="admin-order-progress-text">

                    <strong>Completed</strong>

                    <span>
                        Waiting
                    </span>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================================
         Main Content
    ========================================== -->

    <div class="admin-order-view-grid">


        <!-- =====================================
             Left Column
        ====================================== -->

        <div class="admin-order-view-main">


            <!-- =================================
                 Ordered Products
            ================================== -->

            <div class="admin-order-view-card">

                <div class="admin-order-view-card-header">

                    <div>

                        <h3>
                            Ordered Products
                        </h3>

                        <p>
                            3 items in this order
                        </p>

                    </div>

                </div>


                <div class="admin-order-products-table-wrapper">

                    <table class="admin-order-products-table">

                        <thead>

                            <tr>

                                <th>
                                    Product
                                </th>

                                <th>
                                    Price
                                </th>

                                <th>
                                    Quantity
                                </th>

                                <th>
                                    Total
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            <!-- Product 1 -->

                            <tr>

                                <td>

                                    <div class="admin-order-product">

                                        <div class="admin-order-product-image">

                                            <img
                                                src="{{ asset('frontend/img/product-01.png') }}"
                                                alt="Product"
                                            >

                                        </div>

                                        <div class="admin-order-product-info">

                                            <strong>
                                                Fresh Red Apple
                                            </strong>

                                            <span>
                                                SKU: APP-001
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    $12.00
                                </td>


                                <td>
                                    2
                                </td>


                                <td>
                                    <strong>
                                        $24.00
                                    </strong>
                                </td>

                            </tr>


                            <!-- Product 2 -->

                            <tr>

                                <td>

                                    <div class="admin-order-product">

                                        <div class="admin-order-product-image">

                                            <img
                                                src="{{ asset('frontend/img/product-02.png') }}"
                                                alt="Product"
                                            >

                                        </div>

                                        <div class="admin-order-product-info">

                                            <strong>
                                                Organic Banana
                                            </strong>

                                            <span>
                                                SKU: BAN-002
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    $8.00
                                </td>


                                <td>
                                    1
                                </td>


                                <td>
                                    <strong>
                                        $8.00
                                    </strong>
                                </td>

                            </tr>


                            <!-- Product 3 -->

                            <tr>

                                <td>

                                    <div class="admin-order-product">

                                        <div class="admin-order-product-image">

                                            <img
                                                src="{{ asset('frontend/img/product-03.png') }}"
                                                alt="Product"
                                            >

                                        </div>

                                        <div class="admin-order-product-info">

                                            <strong>
                                                Fresh Orange
                                            </strong>

                                            <span>
                                                SKU: ORG-003
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>
                                    $13.00
                                </td>


                                <td>
                                    1
                                </td>


                                <td>
                                    <strong>
                                        $13.00
                                    </strong>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <!-- =================================
                 Order Notes
            ================================== -->

            <div class="admin-order-view-card">

                <div class="admin-order-view-card-header">

                    <div>

                        <h3>
                            Order Notes
                        </h3>

                        <p>
                            Additional information from customer
                        </p>

                    </div>

                </div>


                <div class="admin-order-note">

                    <i class="bx bx-note"></i>

                    <p>
                        Please deliver the order after 5 PM.
                        Customer requested careful packaging.
                    </p>

                </div>

            </div>


            <!-- =================================
                 Order Timeline
            ================================== -->

            <div class="admin-order-view-card">

                <div class="admin-order-view-card-header">

                    <div>

                        <h3>
                            Order Timeline
                        </h3>

                        <p>
                            Recent activity on this order
                        </p>

                    </div>

                </div>


                <div class="admin-order-timeline">

                    <div class="admin-order-timeline-item">

                        <div class="admin-order-timeline-icon completed">
                            <i class="bx bx-check"></i>
                        </div>

                        <div class="admin-order-timeline-content">

                            <strong>
                                Order placed
                            </strong>

                            <span>
                                Customer placed the order
                            </span>

                            <small>
                                Aug 17, 2026 · 10:42 AM
                            </small>

                        </div>

                    </div>


                    <div class="admin-order-timeline-item">

                        <div class="admin-order-timeline-icon active">
                            <i class="bx bx-loader-circle"></i>
                        </div>

                        <div class="admin-order-timeline-content">

                            <strong>
                                Order is being processed
                            </strong>

                            <span>
                                Admin started processing the order
                            </span>

                            <small>
                                Aug 17, 2026 · 11:20 AM
                            </small>

                        </div>

                    </div>


                    <div class="admin-order-timeline-item">

                        <div class="admin-order-timeline-icon">
                            <i class="bx bx-package"></i>
                        </div>

                        <div class="admin-order-timeline-content">

                            <strong>
                                Order shipped
                            </strong>

                            <span>
                                Waiting for shipment
                            </span>

                        </div>

                    </div>

                </div>

            </div>


        </div>


        <!-- =====================================
             Right Column
        ====================================== -->

        <div class="admin-order-view-sidebar">


            <!-- =================================
                 Customer Information
            ================================== -->

            <div class="admin-order-view-card">

                <div class="admin-order-view-card-header">

                    <h3>
                        Customer
                    </h3>

                </div>


                <div class="admin-order-customer-profile">

                    <div class="admin-order-customer-large-avatar">
                        JD
                    </div>

                    <div>

                        <strong>
                            John Doe
                        </strong>

                        <span>
                            john@example.com
                        </span>

                    </div>

                </div>


                <div class="admin-order-info-list">

                    <div>

                        <i class="bx bx-phone"></i>

                        <span>
                            +880 1712-345678
                        </span>

                    </div>


                    <div>

                        <i class="bx bx-envelope"></i>

                        <span>
                            john@example.com
                        </span>

                    </div>

                </div>

            </div>


            <!-- =================================
                 Shipping Information
            ================================== -->

            <div class="admin-order-view-card">

                <div class="admin-order-view-card-header">

                    <h3>
                        Shipping Information
                    </h3>

                </div>


                <div class="admin-order-shipping-info">

                    <div class="admin-order-shipping-item">

                        <i class="bx bx-map"></i>

                        <div>

                            <span>
                                Shipping Address
                            </span>

                            <strong>
                                25 Agrabad Commercial Area,
                                Chattogram, Bangladesh
                            </strong>

                        </div>

                    </div>


                    <div class="admin-order-shipping-item">

                        <i class="bx bx-truck"></i>

                        <div>

                            <span>
                                Delivery Method
                            </span>

                            <strong>
                                Standard Delivery
                            </strong>

                        </div>

                    </div>


                    <div class="admin-order-shipping-item">

                        <i class="bx bx-calendar"></i>

                        <div>

                            <span>
                                Estimated Delivery
                            </span>

                            <strong>
                                Aug 19, 2026
                            </strong>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================
                 Payment Information
            ================================== -->

            <div class="admin-order-view-card">

                <div class="admin-order-view-card-header">

                    <h3>
                        Payment Information
                    </h3>

                </div>


                <div class="admin-order-payment-info">

                    <div class="admin-order-payment-status-row">

                        <span>
                            Payment Status
                        </span>

                        <strong class="admin-order-payment-paid">
                            Paid
                        </strong>

                    </div>


                    <div class="admin-order-payment-method">

                        <i class="bx bx-credit-card"></i>

                        <div>

                            <strong>
                                bKash
                            </strong>

                            <span>
                                Transaction ID:
                                BKX784512369
                            </span>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================
                 Order Summary
            ================================== -->

            <div class="admin-order-view-card">

                <div class="admin-order-view-card-header">

                    <h3>
                        Order Summary
                    </h3>

                </div>


                <div class="admin-order-summary">

                    <div>

                        <span>
                            Subtotal
                        </span>

                        <strong>
                            $45.00
                        </strong>

                    </div>


                    <div>

                        <span>
                            Shipping
                        </span>

                        <strong>
                            $5.00
                        </strong>

                    </div>


                    <div>

                        <span>
                            Discount
                        </span>

                        <strong class="admin-order-discount">
                            -$5.00
                        </strong>

                    </div>


                    <div class="admin-order-summary-total">

                        <span>
                            Total
                        </span>

                        <strong>
                            $45.00
                        </strong>

                    </div>

                </div>

            </div>


            <!-- =================================
                 Update Status
            ================================== -->

            <div class="admin-order-view-card">

                <div class="admin-order-view-card-header">

                    <div>

                        <h3>
                            Update Order
                        </h3>

                        <p>
                            Change the current order status
                        </p>

                    </div>

                </div>


                <select
                    class="admin-order-status-select"
                    id="orderStatus"
                >

                    <option value="pending">
                        Pending
                    </option>

                    <option
                        value="processing"
                        selected
                    >
                        Processing
                    </option>

                    <option value="shipped">
                        Shipped
                    </option>

                    <option value="completed">
                        Completed
                    </option>

                    <option value="cancelled">
                        Cancelled
                    </option>

                </select>


                <button
                    type="button"
                    class="admin-order-update-status-btn"
                    id="updateOrderStatus"
                >
                    <i class="bx bx-refresh"></i>
                    Update Status
                </button>

            </div>


        </div>

    </div>

</div>


<!-- =========================================
     Delete Confirmation Modal
========================================= -->

<div
    class="admin-order-delete-modal"
    id="viewDeleteModal"
    aria-hidden="true"
>

    <div class="admin-order-delete-modal-overlay"></div>


    <div
        class="admin-order-delete-modal-content"
        role="dialog"
        aria-modal="true"
    >

        <button
            type="button"
            class="admin-order-delete-modal-close"
            id="closeViewDeleteModal"
        >
            <i class="bx bx-x"></i>
        </button>


        <div class="admin-order-delete-modal-icon">
            <i class="bx bx-trash"></i>
        </div>


        <h3>
            Delete Order?
        </h3>


        <p>
            Are you sure you want to delete
            <strong>#ORD-1001</strong>?
            This action cannot be undone.
        </p>


        <div class="admin-order-delete-modal-actions">

            <button
                type="button"
                class="admin-order-delete-cancel"
                id="cancelViewDelete"
            >
                Cancel
            </button>


            <button
                type="button"
                class="admin-order-delete-confirm"
                id="confirmViewDelete"
            >
                <i class="bx bx-trash"></i>
                Delete Order
            </button>

        </div>

    </div>

</div>


@endsection