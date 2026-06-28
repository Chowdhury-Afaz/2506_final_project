@extends('layouts.backend')

@section('title', 'Products')

@section('main')
<div class="container-xxl flex-grow-1 container-p-y">

  @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
  @endif

  <div class="card">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="mb-0">Products</h5>
      <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
        <i class="bx bx-plus me-1"></i> Add New Product
      </a>
    </div>

    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stock Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($products as $product)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>
              @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" width="48" height="48"
                  style="object-fit: cover; border-radius: 8px;" alt="{{ $product->name }}">
              @else
                <span class="avatar avatar-sm bg-label-secondary rounded">
                  <i class="bx bx-image-alt"></i>
                </span>
              @endif
            </td>
            <td class="fw-semibold">{{ $product->name }}</td>
            <td><span class="badge bg-label-primary">{{ $product->category->name ?? '-' }}</span></td>
            <td>${{ number_format($product->price, 2) }}</td>
            <td>
              @if($product->stock_status == 'in_stock')
                <span class="badge bg-label-success">In Stock</span>
              @else
                <span class="badge bg-label-danger">Out of Stock</span>
              @endif
            </td>
            <td>
              <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-icon">
                <i class="bx bx-edit text-warning"></i>
              </a>
              <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Delete this product?');">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-icon">
                  <i class="bx bx-trash text-danger"></i>
                </button>
              </form>
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="7" class="text-center text-muted py-4">No products yet. Click "Add New Product" to create one!</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection