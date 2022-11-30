<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus Onotodewe | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="rio/css/style.css">
</head>
<body>

    @include('partials.navbar')
    <br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-4 mt-3">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <a type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <a type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                </div>
            @endif
            <br>
            <br>
            <main class="loginbox">
                <br>
                <img src="/img/riologreg/avatar2.png" class="avatar">
                <br>
                <br>
                <br>
                <br>


                <form action="/login" method="post">
                    @csrf
                    <div class="input">
                        <title for="email">Sign in to Onotodewe</title>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"  placeholder="Email address" autofocus required value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    </div>
                        @enderror

                    <div class="input">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>

                    </div>

                    <button class="submit" type="submit">Login</button>
                </form>

                <small class="d-block text-center mt-3">Not registered? &nbsp;<a href="/register">Register</a></small>
            </main>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

