
// A $( document ).ready() block.
$( document ).ready(function() {
    console.log( "ready!" );
});

//Aqui se genera o se llama el modal de reembolsos

            $("#btnreembolso").animatedModal({
                modalTarget:'animatedModal5',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#3498db',
                animationDuration:'2s'

            });



var loading = function(e) {
  e.preventDefault();
  e.stopPropagation();
  e.target.classList.add('loading');
  e.target.setAttribute('disabled','disabled');
  setTimeout(function(){
    e.target.classList.remove('loading');
    e.target.removeAttribute('disabled');
  },1500);
};

var btns = document.querySelectorAll('button');
for (var i=btns.length-1;i>=0;i--) {
  btns[i].addEventListener('click',loading);
}


//Aqui esta la funcion para cancelar los reembolsos en el modal
function cancelarR() {


  swal({
  title: '¿Esta seguro de cancelar el Reembolso?',
  text: "Si hace la cancelacion se perdera toda su informacion",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: ' <i class="fa fa-check" aria-hidden="true" style="margin-right:5px;" ></i>Si',
  cancelButtonText: '<i class="fa fa-times" aria-hidden="true" style="margin-right:5px;"></i> No'
}).then(function () {


$("#animatedModal5").removeClass("zoomIn");
$("#animatedModal5").addClass("zoomOut");

setTimeout(function(){ $("#animatedModal5").css("z-index","-3000"); }, 1000);

$("html").css("overflow","auto");
   

})

}


//Esta funcion nos ayuda a mejorar el cierre y apertura de los modales.
function indexonR() {



   $("#animatedModal5").removeClass("zoomOut");
$("#animatedModal5").addClass("zoomIn");
$("#animatedModal5").css("background-color","")


}