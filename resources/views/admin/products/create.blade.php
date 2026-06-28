@extends('layouts.backend')

@section('title', 'Add Product')

@section('main')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="mb-0">Add New Product</h5>
      <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary btn-sm">
        <i class="bx bx-arrow-back me-1"></i> Back to List
      </a>
    </div>

    <div class="card-body">
      @if($errors->any())
        <div class="alert alert-danger">
          <ul class="mb-0">
            @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" placeholder="e.g. Margherita Pizza"
              value="{{ old('name') }}" required>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" class="form-select" required>
              <option value="">-- Select Category --</option>
              @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                  {{ $cat->name }}
                </option>
              @endforeach
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Price ($)</label>
            <input type="number" step="0.01" min="0" name="price" class="form-control"
              placeholder="e.g. 9.99" value="{{ old('price') }}" required>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Stock Status</label>
            <select name="stock_status" class="form-select" required>
              <option value="in_stock">In Stock</option>
              <option value="out_of_stock">Out of Stock</option>
            </select>
          </div>

          <div class="col-md-6 mb-3">
            <label class="form-label">Product Image</label>
            <input type="file" name="image" class="form-control" accept="image/*">
            <small class="text-muted">JPG or PNG, max 2MB</small>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">
          <i class="bx bx-save me-1"></i> Save Product
        </button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary">Cancel</a>
      </form>
    </div>
  </div>
</div>
@endsection