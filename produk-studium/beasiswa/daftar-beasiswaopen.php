<?php
include('../koneksi.php');
$nama = "";
$tanggal = "";
$keterangan = "";
$daftar = "";
$sukses = "";
$gagal = "";

if (isset($_POST['submit3'])) {

    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];
    $daftar = $_POST['daftar'];



    $rian1 = "INSERT INTO beasiswatertutup(nama,tanggal,keterangan,daftar) values('$nama' , '$tanggal' , '$keterangan' , '$daftar' )";
    $rian2 = mysqli_query($koneksi, $rian1);
    if ($rian2) {
        $sukses = "Terima Kasih Atas Donasinya.";
    } else {
        $gagal = "Terdapat Kesalahan , Mohon coba lagi !";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .hmmm {
            margin: 30px auto;
            padding: 20px 30px;
            width: 570px;
            height: 335px;
            background-color: #FEFBF3;
            border: 1px solid black;
            border-radius: 20px;
            text-align: left;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            box-shadow: 0 0 20px #787A91;

        }

        label {
            width: 110px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        input {
            width: 300px;
            height: 30px;
            border-radius: 5px;
            border: 0.1px solid black;

        }

        .tbl-submit {
            color: white;
            background-color: #3D56B2;
            width: 80px;
            font-size: 15px;
            text-align: center;
            height: 40px;
            border-radius: 10px;
            float: right;
            background-size: cover;
            border: 0.1px solid white;
            text-transform: capitalize;

        }

        .tbl-submit:hover {
            transition: 1s;
            background-color: #14279B;
            text-transform: uppercase;
        }

        .hmmm h1 {
            text-align: center;
            margin-top: -20px;
            color: #8479f4;
            margin-bottom: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 620;

        }

        .link-buku {
            margin-top: 300px;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 10px;
            box-shadow: 0 0 5px 3px grey;
        }

        .tampilanlink {
            margin-top: 300px
        }
    </style>


    <form class="hmmm" method="POST" action="" enctype="multipart/form-data">

        <h1 style="color:#3AF2B2;">Edata Beasiswa buka dan tertutup</h1>
        <?php
        if ($gagal) {
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $gagal; ?>
            </div>
        <?php
        }
        ?>

        <?php
        if ($sukses) {
        ?>
            <div class="alert alert-info" role="alert">
                <?php echo $sukses; ?>
            </div>
        <?php
        }
        ?>
    </form>
    </body>

</html>