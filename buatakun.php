<?php include('koneksi.php');
$nama = " ";
$pass = " ";
$err = " ";
if (isset($_POST['submit'])) {
    $nama = $_POST['username'];
    $pass = $_POST['pasword'];

    if ($pass == "" or $nama == "") {
        $err = "Silahkan Masukkan semua Data";
    } else {
        $rian1 = "INSERT INTO admi(username,word) values ('$nama' , '$pass' ) ";
        $qr6 = mysqli_query($koneksi, $rian1);
        $err = " pasword kamu benar";
        header("location:tampilanlogin.php");
        exit();
    }
} ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="sweetalert2.all.min.js"></script>
    <script src="./produk-studium/buku/dist/sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <title>Daftar Akun</title>
    <style>
        .formakun {
            border: 1px solid black;
            border-radius: 10px;
            width: 500px;
            margin: 20px auto;
            margin-top: 150px;
            padding: 30px;
            float: right;
            margin-right: 100px;
            box-shadow: 0 1px 1px 2px grey;
        }

        .form-grub {
            height: 70px;
        }

        .formakun {
            font-size: 17px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }

        input {
            width: 300px;
            height: 35px;
            border-radius: 10px;
            text-decoration: none;
            background-size: cover;
            border: 0.1px solid white;
            background-color: #e8f0fe;
        }

        .tbl-kirim {
            margin-right: 50px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: white;
            background-color: cornflowerblue;
            width: 100px;
            height: 40px;
            border-radius: 10px;
            background-size: cover;
            float: right;
            margin-top: -10px;
            border: 1px solid white;
            text-decoration: none;
        }

        .tbl-kirim:hover {

            color: white;
            background-color: #14279B;
            transform: 1s;

        }

        .formpenjelasan {
            margin-top: 170px;
            height: 400px;
            float: left;
            margin-left: 100px;
            font-size: 20px;
        }
    </style>
    <?php include('header.php') ?>
    <div class="all">

        <form class="formpenjelasan">
            <h1 class="navbarslide1" style="color: #3AF2B2;">STU<span class="navbarslide1">DIUM</span></h1><br>
            <div class="penjelas">
                <p>Platform Penyedia Bimbel privat, jual-beli buku <br>dan Beasiswa untuk Kalangan Anak SMA<br>sangat cocok untuk menemani pembelajaran anda!</p>

            </div>

        </form>

        <form action=" " method="POST" class="formakun" onsubmit="return validasi()" id="forms">
            <div class="posisi-form">
                <script>
                    function validasi() {
                        let x = document.forms['forms']['submit'].value;
                        let y = document.forms['forms']['username'].value;
                        let z = document.forms['forms']['pasword'].value;
                        if (x == "daftar" && y != "" && z != "") {
                            alert("Data berhasil disimpan");
                        }
                    }
                </script>
                <?php
                if ($err != " ") {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $err; ?>
                    </div>
                <?php
                }
                ?>
                <h3 style="margin-bottom: 20px; margin-top:60px">Daftar Akun</h3>
                <div class="form-grub">
                    <label for="username">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="email" placeholder="username" id="username" name="username"><br>
                </div>
                <div class="form-grub">
                    <label for="pasword">Password &nbsp;: </label>
                    <input type="password" name="pasword" title="gunakan min 8 karakter dan gunakan huruf dan angka untuk password" id="pass" required>
                </div>
                <input class="tbl-kirim" style="width:100px ;" type="submit" name="submit" value="Daftar">
            </div>
        </form>
    </div>
    </body>

</html>