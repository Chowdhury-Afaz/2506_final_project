@extends('layouts.backend')

@section('main')

<div class="admin-order-page">

    <!-- Page Header -->
<div class="admin-order-page-header">

    <div class="admin-order-header-main">

        <div class="admin-order-header-accent">
            <span></span>
        </div>

        <div class="admin-order-header-text">

            <div class="admin-order-header-title-row">
                <h2 class="admin-order-page-title">
                    Order Management
                </h2>

                <span class="admin-order-live-badge">
                    <span class="admin-order-live-dot"></span>
                    Active
                </span>
            </div>

            <p class="admin-order-page-subtitle">
                Manage, monitor and track customer orders from one place.
            </p>

        </div>

    </div>


</div>


    <!-- Order Statistics -->
    <div class="admin-order-stats">

        <div class="admin-order-stat-card">

            <div class="admin-order-stat-icon admin-order-stat-icon-all">
                <i class="bx bx-shopping-bag"></i>
            </div>

            <div class="admin-order-stat-content">
                <span>Total Orders</span>
                <strong>24</strong>
            </div>

        </div>


        <div class="admin-order-stat-card">

            <div class="admin-order-stat-icon admin-order-stat-icon-pending">
                <i class="bx bx-time-five"></i>
            </div>

            <div class="admin-order-stat-content">
                <span>Pending</span>
                <strong>08</strong>
            </div>

        </div>


        <div class="admin-order-stat-card">

            <div class="admin-order-stat-icon admin-order-stat-icon-processing">
                <i class="bx bx-loader-circle"></i>
            </div>

            <div class="admin-order-stat-content">
                <span>Processing</span>
                <strong>05</strong>
            </div>

        </div>


        <div class="admin-order-stat-card">

            <div class="admin-order-stat-icon admin-order-stat-icon-completed">
                <i class="bx bx-check-circle"></i>
            </div>

            <div class="admin-order-stat-content">
                <span>Completed</span>
                <strong>11</strong>
            </div>

        </div>

    </div>


    <!-- Order Table Card -->
<!-- Order Table Card -->
<div class="admin-order-table-card">

    <!-- Table Header -->
    <div class="admin-order-table-header">

        <div>
            <h3>Recent Orders</h3>

            <p>
                View and manage customer orders
            </p>
        </div>

        <div class="admin-order-table-actions">

            <!-- Search -->
            <div class="admin-order-search-box">

                <i class="bx bx-search"></i>

                <input
                    type="text"
                    id="orderSearch"
                    placeholder="Search order..."
                >

            </div>

            <!-- Status Filter -->
            <select
                class="admin-order-filter-select"
                id="orderStatusFilter"
            >
                <option value="">All Status</option>
                <option value="pending">Pending</option>
                <option value="processing">Processing</option>
                <option value="shipped">Shipped</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>

            <!-- Payment Filter -->
            <select
                class="admin-order-filter-select"
                id="orderPaymentFilter"
            >
                <option value="">All Payment</option>
                <option value="paid">Paid</option>
                <option value="pending">Pending</option>
                <option value="failed">Failed</option>
                <option value="refunded">Refunded</option>
            </select>

            <!-- Date Filter -->
            <select
                class="admin-order-filter-select"
                id="orderDateFilter"
            >
                <option value="">All Dates</option>
                <option value="today">Today</option>
                <option value="yesterday">Yesterday</option>
                <option value="last_7_days">Last 7 Days</option>
                <option value="this_month">This Month</option>
            </select>

        </div>

    </div>


    <!-- Bulk Action Bar -->
    <div
        class="admin-order-bulk-bar"
        id="orderBulkBar"
        style="display: none;"
    >

        <div class="admin-order-bulk-info">
            <i class="bx bx-check-square"></i>

            <span>
                <strong id="selectedOrderCount">0</strong>
                orders selected
            </span>
        </div>

        <button
            type="button"
            class="admin-order-bulk-delete-btn"
            id="bulkDeleteOrders"
        >
            <i class="bx bx-trash"></i>
            Delete Selected
        </button>

    </div>


    <!-- Table -->
    <div class="admin-order-table-wrapper">

        <table class="admin-order-table">

            <thead>

                <tr>

                    <!-- Select All -->
                    <th class="admin-order-checkbox-column">
                        <input
                            type="checkbox"
                            id="selectAllOrders"
                        >
                    </th>

                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>

            </thead>


            <tbody id="orderTableBody">

                <!-- Order 1 -->
                <tr>

                    <td class="admin-order-checkbox-column">

                        <input
                            type="checkbox"
                            class="order-checkbox"
                            value="1001"
                        >

                    </td>


                    <td>
                        <span class="admin-order-id">
                            #ORD-1001
                        </span>
                    </td>


                    <td>

                        <div class="admin-order-customer">

                            <div class="admin-order-customer-avatar">
                                JD
                            </div>

                            <div>
                                <strong>John Doe</strong>
                                <span>john@example.com</span>
                            </div>

                        </div>

                    </td>


                    <td>
                        <span class="admin-order-date">
                            Aug 17, 2026
                        </span>
                    </td>


                    <td>
                        <strong class="admin-order-total">
                            $45.00
                        </strong>
                    </td>


                    <td>

                        <span class="admin-order-payment-paid">
                            Paid
                        </span>

                    </td>


                    <td>

                        <span
                            class="admin-order-status admin-order-status-processing"
                        >
                            Processing
                        </span>

                    </td>


                    <td>

                        <div class="admin-order-actions">

                            <!-- View -->
