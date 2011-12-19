<?php //Menu helper

function make_menu()
{
	//Make a default menu
	$b = base_url();
	$paths = array(
		'home' => $b,
		'products' => $b.'index.php/products',
		'locale' => $b.'index.php/locale',
		'about' => $b.'index.php/about',
		'contact' => $b.'index.php/contact'	
	);
	
	return $paths;
}

function make_admin_menu()
{
	//Menu for admin area
	$b = base_url();
	$paths = array(
		'panel_home' => $b.'index.php/panel/admin',
		'products' => $b.'index.php/panel/admin/products',
		'categorys' => $b.'index.php/panel/admin/categorys',
		'demands' => $b.'index.php/panel/admin/demands',
		'comments' => $b.'index.php/panel/admin/comments'
	);
	
	return $paths;
}
