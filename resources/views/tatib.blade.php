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
                        Tata Tertib
                    </h2>
                    <h3>Perpustakaan Onotodewe</h3>
                </div>

                <ol class="custom-order-list ms-3 mt-3">
                    <li>Pengguna wajib untuk memiliki akun dahulu jika ingin menggunakan fitur dari Onotodewe, bagi yang belum memiliki akun bisa melakukan Registrasti terlebih dahulu.</li>
                    <li>Bagi pengguna yang hendak new Book di Dashbord, harus menyiapkan gambar cover dengan ukuran 1mb.</li>
                    <li>Demi menjaga kerapian halaman Book pada website, pengguna harus menyiapkan gambar cover dengan ukuran gambar 1029 x 720 atau 1029 x 720 pixel.</li>
                    <li>Pengguna dilarang menghapus konten buku di Dashboard, tanpa sepengtahuan dari Admin.</li>
                    <li>Bagi yang hendak menghapus konten buku pada Dashboard, harus ijin ke Admin dulu, agar dapat dipantau terlebih dahulu kelayakan buku tersebut.</li>
                    <li>Ketika hendak Add New Book pada Dashboard, untuk kolom Slug harap dikosongi saja, karena kolom tersebut akan otomatis mengisi.</li>
                    <li>Pengguna hanya boleh menambahkan buku dengan konten yang tidak mengandung unsur negatif.</li>
                    <li>Pengguna diharapkan memberikan judul buku dengan penulisan Abjad yang baik dan benar.</li>
                    <li>Jika konten pengguna yang di upload dianggap tidak layak oleh Admin, maka konten tersebut akan langsung dihapus.</li>
                    <li>Bagi pengguna yang mengalami masalah bisa langsung menghubungi Admin, untuk Contact Admin berada di bagian bawah Website.</li>
                    <li>Pengguna Onotodewe diharapkan dapat mematuhi peraturan dan tata tertib yang sudah ditentukan.</li>


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