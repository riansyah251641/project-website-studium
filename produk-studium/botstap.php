<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./buku/dist/sweetalert2.all.min.js"></script>
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

  .text-reset {
    text-decoration: none;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  }

  .navbarslide1 {
    font-weight: bold;
    color: #8479F4;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 50px;


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
</style>

</head>

<body>
  <header>
    <div class="fixed-top">
      <nav class="navbar navbar-expand-lg" style="background:white ; line-height : 20px; border-bottom: 0.5px solid black;">
        <div class="container-fluid">
          <a href="index.php"><img src="./gambar/studium.logobts.png" class="logo-studium"></a>
          <!-- <a class="navbaraja" style="margin-right:250px ;" href="index.php";>STUDIUM</a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-image:url(gambar/desind.png) ; background-size:cover ;position:relative;background-repeat:no-repeat ; height:54px">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tutors.php">PROFIL TUTOR</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  INFORMASI
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1r5j_aoPFg4meFTzayiHmxZ8z8EPTIp4d4air16GLxiI/edit?usp=sharing" target="_blank">Info Jadwal</a></li>
                  <li><a class="dropdown-item" href="artikelfull.php">Info Artikel</a></li>
                  <li><a class="dropdown-item" id="aadg">Info Event </a></li>
                  <li><a class="dropdown-item" href="home.php#hargae">Info Harga</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inc.koneksi.php" tabindex="-1" aria-disabled="true">PEMBAYARAN</a>

              </li>

            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <script>
    var aadg = document.getElementById('aadg');
    aadg.addEventListener('click', function() {
      Swal.fire({
        title: 'Sorry',
        text: 'Maaf event masih belum ada',
        imageUrl: 'https://previews.123rf.com/images/kaymosk/kaymosk1804/kaymosk180400006/100130939-error-404-page-not-found-error-with-glitch-effect-on-screen-vector-illustration-for-your-design-.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
      })

    })
  </script>