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
            min-width: 200px;
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

        .wrap a {
            text-decoration: none;
            color: black;
            float: right;
            padding: 10px 15px;
            background-color: saddlebrown;
            position: relative;
            top: -50px;
        }

        body {
            padding: 20px;
            margin-left: 20px;
        }

        img {
            height: 250px;
            width: 250px;
            object-fit: contain;
        }
    </style>
    <?php include("./header-home.php") ?>
    <div class="wrap" style="text-align: center;">
        <h2>Data Pembayaran Buku </h2>
        <h4>Buku ini sudah diferifikasi oleh admin</h4>
        <h5>Note : <span style="color:red"> barang yang sudah sampai di pelangan harap dihapus datanya</span></h5>

    </div>

    <table>
        <tr>
            <th>no</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Nomor </th>
            <th>Alamat</th>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>Bukti pembayaran</th>
        </tr>
        <a href="./studium-book-admin.php" style="text-decoration: none; margin-right:100px; margin-left:40px;">
            < Back </a>
                <a href="./delete-book.php" style="text-decoration: none;">Hapus data</a>
                <?php
                include('../koneksi.php');
                $syah1 = "SELECT * FROM pembelianbuku ORDER BY id DESC ";
                $syah2 = mysqli_query($koneksi, $syah1);
                $y = 1;
                while ($r1 = mysqli_fetch_array($syah2)) {
                    $y++;
                    $kode = $r1['kode'];
                    $nama = $r1['nama'];
                    $nomor = $r1['nomor'];
                    $alamat = $r1['alamat'];
                    $lokasi = $r1['lokasi'];
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