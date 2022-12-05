@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Author List</h1>
</div>

<div class="table-responsive col-lg-6">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Author List</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($admins as $admin)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $admin->name }}</td>
        </tr>
        @endforeach

          </tbody>
        </table>
      </div>

@endsection

