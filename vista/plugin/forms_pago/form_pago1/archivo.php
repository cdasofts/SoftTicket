

<!-- se linkea al archivo .css para el formulario de pago. -->
<link rel="stylesheet" type="text/css" href="vista/plugin/forms_pago/form_pago1/archivo.css">






<!-- multistep form -->
<form id="msform">
  <!-- progressbar -->
  <ul id="progressbar" style="margin-left:30%;width:100%;">
    <li class="active">Contacto</li>
    <li>Banco</li>
  </ul>
  <!-- fieldsets -->
  <fieldset>



    <h2 class="fs-title">Informacion de Contacto</h2>
    <h3 class="fs-subtitle">Paso 1</h3>
    <input type="text" name="nombre" placeholder="Ingrese su Nombre" />
    <input type="text" name="apellidos" placeholder="Ingrese sus Apellidos" />
    <input type="text" name="email" placeholder="Ingrese su correo electronico" />


<select class="selectpicker" multiple  style="width:100%;">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>

<br>

<button  type="button" name="next" class="next action-button" value="Siguiente">

  Siguiente &nbsp <i class="fa fa-chevron-right"></i> 
  
</button>

  

  </fieldset>



  <fieldset>
    <h2 class="fs-title">Informacion Bancaria</h2>
    <h3 class="fs-subtitle">Paso 2</h3>
    <input type="text" name="nombre_asociado" placeholder="Ingrese el nombre Asociado" />
    <input type="text" name="clabe" placeholder="Ingrese la CLABE" />
    <input type="text" name="banco" placeholder="Ingrese el Banco" />
    <input type="text" name="numero_tarjeta" placeholder="Ingrese el numero de tarjeta" />


<button type="button" name="previous" class="previous action-button" value="Anterior" >

  <i class="fa fa-chevron-left"></i> &nbsp  Anterior  
  
</button>


<button type="submit" name="submit" class="submit action-button" value="Enviar" onclick="continuar3();"  >

      <i class="fa fa-paper-plane"></i> &nbsp Enviar  
  
</button>



  </fieldset>
</form>

<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>




<!-- jQuery easing plugin -->
<script src="vista/plugin/forms_pago/form_pago1/archivo.js" type="text/javascript"></script>


