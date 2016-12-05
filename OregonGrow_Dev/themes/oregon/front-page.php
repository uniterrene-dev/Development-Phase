<?php 
/*
* The template for displaying the front page
*/
get_header(); 
?>

<section id="introduction">
  <div class="container clearfix">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="f_left img_part">
      <?php 
                    if ( has_post_thumbnail() ) { 
                    the_post_thumbnail( 'full' );
                  }
                  else { ?>
      <?php _e( 'Sorry, no image found' ); ?>
      <?php }
                ?>
    </div>
    <div class="f_right content">
      <?php the_content(); ?>
    </div>
    <?php endwhile; endif; ?>
  </div>
</section>
<!-- introduction -->

<section id="tech_details">
  <div class="container">
    <h3 class="sec_head"> TECHNICAL DETAILS </h3>
    <div class="row clearfix">
      <div class="f_left tech_left">
        <h5>Inside View</h5>
        <div class="img_area">
          <?php
				$inside_view = new WP_Query( 'page_id=84' );
				while ($inside_view -> have_posts()) : $inside_view -> the_post();
			
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail( 'full' );
					}
					else { 
						_e( 'Sorry, no image found' ); 
					}					
   		?>
          <div class="popbox ins1">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-magnetic_lock'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins2">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-led_lighting'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins4">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-fresh_air_intake'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins6">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-bottom_drawer'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins5">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-waterproof_tray'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins7">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-radiant_heating'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins8">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-stainless_hardware'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins3">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-foam_insulation'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins9">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-gfi'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins10">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-european_hardware'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins11">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-control_panel'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins12">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-carbon_filter'); ?> </h4>
            </div>
          </div>
          <div class="popbox ins13">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4> <?php the_field('inside_view-exhaust_fan'); ?> </h4>
            </div>
          </div>
          <?php		

                                endwhile;
                                wp_reset_postdata();                                
                            ?>
        </div>
      </div>
      <div class="hor_bor"></div>
      <div class="f_right tech_right">
        <h5>Outside View</h5>
        <div class="img_area">
          <?php
                                $outside_view = new WP_Query( 'page_id=86' );
                                while ($outside_view -> have_posts()) : $outside_view -> the_post();
                            
                                    if ( has_post_thumbnail() ) { 
                                        the_post_thumbnail( 'full' );
                                    }
                                    else { 
                                        _e( 'Sorry, no image found' ); 
                                    }                                
                            ?>
          <div class="popbox crl1">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4>
                <?php the_field('outside_view-mortise-n-tenon'); ?>
              </h4>
            </div>
          </div>
          <div class="popbox crl2">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4>
                <?php the_field('outside_view-ornamental_handle'); ?>
              </h4>
            </div>
          </div>
          <div class="popbox crl3">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4>
                <?php the_field('outside_view-rugged'); ?>
              </h4>
            </div>
          </div>
          <div class="popbox crl4">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4>
                <?php the_field('outside_view-toekick'); ?>
              </h4>
            </div>
          </div>
          <div class="popbox crl5">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4>
                <?php the_field('outside_view-durable_lacquer'); ?>
              </h4>
            </div>
          </div>
          <div class="popbox crl6">
            <div class="circle"> <a href="javascript:void(0)">+</a> </div>
            <div class="area_highlight">
              <h4>
                <?php the_field('outside_view-select_cherry'); ?>
              </h4>
            </div>
          </div>
          <?php
                                endwhile;
                                wp_reset_postdata();
                            ?>
        </div>
      </div>
    </div>
    <a class="button clearfix" href="#models">See Models <img class="alignnone size-full wp-image-16" src="http://onlinedevserver.biz/dev/oregon-grow/wp-content/uploads/2016/11/down_arrow_circle.png" alt="down_arrow_circle" height="40" width="40"></a> </div>
</section>
<!-- Technical Details -->

