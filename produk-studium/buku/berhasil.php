<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sukses</title>
    <style>
        .wrapper {
            margin: 100px auto;
            padding: 0px 100px;
            text-align: center;
        }
    </style>
    <?= include("buku.php") ?>
    <div class="wrapper">
        <h1>Selamat buku Anda telah berhasil di upload</h1>
        <h4>selanjutnya buku Anda akan kami verifikasi terlebih dahulu !!</h4>
        <h4>Jika memenuhi syarat , maka buku anda akan ditambahkan ke katalog kami</h4>
        <h4>Pertanyaan lebih lanjut , hubungi </h4>
        <a href="https://api.whatsapp.com/message/VTIQO5QE6KA4G1" target="_blank"><img src="../gambar/whatsap.jpg" style="width:100px ; height: 100px;"></a> <br>
        <h2>0858-5665-2306</h2><br>
    </div>


    </body>

</html>