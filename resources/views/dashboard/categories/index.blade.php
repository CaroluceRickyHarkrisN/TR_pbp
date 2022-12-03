@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Book Categories</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6">
        <a href="/dashboard/categories/create" class="btn btn-primary mb-3 rounded-pill"> Create New Category</a>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Category Name</th>
              <th scope="col">Setting</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-dark rounded-pill"><span data-feather="eye"></span></a>
                <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning rounded-pill"><span data-feather="settings"></span></a>
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0 rounded-pill" onclick="return confirm('Delete ?')"><span data-feather="trash-2"></span></button>
                </form>
              </td>
            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
@endsection

