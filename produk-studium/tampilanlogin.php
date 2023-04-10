<?php
include('koneksi.php');
$nama = "";
$pass = "";
$err = "";
if (isset($_POST['login'])) {
    $nama = $_POST['username'];
    $pass = $_POST['password'];

    if ($nama == "" || $pass == "") {
        $err = "mohon masukkan semua data";
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
            $_SESSION['admin_username'] = $nama;
            header("location:index.php");
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
        form {
            margin-top: 150px;

        }

        .form-border {
            height: 410px;
            width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid black;


        }

        form input {

            width: 300px;
            height: 35px;
            border-radius: 5px;
            font-size: 15px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

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
            width: 40px;
            height: 25px;
            border-radius: 10px;
            padding: 15px 10px;
            background-color: cornflowerblue;
            font-size: 15px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .tbl-submit {
            margin-right: 50px;
            text-align: center;
            font-size: 15px;
            font-weight: bold;
            color: white;
            background-color: cornflowerblue;
            width: 100px;
            height: 40px;
            border-radius: 20px;
            background-size: cover;
            float: right;
            border: 1px solid black;

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

        form h1 {
            text-align: center;
            font-size: 30px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: darkcyan;
            text-transform: uppercase;
            position: static;
        }
    </style>
    <?php include("footer-home.php") ?>
    <form method="POST" id="forms" action="" onsubmit="return validasiform()">

        <script>
            function validasiform() {

                let x = document.forms['forms']['username'].value;
                let y = document.forms['forms']['password'].value;
                let z = document.forms['forms']['login'].value;

                if (z == "login") {
                    alert("login berhasil");
                    return true;
                }
                return false;
            }
        </script>

        <legend>
            <div class="form-border">

                <img class="foto-login" src="gambar/login.gambar.jpg">

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

                <h1>Silahkan Login</h1>
                <label for="nama">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
                <input type="text" name="username" id="nama"><br><br>
                <label for="pass">Password : </label>
                <input type="password" name="password" id="pass"><br><br>
                <input type="submit" class="tbl-submit" value="login" name="login"> <br>
                <a class="tbl-biru" href="buatakun.php">Buat Akun</a>
                <a class="tbl-biru" href="buatakun.php">Lupa Pasword ?</a>


        </legend>
        </div>
    </form>

    </body>

</html>