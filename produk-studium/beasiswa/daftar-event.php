<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Peserta</title>
    <style>
        fieldset {
            border: 1px solid black;
        }

        table td {
            width: 150px;
        }

        .tbl-home {
            padding: 10px 20px;
            background-color: white;
            text-decoration: none;
            color: #5C7AEA;
            border-radius: 30px;
        }

        .tbl-home:hover {
            margin-top: -8px;
            color: black;
            transform: scale(1.1);
            transition: 1s;
        }

        .info {
            margin-left: 150px;
            overflow-y: hidden;
        }
    </style>
</head>
<?php include('header-admin.php'); ?>
<form action="" enctype="multipart/form-data" class="info" style="margin-top:120px;">
    <a href="./daftar-dashboard.php" class="tbl-home" style="font-size: 30px;margin-left:400px">
        <--back to awal-->
    </a>
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
            <br>
            <br>
            <div class="gkero"></div>
            <?php include("daftar-beasiswaopen.php"); ?>
            <?php include("daftar-beasiswabuka.php"); ?>
            <br>
            <br>
            <?php include("daftar-beasiswatutup.php"); ?>
            <?php include('daftar-deletebuka.php') ?>
            <?php include('daftar-deletetutup.php') ?>
            <div class="size" style="width: 1265px;;">s</div>
            <?php include('footer.php') ?>
            </body>

</html>