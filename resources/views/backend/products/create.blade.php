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
            <!-- PAGE HEADER -->
            
            <div class="page-header mb-4">
            
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            
                    <div>
            
                        <h2 class="page-title mb-1">
            
                            Create Product
            
                        </h2>
            
                        <p class="text-muted mb-0">
            
                            Add a new product to your inventory.
            
                        </p>
            
                    </div>
            
<a href="{{ route('admin.products.all') }}"
    class="btn btn-back d-inline-flex align-items-center gap-2 px-4 py-2 rounded-3">

    <i class="bi bi-arrow-left"></i>

    <span>Back to Products</span>

</a>
            
                </div>
            
            </div>


                <div class="card product-form-card">
                <div class="card-body p-4">
                    <form enctype="multipart/form-data" action="{{ route('admin.products.store') }}" method="POST">
                        @csrf
                        <!-- BASIC INFORMATION -->

<div class="card form-section-card mb-4">

    <div class="card-header bg-white border-0 pb-0">

        <h5 class="fw-bold mb-2">

            Basic Information

        </h5>

        <p class="text-muted mb-4">

            Enter the main details about your product.

        </p>

    </div>

    <div class="card-body">

        <div class="row g-4">

            <!-- Category -->

            <div class="col-lg-6">

                <label class="form-label fw-semibold">

                    Category

                    <span class="text-danger">*</span>

                </label>

<select
    class="form-select @error('category_id') is-invalid @enderror"
    name="category_id">

    <option value="">
        Select Category
    </option>

    @forelse($categories as $category)

        <option
            value="{{ $category->id }}"
            {{ old('category_id') == $category->id ? 'selected' : '' }}>

            {{ $category->name }}

        </option>

    @empty

        <option disabled>
            No Category Found
        </option>

    @endforelse

</select>

                @error('category_id')
                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>
                @enderror

            </div>

            <!-- Product Name -->

            <div class="col-lg-6">

                <label class="form-label fw-semibold">

                    Product Name

                    <span class="text-danger">*</span>

                </label>

                <input
                    type="text"
                    id="product_name"
                    class="form-control @error('title') is-invalid @enderror"
                    name="title"
                    value="{{ old('title') }}"
                    placeholder="Enter product name">

                @error('title')
                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>
                @enderror

            </div>

            <!-- Slug -->

            <div class="col-12">

                <label class="form-label fw-semibold">

                    Product Slug

                </label>

                <input
                    type="text"
                    id="product_slug"
                    class="form-control @error('slug') is-invalid @enderror"
                    name="slug"
                    value="{{ old('slug') }}"
                    placeholder="product-slug"
                    readonly
                    >

                @error('slug')
                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>
                @enderror

            </div>

            <!-- Short Description -->

            <div class="col-12">

                <label class="form-label fw-semibold">

                    Short Description

                </label>

                <input
                    type="text"
                    class="form-control @error('short_description') is-invalid @enderror"
                    name="short_description"
                    value="{{ old('short_description') }}"
                    placeholder="Brief product summary">

            </div>

            <!-- Description -->

            <div class="col-12">

                <label class="form-label fw-semibold">

                    Product Description

                </label>

                <textarea
                    id="description"
                    class="form-control @error('description') is-invalid @enderror"
                    name="description"
                    rows="8">{{ old('description') }}</textarea>

            </div>

        </div>

    </div>

</div>

<!-- PRICING -->

<div class="card form-section-card mb-4">

    <div class="card-header bg-white border-0 pb-0">

        <h5 class="fw-bold mb-2">

            Pricing

        </h5>

        <p class="text-muted mb-4">

            Set your product pricing information.

        </p>

    </div>

    <div class="card-body">

        <div class="row g-4">

            <!-- Regular Price -->

            <div class="col-lg-6">

                <label class="form-label fw-semibold">

                    Regular Price

                    <span class="text-danger">*</span>

                </label>

                <div class="input-group">

                    <span class="input-group-text">

                        ৳

                    </span>

                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        name="price"
                        value="{{ old('price') }}"
                        class="form-control @error('price') is-invalid @enderror"
                        placeholder="0.00">

                </div>

                @error('price')

                    <div class="invalid-feedback d-block">

                        {{ $message }}

                    </div>

                @enderror

            </div>

            <!-- Selling Price -->

            <div class="col-lg-6">

                <label class="form-label fw-semibold">

                    Discount Price

                </label>

                <div class="input-group">

                    <span class="input-group-text">

                        ৳

                    </span>

                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        name="selling_price"
                        value="{{ old('selling_price') }}"
                        class="form-control @error('selling_price') is-invalid @enderror"
                        placeholder="0.00">

                </div>

                @error('selling_price')

                    <div class="invalid-feedback d-block">

                        {{ $message }}

                    </div>

                @enderror

            </div>

        </div>

    </div>

</div>
                        
<!-- PRODUCT IMAGES -->

<div class="card form-section-card mb-4">

    <div class="card-header bg-white border-0 pb-0">

        <h5 class="fw-bold mb-2">

            Product Images

        </h5>

        <p class="text-muted mb-4">

            Upload a featured image for your product.

        </p>

    </div>

    <div class="card-body">

        <div class="row g-4">

            <!-- Preview -->

            <div class="col-lg-5">

                <div class="image-preview-box">

                    <img
                        id="previewImage"
                        src="https://placehold.co/500x400?text=No+Image"
                        class="img-fluid">

                </div>

            </div>

            <!-- Upload -->

            <div class="col-lg-7">

                <label class="form-label fw-semibold">

                    Featured Image

                    <span class="text-danger">*</span>

                </label>

                <input
                    type="file"
                    id="imageInput"
                    name="image"
                    class="form-control @error('image') is-invalid @enderror">

                @error('image')

                    <div class="invalid-feedback d-block">

                        {{ $message }}

                    </div>

                @enderror

                <div class="upload-info mt-4">

                    <div class="upload-item">

                        <i class="bi bi-image text-success"></i>

                        JPG, PNG, WEBP

                    </div>

                    <div class="upload-item">

                        <i class="bi bi-aspect-ratio text-primary"></i>

                        Recommended 1000 × 1000

                    </div>

                    <div class="upload-item">

                        <i class="bi bi-hdd text-warning"></i>

                        Max Size 2 MB

                    </div>


                    
                </div>

            </div>

        </div>
        
    </div>   

