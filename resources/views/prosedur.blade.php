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
                        Prosedur
                    </h2>
                    <h3>Perpustakaan Onotodewe</h3>
                </div>

                <ol class="custom-order-list ms-3 mt-3">
                    <li>Prosedur untuk menggunakan fitur Onotodewe adalah : Pengguna harus registrasi terlebih dahulu bila belum memiliki akun. Jika sudah memiliki akun, pengguna dapat login untuk mengakses fitur dari Onotodewe.</li>
                    <li>Prosedur untuk Add New Book di Onotodewe adalah: Pengguna harus menyiapkan gambar cover sesuai dengan ketentuan yang ada di Tata Tertib. Untuk penulisan judul dan isi konten juga harus sesuai dengan yang ada di Tata Tertib.</li>
                    <li>Prosedur untuk Kelayakan Buku di Onotodewe adalah: Harus memiliki ketentuan buku yang sama seperti di Tata Tertib. Pengguna yang hendak menghapus dan menambahkan buku harus memiliki ijin dan lolos uji kelayakan dari Admin dengan cara menghubungi Admin terlebih dahulu.</li>



                </ol>
            </div>
        </div>
    </section>
    <br><br>



    @include('partials.footer')
    <script src="js/usmanhome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>