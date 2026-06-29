@extends('layouts.backend')

@section('main')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Product Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root {
	--green-900:#002603;
	--green-800:#173b1a;
	--green-700:#2b572e;
	--green-600:#406b42;
	--green-500:#618062;
	--green-200:#b4ccb4;
	--green-100:#dae5da;
	--green-50:#edf2ee;

	--success:#00b207;
	--warning:#ff8a00;
	--danger:#ea4b48;
}

body {
	background: var(--green-50);
}

/* Main */
.main {
	padding: 20px;
}

/* Card */
.card-box {
	border: none;
	border-radius: 12px;
	box-shadow: 0 2px 10px rgba(0,0,0,0.05);
	background: white;
}

/* Topbar */
.topbar {
	background: white;
	padding: 15px;
	border-radius: 10px;
	margin-bottom: 20px;
	box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* Buttons */
.btn-primary {
	background: var(--green-700);
	border: none;
}

.btn-primary:hover {
	background: var(--green-800);
}

.btn-success {
	background: var(--success);
	border: none;
}

.btn-danger {
	background: var(--danger);
	border: none;
}

.btn-outline-primary {
	border-color: var(--green-700);
	color: var(--green-700);
}

.btn-outline-primary:hover {
	background: var(--green-700);
	color: white;
}

/* Table */
.table thead {
	background: var(--green-700);
	color: white;
}

.table img {
	width: 50px;
	height: 50px;
	object-fit: cover;
	border-radius: 8px;
}

/* Badges */
.bg-success {
	background: var(--success) !important;
}

.bg-danger {
	background: var(--danger) !important;
}

.form-control,
.form-select {
	border-radius: 10px;
	border: 1px solid var(--green-200);
}

.form-control:focus {
	border-color: var(--success);
	box-shadow: 0 0 0 0.2rem rgba(0,178,7,0.15);
}
</style>
</head>

<body>

<div class="main container">

<!-- CARDS -->
<div class="row mb-4">

<div class="col-md-3">
<div class="card card-box p-3">
<h6>Total Products</h6>
<h4>1,248</h4>
</div>
</div>

<div class="col-md-3">
<div class="card card-box p-3">
<h6>Active</h6>
<h4>1,100</h4>
</div>
</div>

<div class="col-md-3">
<div class="card card-box p-3">
<h6>Out of Stock</h6>
<h4>45</h4>
</div>
</div>

<div class="col-md-3">
<div class="card card-box p-3">
<h6>Low Stock</h6>
<h4>90</h4>
</div>
</div>

</div>

<!-- TOPBAR -->
<div class="topbar d-flex justify-content-between align-items-center">
<h4 class="m-0">Products</h4>

<button class="btn btn-primary" type="button"
data-bs-toggle="collapse"
data-bs-target="#addProductForm">
+ Add Product
</button>
</div>

<!-- COLLAPSE FORM -->
<div class="collapse mb-3" id="addProductForm">
<div class="card card-box p-3">

<h5 class="mb-3">Add New Product</h5>

<form>
<div class="row g-2">

<div class="col-md-6">
<label class="form-label">Product Name</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Description</label>
<input type="text" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Category</label>
<select class="form-select">
<option>Electronics</option>
<option>Fashion</option>
</select>
</div>

<div class="col-md-6">
<label class="form-label">Price</label>
<input type="number" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">Stock</label>
<input type="number" class="form-control">
</div>

<div class="col-md-6">
<label class="form-label">SKU</label>
<select class="form-select">
<option>Active</option>
<option>Inactive</option>
</select>
</div>

<div class="col-md-12">
<label class="form-label">Product Image</label>
<input type="file" class="form-control">
</div>

<div class="col-md-12 mt-4">
<button class="btn btn-success">Add Product</button>

<button class="btn btn-secondary" type="button"
data-bs-toggle="collapse"
data-bs-target="#addProductForm">
Cancel
</button>
</div>

</div>
</form>

</div>
</div>

<!-- FILTERS -->
<div class="card card-box p-3 mb-3">
<div class="row g-2">

<div class="col-md-4">
<input class="form-control" placeholder="Search product...">
</div>

<div class="col-md-2">
<select class="form-select">
<option>Category</option>
<option>Electronics</option>
<option>Fashion</option>
</select>
</div>

<div class="col-md-2">
<select class="form-select">
<option>Status</option>
<option>Active</option>
<option>Inactive</option>
</select>
</div>

<div class="col-md-2">
<button class="btn btn-outline-primary w-100">Filter</button>
</div>

</div>
</div>

<!-- TABLE -->
<div class="card card-box p-3">
<table class="table align-middle">

<thead>
<tr>
<th>Product</th>
<th>SKU</th>
<th>Category</th>
<th>Price</th>
<th>Stock</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<tr>
<td class="d-flex align-items-center gap-2">
<img src="https://via.placeholder.com/50">
<div>
<strong>Smart Watch</strong><br>
<small>Wearable</small>
</div>
</td>

<td>WAT-001</td>
<td>Electronics</td>
<td>$120</td>
<td>120</td>
<td><span class="badge bg-success">Active</span></td>
<td>
<button class="btn btn-sm btn-primary">Edit</button>
<button class="btn btn-sm btn-danger">Delete</button>
</td>
</tr>

<tr>
<td class="d-flex align-items-center gap-2">
<img src="https://via.placeholder.com/50">
<div>
<strong>Shoes</strong><br>
<small>Sports</small>
</div>
</td>

<td>SHO-002</td>
<td>Fashion</td>
<td>$80</td>
<td>0</td>
<td><span class="badge bg-danger">Out</span></td>
<td>
<button class="btn btn-sm btn-primary">Edit</button>
<button class="btn btn-sm btn-danger">Delete</button>
</td>
</tr>

</tbody>

</table>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

@endsection