<?php
/**
 * Template Name: Home Page
 */
get_header();
?>

<section id="about-box" class="about-div">
 <div class="container clearfix">
  <div class="home-about-box">
   <div class="home-about-col-1">
     <h3>  <?php echo get_option('webq_es_srv');?> </h3>
     <p><?php echo get_option('webq_es_srv_des');?></p>
   </div>
   <div class="home-about-col-2">
     <h3>  <?php echo get_option('webq_es_srv2');?> </h3>
     <p><?php echo get_option('webq_es_srv_des2');?></p>
   </div>
   <div class="home-about-col-3">
     <h3>  <?php echo get_option('webq_es_srv3');?> </h3>
     <p><?php echo get_option('webq_es_srv_des3');?></p>
   </div>
 </div>
  <div class="about-box-divider"></div>
</section>
<section id="home-model" class="home-model-div">
 <div class="container">
   <div class="home-model-box clearfix">
    <div class="home-model-box-left">
      <div class="home-model-box-img">
       <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-home-1.jpg" /></a>
      </div>
      <div class="home-model-box-content">
      <h3> <a href="#">Yvonno</a> </h3>
      <h4> Sexy Blonde </h4>
      <div class="home-model-box-details">
        <a href="#"> View this model <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></a>
      </div> 
    </div>
    </div>
    <div class="home-model-box-right">
      <div class="home-model-box-img">
       <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-home-2.jpg" / alt=""></a>
      </div>
      <div class="home-model-box-content">
      <h3> <a href="#">Angelina</a> </h3>
      <h4> Cute Blonde </h4>
      <div class="home-model-box-details">
        <a href="#"> View this model <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></a>
      </div> 
    </div>
    </div>
    
   </div>
 </div>
</section>
<section id="model-view" class="model-view-div">
 <div class="container">
  <div class="model-view-box">
   <ul>
    <li>
     <div class="model-view-img">
      <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-view-1.jpg" /></a>
     </div>
     <div class="model-view-content">
      <h3> <a href="#">Kristina</a> </h3>
      <h4> Sweet & Sexy </h4>
      <div class="home-model-box-details">
        <a href="#"> View this model <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></a>
      </div>
     </div>
    </li>
    <li>
     <div class="model-view-img">
      <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-view-2.jpg" / alt=""></a>
     </div>
     <div class="model-view-content">
      <h3> <a href="#">Marie</a> </h3>
      <h4> Smart and Sexy model </h4>
      <div class="home-model-box-details">
        <a href="#"> View this model <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></a>
      </div>
     </div>
    </li>
    <li>
     <div class="model-view-img">
      <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-view-3.jpg" / alt=""></a>
     </div>
     <div class="model-view-content">
      <h3> <a href="#">Jade</a> </h3>
      <h4> Busty & Classy </h4>
      <div class="home-model-box-details">
        <a href="#"> View this model <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></a>
      </div>
     </div>
    </li>
   </ul>
  </div>
 </div>
</section>

<section id="city-section" class="city-section-div">
    <div class="container">
       <div class="city-details clearfix">
         <div class="city-details-left">
           <h3> <?php echo get_option('webq_dis_srv');?> </h3>
           <p> <?php echo get_option('webq_dis_srv_des');?> </p>
         </div>
         <div class="city-details-right">
           <h3> <?php echo get_option('webq_dis_srv2');?> </h3>
           <p> <?php echo get_option('webq_dis_srv_des2');?> </p>
         </div>
       </div> 
        <div class="city-buttons">
                       <ul> 
						 
<?php 
						   $args = array('child_of' => '4');
$categories = get_categories( $args );
foreach($categories as $category) { 
   // print_r($category);
    
    echo ' <li><a href="' . get_category_link( $category->term_id ) . '">'. $category->name.'</a></li>';
} ?>


                       </ul> 
                    </div>
        <div class="city-more-btn-div">            
         <a class="city-more-btn" id="show-city-list" href="javascript:;">View All Lavish Mate Cities</a>
        </div> 
    </div>
</section> <!----- city name section -->

<section id="exclusive-models" class="exclusive-models-div">
  <div class="container">
    <div class="exclusive-models-box">
<!--
       <a href="#"> View All Exclusive Models </a>
-->
<?php echo get_option('webq_ex_models');?>
    </div>
  </div>
</section> <!----- Exclusive Models -->

<section id="latest-news-section" class="latest-news-div">
 <div class="container">
  <div class="latest-news-header">
    <div class="latest-news-heading"> <h3><span class="latest-head"><?php echo get_option('webq_lat_news');?></span></h3> </div>
    <div class="latest-news-sub-heading"><p> <?php echo get_option('webq_lat_news_sub_heading');?></p> </div>
  </div>
  <div class="latest-news-box clearfix">
<?php
$args = array(
	'numberposts' => 3,
	'offset' => 0,
	'category' => 28,
	'orderby' => 'rand',
	'order' => 'ASC',
	'include' => '',
	'exclude' => '',
	'meta_key' => '',
	'meta_value' =>'',
	'post_type' => 'post',
	'post_status' => 'draft, publish, future, pending, private',
	'suppress_filters' => true
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
$j=1;
foreach($recent_posts as $recent_posts)
{ 
	//print_r($recent_posts);

$class_name = "latest-news-col-".$j;	
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $recent_posts['ID'] ), 'single-post-thumbnail' ); 
$post_content = $recent_posts['post_content'];
$post_title = $recent_posts['post_title'];
$guid = $recent_posts['guid'];
?>

 
   <div class="<?php echo $class_name;?> latest-news">
     <div class="latest-news-img">
       <a href="#"><img src="<?php echo $image[0];?>" / alt=""></a>
     </div>
     <div class="latest-news-content">
       <h2><a href="<?php echo $guid;?>"> <?php echo $post_title; ?> </a></h2>
       <h4> <?php echo get_the_time('F j, Y', $recent_posts['ID']);?> </h4>
       <p> <?php echo $post_content; ?></p>
       <div class="read-btn">
        <a href="<?php echo $guid;?>"> Read article <span> <i class="fa fa-angle-right" aria-hidden="true"></i> </span></a>
       </div>
     </div>
   </div>
   <?php $j++; } ?>	 

  </div>
 </div>
</section> <!----- Latest News -->


<?php get_footer();?>
