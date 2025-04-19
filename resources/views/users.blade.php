@extends('layouts.head')

@section('users')
<div class="pagetitle">
    <h1>Users</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
        <li class="breadcrumb-item active">Users</li>
      </ol>
    </nav>
  </div>


  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Users</h5>

      <table class="table datatable">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($all_users as $index => $user)
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></a>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>


@endsection
