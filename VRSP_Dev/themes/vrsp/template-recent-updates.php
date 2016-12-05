<?php
/*
* Template Name: Recent Updates Page Template
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

    <div class="row clearfix" style="min-height: 250px;">
        <ul class="latest_update">
          <?php
            $args = array( 'post_type' => 'recent_update', 'posts_per_page' => 10, 'paged' => get_query_var('paged'), 'order' => 'DESC', 'orderby' => 'date', );
            $lists = new WP_Query( $args );
            while ($lists -> have_posts()) { $lists -> the_post();                
          ?>
          <li>
            <?php 

              $chk_opt = use_this_page_for_pdf_downloadable_link_only_get_meta( 'use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link' );

              if($chk_opt == "Yes"){
            ?>
            <a href="<?php echo use_this_page_for_pdf_downloadable_link_only_get_meta( 'use_this_page_for_pdf_downloadable_link_only_page_or_pdf_link' ); ?>" target="<?php echo use_this_page_for_pdf_downloadable_link_only_get_meta( 'use_this_page_for_pdf_downloadable_link_only_open_link_in' ); ?>">
              <?php the_title(); ?>
            </a>
            <?php } else { ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            <?php } ?>
          </li>

          <?php } 
          wp_reset_query(); ?>

          <div id="pagination" class="clearfix">
              <?php wp_pagenavi( array( 'query' => $lists ) ); ?>
          </div>
          
        </ul>
    </div>
  </div>
</section>

<?php get_footer(); ?>