<?php
/*
 * The template for displaying the header
 */
if (!session_id()) {
    session_start();
}
if($_REQUEST['go']=='home'){
  $_SESSION['go'] = 'home';
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<title><?php bloginfo('name'); ?> <?php //wp_title(''); ?></title>
	<?php wp_head(); ?>
	<?php global $kamentra_options; ?>
</head>

<body <?php //body_class(); ?> <?php if($_SESSION['go']!='home'){?> class="uni"<?php }?>>
<?php
if($_SESSION['go']!='home'){?>

<script>
   window.setTimeout(function(){
    var urlgo = window.location.href+'?go=home';
    window.location.replace(urlgo);   
  },3000);
</script>

<!--intro page for kamentra-->
<div class="intropage">
  <div class="intropage_inner">
    <div class="intropage_inner_wrapper">
      <div class="intro_logo"> 
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if(!empty($kamentra_options['logo'])) { ?> <img src="<?php echo $kamentra_options['logo']['url']; ?>"> <?php } ?></a>
      </div>
    </div>
    <div class="popupfoot"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>?go=home" class="intro_button">ENTER THE SITE </a> </div>
  </div>
</div>
<!--intro page for kamentra-->
<?php }?>
<div class="wholepage_overlay"><!--overlay starts-->
<!--header start-->
<header id="header">
  <section id="top-header">
    <div class="container">
      <div class="top-header-right">
        <div class="top-header-social-icon">
          <ul class="socila_icon">
            <li>
              <div class="styled-select lan_arrow">
                <select>
                  <option value="English"><img src="<?php echo get_bloginfo('template_url'); ?>/images/flag_icon.png"/>English</option>
                  <option value="other">other</option>
                </select>
              </div>
            </li>
            <?php if(!empty($kamentra_options['fb-acc'])){ ?>
            	<li class="facebook_background nav_social"><a href="<?php echo $kamentra_options['fb-acc']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <?php } ?>
            <?php if(!empty($kamentra_options['google-acc'])){ ?>
            	<li class="google-plus_background nav_social"><a href="<?php echo $kamentra_options['google-acc']; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <?php } ?>
            <?php if(!empty($kamentra_options['twitter-acc'])){ ?>
            	<li class="twitter_background nav_social"><a href="<?php echo $kamentra_options['twitter-acc']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <?php } ?>
           <?php if(!empty($kamentra_options['pin-acc'])){ ?>
            	<li class="pinterest_background nav_social"><a href="<?php echo $kamentra_options['pin-acc']; ?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <?php } ?>
            <?php if(!empty($kamentra_options['link-acc'])){ ?>
            	<li class="linkedin_background nav_social"><a href="<?php echo $kamentra_options['link-acc']; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--Navigation start-->
  <nav class="clearfix">
    <div class="nav_right">
      <div class="navigation">
        <div id="flat-mega-menu" class="color_1">
          <label for="mobile-button"> <i class="fa fa-bars"></i> </label>
          <input id="mobile-button" type="checkbox">
          <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'collapse', 'theme_location' => 'header-menu' )); ?>
        </div>
      </div>
    </div>
    <div class="logo"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php if(!empty($kamentra_options['logo'])) { ?> <img src="<?php echo $kamentra_options['logo']['url']; ?>"> <?php } ?></a> </div>
  </nav>  
  <!--Navigation End--> 
</header>
<!--header end--> 

<!--Banner start-->
<div id="banner" class="slider-container clearfix">
  <div class="slider" id="slider">

    <?php 
      $args = array( 'post_type' => 'home_banner', 'posts_per_page' => -1, 'order' => 'ASC' );
      $the_query = new WP_Query( $args ); 
    ?>

  <?php if ( $the_query->have_posts() ) { ?>
  <?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>
    <div class="slide"> 
      <?php
        if ( has_post_thumbnail() ) { 
        the_post_thumbnail( 'full' );
      }
      else { ?>
        <?php _e( 'Sorry, no banner content found' ); ?>
      <?php }
      ?>
      <span class="caption">
          <div class="banner_heading">
            <h1><?php the_title(); ?></h1>
          </div>
          <?php the_content(); ?>
          <?php 
            $btn_text = get_post_meta( get_the_ID(), 'button_details_button_text', true );
            $btn_link = get_post_meta( get_the_ID(), 'button_details_button_link', true );

            if(!empty($btn_text)) {
          ?>
            <a href="<?php echo $btn_link; ?>" class="btn_bor"><?php echo $btn_text; ?></a>
          <?php } ?>
        </span> 
    </div>
    <?php } wp_reset_postdata(); ?>
  <?php } ?>

  </div>
  <a href="" class="switch" id="prev"><span><i class="fa fa-angle-left" aria-hidden="true"></i> </span></a> <a href="" class="switch" id="next"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> 
</div>
<!--Banner end--> 