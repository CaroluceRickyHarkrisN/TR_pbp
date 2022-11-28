@extends('layouts.main')
@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}" >
                    <button class="btn btn-dark" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow:hidden">
                    <img src="{{ asset('storage/'.$posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="card-img-top">
                </div>
            @else
                <img src="https://picsum.photos/1200/400?{{ $posts[0]->category->name }}&1" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            @endif
             <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p><small class="text-muted">Author : <a href="/posts?author={{ $posts[0]->author->username }} " class="text-decoration-none">{{ $posts[0]->author->name }}</a> | Category : <a href="/posts?category={{ $posts[0]->category->slug }}"class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
            {{-- <p class="card-text">{{ $posts[0]->excerpt }}</p> --}}
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-dark rounded"><i class="bi bi-book"></i> Read</a>
            </div>
        </div>


    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-6 mb-3">
                <div class="card rounded">
                    <div class="position-absolute px-2 py-2 rounded" style="background-color:rgba(0, 0, 0, 0.7)" ><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                    @if ($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="card-img-top">
                    @else
                        <img src="https://picsum.photos/1920/1080?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p><small class="text-muted"><a href="/posts?author={{ $post->author->username }}" class="text-decoration-none ">{{ $post->author->name }} | {{ $post->created_at->diffForHumans() }}</small></p>
                      {{-- <p class="card-text text-decoration-none text-dark">{{ $post->excerpt }} <br><br></p> --}}
                      <a href="/posts/{{ $post->slug }}" class="btn btn-dark rounded"><i class="bi bi-book"></i> Read</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="d-flex justify-content-center">{{ $posts->links() }}</div>


@endsection

