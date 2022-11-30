<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus Onotodewe | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Logo Tittle Bar -->
    <link rel="icon" href="img/usmanhome/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="usman/css/style.css">
    <link rel="stylesheet" href="usman/css/usmanresponsive.css" />
</head>

<body>

    @include('partials.navbar')

    <br><br><br>
    <section id="panduan">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12 text-justify">
                    <h2>
                        Lokasi
                    </h2>
                    <h3>Onotodewe</h3>
                    <div class="mt-3 embed-responsive embed-embed-responsive-21by9">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.575570601251!2d110.48657035872817!3d-7.336917799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a784c4085dd61%3A0x42c6fb1d7c366eab!2sLapangan%20Sepak%20Bola%20Kembangarum!5e0!3m2!1sen!2sid!4v1669817454139!5m2!1sen!2sid" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
    </section>
    <br><br>


    @include('partials.footer')
    <script src="js/usmanhome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>