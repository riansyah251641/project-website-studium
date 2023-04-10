<?php
include('../koneksi.php');
$kode = "";
$sukses = "";
$gagal = "";
if (isset($_POST['submit'])) {
    $kode = $_POST['kode'];

    $rian1 = "DELETE FROM buku WHERE kode = '$kode' ";
    $rian2 = mysqli_query($koneksi, $rian1);
    if ($kode) {
        $sukses = "Data Berhasil di Delete";
    } else {
        echo "gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
    <style>
        .hom {
            margin: 250px auto;
            width: 400px;
            height: auto;
            border-radius: 5px;
            background-color: blanchedalmond;
            padding: 20px 20px;
            border: 1px solid black;
        }

        input[type=text] {
            width: 250px;
            height: 30px;
            margin-left: 10px;
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
    </style>
    <?php include("../header-admin.php") ?>
    <form method="POST" action="" class="hom">

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

        <h3>Kode Buku Yang Akan di Delete</h3>
        <input type="text" placeholder="judul" name="kode"><br>
        <input type="submit" class="tbl-submit" value="kirim" name="submit">
        <a href="../studium-book-admin.php" style="font-size: 30px;">back</a>
    </form>


    </body>

</html>