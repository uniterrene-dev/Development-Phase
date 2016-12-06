<?php
	//Procard enqueue scripts
function sb_procard_enqueue_script() {
		//styles
	wp_enqueue_style( 'fontawesome',  get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i' );			
	wp_enqueue_style( 'style1',  get_template_directory_uri() . '/css/style1.css' );
	wp_enqueue_style( 'style2',  get_template_directory_uri() . '/css/style2.css' );
	//wp_enqueue_style( 'fancybox-css',  get_template_directory_uri() . '/css/jquery.fancybox.css' );		
	wp_enqueue_style( 'customs',  get_template_directory_uri() . '/css/custom.css' );
	wp_enqueue_style( 'responsive',  get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'video-style',  get_template_directory_uri() . '/css/video_styles.css' );
	wp_enqueue_style( 'flexslider-css',  get_template_directory_uri() . '/css/flexslider.css' );
	wp_enqueue_style( 'main',  get_template_directory_uri() . '/style.css' );
	
	//js
	wp_enqueue_script( 'index', get_template_directory_uri().'/js/index.js', array('jquery'), true );
	wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', array('jquery'), true );
	wp_enqueue_script( 'procard-js', get_template_directory_uri().'/js/procard.js', array('jquery'), true );
	//wp_enqueue_script( 'fancybox-js', get_template_directory_uri().'/js/jquery.fancybox.js', array('jquery'), true );	
	wp_enqueue_script( 'flexisel', get_template_directory_uri().'/js/jquery.flexisel.js', array('jquery'), true );
	wp_enqueue_script( 'flexslider', get_template_directory_uri().'/js/jquery.flexslider.js', array('jquery'), true );	
	//wp_enqueue_script( 'jquery', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', true );
}
add_action( 'wp_enqueue_scripts', 'sb_procard_enqueue_script' );
	//thumbnail support in Procard theme
add_theme_support( 'post-thumbnails' );
	//customized image size for post slider
add_image_size( 'post-slide', 267, 194 );
	//Procard menus
function sb_procard_register_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
			'help-menu' => __( 'Help Menu' ),
			'order-menu' => __( 'Order & Shipping Menu' ),
			)
		);
}
add_action( 'init', 'sb_procard_register_menus' );
	//Procard dynamic sidebars
function sb_procard_widgets() {
	register_sidebar( array(
		'name' => __( 'Procard Blog Sidebar', 'procard' ),
		'id' => 'procard-blog-sidebar',
		'description' => __( 'This widget displayed in right sidebar of blog pages', 'procard' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Woocommerce Sidebar', 'procard' ),
		'id' => 'woocommerce-sidebar',
		'description' => __( 'This widget displayed in right sidebar of blog pages', 'procard' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'sb_procard_widgets' );
	//Procard theme options
function sb_procard_redux_framework(){
	if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' ) ) {
		require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' );
	}
	if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/sample-config.php' ) ) {
		require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/barebones-config.php' );
	}
}
add_action('after_setup_theme', 'sb_procard_redux_framework');
	//Procard custom post type for banner section
function sb_procard_product_slider_posttype() {
	register_post_type( 'product_slider',
		// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Bottom Product Slider' ),
				'singular_name' => __( 'Bottom Product Slider' )
				),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'product_slider'),
			'supports' => array( 'title', 'thumbnail', ),
			)
		);
}
add_action( 'init', 'sb_procard_product_slider_posttype' );
	//meta fields for product slider link
function product_slider_link_get_meta( $value ) {
	global $post;
	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}
