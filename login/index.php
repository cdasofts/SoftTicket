

<link href="login/style.css" rel="stylesheet">


<?php
//iniciar la variable de sesión 
session_start();
//requerir los archivos, se descargan las dependencias instaladas 
require_once ('vendor/autoload.php');

require_once ('App/Auth/Auth.php');

//solo cuando esté vacía la variable de sesión
if (empty($_SESSION['cUsuario'])){
?>

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
        
        <li  class="dropdown">
          <a href="#"  class="dropdown-toggle" data-toggle="dropdown">Opciones <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Cambiar idioma (inglés)</a></li>
            <li><a href="#">Ayuda</a></li>
            <li><a href="#animatedModal02" id="imagen_promotor" onclick="indexonP();">Se un promotor</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Iniciar sesión</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                     <?php
                      //llamar funcion estatica de la clase auth
                     Auth::getUserAuth();?>
                            <div class="col-md-12">
                                Inicia sesión con:
                                <div class="social-buttons">
                                    <a href="?login=Facebook" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="?login=Google" class="btn btn-tw"><i class="fa fa-google-plus"></i> Google</a>
                                </div>
                                Ingresa tus datos:
                                 <form action="login/validar.php" method="post" class="form"  role="form" accept-charset="UTF-8" id="login-nav" enctype="application/x-www-form-urlencoded">
                                        <div for="caja1" class="form-group">
                                             <label for="caja1" class="sr-only">Usuario</label>
                                             <input type="text" id="caja1" name="usuario" class="form-control" placeholder="Usuario" required>
                                        </div>

                                        <div for="caja2" class="form-group">
                                             <label for="caja2" class="sr-only">Contraseña</label>
                                             <input type="password" id="caja2" name="password" class="form-control" placeholder="Contraseña" required>
                                             <div class="help-block text-right"><a href="">¿Olvidaste tu contraseña?</a></div>
                                        </div>
                                        <div class="form-group">
                                             <input type="submit" name="prueba"  class="btn btn-primary btn-block">  
                                        </div>
                                        <div class="checkbox">
                                             <label>
                                             <input type="checkbox"> Mantente conectado
                                             </label>
                                        </div>
                                 </form>
                            </div>
                            <div class="bottom text-center">
                                ¿Eres nuevo aquí? <a href="#animatedModal06" id="registro" onclick="indexonPro();"><b>Únete con nosotros</b></a>
                            </div>
                     </div>
                </li>
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

        <div id="animatedModal06" >
            <div  id="btn-close-modal06"  onclick="cancelarPro();" style="background-color:black;"> 
                <center><span style="color:white;font-size:24px;cursor:pointer;" class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal06"></span></center>
            </div>
                
            <div class="modal-content" style="background: rgba(0, 0, 0, 0.8);border-radius:0px;height:1000px;">
           <center><label style="margin:2%; font-size:24px;color:white;">Registrate</label></center>
           
               <?php 

                include 'vista/plugin/form_registro/archivo.html';

               ?>


            </div>
        </div>


</body>

        <script type="text/javascript" src="vista/assets/javascript/encabezado.js"></script>
        <script type="text/javascript" src="vista/plugin/form_registro/archivo.js"></script>


<?php

}else{
    
    print 'Hola, que hace '. $_SESSION['cUsuario'].'<br><p><a href="login/cerrar.php">Cerrar sesión</a></p>' ;
 
}
?>



