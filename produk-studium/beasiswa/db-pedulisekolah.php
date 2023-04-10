<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Donasi</title>
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

        th,
        td {
            border-right: 1px solid black;
            min-width: 50px;
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
            margin-top: 120px;
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
    </style>
    <?php include('./header-admin.php') ?>
    <div class="wrap">
        <br>
        <h2>Data Donasi peduli sekolah</h2>

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
        <h3 style="margin-left:40px;">Edit data</h3>
        <a href="db-dashboard.php" style="text-decoration: none; margin-right:100px; margin-left:40px;">
            < Back </a>
                <a href="delete-beasiswasekolah.php" style="text-decoration: none;">Hapus data</a>
                <?php
                include('../koneksi.php');
                $syah1 = "SELECT * FROM beasiswasma ORDER BY id DESC ";
                $syah2 = mysqli_query($koneksi, $syah1);
                $y = 1;
                while ($r1 = mysqli_fetch_array($syah2)) {
                    $y++;
                    $kategori = $r1['kategori'];
                    $jenis = $r1['jenis'];
                    $nama = $r1['nama'];
                    $nomor = $r1['nomor'];
                    $nominal = $r1['harga'];
                    $benda = $r1['benda'];
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