function product_slider_link_add_meta_box() {
	add_meta_box(
		'product_slider_link-product-slider-link',
		__( 'Product Slider Link', 'product_slider_link' ),
		'product_slider_link_html',
		'product_slider',
		'normal',
		'default'
		);
}
add_action( 'add_meta_boxes', 'product_slider_link_add_meta_box' );
function product_slider_link_html( $post) {
	wp_nonce_field( '_product_slider_link_nonce', 'product_slider_link_nonce' ); ?>
	<p>
		<label for="product_slider_link_product_link"><?php _e( 'Product Link', 'product_slider_link' ); ?></label><br>
		<input type="text" name="product_slider_link_product_link" class="widefat" id="product_slider_link_product_link" value="<?php echo product_slider_link_get_meta( 'product_slider_link_product_link' ); ?>">
	</p><?php
}
function product_slider_link_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['product_slider_link_nonce'] ) || ! wp_verify_nonce( $_POST['product_slider_link_nonce'], '_product_slider_link_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;
	if ( isset( $_POST['product_slider_link_product_link'] ) )
		update_post_meta( $post_id, 'product_slider_link_product_link', esc_attr( $_POST['product_slider_link_product_link'] ) );
}
add_action( 'save_post', 'product_slider_link_save' );
	//Procard customized exceprt word limit
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

	//Procard excerpt read more link
function new_excerpt_more($more) {
	global $post;
	return '<a class="getDetails" href="'. get_permalink($post->ID) . '">' . 'Get Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
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
	//Procard woocommerce support
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );
	//Procard woocommerce Actions
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
add_action( 'woocommerce_before_main_content', 'woocommerce_template_single_title', 5 );
	//Procard woocommerce continue shopping
function sb_procard_woo_continue_redirect( $url ) {
	return esc_url( home_url( '/' ) ).'store';
}
add_filter( 'woocommerce_continue_shopping_redirect', 'sb_procard_woo_continue_redirect' );

	//Procard Featured Products list
