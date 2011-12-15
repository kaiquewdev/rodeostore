<?php require_once('Connections/conexao.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conexao, $conexao);
$query_Slideshow_Produtos = "SELECT img FROM sl_produtos ORDER BY img ASC";
$Slideshow_Produtos = mysql_query($query_Slideshow_Produtos, $conexao) or die(mysql_error());
$row_Slideshow_Produtos = mysql_fetch_assoc($Slideshow_Produtos);
$totalRows_Slideshow_Produtos = mysql_num_rows($Slideshow_Produtos);

mysql_select_db($database_conexao, $conexao);
$query_Slideshow_Eventos = "SELECT img FROM sl_eventos ORDER BY img ASC";
$Slideshow_Eventos = mysql_query($query_Slideshow_Eventos, $conexao) or die(mysql_error());
$row_Slideshow_Eventos = mysql_fetch_assoc($Slideshow_Eventos);
$totalRows_Slideshow_Eventos = mysql_num_rows($Slideshow_Eventos);
?>
<!DOCTYPE HTML>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>RODEO STORE PROFESSIONAL WESTERN</title>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link href="estilos.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="scripts/jquery-1.6.2.min.js"></script>

<script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
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

$('#shows').nivoSlider({
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


<link href="scripts/nivo-slider.css" rel="stylesheet" type="text/css">
</head>

<body>

  <header>
  
<div id="marca">    

    <img src="imgs/rodeostore.png" width="173" height="123" align="left">
</div>
    
    <center><img src="imgs/logotipo.png" width="301" height="94"></center>
    
  </header>

<div id="main">
  
<aside id="sidemenu">

  <h3 id="cowgirl"></h3>
  <ul id="subitens">
    <li><a href="#" ><strong>Blusinha</strong></a></li>
    <li><a href="#" ><strong>Calça Fem.</strong></a></li>
    <li><a href="#" ><strong>Camisete </strong></a></li>
    <li><a href="#" ><strong>Coletes</strong></a></li>
    <li><a href="#" ><strong>Jaquetas</strong></a></li>
    <li><a href="#" ><strong>Polo Fem.</strong></a></li>
  </ul>
  <h3 id="cowboy"></h3>
  <ul id="subitens">
    <li><a href="#" ><strong>Calça</strong></a></li>
    <li><a href="#" ><strong>Camiseta </strong></a></li>
    <li><a href="#" ><strong>Coletes</strong></a></li>
    <li><a href="#" ><strong>Jaquetas</strong></a></li>
    <li><a href="#" ><strong>Polo</strong></a></li>
  </ul>
  <h3 id="chapeu"></h3>
  <ul id="subitens">
    <li><a href="#" ><strong>Bon&eacute;s</strong></a></li>
    <li><a href="#" ><strong>Chap&eacute;us </strong></a></li>
  </ul>
  <h3 id="bota_tenis"></h3>
  <ul id="subitens">
    <li><a href="#"><strong>Bota</strong></a></li>
    <li><a href="#" ><strong>T&ecirc;nis </strong></a></li>
    <li><a href="#" ><strong>T&ecirc;nis Country</strong></a></li>
  </ul>
  <h3 id="cintos"></h3>
  <ul id="subitens">
    <li><a href="#" ><strong>Cintos</strong></a></li>
  </ul>
  <h3 id="fivelas"></h3>
  <ul id="subitens">
    <li><a href="#" ><strong>Fivelas R.S</strong></a></li>
    <li><a href="#" ><strong>Master</strong></a></li>
    <li><a href="#" ><strong>Pelegrini</strong></a></li>
    <li><a href="#" ><strong>Sumetal</strong></a></li>
  </ul>
  <h3 id="importados"></h3>
  <ul id="subitens">
    <li><a href="#" ><strong>Acess&oacute;rios</strong></a></li>
    <li><a href="#" ><strong>Bon&eacute;s</strong></a></li>
    <li><a href="#" ><strong>Camisas</strong></a></li>
    <li><a href="#" ><strong>Camisetes</strong></a></li>
    <li><a href="#" ><strong>Cintos</strong></a></li>
  </ul>
  <h3 id="acessorios"></h3>
  <ul id="subitens">
    <li><a href="#" ><strong>Canivetes</strong></a></li>
    <li><a href="#" ><strong>Carteiras</strong></a></li>
    <li><a href="#" ><strong>Porta Fumo</strong></a></li>
  </ul>
  <h3 id="servicos"></h3>
  <ul id="subitens">
    <li> <a href="#" ><strong>Aulas de dan&ccedil;a</strong></a></li>
    <li><a href="#" ><strong>Conserto de chap&eacute;us</strong></a></li>
  </ul>

</aside>



<div id="content" class="center">

<h1 style="padding-top:10px; padding-bottom:10px;">Novidades</h1>

  <div class="wood center" style="width:904px">
   
  <div id="eventos" class="slide">

      <?php do { ?>
      
        <img src="<?php echo $row_Slideshow_Produtos['img']; ?>" width="902" height="280">
        
      <?php } while ($row_Slideshow_Produtos = mysql_fetch_assoc($Slideshow_Produtos)); ?>
          
  </div>
 
  </div>
  
<h1 style="padding-top:10px; padding-bottom:10px;">Shows</h1>

  <div class="wood center" style="width:904px">
   
  <div id="shows" class="slide">

      <?php do { ?>

          <img src=" <?php echo $row_Slideshow_Eventos['img']; ?>" width="902" height="280">

        <?php } while ($row_Slideshow_Eventos = mysql_fetch_assoc($Slideshow_Eventos)); ?>
    
  </div>
 
  </div>

<h1 style="padding-top:10px; padding-bottom:10px;">Mural</h1>

  <div class="wood center" style="width:904px">
  
  		<div id="mural">
        
        </div>

  </div> 

</div>

</div>

<aside id="right_content" name="right_content">
Meu Carrinho
</aside>

<footer>

</footer>

</body>
</html>
<?php
mysql_free_result($Slideshow_Produtos);

mysql_free_result($Slideshow_Eventos);
?>
