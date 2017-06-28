$(document).ready(function() {
  var counter = 0;
$("#contenedor_general").show();

  // Start the changing images
  setInterval(function() {
    if(counter == 1) { 
      counter = 0; 
    }

    changeImage(counter);
    counter++;
  }, 3000);

  // Set the percentage off
  loading();
});

function changeImage(counter) {
  var images = [
  '<i class="fa fa-ticket"></i>',
    '<i class="fa fa-futbol-o"></i>',
    '<i class="fa fa-briefcase"></i>',
    '<i class="fa fa-headphones"></i>',
    '<i class="fa fa-thumbs-up"></i>',
    '<i class="fa fa-credit-card-alt"></i>',
    '<i class="fa fa-map-marker"></i>',
    '<i class="fa fa-question"></i>',
    '<i class="fa fa-user-circle-o"></i>'
  ];

  $(".loader .image").html(""+ images[counter] +"");
}

function loading(){
  var num = 0;

  for(i=0; i<=50; i++) {
    setTimeout(function() { 
      $('.loader span').html(num+'%');

if(num>=70) {
         $(".loader").css("color","gold");
}

      if(num == 100) {
         $("body").css("overflow","visible");
         $( ".loader" ).addClass( "animated zoomOut" );

setTimeout(function(){ $( ".loader" ).css( "z-index","-2000" ); }, 1000);

         
         return;  
      }



      num=num+2;
    },i*120);
  };

}