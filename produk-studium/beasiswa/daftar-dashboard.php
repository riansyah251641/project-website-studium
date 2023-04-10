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
            color: black;
            transform: scale(1.1);
            transition: 1s;
        }
    </style>
    <?php include('./header-admin.php') ?>
    <div class="ikon">
        <a href="../studium-scolar-admin.php" style="font-size: 30px;" class="tbl-home">
            back to home
        </a><br>
        <h1>.</h1>
        <h1 style="color:#3AF2B2; font-size:35px ;font-weight:600;margin-top:30px;">Data Pendaftar Studium Scholarship</h1>
        <a class="tombol" href="daftar-event.php">Event</a>
        <a class="tombol" href="https://docs.google.com/forms/d/1kBDYo-jW7El1HxNpGgJu_EigpVQNknLr934sol5kV_Q/edit" target="_blank">Peduli Bersama</a>
        <a class="tombol" href="" onclick="alert('maaf ,beasiswa belum dibuka')">Peduli Siswa</a>
        <a class="tombol" href="" onclick="alert('maaf ,beasiswa belum dibuka')">Peduli sekolah</a>
    </div>


    </body>

</html>