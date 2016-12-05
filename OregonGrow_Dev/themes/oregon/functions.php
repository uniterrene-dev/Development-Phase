<?php
	//Oregon enqueue scripts
	function sb_oregon_enqueue_script() {
		//styles
		wp_enqueue_style( 'fontawesome',  get_template_directory_uri() . '/css/font-awesome.min.css' );		
		wp_enqueue_style( 'commons',  get_template_directory_uri() . '/css/common.css' );	
		wp_enqueue_style( 'custom',  get_template_directory_uri() . '/css/custom.css' );		
		wp_enqueue_style( 'responsive',  get_template_directory_uri() . '/css/responsive.css' );
		wp_enqueue_style( 'main',  get_template_directory_uri() . '/style.css' );
		
		//js
		wp_enqueue_script( 'oregon-js', get_template_directory_uri().'/js/oregon.js', array('jquery'), true );
		wp_enqueue_script( 'jquery1110', get_template_directory_uri().'/js/jquery-1.11.0.js', true );
		wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', true );
	}
	add_action( 'wp_enqueue_scripts', 'sb_oregon_enqueue_script' );

	//Oregon thumbnail support in Oregon theme
	add_theme_support( 'post-thumbnails' );
	
	//Oregon menus
	function sb_oregon_register_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' ),
				)
			);
	}
	add_action( 'init', 'sb_oregon_register_menus' );

	//Oregon dynamic sidebars
	function sb_oregon_widgets() {
		register_sidebar( array(
			'name' => __( 'Woocommerce Sidebar', 'oregon' ),
			'id' => 'woocommerce-sidebar',
			'description' => __( 'This widget displayed in right sidebar of blog pages', 'oregon' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}
	//add_action( 'widgets_init', 'sb_oregon_widgets' );

	//Oregon theme options
	function sb_oregon_redux_framework(){
		if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' ) ) {
			require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' );
		}
		if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/sample-config.php' ) ) {
			require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/barebones-config.php' );
		}
	}
	add_action('after_setup_theme', 'sb_oregon_redux_framework');

	//Oregon custom post type for banner section
	function sb_oregon_product_highlight_posttype() {
		register_post_type( 'product_highlight',
			// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Product Highlights' ),
					'singular_name' => __( 'Product Highlights' )
					),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'product_highlight'),
				'supports' => array( 'title', 'thumbnail', 'editor' ),
				)
			);
	}
	add_action( 'init', 'sb_oregon_product_highlight_posttype' );

	//Oregon custom post type for Technical Highlights
	function sb_oregon_technical_highlight_posttype() {
		register_post_type( 'technical_highlight',
			// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Technical Highlights' ),
					'singular_name' => __( 'Technical Highlights' )
					),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'technical_highlight'),
				'supports' => array( 'title', 'thumbnail', 'editor' ),
				)
			);
	}
	add_action( 'init', 'sb_oregon_technical_highlight_posttype' );

	//Oregon custom post type for FAQs
	function sb_oregon_faq_posttype() {
		register_post_type( 'faq_post',
			// CPT Options
			array(
				'labels' => array(
					'name' => __( 'FAQs' ),
					'singular_name' => __( 'FAQs' )
					),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'faq_post'),
				'supports' => array( 'title', 'editor' ),
				)
			);
	}
	add_action( 'init', 'sb_oregon_faq_posttype' );
	

	//Oregon customized exceprt word limit
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

	//Oregon excerpt read more link
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
	
	//Oregon woocommerce support
	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'woocommerce_support' );



	//Oregon woocommerce continue shopping
	function sb_oregon_woo_continue_redirect( $url ) {
		return esc_url( home_url( '/' ) ).'#models';
	}
	add_filter( 'woocommerce_continue_shopping_redirect', 'sb_oregon_woo_continue_redirect' );

	//Oregon woocommerce return to shop
	function sb_oregon_woo_empty_cart_redirect_url() {
	    return esc_url( home_url( '/' ) ).'#models';
	}
	add_filter( 'woocommerce_return_to_shop_redirect', 'sb_oregon_woo_empty_cart_redirect_url' );

	//Oregon woocommerce cart button text for single & archive pages	
	function sb_oregon_woo_cart_button_text() {
		return __( 'Shop Now', 'woocommerce' );
	}
	//add_filter( 'woocommerce_product_single_add_to_cart_text', 'sb_oregon_woo_cart_button_text' );

	function sb_oregon_woo_archive_custom_cart_button_text() {
		return __( 'Shop Now', 'woocommerce' ); 
	}
	//add_filter( 'woocommerce_product_add_to_cart_text', 'sb_oregon_woo_archive_custom_cart_button_text' );

	//excerpt support
	function sb_oregon_excerpt_support_pages() {
		add_post_type_support( 'page', 'excerpt' );
	}
	add_action( 'init', 'sb_oregon_excerpt_support_pages' );

	// removes rich text editor for certain pages
	function remove_page_editor_for_outside_view_page(){
	    if(get_the_ID() == 86) {
	        remove_post_type_support( 'page', 'editor' );
	    }
	}
	add_action( 'add_meta_boxes', 'remove_page_editor_for_outside_view_page' );

	function remove_page_editor_for_inside_view_page(){
	    if(get_the_ID() == 84) {
	        remove_post_type_support( 'page', 'editor' );
	    }
	}
	add_action( 'add_meta_boxes', 'remove_page_editor_for_inside_view_page' );
?>