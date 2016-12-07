<?php
	//VRSP enqueue scripts
	function sb_vrsp_enqueue_script() {
		//styles
		wp_enqueue_style( 'main',  get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'custom-css',  get_template_directory_uri() . '/css/custom.css' );
		wp_enqueue_style( 'responsive-css',  get_template_directory_uri() . '/css/responsive.css' );
		wp_enqueue_style( 'bootstrap-css',  get_template_directory_uri() . '/css/bootstrap.css' );
		wp_enqueue_style( 'fontawesome',  get_template_directory_uri() . '/css/font-awesome.css' );
		wp_enqueue_style( 'animate',  get_template_directory_uri() . '/css/animate.min.css' );		
		wp_enqueue_style( 'slider-style',  get_template_directory_uri() . '/css/slider_styles.css' );
		wp_enqueue_style( 'showcase',  get_template_directory_uri() . '/css/style_showcase.css' );
				
		//js
		wp_enqueue_script( 'jquery-js', get_template_directory_uri().'/js/jquery.min.js', true );
		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), true );
		wp_enqueue_script( 'flexisel2', get_template_directory_uri().'/js/jquery.flexisel2.js', array('jquery'), true );	
		wp_enqueue_script( 'custom-js', get_template_directory_uri().'/js/custom.js', array('jquery'), true );
		wp_enqueue_script( 'theme-js', get_template_directory_uri().'/js/theme.js', array('jquery'), true );
		//wp_enqueue_script( 'jquery', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', true );
	}
	add_action( 'wp_enqueue_scripts', 'sb_vrsp_enqueue_script' );

	//thumbnail support in VRSP theme
	add_theme_support( 'post-thumbnails' );

	//excerpts to pages in VRSP theme
	add_action( 'init', 'sb_vrsp_add_excerpts_to_pages' );
	function sb_vrsp_add_excerpts_to_pages() {
	     add_post_type_support( 'page', 'excerpt' );
	}

	//VRSP menus
	function sb_vrsp_register_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' ),
				'footer-menu' => __( 'Footer Menu' ),
				'service-menu' => __( 'Service Menu' ),
				)
			);
	}
	add_action( 'init', 'sb_vrsp_register_menus' );

	//VRSP dynamic sidebars
	function sb_vrsp_widgets() {
		register_sidebar( array(
			'name' => __( 'Our Services List Widget', 'vrsp' ),
			'id' => 'our-services-list-widget',
			'description' => __( 'This widget keeps the service lists', 'vrsp' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
			) );
	}
	//add_action( 'widgets_init', 'sb_vrsp_widgets' );

	//VRSP theme options
	function sb_vrsp_redux_framework(){
		if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' ) ) {
			require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' );
		}
		if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/sample-config.php' ) ) {
			require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/barebones-config.php' );
		}
	}
	add_action('after_setup_theme', 'sb_vrsp_redux_framework');

	//VRSP custom post type for banner section
	function sb_vrsp_banner_posttype() {
		register_post_type( 'home_banner',
			// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Home Banner' ),
					'singular_name' => __( 'Home Banner' )
					),
				'public' => true,
				'has_archive' => true,
				'menu_icon' => 'dashicons-format-image',
				'rewrite' => array('slug' => 'home_banner'),
				'supports' => array( 'title', 'thumbnail', ),
				)
			);
	}
	add_action( 'init', 'sb_vrsp_banner_posttype' );

	//Banner metafields
	function banner_content_and_button_link_get_meta( $value ) {
		global $post;

		$field = get_post_meta( $post->ID, $value, true );
		if ( ! empty( $field ) ) {
			return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
		} else {
			return false;
		}
	}

	function banner_content_and_button_link_add_meta_box() {
		add_meta_box(
			'banner_content_and_button_link-banner-content-and-button-link',
			__( 'Banner content and button link', 'banner_content_and_button_link' ),
			'banner_content_and_button_link_html',
			'home_banner',
			'normal',
			'default'
		);
	}
	add_action( 'add_meta_boxes', 'banner_content_and_button_link_add_meta_box' );

	function banner_content_and_button_link_html( $post) {
		wp_nonce_field( '_banner_content_and_button_link_nonce', 'banner_content_and_button_link_nonce' ); ?>

		<p>
			<label for="banner_content_and_button_link_first_content_line"><?php _e( 'First Content Line', 'banner_content_and_button_link' ); ?></label><br>
			<input class="widefat" type="text" name="banner_content_and_button_link_first_content_line" id="banner_content_and_button_link_first_content_line" value="<?php echo banner_content_and_button_link_get_meta( 'banner_content_and_button_link_first_content_line' ); ?>">
		</p>	<p>
			<label for="banner_content_and_button_link_second_content_line"><?php _e( 'Second Content Line', 'banner_content_and_button_link' ); ?></label><br>
			<input class="widefat" type="text" name="banner_content_and_button_link_second_content_line" id="banner_content_and_button_link_second_content_line" value="<?php echo banner_content_and_button_link_get_meta( 'banner_content_and_button_link_second_content_line' ); ?>">
		</p>	<p>
			<label for="banner_content_and_button_link_download_profile_pdf_link"><?php _e( 'Download Profile PDF Link', 'banner_content_and_button_link' ); ?></label><br>
			<input class="widefat" type="text" name="banner_content_and_button_link_download_profile_pdf_link" id="banner_content_and_button_link_download_profile_pdf_link" value="<?php echo banner_content_and_button_link_get_meta( 'banner_content_and_button_link_download_profile_pdf_link' ); ?>">
		</p><?php
	}

	function banner_content_and_button_link_save( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( ! isset( $_POST['banner_content_and_button_link_nonce'] ) || ! wp_verify_nonce( $_POST['banner_content_and_button_link_nonce'], '_banner_content_and_button_link_nonce' ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;

		if ( isset( $_POST['banner_content_and_button_link_first_content_line'] ) )
			update_post_meta( $post_id, 'banner_content_and_button_link_first_content_line', esc_attr( $_POST['banner_content_and_button_link_first_content_line'] ) );
		if ( isset( $_POST['banner_content_and_button_link_second_content_line'] ) )
			update_post_meta( $post_id, 'banner_content_and_button_link_second_content_line', esc_attr( $_POST['banner_content_and_button_link_second_content_line'] ) );
		if ( isset( $_POST['banner_content_and_button_link_download_profile_pdf_link'] ) )
			update_post_meta( $post_id, 'banner_content_and_button_link_download_profile_pdf_link', esc_attr( $_POST['banner_content_and_button_link_download_profile_pdf_link'] ) );
	}
	add_action( 'save_post', 'banner_content_and_button_link_save' );

	//VRSP Quotes custom post type
	function sb_vrsp_quotes_posttype() {
		register_post_type( 'home_quotes',
			// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Home Quotes' ),
					'singular_name' => __( 'Home Quotes' )
					),
				'public' => true,
				'has_archive' => true,
				'menu_icon' => 'dashicons-format-quote',
				'rewrite' => array('slug' => 'home_quotes'),
				'supports' => array( 'title', 'editor' ),
				)
			);
	}
	add_action( 'init', 'sb_vrsp_quotes_posttype' );


	

	//VRSP customized exceprt word limit
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

	//VRSP excerpt read more link
	function new_excerpt_more($more) {
		global $post;
		return '<a class="getDetails" href="'. get_permalink($post->ID) . '">' . 'Get Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i>' . '</a>';
	}
	//add_filter('excerpt_more', 'new_excerpt_more');

	//search highlighter for excerpt
	/*function search_excerpt_highlight() {
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
	}*/

	//VRSP woocommerce support
	function woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'woocommerce_support' );


	//VRSP woocommerce continue shopping
	function sb_vrsp_woo_continue_redirect( $url ) {
		return esc_url( home_url( '/' ) ).'store';
	}
	//add_filter( 'woocommerce_continue_shopping_redirect', 'sb_vrsp_woo_continue_redirect' );

	//VRSP woocommerce cart button text for single & archive pages	
	function woo_custom_cart_button_text() {
		return __( 'Shop Now', 'woocommerce' );
	}
	//add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );

	function woo_archive_custom_cart_button_text() {
		return __( 'Shop Now', 'woocommerce' ); 
	}
	//add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );

	//VRSP custom post type for partners/team
	function sb_vrsp_our_partners_posttype() {
		register_post_type( 'our_partners',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Our Team Member' ),
					'singular_name' => __( 'Our Team Member' )
				),

				'public' => true,
				'has_archive' => true,
				'menu_icon' => 'dashicons-groups',
				'rewrite' => array('slug' => 'our_partners'),
				'supports' => array( 'title', 'editor', 'thumbnail', ),
			)
		);
	}
	add_action( 'init', 'sb_vrsp_our_partners_posttype' );

	//Metafields for inner pages
	function page_title_field_get_meta( $value ) {
		global $post;

		$field = get_post_meta( $post->ID, $value, true );
		if ( ! empty( $field ) ) {
			return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
		} else {
			return false;
		}
	}

	function page_title_field_add_meta_box() {
		add_meta_box(
			'page_title_field-page-title-field',
			__( 'Page Title Field', 'page_title_field' ),
			'page_title_field_html',
			'page',
			'normal',
			'default'
		);
	}
	add_action( 'add_meta_boxes', 'page_title_field_add_meta_box' );

	function page_title_field_html( $post) {
		wp_nonce_field( '_page_title_field_nonce', 'page_title_field_nonce' ); ?>

		<p>
			<label for="page_title"><?php _e( 'Please keep page title here. Do not use any other tags.', 'page_title_field' ); ?></label><br>
			<input class="widefat" type="text" name="page_title" id="page_title" value="<?php echo page_title_field_get_meta( 'page_title' ); ?>">
		</p>	<p>
			<label for="page_title_no_of_words"><?php _e( 'No. of words you want to have in black color in page title', 'page_title_field' ); ?></label><br>
			<input class="widefat" type="text" name="page_title_no_of_words" id="page_title_no_of_words" value="<?php echo page_title_field_get_meta( 'page_title_no_of_words' ); ?>">
		</p><?php
	}

	function page_title_field_save( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( ! isset( $_POST['page_title_field_nonce'] ) || ! wp_verify_nonce( $_POST['page_title_field_nonce'], '_page_title_field_nonce' ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;

		if ( isset( $_POST['page_title'] ) )
			update_post_meta( $post_id, 'page_title', esc_attr( $_POST['page_title'] ) );
		if ( isset( $_POST['page_title_no_of_words'] ) )
			update_post_meta( $post_id, 'page_title_no_of_words', esc_attr( $_POST['page_title_no_of_words'] ) );
	}
	add_action( 'save_post', 'page_title_field_save' );

	//VRSP custom post type for audit & assurance
	function sb_vrsp_audit_assurance_posttype() {
		register_post_type( 'audit_n_assurance',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Audit & Assurance' ),
					'singular_name' => __( 'Audit & Assurance' )
				),

				'public' => true,
				'has_archive' => true,
				'menu_icon' => 'dashicons-list-view',
				'rewrite' => array('slug' => 'audit_n_assurance'),
				'supports' => array( 'title', 'editor', 'thumbnail', ),
			)
		);
	}
	add_action( 'init', 'sb_vrsp_audit_assurance_posttype' );

	//VRSP custom post type for Taxation
	function sb_vrsp_taxation_posttype() {
		register_post_type( 'taxation_posts',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Taxation' ),
					'singular_name' => __( 'Taxation' )
				),

				'public' => true,
				'has_archive' => true,
				'menu_icon' => 'dashicons-list-view',
				'rewrite' => array('slug' => 'taxation_posts'),
				'supports' => array( 'title', 'editor', 'thumbnail', ),
			)
		);
	}
	add_action( 'init', 'sb_vrsp_taxation_posttype' );

	//VRSP custom post type for Business Advisory
	function sb_vrsp_business_advisory_posttype() {
		register_post_type( 'business_posts',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Business Advisory' ),
					'singular_name' => __( 'Business Advisory' )
				),

				'public' => true,
				'has_archive' => true,
				'menu_icon' => 'dashicons-list-view',
				'rewrite' => array('slug' => 'business_posts'),
				'supports' => array( 'title', 'editor', 'thumbnail', ),
			)
		);
	}
	add_action( 'init', 'sb_vrsp_business_advisory_posttype' );


	//VRSP custom post type for useful links
	function sb_vrsp_useful_links_posttype() {
		register_post_type( 'useful_link',
		// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Useful Links' ),
					'singular_name' => __( 'Useful Links' )
				),

				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'useful_link'),
				'supports' => array( 'title', 'editor', ),
			)
		);
	}
	add_action( 'init', 'sb_vrsp_useful_links_posttype' );

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

	//VRSP Recent updates custom post type
	function sb_vrsp_recent_updates_posttype() {
		register_post_type( 'recent_update',
			// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Recent Updates' ),
					'singular_name' => __( 'Recent Updates' ),
					),
				'public' => true,
				'has_archive' => true,
				'menu_icon' => 'dashicons-update',
				'rewrite' => array('slug' => 'recent_update'),
				'supports' => array( 'title', 'editor', 'thumbnail' ),
				)
			);
	}
	add_action( 'init', 'sb_vrsp_recent_updates_posttype' );

	//Recent updates additional fields metaboxes
	function use_this_page_for_pdf_downloadable_link_only_get_meta( $value ) {
		global $post;

		$field = get_post_meta( $post->ID, $value, true );
		if ( ! empty( $field ) ) {
			return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
		} else {
			return false;
		}
	}

	function use_this_page_for_pdf_downloadable_link_only_add_meta_box() {
		add_meta_box(
			'use_this_page_for_pdf_downloadable_link_only-use-this-page-for-pdf-downloadable-link-only',
			__( 'Use this page for PDF downloadable link only', 'use_this_page_for_pdf_downloadable_link_only' ),
			'use_this_page_for_pdf_downloadable_link_only_html',
			'recent_update',
			'normal',
			'default'
		);
	}
	add_action( 'add_meta_boxes', 'use_this_page_for_pdf_downloadable_link_only_add_meta_box' );

	function use_this_page_for_pdf_downloadable_link_only_html( $post) {
		wp_nonce_field( '_use_this_page_for_pdf_downloadable_link_only_nonce', 'use_this_page_for_pdf_downloadable_link_only_nonce' ); ?>

		<p>
			<label for="use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link"><?php _e( 'Want to use this page as PDF downloadable link', 'use_this_page_for_pdf_downloadable_link_only' ); ?></label><br>
			<select class="widefat" name="use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link" id="use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link">
				<option <?php echo (use_this_page_for_pdf_downloadable_link_only_get_meta( 'use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link' ) === 'No' ) ? 'selected' : '' ?>>No</option>
				<option <?php echo (use_this_page_for_pdf_downloadable_link_only_get_meta( 'use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link' ) === 'Yes' ) ? 'selected' : '' ?>>Yes</option>
				<option <?php echo (use_this_page_for_pdf_downloadable_link_only_get_meta( 'use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link' ) === '' ) ? 'selected' : '' ?>></option>
			</select>
		</p>	<p>
			<label for="use_this_page_for_pdf_downloadable_link_only_page_or_pdf_link"><?php _e( 'Page or PDF link', 'use_this_page_for_pdf_downloadable_link_only' ); ?></label><br>
			<input class="widefat" type="text" name="use_this_page_for_pdf_downloadable_link_only_page_or_pdf_link" id="use_this_page_for_pdf_downloadable_link_only_page_or_pdf_link" value="<?php echo use_this_page_for_pdf_downloadable_link_only_get_meta( 'use_this_page_for_pdf_downloadable_link_only_page_or_pdf_link' ); ?>">
		</p>	<p>
			<label for="use_this_page_for_pdf_downloadable_link_only_open_link_in"><?php _e( 'Open link in', 'use_this_page_for_pdf_downloadable_link_only' ); ?></label><br>
			<select class="widefat" name="use_this_page_for_pdf_downloadable_link_only_open_link_in" id="use_this_page_for_pdf_downloadable_link_only_open_link_in">
				<option <?php echo (use_this_page_for_pdf_downloadable_link_only_get_meta( 'use_this_page_for_pdf_downloadable_link_only_open_link_in' ) === '_self' ) ? 'selected' : '' ?>>_self</option>
				<option <?php echo (use_this_page_for_pdf_downloadable_link_only_get_meta( 'use_this_page_for_pdf_downloadable_link_only_open_link_in' ) === '_blank' ) ? 'selected' : '' ?>>_blank</option>
			</select>
		</p><?php
	}

	function use_this_page_for_pdf_downloadable_link_only_save( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( ! isset( $_POST['use_this_page_for_pdf_downloadable_link_only_nonce'] ) || ! wp_verify_nonce( $_POST['use_this_page_for_pdf_downloadable_link_only_nonce'], '_use_this_page_for_pdf_downloadable_link_only_nonce' ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;

		if ( isset( $_POST['use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link'] ) )
			update_post_meta( $post_id, 'use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link', esc_attr( $_POST['use_this_page_for_pdf_downloadable_link_only_want_to_use_this_page_as_pdf_downloadable_link'] ) );
		if ( isset( $_POST['use_this_page_for_pdf_downloadable_link_only_page_or_pdf_link'] ) )
			update_post_meta( $post_id, 'use_this_page_for_pdf_downloadable_link_only_page_or_pdf_link', esc_attr( $_POST['use_this_page_for_pdf_downloadable_link_only_page_or_pdf_link'] ) );
		if ( isset( $_POST['use_this_page_for_pdf_downloadable_link_only_open_link_in'] ) )
			update_post_meta( $post_id, 'use_this_page_for_pdf_downloadable_link_only_open_link_in', esc_attr( $_POST['use_this_page_for_pdf_downloadable_link_only_open_link_in'] ) );
	}
	add_action( 'save_post', 'use_this_page_for_pdf_downloadable_link_only_save' );

	//Metafields for recent updates title
	function recent_update_field_get_meta( $value ) {
		global $post;

		$field = get_post_meta( $post->ID, $value, true );
		if ( ! empty( $field ) ) {
			return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
		} else {
			return false;
		}
	}

	function recent_update_field_add_meta_box() {
		add_meta_box(
			'recent_update_field-page-title-field',
			__( 'Page Title Field', 'recent_update_field' ),
			'recent_update_field_html',
			'recent_update',
			'normal',
			'default'
		);
	}
	add_action( 'add_meta_boxes', 'recent_update_field_add_meta_box' );

	function recent_update_field_html( $post) {
		wp_nonce_field( '_recent_update_field_nonce', 'recent_update_field_nonce' ); ?>

		<p>***Please note that, in case of downloadable link, this section will not work.</p>

		<p>
			<label for="recent_update"><?php _e( 'Please keep title here. Do not use any other tags.', 'recent_update_field' ); ?></label><br>
			<input class="widefat" type="text" name="recent_update" id="recent_update" value="<?php echo recent_update_field_get_meta( 'recent_update' ); ?>">
		</p>	<p>
			<label for="recent_update_no_of_words"><?php _e( 'No. of words you want to have in black color for title', 'recent_update_field' ); ?></label><br>
			<input class="widefat" type="text" name="recent_update_no_of_words" id="recent_update_no_of_words" value="<?php echo recent_update_field_get_meta( 'recent_update_no_of_words' ); ?>">
		</p><?php
	}

	function recent_update_field_save( $post_id ) {
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( ! isset( $_POST['recent_update_field_nonce'] ) || ! wp_verify_nonce( $_POST['recent_update_field_nonce'], '_recent_update_field_nonce' ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;

		if ( isset( $_POST['recent_update'] ) )
			update_post_meta( $post_id, 'recent_update', esc_attr( $_POST['recent_update'] ) );
		if ( isset( $_POST['recent_update_no_of_words'] ) )
			update_post_meta( $post_id, 'recent_update_no_of_words', esc_attr( $_POST['recent_update_no_of_words'] ) );
	}
	add_action( 'save_post', 'recent_update_field_save' );

	//excerpt support for pages
	function sb_vrsp_add_excerpt_support_for_pages() {
		add_post_type_support( 'page', 'excerpt' );
	}
	add_action( 'init', 'sb_vrsp_add_excerpt_support_for_pages' );

?>