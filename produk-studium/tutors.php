<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>info tutors</title>

  <style>
    .tampilanfotoya {
      display: flex;
    }

    .image {
      border-radius: 50px;
      width: 150px;
      height: 150px;
      position: relative;
    }

    .foto1 {
      position: relative;
      margin-left: 30px;
      width: 150px;
      height: 150px;
      margin-bottom: 20px
    }

    .overlay {
      border-radius: 50px;
      overflow: hidden;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      transition: .5s ease;
      background-color: whitesmoke;
    }

    .text {
      height: 150px;
      font-size: 15px;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-weight: bold;
      position: absolute;
      top: 0%;
      margin-left: -50px;
      text-align: center;
      padding-left: 20px;
      padding-right: 20px;
      text-decoration: solid;
    }

    .foto1:hover .overlay {
      opacity: 0.78;
    }

    .foto1:hover:hover {
      transform: scale(1.1);
      transition: 0.8s;
    }

    .foto1 a {
      font-weight: bold;
      padding: 30px 30px 30px 30px;
      background: cadetblue;
      border-radius: 50px;
      text-align: center;
      color: white;
    }

    .foto1 p {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      color: #053742;
      font-size: 30px;
    }



    .button {
      border-radius: 40px;
      background: #6EB0FF;
      font-size: 18px;
      color: white;
      width: 140px;
      height: 60px;
      font-weight: bold;
      text-align: center;
      margin-top: 180px;
      margin-left: 50px;
    }

    .button:hover {
      text-transform: capitalize;
      cursor: pointer;
    }

    .accordion-body {
      display: flex;
      position: relative;
    }

    .accordion {
      margin-left: 20px;
      margin-top: 25px;
      margin-bottom: 25px;
      margin-right: 20px;
    }

    .desin {
      margin-top: 60px;
      font-weight: bold;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      text-align: center;
      color: #D62AD0;
      font-size: 50px;
      margin-bottom: -5px;
    }



    @media (min-width:300px) and (max-width:500px) {
      .tampilanfotoya {
        display: table;
      }

      .accordion {
        margin: 0px;
        margin-top: 50px;
      }
    }
  </style>
  <?php
  include('botstap.php');
  ?>


  <h1>tutors studium</h1>

  <div class="wrapper">
    <h1 class="desin"><span class="navbarslide1" style="color: #3AF2B2 ;">PENUTOR <span class="navbarslide1">STUDIUM</span></span></h1><br>
    <div class="accordion" id="accordionPanelsStayOpenExample" style="width:1100;">
      <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            <h4><strong>Matematika</strong></h4>
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
          <div class="accordion-body">
            <div class="tampilanfotoya">
              <form method="POST" action="lihatprofil.php">
                <div class="foto1">
                  <img src="./gambar/rian..jpg" class="image">
                  <div class="overlay">
                    <input class="text" type="submit" name="rian" value="M.febriansyah">
              </form>
            </div>
          </div>

          <div class="foto1">
            <img src="./gambar/yofa.jpeg" class="image">
            <div class="overlay">
              <form method="POST" action="lihatprofil.php">
                <input class="text" type="submit" name="yofa" value="Eka Yofa Presetyo">
              </form>
            </div>
          </div>

          <div class="foto1">
            <img src="./gambar/rian..jpg" class="image">
            <div class="overlay">
              <form method="POST" action="lihatprofil.php">
                <input class="text" type="submit" name="rian" value="M.Febriansyah">
              </form>
            </div>
          </div>

        </div> <!-- tampilanfotoya-->
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        <h4><strong>Fisika</strong></h4>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
        <div class="tampilanfotoya">

          <div class="foto1">
            <img src="./gambar/rian..jpg" class="image">
            <div class="overlay">
              <form method="POST" action="lihatprofil.php">
                <input class="text" type="submit" name="rian" value="M.Febriansyah">
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        <h4><strong>Biologi</strong></h4>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <div class="tampilanfotoya">

          <div class="foto1">
            <img src="./gambar/yofa.jpeg" class="image">
            <div class="overlay">
              <form method="POST" action="lihatprofil.php">
                <input class="text" type="submit" name="yofa" value="Eka Yofa Presetyo">
              </form>
            </div>
          </div>

          <div class="foto1">
            <img src="./gambar/rian..jpg" class="image">
            <div class="overlay">
              <form method="POST" action="lihatprofil.php">
                <input class="text" type="submit" name="rian" value="M.Febriansyah">
              </form>
            </div>
          </div>


        </div> <!-- tampilanfotoya-->
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsefour" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        <h4><strong>Kimia</strong></h4>
      </button>
    </h2>
    <div id="panelsStayOpen-collapsefour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body">
        <div class="tampilanfotoya">

          <div class="foto1">
            <img src="./gambar/yofa.jpeg" class="image">
            <div class="overlay">
              <form method="POST" action="lihatprofil.php">
                <input class="text" type="submit" name="yofa" value="Eka Yofa Presetyo">
              </form>
            </div>
          </div>

          <div class="foto1">
            <img src="./gambar/rian..jpg" class="image">
            <div class="overlay">
              <form method="POST" action="lihatprofil.php">
                <input class="text" type="submit" name="rian" value="M.Febriansyah">
              </form>
            </div>
          </div>



        </div>
        <!--foto display-->
      </div>
    </div>
  </div>
  </div>
  </div>



  </div>
  <?php include('footer.php') ?>