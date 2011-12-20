<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php echo base_url(); ?>js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
  <header>
	<article>
		<section>
			<div class="logo">
				<h1 class="main-type">Road Store</h1>
			</div>
			<nav class="main-menu">
				<ul>
					<li>
						<a href="<?php echo $menu['home']; ?>">Inicio</a>
					</li>
					<li>
						<a href="<?php echo $menu['products']; ?>">Produtos</a>
					</li>
					<li>
						<a href="<?php echo $menu['about']; ?>">Sobre</a>
					</li>
					<li>
						<a href="<?php echo $menu['locale']; ?>">Localização</a>
					</li>
					<li>
						<a href="<?php echo $menu['contact']; ?>">Contato</a>
					</li>
				</ul>
			</nav>
		</section>
	</article>
	<hr />
  </header>
