<?php require_once("includes/connect.php"); ?>

<?php require_once("includes/functions.php"); ?>

<?php

$campos = array('nome','position','visible','super');

foreach($campos as $campo)
{
	if( !isset($_POST[$campo]) || empty($_POST[$campo]))
	{
		$erros[] = $campo;
	}
}


if(!empty($erros))
{
	header("Location: cadastro_categorias.php");
	exit;
}

?>

<?php
$nome = urlencode($_POST["nome"]);
$position= $_POST["position"];
$visible= $_POST["visible"];
$supercategoria = $_POST["super"];
?>

<?php

$query = "INSERT INTO categorias(nome,pos,visible,supercategoria) VALUES (
'{$nome}',{$position},{$visible},{$supercategoria}
)";

if(mysql_query($query,$connection))
{
	echo "Inserido com sucesso";
	header("Location:  index.php");
	exit;
}
else
{
	echo "<p>Erro ao criar categoria: ".mysql_error(). " </p>";
}
?>

<?php mysql_close($connection);?>