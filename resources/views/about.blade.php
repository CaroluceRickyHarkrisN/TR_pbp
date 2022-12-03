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
    <link rel="stylesheet" href="hasan/css/hasanresponsive.css">
</head>

<body>

    @include('partials.navbar')
    <br><br>
    <section id="hero">
        <div class="container h-100">
            <div class="row">
                <div class="kotak h-50 bg-dark bg-opacity-50">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="hero1 col-lg-4 col-md-12 hero-judul mx-auto my-5 mt-5">
                                    <h1>About Us</h1>
                                    <hr />
                                    <h2>Perpustakan Onotodewe</h2>
                                    <button id="selengkapnya" class="btn btn-primary rounded-pill px-4 py-2 fs-5 mt-5" onclick="window.location.href='#about1'">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="About">
        <div id="about1" class="content-box-lg card card-body border border-0">
            <div class="container">
                <div class="row">
                    <hr />
                    <div class="col-md-4">
                        <div class="about-item text-center card card-body border-0">
                            <i class="fa fa-book"></i>
                            <h3>Sejarah</h3>
                            <hr>
                            <p style="text-align: justify"> Perpustakaan Onotodewe didirikan oleh 4 Mahasiswa UKSW pada tanggal 3 Desember 2022 yang diharapkan mampu bersaing dengan perpustakaan-perpustakaan digital lainnya. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item text-center card card-body border-0">
                            <i class="fa fa-globe"></i>
                            <h3>Visi Misi</h3>
                            <hr>
                            <p style="text-align: justify"> Onotodewe memiliki tujuan untuk meningkatkan budaya membaca yang saat ini sudah mulai hilang. Diharapkan dengan adanya Web ini, dapat membantu pengguna dalam menemukan buku yang di inginkan. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item text-center card card-body border-0">
                            <i class="fa fa-pencil"></i>
                            <h3>Penghargaan</h3>
                            <hr>
                            <p style="text-align: justify"> Beberapa pengharagaan yang di dapat Onotodewe yaitu : Perpustakaan Digital Terbaik, Peringkat 2 Perangkingan Repository Institusi, Perpustakaan Digital Terlengkap, dan masih banyak lagi. </p>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-4">
                        <div class="about-item text-center card card-body border-0">
                            <i class="fa fa-book"></i>
                            <h3>Fitur</h3>
                            <hr>
                            <p style="text-align: justify"> Untuk saat ini fitur-fitur yang dimiliki oleh Onotodewe yaitu, fitur pencarian yang berdasarkan kategori, fitur untuk membaca buku, dan fitur untuk membuat buku anda sendiri. </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item text-center card card-body border-0">
                            <i class="fa fa-globe"></i>
                            <h3>Keunggulan</h3>
                            <hr>
                            <p style="text-align: justify"> Keunggulan Onotodewe yaitu terletak pada biaya yang harus di keluarkan, karena Onotodewe memiliki tugas mulia untuk mencerdaskan kehidupan bangsa sehingga 100% gratis.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="about-item text-center card card-body border-0">
                            <i class="fa fa-pencil"></i>
                            <h3>Partner</h3>
                            <hr>
                            <p style="text-align: justify"> UKSW Salatiga, Kemendikbud, Kompas Gramdedia, Media Indonesia, Tribunnews, JatengPost, Pemkot Salatiga, BCA, Bank Jateng, Deepublish, Gramedia, dan masih banyak lagi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <hr />
                <br>
                <h2>Creator</h2><br><br><br>
                <div class="col-md-3">
                    <div class="about-item text-center card card-body border-0 shadow-lg p-3 mb-5 bg-body rounded">
                        <i class="fa fa-book"></i>
                        <img src="https://seruntinggumaysakti.com/wp-content/uploads/2020/09/%E2%80%94Pngtree%E2%80%94user-vector-avatar_4830521.png" class="img-fluid rounded-5">
                        <hr>
                        <h4>Michael Rio Aditya</h4>
                        <h4>672020188</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-item text-center card card-body border-0 shadow-lg p-3 mb-5 bg-body rounded">
                        <i class="fa fa-globe"></i>
                        <img src="https://seruntinggumaysakti.com/wp-content/uploads/2020/09/%E2%80%94Pngtree%E2%80%94user-vector-avatar_4830521.png" class="img-fluid rounded-5">
                        <hr>
                        <h4>Caroluce Ricky H. N.</h4>
                        <h4>672020191</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-item text-center card card-body border-0 shadow-lg p-3 mb-5 bg-body rounded">
                        <i class="fa fa-pencil"></i>
                        <img src="https://seruntinggumaysakti.com/wp-content/uploads/2020/09/%E2%80%94Pngtree%E2%80%94user-vector-avatar_4830521.png" class="img-fluid rounded-5">
                        <hr>
                        <h4>Hasan Dwi Santoso</h4>
                        <h4>672020198</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="about-item text-center card card-body border-0 shadow-lg p-3 mb-5 bg-body rounded">
                        <i class="fa fa-pencil"></i>
                        <img src="https://seruntinggumaysakti.com/wp-content/uploads/2020/09/%E2%80%94Pngtree%E2%80%94user-vector-avatar_4830521.png" class="img-fluid rounded-5">
                        <hr>
                        <h4>Usman Syach</h4>
                        <h4>672020201</h4>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>