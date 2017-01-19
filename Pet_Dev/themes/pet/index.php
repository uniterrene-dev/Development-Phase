<?php

/*

* The template for index page of blog

*/
get_header(); 

global $pet_options;
?>

	<section id="bottom_nav">
        <div class="container">
               <div class="bottom">
                <div class="">
                    <ul class="pet-blog">
                        <li><a href="<?php echo site_url(); ?>/" class="active_state"><i class="fa fa-clock-o"></i>Latest Posts</a></li>
                        <li><a href="<?php echo site_url(); ?>/category/trending/"><i class="fa fa-bolt"></i>Trending</a></li>
                        <li><a href="<?php echo site_url(); ?>/category/editors-choice/"><i class="fa fa-star"></i>Editors choice</a></li>
                    </ul> 
                </div>
               </div>
        </div>
    </section>
   
    <section id="banner">
        <div class="container banner_blog blog_image">
            <div class="baner_text">
                <h3>Celebrate Your Beloved Pet's</h3>
                <h2>Life with The Ultimate Memorial Tribute</h2>
            </div>
        </div>
    </section>

	<section id="top-blog-section">
    
        <div class="container clearfix">
          <div class="inner-main-container">
              <div class="blogg clearfix">
              <div class="left-top-blog">

                <?php
                    if(have_posts()){
                        while (have_posts()) { the_post(); ?>

                 <div class="blog-top-main-box clearfix">
                      <div class="main-blog-image">
                          <?php 
                            if(has_post_thumbnail()){
                                the_post_thumbnail();
                            }
                          ?>
                          <div class="blog-overlay">
                             <a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
                          </div>
                      </div>
                      <div class="main-blog-text">
                         <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                         <?php echo excerpt(25); ?>
                      </div>
                 </div>            
                <?php }
                    }
                ?>

                 <div class="all-post clearfix">
                    <div class="all-post-left">
                        <div class="all-post-box clearfix">
                             <div class="all-post-box-left"><img src="<?php echo get_template_directory_uri(); ?>/images/all-blog.jpg" alt="#"></div>
                             <div class="all-post-box-right">
                                <h6><a href="#">Create a beautiful memorial for friend or family</a></h6>
                             </div>
                        </div>
                        <div class="all-post-box clearfix">
                             <div class="all-post-box-left"><img src="<?php echo get_template_directory_uri(); ?>/images/all-blog1.jpg" alt="#"></div>
                             <div class="all-post-box-right">
                               <h6><a href="#">A privacy function so that your memorial can be for your eyes only</a></h6> 
                             </div>
                        </div>
                    </div>

                    <div class="all-post-right">
                        <div class="all-post-box clearfix">
                             <div class="all-post-box-left"><img src="<?php echo get_template_directory_uri(); ?>/images/all-blog2.jpg" alt="#"></div>
                             <div class="all-post-box-right">
                               <h6><a href="#">Great gift for friend, family, grandchild, and even you</a></h6>
                             </div>
                        </div>
                        <div class="all-post-box clearfix">
                             <div class="all-post-box-left"><img src="<?php echo get_template_directory_uri(); ?>/images/all-blog3.jpg" alt="#"></div>
                             <div class="all-post-box-right">
                               <h6><a href="#">It’s an exquiste and thoughtful way to say I lov you</a></h6>
                             </div>
                        </div>
                    </div>
                 </div>
            </div>
              
              <div class="right-top-blog">
                  <div class="right-social-blog">
                    <?php echo do_shortcode('[aps-counter]'); ?>
                  </div>
                  <div class="right-latest-blog"> 
                      <div class="right-blog-headre">
                         <a class="more_btn">more</a>
                      </div>

                      <?php
                        $more_args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'date', );

                        $recent_query = new WP_Query( $more_args ); 

                        while ($recent_query -> have_posts()) : $recent_query -> the_post();

           
                      ?>
                      <div class="right-new-post-box">
                          <?php
                              if(has_post_thumbnail()){
                                the_post_thumbnail('sb-custom-size-1');
                              }
                          ?>
                         <div class="right-new-post-box-text">
                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <ul class="clearfix">
                               <li><a><i class="fa fa-clock-o"></i><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' ago'; ?></a></li>
                               <li><a><i class="fa fa-share-alt"></i> 10 Shares<?php //echo do_shortcode('[pssc_all]'); ?></a></li>
                            </ul>
                         </div>
                      </div>
                      <?php endwhile; ?>                    
                      <?php wp_reset_query(); ?>

                  </div>
                  <div class="whats-new"> 
                     <div class="right-blog-headre">
                         <a class="more_btn">What’s New</a>
                      </div>

                      <?php
                        $new_args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'order' => 'DESC', 'orderby' => 'date', );
                        $new_query = new WP_Query( $new_args ); 

                        while ($new_query -> have_posts()) : $new_query -> the_post();           
                      ?>
                     <div class="what-new-box clearfix">
                         <div class="what-new-box-left">
                            <?php
                                if(has_post_thumbnail()){
                                  the_post_thumbnail('sb-custom-size-2');
                                }
                            ?>
                          </div>
                         <div class="what-new-box-right">
                            <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                         </div>
                     </div>
                      <?php endwhile; ?>                    
                      <?php wp_reset_query(); ?>
                  </div>
          </div>
             
           </div>
          </div>
              
        </div>
        
    </section>

    <section id="boutique">
      <div class="container">
         <div class="inner-main-container clearfix">
               <div class="boutique-left">
                  <?php echo $pet_options['binkys-pet-title']; ?>
                  <div class="boutique-btn desktop">
                      <?php if( !empty($pet_options['binkys-in-memorial-link']) ){ ?>
                      <a href="<?php echo site_url('/').$pet_options['binkys-in-memorial-link']; ?>" class="more_btn"><?php echo $pet_options['binkys-in-memorial-btn-text']; ?></a>
                      <?php } ?>
                      <?php if( !empty($pet_options['binkys-pampered-pets-link']) ){ ?>
                      <a href="<?php echo site_url('/').$pet_options['binkys-pampered-pets-link']; ?>" class="more_btn"><?php echo $pet_options['binkys-pampered-pets-btn-text']; ?></a>
                      <?php } ?>
                      <?php if( !empty($pet_options['binkys-senior-pet-care-link']) ){ ?>
                      <a href="<?php echo site_url('/').$pet_options['binkys-senior-pet-care-link']; ?>" class="more_btn"><?php echo $pet_options['binkys-senior-pet-care-btn-text']; ?></a>
                      <?php } ?>
                  </div>
               </div>
               <div class="boutique-right">
                  <div class="boutique-image-1">
                    <img src="<?php echo $pet_options['binkys-pet-third-image']['url']; ?>">
                  </div>
                  <div class="boutique-image-2">
                    <img src="<?php echo $pet_options['binkys-pet-second-image']['url']; ?>">
                  </div>                  
                  <div class="boutique-image-3">                    
                    <img src="<?php echo $pet_options['binkys-pet-first-image']['url']; ?>">
                  </div>
               </div>
               <div class="boutique-btn mobile">
                  <?php if( !empty($pet_options['binkys-in-memorial-link']) ){ ?>
                  <a href="<?php echo site_url('/').$pet_options['binkys-in-memorial-link']; ?>" class="more_btn"><?php echo $pet_options['binkys-in-memorial-btn-text']; ?></a>
                  <?php } ?>
                  <?php if( !empty($pet_options['binkys-pampered-pets-link']) ){ ?>
                  <a href="<?php echo site_url('/').$pet_options['binkys-pampered-pets-link']; ?>" class="more_btn"><?php echo $pet_options['binkys-pampered-pets-btn-text']; ?></a>
                  <?php } ?>
                  <?php if( !empty($pet_options['binkys-senior-pet-care-link']) ){ ?>
                  <a href="<?php echo site_url('/').$pet_options['binkys-senior-pet-care-link']; ?>" class="more_btn"><?php echo $pet_options['binkys-senior-pet-care-btn-text']; ?></a>
                  <?php } ?>
              </div>
         </div>
      </div>
    </section>

    <section id="memorial">
      <div class="container">
         
         <?php echo $pet_options['memoriam-pet-content']; ?>

        <?php 
          //$img_first = $pet_options['memoriam-pet-fifth-image']['id'];
          //$img_first_src = wp_get_attachment_image_src( $img_first, 'sb-custom-size-3');
          //print_r($pet_options['memoriam-pet-first-image']); 
          //print_r($img_first_src); 
        ?>
 
        <div class="memorial-image">
           <ul class="clearfix gallery">
               <li><a href="<?php echo $pet_options['memoriam-pet-first-image']['url']; ?>"><img src="<?php echo $pet_options['memoriam-pet-first-image']['url']; ?>" alt="#"></a>
                   <div class="pin-top-left"></div>
                   <div class="pin-top-right"></div>
                   <div class="pin-bottom-right"></div>
                   <div class="pin-bottom-left"></div>
               </li>
               <li><a href="<?php echo $pet_options['memoriam-pet-second-image']['url']; ?>"><img src="<?php echo $pet_options['memoriam-pet-second-image']['url']; ?>" alt="#"></a>
                  <div class="pin-top-left"></div>
                   <div class="pin-top-right"></div>
                   <div class="pin-bottom-right"></div>
                   <div class="pin-bottom-left"></div>
               </li>
               <li><a href="<?php echo $pet_options['memoriam-pet-third-image']['url']; ?>"><img src="<?php echo $pet_options['memoriam-pet-third-image']['url']; ?>" alt="#"></a>
                  <div class="pin-top-left"></div>
                   <div class="pin-top-right"></div>
                   <div class="pin-bottom-right"></div>
                   <div class="pin-bottom-left"></div>
               </li>
               <li><a href="<?php echo $pet_options['memoriam-pet-fourth-image']['url']; ?>"><img src="<?php echo $pet_options['memoriam-pet-fourth-image']['url']; ?>" alt="#"></a>
                  <div class="pin-top-left"></div>
                   <div class="pin-top-right"></div>
                   <div class="pin-bottom-right"></div>
                   <div class="pin-bottom-left"></div>
               </li>
               <li><a href="<?php echo $pet_options['memoriam-pet-fifth-image']['url']; ?>"><img src="<?php echo $pet_options['memoriam-pet-fifth-image']['url']; ?>" alt="#"></a>
                  <div class="pin-top-left"></div>
                   <div class="pin-top-right"></div>
                   <div class="pin-bottom-right"></div>
                   <div class="pin-bottom-left"></div>
               </li>
           </ul>
        </div>
      </div>
    </section>

<?php get_footer(); ?>