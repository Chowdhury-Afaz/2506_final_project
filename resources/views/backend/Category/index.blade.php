@extends('layouts.backend')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Category</h4>

    <div class="row">
        <!-- Add Category Form -->
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Add New Category</h5>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

<!-- 
@if(isset($category))
    <div class="alert alert-success">
        Edit Mode Active
    </div>
@else
    <div class="alert alert-danger">
        Add Mode Active
    </div>
@endif -->

                <form action="{{ isset($category) ? route('admin.category.update', $category->id) : route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="category-name">Category Name</label>
                            <input
                            type="text"
                            name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            id="category-name"
                            placeholder="e.g. Vegetables"
                            value="{{ isset($category) ? $category->name : old('name') }}"
                            required
                            />

                            <div class="mb-3">
                        <label class="form-label">Category Image</label>

                            <input
                            type="file"
                            name="image"
                            class="form-control @error('image') is-invalid @enderror">

                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>

                            @error('name')
                                <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                    <button type="submit" class="btn btn-primary">
                    {{ isset($category) ? 'Update Category' : 'Save Category' }}
                    </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Category Table List -->
    <div class="col-md-8">
    <div class="card">

        <div class="card-header d-flex justify-content-between align-items-center">

            <h5 class="mb-0 text-success">
                <i class="bx bx-category"></i>
                Category Management
            </h5>

            <span class="badge bg-success">
                Total : {{ $categories->count() }}
            </span>

        </div>

        <div class="table-responsive text-nowrap">
        
        <table class="table">
                        <thead class="table-success">
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse($categories as $key => $category)
                            <tr>
                            
                                <td> {{ $categories->firstItem() + $key }}</td> 

                                <td>
                                @if($category->image)
                                <img src="{{ asset('uploads/categories/' . $category->image) }}"
                                width="60"
                                height="60"
                                style="object-fit:cover;
                                border-radius:12px;
                                border:2px solid #22c55e;
                                padding:2px;">
                                @else
                                No Image
                            @endif
                            </td> 




                                <td><strong>{{ $category->name }}</strong></td>
                                <td>{{ $category->slug }}</td>
                            <td>
                            <a href="{{ route('admin.category.edit', $category->id) }}"
                        class="btn btn-outline-success btn-sm rounded-circle">
                            <i class="bx bx-edit"></i>
                            </a>
                                <a href="{{ route('admin.category.delete', $category->id) }}"
                        class="btn btn-outline-danger btn-sm rounded-circle"
                        onclick="return confirm('Are you sure you want to delete this category?')">

                        <i class="bx bx-trash"></i>
                        </a>
                        </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No Category Found!</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection