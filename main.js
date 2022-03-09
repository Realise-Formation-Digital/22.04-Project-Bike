
$(document).ready(function (){
   $("#click").click(function (){
      $('html, body').animate({
         scrollTop: $("#about").offset().top
      }, 2000);
   });
});



$(document).ready(function (){
$("#click1").click(function (){
   $('html, body').animate({
      scrollTop: $("#work").offset().top
   }, 2000);
});
});



$(document).ready(function (){
$("#click2").click(function (){
   $('html, body').animate({
      scrollTop: $("#shop").offset().top
   }, 2000);
});
});



$(document).ready(function (){
$("#click3").click(function (){
   $('html, body').animate({
      scrollTop: $("#contact").offset().top
   }, 2000);
});
});
