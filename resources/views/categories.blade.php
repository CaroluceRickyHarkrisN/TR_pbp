@extends('layouts.main')
@section('container')

    <center><h1 class="mb-5">Categories</h1></center>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-3">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h3 class="card-title text-center flex-fill p-4" style="background-color:rgba(0, 0, 0, 0.7)">{{ $category->name }}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>

@endsection

