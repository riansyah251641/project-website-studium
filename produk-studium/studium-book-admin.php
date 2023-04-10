<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./style.ikon-tutor.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Data Tutors</title>
    <style>
        body {

            background-image: url(./gambar/foto-login.jpg);
            background-size: 1500px;
            background-repeat: no-repeat;

        }

        .tombol {
            text-decoration: none;
        }

        .tbl-home {
            padding: 10px 20px;
            background-color: white;
            text-decoration: none;
            color: #5C7AEA;
            border-radius: 30px;
            margin-bottom: 30px;
            top: 10%;
        }
    </style>
    <?php include('./header-home.php') ?>
    <div class="ikon">
        <a href="./tampilantutor.php" class="tbl-home" style="font-size: 30px;">
            Back to dasboard
        </a><br>
        <h1>.</h1>
        <h1 style="color:#3AF2B2; font-size:35px ;font-weight:600;">Data Studium Bookcase</h1>
        <a class="tombol" href="./lihatdata-buku.php">Pembayaran</a>
        <a class="tombol" href="./verifikasi-buku.php">Validasi Buku</a>
        <a class="tombol" href="./update-book.php">Update Buku</a>
        <a class="tombol" href="./delete-book.php">Delete Buku</a>
    </div>


    </body>

</html>