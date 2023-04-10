<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style-ikon.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Verifikasi Buku</title>
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
            max-width: 400px;
            max-height: 400px;
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
            max-width: 300px;
        }

        .wrap h2 {
            margin-top: 120px;
            margin-left: 20px;

        }

        iframe {
            width: 300px;
            height: 300px;
            object-fit: contain;
        }

        img {
            width: 300px;
            height: 300px;
            object-fit: contain;
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
            width: 300px;
        }

        form {
            width: 500px;
            height: 50px;
            margin-left: 100px;
        }

        .all {
            margin-left: 250px;
        }
    </style>
    <?php include("../header-admin.php");
    $cari = ""; ?>
    <div class="wrap">
        <h2>Data Buku yang Belum Diverifikasi</h2>

    </div>

    <table>
        <tr>
            <th>no</th>
            <th>Genre</th>
            <th>Judul</th>
            <th>Kualitas</th>
            <th>Alamat</th>
            <th>lokasi</th>
            <th>Harga</th>
            <th>Kode</th>
            <th>keterangan</th>
            <th>Gambar 1</th>
            <th>Gambar 2</th>
            <th>Gambar 3</th>
        </tr>
        <div class="all">

            <form class="d-flex" method="POST" action="" style="margin-left:250px;display:flex">
                <input class="form-control me-2" type="text" placeholder="Search by Genre" aria-label="Search" name="cari">
                <button class="btn btn-outline-success" type="search" name="search"> Search</button>
            </form><br>
        </div>
        <?php
        include('../koneksi.php');
        $syah1 = "SELECT * FROM verifikasibuku WHERE kode LIKE '" . $cari . "'";
        $syah2 = mysqli_query($koneksi, $syah1);
        $y = 1;
        while ($r1 = mysqli_fetch_array($syah2)) {
            $y++;
            $judul = $r1['judul'];
            $harga = $r1['harga'];
            $keterangan = $r1['keterangan'];
            $kualitas = $r1['kualitas'];
            $kode = $r1['kode'];
            $genre = $r1['genre'];
            $alamat = $r1['alamat'];
            $lokasi = $r1['lokasi'];
            $gambar = $r1['gambar'];
            $gambar1 = $r1['gambar1'];
            $gambar2 = $r1['gambar2'];

        ?>
            <tr>
                <td style="text-align: center;"> <?php echo $y ?></td>
                <td><?php echo $judul ?></td>
                <td><?php echo $genre ?></td>
                <td><?php echo $kualitas ?></td>
                <td><?php echo $alamat ?></td>
                <td><?php echo $lokasi ?></td>
                <td><?php echo $harga ?></td>
                <td><?php echo $kode ?></td>
                <td><?php echo $keterangan ?></td>
                <td><img src="../gambar/<?php echo $gambar ?> "></td>
                <td><img src="../gambar/<?php echo $gambar1 ?> "></td>
                <td><img src="../gambar/<?php echo $gambar2 ?>"></td>
            </tr>

        <?php } ?>
    </table>
    </body>

</html>