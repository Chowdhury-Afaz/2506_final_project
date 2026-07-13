@extends('layouts.backend')

@section('main')

<div class="main container">
<!-- HEADER -->

<div class="card border-0 shadow-sm mb-4 mt-4">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

            <div>
                <h2 class="page-title mb-1">
                    Product Management
                </h2>

                <p class="text-muted mb-0">
                    Manage all products, inventory and pricing.
                </p>
            </div>

    <a href="{{ route('admin.products.create') }}" class="text-white btn btn-success px-4">

        <i class="bi bi-plus-circle me-2"></i>

        Add Product

    </a>

        </div>

    </div>
</div>



<!-- SEARCH & FILTER -->

<div class="card filter-card mb-4">

    <div class="product-card-body">

        <div class="row g-3 align-items-end">

            <!-- Search -->

            <div class="col-lg-4">

                <label class="form-label fw-semibold">

                    Search Product

                </label>

                <div class="search-box">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search by name or SKU...">

                </div>

            </div>

            <!-- Category -->

            <div class="col-lg-2 product-filer">

                <label class="form-label fw-semibold">

                    Category

                </label>

                <select class="form-select">

                    <option>All</option>

                    <option>Electronics</option>

                    <option>Fashion</option>

                    <option>Groceries</option>

                </select>

            </div>

            <!-- Status -->

            <div class="col-lg-2 product-filer">

                <label class="form-label fw-semibold">

                    Status

                </label>

                <select class="form-select">

                    <option>All</option>

                    <option>Active</option>

                    <option>Inactive</option>

                </select>

            </div>

            <!-- Sort -->

            <div class="col-lg-2 product-filer">

                <label class="form-label fw-semibold">

                    Sort By

                </label>

                <select class="form-select">

                    <option>Newest</option>

                    <option>Oldest</option>

                    <option>Price ↑</option>

                    <option>Price ↓</option>

                </select>

            </div>

            <!-- Buttons -->

            <div class="col-lg-2">

                <div class="d-flex gap-2">

                    <button class="btn btn-primary flex-fill d-flex">

                        <i class="bi bi-funnel me-1"></i>

                        Filter

                    </button>

                    <button class="btn btn-light border">

                        <i class="bi bi-arrow-clockwise"></i>

                    </button>


                </div>

            </div>

        </div>

    </div>

</div>


<!-- PRODUCT STATS -->

<div class="row g-4 mb-4">

    <div class="col-xl-3 col-md-6">

        <div class="card product-stat-card">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">
                        Total Products
                    </small>

                    <h3 class="fw-bold mt-2 mb-1">
                         {{ $totalProducts }}
                    </h3>

                    <span class="text-success small">
                        +12% this month
                    </span>

                </div>

                <div class="stat-icon bg-primary-soft">

                    <i class="bi bi-box-seam"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-xl-3 col-md-6">

        <div class="card product-stat-card">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">
                        Active Products
                    </small>

                    <h3 class="fw-bold mt-2 mb-1">
                        1,100
                    </h3>

                    <span class="text-success small">
                        Available
                    </span>

                </div>

                <div class="stat-icon bg-success-soft">

                    <i class="bi bi-check-circle-fill"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-xl-3 col-md-6">

        <div class="card stat-card">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">
                        Low Stock
                    </small>

                    <h3 class="fw-bold mt-2 mb-1">
                        90
                    </h3>

                    <span class="text-warning small">
                        Needs attention
                    </span>

                </div>

                <div class="stat-icon bg-warning-soft">

                    <i class="bi bi-exclamation-triangle-fill"></i>

                </div>

            </div>

        </div>

    </div>

    <div class="col-xl-3 col-md-6">

        <div class="card product-stat-card">

            <div class="card-body d-flex justify-content-between align-items-center">

                <div>

                    <small class="text-muted">
                        Out of Stock
                    </small>

                    <h3 class="fw-bold mt-2 mb-1">
                        45
                    </h3>

                    <span class="text-danger small">
                        Restock required
                    </span>

                </div>

                <div class="stat-icon bg-danger-soft">

                    <i class="bi bi-x-circle-fill"></i>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- TABLE -->
<div class="card product-table-card">

<div class="card-header bg-white border-0 py-3 px-4">

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

        <div>
            <h5 class="mb-1 fw-bold">Product List</h5>
            <small class="text-muted">
                Showing 1 Product
            </small>
        </div>

        <div class="d-flex gap-2">

            <button class="btn btn-outline-success btn-sm">
                <i class="bi bi-download me-1"></i>
                Export
            </button>

            <button class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-arrow-clockwise me-1"></i>
                Refresh
            </button>

        </div>

    </div>

</div>

<div class="table-responsive">

<!-- @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-2"></i>
        {{ session('success') }}

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif -->

<table class="table product-table align-middle">

<thead>

<tr>

    <th style="width:50px">

        <input
            class="form-check-input"
            type="checkbox">

    </th>

    <th>

        Product

    </th>

    <th>

        Category

    </th>

    <th>

        Price

    </th>

    <th>

        Stock

    </th>

    <th>

        Status

    </th>

    <th>

        Action

    </th>

</tr>

</thead>

<tbody>

@foreach($products as $product)

<tr>

    <td>
        <input
            class="form-check-input"
            type="checkbox">
    </td>


    <td>

        <div class="d-flex align-items-center gap-3">

            <img
                src="{{ asset('storage/'.$product->image) }}"
                class="product-image">

            <div>

                <div class="fw-semibold product-title">
                    {{ $product->title }}
                </div>

                <small class="text-muted">
                    SKU : {{ $product->slug }}
                </small>

            </div>

        </div>

    </td>


    <td>

        <span class="badge-category">
            {{ $product->category->name ?? 'No Category' }}
        </span>

    </td>


    <td>

        <strong>
            ৳{{ $product->selling_price }}
        </strong>

    </td>


    <td>

        <span class="badge-stock">
            Available
        </span>

    </td>


    <td class="text-center">

        <span class="status-badge active">

            <i class="bi bi-check-circle-fill"></i>

            Active

        </span>

    </td>


    <td>

        <div class="d-flex justify-content-end gap-2">

            <button class="btn btn-light action-btn">
                <i class="bi bi-eye"></i>
            </button>

            <button class="btn btn-warning action-btn">
                <i class="bi bi-pencil"></i>
            </button>

<form action="{{ route('admin.products.destroy', $product->id) }}"
      method="POST"
      class="delete-form">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger action-btn">
        <i class="bi bi-trash"></i>
    </button>

</form>

        </div>

    </td>


</tr>

@endforeach


</tbody>

</table>

</div>
</div>

</div>


<script>
document.querySelectorAll('.delete-form').forEach(form => {

    form.addEventListener('submit', function(e) {

        e.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to recover this product!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#198754',
            cancelButtonColor: '#dc3545',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {

            if (result.isConfirmed) {
                form.submit();
            }

        });

    });

});
</script>


@if(session('success'))

<script>

document.addEventListener("DOMContentLoaded", function(){

    Swal.fire({

        icon:'success',

        title:'Success',

        text:"{{ session('success') }}",

        timer:2000,

        showConfirmButton:false

    });

});

</script>

@endif


@endsection