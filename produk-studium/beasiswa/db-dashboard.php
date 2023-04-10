<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.ikon-tutor.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Update Studium Scholarship</title>
    <style>
        body {

            background-image: url(../gambar/foto-login.jpg);
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
        }

        .tbl-home:hover {
            margin-top: -8px;
            color: white;
            transform: scale(1.1);
            transition: 1s;
        }
    </style>
    <?php include('./header-admin.php') ?>
    <div class="ikon">
        <a href="../studium-scolar-admin.php" class="tbl-home" style="font-size: 30px;">
            back to home
        </a>
        <h1>.</h1>
        <h1 style="color:#3AF2B2; font-size:35px ;font-weight:600;">Data Donasi Studium Scholarship</h1>
        <a class="tombol" href="./db-donasibersama.php">peduli bersama</a>
        <a class="tombol" href="./db-pedulisiswa.php">Peduli Siswa</a>
        <a class="tombol" href="./db-pedulisekolah.php">Peduli sekolah</a>
        <a class="tombol" href="./validasibeasiswa.php">Validasi donasi</a>
    </div>


    </body>

</html>