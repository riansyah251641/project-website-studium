<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .artikelbadan {
            display: flex;
            flex-wrap: wrap;
            margin: 5px 50px;
            padding: 5px;
            position: relative;
        }

        .artikelborder {
            text-align: center;
            font-weight: bold;
            height: auto;
            background-color: powderblue;
            background-size: cover;
            padding-top: 20px;
        }

        .artikelborder h1 {
            color: royalblue;
            font-weight: bold;
            font-size: 50px;
        }

        .artikelborder h2 {
            font-weight: bold;
            color: black;
            font-size: 40px;


        }

        .artikeltabel {
            margin: 20px 20px;
            padding: 10px;
            text-align: left;
            background-color: white;
            border-radius: 10px;
        }

        .artikeltabel img {
            width: 300px;
            height: 200px;
        }

        .artikeltabel h2 {
            color: whitesmoke;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 900;


        }

        .artikeltabel h4 {
            color: black;
            font-size: 20px;

            text-align: left;
        }

        .artikeltabel:hover {
            background-color: #916BBF;
            transition: 0.5s;
            transform: scale(1.02);
            box-shadow: 0px 0px 15px #787A91;

        }

        .artikeltombol {
            float: right;
            font-weight: bold;
            text-decoration: none;
            margin-top: -5px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
            color: white;
            margin-right: 20px;
            top: -5px;
        }

        @media (min-width:300px) and (max-width:800px) {
            .artikelbadan {
                display: inline;

            }

            .artikeltabel img {
                width: 300px;
            }

        }
    </style>
    <?php include('botstap.php') ?>

</head>

<body>
    <div class="artikelborder">
        <h1 class="navbarslide1" style="color: #3AF2B2 ; animation: animasiheader 5s infinite ; margin-top:100px ;"><span class="navbarslide1">Artikel </span> STUDIUM <span class="navbarslide1">LEARN</span> </h1><br>


        <div class="artikelbadan">
            <div class="artikeltabel">
                <a href="Tetap Produktif.php"> <img src="./gambar/produktif-tetap.jpg"> </a>
                <h4><b>tetap produktif di tengah<br>pandemi</b></h4>

            </div>
            <div class="artikeltabel">
                <a href="artikelolahraga.php"><img src="./gambar/olahraga1.jpg"> </a>
                <h4><B>Pola Hidup Sehat Dimasa<br>Pandemi </B></h4>

            </div>
            <div class="artikeltabel">
                <a href="artikeljurusan.php"> <img src="./gambar/orangbingung.jpg"> </a>
                <h4><b>Tips dan Trik Memilih Jurusan<br> Kuliah</b></h4>

            </div>

        </div>


        <div class="artikelbadan">
            <div class="artikeltabel">
                <a href="artikel-belajarefektif.php"> <img src="./artikel-belajarefektif_files/image001.jpg"> </a>
                <h4><b>Tata Cara Belajar Efektif</b></h4>

            </div>
            <div class="artikeltabel">
                <a id="sorry"><img src=" ./gambar/rapat.jpg"> </a>
                <h4><B>5 Hal Ini Wajib Kamu Lakukan<br>Semasa SMA </B></h4>

            </div>
            <div class="artikeltabel">
                <a id="sorry1"> <img src=" ./gambar/student.jpg"> </a>
                <h4><b>Hal Yang Harus Dipersiapkan<br> Menjelang Uts Online</b></h4>

            </div>

            <div class="artikeltabel">
                <a href="Tetap Produktif.php"> <img src="./gambar/produktif-tetap.jpg"> </a>
                <h4><b>tetap produktif di tengah<br>pandemi</b></h4>

            </div>
            <div class="artikeltabel">
                <a href="artikelolahraga.php"><img src="./gambar/olahraga1.jpg"> </a>
                <h4><B>Pola Hidup Sehat Dimasa<br>Pandemi </B></h4>

            </div>
            <div class="artikeltabel">
                <a href="artikeljurusan.php"> <img src="./gambar/orangbingung.jpg"> </a>
                <h4><b>Tips dan Trik Memilih Jurusan<br> Kuliah</b></h4>

            </div>
            <div class="artikeltabel">
                <a href="artikel-belajarefektif.php"> <img src="./artikel-belajarefektif_files/image001.jpg"> </a>
                <h4><b>Tata Cara Belajar Efektif</b></h4>

            </div>
            <div class="artikeltabel">
                <a id="sorry"><img src=" ./gambar/rapat.jpg"> </a>
                <h4><B>5 Hal Ini Wajib Kamu Lakukan<br>Semasa SMA </B></h4>

            </div>
            <div class="artikeltabel">
                <a id="sorry"> <img src=" ./gambar/student.jpg"> </a>
                <h4><b>Hal Yang Harus Dipersiapkan<br> Menjelang Uts Online</b></h4>

            </div>
            <div class="artikeltabel">
                <a href="artikel-utbk.php"> <img src="./artikel-utbk_files/image001.jpg"> </a>
                <h4><b>Hal Yang Harus Dipersiapkan<br>sebelum UTBK</b></h4>

            </div>




        </div>





    </div>
</body>
<script>
    var sorry = document.getElementById('sorry');
    sorry.addEventListener('click', function() {
        Swal.fire({
            title: 'Page 404',
            text: 'Maaf page belum dibuat',
            imageUrl: 'https://previews.123rf.com/images/kaymosk/kaymosk1804/kaymosk180400006/100130939-error-404-page-not-found-error-with-glitch-effect-on-screen-vector-illustration-for-your-design-.jpg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
        })

    })
    var sorry1 = document.getElementById('sorry1');
    sorry1.addEventListener('click', function() {
        Swal.fire({
            title: 'Page 404',
            text: 'Maaf page belum dibuat',
            imageUrl: 'https://previews.123rf.com/images/kaymosk/kaymosk1804/kaymosk180400006/100130939-error-404-page-not-found-error-with-glitch-effect-on-screen-vector-illustration-for-your-design-.jpg',
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: 'Custom image',
        })

    })
</script>

</html>