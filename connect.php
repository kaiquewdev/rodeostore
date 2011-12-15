<?php

require_once("consts.php");

$connection = mysql_connect(DB_SERVER,DB_USER,DB_PASS);

if(!$connection)
{
	die("Não foi possível conectar ao banco de dados ". mysql_error());	
}

$db = mysql_select_db(DB_NAME,$connection);

if(!$db)
{
	die("Não foi possível selecionar o banco de dados. ".mysql_error());
}

?>