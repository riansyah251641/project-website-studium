<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Studium</title>
  <link rel="stylesheet" type="text/css" href="style-ikon.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <style>
    .tampilanpbr {
      display: flex;
      background-size: cover;
      width: 1250px;
      padding-top: -60px;
      margin-bottom: -43px;
    }

    .penjelas {
      text-align: center;
      font-size: 20px;
      font-weight: 600;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-shadow: 0 2px white;
      margin-right: 130px;
    }

    .vidiopembayaran {
      margin: 50px 250px;
      width: 750px;
      object-fit: contain;
      background: whitesmoke;
      position: relative;
      text-align: center;
      animation: animasividio 3s ease backwards;
      height: 400px;
    }

    .vidiopembayaran h2 {
      color: #D62AD0;
      font-size: 50px;
      font-weight: 700px;

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

    .tombol-more:hover {

      color: #3D56B2;
      text-transform: capitalize;
      background-color: #C9CCD5;
      transition: 1s;
    }

    .utama {
      margin-top: 80px;
      background-image: url('./produk-studium/gambar/background-utama.png');
      height: 600px;

    }

    .tambahan {
      float: right;
      margin-right: 10px;
      margin-top: 150px;
    }
  </style>
  <?php
  include('header.php');
  ?>
  <main>
    <div class="utama">
      <div class="tambahan">
        <h2 class="navbarslide1" style="color: #3AF2B2;  animation: animasiheader 5s 1 ;margin-right:90px">WELCOME TO <span class="navbarslide1">STUDIUM</span></h2><br>
        <div class="penjelas">
          <p>
            &nbsp;&nbsp;&nbsp; <i>Bersama Negeri, Majukan Generasi</i>
          </p>
        </div>
      </div>
    </div>
    <section id="infoproduk">
      <?php include('produk-studium.php') ?>
    </section>

    <div class="tampilanpbr">
      <section id="carapembayaran">
        <div class="vidiopembayaran">
          <h2 style="color: #3AF2B2; text-shadow: 0 0 2px #787A91; " class="navbarslide1">VIDEO STUDIUM</h2><br>
          <!-- https://www.youtube.com/embed/NvkuZi0fmMo?rel=0 -->
          <iframe width="460" height="280" src="https://www.youtube.com/embed/ugXPXKZ3wIk" title="YouTube video player" frameborder="0" style="border-radius: 10px;   box-shadow: 0 0 10px #787A91;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <!-- <iframe src="https://drive.google.com/file/d/1816ZhHVDOo621K-aiIwdwVFdir3RrHhs/preview" title="YouTube video" class="iframepembayaran" allowfullscreen allow="auto-play: encrypyted-media "></iframe> -->

          <!-- cara menulis link youtube pada html -->
        </div>
        <section id="tombol">
          <div class="ikon" style="margin-bottom:-100px">
            <h2 class="navbarslide1" style="color: #3AF2B2;margin-top:30px ;margin-bottom:-10px ; animation: animasiheader 5s 1 ;  ;">Tanya<span class="navbarslide1"> Admin</span></h2><br>
            <a class="tombol" href="https://www.facebook.com/people/Studium-Learn/100070514533426/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a class="tombol" href="#tombol" onclick="alert('Twitter Belum dibuat')"><i class="fab fa-twitter"></i></a>
            <a class="tombol" href="https://instagram.com/studium.learn" target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="tombol" href="#tombol" onclick="alert('youtube Belum Dibuat')"><i class="fab fa-youtube"></i></a>
            <a class="tombol" href="https://api.whatsapp.com/message/VTIQO5QE6KA4G1" target="_blank"><i class="fab fa-whatsapp"></i></a>
          </div>
        </section>

      </section>
    </div>




    <section id="tombol-awal">
      <br>
      <br>
    </section>


    <section id="footer">
      <?php include("footer.php") ?>
    </section>