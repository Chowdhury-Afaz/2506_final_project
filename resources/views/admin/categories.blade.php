@extends('layouts.backend')

@section('main')

	<div class="container py-4">

		<!-- Header -->
<div class="card border-0 shadow-sm mb-4">
    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

            <div>
                <h2 class="page-title mb-1">
                    Category Management
                </h2>

                <p class="text-muted mb-0">
                    Manage product categories, organize inventory and improve navigation.
                </p>
            </div>

            <button
                class="btn btn-success px-4"
                data-bs-toggle="modal"
                data-bs-target="#addModal">

                <i class="bi bi-plus-circle me-2"></i>

                Create Category

            </button>

        </div>

    </div>
</div>

		
<!-- Search & Filter Section -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-body">

        <div class="row g-3 align-items-center">

            <div class="col-lg-5">

                <div class="input-group">

                    <span class="input-group-text bg-white">
                        <i class="bi bi-search"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Search category...">

                </div>

            </div>

            <div class="col-lg-3">

                <select class="form-select">

                    <option>All Status</option>
                    <option>Active</option>
                    <option>Inactive</option>

                </select>

            </div>

            <div class="col-lg-2">

                <select class="form-select">

                    <option>Newest</option>
                    <option>Oldest</option>

                </select>

            </div>

            <div class="col-lg-2">

                <button class="btn btn-outline-secondary w-100">

                    Reset

                </button>

            </div>

        </div>

    </div>

</div>

<!-- Search & Filter Section End -->


			<!-- Cards -->
		<div class="row g-4 mb-4">

    <!-- Total Categories -->
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">

                <div>
                    <p class="stat-title mb-1">Total Categories</p>
                    <h2 class="stat-number mb-2">{{ $categories->count() }}</h2>
                    <small class="text-muted">
                        All available categories
                    </small>
                </div>

                <div class="stat-icon bg-primary-soft">
                    <i class="bi bi-grid-fill"></i>
                </div>

            </div>
        </div>
    </div>

    <!-- Active -->
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">

                <div>
                    <p class="stat-title mb-1">Active</p>
                    <h2 class="stat-number mb-2">
                        {{ $categories->where('status', true)->count() }}
                    </h2>
                    <small class="text-success">
                        Currently visible
                    </small>
                </div>

                <div class="stat-icon bg-success-soft">
                    <i class="bi bi-check-circle-fill"></i>
                </div>

            </div>
        </div>
    </div>

    <!-- Featured -->
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">

                <div>
                    <p class="stat-title mb-1">Featured</p>
                    <h2 class="stat-number mb-2">
                        {{ $categories->where('featured', true)->count() }}
                    </h2>
                    <small class="text-warning">
                        Featured categories
                    </small>
                </div>

                <div class="stat-icon bg-warning-soft">
                    <i class="bi bi-star-fill"></i>
                </div>

            </div>
        </div>
    </div>

    <!-- Inactive -->
    <div class="col-xl-3 col-md-6">
        <div class="card stat-card border-0 h-100">
            <div class="card-body d-flex justify-content-between align-items-center">

                <div>
                    <p class="stat-title mb-1">Inactive</p>
                    <h2 class="stat-number mb-2">
                        {{ $categories->where('status', false)->count() }}
                    </h2>
                    <small class="text-danger">
                        Hidden categories
                    </small>
                </div>

                <div class="stat-icon bg-danger-soft">
                    <i class="bi bi-x-circle-fill"></i>
                </div>

            </div>
        </div>
    </div>

</div>

		<!-- Table -->
		<div class="card table-card">

		<div class="card-header bg-white border-0 py-3 px-4">

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

        <div>
            <h5 class="mb-1 fw-bold">Category List</h5>
            <small class="text-muted">
                Showing {{ $categories->count() }} categories
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
				<table class="table align-middle mb-0">

<thead>

<tr>

    <th width="40">
        <input class="form-check-input" type="checkbox">
    </th>

    <th>Category</th>

    <th class="text-center">
        Parent
    </th>

    <th class="text-center">
        Products
    </th>

    <th class="text-center">
        Status
    </th>

    <th class="text-end">
        Actions
    </th>

</tr>

</thead>

					<tbody>

						@forelse($categories as $key=>$category)
						
