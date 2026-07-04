@extends('layouts.backend')

@section('main')

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Category Dashboard</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<style>
		:root {
			--green-900: #002603;
			--green-800: #173b1a;
			--green-700: #2b572e;
			--green-600: #406b42;
			--green-500: #618062;
			--green-200: #b4ccb4;
			--green-100: #dae5da;
			--green-50: #edf2ee;

			--success: #00b207;
			--warning: #ff8a00;
			--danger: #ea4b48;
		}

		a {
			text-decoration: none;
		}

		body {
			background: var(--green-50);
		}

		/* Header */
		.page-title {
			font-weight: 700;
			color: var(--green-900);
		}

		/* Cards */
		.card-box {
			border: none;
			border-radius: 16px;
			background: white;
			box-shadow: 0 10px 25px rgba(0, 0, 0, .06);
			transition: .3s;
		}

		.card-box:hover {
			transform: translateY(-5px);
		}

		.stat-icon {
			width: 55px;
			height: 55px;
			border-radius: 14px;
			display: flex;
			align-items: center;
			justify-content: center;
			color: white;
			font-size: 22px;
		}

		.bg1 {
			background: var(--green-700);
		}

		.bg2 {
			background: var(--success);
		}

		.bg3 {
			background: var(--warning);
		}

		.bg4 {
			background: var(--danger);
		}

		/* Table */
		.table-card {
			border: none;
			border-radius: 16px;
			overflow: hidden;
			box-shadow: 0 10px 25px rgba(0, 0, 0, .06);
		}

		.table thead {
			background: var(--green-700);
			color: white;
		}

		.badge-active {
			background: var(--success);
		}

		.badge-inactive {
			background: var(--danger);
		}

		/* Buttons */
		.btn-primary {
			background: var(--green-700);
			border: none;
		}

		.btn-primary:hover {
			background: var(--green-800);
		}

		/* Inputs */
		.form-control,
		.form-select {
			border-radius: 10px;
			border: 1px solid var(--green-200);
		}

		.form-control:focus {
			box-shadow: 0 0 0 0.2rem rgba(0, 178, 7, .15);
			border-color: var(--success);
		}

		.modal-content {
			border-radius: 16px;
		}
	</style>

</head>

<body>

	<div class="container py-4">

		<!-- Header -->
		<div class="d-flex justify-content-between align-items-center mb-4">
			<div>
				<h2 class="page-title">Category Management</h2>
				<small class="text-muted">Control all product categories</small>
			</div>

			<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
				<i class="bi bi-plus-circle"></i> Add Category
			</button>
		</div>

		<!-- Cards -->
		<div class="row g-3 mb-4">

			<div class="col-md-3">
				<div class="card card-box">
					<div class="card-body d-flex justify-content-between">
						<div>
							<small>Total</small>
							<h3>{{ $categories->count() }}</h3>
						</div>
						<div class="stat-icon bg1"><i class="bi bi-grid"></i></div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card card-box">
					<div class="card-body d-flex justify-content-between">
						<div>
							<small>Active</small>
							<h3>{{ $categories->where('status', true)->count() }}</h3>
						</div>
						<div class="stat-icon bg2"><i class="bi bi-check-lg"></i></div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card card-box">
					<div class="card-body d-flex justify-content-between">
						<div>
							<small>Featured</small>
							<h3>{{ $categories->where('featured', true)->count() }}</h3>
						</div>
						<div class="stat-icon bg3"><i class="bi bi-star-fill"></i></div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="card card-box">
					<div class="card-body d-flex justify-content-between">
						<div>
							<small>Inactive</small>
							<h3>{{ $categories->where('status', false)->count() }}</h3>
						</div>
						<div class="stat-icon bg4"><i class="bi bi-x-circle"></i></div>
					</div>
				</div>
			</div>

		</div>

		<!-- Table -->
		<div class="card table-card">

			<div class="table-responsive">
				<table class="table align-middle mb-0">

					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th class="text-center">Parent</th>
							<th class="text-center">Products</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>

						@forelse($categories as $key=>$category)
						<tr>
							<td>{{ ++$key }}</td>
							<td>{{ $category->name }}</td>
							<td class="text-center">---</td>
							<td class="text-center">0</td>
							<td>
								@if ($category->status == true)
								<span class="badge badge-active">Active</span>
								@else
								<span class="badge badge-inactive">Inactive</span>
								@endif
							</td>
							<td>
								<button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
								<button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
							</td>
						</tr>
						@empty
							<tr>
								<td colspan="6" class="text-center">No categories found.</td>
							</tr>
						@endforelse
					</tbody>
				</table>
				<div class="pagination mt-3">
					{{ $categories->links() }}
				</div>
			</div>

		</div>

	</div>

	<!-- Add Modal -->
	<div class="modal fade" id="addModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="modal-header">
					<h5>Add Category</h5>
					<button class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<div class="modal-body">
					<div class="row">

						<form action="{{ route('admin.categories.store') }}" method="POST">
							@csrf
							<div class="col-md-6 mb-3">
								<label>Name</label>
								<input class="form-control" name="name">
								@error('name')
								<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>

							<div class="col-md-6 mb-3">
								<label>Slug</label>
								<input class="form-control" name="slug">
								@error('slug')
								<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>

							<div class="col-md-6 mb-3">
								<label>Parent</label>
								<select class="form-select" name="parent">
									@error('parent')
									<span class="text-danger">{{ $message }}</span>
									@enderror
									<option>None</option>
								</select>
							</div>

							<div class="col-md-6 mb-3">
								<label>Image</label>
								<input type="file" class="form-control" name="image">
							</div>

							<div class="col-12 mb-3">
								<label>Description</label>
								<textarea class="form-control" rows="4" name="description"></textarea>
								@error('description')
								<span class="text-danger">{{ $message }}</span>
								@enderror
							</div>


					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					<button class="btn btn-primary">Add Category</button>
				</div>
				</form>

			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

@endsection