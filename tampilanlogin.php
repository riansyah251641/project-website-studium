<?php
include('koneksi.php');
$nama = "";
$pass = "";
$err = "";
if (isset($_GET['login'])) {
    $nama = $_GET['username'];
    $pass = $_GET['password'];

    if ($nama == "" || $pass == "") {
        $err = "mohon masukkan semua data";
    } else if ($nama == "admin@admin.com" && $pass = "admin1234") {
        header("location:./produk-studium/tampilantutor.php");
    } else {
        $rian1 = "SELECT * FROM admi where username = '$nama' ";
        $rian2 = mysqli_query($koneksi, $rian1);
        $rian3 = mysqli_fetch_array($rian2);
        $rian4 = mysqli_num_rows($rian2);

        if ($rian4 < 1) {
            $err = "username tidak ditemukan";
        } elseif ($rian3['word'] != $pass) {
            $err = "password yang kamu masukkan salah";
        } else {
            $err = "pasword anda benar ";
            header("location:./produk-studium/index.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar akun</title>
    <style>
        body {
            display: flex;
        }

        form {

            margin-top: 150px;

        }

        .form-border {
            box-shadow: 0 1px 1px 3px #B2B1B9;
            height: 380px;
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #FFFFFF;
            position: static;


        }

        .all {
            width: 1800px;
            height: 800px;
            display: flex;
            background-color: whitesmoke;
        }

        form input {

            width: 300px;
            height: 35px;
            border-radius: 5px;
            font-size: 15px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            border: 0.1px solid white;
            margin-bottom: -40px;
            margin-top: -20px;
            background-color: #e8f0fe;
        }

        form label {
            font-size: 20px;
            word-spacing: 2px;
        }

        .tbl-red {
            padding: 30px;
            background-color: red;
        }

        .tbl-biru {
            top: -30px;
            width: 40px;
            height: 25px;
            border-radius: 10px;
            padding: 10px 10px;
            background-color: #57CC99;
            font-size: 16px;
            font-weight: 600;
            color: white;
            text-decoration: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .tbl-biru:hover {
            background-color: #0B8457;
            color: white;
            transform: 1s;
        }

        .tbl-submit {
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
            border: 1px solid white;
            text-decoration: none;
            text-transform: none;
        }

        .tbl-submit:hover {
            color: white;
            background-color: #14279B;
            transform: 1s;
        }

        .foto-login {
            width: 100px;
            margin: 10px 170px;
            height: 100px;
            border-radius: 50%;
            top: -90px;
            position: relative;
            text-align: center;
            margin-bottom: -100px;
        }

        .gagal {
            margin-bottom: 40px;
            height: 30px;
            position: static;
        }

        .formpenjelasan {
            padding-top: 90px;
            width: 650px;
            height: 400px;
            animation: aaa 3s 1;


        }

        form h1 {
            text-align: center;
            font-size: 30px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: darkcyan;
            text-transform: uppercase;
            position: static;
        }

        .penjelas {
            font-size: 20px;
            font-weight: bold;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-shadow: 0 2px white;
            margin-left: 60px;
            margin-right: 20px;
        }

        @keyframes aaa {
            0% {
                display: none;
                margin-left: -400px;
                margin-right: 400px;
            }

            100% {
                margin-left: 0px;
            }
        }
    </style>
    <?php include("header.php") ?>

    <div class="all">


        <form class="formpenjelasan">
            <h1 class="navbarslide1" style="color: #3AF2B2; margin-left:-290px">STU<span class="navbarslide1">DIUM</span></h1><br>
            <div class="penjelas">
                <p>Platform Penyedia Bimbel privat, jual-beli buku <br>dan Beasiswa untuk Kalangan Anak SMA<br>sangat cocok untuk menemani pembelajaran anda!</p>

            </div>

        </form>
        <form method="GET" id="forms" action="" onsubmit="return validasiform()">

            <script>
                function validasiform() {

                    let x = document.forms['forms']['username'].value;
                    let y = document.forms['forms']['password'].value;
                    let z = document.forms['forms']['login'].value;

                    if (z == "login") {
                        return true;
                    }
                    return false;
                }
            </script>

            <legend>
                <div class="form-border">



                    <div class="gagal">

                        <?php if ($err) {
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $err; ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                    <h3 style="margin-bottom: 20px;">Masuk / Daftar Akun</h3>
                    <label for="nama">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                    <input type="email" name="username" id="nama" required><br><br>
                    <label for="pass">Password : </label>
                    <input type="password" name="password" title="gunakan min 8 karakter dan gunakan huruf dan angka untuk password" id="pass" required><br><br>
                    <input type="submit" class="tbl-submit" value="login" name="login"> <br>
                    <a class="tbl-biru" href="buatakun.php">Buat Akun</a>

            </legend>
    </div>
    </form>

    </div>
    </body>

</html>