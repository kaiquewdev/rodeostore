<?php //Menu helper

function make_menu()
{
	$b = base_url();
	
	$routes = array(
		$b,
		$b.'index.php/products',
		$b.'index.php/about',
		$b.'index.php/contact'	
	);
	
	return $routes;
}
