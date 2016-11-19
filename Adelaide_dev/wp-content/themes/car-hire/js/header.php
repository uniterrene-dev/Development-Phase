<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">    
<title>
<?php wp_title(''); ?>
<?php if(wp_title('', false)) { echo ' :'; } ?>
<?php bloginfo('name'); ?>
</title>
<?php /*?><link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon"><?php */?>
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">

<!--<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" />-->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/flSlide/css/style.css" />
<?php /*?><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/superslides.css" /><?php */?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/timepicki.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive.css" />



<!--<link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>-->
        

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="fixedChat">
  <h3><i class="fa fa-comments-o" aria-hidden="true"></i> CHAT WITH US</h3>
</div>

<!-- header -->
<header id="header" class="aa">
  <div class="container clearfix">
    <div class="logo"> <a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" ></a> </div>
    <div class="right-header">
      <div class="menu">
        <?php html5blank_nav(); ?>
      </div>
      <div class="menuForResponsive">
        <ul class="clearfix">
          <?php html5blank_nav(); ?>
        </ul>
      </div>
      <a href="#" class="chatLink">
      <div class="chat-icon">
        <div class="font-chat"> <i class="fa fa-comments-o" aria-hidden="true"></i> </div>
        <div class="chat-section">
          <h4>Chat with us</h4>
          <h5>24x7</h5>
        </div>
      </div>
      </a>
      <div class="responsiveMenu"> <img src="<?php echo get_template_directory_uri(); ?>/images/menu.png"> </div>
    </div>
  </div>
</header>


<section class="myBanner">
<?php
if ( is_front_page() ) {	
	
?>
<div class="popUpHold">
	<div class="popUp">
		<div class="popUpInner">
			<h3 class="qprice">YOUR Quotation Price</h3>
			<span class="name"></span>
			<span class="price"></span>
			<span class="time1"></span>
			<span class="distance"></span>
			<p class="buttonHolderTEXT">Click  Yes To Continue or No To Exit</p>
			<p class="buttonHolderTEXT">Incase of the bank transfer the total fare will be change as you don't have to pay the card charges. </p>
             
             <?php /*  <p class="book" style="display:none">
                 Click Book Now To Continue..
                 <br />Note: In case of invalid address you will not see the book now option...<br />
                    Please enter a valid address
                 </p>*/?>
                	<p class="terms" style="display:none" style="font-size:10px !important;"><input type="checkbox" name="vehicle" id="terms" value="Bike"> 
                	Cancellation policy<br>
                 1. A cancellation more than 24 hours prior to scheduled booking no charge
incurred
 2. A cancellation between 4 and 24 hours prior to scheduled booking 50%
of total booking charged
 3. A cancellation less than 2 hours prior to scheduled booking 100% to
total booking charged<br>
 
 Note: if the credit card holder is not travelling, the booking will be
 charged in full 48 hours prior to the scheduled transfer. Once the credit
card
 has been charged there will be no refund made</p>
                 <ul>
					<li style="display:inline-block"><a id="print" target="_blank"href="" class="Btns yes" style="background:#fff;padding:5px;;padding:5px;">Print</a></li>
                    <li style="display:inline-block"><a id="pdf" target="_blank" href="" class="Btns yes" style="background:#fff;padding:5px;;padding:5px;">Get as pdf</a></li>
               </ul>
              </p>
              
				<ul class="buttonHolderUl">
					<li><button id="btn_yes" onClick="hideDiv()" class="Btns yes">Yes</button></li>
                    <li><button id="btn_no" onClick="hideDiv_inni()"class="Btns no">No</button></li>
               </ul>
        	<div class="add_to_cart_div" style="display:none;"></div>
        </div>
	  </div>
</div>

<div class="wrapper">


 <div id="slide-window">
  
    <ol id="slides">
     <?php   

	   $args = array('post_type' => 'slider');	 

	   $loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();

	?>
    
      <li class="slide color-0 alive">
       <div class="image"> 
		<?php the_post_thumbnail('full'); ?>
          <div class="overlay"></div>
            <h1>
              <?php the_title(); ?>
            </h1>
            <h2>
              <?php the_excerpt(); ?>
            </h2>
          </div>
      </li>
      
     <!-- <li class="slide color-1"></li>
      
      <li class="slide color-2"></li>
      
      <li class="slide color-3"></li>
      
      <li class="slide color-4"></li>-->
      
      <?php endwhile;?>
    </ol>
   <div class="banner-contoral">
    <span class="nav fa fa-angle-left fa-3x" id="left"></span>
    <span class="nav fa fa-angle-right fa-3x" id="right"></span>
   </div> 
        
</div>
  
  
  
 
  <?php //the_post_thumbnail(); ?>
  <!--<div class="navigation">
    <div class="button" data-dir="prev"><img src="<?php echo get_template_directory_uri(); ?>/images/right_nav.png"></div>
    <div class="button" data-dir="next"><img src="<?php echo get_template_directory_uri(); ?>/images/left_nav.png"></div>
  </div>-->
</div>
<?php
    }else{?>

<div class="wrapper">
  <div class="slider">
     <img src="<?php echo get_template_directory_uri(); ?>/images/inner_banner.png" alt="#">
  </div>
</div>
<?php
	}
	?>
</section>
<script>
  $('#menu-item-50 a').bind('click',function(e){
      e.preventDefault();
      alert("aa");
    })

</script>
<!-- /header --> 
