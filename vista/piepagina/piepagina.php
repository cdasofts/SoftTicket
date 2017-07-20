<head>
<!-- Linkeo a archivo css creado por nosotros -->
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


	<button id="btnreembolso"  href="#animatedModal5" class="btn btn btn-default"  onclick="indexonR()" >
	<i class="fa fa-repeat" aria-hidden="true" style="margin-right:5px;"></i>Reembolso
	</button>

<div id="linkeos">
	<label class="lbllinkeos"><i class="fa fa-user-secret" aria-hidden="true" style="margin-right:20px;"></i><label>Aviso de Privacidad
</label>
	<br>
	<label class="lbllinkeos"><i class="fa fa-question-circle" aria-hidden="true" style="margin-right:20px;"></i>Preguntas Frecuentes</label>
	<br>
	<label class="lbllinkeos"><i class="fa fa-envelope" aria-hidden="true" style="margin-right:20px;"></i>Contactanos</label>
	<br>
	<label class="lbllinkeos"><i class="fa fa-newspaper-o" aria-hidden="true" style="margin-right:20px;"></i>Publicidad 
</label>
	<br>
	<label class="lbllinkeos"> <i class="fa fa-handshake-o" aria-hidden="true" style="margin-right:20px;"></i>Nuestras Politicas</label>
	<br>
	<label class="lbllinkeos"><i class="fa fa-exclamation-circle" aria-hidden="true" style="margin-right:20px;"></i>Terminos de Uso </label>
	<br>
		<label class="lbllinkeos"><i class="fa fa-phone" aria-hidden="true" style="margin-right:20px;"></i>Telfono: 4181040923 
</label>
	</div>

</div>

<table id="tblpie">
	<tr>
		<td>
			
			<?php 
// se incluye la galeria de promociones
		include "vista/plugin/Promociones/autoPlaySlide/index.html";

			?>

		</td>



	</tr>
		<tr>
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
        <div id="animatedModal5">

            <div  id="btn-close-modal5" style="background: rgba(0, 0, 0, 0.8);" > 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal5" style="color:white;cursor:pointer;font-size:32px;" onclick="cancelarR()"></span></center>
            </div>
                
            <div class="modal-content5" style="background: rgba(0, 0, 0, 0.8);height:750px;margin-top:-4%;padding:5%;">
           <?php
include 'vista/plugin/form_reembolso/archivo.html';
            ?>
            </div>
        </div>








<!-- Linkeo a archivo .js creado por nosotros -->
<script src="vista/assets/javascript/pie.js"></script>
