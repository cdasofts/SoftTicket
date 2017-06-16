<?php 

require_once("db/conexion.php");

?>

<html>
<head>

<!-- Seccion donde se ponen todos los linkeos de archivos que se necesiten durante toda la aplicacion. -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <link rel="stylesheet" href="vista/plugin/LightBox/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="vista/plugin/alerts/dist/sweetalert2.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="vista/plugin/LightBox/js/animatedModal.js"></script>

                <script src="vista/plugin/alerts/dist/sweetalert2.js"></script>


    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>



<!-- Se agregan las nuevas fuentes -->
<style type="text/css">
	
	@font-face {
    font-family: gotham;
    src: url(vista/assets/fonts/Gotham.otf);
}

@font-face {
    font-family: gotcha;
    src: url(vista/assets/fonts/Gotcha.ttf);
}

@font-face {
    font-family: coco;
    src: url(vista/assets/fonts/Coco.ttf);
}

</style>
    
</head>

<!-- Se incluyen todas las secciones en este archivo principal -->
<body>
<?php

include 'vista/encabezado/encabezado.php';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
include 'vista/buscador/buscador_evento.php';
include 'vista/categorias/categorias.php';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
include 'vista/contenido/inicio.php';
echo "<br>";
echo "<br>";
include 'vista/piepagina/piepagina.php';
include 'vista/derechos/derechos.php';



?>

</body>
</html>
