<?php 
require_once("includes/connect.php"); ?>

<?php require_once("includes/functions.php"); ?>

<?php include("includes/header.php"); ?>
  
<?php include("includes/aside.php"); ?>

<?php



$nome = urlencode($_POST["txtNome"]);
$desc = urlencode($_POST["txtDesc"]);
$cat = $_POST["selCat"];
$venda = $_POST["radVenda"];


$query = "INSERT INTO  `produtos` (
`id` ,
`nome` ,
`descr` ,
`venda` ,
`categoria`
)
VALUES (
NULL ,  '{$nome}',  '$desc',  '{$venda}',  '{$cat}'
);";

if(mysql_query($query))
{
	header("Location:	cadastro_produto.php");
	exit;
}
else
{
	echo "<div id=\"content\" class=\"center\">

<h1 style=\"padding-top:10px; padding-bottom:10px;\">
  
  Erro encontrado ao criar produto: ".mysql_error()."
  
</h1>";

}
?>