<tr>

    <td>
        <input
            class="form-check-input"
            type="checkbox">
    </td>

    <td>

        <div class="d-flex align-items-center gap-3">

            <div class="category-avatar">

                {{ strtoupper(substr($category->name,0,1)) }}

            </div>

            <div>

                <div class="fw-semibold">

                    {{ $category->name }}

                </div>

                <small class="text-muted">

                    {{ $category->slug }}

                </small>

            </div>

        </div>

    </td>

    <td class="text-center">

        —

    </td>

    <td class="text-center">

        0

    </td>

    <td class="text-center">

        @if($category->status)

            <span class="status-badge active">

                <i class="bi bi-check-circle-fill"></i>

                Active

            </span>

        @else

            <span class="status-badge inactive">

                <i class="bi bi-x-circle-fill"></i>

                Inactive

            </span>

        @endif

    </td>

    <td>

        <div class="d-flex justify-content-end gap-2">

            <button
                class="btn btn-light action-btn">

                <i class="bi bi-eye"></i>

            </button>

            <button
                class="btn btn-warning action-btn">

                <i class="bi bi-pencil"></i>

            </button>

<form action="{{ route('admin.categories.destroy', $category->id) }}"
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
						
						@empty
							<tr>

    <td colspan="6" class="py-5">

        <div class="text-center">

            <i class="bi bi-folder2-open display-3 text-secondary"></i>

            <h5 class="mt-3">

                No Categories Found

            </h5>

            <p class="text-muted">

                Start by creating your first category.

            </p>

        </div>

    </td>

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
<div class="modal fade"
     id="addModal"
     tabindex="-1"
     aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

			    <form action="{{ route('admin.categories.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf	
			
			<div class="modal-header border-0 pb-0">

    <div>

        <h4 class="fw-bold mb-1">
            Create Category
        </h4>

        <p class="text-muted mb-0">
            Add a new category to organize your products.
        </p>

    </div>

    <button
    type="button"
    class="btn-close"
    data-bs-dismiss="modal">
</button>

</div>

<div class="modal-body">

    <div class="row g-4">

        <!-- Left -->

        <div class="col-lg-8">

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Category Name
                </label>

                <input
    type="text"
    name="name"
    id="category_name"
    class="form-control @error('name') is-invalid @enderror"
    placeholder="Enter category name"
	value="{{ old('name') }}"
	>

					@error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">

                    Slug

                </label>

                <input
    type="text"
    name="slug"
    id="category_slug"
    class="form-control @error('slug') is-invalid @enderror"
	value="{{ old('slug') }}"
	>

					@error('slug')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">

                    Parent Category

                </label>

                <select
                    class="form-select"
                    name="parent">

                    <option value="">
                        None
                    </option>

                </select>

            </div>

            <div>

                <label class="form-label fw-semibold">

                    Description

                </label>

                <textarea
    rows="5"
    class="form-control @error('description') is-invalid @enderror"
    name="description"
    placeholder="Write a short description...">{{ old('description') }}</textarea>

										@error('description')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

            </div>

        </div>

        <!-- Right -->

        <div class="col-lg-4">

            <label class="form-label fw-semibold">

                Category Image

            </label>

            <div class="image-upload">

                <img
                    id="previewImage"
                    src="https://placehold.co/300x220?text=Upload"
                    class="img-fluid rounded">

<input
    type="file"
    id="imageInput"
    class="form-control @error('image') is-invalid @enderror"
    name="image"
    accept="image/*">

					@error('image')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror

            </div>

            <hr>

<input type="hidden" name="status" value="0">

<div class="form-check form-switch mb-3">

    <input
    class="form-check-input"
    type="checkbox"
    name="status"
    value="1"
    {{ old('status', 1) ? 'checked' : '' }}>

    <label class="form-check-label">
        Active
    </label>

</div>

            
<input type="hidden" name="featured" value="0">

<div class="form-check form-switch">

    <input
    class="form-check-input"
    type="checkbox"
    name="featured"
    value="1"
    {{ old('featured') ? 'checked' : '' }}>


    <label class="form-check-label">
        Featured
    </label>

</div>

        </div>

    </div>

</div>

<div class="modal-footer border-0 pt-0">

    <button
    type="button"
    class="btn btn-light px-4"
    data-bs-dismiss="modal">

    Cancel

</button>

<button
    type="submit"
    class="btn btn-success px-4">

    <i class="bi bi-check-circle me-2"></i>

    Save Category

</button>

</div>
				</form>

			</div>
		</div>
	</div>

@if ($errors->any())
<script>
document.addEventListener('DOMContentLoaded', function () {

    const modal = new bootstrap.Modal(
        document.getElementById('addModal')
    );

    modal.show();

});
</script>
@endif

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