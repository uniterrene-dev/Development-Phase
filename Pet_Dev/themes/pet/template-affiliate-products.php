<?php
/*
* Template Name: Affiliate Products Template
*/

get_header(); 

global $pet_options;
?>

    <section id="bottom_nav">
        <div class="container">
               <div class="bottom">
                <div class="">
                    <ul>
                        <li><a href="<?php echo site_url('/').$pet_options['binkys-pampered-pets-link']; ?>" class="active_state"> Pampered Pets</a></li>
                        <li><a href="<?php echo site_url('/').$pet_options['binkys-senior-pet-care-link']; ?>"> Senior Pets Care</a></li>
                    </ul>
                </div>
               </div>
        </div>
    </section>
   
    <section id="banner">
        <div class="container banner banner2_bg">
            <div class="baner_text">
                <h1><?php echo $pet_options['cat_pampered']; ?></h1>
            </div>
        </div>
    </section>

    <section id="jwelry_products">
        <div class="container jwelry">
        
            <ul class="affiliate-product">
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
                <li>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/product.jpg">
                    <p>Product description goes here</p>
                </li>
            </ul>

        </div>
    </section>

<?php get_footer(); ?>