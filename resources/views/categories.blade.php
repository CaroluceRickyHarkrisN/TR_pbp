<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus Onotodewe | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="hasan/css/style.css">
</head>
<body>

    @include('partials.navbar')

    <center><h1 class="mb-5">Categories</h1></center>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col-md-4 mb-3">
                <a href="/posts?category={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://picsum.photos/500/500?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h3 class="card-title text-center flex-fill p-4" style="background-color:rgba(0, 0, 0, 0.7)">{{ $category->name }}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    @include('partials.footer')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


