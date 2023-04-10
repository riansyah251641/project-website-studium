<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .infobadan {
            display: flex;
            margin: 10px;
            padding: 10px;
            margin-bottom: 70px;
            padding-bottom: 0px;
            position: relative;
            margin-left: 130px;
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
            padding: 5px 5px;
            text-align: center;
            color: #125D98;
            background-color: #E8F0F2;
            background-size: cover;
            border-radius: 30px;
            width: 200px;
            margin: 20px auto;
            margin-top: 30px;
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

        h2,
        h3 {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>

<body>
    <div class="infoborder">
        <br>
        <p class="tahugak">TAHU NGGAK?</p>
        <h2>Kenapa harus memilih </h2>
        <h1 class="navbarslide1" style="color: #3AF2B2">STUDIUM<span class="navbarslide1"> LEARN</span></h1><br>
        <h3> sebagai pemdamping belajar kamu ?</h3>
        <div class="infobadan">
            <div class="infotabel">
                <img src="./gambar/efective.png">
            </div>
            <div class="infotabel">
                <img src="./gambar/fleksiblee.png">
            </div>
            <div class="infotabel">
                <img src="./gambar/confortable.png">
            </div>

        </div>
    </div>
</body>

</html>