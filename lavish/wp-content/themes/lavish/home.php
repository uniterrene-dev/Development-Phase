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
       <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-home-2.jpg" /></a>
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
      <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-view-2.jpg" /></a>
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
      <a href="#"><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-view-3.jpg" /></a>
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

<div id="city-section" class="city-section-div">
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
<!--
                        <li><a href="#">BOCA RATON</a></li>
                        <li><a href="#">MIAMI</a></li>
                        <li><a href="#">PALM BEACH</a></li>
                        <li><a href="#">BROWARD</a></li>
                        <li><a href="#">MANHATTAN </a></li>
                        <li><a href="#">LOS ANGELES</a></li>
                        <li><a href="#">CHICAGO</a></li>
                        <li><a href="#">SAN DIEGO</a></li>
                        <li><a href="#">MONTRÉAL</a></li>
                        <li><a href="#">DUBAI</a></li>
                        <li><a href="#">LONDON</a></li>
                        <li><a href="#">VANCOUVER</a></li>
                        <li><a href="#">PARIS</a></li>
                        <li><a href="#">ROME</a></li>
                        <li><a href="#">MONACO</a></li>
                        <li><a href="#">BERLIN</a></li>
                        <li><a href="#">SYDNEY</a></li>
                        <li><a href="#">DUSSELDORF</a></li>
                        <li><a href="#">COLOGNE</a></li>
                        <li><a href="#">FRANKFURT</a></li>
                        <li><a href="#">BREGENZ</a></li>
                        <li><a href="#">BASEL</a></li>
                        <li><a href="#">BARCELONA</a></li>
-->

                       </ul> 
                    </div>
        <div class="city-more-btn-div">            
         <a class="city-more-btn" id="show-city-list" href="javascript:;">View All Lavish Mate Cities</a>
        </div> 
    </div>
</div>

<div class="content-last">
    <div class="wrap-center mag">
        <h4>Our Magazine with interesting facts</h4>
                <div class="blog-box">
            <div class="blog-thumb">
                <a href="#">
                    <img width="1000" height="703" src="http://www.targetescorts.com/magazine/wp-content/uploads/chamonix-escort-service.jpg" class="attachment-medium size-medium wp-post-image" alt="Erotic winter vacation in Chamonix with VIP escort service" srcset="http://www.targetescorts.com/magazine/wp-content/uploads/chamonix-escort-service.jpg 1000w, http://www.targetescorts.com/magazine/wp-content/uploads/chamonix-escort-service-768x540.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" />                </a>
            </div>
            <h3>Sensual winter magic with VIP escort service Chamonix</h3>
            <p>Powerful. This is probably the first word that comes to your mind when you admire the highest mountain of the Alps together with your charming escort in...</p>
            <p><a class="red" href="#" target="_blank">Read More</a></p>
        </div>
                <div class="blog-box">
            <div class="blog-thumb">
                <a href="#" target="_blank">
                    <img width="1000" height="600" src="http://www.targetescorts.com/magazine/wp-content/uploads/vierschanzentournee-escort-service.jpg" class="attachment-medium size-medium wp-post-image" alt="Elite escort agency &amp; the Four-Hills-Tournament" srcset="http://www.targetescorts.com/magazine/wp-content/uploads/vierschanzentournee-escort-service.jpg 1000w, http://www.targetescorts.com/magazine/wp-content/uploads/vierschanzentournee-escort-service-768x461.jpg 768w" sizes="(max-width: 1000px) 100vw, 1000px" />                </a>
            </div>
            <h3>The Four-Hills-Tournament & our VIP escort agency</h3>
            <p>A perfect combination for gentlemen who appreciate both the ski jumping as well as the company of gorgeous and stylish escort ladies. Our high-class escort...</p>
            <p><a class="red" href="#" target="_blank">Read More</a></p>
        </div>
                <div class="blog-box">
            <div class="blog-thumb">
                <a href="#" target="_blank">
                    <img width="587" height="311" src="http://www.targetescorts.com/magazine/wp-content/uploads/xmas-service-2016.jpg" class="attachment-medium size-medium wp-post-image" alt="Target Escorts wishes you a festive season!" />                </a>
            </div>
            <h3>Merry Christmas & Happy New Year!</h3>
            <p>The Target Escorts team and all our lovely escort ladies wish you a (sensual) Christmas time! We hope you enjoy the good food, the time with friends and family,...</p>
            <p><a class="red" href="#" target="_blank">Read More</a></p>
        </div>
            </div>
</div>


<?php get_footer();?>
