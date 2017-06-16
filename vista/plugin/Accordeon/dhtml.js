            $("#imagen_maps").animatedModal({
                modalTarget:'animatedModal',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#3498db',
                animationDuration:'2s'
            });

 $( document ).ready(function() {
 	document.getElementById("btncomprarB").disabled = true;
$(".selectpicker").selectpicker();

    $(".bootstrap-select").click(function () {
         $(this).addClass("open");
    });

$('.selectpicker').on('changed.bs.select', function (e) {

 if ($(".selectpicker").val()==null) {
document.getElementById("btncomprarB").disabled = true;
 }else {
document.getElementById("btncomprarB").disabled = false;
 }

});




});


 $("#btncomprar").animatedModal({
                modalTarget:'animatedModal10',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#3498db',
                animationDuration:'2s'
            });

 function continuar1() {
 	$("#imgselected").hide();
$("#captcha").show();
$("#buttonscaptcha").show();
$("#buttonsrecinto").hide();

};


 function continuar2() {
 	$("#captcha").hide();
 	$("#pago_boleto").show();
 	$("#buttonscaptcha").hide();
 	$("#divpago").show();
};


 function continuar3() {
 	$("#divconfirmacion").show();
 	$("#divpago").hide();
};



 function regresar2() {
 	$("#imgselected").show();
$("#captcha").hide();
$("#buttonscaptcha").hide();
$("#buttonsrecinto").show();
};

 function regresar3() {
 	$("#captcha").show();
 	$("#pago_boleto").hide();
 	$("#buttonscaptcha").show();
 	$("#divpago").hide();
};


function comprar() {

swal({
  title: '¿Esta seguro de hacer la compra?',
  text: "Solo hay reembolso en caso de cancelacion del evento",
  type: 'warning',
  showCancelButton: true,
  cancelButtonText: 'No, Denegar Compra',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Acepto'
}).then(function () {
  swal(
    'Compra Exitosa',
    'Tu compra se hizo correctamente',
    'success'
  )
})


}


function cancelar() {
	swal({
  title: '¿Esta seguro de cancelar la compra?',
  text: "Si hace la cancelacion se perdera toda su informacion",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si',
  cancelButtonText: 'No'
}).then(function () {

	 location.reload();

})

}







