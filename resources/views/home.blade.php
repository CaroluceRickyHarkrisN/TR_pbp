<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus Onotodewe | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="usman/css/style.css">
    <link rel="stylesheet" href="usman/css/usmanresponsive.css" />
</head>
<body>

    @include('partials.navbar')

    <section id="hero">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-4 col-md-12 hero-judul my-auto">
                <h1>Siap Melayani Anda Kapan Saja.</h1>
                <p>
                    <span class="fw-bold">Perpustakaan Onotodewe</span>
                    hadir untuk membantu anda dalam memberikan informasi mengenai panduan, buku, dan
                    update lainnya dari Perpustakaan Onotodewe.
                </p>
                <button class="button-secondary">
                    <a href="/posts" style="text-decoration: none; color: white">Lihat Buku</a>
                </button>
                <a href="/posts">
                    <img src="img/usmanhome/back.png" alt="" width="30px" height="30px" /></a>
            </div>
        </div>
        <img src="img/usmanhome/perpus.png" alt="" class="h-100 position-absolute top-0 end-0 img-hero my-auto" />
    </div>
</section>

<!-- Layanan Section -->
<section id="layanan">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 text-justify">
                <h2 style="color: rgb(47, 50, 50); font-weight: 500;">
                    <center>Panduan Perpustakaan</center>
                </h2>
                <center>
                    <p>Siap memberikan informasi mengenai panduan Perpustakaan Onotodewe untuk anda.</p>
                </center>
            </div>
        </div>
    </div>

    <!-- Panduan -->
    <section id="panduan" class="mt-5 mb-5 overflow-hidden">
        <div class="container position-relative">
                    <div id="carouselExampleControls" class="row carousel slide" data-bs-ride="carousel">
                        <div class="col-12 d-flex justify-content-start carousel-inner">

                            <!-- Panduan1 -->
                            <div class="carousel-item active card-panduan mb-5 me-5 position-relative">
                                <img class="imgpanduan d-flex justify-content-evenly" src="img/usmanhome/panduan3.jpg" alt="" />
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 h-100 d-flex justify-content-evenly">
                                    <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                        <h5>Tata Tertib</h5>
                                        <p style="color: #fff;">Kamu dapat membaca panduan tata tertib yang berlaku pada perpustakaan ini.</p>
                                        <button class="button-secondary2">Lihat Tata tertib</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Panduan2 -->
                            <div class="carousel-item card-panduan mb-5 me-5 position-relative">
                                <img class="imgpanduan d-flex justify-content-evenly" src="img/usmanhome/panduan1.jpg" alt="" />
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 h-100 d-flex justify-content-evenly">
                                    <div class="position-absolute top-50 start-50 translate-middle text-center w-120">
                                        <h5>Prosedur Perpustakaan</h5>
                                        <p style="color: #fff;">Kamu dapat membaca prosedur-prosedur yang berlaku pada perpustakaan ini.</p>
                                        <button class="button-secondary2">Lihat Prosedur</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Panduan3 -->
                            <div class="carousel-item card-panduan mb-5 me-5 position-relative">
                                <img class="imgpanduan d-flex justify-content-evenly " src="img/usmanhome/panduan5.jpg" alt="" />
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 h-100 d-flex justify-content-evenly">
                                    <div class="position-absolute top-50 start-50 translate-middle text-center w-120">
                                        <h5>Lokasi Perpustakaan</h5>
                                        <p style="color: #fff;">Kamu dapat mengetahui lebih lanjut mengenai lokasi tepat dari perpustakaan ini.</p>
                                        <button class="button-secondary2">Lihat Lokasi</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Panduan5 -->
                            <div class="carousel-item card-panduan mb-5 me-5 position-relative">
                                <img class="imgpanduan d-flex justify-content-evenly" src="img/usmanhome/panduan2.jpg" alt="" />
                                <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 h-100 d-flex justify-content-evenly">
                                    <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                                        <h5>FAQ</h5>
                                        <p style="color: #fff;">Kamu dapat mengetahui lebih lanjut seputar pertanyaan yang sering ditanyakan.</p>
                                        <button class="button-secondary2">Lihat FAQ</button>
                                    </div>
                                </div>
                            </div>

                        </div>

                <button class="carousel-control-prev button-arrow-left position-absolute start-5 mx-5 top-50 translate-middle-y" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <img class="arrow-left" src="img/usmanhome/next.png" alt="">
                </button>

                <button class="carousel-control-next button-arrow-left position-absolute end-5 mx-5 top-50 translate-middle-y" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <img class="arrow-right" src="img/usmanhome/back.png" alt="">
                </button>
            </div>

        </div>
    </section>

    <!-- Manfaat Onotodewe -->
    <section id="manfaat">
        <div class="container">
            <div class="row mt-5 mb-5 text-center">
                <div class="col-12 mt-5 mb-5 hero-manfaat">
                    <h2 style="font-weight: 700;">
                        Onotodewe, Layanan Perpustakaan Digital
                    </h2>
                    <p style="font-weight: 400;" class="mt-5">Nikmati kemudahan
                        membaca Novel, buku Ilmu Pengetahuan dan lain-lain. Terlengkap dalam satu
                        aplikasi.</p>
                    <p style="font-weight: 400;" class="mt-2">Coba gunakan Onotodewe sekarang!</p>
                    <center>
                        <button class="button-secondary1 mt-3 mb-5">
                            <a href="/about" style="text-decoration: none; color: white">Info Lebih Lanjut</a>
                        </button>
                    </center>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Card Testimoni -->
    <br>
    <section id="Testimoni">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-12 text-center">
                    <h2 style="color: rgb(47, 50, 50); font-weight: 500;">
                        Testimoni dari Pengguna Onotodewe
                    </h2>
                </div>
            </div>

            <!-- Membuat Card -->
            <div class="row mt-5 mb-5">
                <div class="col-md-4 text-center">
                    <div class="card-teknik">
                        <!-- Membuat iconya berada ditengah lingkaran -->
                        <div class="circle-icon position-relative mx-auto">
                            <img src="img/usmanhome/dosen.jpg" height="90px" width="100px" alt="" class="position-absolute top-50 start-50 translate-middle gambar">
                        </div>
                        <h3 class="mt-4">Sarah Berliana</h3>
                        <p class="mb-5">Setelah menggunakan Onotodewe, saya lebih mudah dalam memberikan ilmu pengetahuan untuk anak-anak.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-teknik">
                        <!-- Membuat iconya berada ditengah lingkaran -->
                        <div class="circle-icon position-relative mx-auto">
                            <img src="img/usmanhome/women.jpg" height="90px" width="100px" alt="" class="position-absolute top-50 start-50  translate-middle gambar">
                        </div>
                        <h3 class="mt-4">Sulastri</h3>
                        <p class="mt-3 ">Onotodewe memudahkan saya dalam membaca buku-buku yang saya cari dan butuhkan.</p>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <div class="card-teknik">
                        <!-- Membuat iconya berada ditengah lingkaran -->
                        <div class="circle-icon position-relative mx-auto">
                            <img src="img/usmanhome/pelajar.jpg" height="90px" width="100px" alt="" class="position-absolute top-50 start-50      translate-middle gambar">
                        </div>
                        <h3 class="mt-4">Tukinem</h3>
                        <p class="mt-3 text-teknik">Bagi Dosen seperti saya, Onotodewe sangat membantu saya dalam mencari materi untuk mengajar.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="contact">
        <div class="container-fluid overlay h-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Butuh Konsultasi? Silahkan kontak kami, kami siap membantu</h3>
                        <div class="kontak">
                            <h6>Kontak</h6>
                            <div class="mb-2 icon">
                                <img src="img/usmanhome/location.png" alt="" width="20px" height="20px"><a href="#">Jl. Nakula Sadewa 2 Kembangarum, Salatiga</a>
                            </div>

                            <div class="mb-2 icon">
                                <img src="img/usmanhome/telepon.png" alt="" width="20px" height="20px"><a href="#">0298-316-306</a>
                            </div>

                            <div class="mb-2 icon">
                                <img src="img/usmanhome/email.png" alt="" width="20px" height="20px"><a href="#">onotodewe@gmail.com</a>
                            </div>

                            <h6>Social Media</h6>
                            <div class="mb-5 icon">
                                <img src="img/usmanhome/ig.png" alt="" width="20px" height="20px"><a href="#">onotodewe_</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-contact w-100">
                            <form>
                                <h2>Ada Pertanyaan...?</h2>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput" class="d-flex align-items-center">Masukkan Email anda disini</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput class=" d-flex align-items-center"">Pertanyaan Anda...</label>
                                </div>

                                <button type="submit" class="button-kontak">Kirim</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    @include('partials.footer')
      <script src="js/usmanhome.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


