<?php

//Se incluye la galeria de destacados
include 'vista/plugin/gallery/index.html';

echo "<br>";
echo "<br>";

?>

<!-- seccion donde se agregan las publicidades -->
<div style="float:left;">
<div style="width:115px;height:305px;margin-left:10px;margin-top:0px;">
	<img src="vista/multimedia/imagenes/marca1.jpg" style="width:115px;height:305px;">
</div>
<div style="width:115px;height:305px;margin-left:10px;margin-top:50px;">
	<img src="vista/multimedia/imagenes/marca2.jpg" style="width:115px;height:305px;">
</div>
</div>

<div style="float:right;">
<div style="width:115px;height:305px;margin-right:10px;margin-top:0px;">
	<img src="vista/multimedia/imagenes/marca3.jpg" style="width:115px;height:305px;">
</div>
<div style="width:115px;height:305px;margin-right:10px;margin-top:50px;">
	<img src="vista/multimedia/imagenes/marca4.jpg" style="width:115px;height:305px;">
</div>
</div>


<?php
//se incluye el accordeon de jquery
include 'vista/plugin/Accordeon/index.php';

?>