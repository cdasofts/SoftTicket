
$( document ).ready(function() {
    console.log( "Encabezado" );
});

//Aqui se genera el modal para ser un promotor

                        $("#imagen_promotor").animatedModal({
                modalTarget:'animatedModal02',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'transparent',
                animationDuration:'2s'
            });



//Esta es la funcion de cancelar para el modal de promotor
function cancelarP() {


  swal({
  title: '¿Esta seguro de cancelar la posibilidad de ser un promotor?',
  text: "Si hace la cancelacion se perdera toda su informacion",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: ' <i class="fa fa-check" aria-hidden="true" style="margin-right:5px;" ></i>Si',
  cancelButtonText: '<i class="fa fa-times" aria-hidden="true" style="margin-right:5px;"></i> No'
}).then(function () {


$("#animatedModal02").removeClass("zoomIn");
$("#animatedModal02").addClass("zoomOut");

setTimeout(function(){ $("#animatedModal02").css("z-index","-3000"); }, 1000);

   $("html").css("overflow","auto");

})

}


//Esta funcion nos ayuda a hacer que los modales se cierren y abran correctamente.
function indexonP() {


   $("#animatedModal02").removeClass("zoomOut");
$("#animatedModal02").addClass("zoomIn");
$("#animatedModal02").css("background-color","")


}

function indexonPro() {
     $("#animatedModal06").removeClass("zoomOut");
$("#animatedModal06").addClass("zoomIn");
$("#animatedModal06").css("background-color","")
}

function cancelarPro() {

  swal({
  title: '¿Esta seguro de cancelar el registro de un nuevo usuario?',
  text: "Si hace la cancelacion se perdera toda su informacion",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: ' <i class="fa fa-check" aria-hidden="true" style="margin-right:5px;" ></i>Si',
  cancelButtonText: '<i class="fa fa-times" aria-hidden="true" style="margin-right:5px;"></i> No'
}).then(function () {


$("#animatedModal06").removeClass("zoomIn");
$("#animatedModal06").addClass("zoomOut");

setTimeout(function(){ $("#animatedModal06").css("z-index","-3000"); }, 1000);

   $("html").css("overflow","auto");

})

}


