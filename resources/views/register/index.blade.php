<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus Onotodewe | {{ $title }}</title>
    <!-- Logo Tittle Bar -->
    <link rel="icon" href="img/usmanhome/logo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="rio/css/style.css">
</head>

<body>
    @include('partials.navbar')
    <br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-lg-5 mt-3">

            <main class="registerbox">
                <img src="/img/usmanhome/Group 1.png" class="avatar2">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <title for="email">Please Register here</title>
                <form action="/register" method="post">
                    @csrf
                    <div class="input">
                        <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input">
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email@example.com" required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="input">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button class="submit" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered? &nbsp;<a href="/login">Login</a></small>
            </main>
        </div>
    </div>
    <br><br><br><br>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>