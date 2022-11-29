@extends('layouts.main')
@section('container')

<br><br><br><br>
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

        <!-- Card Rekomendasi -->
        <div class="row">
            @foreach ($posts as $post)
            <!-- Buku1 -->
            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-evenly">
                <div class="card mt-5 p-2" style="width: 25rem;">
                    @if ($post->image)
                        <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->category->name }}" class="img-keterangan">
                    @else
                        <img src="https://picsum.photos/1920/1080?{{ $post->category->name }}" class="img-keterangan" alt="{{ $post->category->name }}">
                    @endif
                    <div class="card-body">
                        <h4 class="lh-sm">{{ $post->title }}</h4>
                    </div>

                    <!-- Keterangan -->
                    <div class="card-keterangan d-flex justify-content-between px-4">
                        <span>
                            <img src="img/usmanhome/genre.png" alt="" class="img-keteranganicon">
                            <p>{{ $post->category->name }}</p>
                        </span>

                        <span>
                            <img src="img/usmanhome/penulis.png" alt="" class="img-keteranganicon">
                            <p>{{ $post->author->username }}</p>
                        </span>

                        <span>
                            <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-dark rounded"><i class="bi bi-book"></i> Read</a>
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>

    <br>
    <div class="d-flex justify-content-center">{{ $posts->links() }}</div>


@endsection

