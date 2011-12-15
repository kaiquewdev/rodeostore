<!DOCTYPE HTML>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>RODEO STORE PROFESSIONAL WESTERN</title>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="./estilos.css" rel="stylesheet" type="text/css" />

<link href="./scripts/nivo-slider.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="./scripts/jquery-1.6.2.min.js"></script>

<script type="text/javascript" src="./scripts/jquery.nivo.slider.js"></script>
<script type="text/javascript">

$(window).load(function() {
$('#eventos').nivoSlider({
effect:'fold',
slices:15,
animSpeed:500,
pauseTime:5000,
directionNav:true, //Next & Prev
directionNavHide:true, //Only show on hover
controlNav:true, //1,2,3…
beforeChange: function(){},
afterChange: function(){}
});

$('#produto').nivoSlider({
effect:'fold',
slices:15,
animSpeed:500,
pauseTime:5000,
directionNav:true, //Next & Prev
directionNavHide:true, //Only show on hover
controlNav:true, //1,2,3…
beforeChange: function(){},
afterChange: function(){}
});


});

</script>

</head>

<body>

  <header>
  
<div id="marca">    

    <img src="./imgs/rodeostore.png" width="173" height="123" align="left">
</div>
    
    <center><img src="./imgs/logotipo.png" width="301" height="94"></center>
    
    <div id="main_menu">
    <?php 	pagesMenu(); ?>
    </div>
    
  </header>
  
<div id="main">
<table border="0">