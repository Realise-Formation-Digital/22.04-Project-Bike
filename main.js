
// $(document).ready(function (){
//    $("#click").click(function (){
//       $('html, body').animate({
//          scrollTop: $("#about").offset().top
//       }, 2000);
//    });
// });



// $(document).ready(function (){
// $("#click1").click(function (){
//    $('html, body').animate({
//       scrollTop: $("#work").offset().top
//    }, 2000);
// });
// });



// $(document).ready(function (){
// $("#click2").click(function (){
//    $('html, body').animate({
//       scrollTop: $("#shop").offset().top
//    }, 2000);
// });
// });



// $(document).ready(function (){
// $("#click3").click(function (){
//    $('html, body').animate({
//       scrollTop: $("#contact").offset().top
//    }, 2000);
// });
// });

let about = document.getElementById("click")

about.addEventListener('click', function (event){
    console.log("click")

    let destination = document.getElementById("about")

    destination.scrollIntoView({behavior: "smooth"})
})

let work = document.getElementById("click1")

work.addEventListener('click', function (event){
    console.log("click")

    let destination = document.getElementById("work")

    destination.scrollIntoView({behavior: "smooth"})
})

let shop = document.getElementById("click2")

shop.addEventListener('click', function (event){
    console.log("click")

    let destination = document.getElementById("shop")

    destination.scrollIntoView({behavior: "smooth"})
})

let contact = document.getElementById("click3")

contact.addEventListener('click', function (event){
    console.log("click")

    let destination = document.getElementById("contact")

    destination.scrollIntoView({behavior: "smooth"})
})