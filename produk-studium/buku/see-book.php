<?php
$cari = "";
$data = "";
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : " . $cari . "</b>";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studium Bookcase</title>
    <style>
        .form-buku {
            top: -25px;
            width: 365px;
            height: 500px;
            text-align: left;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            font-size: 14px;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            position: relative;
            overflow-x: hidden;
            overflow-y: scroll;


        }

        .form-buku:hover {
            box-shadow: 0px 0px 15px #787A91;
            transition: 0.3s;
        }

        .pph {
            width: 500px;
            height: 700px;
        }

        tbody {
            display: flex;
            width: auto;
            flex-wrap: wrap;
        }

        figure.zoom {
            background-position: 50% 50%;
            transition: 2s;
            position: relative;
            width: 300px;
            height: 250px;
            cursor: zoom-in;
        }

        figure.zoom img:hover {
            opacity: 0;
            transition: 1.1s;
        }

        figure.zoom img {
            transition: opacity 0.5s;
            display: block;
            width: 300px;
            height: 250px;
            margin-left: -5px;
            object-fit: contain;

        }

        .judul-buku {
            margin-top: 80px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            font-style: oblique;
            color: yellowgreen;
            text-align: center;
        }

        .gambar-buku {
            width: 200px;
            height: 200px;
            margin: 10px 0px;
            object-fit: contain;
            transition: 2s;

        }

        .gambar-buku:hover {

            image-resolution: 200px;
            cursor: zoom-in;
        }

        .tampilan-beli p {
            font-weight: 500;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 15px;
        }

        .inativ {
            padding: 8px 16px;
            border: 1px solid white;
            background-color: #C9CCD5;
            text-decoration: none;
            font-size: 20px;
            font-weight: bold;
            transition: 1s;
            border-radius: 10px;
            color: black;
            float: right;
            margin-right: -10px;
        }

        .inativ span {
            display: none;
        }

        iframe {
            width: 300px;
            height: 300px;
        }

        .inativ:hover {
            background-color: #555;
            color: white;

            padding-left: -5px;
        }

        .inativ:hover span {
            display: inline-block;
        }

        .keterangan-beli {
            transition: 2s;
            position: absolute;
            display: none;
            padding: 5px;
            background-color: #555;
            color: white;




        }


        .bumi {
            margin-top: 120px;
        }
    </style>
    <?php include('./buku.php') ?>


    <table>
        <thead>
        <tbody>
            <div class="bumi">


                <?php
                $febri1 = "SELECT * FROM buku ORDER BY id DESC";
                include('../koneksi.php');
                $febri2 = mysqli_query($koneksi, $febri1);
                if (isset($_POST['search'])) {
                    $cari = $_POST['cari'];
                    $febri2 = mysqli_query($koneksi, "SELECT * FROM buku WHERE genre LIKE '" . $cari . "'");
                }

                while ($d1 = mysqli_fetch_array($febri2)) {
                    $gambar = $d1['gambar'];
                    $gambar1 = $d1['gambar1'];
                    $gambar2 = $d1['gambar2'];
                    $judul = $d1['judul'];
                    $kualitas = $d1['kualitas'];
                    $harga = $d1['harga'];
                    $kode = $d1['kode'];
                    $lokasi = $d1['lokasi'];
                    $keterangan = $d1['keterangan'];
                    $genre = $d1['genre'];
                    $alamat = $d1['alamat'];

                ?>
                    <tr>
                        <td>
                            <form class="form-buku">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width:300px ;height:auto;">

                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <!--
                                            <div class="figure.zoom" style='background-image: url(../gambar/<?php echo $gambar ?>)' onmousemove='zoom(e)'>
                                                <img src="../gambar/<?php echo $gambar ?>" class="gambar-buku">
                                            </div>
                -->
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(../gambar/<?php echo $gambar ?>)">
                                                <img class="zoom" src="../gambar/<?php echo $gambar ?>" onmousemove="zoom(event)">
                                            </figure>
                                            <div class=" carousel-caption d-none d-md-block">

                                                <!--tulis disini -->

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(../gambar/<?php echo $gambar1 ?>)">
                                                <img class="zoom" src="../gambar/<?php echo $gambar1 ?>" onmousemove="zoom(event)">
                                            </figure>
                                            <div class="carousel-caption d-none d-md-block">

                                                <!--tulis disini -->

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(../gambar/<?php echo $gambar2 ?>)">
                                                <img class="zoom" src="../gambar/<?php echo $gambar2 ?>" onmousemove="zoom(event)">
                                            </figure>
                                            <div class="carousel-caption d-none d-md-block">

                                                <!--tulis disini -->

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="tampilan-beli" id="demo2">
                                    <p>Genre &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; : &nbsp;<?php echo $genre ?></p>
                                    <p>judul &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp;<?php echo $judul ?></p>
                                    <p>kualitas &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp;<?php echo $kualitas ?></p>
                                    <p>Alamat&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: &nbsp;<?php echo $alamat ?></p>
                                    <p>harga &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; <?php echo 'Rp ' . number_format($harga * 10 / 100 + $harga, 0, ',', '.'); ?></p>
                                    <p>Kode Buku : &nbsp; <?php echo $kode ?></p>
                                    <p>keterangan : &nbsp; <?php echo $keterangan ?></p>
                                    <a class="inativ" href="pay-book.php">Buy Now</a>
                                    <div class="see" style="width:200px ; height: 200px;">
                                        <?php echo $lokasi ?>
                                    </div>
                            </form>
                        </td>
                    </tr>
                <?php }
                ?>
            </div>
        </tbody>
        </thead>

    </table>
    <section id="tombol">
        <div class="ikon" style="margin-bottom:-200px">
            <h2 class="navbarslide1" style="margin-top: 200px; color: #3AF2B2;">Tanya <span>Admin </span> </h2>
            <a class="tombol" href="https://www.facebook.com/people/Studium-Learn/100070514533426/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a class="tombol" href="#tombol" onclick="alert('Twitter Belum dibuat')"><i class="fab fa-twitter"></i></a>
            <a class="tombol" href="https://instagram.com/studium.learn" target="_blank"><i class="fab fa-instagram"></i></a>
            <a class="tombol" href="#tombol" onclick="alert('youtube Belum Dibuat')"><i class="fab fa-youtube"></i></a>
            <a class="tombol" href="https://api.whatsapp.com/message/VTIQO5QE6KA4G1" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
    </section>
    <?php include('footer.php') ?>
    </body>
    <script>
        function zoom(e) {
            var zoomer = e.currentTarget;
            e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
            e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
            x = offsetX / zoomer.offsetWidth * 115
            y = offsetY / zoomer.offsetHeight * 115
            zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }
    </script>


</html>