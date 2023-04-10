<?php
include('koneksi.php');
$fname = "";
$nomor = "";
$file = "";
$email = "";
$tanggal = "";
$pertemuan = "";
$anak = "";
$total = "";
$mapel = "";

$sukses = "";
$gagal = "";

$doc = " ";
$source = " ";

if (isset($_POST['simpan'])) {
    $fname = $_POST['fname'];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];
    $file = $_FILES['file']['name'];
    $source = $_FILES['file']['tmp_name'];
    $folder = './gambar/';
    $tanggal = $_POST['tanggal'];
    $pertemuan = $_POST['pertemuan'];
    $anak = $_POST['anak'];
    $total = $_POST['total'];
    $mapel = $_POST['mapel'];
    move_uploaded_file($source, $folder . $file);



    $sqli = "INSERT INTO pembayaran1 (nama,nomorhp,email,bukti,tanggal,pemesanan,orang,harga,mapel) values ('$fname' , '$nomor' , '$email' , '$file' , '$tanggal','$pertemuan' , '$anak','$total','$mapel')";
    $q1 = mysqli_query($koneksi, $sqli);
    if ($q1) {
        header("location:./berhasil.php");
    } else {
        header("location:./berhasil.php");
        $gagal = "maaf gagal memasukkan data";
    }
}


if (!$koneksi) {
    die("data tidak di temukan");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./buku/dist/sweetalert2.all.min.js"></script>
    <title>data pembayaran</title>
    <style>
        .max-auto {
            margin: 50px auto;
        }

        body {
            background-color: white;
            background-repeat: no-repeat;
            background-size: cover;

        }

        form {

            background-color: white;
            background-repeat: no-repeat;
            background-size: 1100px;
            margin-top: 30px;

        }
    </style>
    <?php
    include('botstap.php');
    ?>
    <br>
    <br>
    <div class="max-auto" style="width: auto; margin-top : 50px;">
        <div class="card">
            <div class="card-header">
                data pembayaran
            </div>
            <div class="card-body">
                <p style="color:red;">*silahkan Mengirim Data Pembayaran, Setelah itu akan Diverifikasi oleh Admin kemudian Anda Dapat Menset Jadwal !</p>

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
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="btn" name="fname" value="<?php echo $fname ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nomorhp" class="col-sm-2 col-form-label">nomor hp(WA)</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nomorhp" name="nomor" value="<?php echo $nomor ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="total" class="col-sm-2 col-form-label">total pembayaran: </label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="total" placeholder="RP " name="total" value="<?php echo $total ?>">
                        </div>
                        <label for="tgl" class="col-sm-2 col-form-label">tanggal pembayaran: </label>
                        <div class="col-sm-3">
                            <input type="date" class="form-control" id="tgl" name="tanggal" value="<?php echo $tanggal ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="pertemuan" class="col-sm-2 col-form-label">jumlah pertemuan : </label>
                        <div class="col-sm-3">
                            <input type="number" class="form-control" id="pertemuan" name="pertemuan" value="<?php echo $pertemuan ?>">
                        </div>
                        <label for="anak" class="col-sm-2 col-form-label">jumlah peserta : </label>
                        <div class="col-sm-5">
                            <select style="padding:10px; padding-right: 50px ;" name="anak" id="anak" value="<?php echo $anak ?>">
                                <option>Set Orang</option><br>
                                <optgroup label="Jumlah Orang">
                                    <option> 1 orang</option>
                                    <option> 2 orang</option>
                                    <option> 3 orang</option>
                                    <option> 4 orang</option>
                                    <option> 5 orang</option>
                                    <option> 6 orang</option>

                                </optgroup>
                            </select>
                        </div>
                        <label for="mapel" class="col-sm-2 col-form-label">Mata Pelajaran : </label>
                        <div class="col-sm-5">
                            <select style="padding:10px; padding-right: 50px ;" name="mapel" id="mapel" value="<?php echo $mapel ?>">
                                <option>Set Mapel</option>
                                <br>
                                <optgroup label="Mata Pelajaran">
                                    <option>Fisika</option>
                                    <option>Kimia</option>
                                    <option>Matematika</option>
                                    <option>Biologi</option>
                                    <option>Coding</option>
                                    <option>dll.</option>


                                </optgroup>
                            </select>
                        </div>
                    </div>
            </div>



            <div style="margin-left:20px">
                <label for="file" class="form-label">bukti pembayaran</label>
                <input type="file" class="form-control form-control-lg" id="file" name="file" value="<?php echo $file ?>">

            </div>

            <div class="col-12">
                <input type="checkbox" name="cek" value="nomor WA terisi dengan benar " class="btn btn-primary" style="margin : 20px ;" required>&nbsp;nomor WA terisi dengan benar
            </div>

            <div class="col-12">
                <input type="submit" name="simpan" value="simpan data" class="btn btn-primary" style="margin : 20px ;">
            </div>
            </form>
        </div>
    </div>
    </div>
    </body>

    <script>
        var btn = document.getElementById('btn');
        btn.addEventListener('click', function() {
            Swal.fire({
                title: '<strong>Info Penting !</strong>',
                icon: 'info',
                html: '<h5 style="color : red ;">*Harap dibaca*</h5>' +
                    '<br>1. Harap isi data dengan jujur.' +
                    '<br>2. upload bukti pembayaran hanya dapat dilakukan sekali saja.' +
                    '<br>3. masukkan harga yang sesuai dengan harga studium. ' +
                    '<br><strong>bisa dicek disini</strong> .<br>( isi dengan benar ! )' +
                    '<a href="home.php#hargae" > links</a>' +
                    '<br>4. Harap isi nomer WA dengan benar , karena setelah dikonfirmasi ,siswa dapat me-list jadwal melalui WA dan akan dibuatkan grub untuk mempermudah pembelajaran.'
                    //  '<a href="//sweetalert2.github.io">links</a> ' +



                    ,
                showCloseButton: true,
                showCancelButton: false,
                focusConfirm: true,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i>Saya Mengerti ',
            })
        })
    </script>

    <script>
        const gbr = Document.getElementById('gbr');
        gbr.addEventListener('click', function() {

            Swal.fire({
                imageUrl: 'https://placeholder.pics/svg/400x1500',
                imageHeight: 400,
                imageAlt: 'A tall image'
            })
        })
    </script>

</html>