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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="../buku/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style-ikon.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../buku/sweetalert2.min.css">

    <title>Dasboard Donatur</title>
    <style>
        .program {
            margin-top: -10px;
            width: 670px;
            height: 435px;
            overflow-x: scroll;
            overflow-y: hidden;
            margin-left: 300px;
            margin-bottom: 20px;

        }

        .jdl-program {
            margin-left: 20px;
            font-size: 21.5px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 450;
            color: black;
            position: absolute;
        }

        .displayprogram {
            display: flex;
        }

        .lab {
            width: 400px;
            height: 360px;
            margin: 10px;
            box-shadow: 0px 0px 15px #787A91;
            border-radius: 10px;
        }

        .lab h5 {
            margin-left: 10px;
        }

        .lab img {
            width: 350px;
            height: 200px;
            ;
        }

        .lab p {
            padding-left: 10px;
            padding-right: 10px;
        }

        .tahugak {
            text-decoration: none;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            padding: 5px 5px;
            text-align: center;
            font-weight: 400;
            color: white;

            background-color: #3DB2FF;
            background-size: cover;
            border-radius: 30px;
            width: 430px;
            line-height: 30px;
            margin: 20px auto;
            margin-top: 30px;
        }

        .tbl-donasi {
            text-decoration: none;

        }

        .infobadan {
            display: flex;
            margin: 10px;
            padding: 10px;
            margin-bottom: 70px;
            padding-bottom: 0px;
            position: relative;
            margin-left: 390px;

        }

        .infotabel {
            padding: 10px;
        }

        .infotabel:hover {
            transform: scale(1.1);
            transition: 1s;
        }

        .infotabel img {
            width: 125px;
            height: 125px;
            border-radius: 50%;

        }

        .infotabel p {
            text-align: center;
            font-size: 18px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 500;
        }

        .totaldonasi {
            margin-top: 50px;
        }

        .tahugak1 {
            text-decoration: none;
            padding: 5px 5px;
            text-align: center;
            font-weight: bold;
            color: #3DB2FF;
            line-height: 30px;
            background-color: white;
            background-size: cover;
            border-radius: 30px;
            width: 430px;
            margin: 20px auto;
            margin-top: 30px;
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
        }

        .value1 {
            text-align: center;
            font-weight: bold;
            font-size: 25px;
            width: 500px;
            line-height: 20px;
            margin: 40px auto;
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

        label {
            margin-right: 10px;
        }

        textarea {
            margin-left: 100px;
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
</head>
<?php include('header-beasiswa.php') ?>

<h2 class="jdl-text" style="margin-top:90px;">Ingin Donasi Beasiswa ?</h2>

<div class="tahugak">
    <a href="tmp-scolarbersama.php" class="tbl-donasi" style="color:white"> Galang Donasi Sekarang</a>
</div>

<div class="tahugak1">
    <a href="https://api.whatsapp.com/message/VTIQO5QE6KA4G1" target="_blank" class="tbl-donasi"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
            <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z" />
        </svg> Tanya Tentang Studium Scholarship</a>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width:600px; height: 300px;margin-left: 330px; object-fit: contain;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="width:600px;height:300px;">
        <div class="carousel-item active">
            <a href="tmp-scolarbersama.php"><img src="../gambar/scolar-promosi3.png" class="d-block w-100" alt="..."></a>
        </div>
        <div class="carousel-item">
            <a href="tmp-donasisiswa.php"><img src="../gambar/scolar-promosi2.png" class="d-block w-100" alt="..."></a>
        </div>
        <div class="carousel-item">
            <a href="tmp-donasibenda.php"><img src="../gambar/scolar-promosi1.png" class="d-block w-100" alt="..."></a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="totaldonasi">
    <div class="pph">
    </div>
    <input type="range" min="0" max="5000000" value=<?php echo $total ?>>
    <h4 class="value1">Total donasi Bersama</h4>
    <div class="value"><?php echo 'Rp ' . number_format($total, 0, ',', '.'); ?></div>
</div>
<h2 style="text-align: center;">Jenis Donasi</h2>
<div class="infobadan">
    <div class="infotabel">
        <a href="tmp-scolarbersama.php"><img src="../gambar/scolar-fitur1.png"></a>
        <p>Donasi Bersama</p>
    </div>
    <div class="infotabel">
        <a href="tmp-donasisiswa.php"><img src="../gambar/scolar-fitur2.png"></a>
        <p>Peduli Siswa</p>
    </div>
    <div class="infotabel">
        <a href="tmp-donasibenda.php"><img src="../gambar/scolar-fitur3.png"></a>
        <p>Peduli Sekolah</p>
    </div>

</div>
<div class="program">
    <p class="jdl-program">Program-program Studium Scholarship</p>
    <br><br>
    <div class="displayprogram">
        <div class="lab">
            <img src="../gambar/info-fitur2.png">
            <h5>Beasiswa Bersama</h5>
            <p>Merupakan beasiswa yang secara serentak dilaksanakan untuk para siswa dengan persyaratan dan seleksi yang sudah dilakukan, sumber dana beasiswa berasal dari masyarakat.</p>
        </div>
        <div class="lab">
            <img src="../gambar/info-fitur1.png">
            <h5>Peduli Siswa</h5>
            <p>Sumbangkan dana kepada Siswa yang membutuhkan untuk menunjang masa depan dalam berpendidikan.</p>
        </div>
        <div class="lab">
            <img src="../gambar/info-fitur3.png">
            <h5>Peduli Sekolah</h5>
            <p>Masyarakat dapat mendonasikan uang atau barang kepada sekolah sebagai penunjang pembelajaran di kala pandemi.</p>
        </div>

    </div>
</div>
<?php include('footer.php')  ?>
<script>
    var elem = document.querySelector('input[type="range"]');

    var rangeValue = function() {
        var newValue = elem.value;
        var target = document.querySelector('.value');
        target.innerHTML = newValue;
    }

    elem.addEventListener("input", rangeValue);
</script>

</html>