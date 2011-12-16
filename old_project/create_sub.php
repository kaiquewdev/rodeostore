<?php
	require_once("includes/connection.php");
?>
<?php
	require_once("includes/functions.php");
?>                

<?php

$menu_name = $_POST["menu_name"];

$pos = $_POST["position"];

$vis = $_POST["visible"];

$query = "INSERT INTO subjects (menu_name,position,visible) VALUES ('{$menu_name}', {$pos} , {$vis} )";

if(mysql_query($query))
{
	header("Location: content.php");
	exit;
}
else
{
	echo "<p>Erro ao criar</p> " . mysql_error();	
}

?>

<?php

mysql_close($connect);

?>