function sb_featured_woo_products(){ ?>
	<div class="productHolder clearfix">
		<?php
		global $product, $posts;
		$args = array(  
			'post_type' => 'product',  
			'meta_key' => '_featured',  
			'meta_value' => 'yes',  
			'posts_per_page' => -1, 
			);  
		
		$featured_query = new WP_Query( $args );  
                //print_r($featured_query); ?>
		
		<ul class="proIteMUl clearfix">
			<?php
			if ($featured_query->have_posts()) :   
				while ($featured_query->have_posts()) :   
					$featured_query->the_post();  
				$product = get_product( $featured_query->post->ID );  
                                //print_r($product);
				$url = get_permalink( $product_id ); ?>
				<li>
					<div class="productItem">
						<a href="<?php echo $url; ?>">
							<?php 
							if ( has_post_thumbnail( $loop->post->ID ) ) 
								echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' ); 
							else 
								echo '<img src="' . woocommerce_placeholder_img_src() . '"/>'; 
							?>
						</a>
						<div class="proDescription">
							<p><a href="<?php echo $url; ?>"><?php the_title(); ?></a></p>
							<ul>
								<li class="price"><span><?php echo $product->get_price_html(); ?></span></li>
								<li class="shop"><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></li>
							</ul>
						</div>
					</div>
				</li>
				<?php 
				endwhile; endif;  
				wp_reset_query();
				?>
			</ul>
		</div>
		<?php }
		add_shortcode('sb_woocommerce_featured_products', 'sb_featured_woo_products');
	//Procard admin page logo
		function sb_login_logo() { ?>
			<style type="text/css">
	        #login h1 a, .login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/headaer_logo.png);
				padding-bottom: 30px;
			}
		</style>
		<?php }
	//add_action( 'login_enqueue_scripts', 'sb_login_logo' );
	//Procard woocommerce cart button text for single & archive pages	
		function woo_custom_cart_button_text() {
			return __( 'Shop Now', 'woocommerce' );
		}
		add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );
		function woo_archive_custom_cart_button_text() {
			return __( 'Shop Now', 'woocommerce' ); 
		}
		add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );

		//Procard custom post type for photos/gallery
		/*function sb_procard_photo_gallery_posttype() {
			register_post_type( 'photo_gallery',
			// CPT Options
				array(
					'labels' => array(
						'name' => __( 'Photo Gallery' ),
						'singular_name' => __( 'Photo Gallery' )
					),

					'public' => true,
					'has_archive' => true,
					'rewrite' => array('slug' => 'photo_gallery'),
					'supports' => array( 'title', 'thumbnail', ),
				)
			);
		}
		add_action( 'init', 'sb_procard_photo_gallery_posttype' );*/


		//Procard custom post type for video/gallery
		function sb_procard_video_gallery_posttype() {
			register_post_type( 'video_gallery',
			// CPT Options
				array(
					'labels' => array(
						'name' => __( 'Video Gallery' ),
						'singular_name' => __( 'Video Gallery' ),

					),

					'public' => true,
					'has_archive' => true,
					'rewrite' => array('slug' => 'video_gallery'),
					'supports' => array( 'title', 'editor' ),
				)
			);
		}
		add_action( 'init', 'sb_procard_video_gallery_posttype' );
		
		//metafields for youtube link in video gallery page
		function youtube_video_details_get_meta( $value ) {
			global $post;

			$field = get_post_meta( $post->ID, $value, true );
			if ( ! empty( $field ) ) {
				return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
			} else {
				return false;
			}
		}

		function youtube_video_details_add_meta_box() {
			add_meta_box(
				'youtube_video_details-youtube-video-details',
				__( 'YouTube Video Details', 'youtube_video_details' ),
				'youtube_video_details_html',
				'video_gallery',
				'normal',
				'default'
			);
		}
		//add_action( 'add_meta_boxes', 'youtube_video_details_add_meta_box' );

		function youtube_video_details_html( $post) {
			wp_nonce_field( '_youtube_video_details_nonce', 'youtube_video_details_nonce' ); ?>

			<p>e.g. https://www.youtube.com/embed/dwJasig9Olw</p>

			<p>
				<label for="youtube_video_details_video_link"><?php _e( 'Video link', 'youtube_video_details' ); ?></label><br>
				<input type="text" class="widefat" name="youtube_video_details_video_link" id="youtube_video_details_video_link" value="<?php echo youtube_video_details_get_meta( 'youtube_video_details_video_link' ); ?>">
			</p><?php
		}

		function youtube_video_details_save( $post_id ) {
			if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
			if ( ! isset( $_POST['youtube_video_details_nonce'] ) || ! wp_verify_nonce( $_POST['youtube_video_details_nonce'], '_youtube_video_details_nonce' ) ) return;
			if ( ! current_user_can( 'edit_post', $post_id ) ) return;

			if ( isset( $_POST['youtube_video_details_video_link'] ) )
				update_post_meta( $post_id, 'youtube_video_details_video_link', esc_attr( $_POST['youtube_video_details_video_link'] ) );
		}
		//add_action( 'save_post', 'youtube_video_details_save' );

		
		//custom taxonomy for video gallery
		function sb_procard_video_gallery_taxonomy() {
		  $labels = array(
		    'name'              => _x( 'Video Categories', 'taxonomy general name' ),
		    'singular_name'     => _x( 'Video Category', 'taxonomy singular name' ),
		    'search_items'      => __( 'Search Video Categories' ),
		    'all_items'         => __( 'All Video Categories' ),
		    'parent_item'       => __( 'Parent Video Category' ),
		    'parent_item_colon' => __( 'Parent Video Category:' ),
		    'edit_item'         => __( 'Edit Video Category' ), 
		    'update_item'       => __( 'Update Video Category' ),
		    'add_new_item'      => __( 'Add New Video Category' ),
		    'new_item_name'     => __( 'New Video Category' ),
		    'menu_name'         => __( 'Video Categories' ),
		  );
		  $args = array(
		    'labels' => $labels,
		    'hierarchical' => true,
		  );
		  register_taxonomy( 'video_category', 'video_gallery', $args );
		}
		add_action( 'init', 'sb_procard_video_gallery_taxonomy', 0 );

		function sb_procard_excerpt_support_for_video_gallery() {
			add_post_type_support( 'video_gallery', 'excerpt' );
		}
		add_action( 'init', 'sb_procard_excerpt_support_for_video_gallery' );

		function sb_procard_excerpt_support_for_pages() {
			add_post_type_support( 'page', 'excerpt' );
		}
		add_action( 'init', 'sb_procard_excerpt_support_for_pages' );


?>