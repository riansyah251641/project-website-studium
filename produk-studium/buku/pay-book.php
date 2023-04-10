<?php
include('../koneksi.php');
$nama = "";
$nomor = "";
$alamat = "";
$kode = "";
$sukses = "";
$gagal = "";
$file = "";
$folder = "";
$harga = "";
$lokasi = "";
$source = "";
if (isset($_POST['submit'])) {
    $harga = $_POST['harga'];
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $lokasi = $_POST['lokasi'];
    $kode = $_POST['kode'];
    $file = $_FILES['bukti']['name'];
    $source = $_FILES['bukti']['tmp_name'];
    $folder = '../gambar/';
    move_uploaded_file($source, $folder . $file);

    $rian1 = "INSERT INTO databuku(nama,nomor,alamat,lokasi,kode,harga,bukti) values('$nama' , '$nomor' , '$alamat' ,'$lokasi', '$kode','$harga','$file' )";
    $rian2 = mysqli_query($koneksi, $rian1);
    if ($rian2) {
        $sukses = "Buku Berhasil dibayar";
        header("location:berhasilbeli.php");
    } else {
        $gagal = "Terdapat Kesalahan ,dalam memasukkan data!!!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli buku</title>
    <style>
        .basic {
            margin: 95px auto;
            padding: 20px 30px;
            width: 520px;
            height: 610px;
            z-index: 3;
            background-color: #FEFBF3;
            border: 1px solid black;
            border-radius: 20px;
            text-align: left;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            box-shadow: 0 0 20px #787A91;

        }

        form h1 {
            top: -40px;

            text-shadow: 2px 2px 5px grey;
            text-align: center;
        }

        label {
            margin-top: 10px;
            margin-bottom: 10px;
            width: 94px;
        }

        input {
            width: 300px;
            height: 30px;
            border-radius: 5px;
            border: 0.1px solid black;
            margin-bottom: 20px;


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

        .tbl-out {
            background-color: #3D56B2;
            ;
            color: white;
            border-radius: 10px;
            float: right;
            margin-right: 20px;
            z-index: 3;
            width: 100px;
            height: 40px;

        }

        .tbl-out:hover {
            box-shadow: 0 0 20px #787A91;
            background-color: #14279B;
            text-transform: uppercase;
        }
    </style>
    <?php include('./buku.php') ?>


    <!--
<form method="POST" action="" >
        <h1>Data Pembayaran Buku</h1>
        <table for="nama">Nama : </table>
        <input type="text" name="nama" id="nama" required><br>
        <table for="nomor">Nomor WA :</table>
        <input type="number" name="nomor" id="nomor" placeholder="nomor wa !!!" required><br>
        <table for="alamat">Alamat : </table>
        <input type="text" name="alamat" id="alamat" required><br>
        <table for="kode">Masukkan Kode Buku :</table>
        <input type="text" name="kode" id="kode" placeholder="kode buku" required>
        <p style="color:red; font-size:12px ;margin-bottom:-10px;">*Pembayaran Dapat Dilakukan melalui bni 062367896 a.n studium atau Dapat Melalui 0858-5665-2306 (dana,ovo,gopay) </p>
        <input style="margin-top:20px ;" type="file" name="bukti" required >
        <input  type="submit" class="tbl-out" name="submit" value="kirim">
    </form>
-->



    <form method="POST" action="" enctype="multipart/form-data" class="basic">
        <h1>Pay Your Book</h1>
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
        <label for="asu">Nama : </label>
        <input type="text" name="nama" required id="btn" placeholder="Nama lengkap"><br>
        <label for="harga">nomor : </label>
        <input type="number" name="nomor" id="harga" placeholder="Nomor Whatssapp" required> <br>
        <label for="kode">Alamat : </label>
        <input type="text" name="alamat" id="kode" placeholder="isi dengan lengkap !" required> <br>
        <label for="place">lokasi : </label>
        <input type="text" name="lokasi" id="place" placeholder="share lokasi di maps" required> <br>
        <label for="kode">Kode Buku : </label>
        <input type="text" name="kode" id="kode" placeholder="pastikan benar !" required> <br>
        <label for="harga">Harga : </label>
        <input type="number" name="harga" id="harga" placeholder="harga buku + biaya ongkir" required> <br>
        <span style="color:red; font-size:15px ;margin-bottom:-10px; ">*Cek ongkir dapat dilihat disini !</span>
        <a target="_blank" href="https://berdu.id/cek-ongkir">cek</a>
        <p style="color:red; font-size:15px ;margin-bottom:-10px;">*Pembayaran Dapat Dilakukan melalui bni 062367896 a.n studium atau Dapat Melalui 0858-5665-2306 (dana,ovo,gopay) </p><br>
        <label>Bukti Pembayaran </label>
        <input type="file" required class="form-control form-control" id="file" name="bukti" value="<?php echo $file ?>"><br>
        <input class="tbl-out" type="submit" name="submit" value="kirim">



    </form>
    </body>
    <script>
        const btn = document.getElementById('btn');
        btn.addEventListener('click', function() {
            Swal.fire({
                title: '<strong>Panduan Beli buku pada studium bookcase</strong>',
                icon: 'warning',
                html: '<h5 style="color : red ;">*Harap dibaca*</h5>' +
                    '<h6 style="color : red ;">*Kesalahan pengisian data hanya akan merefund uang anda dengan kembali < 95% dari uang awal*</h6>' +
                    '<br><br>1. Isi nama lengkap anda sesuai KTP ' +
                    //  '<a href="//sweetalert2.github.io">links</a> ' +
                    '<br><br>2. masukkan nomor anda yang memiliki app WA !' +
                    '<br><br>3. Masukkan alamat anda yang sesuai , untuk pengiriman bukunya.' +
                    '<br><br>4. Tambahkan lokasi juga untuk memastikannya' +
                    '<br><br>5.Tambahkan alamat anda , agar pembeli dapat mengestimasi biaya untuk ongkos kirim' +
                    '<br><br>6.Masukkan kode buku yang sesuai dengan buku yang ingin dibeli.' + '<span style="color : red ;"> Jangan sampai salah ya!</span>' +
                    '<br><br>7.Masukkan total harga , yang termasuk biaya ongkir serta harga bukunya !' +
                    '<span style="color : red ;"><br>Jika terdapat kekurangan dalam uang trasfer , maka uang akan di refund dan akan dipotong dari harga awal<br>sehingga harap masukkan harga dengan sebenar-benarnya.</span>' + '<br> cek ongkir dapat dilihat disini !<a target="_blank" href="https://berdu.id/cek-ongkir">cek</a> ' +
                    '<br><br>8.Jika sudah silahkan cek kembali dan tekan tombol kirim , kemudian <strong>untuk info pengirimannya akan di informasikan melalui WA anda !</strong>',
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: true,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i>Saya Mengerti ',
            })
        })
    </script>

</html>