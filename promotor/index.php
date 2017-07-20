


<?php 
// atrae el archivo de conexion para abrirla.
require_once("db/conexion.php");
//session_start();
?>

<link href="login/style.css" rel="stylesheet">


<body>

<nav id="contenedorEncabezado" class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SoftTicket</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input id="buscador" type="text" class="form-control" placeholder="¿Qué estás buscando?">
        </div>
        <button id="botonBuscar" type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <ul class="nav navbar-nav">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Cambiar idioma (inglés)</a></li>
            <li><a href="#">Ayuda</a></li>
            <li><a href="#animatedModal02" id="imagen_promotor">Se un promotor</a></li>
            <li class="divider"></li>
            <li><a href="#">Opción 1</a></li>
            <li class="divider"></li>
            <li><a href="#">Opción 2</a></li>
          </ul>
        </li>
      </ul>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b>Hola </b> <?php print $_SESSION['cUsuario']?> 
            <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="#">Configura tu perfil</a></li>
            <li><a href="login/cerrar.php">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="animatedModal02">
            <div  id="btn-close-modal" class="close-animatedModal02"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal"></span></center>
            </div>
                
            <div class="modal-content" style="background-color:transparent;border-radius:0px;height:1000px;">
           <center><label style="margin:2%;font-size:24px;">Vende tus Boletos</label></center>
           
               <?php 
                include 'vista/plugin/form/archivo.html';
               ?>


            </div>
        </div>

        <div id="animatedModal06">
            <div  id="btn-close-modal06" class="close-animatedModal06"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal06"></span></center>
            </div>
                
            <div class="modal-content" style="background-color:transparent;border-radius:0px;height:1000px;">
           <center><label style="margin:2%; font-size:24px;">Registrate</label></center>
           
               <?php 

                include 'vista/plugin/form_registro/archivo.html';

               ?>


            </div>
        </div>


</body>

        <script type="text/javascript" src="vista/assets/javascript/encabezado.js"></script>
        <script type="text/javascript" src="vista/plugin/form_registro/archivo.js"></script>





