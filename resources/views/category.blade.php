@extends('layouts.head')

@section('category')

    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="/products">Products</a></li>
        <li class="breadcrumb-item active">Category</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="card-title mb-0">
                <i class='bx bx-category me-2'></i> Categories
            </h5>
            <a href="" class="btn btn-sm btn-primary">
                <i class="bx bx-plus"></i> Add Category
            </a>
            </div>

            <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                <tr>
                    <th scope="col">Category Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            </div>

        </div>
    </div>

@endsection
