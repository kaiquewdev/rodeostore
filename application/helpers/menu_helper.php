<?php //Menu helper

function make_menu()
{
	//Make a default menu
	$b = base_url();
	$paths = array(
		'home' => make_route(),
		'products' => make_route('products'),
		'locale' => make_route('locale'),
		'about' => make_route('about'),
		'contact' => make_route('contact')
	);
	
	return $paths;
}

function make_admin_menu()
{
	//Menu for admin area
	$paths = array(
		'panel_home' => make_route('panel/admin'),
		'products' => make_route('panel/admin/products'),
		'categorys' => make_route('panel/admin/categorys'),
		'demands' => make_route('panel/admin/demands'),
		'comments' => make_route('panel/admin/comments')
	);
	
	return $paths;
}

function make_route($path_url=false) 
{
	//Make a route path to the complete url
	if($path_url){
		return base_url().'index.php/'.$path_url;	
	} elseif(!$path_url) {
		return base_url();
	}	
}
