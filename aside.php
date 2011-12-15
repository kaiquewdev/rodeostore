<tr>
<td width="140">
<aside id="sidemenu">

	<?php
	
	$super = getAllSuperCategories();
	
	while($resultado = mysql_fetch_array($super))
	{
		echo "<h3 id=\"{$resultado['nome']}\"></h3>";
		
		echo "<ul class=\"subitens\">";
		
		$categorias_set = selectCategories($resultado["id"],"main");
		
		while($categoria = mysql_fetch_array($categorias_set))
		{
			echo "<a href=\"index.php?categoria=".urlencode($categoria["id"])."\"><li>".urldecode($categoria["nome"])."</li></a>";
		}
		
		echo "</ul>";
	}
	
	?>

</aside>
</td>
<td width="1140">
<div id="content" class="center">