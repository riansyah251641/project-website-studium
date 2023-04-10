<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="../buku/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style-ikon.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Dashboard Peserta</title>
    <style>
        .alltabel {
            margin-top: 40px;
            display: flex;
            flex-wrap: wrap;
            margin-left: 130px;
        }

        .tahugak1 {
            padding: 5px 5px;
            text-align: center;
            font-weight: bold;
            color: white;
            text-decoration: solid;
            background-color: #3DB2FF;
            border-radius: 30px;
            width: 430px;
            margin: 20px auto;
            margin-top: 30px;
        }

        .tabelbeasiswa {
            margin: 2px;
            width: 330px;
            height: 570px;
            padding: 20px;
            box-shadow: 0px 0px 5px #787A91;
        }

        a {
            cursor: pointer;
        }

        .tabelbeasiswa img {
            margin-left: 35px;

        }

        .tabelbeasiswa:hover {
            margin-top: -15px;
            transform: scale(1.01);
            box-shadow: 0px 0px 15px #787A91;
        }


        a {
            text-decoration: none;
            text-transform: none;
        }

        .tabelbeasiswa .text {
            height: 270px;
        }

        .syarat {
            text-decoration: none;
            text-align: center;
            margin-left: 40px;
        }

        form img {
            width: 200px;
            height: 200px;
        }

        .tbl-biru {
            text-decoration: none;
            padding: 8px 28.8px;
            color: white;
            border-radius: 6px;
            margin-left: 70px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: #3d68d3;
            font-weight: 500;
            line-height: 24px;
            letter-spacing: normal;
            text-align: center;
        }

        .tbl-biru:hover {
            text-decoration: none;
            color: white;
        }

        .info {
            margin-top: 20px;
            padding: 20px;
            margin-left: 130px;
            margin-bottom: 40px;

        }

        .font {
            font-size: medium;
            font-weight: 350;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        fieldset {
            border: 1px solid black;
        }

        table td {
            width: 150px;
        }
    </style>
</head>
<?php include('header-beasiswa.php'); ?>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 1262px;height:450px;object-fit:contain;margin-top:92px">
    <div class="carousel-inner" style="width:auto;height:475px;">
        <div class="carousel-item active">
            <img src="../gambar/pendaftarinfo1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../gambar/daftar34.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../gambar/pendaftarinfo3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="../gambar/pendaftarinfo4.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<form action="" enctype="multipart/form-data" class="info">
    <fieldset>
        <legend>Info Beasiswa</legend>

        <div class="accordion" id="accordionPanelsStayOpenExample" style="width:1000px; margin-top:20px;">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <h4><strong>Beasiswa yang telah dibuka</strong></h4>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Nama Event</th>
                                <th>tanggal berakhir</th>
                                <th>Keterangan</th>
                                <th>Daftar</th>
                            </tr>
                            <?php
                            include('../koneksi.php');
                            $rian1 = "SELECT * FROM beasiswabuka ORDER BY id DESC";
                            $rian2 = mysqli_query($koneksi, $rian1);
                            $no = 0;
                            while ($r1 = mysqli_fetch_array($rian2)) {
                                $no++;
                                $nama = $r1['nama'];
                                $tanggal = $r1['tanggal'];
                                $keterangan = $r1['keterangan'];
                                $daftar = $r1['daftar'];
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $tanggal ?></td>
                                    <td><?php echo $keterangan ?></td>
                                    <td><a href="https://docs.google.com/forms/d/e/1FAIpQLScWmxdTP7xZgilt706Dz51BjzB_iWWng_gzpEMvOV_tobRqAg/viewform?usp=sf_link" target="_blank"><?php echo $daftar ?> </a> </td>
                                </tr>
                            <?php } ?>
                        </table>


                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <h4><strong>Beasiswa yang masih dalam proses</strong></h4>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Nama Event</th>
                                <th>Tanggal Mulai</th>
                                <th>Keterangan</th>
                                <th>Daftar</th>
                            </tr>
                            <?php
                            $rian3 = "SELECT * FROM beasiswatertutup ORDER BY id DESC";
                            $rian4 = mysqli_query($koneksi, $rian3);
                            $urut = 0;
                            while ($m1 = mysqli_fetch_array($rian4)) {
                                $urut++;
                                $nama = $m1['nama'];
                                $tanggal = $m1['tanggal'];
                                $keterangan = $m1['keterangan'];
                                $daftar = $m1['daftar'];
                            ?>
                                <tr>
                                    <td><?php echo $urut; ?></td>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $tanggal ?></td>
                                    <td><?php echo $keterangan ?></td>
                                    <td><a style="color : red"><?php echo 'none' ?> </a> </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </fieldset>
</form>

<!-- form -->
<div class="alltabel">
    <form class="tabelbeasiswa" action="" enctype="multipart/form-data">
        <img src="../gambar/pendaftar1.png">
        <div class="text">
            <h2>Beasiswa Bersama</h2>
            <p class="font">Merupakan ajang beasiswa bergengsi dikalangan SMA atau SMK yang dilakukan secara serentak dan dengan beberapa seleksi pada kategori yang tersedia.</p>
        </div>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLScWmxdTP7xZgilt706Dz51BjzB_iWWng_gzpEMvOV_tobRqAg/viewform?usp=sf_link" target="_blank" class="tbl-biru">Daftar</a><br><br>
        <a href="syarat.php" class="syarat">Syarat Pendaftaran</a>
    </form>
    <form class="tabelbeasiswa" action="" enctype="multipart/form-data">
        <img src="../gambar/pendaftar2.png">
        <div class="text">
            <h2>Peduli Sekolah</h2>
            <p class="font">Daftarkan sekolah agar mendapatkan donasi berupa uang atau peralatan kebutuhan sekolah, untuk menunjang pembelajaran ,dengan beberapa syarat dan ketentuan yang berlaku.</p>

        </div>

        <a onclick=" alert('Maaf ,Pendaftaran peduli sekolah masih belum buka , yang tersedia hanya beasiswa bersama')" class="tbl-biru"> Daftar</a><br><br>
        <a href="syarat1.php" class="syarat">Syarat Pendaftaran</a>
    </form>
    <form class="tabelbeasiswa" action="" enctype="multipart/form-data">
        <img src="../gambar/pendaftar3.png">
        <div class="text">
            <h2>Peduli siswa</h2>
            <p class="font">Daftarkan siswa yang dalam kondisi ,seperti putus sekolah,siswa kurang mampu,dan lain-lain untuk mendapatkan dana atau donasi , agar mereka dapat sekolah kembali. </p>
        </div>
        <a onclick="alert('maaf,pendaftaran peduli siswa masih belum dibuka , yang tersedia hanya beasiswa bersama')" class="tbl-biru" class="tbl-biru">Daftar</a><br><br>
        <a href="syarat2.php" class="syarat">Syarat Pendaftaran</a>
    </form>


</div>



<div class="tahugak1" style="text-decoration: none;">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
        <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
    </svg> <a href="https://api.whatsapp.com/message/VTIQO5QE6KA4G1" target="_blank" style="text-decoration: none;"><span style="color:white; text-decoration:none">Tanya Tentang Beasiswa ?</span></a>
</div>
<br>

<?php include("footer.php"); ?>