<?php
$gagal = " ";
$pengguna = " ";
$kode = " ";
if (isset($_POST['login'])) {
    $pengguna = $_POST['username'];
    $kode = $_POST['pasword'];

    if ($pengguna == 'admintutor' && $kode == 'admintutor') {
        header("location: tampilantutor.php");
    } else {
        $gagal = " <p class='gagal' >*username dan pasword gagal</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Admin</title>
    <link rel="stylesheet" type="text/css" href="style.login.css">

    <style>
        .formlogin {
            margin-top: 140px;
            height: 290px;
            border-radius: 10px;
        }

        body {
            background-image: url(./gambar/foto-login.jpg );
            background-repeat: repeat;
            background-size: cover;
        }

        .nota {
            position: absolute;
            padding: 10px 15px;
            background-color: white;
            font-weight: bold;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 150px 330px;
            margin-top: 100px;
            border-radius: 50px;
            box-shadow: 0px 0px 10px #787A91;
            top: 27%;
            text-align: center;
            margin-top: 300px;
        }
    </style>
    <?php include('header-home.php') ?>

    <h3 class="nota">Silahkan masuk ke data admin dengan <br>username : admintutor && pasword : admintutor</h3>
    <div class="container">
        <div class="formlogin">
            <div class="foto"><img src="gambar/login.gambar.jpg">
                <h1>Silahkan Login </h1>
            </div>
            <?php echo $gagal ?>
            <form method="POST" action="">
                <input type="text" placeholder="Username" name="username"><br>
                <input type="password" placeholder="Pasword" name="pasword"><br>
                <input type="submit" name="login" value="Login"><br>
            </form>

        </div>
    </div>
    </body>

</html>