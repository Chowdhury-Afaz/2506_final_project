@extends('layouts.backend')

@section('main')

@push('css')
    <link rel="stylesheet" href="{{ asset('backend/assets/css/rte_theme_default.css') }}">
@endpush
@push('js')
    <script src="{{ asset('backend/assets/js/rte.js') }}"></script>
    <script src="{{ asset('backend/assets/js/all_plugins.min.js') }}"></script>
    <script>
        var editor = new RichTextEditor("#description");
    </script>
@endpush


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary  py-3 text-white">
                    <h4 class="mb-0 text-white"><i class="bi bi-box-seam me-2 text-white"></i>Create New Product</h4>
                </div>

                <div class="card-body p-4">
                    <form enctype="multipart/form-data" action="{{ route('admin.products.store') }}" method="POST">
                        @csrf
                        <h5 class="text-muted mb-3 border-bottom pb-2">Basic Information</h5>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="category_id" class="form-label fw-bold">Category <span
                                        class="text-danger">*</span></label>
                                <select class="form-select @error('category_id') is-invalid @enderror" id="category_id"
                                    name="category_id" >
                                    <option value="" selected disabled>Select a Category</option>
                                    {{-- Loop through your categories here --}}
                                    {{-- @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id')==$category->id ?
                                        'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach --}}
                                </select>
                                @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label fw-bold">Product Title <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                    name="title"  placeholder="Enter product title" required>
                                @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="slug" class="form-label fw-bold">Slug <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                                    name="slug" value="{{ old('slug') }}" placeholder="product-url-slug" >
                                <small class="text-muted">Must be unique and URL-friendly.</small>
                                @error('slug') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="short_description" class="form-label fw-bold">Short Description</label>
                            <input type="text" class="form-control @error('short_description') is-invalid @enderror"
                                id="short_description" name="short_description" value="{{ old('short_description') }}"
                                placeholder="Brief summary of the product">
                            @error('short_description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Full Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                name="description" rows="5"
                                placeholder="Detailed product description">{{ old('description') }}</textarea>
                            @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label fw-bold">Regular Price <span
                                        class="text-danger">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" step="0.01" min="0"
                                        class="form-control @error('price') is-invalid @enderror" id="price"
                                        name="price" value="{{ old('price') }}" required>
                                    @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <label for="selling_price" class="form-label fw-bold">Selling/Discount Price</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" step="0.01" min="0"
                                        class="form-control @error('selling_price') is-invalid @enderror"
                                        id="selling_price" name="selling_price" value="{{ old('selling_price') }}">
                                    @error('selling_price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label fw-bold">Featured Image</label>
                                <div class="input-group">
                                    <input type="file"
                                        class="form-control @error('image') is-invalid @enderror" id="image"
                                        name="image" >
                                    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="price" class="form-label fw-bold">Gallery Images</label>
                                <div class="input-group">
                                    <input type="file" multiple class="form-control @error('gallery_image') is-invalid @enderror" id="gallery_image" name="gallery_image" >
                                    @error('gallery_image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>
                        </div>

                        <div class="card bg-light border-0 mb-4">
                            <div class="card-body">
                                <h5 class="text-muted mb-3 border-bottom pb-2">Search Engine Optimization (SEO)</h5>

                                <div class="mb-3">
                                    <label for="meta_title" class="form-label fw-bold">Meta Title</label>
                                    <input type="text" class="form-control @error('meta_title') is-invalid @enderror"
                                        id="meta_title" name="meta_title" value="{{ old('meta_title') }}"
                                        placeholder="SEO Title">
                                    @error('meta_title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="meta_keywords" class="form-label fw-bold">Meta Keywords</label>
                                    <input type="text" class="form-control @error('meta_keywords') is-invalid @enderror"
                                        id="meta_keywords" name="meta_keywords" value="{{ old('meta_keywords') }}"
                                        placeholder="keyword1, keyword2, keyword3">
                                    @error('meta_keywords')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="meta_description" class="form-label fw-bold">Meta Description</label>
                                    <textarea class="form-control @error('meta_description') is-invalid @enderror"
                                        id="meta_description" name="meta_description" rows="3"
                                        placeholder="Brief description for search engine results">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ route('admin.products.all') }}"
                                class="btn btn-outline-secondary me-md-2">Cancel</a>
                            <button type="submit" class="btn btn-primary px-4">Save Product</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>



@endsection