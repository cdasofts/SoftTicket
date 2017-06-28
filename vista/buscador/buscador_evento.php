<head>
<!-- Linkeo a archivo del css creado por nosotros -->
<link rel="stylesheet" href="vista/assets/style/buscador.css" type="text/css">



<!-- se inicia el datepicker de fecha -->
          <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


</head>


<!-- Estructura para la seccion del buscador de eventos -->
<div id='contedor_buscador'> 

<div id='promotor' ><img src="vista/multimedia/imagenes/promotor.png" id="imagen_promotor" href="#animatedModal02" /><label id="lblpromotor">Se un Promotor</label></div>
<center><div id="contenedor_buscador">
<label id="lblbusca">Busca tu evento </label>
<br>
<label id="lblbuscador">Fecha:</label>
<input type="text" placeholder="Fecha" id="datepicker">
<label id="lblbuscador">Estado:</label>
<select class="selecters" ><option>Seleccionar</option></select>
<label id="lblbuscador">Ciudad:</label>	
<select class="selecters"><option>Seleccionar</option></select>
</div></center>


<label id="lblpuntoventa">Puntos de Venta</label>
<div id="mapas"><img src="vista/multimedia/imagenes/maps.png"  id="imagen_maps"  href="#animatedModal"/>

</div>

</div>

<!-- Estructura del Modal para google maps -->
        <div id="animatedModal">
            <div  id="btn-close-modal" class="close-animatedModal"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal"></span></center>
            </div>
                
            <div class="modal-content">
            </div>
        </div>


<!-- Estructura para el modal de se un promotor -->
        <div id="animatedModal02">
            <div  id="btn-close-modal" class="close-animatedModal02"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal"></span></center>
            </div>
                
            <div class="modal-content">
            </div>
        </div>


<!-- Se llama a un archivo .js creado por nosotros -->
<script src="vista/assets/javascript/buscador.js"></script>



