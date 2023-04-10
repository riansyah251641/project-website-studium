<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Buku</title>
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
            background-color: #f2f2f2;
        }

        td,
        th {
            min-width: 150px;
            text-align: left;

        }

        td {
            padding: 10px 15px;
            margin-left: 20px;
        }

        th {
            line-height: 30px;
            background-color: #555;
            text-align: center;
        }

        .wrap h2 {
            margin-top: 120px;
            margin-left: 20px;

        }

        img {
            width: 250px;
            height: 250px;
            object-fit: contain;
        }

        body {
            padding: 20px 20px;
        }

        .wrap a {
            text-decoration: none;
            color: black;
            float: right;
            padding: 10px 15px;
            background-color: saddlebrown;
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
    <?php include("./buku.php") ?>
    <div class="wrap">

    </div>

    <table>
        <tr>
            <th>no</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Nomor </th>
            <th>Alamat</th>
            <th>Lokasi maps</th>
            <th>Harga</th>
            <th>Bukti pembayaran</th>
        </tr>
        <div class="all">
            <h1>Verifikasi buku ke data pembelian</h1>
            <form class="d-flex" method="POST" action="" style="margin-left:250px;display:flex">
                <input class="form-control me-2" type="text" placeholder="Verifikasi by kode buku" aria-label="Search" name="cari">
                <button class="btn btn-outline-success" type="search" name="search">Verifikasi</button>
            </form><br><br>
        </div>
        <h4>silahkan cek terbeli dahulu apakah data yang dimasukkan sudah benar atau salah</h4>
        <?php
        include('../koneksi.php');
        $sukses = "";
        $gagal = "";
        if (isset($_POST['search'])) {
            $cari = $_POST['cari'];
            $sw1 = "SELECT * FROM databuku WHERE kode LIKE '" . $cari . "'";
            $sw2 = mysqli_query($koneksi, $sw1);
            $sw7 = "INSERT INTO pembelianbuku(nama,nomor,alamat,lokasi,kode,harga,bukti) SELECT nama,nomor,alamat,lokasi,kode,harga,bukti FROM databuku WHERE kode LIKE '" . $cari . "'";
            $sw9 = "DELETE FROM databuku WHERE kode LIKE '" . $cari . "'";
            $sw4 = mysqli_query($koneksi, $sw7);
            $sw10 = mysqli_query($koneksi, $sw9);
            if ($sw4 && $sw10) {
                $sukses = "Sukses menambahkan buku ke data pembelian";
            } else {
                $gagal = "maaf, anda gagal menambahkan buku ke data pembelian";
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
                <p style="color: black;">Silahkan di cek di <a href="lihatdata-buku.php">data pembelian</a></p>
            </div>
        <?php
        }
        ?>
        <br>
        <a href="./see-book.php" style="text-decoration: none; margin-right:100px; margin-left:40px;">
            < Back </a>
                <a href="delete-verifikasibeli.php" style="text-decoration: none;">Hapus data</a>

                <h1>Data Buku yang belum Diverifikasi</h1>
                <?php
                include('../koneksi.php');
                $syah1 = "SELECT * FROM databuku ORDER BY id DESC ";
                $syah2 = mysqli_query($koneksi, $syah1);
                $y = 1;
                while ($r1 = mysqli_fetch_array($syah2)) {
                    $y++;
                    $nama = $r1['nama'];
                    $nomor = $r1['nomor'];
                    $alamat = $r1['alamat'];
                    $lokasi = $r1['lokasi'];
                    $kode = $r1['kode'];
                    $harga = $r1['harga'];
                    $bukti = $r1['bukti'];

                ?>
                    <tr>
                        <td style="text-align: center;"> <?php echo $y ?></td>
                        <td><?php echo $kode ?></td>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $alamat ?></td>
                        <td><?php echo $lokasi ?></td>
                        <td><?php echo 'Rp ' . number_format($harga, 0, ',', '.'); ?></td>
                        <td><img src="../gambar/<?php echo $bukti ?>"></td>
                    </tr>

                <?php } ?>
    </table>
    </body>

</html>