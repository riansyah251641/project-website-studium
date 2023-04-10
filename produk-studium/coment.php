<?php
include('koneksi.php');
$names = "";
$kelas = "";
$komentar = "";
$no = "";
$yes = "";
if (isset($_POST['submit'])) {
    $names = $_POST['pengguna'];
    $kelas = $_POST['kelas1'];
    $komentar = $_POST['comentar'];

    if (!$names) {
        $no = "maaf ada data yang masih kosong";
    }
    if (empty($kelas)) {
        $no = "maaf ada data yang masih kosong";
    }
    if (!$komentar) {
        $no = "maaf ada data yang masih kosong";
    }
    if ($names and $kelas and $komentar) {
        $sqli2 = "INSERT INTO pembayaran2(nama,kelas,komen) values ('$names' , '$kelas' , '$komentar')";
        $q4 = mysqli_query($koneksi, $sqli2);
        if ($q4) {
            $yes = "sukses memasukkan data";
        } else {
            $no = "maaf gagal memasukkan data";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>


    <style>
        .tampilan-coment {
            margin: 10px;
            margin-bottom: 20px;
        }

        input {
            width: 250px;
            height: 40px;
            border-radius: 15px;
            margin: 5px;
            border: none;

        }

        .kirim {
            width: 100px;
            height: 40px;
            background-color: cornflowerblue;
            position: absolute;
            float: left;
            margin-left: 60px;
            margin-bottom: 20px;
            background-size: cover;


        }

        fieldset {
            margin-top: -15px;

            position: relative;
            width: 400px;
            height: auto;
            margin-left: -20px;
            border-radius: 5px;



        }

        .texttempat {
            border-radius: 20px;
            margin-left: 65px;
            margin-top: -15px;
        }

        @media (min-width:300px) and (max-width:800px) {
            .tampilan-coment {
                margin-left: 2px;
                margin-bottom: 20px;
            }

            .kirim {
                margin-left: -150px;
            }

            fieldset {
                width: auto;
            }

        }
    </style>
</head>

<body>
    <form method="POST" action=" " enctype="multipart/form-data">
        <fieldset>
            <legend>
                <h2 style="text-align:center ; font-size:20px ; color:black ;"><B>COMENTAR</B></h2>
            </legend>
            <?php
            if ($no) {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $no; ?>
                </div>
            <?php
            }
            ?>

            <?php
            if ($yes) {
            ?>
                <div class="alert alert-info" role="alert">
                    <?php echo $yes; ?>
                </div>
            <?php
            }
            ?>
            <div class="tampilan-coment">
                <label for="pengguna"><B>NAMA :</b> </label>
                <input type="text" id="pengguna" name="pengguna"> <br>
                <label for="kelas"><b>KELAS : </b></label>
                <input type="text" id="kelas" name="kelas1"> <br>

                <textarea id="comem" name="comentar" style="margin-top:10px;" cols="31px " rows="5px" class="texttempat"></textarea>
                <br>
                <a href="#comentar"><input class="kirim" type="submit" name="submit" value="kirim" style="float:left;"> </a>

            </div>
        </fieldset>

    </form>