<section id="product_highlight">
  <div class="container">
    <div class="row">
      <h3 class="sec_head">PRODUCTS HIGHLIGHTS</h3>
    </div>
    <div class="row">
      <ul>
        <?php 
                        $pro_high_args = array( 'post_type' => 'product_highlight', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date', );

                        $pro_high_query = new WP_Query( $pro_high_args ); 

                        while ($pro_high_query -> have_posts()) : $pro_high_query -> the_post();
                    ?>
        <li>
          <div class="icon_box">
            <?php
                                if ( has_post_thumbnail() ) { 
                                    the_post_thumbnail( 'full' );
                                }
                                else { 
                                    _e( 'Sorry, no image found' ); 
                                }
                            ?>
          </div>
          <h4>
            <?php the_title(); ?>
          </h4>
          <?php the_content(); ?>
        </li>
        <?php 
                        endwhile; 
                        wp_reset_query();
                    ?>
      </ul>
    </div>
  </div>
</section>
<!-- Product Highlight -->

<section id="technical_highlight">
  <div class="container">
    <div class="row">
      <h3 class="sec_head">Technical HIGHLIGHTS</h3>
    </div>
    <div class="row">
      <ul>
        <?php 
                        $tech_high_args = array( 'post_type' => 'technical_highlight', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date', );

                        $tech_high_query = new WP_Query( $tech_high_args ); 

                        while ($tech_high_query -> have_posts()) : $tech_high_query -> the_post();
                    ?>
        <li>
          <div class="icon_box">
            <?php
                                if ( has_post_thumbnail() ) { 
                                    the_post_thumbnail( 'full' );
                                }
                                else { 
                                    _e( 'Sorry, no image found' ); 
                                }
                            ?>
          </div>
          <h4>
            <?php the_title(); ?>
          </h4>
          <?php the_content(); ?>
        </li>
        <?php 
                        endwhile; 
                        wp_reset_query();
                    ?>
      </ul>
    </div>
  </div>
</section>
<!-- Technical Highlight -->

<section id="models">
  <div class="container">
    <div class="row">
      <h3 class="sec_head">MODELS</h3>
    </div>
    <div class="row">
      <?php //echo do_shortcode('[recent_products per_page="3" columns="3"]'); ?>
      <?php
                    $args = array( 'post_type' => 'product', 'stock' => 1, 'posts_per_page' => 4, 'orderby' =>'date','order' => 'ASC' );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
      <div class="product_box"> <a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <div class="product-wrapper">
          <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="65px" height="115px" />'; ?>
        </div>
        <h4>
          <?php the_title(); ?>
        </h4>
        </a>
        <div class="cart_wrapper clearfix">
          <div class="f_left rate"> <span class="price"><?php echo $product->get_price_html(); ?></span>
            <?php 
                                        $star_rating = $product->get_average_rating(); 
                                        $pro_review = $product->get_review_count(); 
                                    ?>
            <p>
              <?php 
                                        if($star_rating == 5){
                                            echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>';
                                        }
                                        elseif ($star_rating == 4) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>';
                                        }
                                        elseif ($star_rating == 3) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>';
                                        }
                                        elseif ($star_rating == 2) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>';
                                        }
                                        elseif ($star_rating == 1) {
                                            echo '<i class="fa fa-star" aria-hidden="true"></i>';
                                        }
                                        else {
                                            
                                        }
                                   ?>
              <em>
              <?php 
                                        if($pro_review == 5){
                                            echo '5 Review(s)';
                                        }
                                        elseif ($pro_review == 4) {
                                            echo '4 Review(s)';
                                        }
                                        elseif ($pro_review == 3) {
                                            echo '3 Review(s)';
                                        }
                                        elseif ($pro_review == 2) {
                                            echo '2 Review(s)';
                                        }
                                        elseif ($pro_review == 1) {
                                            echo '1 Review(s)';
                                        }
                                        else {
                                            echo 'No Review(s)';
                                        }
                                   ?>
              </em></p>
          </div>
          <div class="f_right cart">
            <?php //woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>?add-to-cart=<?php the_id(); ?>"><i class="fa fa-shopping-cart"></i></a> </div>
        </div>
      </div>
      <?php 
                    endwhile; 
                    wp_reset_query(); 
                ?>
    </div>
  </div>
</section>
<!-- Models -->

<section id="subscription">
  <div class="container">
    <h4>SUBSCRIBE FOR NEWS, TIPS AND PROMOTIONS</h4>
    <div class="form_area">
      <form action="#" method="post" class="clearfix">
        <label>
          <input type="email" name="mail" placeholder="Email">
        </label>
        <label>
          <input type="text" name="zip" placeholder="Zip">
        </label>
        <div class="clear"></div>
        <!-- <img src="images/captcha.png" alt="#"/> -->
        <button type="SUBSCRIBE">SUBSCRIBE</button>
      </form>
    </div>
  </div>
</section>
<!-- Subscription Form -->

<section id="faqs">
  <div class="container">
    <div class="row">
      <h3 class="sec_head"> FAQS </h3>
    </div>
    <div class="collapsible_panel">
      <ul>
        <?php 
                        $faq_args = array( 'post_type' => 'faq_post', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date', );

                        $faq_query = new WP_Query( $faq_args ); 

                        while ($faq_query -> have_posts()) : $faq_query -> the_post();
                    ?>
        <li> <a href="#"><i class="fa fa fa-thumbs-up"></i>
          <?php the_title(); ?>
          </a>
          <div class="content">
            <?php the_content(); ?>
          </div>
        </li>
        <?php 
                        endwhile; 
                        wp_reset_query();
                    ?>
      </ul>
    </div>
  </div>
</section>
<!-- FAQs -->

<?php get_footer(); ?>
