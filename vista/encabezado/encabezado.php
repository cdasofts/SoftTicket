<head>
<!-- Linkeo a archivo css creado por nosotros -->
<link rel="stylesheet" href="vista/assets/style/encabezado.css" type="text/css">
</head>


<!-- Aqui se genera la estructura de la seccion de el encabezado -->
<div id='contedor_encabezado'  > 


<div id="divlogo" class="encabezado_divs">

<div><center><img src="vista/multimedia/imagenes/logo.png" id="imglogo"></center></div>	

</div>

<div id="divbuscador" class="encabezado_divs">
<input type="text" placeholder="¿Qué estás buscando?" id="txtbuscador" class="form-control" />	
</div>

<div id="diventrar" class="encabezado_divs">
	
	<a id="btnEntrar" class="btn btn-success" href="login/index.php">Entrar</a>
	<img id="imgtraductor" src="vista/multimedia/imagenes/traductor.png" >
<img id="imgayuda" src="vista/multimedia/imagenes/ayuda.png" >
</div>

<div id='promotor' ><img src="vista/multimedia/imagenes/promotor.png" id="imagen_promotor" href="#animatedModal02" />
</div>

</div>



<!-- Estructura para el modal de se un promotor -->
        <center><div id="animatedModal02"  style="overflow:hidden;">
            <div  id="btn-close-modal" style="background-color:black;"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal" onclick="cancelar();" ></span></center>
            </div>
                
            <div class="modal-content" style="background-color:grey;border-radius:0px;height:1000px;overflow:hidden">
           <center><label style="margin:2%;font-size:24px;">Vende tus Boletos</label></center>
           
           <div>
               <?php 
//se incluye el formulario para ser un promotor
include 'vista/plugin/form/archivo.html';

               ?>
</div>

            </div>
        </div></center>

<!-- se linkea el archivo .js creado por nosotros -->
        <script type="text/javascript" src="vista/assets/javascript/encabezado.js"></script>