<?php
/*
* Template Name: Useful Links Template
*/

get_header(); ?>

<section class="page_heading">
  <div class="page_heading_wrapper">
  	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    	<h2><?php the_title(); ?></h2>
    <?php endwhile; endif; ?>
  </div>
</section>

<section class="innerpage_content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="heading-text heading-texts inner-header responsive_heading">
          <?php 

          $spanvalue = page_title_field_get_meta( 'page_title' );

          $words = page_title_field_get_meta( 'page_title_no_of_words' );

          $words = $words-1;

        $arr = explode(' ',trim($spanvalue));

        $arrre = '';

        for($ds = 0; $ds <= count($arr); $ds++){

          $arrre .= $arr[$ds].' ';          

          if($words == $ds){ 

            $arrre .="</span>";

          }else{



          }

        }

        ?>

        <h3><span><?php echo $arrre; ?></h3>
        </div>
      </div>
      <div class="service_detail clearfix">
        <div class="audit_assurance col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <div class="useful-links-content">
            <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">

              <?php 
                $args = array( 'post_type' => 'useful_link', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date', );
                $usefuls = wp_get_recent_posts( $args, ARRAY_A );

                //print_r($usefuls);

                $i = 1;

                foreach ($usefuls as $useful) {

                  //echo "<pre>";

                 // print_r($useful);
                 
                //while ($usefuls -> have_posts()) : $usefuls -> the_post();
            ?>

              <div class="panel">
                <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"> <?php echo $useful['post_title']; ?> </a> </h4>
                </div>
                <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                  <div class="panel-body">
                    <?php echo $useful['post_content']; ?>
                  </div>
                </div>
              </div>
              <!-- end of panel -->

              <?php 
               $i++; 
              }              
               wp_reset_query(); ?>
              
            </div>
            <!-- end of #bs-collapse  --> 
            
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

            <ul class="service_list">

              <li class="service_list_heading">Our Service List</li>

            </ul>

            <?php wp_nav_menu( array( 'container' => 'ul', 'menu_class' => 'service_list', 'menu_id' => '', 'theme_location' => 'service-menu', 'link_before' => '<span>', 'link_after' => '</span>', )); ?>

          </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>