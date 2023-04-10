<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
  .comentare {
    text-decoration: none;
  }

  .logo-studium {
    height: 55px;
    width: 165px;
    border-radius: 10px;
    margin-right: 180px;
    margin-left: 50px;
  }

  .navbaraja {
    font-size: 45px;
    font-weight: bold;
    font-family: 'comic sans ms';
    color: #334257;
    margin: 0px;
    text-decoration: none;
  }

  .nav-item {
    float: right;
    padding: 0px 10px;
    border-radius: 2px;


  }

  .nav-item:hover {
    color: #3AF2B2;

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

  .text-reset {
    text-decoration: none;
  }

  .navbarslide1 {
    font-weight: bold;
    color: #8479F4;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 45px;


  }

  @media (min-width:200px) and (max-width:500px) {
    .logo-studium {
      margin-right: 5px;
      margin-left: 0px;
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

  .tbl-login {
    padding: 10px 15px;
    border-radius: 10px;
    background-color: #8479F4;
    color: white;
    font-weight: bold;
  }

  .tbl-login:hover {
    text-transform: capitalize;
    box-shadow: 0 0 10px #787A91;
  }
</style>

</head>

<body>
  <header>
    <div class="fixed-top">
      <nav class="navbar navbar-expand-lg" style="background:white ; line-height : 20px; border-bottom: 0.5px solid black;">
        <div class="container-fluid">
          <a href="index.php" style="text-decoration: none;"> <img src="./produk-studium/gambar/studium-dashboard.png" style="width:194.57px ; height: 73.71px; margin-right:100px;margin-top:-10px;"></a>
          <!-- <a class="navbaraja" style="margin-right:250px ;" href="index.php";>STUDIUM</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-image:url(gambar/desind.png) ; background-size:cover ;position:relative;background-repeat:no-repeat ; height:54px">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>

              <li class="nav-item dropdown">
                <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  INFORMASI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./info-studiumlearn.php">Studium Learn</a></li>
                  <li><a class="dropdown-item" href="./info-studiumscolar.php">Studium Scholarship</a></li>
                  <li><a class="dropdown-item" href="./info-studiumbook.php">Studium Bookcase</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                </ul>
              <li class="nav-item">
                <a class="nav-link" href="./tampilanlogin.php" tabindex="-1" aria-disabled="true"><span class="tbl-login">Login</span></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>