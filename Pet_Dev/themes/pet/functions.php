<?php
	//Pet enqueue scripts
	function sb_pet_enqueue_script() {
		//styles	
		wp_enqueue_style( 'main',  get_template_directory_uri() . '/style.css' );		
		wp_enqueue_style( 'customs',  get_template_directory_uri() . '/css/custom.css' );
		wp_enqueue_style( 'img-gal-css',  get_template_directory_uri() . '/css/simplelightbox.min.css' );
		wp_enqueue_style( 'responsive',  get_template_directory_uri() . '/css/responsive.css' );
		wp_enqueue_style( 'fontawesome',  get_template_directory_uri() . '/css/font-awesome.min.css' );
		
		
		//js
		//wp_enqueue_script( 'site-js', get_template_directory_uri().'/js/jquery-1.11.0.js', true );
		wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', array('jquery'), true );
		wp_enqueue_script( 'light-js', get_template_directory_uri().'/js/simple-lightbox.js', array('jquery'), true );
		wp_enqueue_script( 'img-gallery', get_template_directory_uri().'/js/img-gallery.js', array('jquery'), true );		
		wp_enqueue_script( 'pet-js', get_template_directory_uri().'/js/pet.js', array('jquery'), true );		
	}
	add_action( 'wp_enqueue_scripts', 'sb_pet_enqueue_script' );

	//thumbnail support in Pet theme
	add_theme_support( 'post-thumbnails' );

	//new thumbnail size
	add_image_size( 'sb-custom-size-1', 273, 138 );
	add_image_size( 'sb-custom-size-2', 109, 54 );
	add_image_size( 'sb-custom-size-3', 318, 165 );

	//Pet excerpt support
	function sb_pet_excerpt_support_pages() {
		add_post_type_support( 'page', 'excerpt' );
	}
	add_action( 'init', 'sb_pet_excerpt_support_pages' );

	//Pet menus
	function sb_pet_register_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' ),
				'footer-menu' => __( 'Footer Menu' ),
				/*'blog-menu' => __( 'Blog Menu' ),
				'pet-menu' => __( 'Pet Menu' ),*/
				)
			);
	}
	add_action( 'init', 'sb_pet_register_menus' );

	//Pet dynamic sidebars
	function sb_pet_widgets() {
		register_sidebar( array(
			'name' => __( 'Pet Blog Sidebar', 'pet' ),
			'id' => 'pet-blog-sidebar',
			'description' => __( 'This widget displayed in right sidebar of blog pages', 'pet' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		/*register_sidebar( array(
			'name' => __( 'Woocommerce Sidebar', 'pet' ),
			'id' => 'woocommerce-sidebar',
			'description' => __( 'This widget displayed in right sidebar of blog pages', 'pet' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );*/
	}
	add_action( 'widgets_init', 'sb_pet_widgets' );

	//Pet theme options
	function sb_pet_redux_framework(){
		if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' ) ) {
			require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' );
		}
		if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/sample-config.php' ) ) {
			require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/barebones-config.php' );
		}
	}
	add_action('after_setup_theme', 'sb_pet_redux_framework');

	//Pet custom post type for banner section
	function sb_pet_memorial_posttype() {
		register_post_type( 'in_memorials',
			// CPT Options
			array(
				'labels' => array(
					'name' => __( 'In Memoriam' ),
					'singular_name' => __( 'In Memoriam' )
					),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'in_memorials'),
				'supports' => array( 'title', 'thumbnail', ),
			)
		);
	}
	//add_action( 'init', 'sb_pet_memorial_posttype' );
	
	//Pet customized exceprt word limit
	//use excerpt(25) or the_excerpt()
	function excerpt($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'...';
		} else {
			$excerpt = implode(" ",$excerpt);
		} 
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
		return $excerpt;
	}

	//Pet excerpt read more link
	function new_excerpt_more($more) {
		global $post;
		return '<a class="getDetails" href="'. get_permalink($post->ID) . '">' . 'Get Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' . '</a>';
	}
	//add_filter('excerpt_more', 'new_excerpt_more');
	
	//search highlighter for excerpt
	function search_excerpt_highlight() {
		$excerpt = get_the_excerpt();
		$keys = implode('|', explode(' ', get_search_query()));
		$excerpt = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);
		echo '<p>' . $excerpt . '</p>';
	}
		//search highlighter for title
	function search_title_highlight() {
		$title = get_the_title();
		$keys = implode('|', explode(' ', get_search_query()));
		$title = preg_replace('/(' . $keys .')/iu', '<strong class="search-highlight">\0</strong>', $title);
		echo $title;
	}
	
	//Pet woocommerce support
	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'woocommerce_support' );

	//show products
	//add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

	//shortcode with attributes
	function sb_category_based_products( $atts ){
		//buffer products
		ob_start(); 

		// define attributes and their defaults
	    extract( shortcode_atts( array (
	        'category' => null,
	    ), $atts ) );
	?>
		<div class="row">
		
            <?php
                global $product;	               

                $args = array( 'post_type' => 'product', 'posts_per_page' => 4,'product_cat' => $category, 'orderby' =>'date','order' => 'ASC' );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();             
            ?>

			<div class="box">
                <div class="products">
                    <div class="product_inner">
                        <div class="overlay">
                            <a href="<?php the_permalink(); ?>"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                        </div>
                        <a href="<?php the_permalink(); ?>">
                        <?php 
                            if ( has_post_thumbnail() ) { ?>
                            <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>">
                        <?php } ?>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <h3><a style="color: black; background: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <span class="price">
                   		<big>
                   			<a href="<?php the_permalink(); ?>" style="background: none; color:#f79568;">
                    		<?php
                    			$product = new WC_Product(get_the_ID());
  								echo wc_price($product->get_price());
                    		?>
	                    	</a>
                   		</big>
                    </span>
                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                </div>
            </div>

            <?php 
                endwhile; wp_reset_query();
            ?>

        </div>
	<?php	
		//return buffered products
		$sb_products = ob_get_clean();
    	return $sb_products;
	}
	add_shortcode('sb_woo_category_based_products', 'sb_category_based_products');


	//share count
	function getTotalShares($atts) {
		extract(shortcode_atts(array(
		    'cache' => '3600',
		    'url' => 0,
		    'f' => 0,
		    'bgcolor' => '#ffffff',
		    'bordercolor' => '#ffffff',
		    'borderwidth' => '0',
		    'bordertype' => 'solid',
		    'fontcolor' => '#7fc04c',
		    'fontsize' => '55',
		    'fontweight' => 'normal',
		    'padding' => '1'
		  ), $atts));

		 $shareHash = "$cache.$url.$f.$bgcolor.$bordercolor.$borderwidth.$bordertype.$fontcolor.$fontsize.$fontweight.$padding";
		 $totalShareRecord = 'totalshares_' . $shareHash;
		 $cachedposts = get_transient($totalShareRecord);
		 if ($cachedposts !== false) {
		 return $cachedposts;

		 } else {

		   //if (!$url) $url = get_permalink($post->ID);
		 	$post_id = get_the_ID();
			$url = get_post_meta("$post_id", 'links_link_custom', true);

		   	//$json = file_get_contents("http://api.sharedcount.com/?url=" . rawurlencode($url));
		    $counts = json_decode($json, true);
		    $return = $counts['Twitter'] + $counts['Facebook']['total_count'] + $counts['GooglePlusOne'];
		    if ($f) $return = '
		' . $return . '';
		    set_transient($totalShareRecord, $return, $cache);
		    return $return;
		 }
		}
		//add_shortcode('totalshares','getTotalShares');