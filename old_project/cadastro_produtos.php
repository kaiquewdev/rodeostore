<?php 
require_once("includes/connect.php"); ?>

<?php require_once("includes/functions.php"); ?>

<?php include("includes/header.php"); ?>
  
<?php include("includes/aside.php"); ?>

<div id="content" class="center">

<h1 style="padding-top:10px; padding-bottom:10px;">
  
  Cadastro de Produtos
  
</h1>


<table cellspacing="20">
<form name="form1" method="post" action="novo_produto.php">

<tr>
<td>
  <label for="txtNome">Nome</label>
 </td>
<td> 
  <input name="txtNome" type="text" id="txtNome" maxlength="200">
 </td> 
  </tr>
  <tr>
  <td>
  <label for="txtDesc">Descrição</label>
  </td>
  <td>
  <input name="txtDesc" type="text" id="txtDesc" maxlength="1000">
  </td>
  </tr>
  <tr>
  <td>
  <label for="selCat">Categoria</label>
  </td>
  <td>
  <select name="selCat">
  
  <?php
  	listCategories();
  ?>
  
  </select>
  </td>
</tr>
<tr>
<td>
  <label for="radVenda">Venda Autorizada</label>  
 </td>
 <td> 
	<input name="radVenda" type="radio" value="0" checked>Não</input>
    
	<input name="radVenda" type="radio" value="1">Sim</input>
   </td> 
<tr>
<td>
<input type="submit" class="botao" value="Adicionar"></input>
</td>
<td>
                <a href="content.php"><input type="submit" class="botao" value="Cancelar"></input></a>
</td>
</tr>  
</form>
 </table> 
 
 </div>
 
    <?php include("includes/footer.php"); ?>