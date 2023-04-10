<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studium Scholar</title>
    <style>
        .form-beasiswa {
            width: auto;
            display: flex;
        }

        .window {
            width: 1263px;
            height: 577px;
            background-color: #C9CCD5;
            margin-top: -60px;
        }

        .gbr-pilih {
            padding: 10px 10px;
            width: 350px;
            height: 350px;
            margin: 50px auto;
            margin-right: 80px;
        }

        .gbr-pilih:hover {
            box-shadow: 0px 0px 15px #787A91;
        }

        .gbr-display {
            margin-left: 250px;
            margin-top: 150px;
            position: relative;
            display: flex;
        }

        @keyframes aaa {
            0% {
                display: none;
                margin-left: -500px;
                margin-right: 500px;
            }

            100% {
                margin-left: 0px;
                margin-right: 0px;
            }
        }

        @keyframes bbb {
            0% {
                display: none;
                margin-left: 500px;

            }

            100% {
                margin-left: 0px;
                margin-right: 0px;
            }
        }

        @media (min-width:200px) and (max-width:1000px) {
            .gbr-display {
                display: inline;
                margin-left: -500px;
            }

            .gbr-pilih {
                display: block;
                animation: none;
                margin-left: -500px;
            }

            .form-beasiswa {
                display: inline-block;
                margin-left: -500px;
            }
        }
    </style>

    <?php include('header-beasiswa.php'); ?>
    <main>
        <div class="window">

            <div class="gbr-display">
                <a href="dashboard_donatur.php"><img class="gbr-pilih" src="../gambar/scolar1.png" style="animation:aaa 3s 1;"></a>
                <a href="pendaftar.php"><img class="gbr-pilih" src="../gambar/daftar.png" style="animation:bbb 3s 1;"></a>

            </div>
        </div>


    </main>
    </body>

</html>