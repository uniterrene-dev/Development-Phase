<?php

/*
* The template for single video gallery
*/

get_header(); ?>



<section class="photos_heaer_sec">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="gallery_heading_img"> 
      <?php
        $img_url = wp_get_attachment_url( get_post_thumbnail_id(170) );
      ?>
      <img src="<?php echo $img_url; ?>">
    </div>
    <div class="inner_page_heading_text">
      <?php 
        $my_id = 170;
        $page_id = get_post($my_id);
        echo $content = $page_id->post_content;
      ?>       
    </div>
    
  
  <div class="container">
    <div class="gallery-title-heading">
      <h4> <span>VIDEOS</span></h4>
    </div>
    <div class="video_detail_container clearfix">
      <div class="left-content2">
        <div class="thumbnail02">
          <?php the_excerpt(); ?>
        </div>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
      <div class="right-content2">
        <h3 class="widget-title">Recommended For You</h3>
        <ul class="video_icon_rec_list">
        <?php
              $videos_args = array( 
                'post_type' => 'video_gallery', 
                'posts_per_page' => -1, 
                'order' => 'ASC', 
                'orderby' => 'date',
                'tax_query' => array(
                  array(
                    'taxonomy' => 'video_category',
                    'field' => 'slug',
                    'terms' => 'recomended-videos'
                  )
                ),
              );

                      $videos = get_posts( $videos_args ); 

                      //print_r($videos1);

                      foreach ( $videos as $video ) {              
            ?>
          <li>
            <?php
              $embedCode = $video->post_excerpt;
              
              preg_match('/src="([^"]+)"/', $embedCode, $match);

              // Extract video url from embed code
              $videoURL = $match[1];
              $urlArr = explode("/",$videoURL);
              $urlArrNum = count($urlArr);

              // YouTube video ID
              $youtubeVideoId = $urlArr[$urlArrNum - 1];

              // Generate youtube thumbnail url
              $thumbURL = 'http://img.youtube.com/vi/'.$youtubeVideoId.'/3.jpg';
            ?>
            <a href="<?php echo $video->post_name; ?>"><img src="<?php echo $thumbURL; ?>" /> <span><?php echo $video->post_title; ?></span></a></li>
          <?php 
                      }
              wp_reset_postdata();
            ?>
         <!--  <li><img src="<?php echo get_template_directory_uri(); ?>/images/video_icon1.png"/> <span><a href="#">Lorem Ipsum Dolor Sit</a></span> </li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/video_icon1.png"/> <span><a href="#">Lorem Ipsum Dolor Sit</a></span> </li> -->
        </ul>
      </div>
    </div>
  </div>
  <?php endwhile; endif; ?>
</section>



<?php get_footer(); ?>