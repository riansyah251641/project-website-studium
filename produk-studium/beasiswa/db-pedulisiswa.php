<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit peduli siswa</title>
    <style>
        table,
        th,
        tr {
            border-bottom: 2px solid grey;
        }

        table {
            right: 20px;
            margin-left: 100px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td,
        th {
            min-width: 100px;
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

        .wrap {
            margin-left: 100px;
        }

        body {
            margin: 100px;
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
        <h2>Data Donasi Peduli siswa</h2>


    </div>

    <table>
        <tr>
            <th>no</th>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Nomor</th>
            <th>Nominal</th>
            <th>Keterangan</th>
            <th>Bukti Donasi</th>
        </tr>
        <a href="db-dashboard.php" style="text-decoration: none; margin-right:100px; margin-left:100px;">
            < Back </a>
                <a href="delete-beasiswasma.php" style="text-decoration: none;">Hapus data</a>
                <?php
                include('../koneksi.php');
                $syah1 = "SELECT * FROM beasiswasiswa ORDER BY id DESC ";
                $syah2 = mysqli_query($koneksi, $syah1);
                $y = 1;
                while ($r1 = mysqli_fetch_array($syah2)) {
                    $y++;
                    $kategori = $r1['kategori'];
                    $nama = $r1['nama'];
                    $nomor = $r1['nomor'];
                    $nominal = $r1['nominal'];
                    $keterangan = $r1['keterangan'];
                    $bukti = $r1['bukti'];

                ?>
                    <tr>
                        <td style="text-align: center;"> <?php echo $y ?></td>
                        <td><?php echo $kategori ?></td>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $nominal ?></td>
                        <td><?php echo $keterangan ?></td>
                        <td> <img src="../gambar/<?php echo $bukti ?>" style="width:300px ; height : 300px ;"> </td>
                    </tr>

                <?php } ?>
    </table>
    </body>

</html>