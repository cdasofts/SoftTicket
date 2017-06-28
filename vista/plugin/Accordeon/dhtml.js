            $("#imagen_maps").animatedModal({
                modalTarget:'animatedModal',
                animatedIn:'zoomIn',
                animatedOut:'zoomOut',
                color:'#E4D3FF',
                animationDuration:'2s'
              
            });

 $( document ).ready(function() {
$('.selectpicker').selectpicker();





 	document.getElementById("btncomprarB").disabled = true;
  

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
};


 function continuar3() {
 	$("#divconfirmacion").show();
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
  confirmButtonText: ' <i class="fa fa-check" aria-hidden="true" style="margin-right:5px;" ></i>Si',
  cancelButtonText: '<i class="fa fa-times" aria-hidden="true" style="margin-right:5px;"></i> No'
}).then(function () {

	 location.reload();

})

}





function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };


            infoWindow.setPosition(pos);
            infoWindow.setContent('Esta es tu ubicacion');
            map.setCenter(pos);


            var icon = {
    url: "vista/plugin/Accordeon/prueba2.png", // url
    scaledSize: new google.maps.Size(30, 30), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
};

var marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: 'marker with infoWindow',
                icon: icon
           });
           marker.addListener('click', function() {
               infowindow.open(map, marker);
          });


          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }