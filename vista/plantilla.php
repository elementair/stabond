<!DOCTYPE html>
<html lang="es-Mx">
<head>

    <!-- metas -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="TheElementsWebs">
    <title>Stabond</title>
    <!-- 
        element css
     -->
    <link rel="shortcut icon" href="vistas/img/favicon.ico" type="image/x-icon">
    <link rel="icon"  href="vistas/img/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 

    <link rel="stylesheet" type="text/css" href="vista/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="vista/css/menu.css"/>
    
    <link rel="stylesheet" type="text/css" href="vista/css/estilos.css"/>    
    <link rel="stylesheet" type="text/css" href="vista/css/footer.css"/>    

</head>
<body id="top">
<header>

    <?php include ("vista/module/menu.php"); ?>

</header>


<?php

$base="vista/";
global $rutas;

$rutas = array();

if(isset($_GET["pagina"])){
    $rutas = explode("/", $_GET["pagina"]);


    if ($rutas[0] == "products") {

       
        include_once $base."section/products.php";

    }
    elseif ($rutas[0] == "silicone_products") {
         
          include_once $base."section/silicone_products.php";    

    }
    elseif ($rutas[0] == "quality") {

       
        include_once $base."section/quality.php"; 
        

    }

     elseif ($rutas[0] == "technical") {

        
        include_once $base."section/technical.php"; 
        
    }
    elseif ($rutas[0] == "contact") {

        
        include_once $base."section/contact.php"; 
        
    }
    else{

       include_once $base."section/error.php";
      
    }

}else{    
    
    include_once $base."section/home.php";
}

include_once $base."module/footer.php";
?>
<a href="#top" class="to-top"><i class="glyphicon glyphicon-chevron-up"></i></a>

<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="vistas/js/parallax.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="vista/lib/bootstrap/js/bootstrap.min.js"></script>



<script src="https://code.jquery.com/jquery-3.1.1.js"
              integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
              crossorigin="anonymous"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB-M2C9yZRD7FFdjwjSjJfnsotae_Y8Nk" type="text/javascript"></script>
              
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script> 
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


<script src="vista/js/scroll_anim.js" ></script>
<script src="vista/js/jquery.scrollUp.js"></script>  

<script>
    AOS.init();


    var offset = 250;
var duration = 500;

$(window).scroll(function(){
   
    if($(this).scrollTop() > offset){
        $('.to-top').fadeIn(duration);
        $(".brand_container img").css("width", "180px");
        $(".btn-toggle").css("background", "rgb(0,174,82,.90)");

    }else{
        $('.to-top').fadeOut(duration);
        $(".brand_container img").css("width", "200px");
        $(".btn-toggle").css("background", "rgb(255, 255, 255, 0)");
    }  

});

$('.to-top').click(function(){
    $('body').animate({scrollTop:0},duration);
});

$('li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
}); 
</script>
   

</body>
</html>

