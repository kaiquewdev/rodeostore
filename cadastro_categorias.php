<?php require_once("includes/connect.php"); ?>

<?php require_once("includes/functions.php"); ?>

<?php include("includes/header.php"); ?>
  
<?php include("includes/aside.php"); ?>

<?php

if(isset($_GET["erro"]))
{
		echo "<script type=\"text/javascript\">
		window.alert(\"Erro no cadastro.Preencha os campos corretamente\");
		</script>";
}

?>
<td>
<div id="content" class="center">

<h1 style="padding-top:10px; padding-bottom:10px;">

Cadastro de Categorias

</h1>
<br/>
<form id="form1" name="form1" method="post" action="criar_categorias.php">
<table width="200" border="0" cellspacing="10">
  <tr>
    <td>Nome:</td>
    <td><input name="nome" type="text" size="50" maxlength="200"></td>
  </tr>
  <tr>
    <td>Posição:</td>
    <td><input name="position" type="text" size="1" maxlength="1"></td>
  </tr>
  <tr>
    <td>Visivel:</td>
    <td><input name="visible" type="radio" value="0">Não</input>
    <input name="visible" type="radio" value="1" checked>Sim</input>
    </td>
  </tr>
  <tr>
    <td>Supercategoria:</td>
    <td valign="bottom"><select name="super" size="2">
    
        <?php
		
		global $connection;
	
		$categorias = getAllSuperCategories();
		
		while($resultado = mysql_fetch_array($categorias))
		{
			echo	"<option value=\"".$resultado["id"]."\">".urldecode($resultado["nome"])."</option>";
		}
	?>

    </select></td>
  </tr>
  <tr>
    <td colspan="2"><h2><input class="button" type="submit" name="enviar" id="enviar" value="Enviar"></h2></td>
    </tr>
</table>

</form>
</div>
</td>
<?php include("includes/footer.php"); ?>