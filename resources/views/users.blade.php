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


  <section class="section dashboard">
    <div class="row">
            <table>
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date created</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @if (count($all_users) > 0)
                        @foreach ($all_users as $item)
                            <tr>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->created_at->format('F d, Y')}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>

                        @endforeach
                    @else
                    <tr>
                        <td colspan="4" style="text-align: center;">No users found.</td>
                    </tr>

                    @endif
                </tbody>
            </table>




    </div>
  </section>
@endsection
