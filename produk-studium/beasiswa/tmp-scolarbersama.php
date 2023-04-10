<?php
include('../koneksi.php');
$sql = "SELECT  SUM(nominal) AS total 
		FROM `beasiswa` 
		GROUP BY id";
$stmt = mysqli_query($koneksi, $sql);
$total = 0;
while ($d1 = mysqli_fetch_array($stmt)) {
    $total += $d1['total'];
}
echo 'total : ' . number_format($total, 0, ',', '.');

$nama = "";
$nomor = "";
$nominal = "";
$keterangan = "";
$bukti = "";
$source = "";
$folder = "";
$sukses = "";
$gagal = "";
$kategori = "";
if (isset($_POST['submit'])) {
    $kategori = $_POST['kategori'];
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $nominal = $_POST['nominal'];
    $keterangan = $_POST['keterangan'];
    $bukti = $_FILES['bukti']['name'];
    $source = $_FILES['bukti']['tmp_name'];
    $folder = '../gambar/';
    move_uploaded_file($source, $folder . $bukti);



    $rian1 = "INSERT INTO validasibeasiswa( kategori,nama,nomor,nominal,keterangan,bukti) values('$kategori','$nama' , '$nomor' , '$nominal' , '$keterangan' , '$bukti' )";
    $rian2 = mysqli_query($koneksi, $rian1);
    if ($rian2) {
        $sukses = "Terima Kasih Atas Donasinya.";
        header('location:berhasil.php');
    } else {
        $sukses = "Terima Kasih Atas Donasinya.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi Scolarship</title>
    <style>
        form {
            margin: 30px auto;
            padding: 20px 30px;
            width: 520px;
            height: 535px;
            z-index: 3;
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

        form h1 {
            text-align: center;
            margin-top: -20px;

            color: #8479f4;
            margin-bottom: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 620px;


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

        .totaldonasi {
            margin-top: 100px;
        }

        .pph {
            margin-top: -20px;
            width: 500px;
            height: 200px;
            position: absolute;
            background-color: #34495e;
            opacity: 0;
            margin-left: 300px;
        }

        .value {
            border-bottom: 4px dashed #bdc3c7;
            text-align: center;
            font-weight: bold;
            font-size: 25px;
            width: 400px;
            height: 100px;
            line-height: 60px;
            margin: 40px auto;
            letter-spacing: -.07em;
            text-shadow: white 2px 2px 2px;
        }

        .value1 {
            text-align: center;
            font-weight: bold;
            font-size: 25px;
            width: 500px;
            line-height: 20px;
            margin: 40px auto;
            text-shadow: white 2px 2px 2px;
        }

        input[type="range"] {
            display: block;
            -webkit-appearance: none;
            background-color: #bdc3c7;
            width: 300px;
            height: 5px;
            border-radius: 5px;
            margin: 0 auto;
            outline: 0;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            background-color: #e74c3c;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            border: 2px solid white;
            cursor: pointer;
            transition: .3s ease-in-out;
        }

        ​ input[type="range"]::-webkit-slider-thumb:hover {
            background-color: white;
            border: 2px solid #e74c3c;
        }

        input[type="range"]::-webkit-slider-thumb:active {
            transform: scale(1.6);
        }

        .jdl-text {
            text-align: center;
            text-decoration: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }
    </style>
    <?php include('./header-beasiswa.php') ?>


    <div class="totaldonasi">
        <div class="pph">
        </div>
        <input type="range" min="0" max="5000000" value=<?php echo $total ?>>
        <h4 class="value1">Total donasi Bersama</h4>
        <div class="value"><?php echo 'Rp ' . number_format($total, 0, ',', '.'); ?></div>
    </div>
    <form method="POST" action="" enctype="multipart/form-data">

        <h1 style="color:#3AF2B2;">Donasi is a part of live</h1>
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
        <label for="kategori">Kategori :</label>
        <select name="kategori" id="kategori" style="width:300px ; height: 30px;" required>
            <option value="Donasi Bersama">Donasi Bersama</option>
        </select>
        <label for="asu">Nama : </label>
        <input id="asu" type="text" name="nama" placeholder="Nama Lengkap" required><br>
        <label for="harga">Nomor : </label>
        <input type="number" name="nomor" id="harga" placeholder="nomor Wa (opsional)"> <br>
        <label for="nominal">Nominal : </label>
        <input type="number" name="nominal" placeholder="min 10.000" id="nominal" min="10000" title="Minimal donasi 10.000" required> <br>
        <textarea name="keterangan" rows="4" cols="37" style="margin-left: 110px ;" placeholder="keterangan"></textarea><br>
        <p style="color:red; font-size:15px ;margin-bottom:-10px;">*Pembayaran Dapat Dilakukan melalui bni 062367896 a.n studium atau Dapat Melalui 0858-5665-2306 (dana,ovo,gopay) </p>
        <label>Bukti Trasfer: </label>
        <input type="file" required class="form-control form-control" id="file" name="bukti" value="<?php echo $bukti ?>"><br>
        <input class="tbl-submit" type="submit" name="submit" value="kirim">
    </form>
    </body>

</html>