<a 
    href="{{ route('admin.orders.show') }}" 
    class="admin-order-view-btn" 
    title="View Order"
>
    <i class="bx bx-show"></i>
    View
</a>


                            <!-- Delete -->
                            <button
                                type="button"
                                class="admin-order-delete-btn"
                                data-order-id="1001"
                                data-order-number="#ORD-1001"
                                title="Delete Order"
                            >
                                <i class="bx bx-trash"></i>
                            </button>

                        </div>

                    </td>

                </tr>


                <!-- Order 2 -->
                <tr>

                    <td class="admin-order-checkbox-column">

                        <input
                            type="checkbox"
                            class="order-checkbox"
                            value="1002"
                        >

                    </td>


                    <td>
                        <span class="admin-order-id">
                            #ORD-1002
                        </span>
                    </td>


                    <td>

                        <div class="admin-order-customer">

                            <div class="admin-order-customer-avatar">
                                JS
                            </div>

                            <div>
                                <strong>Jane Smith</strong>
                                <span>jane@example.com</span>
                            </div>

                        </div>

                    </td>


                    <td>
                        <span class="admin-order-date">
                            Aug 16, 2026
                        </span>
                    </td>


                    <td>
                        <strong class="admin-order-total">
                            $82.00
                        </strong>
                    </td>


                    <td>

                        <span class="admin-order-payment-paid">
                            Paid
                        </span>

                    </td>


                    <td>

                        <span
                            class="admin-order-status admin-order-status-completed"
                        >
                            Completed
                        </span>

                    </td>


                    <td>

                        <div class="admin-order-actions">

                            <a
                                href="{{ route('admin.orders.show') }}"
                                class="admin-order-view-btn"
                                title="View Order"
                            >
                                <i class="bx bx-show"></i>
                                View
                            </a>


                            <button
                                type="button"
                                class="admin-order-delete-btn"
                                data-order-id="1002"
                                data-order-number="#ORD-1002"
                                title="Delete Order"
                            >
                                <i class="bx bx-trash"></i>
                            </button>

                        </div>

                    </td>

                </tr>


                <!-- Order 3 -->
                <tr>

                    <td class="admin-order-checkbox-column">

                        <input
                            type="checkbox"
                            class="order-checkbox"
                            value="1003"
                        >

                    </td>


                    <td>
                        <span class="admin-order-id">
                            #ORD-1003
                        </span>
                    </td>


                    <td>

                        <div class="admin-order-customer">

                            <div class="admin-order-customer-avatar">
                                AW
                            </div>

                            <div>
                                <strong>Alex Wilson</strong>
                                <span>alex@example.com</span>
                            </div>

                        </div>

                    </td>


                    <td>
                        <span class="admin-order-date">
                            Aug 15, 2026
                        </span>
                    </td>


                    <td>
                        <strong class="admin-order-total">
                            $32.00
                        </strong>
                    </td>


                    <td>

                        <span class="admin-order-payment-pending">
                            Pending
                        </span>

                    </td>


                    <td>

                        <span
                            class="admin-order-status admin-order-status-pending"
                        >
                            Pending
                        </span>

                    </td>


                    <td>

                        <div class="admin-order-actions">

                            <a
                                href="{{ route('admin.orders.show') }}"
                                class="admin-order-view-btn"
                                title="View Order"
                            >
                                <i class="bx bx-show"></i>
                                View
                            </a>


                            <button
                                type="button"
                                class="admin-order-delete-btn"
                                data-order-id="1003"
                                data-order-number="#ORD-1003"
                                title="Delete Order"
                            >
                                <i class="bx bx-trash"></i>
                            </button>

                        </div>

                    </td>

                </tr>


                <!-- Order 4 -->
                <tr>

                    <td class="admin-order-checkbox-column">

                        <input
                            type="checkbox"
                            class="order-checkbox"
                            value="1004"
                        >

                    </td>


                    <td>
                        <span class="admin-order-id">
                            #ORD-1004
                        </span>
                    </td>


                    <td>

                        <div class="admin-order-customer">

                            <div class="admin-order-customer-avatar">
                                MB
                            </div>

                            <div>
                                <strong>Michael Brown</strong>
                                <span>michael@example.com</span>
                            </div>

                        </div>

                    </td>


                    <td>
                        <span class="admin-order-date">
                            Aug 14, 2026
                        </span>
                    </td>


                    <td>
                        <strong class="admin-order-total">
                            $120.00
                        </strong>
                    </td>


                    <td>

                        <span class="admin-order-payment-paid">
                            Paid
                        </span>

                    </td>


                    <td>

                        <span
                            class="admin-order-status admin-order-status-shipped"
                        >
                            Shipped
                        </span>

                    </td>


                    <td>

                        <div class="admin-order-actions">

                            <a
                                href="{{ route('admin.orders.show') }}"
                                class="admin-order-view-btn"
                                title="View Order"
                            >
                                <i class="bx bx-show"></i>
                                View
                            </a>


                            <button
                                type="button"
                                class="admin-order-delete-btn"
                                data-order-id="1004"
                                data-order-number="#ORD-1004"
                                title="Delete Order"
                            >
                                <i class="bx bx-trash"></i>
                            </button>

                        </div>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>


    <!-- Pagination -->
    <div class="admin-order-pagination">

        <span class="admin-order-pagination-info">
            Showing 1 to 4 of 24 orders
        </span>

        <div class="admin-order-pagination-buttons">

            <button type="button" disabled>
                <i class="bx bx-chevron-left"></i>
            </button>

            <button type="button" class="active">
                1
            </button>

            <button type="button">
                2
            </button>

            <button type="button">
                3
            </button>

            <button type="button">
                <i class="bx bx-chevron-right"></i>
            </button>

        </div>

    </div>

