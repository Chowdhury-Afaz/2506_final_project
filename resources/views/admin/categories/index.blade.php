@extends('layouts.backend')

@section('title', 'Categories')

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
      <h5 class="mb-0">Categories</h5>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
        <i class="bx bx-plus me-1"></i> Add Category
      </button>
    </div>

    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Total Products</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($categories as $cat)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td class="fw-semibold">{{ $cat->name }}</td>
            <td><span class="badge bg-label-info">{{ $cat->products_count ?? $cat->products->count() }}</span></td>
            <td>
              <button type="button" class="btn btn-sm btn-icon" data-bs-toggle="modal"
                data-bs-target="#editCategoryModal{{ $cat->id }}">
                <i class="bx bx-edit text-warning"></i>
              </button>
              <form action="{{ route('admin.categories.destroy', $cat->id) }}" method="POST" class="d-inline"
                onsubmit="return confirm('Delete this category? Products inside it will also be deleted.');">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-icon">
                  <i class="bx bx-trash text-danger"></i>
                </button>
              </form>
            </td>
          </tr>

          <!-- Edit Category Modal -->
          <div class="modal fade" id="editCategoryModal{{ $cat->id }}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{ route('admin.categories.update', $cat->id) }}" method="POST">
                  @csrf @method('PUT')
                  <div class="modal-header">
                    <h5 class="modal-title">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
                  <div class="modal-body">
                    <input type="text" name="name" class="form-control" value="{{ $cat->name }}" required>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

          @empty
          <tr>
            <td colspan="4" class="text-center text-muted py-4">No categories yet. Add your first one!</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Add Category Modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Add New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <label class="form-label">Category Name</label>
          <input type="text" name="name" class="form-control" placeholder="e.g. Pizza, Burger, Drinks" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection