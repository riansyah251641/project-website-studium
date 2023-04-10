<?php
include('../koneksi.php');
$nama = "";
$gambar1 = "";
$gambar2 = "";
$alamat = "";
$lokasi = "";
$keterangan = "";
$kualitas = "";
$harga = "";
$kode = "";
$genre = "";
$judul = "";
$gambar = "";
$folder = "";
$file = "";
$file1 = "";
$file2 = "";
$file3 = "";
$source = "";
$source1 = "";
$source2 = "";
if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $gambar1 = $_POST['gambar1'];
    $gambar2 = $_POST['gambar2'];
    $genre = $_POST['genre'];
    $harga = $_POST['harga'];
    $kualitas = $_POST['kualitas'];
    $keterangan = $_POST['keterangan'];
    $alamat = $_POST['alamat'];
    $lokasi = $_POST['lokasi'];
    $source = $_FILES['gambar']['tmp_name'];
    $source1 = $_FILES['gambar1']['tmp_name'];
    $source2 = $_FILES['gambar2']['tmp_name'];
    $folder = '../gambar/';


    $aran = $_POST['nama'];

    $rian1 = "UPDATE databuku SET  gambar ='$gambar',gambar1 ='$gambar1',gambar2 ='$gambar2' , genre = '$genre' ,judul = '$judul' , kualitas = '$kualitas', alamat = '$alamat',lokasi = '$lokasi',harga = '$harga',kode = '$kode' , keterangan = '$keterangan'  ,  WHERE judul = '$aran' ";
    $rian2 = mysqli_query($koneksi, $rian1);

    if ($rian2) {
        echo "berhasil";
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
    <title>update</title>
</head>
<style>
    .basic {
        margin: 110px auto;
        padding: 20px 30px;
        width: 720px;
        height: 950px;
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
        width: 150px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    input {
        width: 500px;
        height: 30px;
        border-radius: 5px;
        border: 0.1px solid black;

    }

    form h1 {
        text-align: center;
        margin-top: -20px;
        text-shadow: transparent;
        color: #8479f4;
        margin-bottom: 20px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: bold;
        text-shadow: 0px 2px grey;

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

    .form-control form-control {
        width: 200px
    }
</style>
<?php include("../header-admin.php") ?>
<form action="" method="POST" class="basic">
    <a href="../studium-book-admin.php" style="font-size: 30px; text-decoration:none">
        < back</a><br>
            <label for="nama">judul yang akan diedit</label><br>
            <input type="text" name="nama" placeholder="nama"><br>

            <h1 style="text-align: center;margin-top:20px">update data</h1>
            <label>Gambar Cover :</label>
            <input type="file" id="btn1" required class="form-control form-control" name="gambar" value="<?php echo $file ?>"><br>
            <label>Gambar Penjelas : </label>
            <input type="file" required class="form-control form-control" id="file" name="gambar1" value="<?php echo $file1 ?>"><br>
            <input type="file" required class="form-control form-control" id="file" name="gambar2" value="<?php echo $file2 ?>"><br>
            <input type="file" required class="form-control form-control" id="file" name="gambar3" value="<?php echo $file3 ?>"><br>
            <label for="Genre">Genre: </label>
            <select name="genre" id="Genre" style="width:500px ; height: 30px;" required>
                <option value="none">chose</option>
                <option value="Matematika">Matematika</option>
                <option value="Fisika">Fisika</option>
                <option value="Kimia">Kimia</option>
                <option value="Biologi">Biologi</option>
                <option value="B.Indonesia">B.Indonesia</option>
                <option value="B.Inggris">B.Inggris</option>
                <option value="Other">Other</option>
            </select> <br>
            <label for="asu">Judul Buku : </label>
            <input id="asu" type="text" name="judul" placeholder="Judul buku / tahun " required><br>
            <label for="kualitas">kualitas: </label>
            <select name="kualitas" id="kualitas" style="width:500px ; height: 30px;" required>
                <option value="none">chose</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select> <br>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat" required> <br>
            <label for="lokasi">Maps : </label>
            <input type="text" name="lokasi" id="lokasi" required placeholder="masukkan link google maps(embed link)"> <br>
            <label for="harga">harga : </label>
            <input type="number" name="harga" id="harga" required> <br>
            <label for="kode">Kode Buku : </label>
            <input type="text" name="kode" id="kode" required> <br>
            <textarea required name="keterangan" rows="4" cols="64" style="margin-left: 160px ;" placeholder="keterangan"></textarea><br>
            <input class="tbl-submit" type="submit" name="submit" value="kirim">
            <a href="../studium-book-admin.php" style="font-size: 30px;">back</a>

</form>
</body>

</html>