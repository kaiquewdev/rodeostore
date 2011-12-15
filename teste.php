<?php 

require_once("includes/connect.php"); ?>

<?php

$sel_categoria;
$sel_pagina; 

require_once("includes/functions.php");

 ?>

<?php

global $sel_categoria;
global $sel_pagina; 

echo "lalalla<br/>";

getRequired();

if($sel_categoria != "" ||  !empty($sel_categoria) )
{
	echo $sel_categoria["nome"];
}
else
{
	die("Erro");
}

if($sel_pagina != "")
{
	echo $sel_pagina;
	
	if($sel_pagina == "Home")
	{
		//	mostraSlideShows("produto");
		//	mostraSlideShows("shows");		
	}
}

?>