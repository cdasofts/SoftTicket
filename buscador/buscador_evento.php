<head>
<link rel="stylesheet" href="assets/style/buscador.css" type="text/css">
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
</head>



<div id='contedor_buscador'> 

<div id='promotor' ><img src="multimedia/imagenes/promotor.png" id="imagen_promotor" /><label id="lblpromotor">Se un Promotor</label></div>
<center><div id="contenedor_buscador">
<label style="font-size:18px;margin-top:10px;font-family: gotcha;">Busca tu evento </label>
<br>
<label id="lblbuscador">Fecha:</label>
<input type="text" placeholder="Fecha" id="datepicker">
<label id="lblbuscador">Estado:</label>
<select style="cursor:pointer;"><option>Seleccionar</option></select>
<label id="lblbuscador">Ciudad:</label>	
<select style="cursor:pointer;"><option>Seleccionar</option></select>
</div></center>

<div id="mapas"><img src="multimedia/imagenes/maps.png"  id="imagen_maps"/></div>

</div>
