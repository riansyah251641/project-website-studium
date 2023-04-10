<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .infobadan {
            display: flex;
            padding: 10px;
            margin-bottom: 70px;
            padding-bottom: 0px;
            position: relative;
            margin-left: 50px;
            top: -50px;
        }

        .infoborder {
            text-align: center;
            font-weight: bold;
            height: 550px;
            background-color: whitesmoke;
            background-size: cover;
        }

        .infoborder h3 {
            font-weight: bold;


        }

        .infotabel {
            margin: 20px 30px;
            padding: 10px;
            text-align: center;
            border-radius: 10px;
        }

        .infotabel img {
            width: 300px;
            height: 300px;
        }

        .tahugak {
            padding: 5px 5px;
            text-align: center;
            color: #125D98;
            background-color: #E8F0F2;
            background-size: cover;
            border-radius: 30px;
            width: 200px;
            margin: 20px auto;
            margin-top: 75px;
            margin-bottom: -5px;
        }

        .navbarslide1 {
            margin-top: -10px;
        }

        @media (min-width:200px) and (max-width:800px) {
            .infobadan {
                display: inline;
                margin-left: 20px;

            }

            .infotabel img {
                width: 200px;
                height: 200px;
            }

        }
    </style>
</head>

<body>
    <div class="infoborder">
        <p class="tahugak">TAHU NGGAK?</p>
        <h2>Produk apa aja yang ada di </h2>
        <h1 class="navbarslide1" style="color: #3AF2B2;">STU<span class="navbarslide1">DIUM</span></h1><br>
        <div class="infobadan">
            <div class="infotabel">
                <img src="./produk-studium/gambar/studium-learn.png"><br><br>
                <a class="tombol-more" href="info-studiumlearn.php">MORE INFORMATION</a>
            </div>
            <div class="infotabel">
                <img src="./produk-studium/gambar/studium-beasiswa.png"><br><br>
                <a class="tombol-more" href="info-studiumscolar.php">MORE INFORMATION</a>
            </div>
            <div class="infotabel">
                <img src="./produk-studium/gambar/studium-book.png"><br><br>
                <a class="tombol-more" href="info-studiumbook.php">MORE INFORMATION</a>
            </div>

        </div>
    </div>
</body>

</html>