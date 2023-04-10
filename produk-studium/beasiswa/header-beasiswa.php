<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
  .comentare {
    text-decoration: none;
  }

  .navbaraja {
    font-size: 45px;
    font-weight: bold;
    font-family: 'comic sans ms';
    color: #334257;
    margin: 0px;
    text-decoration: none;
  }

  a {
    font-size: 20px;
    margin: 5px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 600;
    text-decoration: none;
  }

  .nav-item {
    float: right;
    padding: 0px 10px;
    border-radius: 10px;


  }

  .nav-item:hover {
    background-color: rgba(255, 255, 255, 0.5);
    color: powderblue;
    text-transform: capitalize;

  }

  .nav-link {
    color: black;
    font-weight: BOLD;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 17px;
  }

  .nav-link:hover {
    color: purple;
    font-weight: bold;
  }

  .navbarslide1 {
    font-weight: bold;
    color: #8479F4;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 50px;



  }

  .logo-studium {
    width: 194.57px;
    height: 73.71px;
    margin-right: 100px;
    margin-top: -10px
  }

  @media (min-width:200px) and (max-width:500px) {
    .logo-studium {
      margin-left: 0px;
      margin-right: 5px;
      width: 130px;
      height: 50px;
    }

    .navbarslide1 {

      font-size: 40px;
      text-align: center;

    }

    .navbar navbar-expand-lg {
      width: 300px;
    }

    .container-fluid {
      width: 400px;
    }
  }
</style>

</head>

<body>
  <header>
    <div class="fixed-top">
      <nav class="navbar navbar-expand-lg" style="background:white ; line-height : 20px; border-bottom: 0.5px solid black;">
        <div class="container-fluid">
          <a href="index.php" style="text-decoration: none;"> <img src="../gambar/studium-scolarship.png" class="logo-studium"></a>
          <!-- <a class="navbaraja" style="margin-right:250px ;" href="index.php";>STUDIUM</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-image:url(../gambar/desind.png) ; background-size:cover ;position:relative;background-repeat:no-repeat ; height:54px">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dashboard_donatur.php">Donatur</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pendaftar.php">Pendaftar</a>
              </li>

              <!--lihat data di lihatdata-buku.php -->

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>