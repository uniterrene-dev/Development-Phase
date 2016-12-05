<?php

	//kamentra enqueue scripts
	function sb_enqueue_script() {
		//styles
		wp_enqueue_style( 'fontawesome-css',  get_template_directory_uri() . '/css/font-awesome.min.css' );
		wp_enqueue_style( 'banner-css',  get_template_directory_uri() . '/css/banner_style.css' );
		wp_enqueue_style( 'nav-css',  get_template_directory_uri() . '/css/nav_style.css' );
		wp_enqueue_style( 'hover-css',  get_template_directory_uri() . '/css/style_hover.css' );
		wp_enqueue_style( 'custom-css',  get_template_directory_uri() . '/css/custom.css' );
		wp_enqueue_style( 'responsive-css',  get_template_directory_uri() . '/css/responsive.css' );
		wp_enqueue_style( 'theme-css',  get_template_directory_uri() . '/style.css' ); 
		
		//js
		wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/jquery-1.11.0.js', true );
		wp_enqueue_script( 'index-js', get_template_directory_uri().'/js/index.js', true );
	}
	add_action( 'wp_enqueue_scripts', 'sb_enqueue_script' );

	//kamentra menus
	function register_kamentra_menus() {
	  register_nav_menus(
	    array(
	      'header-menu' => __( 'Header Menu' ),
	      'connected-menu' => __( 'Get Connected Menu' ),
	      'services-menu' => __( 'Services Menu' ),
	      'industry-menu' => __( 'Industries Menu' ),
	      'legal-menu' => __( 'Legal Menu' ),
	      'career-menu' => __( 'Careers Menu' ),
	    )
	  );
	}
	add_action( 'init', 'register_kamentra_menus' );

	//kamentra dynamic sidebars
	function kamentra_widgets() {
		register_sidebar( array(
			'name' => __( 'Home Projects Information', 'kamentra' ),
			'id' => 'home-projects-information',
			'description' => __( 'This widget is for some specific sections', 'kamentra' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'kamentra_widgets' );

	//kamentra theme options using Redux Framework
	require_once (dirname(__FILE__) . '/theme-options/barebones-config.php');

	//custom post type for banner section
	function sb_home_banner_posttype() {
		register_post_type( 'home_banner',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Home Banner' ),
					'singular_name' => __( 'Home Banner' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'home_banner'),
				'supports' => array( 'title', 'editor', 'thumbnail', ),
			)
		);
	}
	add_action( 'init', 'sb_home_banner_posttype' );

	//metabox for home banner link
	function button_details_get_meta( $value ) {
		global $post;

		$field = get_post_meta( $post->ID, $value, true );
		if ( ! empty( $field ) ) {
			return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
		} else {
			return false;
		}
	}

	function button_details_add_meta_box() {
		add_meta_box(
			'button_details-button-details',
			__( 'Button Details', 'button_details' ),
			'button_details_html',
			'home_banner',
			'normal',
			'default'
		);
	}
	add_action( 'add_meta_boxes', 'button_details_add_meta_box' );

	function button_details_html( $post) {
		wp_nonce_field( '_button_details_nonce', 'button_details_nonce' ); ?>

		<p>
			<label for="button_details_button_text"><?php _e( 'button text', 'button_details' ); ?></label><br>
			<input type="text" name="button_details_button_text" id="button_details_button_text" value="<?php echo button_details_get_meta( 'button_details_button_text' ); ?>">
		</p>	<p>
			<label for="button_details_button_link"><?php _e( 'button link', 'button_details' ); ?></label><br>
			<input type="text" name="button_details_button_link" id="button_details_button_link" value="<?php echo button_details_get_meta( 'button_details_button_link' ); ?>">
		</p><?php
	}

	function button_details_save( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( ! isset( $_POST['button_details_nonce'] ) || ! wp_verify_nonce( $_POST['button_details_nonce'], '_button_details_nonce' ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;

		if ( isset( $_POST['button_details_button_text'] ) )
			update_post_meta( $post_id, 'button_details_button_text', esc_attr( $_POST['button_details_button_text'] ) );
		if ( isset( $_POST['button_details_button_link'] ) )
			update_post_meta( $post_id, 'button_details_button_link', esc_attr( $_POST['button_details_button_link'] ) );
	}
	add_action( 'save_post', 'button_details_save' );

	//thumbnail support in kamentra theme
	add_theme_support( 'post-thumbnails' );

	//custom post type for services
	function sb_services_posttype() {
		register_post_type( 'services',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Kamentra Services' ),
					'singular_name' => __( 'Kamentra Service' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'services'),
				'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			)
		);
	}
	add_action( 'init', 'sb_services_posttype' );

	//service category
	function sb_taxonomy_services() {
	  $labels = array(
	    'name'              => _x( 'Service Categories', 'taxonomy general name' ),
	    'singular_name'     => _x( 'Service Category', 'taxonomy singular name' ),
	    'search_items'      => __( 'Search Service Categories' ),
	    'all_items'         => __( 'All Service Categories' ),
	    'parent_item'       => __( 'Parent Service Category' ),
	    'parent_item_colon' => __( 'Parent Service Category:' ),
	    'edit_item'         => __( 'Edit Service Category' ), 
	    'update_item'       => __( 'Update Service Category' ),
	    'add_new_item'      => __( 'Add New Service Category' ),
	    'new_item_name'     => __( 'New Service Category' ),
	    'menu_name'         => __( 'Service Categories' ),
	  );
	  $args = array(
	    'labels' => $labels,
	    'hierarchical' => true,
	  );
	  register_taxonomy( 'service_category', 'services', $args );
	}
	add_action( 'init', 'sb_taxonomy_services', 0 );

	//tags specific to services 
	function sb_services_tag_taxonomy() {  
	    register_taxonomy(  
	    'servicecategory',  
	    'services',
		    array(  
		        'hierarchical' => false,  
		        'label' => 'Tags',  
		        'query_var' => true,  
		        'rewrite' => true  
		    )  
		);  
	}
	//add_action( 'init', 'sb_services_tag_taxonomy', 0 ); 

	//add_theme_support( 'html5', array( 'search-form' ) );

	//custom post type for industries
	function sb_industries_posttype() {
		register_post_type( 'industries',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Kamentra Industries' ),
					'singular_name' => __( 'Kamentra Industry'),
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'industries'),
				'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			)
		);
	}
	add_action( 'init', 'sb_industries_posttype' );

	//industry category
	function sb_taxonomy_industries() {
	  $labels = array(
	    'name'              => _x( 'Industry Categories', 'taxonomy general name' ),
	    'singular_name'     => _x( 'Industry Category', 'taxonomy singular name' ),
	    'search_items'      => __( 'Search Industry Categories' ),
	    'all_items'         => __( 'All Industry Categories' ),
	    'parent_item'       => __( 'Parent Industry Category' ),
	    'parent_item_colon' => __( 'Parent Industry Category:' ),
	    'edit_item'         => __( 'Edit Industry Category' ), 
	    'update_item'       => __( 'Update Industry Category' ),
	    'add_new_item'      => __( 'Add New Industry Category' ),
	    'new_item_name'     => __( 'New Industry Category' ),
	    'menu_name'         => __( 'Industry Categories' ),
	  );
	  $args = array(
	    'labels' => $labels,
	    'hierarchical' => true,
	  );
	  register_taxonomy( 'industry_category', 'industries', $args );
	}
	add_action( 'init', 'sb_taxonomy_industries', 0 );


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
?>