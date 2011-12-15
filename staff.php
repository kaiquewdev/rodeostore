<?php

//primeira coisa a fazer

	$connect = mysql_connect("localhost","root","");
	if(!$connect)
	{
		die("Conexão com a base indisponível ". mysql_error());
	}
	
//segunda coisa a fazer


	$db_select = mysql_select_db("widget_corp",$connect);
	if(!$db_select)
	{
		die("Não foi possível selecionar a base: " .mysql_error());
	}	
?>
<?php
	require_once("includes/functions.php");
?>                
<?php
	include("includes/header.php");
?>

<nav>

    <ul>
    
    </ul>

</nav>

<article>
  <h2>Staff Menu</h2>
                <p>Bem vindo a staff area.</p>
                
                <ul>
                	<li><a href="content.php">Gerenciar site</a></li>
                	<li><a href="new_user.php">Adicionar usuários</a></li>
                    <li><a href="logout.php">Sair</a></li>
                </ul>
</article>                
                                
<?php
	include("includes/footer.php");
?>     