</div>

<!-- PRODUCT GALLERY -->

<div class="card form-section-card mb-4">

    <div class="card-header bg-white border-0 pb-0">

        <h5 class="fw-bold mb-2">
            Product Gallery
        </h5>

        <p class="text-muted mb-4">
            Upload multiple gallery images.
        </p>

    </div>

    <div class="card-body">

        <div class="row g-4">

            <!-- Gallery Preview -->

            <div class="col-lg-5">

                <div class="image-preview-box">

                    <div
                        id="galleryPreview"
                        class="gallery-preview">

                    </div>

                </div>

            </div>

            <!-- Gallery Upload -->

            <div class="col-lg-7">

                <label class="form-label fw-semibold">

                    Gallery Images

                </label>

                <input
                    type="file"
                    id="galleryInput"
                    name="gallery[]"
                    class="form-control"
                    multiple
                    accept="image/*">

                <small class="text-muted d-block mt-2">
                    You can upload multiple images.
                </small>

                                <div class="upload-info mt-4">

                    <div class="upload-item">

                        <i class="bi bi-image text-success"></i>

                        JPG, PNG, WEBP

                    </div>

                    <div class="upload-item">

                        <i class="bi bi-aspect-ratio text-primary"></i>

                        Recommended 1000 × 1000

                    </div>

                    <div class="upload-item">

                        <i class="bi bi-hdd text-warning"></i>

                        Max Size 2 MB

                    </div>


                    
                </div>

            </div>

        </div>

    </div>

</div>


<div class="card form-section-card mb-4">

    <div class="card-header bg-white border-0">

        <h5 class="fw-bold mb-2">
            Search Engine Optimization
        </h5>

        <p class="text-muted mb-4">
            Improve your product visibility in search engines.
        </p>

    </div>

    <div class="card-body">

        <div class="row g-4">

            <!-- Meta Title -->

            <div class="col-md-12">

                <label class="form-label fw-semibold">

                    Meta Title

                </label>

                <input
                    type="text"
                    name="meta_title"
                    class="form-control @error('meta_title') is-invalid @enderror"
                    value="{{ old('meta_title') }}"
                    placeholder="Enter SEO title">

                @error('meta_title')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                @enderror

            </div>

            <!-- Meta Keywords -->

            <div class="col-md-12">

                <label class="form-label fw-semibold">

                    Meta Keywords

                </label>

                <input
                    type="text"
                    name="meta_keywords"
                    class="form-control @error('meta_keywords') is-invalid @enderror"
                    value="{{ old('meta_keywords') }}"
                    placeholder="keyword1, keyword2, keyword3">

                @error('meta_keywords')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                @enderror

            </div>

            <!-- Meta Description -->

            <div class="col-md-12">

                <label class="form-label fw-semibold">

                    Meta Description

                </label>

                <textarea
                    rows="4"
                    name="meta_description"
                    class="form-control @error('meta_description') is-invalid @enderror"
                    placeholder="Write a short SEO description...">{{ old('meta_description') }}</textarea>

                @error('meta_description')

                    <div class="invalid-feedback">

                        {{ $message }}

                    </div>

                @enderror

            </div>

        </div>

    </div>

</div>

<div class="card form-section-card">

    <div class="card-body">

        <div class="d-flex justify-content-between align-items-center">

            <div>

                <h6 class="fw-bold mb-1">

                    Ready to Publish?

                </h6>

                <small class="text-muted">

                    Review all information before saving.

                </small>

            </div>

            <div class="d-flex gap-2">

                <a
                    href="{{ route('admin.products.all') }}"
                    class="btn btn-light px-4">

                    Cancel

                </a>

                <button
                    type="submit"
                    class="btn btn-success px-4">

                    <i class="bi bi-check-circle me-2"></i>

                    Save Product

                </button>

            </div>

        </div>

    </div>

</div>

                </form>
            </div>
        </div>
    </div>
</div>




<script>

const galleryInput = document.getElementById("galleryInput");
const galleryPreview = document.getElementById("galleryPreview");

if (galleryInput && galleryPreview) {

    galleryInput.addEventListener("change", function () {

        galleryPreview.innerHTML = "";

        Array.from(this.files).forEach(file => {

            const reader = new FileReader();

            reader.onload = function (e) {

                const item = document.createElement("div");

                item.className = "gallery-item";

                item.innerHTML = `
                    <img src="${e.target.result}" alt="">

                    <button
                        type="button"
                        class="gallery-remove">

                        <i class="bi bi-x-lg"></i>

                    </button>
                `;

                item.querySelector(".gallery-remove")
                    .addEventListener("click", function () {

                        item.remove();

                    });

                galleryPreview.appendChild(item);

            };

            reader.readAsDataURL(file);

        });

    });

}

//Product slug generate 
const productName = document.getElementById('product_name');
const productSlug = document.getElementById('product_slug');

if (productName && productSlug) {

    productName.addEventListener('input', function () {

        productSlug.value = this.value
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9]+/g, '-')
            .replace(/-{2,}/g, '-')
            .replace(/^-|-$/g, '');

    });

}

</script>


@endsection