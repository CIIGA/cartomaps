<!--********************************INICIO NAVBAR***************************************************************-->
<br>
<nav class="navbar navbar-expand-lg navbar-light">
  <a href="acceso.php"><img src="../img/logoFIDI.png" width="150" height="110" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php if (isset($_SESSION['tipousuario'])) { ?>
        <a class="nav-item nav-link" href="config.php">| <i class="fas fa-users-cog"></i> Administrador |</a>
      <?php } ?>
      <?php
      if (isset($_SESSION['user'])) {
        $c1 = $_SESSION['user'];
        $c2 = "SELECT * FROM usuarionuevo
      where id_usuarioNuevo='$c1'";
        $admin1 = sqlsrv_query($cnx, $c2);
        $Ad = sqlsrv_fetch_array($admin1);
        if ($Ad['estado']==1) { ?>
          <a class="nav-item nav-link" href="../actualizacionPos/php/cargaPosiciones.php?id_usuario=<?php echo $c1?>">| <i class="fa fa-map-marker"></i> Coordenadas |</a>
      <?php }
      } ?>
      <a class="nav-item nav-link" href="acceso.php">| Inicio |</a>
      <!--        <a class="nav-item nav-link" href="acceso.php">| <i class="fas fa-drafting-compass"></i> MapERDM |</a>-->
      <?php if ((isset($_SESSION['fichas'])) and ($_SESSION['fichas'] == 3) or (isset($_SESSION['tipousuario']))) { ?>
        <a class="nav-item nav-link" href="accesDoctos.php">| <i class="far fa-file-alt"></i> Documentos |</a>
      <?php } ?>
      <!--        <a class="nav-item nav-link" href="#">| Cargar Base |</a>-->
      <a class="nav-item nav-link" href="logout.php">| Salir <i class="fas fa-sign-out-alt"></i>|</a>
      <!--
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-lock"></i> Administrador</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
        <a class="dropdown-item" href="#"><i class="fas fa-users"></i> Nuevo Colaborador</a>       
        <a class="dropdown-item" href="#"><i class="fas fa-user-lock"></i> Administrador ERDM</a>       
        </div>
      </li>
-->
    </ul>
    <!--
<form class="form-inline my-2 my-lg-0">
<a class="nav-item nav-link" href="logout.php" data-toggle="tooltip" data-placement="top" title="Cerrar Sesion">Cerrar sesión <i class="fas fa-sign-out-alt"></i></a>
</form>
-->
  </div>
</nav>
<!--*************************************NAVBAR*************************************************************-->
<?php // } else{
//header('location:../..');
//}
?>