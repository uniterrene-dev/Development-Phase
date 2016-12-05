<?php
/*
* Template Name: Career Page Template
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
    <div class="heading-text heading-texts career">
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
      <center>
        <h3><span><?php echo $arrre; ?></h3>
      </center>
    </div>
    <div class="row">
      <div class="career_field">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>