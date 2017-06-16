<head>
<!-- Linkeo a archivo css -->
<link rel="stylesheet" href="vista/assets/style/pie.css" type="text/css">
</head>


<!-- Estructura del pie de pagina -->
<div id="contenedor_pie">
	
<div id="linkeos_contenedor">
	
	<div id="divredes">
	<img src="vista/multimedia/imagenes/facebook.png"  class="redes" />
	<img src="vista/multimedia/imagenes/twitter.png"  class="redes" />
	<img src="vista/multimedia/imagenes/youtube.png"   class="redes" />
	</div>


	<button id="btnreembolso"  href="#animatedModal" class="btn btn btn-default"   >
	Reembolso
	</button>

<div id="linkeos">
	<label class="lbllinkeos">Aviso de Privacidad</label>
	<br>
	<label class="lbllinkeos">Preguntas Frecuentes</label>
	<br>
	<label class="lbllinkeos">Contactanos</label>
	<br>
	<label class="lbllinkeos">Publicidad</label>
	<br>
	<label class="lbllinkeos">Nuestras Politicas</label>
	<br>
	<label class="lbllinkeos">Terminos de Uso</label>
	</div>

</div>

<table id="tblpie">
	<tr>
	<td class="tdcolumna" >
	Promociones
</td>
		<td>
			
			<?php 
// se incluye la galeria de promociones
		include "vista/plugin/Promociones/autoPlaySlide/index.html";

			?>

		</td>



	</tr>
		<tr>
				<td class="tdcolumna">
	Proximos
</td>
		<td>
			
						<?php 
//se incluye la galeria de proximos eventos
			include "vista/plugin/proximos/autoPlaySlide/index.html";

			?>

		</td>

	</tr>
</table>



</div>

<!-- Aqui se genera la estructura del modal de reembolso -->
        <div id="animatedModal" class="modal">

            <div  id="btn-close-modal" class="close-animatedModal10"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodalr"></span></center>
            </div>
                
            <div class="modal-content">
            </div>
        </div>








<!-- Linkeo a archivo .js -->
<script src="vista/assets/javascript/pie.js"></script>
