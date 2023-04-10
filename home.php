<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Studium Learn</title>
  <link rel="stylesheet" type="text/css" href="style.rumah.css">
  <link rel="stylesheet" type="text/css" href="style-ikon.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <style>
    .vidiopembayaran {
      margin: 120px 90px;
      margin-bottom: 20px;
      background-color: whitesmoke;
      width: auto;
      position: relative;
      text-align: center;

      background: none;
    }

    .vidiopembayaran img {
      height: 200px;

    }

    .tampilaninfo {
      display: flex;
      margin: auto;
    }

    main {
      background-color: white;

    }

    .tampilanpbr {
      display: flex;
      background-size: cover;
      padding-bottom: 20px;
      margin-left: 50px;
      padding-top: -60px;
    }

    .slide1 {
      background-position-x: 324px;
      background-image: url(./gambar/backgroundslide1.png);
      background-repeat: no-repeat;
      background-size: contain;
      height: 600px;

    }

    .textslide1 {
      position: absolute;
      top: 180px;
      margin-left: 60px;
      animation: animasividio 1.5s 1;
    }

    .navbarslide1 {

      font-weight: bold;
      color: #8479F4;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 50px;


    }

    .tombol-more {
      padding: 13px 35px;
      background: #6EB0FF;
      border-radius: 10px;
      background-size: cover;
      color: white;
      text-align: center;
      text-decoration: none;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: bold;

    }

    .penjelas {
      margin-top: -20px;
      font-size: 20px;
      font-weight: 500;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-shadow: 0 2px white;
      margin-right: 20px;
    }

    .iframepembayaran {
      height: 300px;
      width: 500px;
    }

    .vidiopembayaran h2 {
      color: white;
      font-size: 45px;
      top: -60px;
    }

    .ikon h2 {
      font-size: 50px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: bold;
    }

    @keyframes animasividio {
      0% {
        margin-top: 400px;
      }

      100% {
        margin-top: 10px;
      }
    }


    @keyframes animasiheader {
      0% {
        margin-left: -70px;

      }

      50% {
        margin-left: 140px;
      }

      100% {
        margin-left: 0px;
      }
    }

    @media (min-width:200px) and (max-width:1000px) {
      .tahukah {
        font-size: 5px;
        width: 250px;
      }

      .body {
        margin: 0px;
        padding: 0px;
        width: 1200px;


      }


      .slide1 {
        background-position-x: none;
        background-image: url(./gambar/backgroundslide1.png);
        background-repeat: no-repeat;
        background-size: 700px;
        margin-top: 120px;
      }

      .slide1 h1 {
        margin-left: -20px;
        margin-bottom: -10px;
      }

      .textslide1 {
        position: relative;
        top: 60px;
        margin-left: 20px;
        animation: animasividio 1.5s ease backwards;
      }

      .tampilanpbr {
        display: inline;
        margin: 10px;
        padding: 0px;
        height: auto;
        background-image: url(./gambar/background-slide2.png);
        background-size: cover;


      }

      .iframepembayaran {
        width: 300px;
        height: 200px;
      }

      .vidiopembayaran {
        margin: 50px 10px;
        padding-bottom: 30px;
        width: auto;
        background: whitesmoke;
        position: relative;
        text-align: center;

        height: 400px;
      }

      .vidiopembayaran h2 {
        color: #D62AD0;
      }

    }
  </style>
  <?php
  include('botstap.php');
  ?>
  <main>
    <div class="slide1">
      <div class="textslide1">
        <h1 class="navbarslide1" style="color: #3AF2B2;  animation: animasiheader 3s 1 ;  ;">STUDIUM<span class="navbarslide1"> LEARN</span></h1><br>
        <div class="penjelas">
          <p>Nikmati pembelajaran Bimbel Privat online Via Zoom atau Gmeet.<br>Dengan batas siswa 1-6 orang, kondisi kelas yang kondusif, Jadwal Fleksible,<br> Materi yang Efisien, dan penutor berasal dari generasi milenial.<br>
            Sehingga belajar Menjadi Lebih asik dan efektif dengan Studium Learn. </p>

        </div>

        <br>
        <br>
        <a class="tombol-more" href="../info-studiumlearn.php">MORE INFORMATION</a>
      </div>
    </div>

    <div class="infopromosi">
      <?php include('infostudium.php') ?>
    </div>


    <section id="tampilanpbrr">
      <div class="tampilanpbr">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width:550px ;">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./gambar/about us.jpg" class="d-block w-100" alt="Gambar Lagi Load" style=" width:550px ;height : 550px ; padding:30px; margin-top:50px ; margin-left:20px;">
              <div class="carousel-caption d-none d-md-block">

                <!--tulis di sini  -->

              </div>
            </div>
            <div class="carousel-item">
              <img src="./gambar/apaitustudium.jpg" class="d-block w-100" alt="Gambar lagi Load" style=" width:550px ;height : 550px ; padding:30px; margin-top:50px ; margin-left:20px;">
              <div class="carousel-caption d-none d-md-block">

                <!--tulis di sini  -->

              </div>
            </div>
            <div class="carousel-item">
              <img src="./gambar/benefitstudium.jpg" class="d-block w-100" style=" width:550px ;height : 550px ; padding:30px; margin-top:50px ; margin-left:20px;" alt="Gambar Lagi Load">
              <div class="carousel-caption d-none d-md-block">

                <!--tulis di sini  -->

              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <section id="carapembayaran">
          <div class="vidiopembayaran">
            <h2><b>Penjelasan Studium</b></h2><br>
            <!-- https://www.youtube.com/embed/NvkuZi0fmMo?rel=0 -->
            <iframe width="460" height="280" src="https://www.youtube.com/embed/ugXPXKZ3wIk" title="YouTube video player" frameborder="0" style="border-radius: 10px;   box-shadow: 0 0 10px #787A91;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- cara menulis link youtube pada html -->
          </div>
          <a class="tombol-more" style="margin:20px 100px; position:relative ;" href="inc.koneksi.php">Pesan Sekarang </a>
        </section>
      </div>
    </section>


    <section id="hargae">
      <div class="infohargaa">
        <?php include('harga.php') ?>
      </div>
    </section>



    <section id="tombol">
      <div class="ikon">
        <h2 class="navbarslide1" style="color: #3AF2B2 ;">Tanya <span class="navbarslide1">Admin?</span></h2><br>
        <a class="tombol" href="https://www.facebook.com/people/Studium-Learn/100070514533426/" target="_blank"><i class="fab fa-facebook"></i></a>
        <a class="tombol" href="#tombol" onclick="alert('Twitter Belum dibuat')"><i class="fab fa-twitter"></i></a>
        <a class="tombol" href="https://instagram.com/studium.learn" target="_blank"><i class="fab fa-instagram"></i></a>
        <a class="tombol" href="#tombol" onclick="alert('youtube Belum Dibuat')"><i class="fab fa-youtube"></i></a>
        <a class="tombol" href="https://api.whatsapp.com/message/VTIQO5QE6KA4G1" target="_blank"><i class="fab fa-whatsapp"></i></a>
      </div>
    </section>



    <section id="artikele">
      <div class="artikel">
        <?php include('artikel.php'); ?>
      </div>
    </section>


    <section id="footer">
      <?php include('footer.php') ?>
    </section>