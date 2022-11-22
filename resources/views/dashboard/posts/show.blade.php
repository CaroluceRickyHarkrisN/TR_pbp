@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-10">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
                <a href="" class="btn btn-warning"><span data-feather="settings"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid my-3">

                <article class="my-3 fs-6">
                    <p>{!! $post->body !!}</p>
                </article>


                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>
@endsection
