<?php 
// atrae el archivo de conexion para abrirla.
require_once("db/conexion.php");

?>

<html>

<!-- Tipografia de todo el sitio web -->
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



<head>



<title>SoftTicket</title>


<!-- Seccion donde se ponen todos los linkeos de archivos que se necesiten durante toda la aplicacion. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <link rel="stylesheet" href="vista/plugin/LightBox/css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="vista/plugin/alerts/dist/sweetalert2.css">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script src="vista/plugin/LightBox/js/animatedModal.js"></script>

                <script src="vista/plugin/alerts/dist/sweetalert2.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Sintony:400,700&subset=latin-ext' rel='stylesheet' type='text/css'>

        <link href='vista/assets/style/index.css' rel='stylesheet' type='text/css'>


    
</head>



<!-- Se incluyen todas las secciones en este archivo principal -->
<body style="overflow:hidden;">

<div id="contenedor_general" style="z-index:0;display:none;">
<?php

//include 'vista/encabezado/encabezado.php';
include 'login/index.php';
echo "<br>";
echo "<br>";
echo "<br>";
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
</div>

<center><div class="loader" style="width:100%;height:1800px;z-index:2000;position:absolute;opacity:0.95;background-color:black">
  <div class="image" >
    <i class="fa fa-ticket"></i>
  </div>
  <strong><span style="height:50%;"></span></strong>
</div></center>


<!-- linkeo del codigo javascript creador por nosotros -->
                 <script src="vista/assets/javascript/index.js"></script>


<!-- Codigo que inicia el accordeon de la pagina principal -->
  <script>


  $( function() {
    $( "#accordion" ).accordion();
  } );

  </script>

<script type="text/javascript">
  
$(window).on('beforeunload', function() {
   
   window.setTimeout(function() {
    $(window).scrollTop(0); 
}, 0);

});

</script>





</body>
</html>




