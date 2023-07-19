<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Stratimex</title>
  <link rel="icon" href="img/icons/startimex_logo_Sombra.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
  <link href="css/index.css" rel="stylesheet" />
  <link href="css/zoomImage.css" rel="stylesheet" />
</head>

<body>
  <div class="page-wrapper chiller-theme toggled d-flex" id="wrapper">
    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
      <i class="fas fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper" class="sidebar-wrapper">
      <div class="sidebar-content">
        <div class="sidebar-brand">
          <!-- <a href="">Stratimex</a> -->
          <img class="logo" width="210px" height="55px" src="img/icons/startimex_logo_Sombra.png" />
          <div id="close-sidebar">
            <i class="fas fa-times"></i>
          </div>
        </div>
        <!-- Siderbar Menu  -->
        <div class="sidebar-menu">
          <ul>
            <li class="header-menu">
              <span style="font-weight:normal;">Datos del propietario</span>
              <span class="data-propietario" style="font-weight:normal;">Cuenta: 101-20-535-13-00-0000</span>
              <span class="data-propietario" style="font-weight:normal;">Propietario: RUIZ ESTRADA ZOYLA</span>
            </li>
            <hr />
            <li>
              <a href="" id="div-btn1">
                <i class="fa fa-camera"></i>
                <span>Foto 1</span>
              </a>
            </li>
            <li>
              <a href="" id="div-btn2">
                <i class="fa fa-camera"></i>
                <span>Foto 2</span>
              </a>
            </li>
            <li>
              <a href="#" id="div-btn3">
                <i class="fa fa-camera"></i>
                <span>Foto 3</span>
              </a>
            </li>
            <li>
              <a href="#" id="div-btn4">
                <i class="fa fa-camera"></i>
                <span>Foto 4</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- sidebar-menu  -->
      </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <div class="page-content">
      <div class="container-fluid" id="container">
        <img id="image" src="img/101-20-216-08-00-0000_Oblcompleta_1.png" alt="Imagen" />
        <div id="floating-div">
          <button onclick="zoomIn()" id="zoom-in"> <span class="	fas fa-plus"></span> </button>
          <button onclick="zoomOut()" id="zoom-out"> <span class="	fas fa-minus"></span></button>
        </div>
      </div>
    </div>
    <!-- page-content" -->
  </div>
  <!-- page-wrapper -->


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  <script src="js/zoomImage.js"></script>
  <script src="js/remplaceImage.js"></script>
</body>

</html>