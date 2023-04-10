<?php
include('koneksi.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Lihat Coment</title>

    <?php include('header-admin.php') ?>
    <table class="table" style="margin-top:150px;width:1000px ;margin-left:50px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nama</th>
                <th scope="col">kelas</th>
                <th scope="colgroup">coment</th>
            </tr>
        <tbody>
            <?php
            $sqlm = "SELECT * FROM pembayaran2 ORDER BY id DESC";

            $q5 = mysqli_query($koneksi, $sqlm) or die("eror di : ");
            $ke = 1;

            while ($fe2 = mysqli_fetch_array($q5)) {
                $nmr = $fe2['id'];
                $pelajar = $fe2['nama'];
                $kelase = $fe2['kelas'];
                $comenane = $fe2['komen'];

            ?>
                <tr>
                    <th scope="col"><?php echo $ke ?></th>
                    <th scope="col"><?php echo $pelajar ?></th>
                    <th scope="col"><?php echo $kelase ?></th>
                    <th scope="col"><?php echo $comenane ?></th>
                </tr>
            <?php } ?>
        </tbody>
        </thead>
    </table>

    </body>

</html>