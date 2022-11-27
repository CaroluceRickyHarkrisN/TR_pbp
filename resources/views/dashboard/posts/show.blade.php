@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-10">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success rounded-pill"><span data-feather="arrow-left"></span></a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning rounded-pill"><span data-feather="settings"></span></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger rounded-pill" onclick="return confirm('Delete ?')"><span data-feather="trash-2"></span></button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-fluid my-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid my-3">
                @endif

                <article class="my-3 fs-6">
                    <p>{!! $post->body !!}</p>
                </article>


                <a href="/posts" class="btn btn-dark rounded-pill">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
