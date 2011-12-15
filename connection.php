<?php

 require("constants.php");

//primeira coisa a fazer

	$connect = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
	
	if(!$connect)
	{
		die("Conexão com a base indisponível ". mysql_error());
	}
	
//segunda coisa a fazer


	$db_select = mysql_select_db(DB_NAME,$connect);
	if(!$db_select)
	{
		die("Não foi possível selecionar a base: " .mysql_error());
	}	
	
?>	