<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Seccion donde se hacen los links a los archivos correspondientes -->
  <link rel="stylesheet" href="vista/plugin/Accordeon/accordeon.css" type="text/css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<link rel="stylesheet" type="text/css" href="vista/plugin/Accordeon/timer/css/media.css">


<!-- Se inicia el contador para realizar la compra -->
    <script>

var val=0;



      $(function(){
  $("#btncomprar").click(function (e) {
    val=val+1;
    if (val>1) {
console.log("Ya dio clic mas de una vez");
    }else {
        $('.digits').countdown({
    format: 'mm:ss',
    startTime: "10:00",
    image: "vista/plugin/Accordeon/timer/img/digits.png",
    timerEnd: function() { 
     swal({
  title: 'El tiempo de compra se ha terminado',
  text: 'La ventana se cerrara en 3 segundos',
  timer: 3000,
  showConfirmButton: false
}).then(
  function () {},
  // handling the promise rejection
  function (dismiss) {
    if (dismiss === 'timer') {
      $("#animatedModal10").removeClass("zoomIn");
$("#animatedModal10").addClass("zoomOut");
setTimeout(function(){ $("#animatedModal10").css("z-index","-3000"); }, 1000);
      
    }
  }
)


       }
  });
    }

  });
      });
    </script>

</head>



<!-- se genera la estructura del accordeon -->

<body>
 
<center><div id="accordion" >
  <h3 class="headsecc">20/06/2017 &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Shakira  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; Queretaro</h3>
  <div class="secciones">

  <table   class="table-condensed" style="height:80%;width:100%;border-collapse: collapse;padding:0px;">
  
  <tr>
    <td class="columnas" >
      <label class="lblEtiquetaL">Estacionamiento: </label>
<br>
<label class="lblEtiquetaL">SI</label>
<br><br>
<label class="lblEtiquetaL">Precio General: </label>
<br>
<label class="lblEtiquetaL">$600.00</label>
    </td>
    <td class="columnas">
    <center><iframe width="350" height="215" id="framey" 
src="https://www.youtube.com/embed/RjWNCLvyGHY?ecver=1">
</iframe></center>
    </td>
    <td class="columnas">
      <center><img src="vista/multimedia/imagenes/perfil.jpg" id="imgpromocional" ></center>
    </td>
  </tr>
  <tr>
    <td class="columnas">
            <br>
<label class="lblEtiquetaL">Sitio web del Recinto: </label>
<br>
<label class="lblEtiquetaL">www.sitioweb.com</label>
<br><br>
<div  id="divasientosd">
<label>
  Asientos Disponibles
</label>
<br>
<label>
  <label> <i class="fa fa-ticket" aria-hidden="true" style="margin-right:5px;color:gold;" ></i> 30 VIP</label>
  <br>
  <label><i class="fa fa-ticket" aria-hidden="true" style="margin-right:5px;color:#C0C0C0;" ></i>40 Platinum</label>
  <br>
    <label><i class="fa fa-ticket" aria-hidden="true" style="margin-right:5px;color:#cd7f32;" ></i>230 Generales</label>
</label>
</div>

    </td>
    <td class="columnas">
      <center><label id="lbldescripcion">Descripcion: </label>
<br><br>
<label>Producciones George Nader</label>
<label> Direccion: George A. Nader</label>
<label>Edicion: Mayret Velasquez</label>
<label>Relaciones Publicas: Ezequiel Acosta (El Triple A)</label>
<label>Sitio web del Artista: </label>&nbsp;&nbsp;<a>www.sitio.com</a>
</center>
<br>
    </td>
    <td class="columnas">
     
     <center> <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&layout=box_count&size=large&mobile_iframe=true&width=98&height=58&appId" width="98" height="58" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true" ></iframe>
<br><br>
</center>

<center>
<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-size="large">Twittear</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</center>

    </td>
  </tr>
  <tr>
    <td class="columnas">
      <br>

<label>Fecha: 20 de Junio del 2017</label>
<br><br>
<label>Hora: 20:00 (Hora Cd. Mexico)</label>
<br><br>
<a style="cursor:pointer;text-decoration:none;color:blue;">Ver todos los eventos de shakira.</a>
    </td>
    <td class="columnas">
      <center><button id="btncomprar" class="btn btn-success"  href="#animatedModal10" onclick="indexon(10);">
 <i class="fa fa-ticket" aria-hidden="true" style="margin-right:5px;" ></i> Comprar Boleto
</button></center>
    </td>
    <td class="columnas">
      <center>
<div   id='contedor_buscador'> 
<label id="lblpuntoventa">Puntos de Venta</label>
<div id="mapas"><img src="vista/multimedia/imagenes/maps.png"   id="imagen_maps"  href="#animatedModal"  onclick="indexon(0);"/>

