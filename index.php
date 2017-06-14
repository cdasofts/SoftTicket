<html>
<head>

<!-- Seccion donde se ponen todos los linkeos de archivos que se necesiten durante toda la aplicacion. -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <link rel="stylesheet" href="plugin/LightBox/css/animate.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="plugin/LightBox/js/animatedModal.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>



<!-- Se agregan las nuevas fuentes -->
<style type="text/css">
	
	@font-face {
    font-family: gotham;
    src: url(assets/fonts/Gotham.otf);
}

@font-face {
    font-family: gotcha;
    src: url(assets/fonts/Gotcha.ttf);
}

@font-face {
    font-family: coco;
    src: url(assets/fonts/Coco.ttf);
}

</style>
    
</head>

<!-- Se incluyen todas las secciones en este archivo principal -->
<body>
<?php

include 'encabezado/encabezado.php';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
include 'buscador/buscador_evento.php';
include 'categorias/categorias.php';
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
include 'contenido/inicio.php';
echo "<br>";
echo "<br>";
include 'piepagina/piepagina.php';
include 'derechos/derechos.php';



?>

</body>
</html>
