<!doctype html>
<html>
<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" />
		
		<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
		
		<style>
		.button1{
			display:none
			}
		</style>

		<?php wp_head(); ?>
		

	</head>

<body <?php body_class(); ?>>
   <header id="band">
      <div class='navbar-toggle' title='Menu'>
		<a href="#" class="menu">Menu</a>
		<div class='bar1'></div>
		<div class='bar2'></div>
		<div class='bar3'></div>
	</div>
	<nav class="nav nav-hide">
		<?php html5blank_nav(); ?>
	</nav>
      
	  
	  <section id="logo_area inner_logo">
         <div class="container">
            <a href="<?php bloginfo('url');?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/img/inner_logo.png" alt="#"></a>
         </div>
        
      </section>
      <div class="band_banner_box">
         <h1><?php echo get_the_title(); ?></h1>
      </div>
   </header>
   
