@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Books</h1>
    </div>

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/posts/create" class="btn btn-primary mb-3"> Add New Book</a>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Setting</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td>
                <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-dark"><span data-feather="eye"></span></a>
                <a href="" class="badge bg-warning"><span data-feather="settings"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="trash-2"></span></a>
              </td>
            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
@endsection
