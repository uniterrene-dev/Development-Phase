<?php
/*
* Template Name: Business Advisory Template
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

        <div class="audit_assurance col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <?php 
              $args = array( 'post_type' => 'business_posts', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date', );
              $audit = new WP_Query( $args ); 

              while ($audit -> have_posts()) : $audit -> the_post();
          ?>
          <div class="service_box">
            <div class="pic">
              <div class="pic_inner"> 
                <?php
                    if ( has_post_thumbnail() ) { 
                        the_post_thumbnail( 'full' );
                    }
                ?>
              </div>
            </div>
            <div class="content">
              <h4><?php the_title(); ?></h4>
              <?php the_content(); ?>
            </div>
          </div>
          <?php endwhile; wp_reset_query(); ?>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>