</div>


<!-- =========================================
     Delete Order Confirmation Modal
========================================= -->

<div
    class="admin-order-delete-modal"
    id="deleteOrderModal"
    aria-hidden="true"
>

    <div class="admin-order-delete-modal-overlay"></div>


    <div
        class="admin-order-delete-modal-content"
        role="dialog"
        aria-modal="true"
        aria-labelledby="deleteOrderModalTitle"
    >

        <button
            type="button"
            class="admin-order-delete-modal-close"
            id="closeDeleteOrderModal"
            aria-label="Close"
        >
            <i class="bx bx-x"></i>
        </button>


        <div class="admin-order-delete-modal-icon">

            <i class="bx bx-trash"></i>

        </div>


        <h3 id="deleteOrderModalTitle">
            Delete Order?
        </h3>


        <p>
            Are you sure you want to delete
            <strong id="deleteOrderNumber">#ORD-1001</strong>?
            This action cannot be undone.
        </p>


        <div class="admin-order-delete-modal-actions">

            <button
                type="button"
                class="admin-order-delete-cancel"
                id="cancelDeleteOrder"
            >
                Cancel
            </button>


            <button
                type="button"
                class="admin-order-delete-confirm"
                id="confirmDeleteOrder"
            >
                <i class="bx bx-trash"></i>
                Delete Order
            </button>

        </div>

    </div>

