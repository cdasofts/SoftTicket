
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
            <li><a href="#animatedModal02" id="imagen_promotor" onclick="indexonP();">Se un promotor</a></li>
            <li class="divider"></li>
            <li><a href="#">Opción 1</a></li>
            <li class="divider"></li>
            <li><a href="#">Opción 2</a></li>
          </ul>
        </li>
      </ul>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b>Hola </b> 
          <?php 
          //sistema de rutas --- $_SERVER es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script
$route = $_SERVER['REQUEST_URI'];
if (strpos($route, '?loca')) {  
    $route = strstr($route, '?local', true);
    print ($_SESSION['cUsuario']);

}else{
  print_r($_SESSION['user']['cNombreUsuario']);
}
          ?>
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
            <div  id="btn-close-modal"  onclick="cancelarP();"  style="background-color:black;"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal"></span></center>
            </div>
                
            <div class="modal-content02" style="background: rgba(0, 0, 0, 0.8);border-radius:0px;height:1000px;">
           <center><label style="margin:2%;font-size:24px;color:white;">Vende tus Boletos</label></center>
           
               <?php 
                include 'vista/plugin/form/archivo.html';
               ?>


            </div>
        </div>





</body>

        <script type="text/javascript" src="vista/assets/javascript/encabezado.js"></script>
        <script type="text/javascript" src="vista/plugin/form_registro/archivo.js"></script>





