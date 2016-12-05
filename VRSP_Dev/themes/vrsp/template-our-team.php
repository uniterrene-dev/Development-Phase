<?php
/*
* Template Name: Our Team Template
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
    <div class="slider-container team_page_container">
      <div class="heading-text heading-texts">
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
        <h3><img src="<?php echo get_bloginfo('template_url') ?>/images/business-man-icon.png"> <span><?php echo $arrre; ?></h3>
      </div>
      <div id="team">
        <?php 
            $args = array( 'post_type' => 'our_partners', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date', );
            $teams = new WP_Query( $args ); 

            while ($teams -> have_posts()) : $teams -> the_post();
        ?>
        <div class="row clearfix">
          <div class="pic">
            <div class="pic_area"> 
                <?php
                    if ( has_post_thumbnail() ) { 
                        the_post_thumbnail( 'full' );
                    } 
                    else { 
                        _e( 'Sorry, no image found' ); 
                    } 
                ?>
            </div>
            <h5><?php the_title(); ?></h5>
          </div>
          <div class="content">
            <?php the_content(); ?>
          </div>
        </div>
        <?php endwhile; wp_reset_query(); ?>
        
        <div class="employee_wrapper">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>