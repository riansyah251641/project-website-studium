<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Dashboard</title>
    <style>
        .infobadan {
            display: flex;
            margin: 10px;
            padding: 10px;
            margin-bottom: 70px;
            padding-bottom: 0px;
            position: relative;
            margin-left: 110px;
        }

        .infoborder {
            text-align: center;
            font-weight: bold;
            height: auto;
            background-color: whitesmoke;
            background-size: cover;
            padding-top: 20px;

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
            width: 250px;
            height: 250px;
        }

        .tahugak {
            margin-top: 120px;
            padding: 5px 5px;
            text-align: center;
            color: #125D98;
            background-color: #E8F0F2;
            background-size: cover;
            border-radius: 30px;
            width: 400px;
            height: 50px;
            margin: 20px auto;
            margin-top: 30px;
        }

        .infotabel:hover {
            box-shadow: 0px 0px 15px #787A91;
        }

        @media (min-width:300px) and (max-width:800px) {
            .infobadan {
                display: inline;
                margin-left: 20px;

            }

            .infotabel img {
                width: 200px;
                height: 200px;
            }

        }

        @keyframes aaa {
            0% {
                display: none;
                margin-left: -310px;
                margin-right: 310px;
            }

            100% {
                margin-left: 30px;
            }
        }

        @keyframes bbb {
            0% {
                display: none;
                margin-left: 35px;
                margin-rigth: -310px;
                margin-left: 310px;
            }

            100% {
                margin-left: 30px;
            }
        }

        @keyframes ccc {
            0% {
                display: none;
                margin-bottom: -310px;
                margin-top: 310px;
                margin-left: 70px;
            }

            100% {
                margin-top: 20px;
            }
        }
    </style>
    <?php include("header-home.php") ?>
    <div class="infoborder">
        <p class="tahugk">TAHU NGGAK?</p><br>
        <H2 class="tahugak">OUR PRODUCT</H2>
        <h1 class="navbarslide1" style="color: #3AF2B2;">STU<span class="navbarslide1">DIUM</span></h1>

        <div class="infobadan">
            <div class="infotabel" style="animation: aaa 1.5s 1;">
                <a href="home.php"><img src="./gambar/studium-learn.png"></a>
            </div>
            <div class="infotabel" style="animation: ccc 1.5s 1;">
                <a href="./beasiswa/dashboard_donatur.php"><img src="./gambar/studium-beasiswa.png"></a>
            </div>
            <div class="infotabel" style="animation: bbb 1.5s 1;">
                <a href="./buku/see-book.php"><img src="./gambar/studium-book.png"></a>
            </div>

        </div>
    </div>
    <section id="footer">
        <?php include("footer-home.php") ?>
    </section>
    </body>

</html>