<?php
/**
 * The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package WordPress
* @subpackage Twenty_Seventeen
* @since 1.0
* @version 1.0
*/

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
<title>Lavish</title>
<link rel="icon" 
      type="image/png" 
      href="<?php echo esc_url( get_template_directory_uri() )?>/images/FAVICON.png">
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() )?>/css/custom.css">
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() )?>/css/responsive.css">
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() )?>/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/normalize.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/styles.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/jquery.bxslider.css" >
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/jquery_dropdown.css">

<?php wp_head(); ?>
</head>

<body>
<header>
<div class="top-nav">
    <div class="container">
        <div class="top-nav">
			
		
			
            <ul>
                <li><span> <i class="fa fa-unlock-alt" aria-hidden="true"></i> </span><a href="#">MEMBERS LOUNGE</a></li>

<?php if ( has_nav_menu( 'top' ) ) : ?>

<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => '',
'menu' => 'top', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li>%3$s</li>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => ''
	) ); ?>
        

<?php endif; ?>	
            </ul>
        </div>
    </div>
</div>

<div class="second-nav">
    <div class="container clearfix">
       <div class="header-logo"> <a href="<?php echo esc_url(home_url());?>"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/header-logo.png" alt="logo" title="logo image"></a>
       </div>
        <div class="main-nav">
            <ul>
                <li><a href="#" id="show-lady_menu">ESCORT LADIES</a></li>

<?php if ( has_nav_menu( 'top' ) ) : ?>

<?php wp_nav_menu( array(
		'theme_location' => 'top-big',
		'menu_id'        => '',
'menu' => 'top', 'container' => '', 'container_class' => '', 'container_id' => '', 'menu_class' => '', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li>%3$s</li>', 'item_spacing' => 'preserve',
    'depth' => 0, 'walker' => ''
	) ); ?>
        

<?php endif; ?>	
            </ul>
        </div>
    </div>
</div>

</header>

<!---Slider Section --->

<div class="index-slide">
    <ul class="target-slider"><!--ul start-->
<?php
$args = array(
	'numberposts' => 10,
	'offset' => 0,
	'category' => 0,
	'orderby' => 'rand',
	'order' => 'ASC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'homepage_banner_post',
	'post_status' => 'draft, publish, future, pending, private',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
$j=1;
$input = array();
foreach($recent_posts as $recent_posts)
{ 
	 //echo $recent_posts['ID'];
	 
	$page_name = get_post_meta($recent_posts['ID'], "select_page_page_names", true); 
	
	if($page_name == "Home")
	{
	 
	 $area_code="";
	 
	  $link_or_embed = get_post_meta($recent_posts['ID'], "video_link_link_or_embeb", true); 
	  
	  if($link_or_embed=="Link" || $link_or_embed=="Embed")
	  {
		  
			
		  
		 $area_code .='<li>';
		 $area_code .=' <video preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" id="myVideo"><source src="';
		 $area_code .=esc_url( get_template_directory_uri() ).'/video/movie.mp4"';
		 $area_code .='type="video/mp4"></li>';
	  }
	  else
	  {
		  
			if (has_post_thumbnail($recent_posts['ID'] ) ): 
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts['ID'] ), 'single-post-thumbnail' ); 
			//print_r($image[0]);
			$area_code .= '<li><a href="#"><img src="';
			$area_code .=  $image[0].'"';
			$area_code .=' alt="slider1"></a>';
			$area_code .='</li>';
			
			
			endif;
		  
		  
		  
	  
	  
	  }
	  echo $area_code;
	  
	 }
	 }	?>
	 </ul><!--End ul-->
        
        <div class="slide-content">
          <div class="big-button-slide">
            <a href="#">Meet Our Ladies</a>
          </div>
        </div>
</div><!--End Div-->





