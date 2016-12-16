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
		wp_enqueue_script( 'bx-js', get_template_directory_uri().'/js/jquery.bxslider.min.js', array('jquery'), true );
		wp_enqueue_script( 'zoom-js', get_template_directory_uri().'/js/jquery.zoom.min.js', array('jquery'), true );
		wp_enqueue_script( 'jquery1110', get_template_directory_uri().'/js/jquery-1.11.0.js', true );
		wp_enqueue_script( 'custom', get_template_directory_uri().'/js/custom.js', true );
	}
	add_action( 'wp_enqueue_scripts', 'sb_oregon_enqueue_script' );

	//dequeue woocommerce script in single product page for special requirement
	function sb_oregon_woo_dequeue_scripts(){
		if(is_product()){
			wp_dequeue_script( 'wc-single-product' );
		}		
	}
	//add_action('wp_enqueue_scripts', 'sb_oregon_woo_dequeue_scripts');

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
		//$html = esc_html( '<i class="fa fa-shopping-cart" aria-hidden="true"></i>' );
		return __( 'Shop Now', 'woocommerce' ); 
	}
	add_filter( 'woocommerce_product_add_to_cart_text', 'sb_oregon_woo_archive_custom_cart_button_text' );

	//excerpt support
	function sb_oregon_excerpt_support_pages() {
		add_post_type_support( 'page', 'excerpt' );
	}
	add_action( 'init', 'sb_oregon_excerpt_support_pages' );

	// removes text editor for certain pages
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

	//backorder text customized
	function backorder_text($available) {
		foreach($available as $i) {
		$available = str_replace('Available on backorder', 'Pre-Order sale', $available);
		}
		return $available;
	}
	//add_filter('woocommerce_get_availability', 'backorder_text');

	//remove SKU
	function sb_remove_product_page_skus( $enabled ) {
	    if ( ! is_admin() && is_product() ) {
	        return false;
	    }
	    return $enabled;
	}
	add_filter( 'wc_product_sku_enabled', 'sb_remove_product_page_skus' );

	//ajax cart update
	add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');
	function woocommerce_header_add_to_cart_fragment( $fragments ) {
	  global $woocommerce;
	  ob_start();
	  ?>
	  <span class="cart_val"><?php echo $woocommerce->cart->cart_contents_count; ?></span>
	  <?php
	  $fragments['span.cart_val'] = ob_get_clean();
	  return $fragments;
	}


	/*--woocommerce additional tabs--*/
	//highlight tab
	add_filter( 'woocommerce_product_tabs', 'woo_highlights_product_tab' );
	function woo_highlights_product_tab( $highlight_tab ) {		
		// Highlights tab	
		$high_var1 = get_field('highlight_tab_title');	
		$highlight_tab['highlights'] = Array
			(
			'title' => $high_var1,
			'priority' => 5,
			'callback' => 'woo_highlights_product_tab_content'
			);
		return $highlight_tab;
	}
	function woo_highlights_product_tab_content() {
		// The new tab content
		$high_var2 = get_field('highlight_tab_content');
		 
		if( get_field('highlight_tab_content') )
		{
		    echo $high_var2;
		}
		else
		{
		    echo "<style>.highlights_tab { display:none !important; } #tab-highlights { display: none !important; }</style>";
		}	
	}

	//features tab
	add_filter( 'woocommerce_product_tabs', 'woo_features_product_tab' );
	function woo_features_product_tab( $feature_tab ) {		
		// Features tab	
		$feat_var1 = get_field('features_tab_title');	
		$feature_tab['features'] = Array
			(
			'title' => $feat_var1,
			'priority' => 10,
			'callback' => 'woo_features_product_tab_content'
			);
			return $feature_tab;
	}
	function woo_features_product_tab_content() {
		// The new tab content
		$feat_var2 = get_field('features_tab_content');	
		if( get_field('features_tab_content') )
		{
		    echo $feat_var2; 
		}
		else
		{
		    echo "<style>.features_tab { display:none !important; } #tab-features { display: none !important; }</style>";
		}			
	}

	//specification tab
	add_filter( 'woocommerce_product_tabs', 'woo_specifications_product_tab' );
	function woo_specifications_product_tab( $specification_tab ) {		
		// specification tab	
		$spec_var1 = get_field('specifications_tab_title');	
		$specification_tab['specifications'] = Array
			(
			'title' => $spec_var1,
			'priority' => 15,
			'callback' => 'woo_specifications_product_tab_content'
			);
			return $specification_tab;
	}
	function woo_specifications_product_tab_content() {
		// The new tab content
		$spec_var2 = get_field('specifications_tab_content');		
		if( get_field('specifications_tab_content') )
		{
		    echo $spec_var2;
		}
		else
		{
		    echo "<style>.specifications_tab { display:none !important; } #tab-specifications { display: none !important; }</style>";
		}		
	}

	//gallery tab
	//add_filter( 'woocommerce_product_tabs', 'woo_gallery_product_tab' );
	function woo_gallery_product_tab( $gallery_tab ) {		
		// gallery tab	
		$gal_var1 = get_field('gallery_tab_title');	
		$gallery_tab['gallerys'] = Array
			(
			'title' => $gal_var1,
			'priority' => 20,
			'callback' => 'woo_gallery_product_tab_content'
			);
			return $gallery_tab;
	}
	function woo_gallery_product_tab_content() {
		// The new tab content
		//$gal_var2 = get_field('gallery_tab_content'); 
		if( get_field('gallery_tab_title') )
		{
		    //echo $gal_var2;
		    echo do_shortcode('[sb_custom_product_gallery]');
		}
		else
		{
		    echo "<style>.gallerys_tab { display:none !important; } #tab-gallerys { display: none !important; }</style>";
		}		
	}

	//accessories tab
	add_filter( 'woocommerce_product_tabs', 'woo_accessories_product_tab' );
	function woo_accessories_product_tab( $accessories_tab ) {		
		// accessories tab	
		$acc_var1 = get_field('accessories_tab_title');	
		$accessories_tab['accessories'] = Array
			(
			'title' => $acc_var1,
			'priority' => 25,
			'callback' => 'woo_accessories_product_tab_content'
			);
			return $accessories_tab;
	}
	function woo_accessories_product_tab_content() {
		// The new tab content
		$acc_var2 = get_field('accessories_tab_content');	
		if( get_field('accessories_tab_content') )
		{
		    echo $acc_var2;
		}
		else
		{
		    echo "<style>.accessories_tab { display:none !important; } #tab-accessories { display: none !important; }</style>";
		}	 		
	}

	//other model tab
	add_filter( 'woocommerce_product_tabs', 'woo_other_models_product_tab' );
	function woo_other_models_product_tab( $accessories_tab ) {		
		// other model tab	
		$other_var1 = get_field('other_models_tab_title');	
		$accessories_tab['other_models'] = Array
			(
			'title' => $other_var1,
			'priority' => 30,
			'callback' => 'woo_other_models_product_tab_content'
			);
			return $accessories_tab;
	}
	function woo_other_models_product_tab_content() {
		// The new tab content
		$other_var2 = get_field('other_models_tab_content');		
		if( get_field('other_models_tab_content') )
		{
		    echo $other_var2;
		}
		else
		{
		    echo "<style>.other_models_tab { display:none !important; } #tab-other_models { display: none !important; }</style>";
		}		
	}

	//woocommerce remove existing tabs
	add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );
	function woo_remove_product_tabs( $tabs ) {
	    unset( $tabs['description'] );      	// Remove the description tab
	    unset( $tabs['reviews'] ); 			// Remove the reviews tab
	    unset( $tabs['additional_information'] );  	// Remove the additional information tab
	    return $tabs;
	}

	//add_shortcode('sb_custom_product_gallery', 'sb_woo_product_gallery');
	function sb_woo_product_gallery($atts, $content){
	    ob_start();
	    //$path = WooCommerce::plugin_path();
	    //include($path . '/templates/single-product/product-thumbnails.php');
	    load_template( dirname( __FILE__ ) . '/woocommerce/single-product/product-thumbnails.php' );
	    $output = ob_get_contents();
	    ob_end_clean();
	    return $output;
	}

	//remove action
	//remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
	//remove_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
	//add_action('woocommerce_before_single_product', 'woocommerce_show_product_images', 20);