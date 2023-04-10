<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .artikelbadan {
            display: flex;
            margin: 5px;
            padding: 5px;
            position: relative;
        }

        .artikelborder {
            text-align: center;
            font-weight: bold;
            height: auto;
            background-color: #97b9ef;
            border-radius: 5px;
            background-size: cover;
            padding-top: 20px;
        }

        .artikelborder h2 {
            font-weight: bold;
            color: black;
            font-size: 40px;


        }

        .artikeltabel {
            margin: 20px 20px;
            padding: 10px;
            height: 280px;
            text-align: left;
            background-color: white;
            border-radius: 10px;
        }

        .artikeltabel img {
            width: 350px;
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
            transition: 0.4s;
            transform: scale(1.01);
            box-shadow: 0px 0px 15px #787A91;
            margin-top: -2px;
        }

        .judular {
            font-size: 60px;
            text-align: center;
            color: #8479F4;
            font-weight: bold;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

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


</head>

<body>
    <div class="artikelborder">
        <h1 class="navbarslide1" style="font-size:55px ;color:white">Artikel <span style="color: white;">Studium</span></h1><br>

        <a href="artikelfull.php" class="artikeltombol">
            <h5>Lihat Semua ></h5>
        </a>
        <div class="artikelbadan">
            <div class="artikeltabel">
                <a href="Tetap Produktif.php"> <img src="./gambar/student.jpg"> </a>
                <h4><b>tetap produktif di tengah pandemi</b></h4>

            </div>
            <div class="artikeltabel">
                <a href="artikelolahraga.php"><img src="./gambar/olahraga1.jpg"> </a>
                <h4><B>Pola Hidup Sehat Dimasa Pandemi </B></h4>

            </div>
            <div class="artikeltabel">
                <a href="artikeljurusan.php"> <img src="./gambar/orangbingung.jpg"> </a>
                <h4><b>Tips dan Trik Memilih Jurusan Kuliah</b></h4>

            </div>

        </div>
    </div>