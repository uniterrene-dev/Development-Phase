<?php
	//Kettleton enqueue scripts
	function sb_kettleton_enqueue_script() {
		//styles
		wp_enqueue_style( 'custom',  get_template_directory_uri() . '/css/custom.css' );
		wp_enqueue_style( 'style1',  get_template_directory_uri() . '/css/style1.css' );
		wp_enqueue_style( 'style2',  get_template_directory_uri() . '/css/style2.css' );
		wp_enqueue_style( 'responsive',  get_template_directory_uri() . '/css/responsive.css' );		
		wp_enqueue_style( 'fontawesome',  get_template_directory_uri() . '/css/font-awesome.min.css' );
		wp_enqueue_style( 'main',  get_template_directory_uri() . '/style.css' );
		
		//js
		wp_enqueue_script( 'flexisel', get_template_directory_uri().'/js/jquery.flexisel.js', array('jquery'), true );
		wp_enqueue_script( 'kettleton', get_template_directory_uri().'/js/kettleton.js', array('jquery'), true );
		wp_enqueue_script( 'search-index', get_template_directory_uri().'/js/search_index.js', array('jquery'), true );
		//wp_enqueue_script( 'jquery', 'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', true );
	}
	add_action( 'wp_enqueue_scripts', 'sb_kettleton_enqueue_script' );

	//Kettleton thumbnail support
	add_theme_support( 'post-thumbnails' );

	//Kettleton excerpt support
	function sb_kettleton_excerpt_support_pages() {
		add_post_type_support( 'page', 'excerpt' );
	}
	add_action( 'init', 'sb_kettleton_excerpt_support_pages' );

	//Kettleton menus
	function sb_kettleton_register_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' ),
				)
			);
	}
	add_action( 'init', 'sb_kettleton_register_menus' );
	
	//Kettleton dynamic sidebars
	function sb_kettleton_widgets() {
		register_sidebar( array(
			'name' => __( 'Kettleton Blog Sidebar', 'kettleton' ),
			'id' => 'kettleton-blog-sidebar',
			'description' => __( 'This widget displayed in right sidebar of blog pages', 'kettleton' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => __( 'Recent Posts Sidebar', 'kettleton' ),
			'id' => 'recent-posts-sidebar',
			'description' => __( 'This widget displayed in right sidebar of blog pages', 'kettleton' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );

		register_sidebar( array(
			'name' => __( 'Woocommerce Sidebar', 'kettleton' ),
			'id' => 'woocommerce-sidebar',
			'description' => __( 'This widget displayed in right sidebar of blog pages', 'kettleton' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}
	add_action( 'widgets_init', 'sb_kettleton_widgets' );

	//Kettleton theme options
	function sb_kettleton_redux_framework(){
		if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' ) ) {
			require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/ReduxCore/framework.php' );
		}
		if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/sample-config.php' ) ) {
			require_once( dirname( __FILE__ ) . '/includes/ReduxFramework/sample/barebones-config.php' );
		}
	}
	add_action('after_setup_theme', 'sb_kettleton_redux_framework');

	//Kettleton custom post type for testimonial
	function sb_kettleton_testimonial_posttype() {
		register_post_type( 'client_testimonials',
			// CPT Options
			array(
				'labels' => array(
					'name' => __( 'Testimonials' ),
					'singular_name' => __( 'Testimonial' )
					),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'client_testimonials'),
				'supports' => array( 'title', 'editor', ),
				)
			);
	}
	add_action( 'init', 'sb_kettleton_testimonial_posttype' );

	//Kettleton customized exceprt word limit
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

	//Kettleton excerpt read more link
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
	
	//Kettleton woocommerce support
	function sb_kettleton_woocommerce_support() {
		add_theme_support( 'woocommerce' );
	}
	add_action( 'after_setup_theme', 'sb_kettleton_woocommerce_support' );

	//Kettleton woocommerce continue shopping
	function sb_kettleton_woo_continue_redirect( $url ) {
		return esc_url( home_url( '/' ) ).'products';
	}
	add_filter( 'woocommerce_continue_shopping_redirect', 'sb_kettleton_woo_continue_redirect' );

	//Kettleton Featured Products list
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
	//add_shortcode('sb_woocommerce_featured_products', 'sb_featured_woo_products');

	//for home page ACF excerpt of about us page
	function sb_speciality_content_excerpt() {
		global $post;
		$text = get_field('speciality_section_content', 7); //Replace 'your_field_name'
		if ( '' != $text ) {
			$text = strip_shortcodes( $text );
			$text = apply_filters('the_content', $text);
			$text = str_replace(']]&gt;', ']]&gt;', $text);
			$excerpt_length = 30; // 30 words
			//$excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
			$text = wp_trim_words( $text, $excerpt_length );
		}
		return apply_filters('the_excerpt', $text);
	}

	//woocommerce ajax cart update
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