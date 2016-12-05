<?php 
/*
* The template for displaying the front page
*/
get_header(); 

global $kettleton_options;
?>

<!--slider sec-->
<section class="sliderSec">
    <div class="overlay">
        <div class="contentArea">
            <div class="container clearfix">
                <div class="leftContent">
                    <div class="leftInner">
                        <?php echo $kettleton_options['banner_content']; ?>
                        <?php if(!empty( $kettleton_options['banner_button_link'] )){ ?>
                        <a href="<?php echo $kettleton_options['banner_button_link']; ?>" class="btn btn-discover"><?php echo $kettleton_options['banner_button_text']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end slider--> 

<!--about section-->
<section class="about">
    <div class="container clearfix">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="aboutLeft">
            <div class="abtLeftContent">
                <?php the_content(); ?>
            </div>
        </div>
    
        <!--left-->
        <div class="aboutright">
            <div class="aboutRightContent">
                <ul>
                    <li class="part1">
                        <div class="imgbox leftTop">
                            <?php
                                if ( has_post_thumbnail() ) { 
                                    the_post_thumbnail( 'full' );
                                } 
                                else { 
                                    _e( 'Sorry, no image found' ); 
                                }
                            ?>
                        </div>
                        <div class="imgbox leftBottom">
                            <?php
                                $image1 = get_field('second_featured_image');
                                if( !empty($image1) ): ?>
                                    <img src="<?php echo $image1['url']; ?>" />
                            <?php endif; ?>
                        </div>
                  </li>
                  <li class="part2">
                        <div class="imgBox full">
                            <?php
                                $image2 = get_field('third_featured_image');
                                if( !empty($image2) ): ?>
                                    <img src="<?php echo $image2['url']; ?>" />
                            <?php endif; ?>
                        </div>
                  </li>
                </ul>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>
<!--about section end--> 

<!--specility of out tea-->
<section class="sp_Head">
    <div class="overlay">
        <div class="content">
            <h2><?php the_field('speciality_section_title', 7); ?></h2>
            <?php echo sb_speciality_content_excerpt(); ?>
            <a href="<?php echo $kettleton_options['special-link']; ?>" class="btn btn_read_more">Learn More</a>
        </div>
    </div>
</section>
<!-- end specility of out tea--> 

<!-- 
<section class="blank_section">
  <div class="blank_sec_content">
    <div class="container">
      <div class="content"> 
      
        <div class="rows row1 clearfix">
          <div class="proImg">
            <div class="overlay">
              <div class="proOverContent">
                <h4><span>HERBAL</span> TEA</h4>
                <button class="btn  btn_read_more">SHOP NOW</button>
              </div>
            </div>
            <img src="<?php echo bloginfo('template_directory'); ?>/images/abs_sec1_prod1.jpg" alt=""> </div>
       
          <div class="proDes">
            <h3>Xin Yang Mao Jian
              indian Tea</h3>
            <p>Searching for a good present? Visit our Tea store! Here you will find lots of tea gifts you can choose...</p>
            <a href="javascript:void(0)">READ MORE</a> </div>
        </div>
       
        <div class="rows row2 clearfix">
          <div class="proImg">
            <div class="overlay">
              <div class="proOverContent">
                <h4><span>GREEN</span> TEA</h4>
                <button class="btn  btn_read_more">SHOP NOW</button>
              </div>
            </div>
            <img src="<?php echo bloginfo('template_directory'); ?>/images/abs_sec2_prod2.jpg" alt=""> </div>
          
          <div class="proDes">
            <h3>Make a pause and
              have a cup...</h3>
            <p>We have a wide range of fresh teas and the products to serve them! Our gourmet tea assortments will suit...</p>
            <a href="javascript:void(0)">READ MORE</a> </div>
        </div>

        <div class="rows row3 clearfix">
          <div class="proImg">
            <div class="overlay">
              <div class="proOverContent">
                <h4><span>BLACK</span> TEA</h4>
                <button class="btn  btn_read_more">SHOP NOW</button>
              </div>
            </div>
            <img src="<?php echo bloginfo('template_directory'); ?>/images/abs_sec3_prod3.jpg" alt=""> </div>
       
          <div class="proDes">
            <h3>Would you like a
              cup of Black tea?...</h3>
            <p>We have a wide range of fresh teas and the products to serve them! Our gourmet tea assortments will suit...</p>
            <a href="javascript:void(0)">READ MORE</a> </div>
        </div>
      
      </div>
    </div>
  </div>
</section>
 -->

 <!--recent added products-->
<section class="recentProducts">
  <div class="container">
    <h2>Recently added products</h2>
    <div class="productSlider clearfix">

      <ul id="flexiselDemo3">

              <?php
                $args = array(
                  'post_type' => 'product',
                  'stock' => 1,
                  'posts_per_page' => 4,
                  'orderby' =>'date',
                  'order' => 'DESC' );
                $recent_pro = new WP_Query( $args );
                while ( $recent_pro->have_posts() ) : $recent_pro->the_post(); global $product; 
              ?>

        <li>
          <div class="products">
            <div class="priductImg">
              <div class="productHover">
                <ul>
                  <li><a class="button yith-wcqv-button" href="#" data-product_id="<?php echo $recent_pro->post->ID; ?>"> <i class="fa fa-eye" aria-hidden="true"></i>
                    <p>Quick View</p>
                    </a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>?add-to-cart=<?php the_id(); ?>"><i class="fa fa-shopping-cart"></i><p>add to cart</p></a></li>
                </ul>
              </div>
              <!--hover--> 
              <?php if($product->is_on_sale()){ ?><a href="<?php the_permalink(); ?>"><span class="onsale">Sale</span></a><?php } ?>
              <?php if (has_post_thumbnail( $recent_pro->post->ID )) echo get_the_post_thumbnail($recent_pro->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" width="65px" height="115px" />'; ?>
              </div>
            <div class="productDes">
              <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
              <h5><?php echo $product->get_price_html(); ?></h5>
            </div>
          </div>
        </li>

        <?php endwhile; ?>
        <?php wp_reset_query(); ?>


      </ul>

    </div>
  </div>
</section>

<!--improve health-->
<section class="impv">
  <div class="overlay">
    <div class="content clearfix">
      <div class="container">
        <h2><?php the_field('improve_health_title'); ?></h2>
        <div class="rightimpv">
          <?php the_field('improve_health_video'); ?>
        </div>
        <div class="leftimpv">
          <?php the_field('improve_health_content'); ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!--
<section class="bestTeas">
  <div class="teasR">
    <div class="container">
      <div class="teasContent">
        <h2>our best teas</h2>
        <div class="teasSlider clearfix">
          <ul id="flexiselDemo4">
            <li>
              <div class="products">
                <div class="priductImg"> 
                  
                  <span class="tooltiptext">Our Special Green Tea</span> <img src="<?php echo bloginfo('template_directory'); ?>/images/teas_3.png" /> </div>
              </div>
            </li>
            <li>
              <div class="products">
                <div class="priductImg"> 
                 
                  <span class="tooltiptext">Our Special Green Tea</span> <img src="<?php echo bloginfo('template_directory'); ?>/images/teas_3.png" /> </div>
              </div>
            </li>
            <li>
              <div class="products">
                <div class="priductImg"> 
                 
                  <span class="tooltiptext">Our Special Green Tea</span> <img src="<?php echo bloginfo('template_directory'); ?>/images/teas_3.png" /> </div>
              </div>
            </li>
            <li>
              <div class="products">
                <div class="priductImg"> 
                  
                  <span class="tooltiptext">Our Special Green Tea</span> <img src="<?php echo bloginfo('template_directory'); ?>/images/teas_3.png" /> </div>
              </div>
            </li>
            <li>
              <div class="products">
                <div class="priductImg"> 
                   
                  <span class="tooltiptext">Our Special Green Tea</span> <img src="<?php echo bloginfo('template_directory'); ?>/images/teas_3.png" /> </div>
              </div>
            </li>
          </ul>
        </div>
        <button class="btn view_all">VIEW ALL</button>
      </div>
    </div>
  </div>
</section> 
-->

<?php get_footer(); ?>