<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Donasi</title>
    <style>
        table,
        th,
        tr {
            border-bottom: 2px solid grey;
        }

        table {
            right: 20px;
            margin-left: 20px;
        }

        tr:nth-child(even) {
            background-color: #EDEDED;
        }

        body {
            margin-left: 20px;
        }

        th,
        td {
            border-right: 1px solid black;
            min-width: 150px;
            text-align: left;

        }

        td {
            border-right: 1px solid black;
            padding: 10px 15px;
            margin-left: 20px;
        }

        th {
            line-height: 30px;
            background-color: #555;
            text-align: center;
        }

        .wrap h2 {
            margin-top: 20px;
            margin-left: 20px;

        }

        .wrap a {
            text-decoration: none;
            color: black;
            float: right;
            padding: 10px 15px;
            background-color: cornflowerblue;
            position: relative;
            top: -50px;
        }

        input[type="text"] {
            width: 400px;
            margin-left: -230px;

        }


        .all {
            margin-left: 50px;
            margin-top: 120px;
            display: flex;
        }
    </style>
    <?php include('./header-beasiswa.php') ?>
    <div class="all">
        <h1>Validasi beasiswa</h1>
        <form class="d-flex" method="POST" action="" style="margin-left:250px;display:flex">
            <input class="form-control me-2" type="text" placeholder="Verifikasi by nama donatur" aria-label="Search" name="cari">
            <button class="btn btn-outline-success" type="search" name="search">Verifikasi</button>
        </form><br>
    </div>
    <h4 style="color: red; margin-left:40px;">*Sebelum validasi silahkan cek terbeli dahulu apakah data yang dimasukkan sudah benar atau salah , jika salah harap dihapus.</h4>
    <?php
    include('../koneksi.php');
    $sukses = "";
    $gagal = "";
    if (isset($_POST['search'])) {
        $cari = $_POST['cari'];
        $sw1 = "SELECT * FROM validasibeasiswa WHERE nama LIKE '" . $cari . "'";
        $sw2 = mysqli_query($koneksi, $sw1);
        $rt = mysqli_fetch_array($sw2);

        if ($rt['kategori'] == "Donasi Bersama") {
            $sw7 = "INSERT INTO beasiswa(kategori,Nama,nomor,nominal,keterangan,bukti) SELECT kategori,nama,nomor,nominal,keterangan,bukti FROM validasibeasiswa WHERE nama LIKE '" . $cari . "'";
            $sw9 = "DELETE FROM validasibeasiswa WHERE nama LIKE '" . $cari . "'";
        } else if ($rt['kategori'] == "Peduli Siswa") {
            $sw7 = "INSERT INTO beasiswasiswa(kategori,nama,nomor,nominal,keterangan,bukti) SELECT kategori,nama,nomor,nominal,keterangan,bukti FROM validasibeasiswa WHERE nama LIKE '" . $cari . "'";
            $sw9 = "DELETE FROM validasibeasiswa WHERE nama LIKE '" . $cari . "'";
        } else if ($rt['kategori'] == "Peduli Sekolah") {
            $sw7 = "INSERT INTO beasiswasma(kategori,jenis,nama,nomor,harga,benda,keterangan,bukti) SELECT kategori,jenis,nama,nomor,nominal,jenisbenda,keterangan,bukti FROM validasibeasiswa WHERE nama LIKE '" . $cari . "'";
            $sw9 = "DELETE FROM validasibeasiswa WHERE nama LIKE '" . $cari . "'";
        }
        $sw4 = mysqli_query($koneksi, $sw7);
        $sw10 = mysqli_query($koneksi, $sw9);
        if ($sw4) {
            $sukses = "Sukses menambahkan donatur";
        } else {
            $gagal = "maaf, terdapat kesalahan dalam menambahkan donatur";
        }
    }

    if ($gagal) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $gagal; ?>
        </div>
    <?php
    }
    ?>
    <?php
    if ($sukses) {
    ?>
        <div class="alert alert-info" role="alert">
            <?php echo $sukses; ?>
        </div>

        <div class="alert alert-info" role="alert">
            <p style="color: black;">Silahkan di cek di <a href="db-dashboard.php">data donasi</a></p>
        </div>
    <?php
    }
    ?>

    <div class="wrap">
        <br>
        <h2>Data Donasi yang belum divalidasi</h2>

    </div>

    <table>
        <tr>
            <th>no</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>nomor</th>
            <th>Nominal</th>
            <th>Benda &nbsp;&nbsp;&nbsp;</th>
            <th>Keterangan</th>
            <th>Bukti Donasi</th>
        </tr>
        <a href="./db-dashboard.php" style="text-decoration: none; margin-right:100px; margin-left:40px;">
            < Back to admin </a>
                <a href="delete-validasi.php" style="text-decoration: none;">Hapus data</a>
                <?php
                include('../koneksi.php');
                $syah1 = "SELECT * FROM validasibeasiswa ORDER BY id DESC ";
                $syah2 = mysqli_query($koneksi, $syah1);
                $y = 1;
                while ($r1 = mysqli_fetch_array($syah2)) {
                    $y++;
                    $kategori = $r1['kategori'];
                    $jenis = $r1['jenis'];
                    $nama = $r1['nama'];
                    $nomor = $r1['nomor'];
                    $nominal = $r1['nominal'];
                    $benda = $r1['jenisbenda'];
                    $keterangan = $r1['keterangan'];
                    $bukti = $r1['bukti'];

                ?>
                    <tr>
                        <td style="text-align: center;"> <?php echo $y ?></td>
                        <td><?php echo $kategori ?></td>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $jenis ?></td>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $nominal ?></td>
                        <td><?php echo $benda ?></td>
                        <td><?php echo $keterangan ?></td>
                        <td> <img src="../gambar/<?php echo $bukti ?>" style="width:300px ; height : 300px ;"> </td>
                    </tr>

                <?php } ?>
    </table>
    </body>

</html>