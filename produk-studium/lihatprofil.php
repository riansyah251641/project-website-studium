<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Tutors</title>
    <link rel="stylesheet" href="style-profile.css">
    <style>
        form h5 {
            margin-left: 20px;

        }

        form h3 {
            margin-left: 20px;
        }

        legend {

            margin: 100%;
            margin-top: 90px;
            margin-left: 390px;
        }

        body {

            background-image: url(./gambar/background-tutors.png);
            background-repeat: no-repeat;
            background-size: cover;

        }

        h5 {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .zoomgbr:hover {
            cursor: pointer;
            margin-left: 100px;
            width: 300px;
            height: 300px;


        }

        @media(min-width:300px) and (max-width:700px) {
            legend {
                margin-top: 160px;
                margin-left: 20px;

            }
        }
    </style>
    <?php include('botstap.php') ?>
    <form>
        <legend style="width: 490px;">
            <?php
            if (isset($_POST["yofa"])) { ?>
                <img class="zoomgbr" src="./gambar/yofa.jpeg">

            <?php
            }
            ?>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["yofa"])) {


                    echo "<h5><b>Nama    : Eka Yofa Prasetyo </b></h5><br>";
                    echo "<h5><b>Kampus  : Institut Teknologi Sepuluh Nopember </b></h5><br>";
                    echo "<h5><b>Jurusan : Teknik Fisika </b></h5><br>";
                    echo "<h3><b>Prestasi Semasa SMA</b></h3><br>";
                    echo "<h5><b>1. Mewakili OSK di Bidang Fisika Selama 2 Tahun </b></h5><br>";
                    echo "<h5><b>2. Juara Biomedik UNAIR Nomer 1</b></h5><br>";
                    echo "<h5><b>3. Nomor 1 paralel di SMAN 1 Manyar </b></h5><br>";
                    echo "</form></legend>";
                }
                if (isset($_POST["rian"])) { ?>
                    <img class="zoomgbr" src="./gambar/rian..jpg">
                <?php



                    echo "<h5><b>Nama    : Muhammad Febriansyah </b></h5><br>";
                    echo "<h5><b>Kampus  : Institut Teknologi Sepuluh November </b></h5><br>";
                    echo "<h5><b>Jurusan : Teknik Informatika (jalur UTBK) </b></h5><br>";
                    echo "<h3><b>Prestasi Semasa SMA</b></h3><br>";
                    echo "<h5><b>1. Mewakili OSK di Bidang Matematika Selama 2 Tahun </b></h5><br>";
                    echo "<h5><b>2. Finalis Tecnocorner 2020 di UGM  </b></h5><br>";
                    echo "<h5><b>3. Mengikuti Pembinaan OSN di Surabaya </b></h5><br>";
                    echo "</form></legend>";
                }

                if (isset($_POST["rizki"])) { ?>
                    <img class="zoomgbr" src="./gambar/rizki.jpeg">
                <?php



                    echo "<h5><b>nama : Muhammad Rizki Ardiansah </b></h5><br>";
                    echo "<h5><b>kampus : - </b></h5><br>";
                    echo "<h5><b>jurusan : -</b></h5><br>";
                    echo "<h3><b>prestasi semasa SMA</b></h3><br>";
                    echo "<h5><b>1. mewakili osk di bidang MATEMATIKA dan TIK selama 1 tahun </b></h5><br>";
                    echo "<h5><b>2. Finalis Tecnocorner 2020 di UGM  </b></h5><br>";
                    echo "<h5><b>3. Mengikuti Pembinaan OSN di Surabaya Selama 2 Tahun</b></h5><br>";
                    echo "</form></legend>";
                }


                if (isset($_POST["fara"])) { ?>
                    <img class="zoomgbr" src="./gambar/fara.jpg">
                <?php



                    echo "<h5><b>nama : Nur izzah Faradillah </b></h5><br>";
                    echo "<h5><b>kampus : Universitas Negeri Malang </b></h5><br>";
                    echo "<h5><b>jurusan : Pendidikan Kimia (jalur SNMPTN ) </b></h5><br>";
                    echo "<h3><b>Prestasi Semasa SMA</b></h3><br>";
                    echo "<h5><b>1. mewakili osk di bidang Kimia selama 1 tahun </b></h5><br>";
                    echo "<h5><b>2. Mengikuti Pembinaan OSN di Surabaya</b></h5><br>";
                    echo "<h5><b>3. Termasuk dalam 10 Besar paralel dalam Sekolah </b></h5><br>";
                    echo "</form></legend>";
                }
                if (isset($_POST["dita"])) { ?>
                    <img class="zoomgbr" src="./gambar/dita.jpg">
            <?php



                    echo "<h5><b>nama : Giva Yuniar Rahmadita </b></h5><br>";
                    echo "<h5><b>kampus : Universitas Airlangga </b></h5><br>";
                    echo "<h5><b>jurusan : Teknik Kimia (jalur SNMPTN ) </b></h5><br>";
                    echo "<h3><b>Prestasi Semasa SMA</b></h3><br>";
                    echo "<h5><b>1. Mewakili OSK di bidang KIMIA selama 2 tahun </b></h5><br>";
                    echo "<h5><b>2. juara Biomedik UNAIR nomer 1</b></h5><br>";
                    echo "<h5><b>3. Mengikuti pelatihan OSN Kimia di Surabaya </b></h5><br>";
                    echo "</form></legend>";
                }
            }
            ?>