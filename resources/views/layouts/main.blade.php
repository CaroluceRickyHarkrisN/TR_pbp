<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpus Onotodewe | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        /* Membuat Variabel */
:root {
    --pr-color: #000000;
  }

  * {
    z-index: 2;
  }

  .button-primary{
    background-color: #1B72FF;
    color: #fff;
    border: none;
    font-size: 16px;
    font-weight: 700;
    width: 100px;
    height: 30px;
    border-radius: 50px;
  }

  .button-primary:hover{
    background-color: #1d5fc9;

    transition: all .2s ease-in;
  }

  #hero {
    background: var(--pr-color);
    height: 100vh;
    width: 100%;
  }

  .img-hero {
    height: 100%;
    width: 1000px;
    z-index: 1;
  }

  .hero-judul h1 {
    color: #fff;
    font-weight: 700;
    font-size: 40px;
    line-height: 70px;
  }

  .hero-judul p {
    color: #fff;
    font-size: 18px;
    margin-bottom: 60px;
    margin-top: 18px;
    line-height: 30px;
    width: 100%;
  }

  .button-secondary {
    width: 133px;
    height: 40px;
    background-color: #1B72FF;
    color: #fff;
    border: none;
    font-size: 16px;
    font-weight: 700;
    margin-left: 0em;
    margin-top: -10px;
    border-radius: 50px;
  }

  .button-secondary2{
    width: 133px;
    height: 40px;
    background-color: #1B72FF;
    color: #fff;
    border: none;
    font-size: 16px;
    font-weight: 700;
    margin-left: 0em;
    margin-top: -10px;
    border-radius: 50px;
  }

  .button-secondary:hover {
    background-color: #1d5fc9;

    transition: all .2s ease-in;
  }

  /* Card Panduan */

  .card-panduan h5{
    color: #fff;
    font-size: 36px;
    font-weight: 600;
  }

  .card-panduan p{
    font-size: 16px;
    margin-left: 20px;
    margin-right: 20px;
  }

  .card-panduan button{
    background-color: #1B72FF;
    margin-top: 10px;
    color: #fff;
    border: none;
    width: 150px;
    height: 45px;
    font-size: 18px;
    font-weight: 500;
    border-radius: 50px;
  }

  .card-panduan .overlay{
    background-color: rgb(0, 0, 0, 0);
    opacity: 0;
    transition: all ease-in-out .3s;
    border-radius: 0.375rem;
    width: 45%;
    margin-left: 365px;
  }

  .card-panduan .overlay:hover{
    background-color: rgb(0, 0, 0, 0.6);
    opacity: 1;
    border-radius: 0.375rem;
    width: 45%;
    margin-left: 365px;
  }

  .imgpanduan{
    width: 45%;
    aspect-ratio: 5/4;
    border-radius: 0.375rem;
    box-shadow: 3px 4px 6px 6px rgb(0 0 0 / 10%);
    height: 300px;
    background-size: cover;
    background-repeat: no-repeat;
    margin-left: 365px;
  }

  .arrow-left{
    width: 40px;
    height: 40px;
    position: relative;
    margin-right: 5px;
    z-index: 3;
  }

  .arrow-right{
    width: 40px;
    height: 40px;
    position: relative;
    margin-left: 5px;
    z-index: 3;
  }

  .button-arrow-left{
    border: none;
    border-radius: 50%;
    width: 61px;
    height: 61px;
    background-color: #1B72FF;
    padding: 0;
    z-index: 3;
  }

  .button-arrow-left:hover{
    background-color: #1d5fc9;

    transition: all .2s ease-in;
  }

  .button-arrow-right{
    border: none;
    border-radius: 50%;
    width: 61px;
    height: 61px;
    background-color: #1B72FF;
    padding: 0;
    z-index: 3;
  }

  .button-arrow-right:hover{
    background-color: #1d5fc9;

    transition: all .2s ease-in;
  }

  /* Keterangan */
  .card{
    height: 430px;
    width: 95%;
    border: none;
    box-shadow: 3px 4px 6px 6px rgb(0 0 0 / 10%);
    border-radius: 0.375rem;
  }

  .img-keterangan{
    height: 1080;
    width: 1920;
  }

  .img-keteranganicon{
    width: 20px;

  }

  .card-body h4{
    color: #000;
    font-weight: 700;
    font-size: 24px;
    line-height: .8rem;
  }

  .card-body p{
    color: var(--pr-color);
    font-weight: 400;
    font-size: 14px;
  }

  .card:hover{
    background: linear-gradient(170deg,var(--pr-color), #212424,#000000);
    box-shadow: 3px 4px 6px 6px rgb(0 0 0 / 10%);
    transition: all ease-in-out .3s;
  }

  .card:hover .card-body h4 {
    color: #fff;
    transition: all ease-in-out .3s;
  }

  .card:hover .card-body p {
    color: #fff;
    transition: all ease-in-out .3s;
  }

  .card-keterangan {
    position: absolute;
    right: 0;
    left: 0;
    bottom: 10px;
    background-color: #fff;
  }

  .card-keterangan span{
    font-weight: 500;
    margin-top: 18px;
    color: #000;
  }

  .card-keterangan p{
    font-size: 14px;
    color: #000;
  }

  .lihat{
    color: #000;
    font-size: 18px;
  }

  .lihat:hover{
    color: #1B72FF;
  }

  /* Manfaat */

  #manfaat{
    background: var(--pr-color);
    height: 45vh;
    width: 100%;
    color: #fff;
  }

  .img-manfaat{
    width: 681px;
    height: 100%;
    z-index: 1;
  }

  .hero-manfaat p {
    font-weight: 400;
    line-height: 40px;
    z-index: 2;
    font-size: 24px
  }

  .button-secondary1 {
    width: 160px;
    height: 50px;
    background-color: #1B72FF;
    color: #fff;
    border: none;
    font-size: 16px;
    font-weight: 700;
    margin-left: 0em;
    border-radius: 50px;
  }

  .button-secondary1:hover {
    background-color: #1d5fc9;

    transition: all .2s ease-in;
  }

  .text-manfaat{
    margin-top: 100px;
  }

  /* Testimoni */

  /* Card */
  .card-teknik {
      width: 100%;
      height: 260px;
      border-radius:0.375rem ;
      background-color: #fff;
      color: var(--pr-color);
      padding: 40px;

      transition: all ease-in-out 0.3s ;
  }

  /* Kondisi ketika card hover */
  .card-teknik:hover {
      width: 100%;
      height: 260px;
      border-radius: 0.375rem;
      background-color: var(--pr-color);
      color: #fff;
      padding: 40px;
      box-shadow: 3px 4px 6px 6px rgb(0 0 0 / 10%);

      transition: all ease-in-out 0.3s ;
  }

  .card-teknik h3 {
      font-size: 20px;
  }

  .card-teknik p {
      font-size: 16px;
      font-style: normal;
      font-weight: 400;
      line-height: 20px;
      letter-spacing: 0;
  }

  .circle-icon {
      width: 85px;
      height: 85px;
      border-radius: 50%;
  }

  .gambar{
    border-radius: 50%;
  }

  /* Kontak */
  #contact{
    background-image: url(/img/usmanhome/bg.jpg);
    margin-top: 120px;
    background-size: cover;
    background-repeat: no-repeat;
  }

  #contact .overlay{
    background: rgba(0,0,0,0.6);
  }

  #contact .container{
    padding: 148px 0 148px 0;
  }

  #contact h3{
    font-weight: 700;
    font-size: 40px;
    line-height: 60px;
    color: #fff;
    margin-left: 10px;
  }

  .kontak h6{
    font-weight: 600;
    font-size: 18px;
    line-height: 27px;
    color: #fff;
    margin: 19px 0 14px 0;
    margin-left: 10px;
  }

  .kontak a{
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 18px;
    color: #fff;
    text-decoration: none;
    margin-left: 18px;
  }

  .icon{
    margin-left: 10px;
  }

  .card-contact h2{
    color: #1B72FF;
    font-style: normal;
    font-weight: 700;
    font-size: 40px;
    line-height: 60px;
    text-align: center;
    margin-bottom: 21px;
  }

  .card-contact{
    width: 100%;
    height: 445px;
    background-color: #fff;
    border-radius: 0.375rem;
    padding: 52px 48px 52px 48px;
  }


  .form-floating label{
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    color: rgb(23, 23, 23);
    align-items: center;
  }

  .button-kontak{
    width: 100%;
    height: 75px;
    background: #1B72FF;
    border: none;
    font-style: normal;
    font-weight: 700;
    font-size: 24px;
    line-height: 36px;
    color: #fff;
    border-radius: 50px;
  }

  .button-kontak:hover{
    background-color: #1d5fc9;

    transition: all ease-in-out .2s;
  }



    </style>
    <link rel="stylesheet" href="style.css">



    <!-- Logo Tittle Bar -->
    <link rel="icon" href="img/usmanhome/logo.png" type="image/x-icon">
</head>
<body>

    @include('partials.navbar')

      <div class="container">
        @yield('container')
      </div>

    @include('partials.footer')

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
