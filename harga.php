<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .listhargautama {
            background-color: white;
            width: 100%;
            height: auto;
            margin-top: 0px;

        }

        .listhargautama h1 {
            margin-top: 50px;
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
            color: #D62AD0;
            font-size: 45px;
            margin-bottom: -20px;
        }

        .listhargapendukung {
            display: flex;
            margin: 20px 100px;
            padding: 20px;

        }

        .tampilanharga {
            margin: 10px 70px;
        }

        .tampilanharga img {
            width: 740px;
            height: 550px;
            margin-top: -25px;
            margin-left: 190px;
        }

        @media (min-width:700px) and (max-width:900px) {
            .tampilanharga img {
                width: 420px;
                height: 300px;
                margin: 10px;
                margin-top: -20px;
                margin-left: 100px;

            }

        }

        @media (min-width:200px) and (max-width:600px) {
            .tampilanharga {
                margin: 1px;
            }


            .tampilanharga img {
                width: 330px;
                height: 245px;
                margin: 10px;
                margin-top: -10px;

            }

        }

        .listhargapendukung {
            display: inline;

        }
    </style>
</head>

<body>
    <div class="listhargautama">
        <h1 style="color: #3AF2B2">HARGA <span class="navbarslide1">STUDIUM </span></h1><br>

        <div class="listhargapendukung">
            <div class="tampilanharga">
                <img src="./gambar/hargastudium.jpg" alt="Maaf periksa Koneksi Anda" style="border-radius: 20px;">
            </div>

        </div>
    </div>
    <h1></h1>
</body>

</html>