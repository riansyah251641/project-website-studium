<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Studium Learn</title>
    <style>
        .label {
            margin-right: 50px;
        }

        .tbl-hapus {
            border: 0.1px solid black;
            background-color: red;
            color: white;
            margin-top: 120px;
            margin-left: -30px;
            border-radius: 10px;
            padding: 10px 15px;
            position: absolute;
            text-decoration: none;
        }

        .tbl-hapus:hover {
            transform: scale(1.05);
            color: white;

        }
    </style>
    <?php
    include('./header-home.php');
    ?>
    <p>
        halu haii world
    </p>
    <p>
        halu haii world
    </p>

    <div class="max-auto">
        <div class="card">
            <div class="card-header" style="margin-top:20px;">
                <h2> Data Pembayaran Studiun Learn</h2>
            </div>
            <div class="card-body">
                <table class="table">

                    <tr>
                        <th scope="col"> # </th>
                        <th scope="col"> nama </th>
                        <th scope="col"> kontak</th>
                        <th scope="col">keterangan</th>
                        <th scope="col">file foto</th>
                        <th scope="col">aksi</th>
                    </tr>
                    <tbody>
                        <?php $sql2 = "SELECT * FROM pembayaran1 ORDER BY id DESC";
                        include('koneksi.php');
                        $q2 = mysqli_query($koneksi, $sql2);
                        $urut = 1;

                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id = $r2['id'];
                            $nama = $r2['nama'];
                            $nomor = $r2['nomorhp'];
                            $email = $r2['email'];
                            $file = $r2['bukti'];
                            $date = $r2['tanggal'];
                            $boking = $r2['pemesanan'];
                            $orang = $r2['orang'];
                            $harga = $r2['harga'];
                            $pelajaran = $r2['mapel'];

                        ?>
                            <tr>
                                <th scope="col"><?php echo $urut++ ?></th>
                                <td scope="col"> <?php echo $nama ?></td>
                                <td scope="col"> <?php echo $nomor . " (WA)<br><br>" . $email . "( Email ) <br>" . $pelajaran . " (mapel) <br>" ?></td>
                                <td scope="col"> <?php echo $date . " ( tanggal )<br>" . $boking . " ( pesanan ) <br>" . $orang . " <br>RP  " . $harga . " ( total )<br>"; ?></td>
                                <td scope="col"> <img style="height: 300px; width:300px ;" src="./gambar/<?php echo $file ?> "></td>
                                <td>
                                    <a href="delete-learn.php" id="hmm" class="tbl-hapus">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                    </thead>
                </table>

            </div>
        </div>
    </div>
    </body>


</html>