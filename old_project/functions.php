<?php

function getAllSuperCategories()
{
		$query = "SELECT * FROM supercategorias";
		$categorias = mysql_query($query);
		confirmaConsulta($categorias);
		return $categorias;
}

function getAllCategories()
{
		$query = "SELECT * FROM categorias";
		$categorias = mysql_query($query);
		confirmaConsulta($categorias);
		return $categorias;
}

function listCategories()
{
	$res = getAllCategories();
	while($item = mysql_fetch_array($res))
	{
		echo "<option value=\"".$item["id"]."\">".urldecode($item["nome"])."</option>";
	}
}

function selectCategories($id,$area="staff")
{
	if($area == "staff")
	{
		$query = "SELECT * FROM categorias WHERE supercategoria=".$id;
	}
	else
	{
		$query = "SELECT * FROM categorias WHERE supercategoria=".$id." AND vis=1";
	}
		$categoria = mysql_query($query);
		confirmaConsulta($categoria);
		return $categoria;
}


function confirmaConsulta($consulta)
{
	if(!$consulta)
	{
		die("Falha na consulta: ".mysql_error());
	}
	return $consulta;
}

function getAllProducts($id)
{
		$query = "SELECT * FROM produtos WHERE categoria=".$id;
		$produtos = mysql_query($query);
		confirmaConsulta($produtos);
		return $produtos;
}

function getRequired()
{
	global $sel_categoria;
	global $sel_pagina;
	
	$id;
		
	$query = "SELECT * FROM ";
	
	if(isset ($_GET["pagina"]))
	{
		$id = $_GET["pagina"];
		$query .= "paginas WHERE id=".$id;
		$sel_categoria = "";
		$consulta = mysql_query($query);
		$consulta = confirmaConsulta($consulta);
		
		while($cons = mysql_fetch_array($consulta))
		{
			$sel_pagina= $cons["nome"];			
		}	
			
	}	
	else if(isset ($_GET["categoria"]))
	{
		$id = $_GET["categoria"];
		$query .= "categorias WHERE id=".$id;
		$sel_pagina = "";
		$consulta = mysql_query($query);
		$consulta = confirmaConsulta($consulta);
		
		while($cons = mysql_fetch_array($consulta))
		{
			$sel_categoria = $cons["nome"];			
		}
		
	}	
	else
	{
		$sel_pagina = "Home";
		$sel_categoria = "";		
	}
}

function mostraSlideShows($tipo)
{
	echo "<br/><div id=\"{$tipo}\" class=\"slide\">";
	$query = "SELECT * FROM slides WHERE tipo= '".$tipo."' ORDER BY pos";
	$consulta = mysql_query($query);
	$consulta = confirmaConsulta($consulta);
	
	while($res = mysql_fetch_array($consulta))
	{
		echo "<img src=\"".$res["img"]."\" width=\"902\" height=\"280\">";
	}
	echo "</div><br/>";
}

function pagesMenu()
{
	$query = "SELECT * FROM paginas WHERE vis =1";
	$cons =  mysql_query($query);
	$cons = confirmaConsulta($cons);
	echo "<ul>";
	 while($res = mysql_fetch_array($cons))
	 {  
    	echo "<a href=\"index.php?pagina=".$res["id"]."\"><li>".$res["nome"]."</a></li>";
	 }
   echo "</ul>";
}

?>