</div>


</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    /* =========================================
       Elements
    ========================================= */

    const searchInput = document.getElementById('orderSearch');
    const statusFilter = document.getElementById('orderStatusFilter');
    const paymentFilter = document.getElementById('orderPaymentFilter');
    const dateFilter = document.getElementById('orderDateFilter');

    const selectAllOrders = document.getElementById('selectAllOrders');
    const orderCheckboxes = document.querySelectorAll('.order-checkbox');

    const bulkBar = document.getElementById('orderBulkBar');
    const selectedOrderCount = document.getElementById('selectedOrderCount');
    const bulkDeleteOrders = document.getElementById('bulkDeleteOrders');

    const deleteModal = document.getElementById('deleteOrderModal');
    const closeDeleteModal = document.getElementById('closeDeleteOrderModal');
    const cancelDeleteOrder = document.getElementById('cancelDeleteOrder');
    const confirmDeleteOrder = document.getElementById('confirmDeleteOrder');
    const deleteOrderNumber = document.getElementById('deleteOrderNumber');

    const modalOverlay = document.querySelector(
        '.admin-order-delete-modal-overlay'
    );

    let deleteTargetRow = null;
    let deleteTargetIds = [];


    /* =========================================
       Search + Filters
    ========================================= */

    function filterOrders() {

        const searchValue = searchInput
            ? searchInput.value.toLowerCase().trim()
            : '';

        const statusValue = statusFilter
            ? statusFilter.value.toLowerCase()
            : '';

        const paymentValue = paymentFilter
            ? paymentFilter.value.toLowerCase()
            : '';

        const dateValue = dateFilter
            ? dateFilter.value
            : '';

        const rows = document.querySelectorAll(
            '#orderTableBody tr'
        );

        const today = new Date();

        rows.forEach(function (row) {

            const rowText = row.innerText.toLowerCase();

            const statusElement = row.querySelector(
                '.admin-order-status'
            );

            const paymentElement = row.querySelector(
                '[class*="admin-order-payment"]'
            );

            const dateElement = row.querySelector(
                '.admin-order-date'
            );

            const statusText = statusElement
                ? statusElement.innerText.toLowerCase().trim()
                : '';

            const paymentText = paymentElement
                ? paymentElement.innerText.toLowerCase().trim()
                : '';

            const dateText = dateElement
                ? dateElement.innerText.trim()
                : '';


            /* Search */

            const matchesSearch =
                searchValue === '' ||
                rowText.includes(searchValue);


            /* Status */

            const matchesStatus =
                statusValue === '' ||
                statusText === statusValue;


            /* Payment */

            const matchesPayment =
                paymentValue === '' ||
                paymentText === paymentValue;


            /* Date */

            const matchesDate =
                dateValue === '' ||
                checkDateFilter(dateText, dateValue, today);


            row.style.display =
                matchesSearch &&
                matchesStatus &&
                matchesPayment &&
                matchesDate
                    ? ''
                    : 'none';

        });

        updateSelectAllState();
    }


    /* =========================================
       Date Filter
    ========================================= */

    function checkDateFilter(dateText, filter, today) {

        const orderDate = new Date(dateText);

        if (isNaN(orderDate.getTime())) {
            return false;
        }

        /* Remove time */

        orderDate.setHours(0, 0, 0, 0);

        const currentDate = new Date(today);
        currentDate.setHours(0, 0, 0, 0);


        /* Today */

        if (filter === 'today') {

            return (
                orderDate.getTime() ===
                currentDate.getTime()
            );

        }


        /* Yesterday */

        if (filter === 'yesterday') {

            const yesterday = new Date(currentDate);

            yesterday.setDate(
                yesterday.getDate() - 1
            );

            return (
                orderDate.getTime() ===
                yesterday.getTime()
            );

        }


        /* Last 7 Days */

        if (filter === 'last_7_days') {

            const last7Days = new Date(currentDate);

            last7Days.setDate(
                last7Days.getDate() - 6
            );

            return (
                orderDate >= last7Days &&
                orderDate <= currentDate
            );

        }


        /* This Month */

        if (filter === 'this_month') {

            return (
                orderDate.getMonth() ===
                    currentDate.getMonth() &&

                orderDate.getFullYear() ===
                    currentDate.getFullYear()
            );

        }


        return true;
    }


    /* =========================================
       Search Events
    ========================================= */

    if (searchInput) {

        searchInput.addEventListener(
            'input',
            filterOrders
        );

    }


    if (statusFilter) {

        statusFilter.addEventListener(
            'change',
            filterOrders
        );

    }


    if (paymentFilter) {

        paymentFilter.addEventListener(
            'change',
            filterOrders
        );

    }


    if (dateFilter) {

        dateFilter.addEventListener(
            'change',
            filterOrders
        );

    }


    /* =========================================
       Select All Orders
    ========================================= */

    if (selectAllOrders) {

        selectAllOrders.addEventListener(
            'change',
            function () {

                const visibleCheckboxes =
                    document.querySelectorAll(
                        '#orderTableBody tr:not([style*="display: none"]) .order-checkbox'
                    );

                visibleCheckboxes.forEach(
                    function (checkbox) {

                        checkbox.checked =
                            selectAllOrders.checked;

                    }
                );

                updateBulkBar();

            }
        );

    }


    /* =========================================
       Individual Checkbox
    ========================================= */

    document.addEventListener(
        'change',
        function (event) {

            if (
                event.target.classList.contains(
                    'order-checkbox'
                )
            ) {

                updateBulkBar();
                updateSelectAllState();

            }

        }
    );


    /* =========================================
       Update Bulk Bar
    ========================================= */

    function updateBulkBar() {

        const selectedCheckboxes =
            document.querySelectorAll(
                '.order-checkbox:checked'
            );

        const count =
            selectedCheckboxes.length;


        if (selectedOrderCount) {

            selectedOrderCount.textContent =
                count;

        }


        if (bulkBar) {

            bulkBar.style.display =
                count > 0
                    ? 'flex'
                    : 'none';

        }

    }


    /* =========================================
       Update Select All State
    ========================================= */

    function updateSelectAllState() {

        if (!selectAllOrders) {
            return;
        }

        const visibleCheckboxes =
            document.querySelectorAll(
                '#orderTableBody tr:not([style*="display: none"]) .order-checkbox'
            );

        const checkedVisibleCheckboxes =
            document.querySelectorAll(
                '#orderTableBody tr:not([style*="display: none"]) .order-checkbox:checked'
            );


        if (visibleCheckboxes.length === 0) {

            selectAllOrders.checked = false;
            selectAllOrders.indeterminate = false;

            return;
        }


        selectAllOrders.checked =
            visibleCheckboxes.length ===
            checkedVisibleCheckboxes.length;


        selectAllOrders.indeterminate =
            checkedVisibleCheckboxes.length > 0 &&
            checkedVisibleCheckboxes.length <
            visibleCheckboxes.length;

    }


    /* =========================================
       Single Delete Button
    ========================================= */

    document.addEventListener(
        'click',
        function (event) {

            const deleteButton =
                event.target.closest(
                    '.admin-order-delete-btn'
                );


            if (!deleteButton) {
                return;
            }


            const orderNumber =
                deleteButton.dataset.orderNumber;


            deleteTargetRow =
                deleteButton.closest('tr');


            deleteTargetIds = [
                deleteButton.dataset.orderId
            ];


            openDeleteModal(orderNumber);

        }
    );


    /* =========================================
       Bulk Delete
    ========================================= */

    if (bulkDeleteOrders) {

        bulkDeleteOrders.addEventListener(
            'click',
            function () {

                const selectedCheckboxes =
                    document.querySelectorAll(
                        '.order-checkbox:checked'
                    );


                if (selectedCheckboxes.length === 0) {
                    return;
                }


                deleteTargetRow = null;


                deleteTargetIds = [];


                selectedCheckboxes.forEach(
                    function (checkbox) {

                        deleteTargetIds.push(
                            checkbox.value
                        );

                    }
                );


                deleteOrderNumber.textContent =
                    selectedCheckboxes.length +
                    ' selected orders';


                openDeleteModal();

            }
        );

    }


    /* =========================================
       Open Delete Modal
    ========================================= */

    function openDeleteModal(orderNumber = '') {

        if (!deleteModal) {
            return;
        }


        if (orderNumber) {

            deleteOrderNumber.textContent =
                orderNumber;

        }


        deleteModal.classList.add('active');

        deleteModal.setAttribute(
            'aria-hidden',
            'false'
        );


        document.body.style.overflow =
            'hidden';

    }


    /* =========================================
       Close Delete Modal
    ========================================= */

    function closeModal() {

        if (!deleteModal) {
            return;
        }


        deleteModal.classList.remove(
            'active'
        );

        deleteModal.setAttribute(
            'aria-hidden',
            'true'
        );


        document.body.style.overflow =
            '';


        deleteTargetRow = null;
        deleteTargetIds = [];

    }


    /* =========================================
       Close Events
    ========================================= */

    if (closeDeleteModal) {

        closeDeleteModal.addEventListener(
            'click',
            closeModal
        );

    }


    if (cancelDeleteOrder) {

        cancelDeleteOrder.addEventListener(
            'click',
            closeModal
        );

    }


    if (modalOverlay) {

        modalOverlay.addEventListener(
            'click',
            closeModal
        );

    }


    /* =========================================
       ESC Key
    ========================================= */

    document.addEventListener(
        'keydown',
        function (event) {

            if (
                event.key === 'Escape' &&
                deleteModal &&
                deleteModal.classList.contains('active')
            ) {

                closeModal();

            }

        }
    );


    /* =========================================
       Confirm Delete
    ========================================= */

    if (confirmDeleteOrder) {

        confirmDeleteOrder.addEventListener(
            'click',
            function () {

                /* Single Delete */

                if (deleteTargetRow) {

                    deleteTargetRow.remove();

                }


                /* Bulk Delete */

                else if (
                    deleteTargetIds.length > 0
                ) {

                    deleteTargetIds.forEach(
                        function (orderId) {

                            const checkbox =
                                document.querySelector(
                                    '.order-checkbox[value="' +
                                    orderId +
                                    '"]'
                                );


                            if (checkbox) {

                                const row =
                                    checkbox.closest(
                                        'tr'
                                    );


                                if (row) {
                                    row.remove();
                                }

                            }

                        }
                    );

                }


                /* Reset */

                if (selectAllOrders) {

                    selectAllOrders.checked =
                        false;

                    selectAllOrders.indeterminate =
                        false;

                }


                updateBulkBar();

                closeModal();

            }
        );

    }


    /* =========================================
       Initial State
    ========================================= */

    updateBulkBar();
    updateSelectAllState();

});
</script>

@endsection