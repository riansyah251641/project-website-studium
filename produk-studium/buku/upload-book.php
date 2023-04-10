<?php
include('../koneksi.php');
$tema = "";
$file = "";
$file1 = "";
$file2 = "";
$file3 = "";
$harga = "";
$keterangan = "";
$kualitas = "";
$files = "";
$folder = "";
$source = "";
$source1 = "";
$source2 = "";
$kode = "";
$sukses = "";
$gagal = "";
$lokasi = "";
$genre = "";
$file3 = "";
$alamat = "";
if (isset($_POST['submit'])) {

    $tema = $_POST['asu'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    $kualitas = $_POST['kualitas'];
    $kode = $_POST['kode'];
    $genre = $_POST['genre'];
    $alamat = $_POST['alamat'];
    $lokasi = $_POST['lokasi'];
    $file = $_FILES['gambar']['name'];
    $file1 = $_FILES['gambar1']['name'];
    $file2 = $_FILES['gambar2']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $source1 = $_FILES['gambar1']['tmp_name'];
    $source2 = $_FILES['gambar2']['tmp_name'];
    $folder = '../gambar/';
    move_uploaded_file($source, $folder . $file);
    move_uploaded_file($source1, $folder . $file1);
    move_uploaded_file($source2, $folder . $file2);
    $syah1 = "INSERT INTO verifikasibuku(gambar,gambar1,gambar2,genre,judul,kualitas,alamat,lokasi,harga,kode,keterangan) values ('$file' ,'$file1' , '$file2' ,'$genre' ,'$tema' , '$kualitas' ,'$alamat', '$lokasi' ,'$harga' , '$kode' , '$keterangan' ) ";
    $syah2 = mysqli_query($koneksi, $syah1);
    if ($syah2) {
        $sukses = "Buku Berhasil Di Upload";
        header("location:berhasil.php");
    } else {
        $sukses = "Buku Berhasil Di Upload";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="dist/sweetalert2.all.min.js"></script>


    <title>Jual Buku</title>
    <style>
        .window {
            width: 1263px;
            height: 900px;
            background-color: #EFEFEF;
        }

        .basic {
            margin: 95px auto;
            padding: 20px 30px;
            width: 620px;
            height: 840px;
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
            width: 400px;
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
            text-shadow: transparent;
            color: #8479f4;
            margin-bottom: 20px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            text-shadow: 0px 2px grey;

        }

        .tbl-panduan {
            position: absolute;
            float: right;
            padding: 8px 20px;
            top: 150px;
            margin-left: 460px;
            border: 0.1 px solid white;
            border-radius: 10px;
            background-color: #8479f4;
            box-shadow: 0 0 5px #787A91;
            color: white;
            font-size: 18px;
            font-weight: 300;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .tbl-panduan:hover {
            cursor: pointer;
        }

        .file {
            width: 250px;
            height: 50px;
            padding: 10px;
        }

        .link-buku {
            margin-top: 300px;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 10px;
            box-shadow: 0 0 5px 3px grey;
        }

        .form-control form-control {
            width: 200px
        }
    </style>
    <?php include("./buku.php") ?>
    <div class="window">
        <form method="POST" action="" enctype="multipart/form-data" class="basic">
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

            <h1>Sell Your Book</h1>
            <p class="tbl-panduan" id="btn">Panduan</p>
            <label>Gambar Cover :</label>
            <input type="file" id="btn1" required class="form-control form-control" name="gambar" value="<?php echo $file ?>"><br>
            <label>Gambar Penjelas : </label>
            <input type="file" required class="form-control form-control" id="file" name="gambar1" value="<?php echo $file1 ?>"><br>
            <input type="file" required class="form-control form-control" id="file" name="gambar2" value="<?php echo $file2 ?>"><br>
            <input type="file" required class="form-control form-control" id="file" name="gambar3" value="<?php echo $file3 ?>"><br>
            <label for="Genre">Genre: </label>
            <select name="genre" id="Genre" style="width:400px ; height: 30px;" required>
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
            <input id="asu" type="text" name="asu" placeholder="Judul buku / tahun " required><br>
            <label for="kualitas">kualitas: </label>
            <select name="kualitas" id="kualitas" style="width:400px ; height: 30px;" required>
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
            <textarea required name="keterangan" rows="4" cols="50" style="margin-left: 160px ;" placeholder="keterangan"></textarea><br>
            <input class="tbl-submit" type="submit" name="submit" value="kirim">
        </form>
    </div>
    </body>

    <script>
        var btn = document.getElementById('btn');
        btn.addEventListener('click', function() {
            Swal.fire({
                title: '<strong>Panduan Upload Buku ke studium bookcase</strong>',
                icon: 'info',
                html: '<h5 style="color : red ;">*Harap dibaca*</h5>' +
                    '<h6 style="color : red ;">*Kesalahan upload hanya akan merugikan kalian*</h6>' +
                    '<br><br>1. Upload foto yang menyatakan buku sebenarnya<br>&nbsp foto pertama merupakan foto cover buku ' +
                    //  '<a href="//sweetalert2.github.io">links</a> ' +
                    '<br>&nbsp foto kedua dan ketiga merupakan penjelas bagian buku' +
                    '<br><br>2. Pilih genre yang sesuai dengan buku anda !' +
                    '<br><br>3. Tulis judul buku yang sudah tertera pada cover buku tersebut' +
                    '<br><br>4. Masukkan kualitas buku dengan ketentuan A (kondisi sangat bagus) , B (bagus)' +
                    '&nbsp  C (cukup bagus) dan D (kurang bagus).' +
                    '<br><br>5.Tambahkan alamat anda , agar pembeli dapat mengestimasi biaya untuk ongkos kirim' +
                    '<br><br>6.Masukkan harga dengan batas maksimal 70% dari harga asli.' +
                    '<br><br>7.Masukkan kode buku, dimana kode buku tidak boleh<br>sama pada setiap penjualan ' +
                    'dengan ketentuan 3 <br> digit awal singkatan dari mata perlajaran buku tersebut' +
                    '<br>&nbsp lalu beri tanda ( _ ) tampa spasi dan masukkan 3 digit angka yang mewakili nama pembeli' +
                    '<br>dan yang terakhir masukkan 2 digit angka bebas.' +
                    '<br><strong>contoh : </strong> bin_ryn25 , dengan keterangan <br> pelajaran b.indo , pembuat riyan dan dua digit bebas.' +
                    '<br><br>8. masukkan keterangan buku dengan minimal terdapat info kondisi buku , keluaran tahun buku ,jumlah halaman, nama penerbit , dan harga asli. '



                    ,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: true,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i>Saya Mengerti ',
            })
        })

        var btn1 = document.getElementById('btn1');
        btn1.addEventListener('click', function() {
            Swal.fire({
                title: '<strong>Panduan Upload Buku ke studium bookcase</strong>',
                icon: 'info',
                html: '<h5 style="color : red ;">*Harap dibaca*</h5>' +
                    '<h6 style="color : red ;">*Kesalahan upload hanya akan merugikan kalian*</h6>' +
                    '<br><br>1. Upload foto yang menyatakan buku sebenarnya<br>&nbsp foto pertama merupakan foto cover buku ' +
                    //  '<a href="//sweetalert2.github.io">links</a> ' +
                    '<br>&nbsp foto kedua dan ketiga merupakan penjelas bagian buku' +
                    '<br><br>2. Pilih genre yang sesuai dengan buku anda !' +
                    '<br><br>3. Tulis judul buku yang sudah tertera pada cover buku tersebut' +
                    '<br><br>4. Masukkan kualitas buku dengan ketentuan A (kondisi sangat bagus) , B (bagus)' +
                    '&nbsp  C (cukup bagus) dan D (kurang bagus).' +
                    '<br><br>5.Tambahkan alamat anda , agar pembeli dapat mengestimasi biaya untuk ongkos kirim' +
                    '<br><br>6.Masukkan harga dengan batas maksimal 70% dari harga asli dan akan dikenakan tambahan biaya sebanyak 5K dari admin.' +
                    '<br><br>7.Masukkan kode buku, dimana kode buku tidak boleh<br>sama pada setiap penjualan ' +
                    'dengan ketentuan 3 <br> digit awal singkatan dari mata perlajaran buku tersebut' +
                    '<br>&nbsp lalu beri tanda ( _ ) tampa spasi dan masukkan 3 digit angka yang mewakili nama pembeli' +
                    '<br>dan yang terakhir masukkan 2 digit angka bebas.' +
                    '<br><strong>contoh : </strong> bin_ryn25 , dengan keterangan <br> pelajaran b.indo , pembuat riyan dan dua digit bebas.' +
                    '<br><br>8. masukkan keterangan buku dengan minimal terdapat info kondisi buku , keluaran tahun buku ,jumlah halaman, nama penerbit , dan harga asli. '



                    ,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: true,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i>Saya Mengerti ',
            })
        })
    </script>


</html>