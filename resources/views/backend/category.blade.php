@extends('layouts.backend')

@section('title', 'Category')

@section('main')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Category Management</h4>
            <p class="text-muted mb-0">Manage all product categories.</p>
        </div>

        <a href="#" class="btn btn-primary">
            <i class='bx bx-plus'></i> Add Category
        </a>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Category List</h5>

            <input type="text"
                class="form-control w-25"
                placeholder="Search Category...">
        </div>

        <div class="table-responsive text-nowrap">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th width="80">#</th>
                        <th>Category Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Electronics</td>
                        <td>electronics</td>

                        <td>
                            <span class="badge bg-label-success">
                                Active
                            </span>
                        </td>

                        <td>22 Jun 2026</td>

                        <td class="text-center">

                            <button class="btn btn-sm btn-info">
                                <i class='bx bx-show'></i>
                            </button>

                            <button class="btn btn-sm btn-warning">
                                <i class='bx bx-edit'></i>
                            </button>

                            <button class="btn btn-sm btn-danger">
                                <i class='bx bx-trash'></i>
                            </button>

                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Fashion</td>
                        <td>fashion</td>

                        <td>
                            <span class="badge bg-label-success">
                                Active
                            </span>
                        </td>

                        <td>25 Jun 2026</td>

                        <td class="text-center">

                            <button class="btn btn-sm btn-info">
                                <i class='bx bx-show'></i>
                            </button>

                            <button class="btn btn-sm btn-warning">
                                <i class='bx bx-edit'></i>
                            </button>

                            <button class="btn btn-sm btn-danger">
                                <i class='bx bx-trash'></i>
                            </button>

                        </td>
                    </tr>

                </tbody>

            </table>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center">

            <small class="text-muted">
                Showing 1 to 2 of 2 entries
            </small>

            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Previous</a>
                    </li>

                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>

                    <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>

        </div>

    </div>

</div>

@endsection