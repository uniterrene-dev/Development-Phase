<?php 

/*

* The template for displaying the front page

*/

get_header(); 



global $procard_options;

?>



<!-- featured feed -->

<section class="feedSec">

    <div class="container">

        <div class="feedInner">

            <?php 

                //$featured_post = array('posts_per_page' => 1, 'cat' => 10);

                $args = array( 'category_name' => 'featured', 'posts_per_page' => 1, 'order' => 'DESC', 'orderby' => 'date', );

                $the_query = new WP_Query( $args ); 

                while ($the_query -> have_posts()) : $the_query -> the_post();

            ?>

            <div class="leftP">

                <?php

                    if ( has_post_thumbnail() ) { 

                    the_post_thumbnail( 'full' );

                  }

                  else { ?>

                    <?php _e( 'Sorry, no image found' ); ?>

                  <?php }

                  ?>

            </div>

            <div class="rightp">

                <h2><?php the_title(); ?></h2>

                <div class="socialItems">

                    <ul>

                        <!-- <li class="fb"><a href="#"><i class="fa fa-facebook"></i><span>1.7K</span></a></li>

                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span></span></a></li>

                        <li class="chat"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i><span>191</span></a></li> -->

                        <?php echo do_shortcode('[addtoany]'); ?>

                        <li class="post_details"><span class="date"><?php the_time(get_option('date_format')); ?> </span><span class="author">BY <?php the_author_posts_link(); ?> </span></li>

                    </ul>

                </div>

                <?php the_excerpt(); ?>

            </div>

            <?php endwhile; ?>                    

            <?php wp_reset_query(); ?> 

        </div>

    </div>

</section>

<!-- featured feed ends -->



<!--article section-->

<section class="article">

    <div class="container">

        <div class="topStyleings clearfix">

            <!-- <div class="leftStyle"></div> -->

            <div class="title-heading"><h4> <span>MORE ARTICLES</span></h4></div>

           <!--  <div class="rightStyle"></div> -->

        </div>



        <div class="articleContent clearfix">

        <?php

            $the_query = new WP_Query( 'posts_per_page=2' );

            while ($the_query -> have_posts()) : $the_query -> the_post();

        ?>

        <div class="content1 clearfix">

            <div class="articleRight">

                <div class="topRight">

                    <?php

                        if ( has_post_thumbnail() ) { 

                        the_post_thumbnail( 'full' );

                      }

                      else { ?>

                        <?php _e( 'Sorry, no image found' ); ?>

                      <?php }

                      ?>

                </div>

                <div class="bottomLeft">

                    <?php 

                        if( class_exists('Dynamic_Featured_Image') ) {

                            global $dynamic_featured_image;

                            $featured_images = $dynamic_featured_image->get_featured_images( );

                            //print_r($featured_images);

                            foreach($featured_images as $featured_image) {

                                $fullSizedImage = $dynamic_featured_image->get_image_url($featured_image['attachment_id'], 'full');

                               echo "<img src = '" . $fullSizedImage . "' />";

                         }  } ?>

                </div>

            </div>

            <div class="articleLeft clearfix">

                 <div class="rightp">

                    <h2><?php the_title(); ?></h2>

                    <div class="socialItems">

                        <ul>

                            <!-- <li class="fb"><a href="#"><i class="fa fa-facebook"></i><span>1.7K</span></a></li>

                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i><span></span></a></li>

                            <li class="chat"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i><span>191</span></a></li> -->
                            <?php echo do_shortcode('[addtoany]'); ?>

                            <li class="post_details"><span class="date"><?php the_time(get_option('date_format')); ?> </span><span class="author"> BY <?php the_author_posts_link(); ?> </span></li>

                        </ul>

                    </div>

                    <?php the_excerpt(); ?>

                </div>

            </div>                

        </div> <!-- content block -->

        <?php

            endwhile;

            wp_reset_postdata(); 

        ?>

        </div>



        <div class="viewMore">

            <div class="btnHold"><a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo $procard_options['blog_link']; ?>" class="shop_Now"><span> View More</span></a></div>

        </div>

    </div>

</section>

<!-- article end -->


<!-- booster -->
<section class="booster">

    <div class="container">

        <div class="topStyleings clearfix">

            <div class="leftStyle">

                <img src="<?php echo get_bloginfo('template_url') ?>/images/energy_top.png" alt="">

            </div>

            <div class="midd"><h4>Energy booster</h4></div>

            <div class="rightStyle">

                <img src="<?php echo get_bloginfo('template_url') ?>/images/energy_top.png" alt="">

            </div>

        </div>



        <div class="carousel clearfix">

            <ul id="flexiselDemo1">

                <?php 

                  $args = array( 'post_type' => 'product_slider', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date' );

                  $the_query = new WP_Query( $args ); 

                ?>



                <?php if ( $the_query->have_posts() ) { ?>

                <?php while ( $the_query->have_posts() ) { $the_query->the_post(); ?>

                <li>

                    <a href="<?php echo product_slider_link_get_meta( 'product_slider_link_product_link' ); ?>" target="_blank">

                    <div class="itemInner">

                        <?php

                            if ( has_post_thumbnail() ) { 

                            the_post_thumbnail( 'full' );

                          }

                          else { ?>

                            <?php _e( 'Sorry, no image found' ); ?>

                          <?php }

                          ?>

                        <p><?php the_title(); ?></p>

                    </div>

                    </a>

                </li>

                <?php } wp_reset_postdata(); ?>

                <?php } ?>
                                            

        </ul> 

        </div>

    </div>

</section>
<!-- booster -->


<!-- products -->
<section class="products-home">

    <div class="container">

         <div class="topStyleings clearfix">

            <!-- <div class="leftStyle"></div> -->

            <div class="title-heading"><h4> <span>FEATURED PRODUCTS</span></h4></div>

           <!--  <div class="rightStyle"></div> -->

        </div>



        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?> 
            <?php endwhile; endif; ?> 

    </div>

</section>
<!-- ends products -->


<?php get_footer(); ?>