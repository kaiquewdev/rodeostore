<?php /* require_once('Connections/conn.php'); */?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO produtos (nome, `desc`, img1, img2, img3) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nome'], "text"),
                       GetSQLValueString($_POST['desc'], "text"),
                       GetSQLValueString($_POST['img1'], "text"),
                       GetSQLValueString($_POST['img2'], "text"),
                       GetSQLValueString($_POST['img3'], "text"));

  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($insertSQL, $conn) or die(mysql_error());

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RODEO STORE PROFESSIONAL WESTERN</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />

<style type="text/css">

td
{
	border-radius:15px;
	padding:20px;
}


td:hover
{
	background-color: rgba(255,204,0,0.2);
}

</style>

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<header><div id="marca"><img src="imgs/rodeostore.png" width="173" height="123" align="left"></div><center><img src="imgs/logotipo.png" width="301" height="94"></center></header>

<div id="content"></div>
<div style="margin:20px;">
  <div id="content2"></div>
  <div id="desc_area" style="float:right; margin-right:50px;">
    <h1>Administração</h1>
  </div>
  <table width="452" border="0" cellspacing="10">
    <tr>
      <td><a href="cadastro_produtos.php" class="decoration"><img src="png/Package-Add64.png" width="64" height="64" border="0"></a>        <h2><a href="cadastro_produtos.php" class="decoration">Cadastro de Produtos</a></h2></td>
    </tr>
    <tr>
      <td><a href="#"><img src="png/item-configuration64.png" width="64" height="64" border="0"></a>        <h2><a href="#"><span class="decoration">Atualizar Produtos</span></a></h2></td>
    </tr>
    <tr>
      <td><a href="#" class="decoration"><img src="png/inventory-maintenance64.png" width="64" height="64" border="0"></a>        <h2><a href="#" class="decoration">Atualizar Slideshow Produtos</a></h2></td>
    </tr>
    <tr>
      <td><a href="#" class="decoration"><img src="png/tickets64.png" width="64" height="64" border="0"></a>        <h2><a href="#" class="decoration">Atualizar Slideshow Eventos</a></h2></td>
    </tr>
  </table>
</div>
</body>
</html>
