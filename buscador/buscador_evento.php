<head>
<link rel="stylesheet" href="assets/style/buscador.css" type="text/css">




          <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


</head>



<div id='contedor_buscador'> 

<div id='promotor' ><img src="multimedia/imagenes/promotor.png" id="imagen_promotor" href="#animatedModal02" /><label id="lblpromotor">Se un Promotor</label></div>
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


<label style="margin-left:77%;margin-top:-5%;">Puntos de Venta</label>
<div id="mapas"><img src="multimedia/imagenes/maps.png"  id="imagen_maps"  href="#animatedModal"/>

</div>

</div>

        <!--DEMO01-->
        <div id="animatedModal">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal" class="close-animatedModal" style="color:white"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" style="font-size:32px;cursor:pointer;margin:10px;"></span></center>
            </div>
                
            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>


        <!--DEMO01-->
        <div id="animatedModal02">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal" class="close-animatedModal02" style="color:white"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" style="font-size:32px;cursor:pointer;margin:10px;"></span></center>
            </div>
                
            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>


        <script>


            $("#imagen_maps").animatedModal({
                modalTarget:'animatedModal',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#3498db',
                animationDuration:'2s'
            });

                        $("#imagen_promotor").animatedModal({
                modalTarget:'animatedModal02',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#3498db',
                animationDuration:'2s'
            });


        </script>

