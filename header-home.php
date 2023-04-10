<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="./buku/dist/sweetalert2.all.min.js"></script>
<style>
  .comentare {
    text-decoration: none;
  }

  .logo-studium {
    width: 194.57px;
    height: 73.71px;
    margin-right: 100px;
    margin-top: -10px"

  }

  .navbaraja {
    font-size: 45px;
    font-weight: bold;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: #334257;
    margin: 0px;
    text-decoration: none;
  }

  a {
    font-size: 20px;
    margin: 5px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }

  .nav-item {
    float: right;
    padding: 0px 10px;
    border-radius: 10px;


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
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    width: 250px;
  }

  .navbarslide1 {
    font-weight: bold;
    color: #8479F4;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 50px;


  }

  .tbl-out {
    background-color: red;
    color: white;
    border-radius: 10px;
    padding: 10px 15px;

  }

  .tbl-out:hover {
    box-shadow: 0 0 20px #787A91;
    background-color: #FF2442;
    border: 0.1px solid red;
  }

  @media (min-width:200px) and (max-width:500px) {
    .logo-studium {
      margin-right: 5px;
      margin-left: 0px;
      width: 100px;
      height: 45px;
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
          <a href="index.php" style="text-decoration: none;"> <img src="./gambar/studium-dashboard.png" class=" logo-studium"></a><br>
          <!-- <a class="navbaraja" style="margin-right:250px ;" href="index.php";>STUDIUM</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-image:url(gambar/desind.png) ; background-size:cover ;position:relative;background-repeat:no-repeat ; height:54px">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="float: left;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item dropdown" style="margin-right: 500px;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  INFORMASI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./info-studiumlearn.php">Studium Learn</a></li>
                  <li><a class="dropdown-item" href="./info-studiumscolar.php">Studium Scholarship</a></li>
                  <li><a class="dropdown-item" href="./info-studiumbook.php">Studium Bookcase</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="login.php">Akun Admin</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php" tabindex="-1" aria-disabled="true"><span class="tbl-out">Logout</span></a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>