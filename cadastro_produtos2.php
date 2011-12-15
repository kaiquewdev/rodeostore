<?php require_once('Connections/conn.php')?>

<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RODEO STORE PROFESSIONAL WESTERN</title>
<link href="estilos.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<header><div id="marca"><img src="imgs/rodeostore.png" width="173" height="123" align="left"></div><center><img src="imgs/logotipo.png" width="301" height="94"></center></header>

<div id="content">

<form method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table style="float:left" cellpadding="5" cellspacing="20">
    <tr valign="baseline">
      <td width="88" rowspan="3" align="left" nowrap="nowrap"><h2>&nbsp;</h2>        <h2><img src="png/img.png" width="128" height="128"></h2></td>
      <td width="88" align="left" nowrap="nowrap"><h2>Nome:</h2></td>
      <td width="800" valign="middle"><input type="text" name="nome" value="" size="50" /></td>
    </tr>
    <tr valign="baseline">
      <td width="88" align="left" nowrap="nowrap"><h2>Categoria:</h2></td>
      <td valign="middle"><label for="categorias"></label>
        <select name="categorias" id="categorias">
          <option>Blusinha</option>
          <option>Calça Feminina</option>
          <option>Camisete</option>
          <option>Coletes</option>
          <option>Jaquetas</option>
          <option>Polo Feminina</option>
          <option>Calça Masculina</option>
          <option>Camiseta</option>
          <option>Coletes</option>
          <option>Jaquetas</option>
          <option>Polo Masculina</option>
          <option>Bonés</option>
          <option>Chapéus</option>
          <option>Bota</option>
          <option>Tênis</option>
          <option>Tênis Country</option>
          <option>Cintos</option>
          <option>Fivelas R.S.</option>
          <option>Master</option>
          <option>Pelegrini</option>
          <option>Sumetal</option>
          <option>Acessórios</option>
          <option>Bonés Exclusivos</option>
          <option>Camisas Exclusivas</option>
          <option>Camisetes Exclusivas</option>
          <option>Cintos Exclusivos</option>
          <option>Canivetes</option>
          <option>Carteiras</option>
          <option>Porta Fumo</option>
        </select></td>
    </tr>
    <tr valign="baseline">
      <td height="175" align="left" valign="top" nowrap="nowrap"><h2>Descrição:</h2></td>
      <td width="800" valign="top"><textarea name="desc" cols="50" rows="10"></textarea></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="left" nowrap="nowrap"><h2>Imagem Principal:</h2></td>
      <td width="800" valign="middle"><label for="principal"></label>
        <input type="file" name="principal" id="principal2"></td>
    </tr>    
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap">&nbsp;</td>
      <td width="800"><button>
        <h3>Inserir  registro</h3>
        </button>
        
      </td>
    </tr>
  </table>
</form>

</div>

<div id="desc_area">
  <h1>Cadastro de Produtos</h1>
</div>


</body>
</html>
