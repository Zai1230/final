@extends('layouts.head')

@section('product')
    <div class="pagetitle">
        <h1>Users</h1>
        <nav>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Products</li>
            </ol>
        </nav>
    </div>


    <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h5 class="card-title mb-0">
              <i class='bx bx-box me-2'></i> Products
            </h5>
            <div>
              <a href="{{route('Category')}}" class="btn btn-sm btn-primary me-2">View Category</a>
              <a href="#" class="btn btn-sm btn-primary">Add Product</a>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-hover align-middle">
              <thead class="table-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Product</th>
                  <th scope="col">Category</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Stock</th>
                  <th scope="col">Price</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <!-- Product rows go here -->
              </tbody>
            </table>
          </div>
        </div>
      </div>





@endsection