</div>
</div>
</center>

    </td>
  </tr>

  </table>



  </div>

  <h3 class="headsecc">27/06/2017 - Alejandro sanz</h3>
  <div class="secciones">
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3 class="headsecc">13/07/2017 - America vs Pachuca</h3>
  <div class="secciones">
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3 class="headsecc">26/08/2017 - Obra de teatro</h3>
  <div class="secciones">
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div></center>
 
 
<!-- Estructura del modal del boton de comprar -->
        <div id="animatedModal10" class="modal10">
            <div  id="btn-close-modal10" class="close-animatedModal"> 

                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal10" style="color:white;font-size:32px;cursor:pointer" onclick="cancelarC();"></span></center>
            </div>
                
            <div class="modal-content10" style="background: rgba(0, 0, 0, 0.8);height:1000px;">
             

<!-- Estructura del timer para marcar el tiempo de compra -->
<div class="wrapper" style="height:50%;margin-top:-10%;" >
      <div class="cell">
        <div id="holder">
          <div class="digits"></div>
        </div>
      </div>
    </div>
             <center>



             <img src="vista/multimedia/imagenes/seleccionadorlugar.gif" id="imgselected" style="margin-top:-6%;">
             </center>


<!-- Aqui se pone la estructura del captcha, para los errores de boots -->
<center>
  <div id="captcha">

<div class="g-recaptcha" data-sitekey="6LcDyiUUAAAAAMOwgsKskYgh_G94Zhkz-iQiXD43" data-callback="recaptchaCallback" ></div>

  </div>
</center>


  <div id="pago_boleto"  style="display:none;width:50%;margin-top: -10%;">


<?php
// se incluye el formulario para pagar
include 'vista/plugin/forms_pago/form_pago1/archivo.php';

 ?>


  </div>



<div id="divconfirmacion" style="display:none;float:right;margin-top:-30%;margin-right:10%;" align="right">

<label style="float:right;margin-top:35%;color: white;" >Confirmar la compra</label>

<span style="float:right;width:20%;height:45%;margin-top:40%;margin-right:-15%;border-width: 20px;
    border-color: red;color: white;">
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vehicula felis leo, et posuere dolor vulputate ac. Sed vestibulum lectus vel tempus bibendum. Proin et magna tempor, condimentum elit in, consectetur mi. Morbi eu massa viverra, euismod augue ac, consectetur risus. Praesent eget facilisis nunc. Aenean ut ornare magna. Nullam venenatis vulputate nisl, eu rutrum justo hendrerit eu.
</span>
  <button class="btn btn-success" id="btncomprarB" style="float:right;margin-top:64%;margin-right:-10%;" onclick="comprar();">
  <i class="fa fa-floppy-o" aria-hidden="true" style="margin-right:5px;"></i>  Comprar 
  </button>
    <button class="btn btn-warning" style="float:right;margin-top:64%;margin-right:-20%;" onclick="cancelarC();">
  <i  class="fa fa-ban" aria-hidden="true" style="margin-right:5px;"></i>  Cancelar
  </button>
</div>



<center>
<div id="buttonsrecinto">
<button class="btn btn-success" id="btnnext" onclick="continuar1();">
 Siguiente  <i class="fa fa-chevron-right" aria-hidden="true" style="margin-left:5px;"></i>
</button>
</div>
</center>


<center>
<div id="buttonscaptcha" style="display:none">
<button class="btn btn-default" id="btnregresar" onclick="regresar2();">
 <i class="fa fa-chevron-left" aria-hidden="true" style="margin-right:5px;"></i> Regresar
</button>
</div>
</center>







            </div>


        </div>


<!-- Estructura del Modal para google maps -->
        <div id="animatedModal">
            <div  id="btn-close-modal"   class="close-animatedModal10" style="background: rgba(0, 0, 0, 0.8);"> 
                <center><span class="glyphicon glyphicon-remove-circle" aria-hidden="true" id="spanmodal" style="color:white;font-size:32px;" onclick="cancelarPu();"></span></center>
            </div>
                
            <div class="modal-content" style="background: rgba(0, 0, 0, 0.8);border-radius:0px;height:auto;">



<center><div id="map" style="height:500px;width:900px;margin-top:5%;"></div></center>


<!-- se incluye el script para que la llave de google maps localize la ubicacion -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA49iAee5kSTQ-whGT3A77H-PJsK5FzLCk&callback=initMap" async defer></script>


<!-- se incluye el script para que funcione google maps -->
    <script type="text/javascript" src="vista/plugin/google_maps/src/geo.js"></script>


<center><div style="background-color:#A59AFF;margin-top:5%;width:80%;margin-bottom:5%;border-radius:20px;">

<?php

include 'vista/plugin/tabla/file2.html';

 ?>

</div></center>

</div>


            </div>
        </div>




        
</body>
</html>


<!-- se incluye el script para que funcione el accordeon -->
        <script src="vista/plugin/Accordeon/dhtml.js"></script>

<!--  se incluye el script para que funcione el captcha -->
        <script type="text/javascript">
function recaptchaCallback() {
    continuar2();
};
</script>








<!-- Se incluye el script del timer -->
<script type="text/javascript" src="vista/plugin/Accordeon/timer/js/contador.js"></script>





