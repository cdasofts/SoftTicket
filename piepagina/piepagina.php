<head>
<link rel="stylesheet" href="assets/style/pie.css" type="text/css">
</head>

<div id="contenedor_pie">
	
<div id="linkeos_contenedor">
	
	<div id="divredes">
	<img src="multimedia/imagenes/facebook.png"  class="redes" />
	<img src="multimedia/imagenes/twitter.png"  class="redes" />
	<img src="multimedia/imagenes/youtube.png"   class="redes" />
	</div>


	<button id="btnreembolso" data-label="Reembolso"  href="#animatedModal"    >
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

<table  style="width:50%;height:80%;">
	<tr>
	<td style="padding-left:40px;font-size:22px;">
	Promociones
</td>
		<td>
			
			<?php 

		include "plugin/Promociones/autoPlaySlide/index.html";

			?>

		</td>



	</tr>
		<tr>
				<td style="padding-left:40px;font-size:22px;">
	Proximos
</td>
		<td>
			
						<?php 

			include "plugin/proximos/autoPlaySlide/index.html";

			?>

		</td>

	</tr>
</table>



</div>

<!--DEMO01-->
        <div id="animatedModal" style="display:none;">
            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
            <div  id="btn-close-modal" class="close-animatedModal10" style="color:white"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" style="font-size:32px;cursor:pointer;margin:10px;"></span></center>
            </div>
                
            <div class="modal-content">
                <!--Your modal content goes here-->
            </div>
        </div>

        <script>


            $("#btnreembolso").animatedModal({
                modalTarget:'animatedModal',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#3498db',
                animationDuration:'2s'
            });



        </script>

<script src="assets/javascript/pie.js"></script>
