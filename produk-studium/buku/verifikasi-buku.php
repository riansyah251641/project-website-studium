<?php $cari = "";
$sukses = "";
$gagal = ""; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="all">
            <h1>Verifikasi buku ke katalog</h1>
            <form class="d-flex" method="POST" action="" style="margin-left:250px;display:flex">
                <input class="form-control me-2" type="text" placeholder="Verifikasi by kode buku" aria-label="Search" name="cari">
                <button class="btn btn-outline-success" type="search" name="search">Verifikasi</button>
            </form><br>
        </div>
        <?php
        include('../koneksi.php');
        if (isset($_POST['search'])) {
            $cari = $_POST['cari'];
            $sw1 = "SELECT * FROM verifikasibuku WHERE kode LIKE '" . $cari . "'";
            $sw2 = mysqli_query($koneksi, $sw1);
            $sw7 = "INSERT INTO buku(gambar,gambar1,gambar2,genre,judul,kualitas,alamat,lokasi,harga,kode,keterangan) SELECT gambar,gambar1,gambar2,genre,judul,kualitas,alamat,lokasi,harga,kode,keterangan FROM verifikasibuku
          WHERE kode LIKE '" . $cari . "'";
            $sw9 = "DELETE FROM verifikasibuku WHERE kode LIKE '" . $cari . "'";
            $sw4 = mysqli_query($koneksi, $sw7);
            $sw10 = mysqli_query($koneksi, $sw9);
            if ($sw4 && $sw10) {
                $sukses = "Sukses menambahkan buku ke katalog";
            } else {
                $gagal = "maaf, anda gagal menambahkan buku ke katalog";
            }
        }

        if ($gagal) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $gagal; ?>
            </div>
            <p style="color: black;">Silahkan di cek di <a href="see-book.php">cek</a></p>
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
                <p style="color: black;">Silahkan di cek di <a href="see-book.php">katalog</a></p>
            </div>
        <?php
        }
        ?>
        <br>
        <h2 style="margin-top:-1px;">Data Buku yang Belum Diverifikasi</h2>
    </div>

    <table>
        <tr>
            <th>no</th>
            <th>Kode</th>
            <th>Genre</th>
            <th>Judul</th>
            <th>Kualitas</th>
            <th>Alamat</th>
            <th>lokasi</th>
            <th>Harga</th>
            <th>keterangan</th>
            <th>Gambar 1</th>
            <th>Gambar 2</th>
            <th>Gambar 3</th>
        </tr>
        <a href="./see-book.php" style="text-decoration: none; margin-right:100px; margin-left:40px;">
            < Back </a>
                <a href="delete-verifikasi.php" style="text-decoration: none;">Hapus data</a>
                <?php
                include('../koneksi.php');
                $syah1 = "SELECT * FROM verifikasibuku ORDER BY id DESC ";
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
                        <td><?php echo $kode ?></td>
                        <td><?php echo $judul ?></td>
                        <td><?php echo $genre ?></td>
                        <td><?php echo $kualitas ?></td>
                        <td><?php echo $alamat ?></td>
                        <td><?php echo $lokasi ?></td>
                        <td><?php echo 'Rp ' . number_format($harga, 0, ',', '.'); ?></td>
                        <td><?php echo $keterangan ?></td>
                        <td><img src="../gambar/<?php echo $gambar ?> "></td>
                        <td><img src="../gambar/<?php echo $gambar1 ?> "></td>
                        <td><img src="../gambar/<?php echo $gambar2 ?>"></td>
                    </tr>

                <?php } ?>
    </table>
    </body>

</html>