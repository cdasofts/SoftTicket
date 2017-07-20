
// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "formulario de promotor" );
    var correcto=0;
});



//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){



	animating = true;

if (correcto==1) {
return false;
}

	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){

	if (correcto==1) {
		alert("No Enviado");
return false;
}else {
	alert("Enviado");
}

})



function mensajeValidacion(idObjeto,idError,clave,mensaje) {

	$("#"+idObjeto).css("border","3px solid red");
	$("#"+idObjeto).addClass("error_form");
	$("#"+idError).text(mensaje);
	$("#"+idError).css("visibility","visible");


}


function siguiente_promo(id) {

switch(id) {
case 0: var nombre=$("#txtnombre_promotor").val();
  var apellidos=$("#txtapellidos_promotor").val();
  var correo=$("#txtcorreo_promotor").val();
  var estado_promotor=$( "#cmbEstado_promotor" ).val();
var expresio_letras=/^[a-zA-Z]*$/;
var expresion_correo=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

if (nombre=="" ) {
	mensajeValidacion("txtnombre_promotor","iderror_form",0,"campo obligatorio");
	correcto=1;
}else if (nombre.search(expresio_letras)) {
	mensajeValidacion("txtnombre_promotor","iderror_form",0,"No puede haber numeros");
correcto=1;
}else if(apellidos.search(expresio_letras)) {
	mensajeValidacion("txtnombre_promotor","iderror_form2",1,"No puede haber numeros");
correcto=1;
}else if (apellidos=="" ) {
	mensajeValidacion("txtapellidos_promotor","iderror_form2",1,"campo obligatorio");
		correcto=1;
}else if (correo=="" ) {
	mensajeValidacion("txtcorreo_promotor","iderror_form3",2,"campo obligatorio");
		correcto=1;
}else if (correo.search(expresion_correo)) {
	mensajeValidacion("txtcorreo_promotor","iderror_form3",2,"Error de Formato");
		correcto=1;
}else if (estado_promotor==0) {
	mensajeValidacion("cmbEstado_promotor","iderror_form4",3,"campo obligatorio");
		correcto=1;
}else {
	correcto=0;
}
break;

case 1: var nombre_evento=$("#txtnombre_evento").val();
  var foro=$("#txtforo").val();
  var secciones=$("#txtsecciones").val();
    var boleto=$("#txtboleto").val();
      var evento_promotor=$( "#cmbEvento_promotor" ).val();
       var ciudad_promotor=$( "#cmbCiudad_promotor" ).val();

if (nombre_evento=="" || foro=="" ||secciones=="" || boleto=="" || evento_promotor==0 || ciudad_promotor==0) {
	correcto=1;
}else {
	correcto=0;
}
break;

case 2: var asociado=$("#txtasociado").val();
  var CLABE=$("#txtCLABE").val();
  var banco=$("#txtbanco").val();
    var tarjeta=$("#txttarjeta").val();

if (asociado=="" || CLABE=="" || banco=="" || tarjeta=="") {
	correcto=1;
}else {
	correcto=0;
}
break;


}



}