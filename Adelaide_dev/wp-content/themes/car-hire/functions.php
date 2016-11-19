<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
    \*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
    \*------------------------------------*/

    if (!isset($content_width))
    {
        $content_width = 900;
    }

    if (function_exists('add_theme_support'))
    {
    // Add Menu Support
        add_theme_support('menus');

    // Add Thumbnail Theme Support
        add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
    \*------------------------------------*/

// HTML5 Blank navigation
    function html5blank_nav()
    {
       wp_nav_menu(
           array(
              'theme_location'  => 'header-menu',
              'menu'            => '',
              'container'       => 'div',
              'container_class' => 'menu-{menu slug}-container',
              'container_id'    => '',
              'menu_class'      => 'menu',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul>%3$s</ul>',
              'depth'           => 0,
              'walker'          => ''
              )
           );
   }

// Load HTML5 Blank scripts (header.php)
   function html5blank_header_scripts()
   {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!

		 wp_register_script('flslide', get_template_directory_uri() . '/flSlide/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('flslide'); // Enqueue it!
    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load HTML5 Blank styles
function html5blank_styles()
{
    //wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
   // wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('html5blank', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('html5blank'); // Enqueue it!

    wp_register_style('flslide', get_template_directory_uri() . '/flSlide/css/style.css', array(), '1.0', 'all');
	wp_enqueue_style('flslide'); // Enqueue it!
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
        ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
        ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
        ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');



// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
    ?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->

    <?php echo $tag ?>
    <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?>
    id="comment-
    <?php comment_ID() ?>
    ">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
        <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
        <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?> </div>
        <?php if ($comment->comment_approved == '0') : ?>
        <em class="comment-awaiting-moderation">
          <?php _e('Your comment is awaiting moderation.') ?>
      </em> <br />
  <?php endif; ?>
  <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
    <?php
    printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?>
</a>
<?php edit_comment_link(__('(Edit)'),'  ','' );
?>
</div>
<?php comment_text() ?>
<div class="reply">
    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
</div>
<?php if ( 'div' != $args['style'] ) : ?>
</div>
<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
    \*------------------------------------*/

// Add Actions
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu


add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
//add_action('init', 'create_post_type_gigs'); // Add our HTML5 Blank Custom Post Type
//add_action('init', 'create_post_type_video'); // Add our HTML5 Blank Custom Post Type
add_action('init', 'create_post_type_brands'); // Add our HTML5 Blank Custom Post Type
add_action('init', 'create_post_type_mainslider'); // Add our HTML5 Blank Custom Post Type

add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('html5_shortcode_demo', 'html5_shortcode_demo'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('html5_shortcode_demo_2', 'html5_shortcode_demo_2'); // Place [html5_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
    \*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank

    function create_post_type_html5()
    {
    register_taxonomy_for_object_type('category', 'client'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'client');
    register_post_type('client', // Register Custom Post Type
        array(
            'labels' => array(
            'name' => __('Clients', 'client'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
            ),
            'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
        ));
}


// Create 1 Custom Post type for a Demo, called HTML5-Blank
/*function create_post_type_gigs()
{
    register_taxonomy_for_object_type('gig', 'gig'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'gig');
    register_post_type('gig', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Gigs', 'gig'), // Rename these to suit
            'singular_name' => __('Gigs', 'gig'),
            'add_new' => __('Add New', 'Gig'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'Gig'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Gig Custom Post', 'Gig'),
            'new_item' => __('New Gig Custom Post', 'Gig'),
            'view' => __('View Gig Post', 'Gig'),
            'view_item' => __('View Gig Post', 'Gig'),
            'search_items' => __('Search Gig Post', 'Gig'),
            'not_found' => __('No Gig Posts found', 'Gig'),
            'not_found_in_trash' => __('No Gig Posts found in Trash', 'Gig')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
		'menu_icon' => 'dashicons-calendar',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}*/


// Create 1 Custom Post type for a Demo, called HTML5-Blank
/*function create_post_type_video()
{
    register_taxonomy_for_object_type('category', 'video', array('public'=>'false')); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'video');
    register_post_type('video', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Videos', 'video'), // Rename these to suit
            'singular_name' => __('Videos', 'video'),
            'add_new' => __('Add New', 'video'),
            'add_new_item' => __('Add New Video Post', 'video'),
            'edit' => __('Edit', 'video'),
            'edit_item' => __('Edit Video Post', 'Gig'),
            'new_item' => __('New Video Post', 'Gig'),
            'view' => __('View video Post', 'video'),
            'view_item' => __('View video Post', 'video'),
            'search_items' => __('Search video Post', 'video'),
            'not_found' => __('No video Posts found', 'video'),
            'not_found_in_trash' => __('No video Posts found in Trash', 'video')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
		'menu_icon' => 'dashicons-video-alt3',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}*/


// Create 1 Custom Post type for a Demo, called HTML5-Blank
/*function create_post_type_audio()
{
    register_taxonomy_for_object_type('category', 'audio'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'audio');
    register_post_type('audio', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Audio', 'audio'), // Rename these to suit
            'singular_name' => __('Audio', 'audio'),
            'add_new' => __('Add New', 'audio'),
            'add_new_item' => __('Add New Video Post', 'audio'),
            'edit' => __('Edit', 'audio'),
            'edit_item' => __('Edit audio Post', 'audio'),
            'new_item' => __('New audio Post', 'audio'),
            'view' => __('View audio Post', 'audio'),
            'view_item' => __('View audio Post', 'audio'),
            'search_items' => __('Search audio Post', 'audio'),
            'not_found' => __('No audio Posts found', 'audio'),
            'not_found_in_trash' => __('No audio Posts found in Trash', 'audio')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
		'menu_icon' => 'dashicons-controls-volumeon',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}*/



// Create main slider post type

function create_post_type_mainslider()
{
    register_taxonomy_for_object_type('category', 'slider'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'slider');
    register_post_type('slider', // Register Custom Post Type
        array(
            'labels' => array(
            'name' => __('Top Slider', 'slider'), // Rename these to suit
            'singular_name' => __('slider', 'slider'),
            'add_new' => __('Add New', 'slider'),
            'add_new_item' => __('Add New slider Post', 'slider'),
            'edit' => __('Edit', 'slider'),
            'edit_item' => __('Edit slider Post', 'slider'),
            'new_item' => __('New slider Post', 'slider'),
            'view' => __('View slider Post', 'slider'),
            'view_item' => __('View slider Post', 'slider'),
            'search_items' => __('Search slider Post', 'slider'),
            'not_found' => __('No slider Posts found', 'slider'),
            'not_found_in_trash' => __('No slider Posts found in Trash', 'slider')
            ),
            'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true // Allows export in Tools > Export
        /*'taxonomies' => array(
            'post_tag',
            'category'
			
        )*/ // Add Category and Post Tags support
        ));
}

function create_post_type_brands()
{
    register_taxonomy_for_object_type('category', 'brands'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'brands');
    register_post_type('brands', // Register Custom Post Type
        array(
            'labels' => array(
            'name' => __('Rides', 'brands'), // Rename these to suit
            'singular_name' => __('brands', 'brands'),
            'add_new' => __('Add New', 'Rides'),
            'add_new_item' => __('Add New brands Post', 'brands'),
            'edit' => __('Edit', 'brands'),
            'edit_item' => __('Edit Rides ', 'brands'),
            'new_item' => __('New Rides', 'brands'),
            'view' => __('View Rides', 'brands'),
            'view_item' => __('View Rides', 'brands'),
            'search_items' => __('Search Rides', 'brands'),
            'not_found' => __('No Rides found', 'brands'),
            'not_found_in_trash' => __('No Rides found in Trash', 'brands')
            ),
            'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'menu_icon' => 'dashicons-image-filter',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true // Allows export in Tools > Export
        /*'taxonomies' => array(
            'post_tag',
            'category'
			
        )*/ // Add Category and Post Tags support
        ));
}
function customer_name_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function customer_name_add_meta_box() {
	add_meta_box(
		'customer_name-customer-name',
		__( 'Customer Details and Travelling Details', 'customer_name' ),
		'customer_name_html',
		'brands',
		'normal',
		'default'
       );
}
add_action( 'add_meta_boxes', 'customer_name_add_meta_box' );

function customer_name_html( $post) {
	wp_nonce_field( '_customer_name_nonce', 'customer_name_nonce' ); ?>
    <p>
      <label for="customer_name_customer_name">
        <?php _e( 'Customer name', 'customer_name' ); ?>
    </label>
    <br>
    <input type="text" name="customer_name_customer_name" id="customer_name_customer_name" value="<?php echo customer_name_get_meta( 'customer_name_customer_name' ); ?>">
</p>
<p>
  <label for="customer_name_customer_email">
    <?php _e( 'Customer email', 'customer_name' ); ?>
</label>
<br>
<input type="text" name="customer_name_customer_email" id="customer_name_customer_email" value="<?php echo customer_name_get_meta( 'customer_name_customer_email' ); ?>">
</p>
<!--Add new field-->
<p>
  <label for="customer_name_customer_phone">
    <?php _e( 'Customer phone', 'customer_phone' ); ?>
</label>
<br>
<input type="text" name="customer_name_customer_phone" id="customer_name_customer_phone" value="<?php echo customer_name_get_meta( 'customer_name_customer_phone' ); ?>">
</p>
<!--------------->
<p>
  <label for="customer_name_date">
    <?php _e( 'Date', 'customer_name' ); ?>
</label>
<br>
<input type="text" name="customer_name_date" id="customer_name_date" value="<?php echo customer_name_get_meta( 'customer_name_date' ); ?>">
</p>
<p>
  <label for="customer_name_time">
    <?php _e( 'Time', 'customer_name' ); ?>
</label>
<br>
<input type="text" name="customer_name_time" id="customer_name_time" value="<?php echo customer_name_get_meta( 'customer_name_time' ); ?>">
</p>
<p>
  <label for="customer_name_pick_upup_address">
    <?php _e( 'pick_upup Address', 'customer_name' ); ?>
</label>
<br>
<input type="text" name="customer_name_pick_upup_address" id="customer_name_pick_upup_address" value="<?php echo customer_name_get_meta( 'customer_name_pick_upup_address' ); ?>">
</p>
<p>
  <label for="customer_name_drop_address">
    <?php _e( 'Drop Address', 'customer_name' ); ?>
</label>
<br>
<input type="text" name="customer_name_drop_address" id="customer_name_drop_address" value="<?php echo customer_name_get_meta( 'customer_name_drop_address' ); ?>">
</p>
<?php
}

function customer_name_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['customer_name_nonce'] ) || ! wp_verify_nonce( $_POST['customer_name_nonce'], '_customer_name_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['customer_name_customer_name'] ) )
		update_post_meta( $post_id, 'customer_name_customer_name', esc_attr( $_POST['customer_name_customer_name'] ) );
	if ( isset( $_POST['customer_name_customer_email'] ) )
		update_post_meta( $post_id, 'customer_name_customer_email', esc_attr( $_POST['customer_name_customer_email'] ) );
  if ( isset( $_POST['customer_name_customer_phone'] ) )
      update_post_meta( $post_id, 'customer_name_customer_phone', esc_attr( $_POST['customer_name_customer_phone'] ) );
  if ( isset( $_POST['customer_name_date'] ) )
      update_post_meta( $post_id, 'customer_name_date', esc_attr( $_POST['customer_name_date'] ) );
  if ( isset( $_POST['customer_name_time'] ) )
      update_post_meta( $post_id, 'customer_name_time', esc_attr( $_POST['customer_name_time'] ) );
  if ( isset( $_POST['customer_name_pick_upup_address'] ) )
      update_post_meta( $post_id, 'customer_name_pick_upup_address', esc_attr( $_POST['customer_name_pick_upup_address'] ) );
  if ( isset( $_POST['customer_name_drop_address'] ) )
      update_post_meta( $post_id, 'customer_name_drop_address', esc_attr( $_POST['customer_name_drop_address'] ) );
}
add_action( 'save_post', 'customer_name_save' );

function booking_price_and_travel_details_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function booking_price_and_travel_details_add_meta_box() {
	add_meta_box(
		'booking_price_and_travel_details-booking-price-and-travel-details',
		__( 'Booking Price and travel details', 'booking_price_and_travel_details' ),
		'booking_price_and_travel_details_html',
		'brands',
		'normal',
		'default'
       );
}
add_action( 'add_meta_boxes', 'booking_price_and_travel_details_add_meta_box' );

function booking_price_and_travel_details_html( $post) {
	wp_nonce_field( '_booking_price_and_travel_details_nonce', 'booking_price_and_travel_details_nonce' ); ?>

	<p>
		<label for="booking_price_and_travel_details_total_distance_in_km"><?php _e( 'Total distance in Km', 'booking_price_and_travel_details' ); ?></label><br>
		<input type="text" name="booking_price_and_travel_details_total_distance_in_km" id="booking_price_and_travel_details_total_distance_in_km" value="<?php echo booking_price_and_travel_details_get_meta( 'booking_price_and_travel_details_total_distance_in_km' ); ?>">
	</p>	<p>
  <label for="booking_price_and_travel_details_total_time_taken_in_min"><?php _e( 'Total time taken in min', 'booking_price_and_travel_details' ); ?></label><br>
  <input type="text" name="booking_price_and_travel_details_total_time_taken_in_min" id="booking_price_and_travel_details_total_time_taken_in_min" value="<?php echo booking_price_and_travel_details_get_meta( 'booking_price_and_travel_details_total_time_taken_in_min' ); ?>">
</p>	<p>
<label for="booking_price_and_travel_details_base_fare"><?php _e( 'Base fare', 'booking_price_and_travel_details' ); ?></label><br>
<input type="text" name="booking_price_and_travel_details_base_fare" id="booking_price_and_travel_details_base_fare" value="<?php echo booking_price_and_travel_details_get_meta( 'booking_price_and_travel_details_base_fare' ); ?>">
</p>	<p>
<label for="booking_price_and_travel_details_after_1st_tax"><?php _e( 'After 1st tax', 'booking_price_and_travel_details' ); ?></label><br>
<input type="text" name="booking_price_and_travel_details_after_1st_tax" id="booking_price_and_travel_details_after_1st_tax" value="<?php echo booking_price_and_travel_details_get_meta( 'booking_price_and_travel_details_after_1st_tax' ); ?>">
</p>	<p>
<label for="booking_price_and_travel_details_after_2nd_tax"><?php _e( 'After 2nd tax', 'booking_price_and_travel_details' ); ?></label><br>
<input type="text" name="booking_price_and_travel_details_after_2nd_tax" id="booking_price_and_travel_details_after_2nd_tax" value="<?php echo booking_price_and_travel_details_get_meta( 'booking_price_and_travel_details_after_2nd_tax' ); ?>">
</p><?php
}

function booking_price_and_travel_details_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['booking_price_and_travel_details_nonce'] ) || ! wp_verify_nonce( $_POST['booking_price_and_travel_details_nonce'], '_booking_price_and_travel_details_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['booking_price_and_travel_details_total_distance_in_km'] ) )
		update_post_meta( $post_id, 'booking_price_and_travel_details_total_distance_in_km', esc_attr( $_POST['booking_price_and_travel_details_total_distance_in_km'] ) );
	if ( isset( $_POST['booking_price_and_travel_details_total_time_taken_in_min'] ) )
		update_post_meta( $post_id, 'booking_price_and_travel_details_total_time_taken_in_min', esc_attr( $_POST['booking_price_and_travel_details_total_time_taken_in_min'] ) );
	if ( isset( $_POST['booking_price_and_travel_details_base_fare'] ) )
		update_post_meta( $post_id, 'booking_price_and_travel_details_base_fare', esc_attr( $_POST['booking_price_and_travel_details_base_fare'] ) );
	if ( isset( $_POST['booking_price_and_travel_details_after_1st_tax'] ) )
		update_post_meta( $post_id, 'booking_price_and_travel_details_after_1st_tax', esc_attr( $_POST['booking_price_and_travel_details_after_1st_tax'] ) );
	if ( isset( $_POST['booking_price_and_travel_details_after_2nd_tax'] ) )
		update_post_meta( $post_id, 'booking_price_and_travel_details_after_2nd_tax', esc_attr( $_POST['booking_price_and_travel_details_after_2nd_tax'] ) );
}
add_action( 'save_post', 'booking_price_and_travel_details_save' );

/*
	Usage: customer_name_get_meta( 'customer_name_customer_name' )
	Usage: customer_name_get_meta( 'customer_name_customer_email' )
	Usage: customer_name_get_meta( 'customer_name_date' )
	Usage: customer_name_get_meta( 'customer_name_time' )
	Usage: customer_name_get_meta( 'customer_name_pick_upup_address' )
	Usage: customer_name_get_meta( 'customer_name_drop_address' )
*/
/*------------------------------------*\
	ShortCode Functions
    \*------------------------------------*/

// Shortcode Demo with Nested Capability
    function html5_shortcode_demo($atts, $content = null)
    {
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
   add_post_type_support( 'page', 'excerpt' );
}

?>
<?php
function booking_address_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function booking_address_add_meta_box() {
	add_meta_box(
		'booking_address-booking-address',
		__( 'Booking Address', 'booking_address' ),
		'booking_address_html',
		'brands',
		'normal',
		'default'
       );
}
add_action( 'add_meta_boxes', 'booking_address_add_meta_box' );

function booking_address_html( $post) {
	wp_nonce_field( '_booking_address_nonce', 'booking_address_nonce' ); ?>
    <p>
      <label for="booking_address_book_person_name">
        <?php _e( 'Book person Name', 'booking_address' ); ?>
    </label>
    <br>
    <input type="text" name="booking_address_book_person_name" id="booking_address_book_person_name" value="<?php echo booking_address_get_meta( 'booking_address_book_person_name' ); ?>">
</p>
<p>
  <label for="booking_address_phone_no">
    <?php _e( 'Phone No', 'booking_address' ); ?>
</label>
<br>
<input type="text" name="booking_address_phone_no" id="booking_address_phone_no" value="<?php echo booking_address_get_meta( 'booking_address_phone_no' ); ?>">
</p>
<p>
  <label for="booking_address_email">
    <?php _e( 'Email', 'booking_address' ); ?>
</label>
<br>
<input type="text" name="booking_address_email" id="booking_address_email" value="<?php echo booking_address_get_meta( 'booking_address_email' ); ?>">
</p>
<?php
}

function booking_address_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['booking_address_nonce'] ) || ! wp_verify_nonce( $_POST['booking_address_nonce'], '_booking_address_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['booking_address_book_person_name'] ) )
		update_post_meta( $post_id, 'booking_address_book_person_name', esc_attr( $_POST['booking_address_book_person_name'] ) );
	if ( isset( $_POST['booking_address_phone_no'] ) )
		update_post_meta( $post_id, 'booking_address_phone_no', esc_attr( $_POST['booking_address_phone_no'] ) );
	if ( isset( $_POST['booking_address_email'] ) )
		update_post_meta( $post_id, 'booking_address_email', esc_attr( $_POST['booking_address_email'] ) );
}
add_action( 'save_post', 'booking_address_save' );

/*
	Usage: booking_address_get_meta( 'booking_address_book_person_name' )
	Usage: booking_address_get_meta( 'booking_address_phone_no' )
	Usage: booking_address_get_meta( 'booking_address_email' )
*/
    ?>
    <?php 
    function person_no_and_luggage_details_get_meta( $value ) {
       global $post;

       $field = get_post_meta( $post->ID, $value, true );
       if ( ! empty( $field ) ) {
          return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
      } else {
          return false;
      }
  }

  function person_no_and_luggage_details_add_meta_box() {
   add_meta_box(
      'person_no_and_luggage_details-person-no-and-luggage-details',
      __( 'Person no and luggage details', 'person_no_and_luggage_details' ),
      'person_no_and_luggage_details_html',
      'brands',
      'normal',
      'default'
      );
}
add_action( 'add_meta_boxes', 'person_no_and_luggage_details_add_meta_box' );

function person_no_and_luggage_details_html( $post) {
	wp_nonce_field( '_person_no_and_luggage_details_nonce', 'person_no_and_luggage_details_nonce' ); ?>
    <p>
      <label for="person_no_and_luggage_details_no_of_adults">
        <?php _e( 'No of Adults', 'person_no_and_luggage_details' ); ?>
    </label>
    <br>
    <input type="text" name="person_no_and_luggage_details_no_of_adults" id="person_no_and_luggage_details_no_of_adults" value="<?php echo person_no_and_luggage_details_get_meta( 'person_no_and_luggage_details_no_of_adults' ); ?>">
</p>
<p>
  <label for="person_no_and_luggage_details_no_of_children">
    <?php _e( 'No of Children', 'person_no_and_luggage_details' ); ?>
</label>
<br>
<input type="text" name="person_no_and_luggage_details_no_of_children" id="person_no_and_luggage_details_no_of_children" value="<?php echo person_no_and_luggage_details_get_meta( 'person_no_and_luggage_details_no_of_children' ); ?>">
</p>
<p>
  <label for="person_no_and_luggage_details_no_of_suitcase">
    <?php _e( 'No of Suitcase', 'person_no_and_luggage_details' ); ?>
</label>
<br>
<input type="text" name="person_no_and_luggage_details_no_of_suitcase" id="person_no_and_luggage_details_no_of_suitcase" value="<?php echo person_no_and_luggage_details_get_meta( 'person_no_and_luggage_details_no_of_suitcase' ); ?>">
</p>
<?php
}

function person_no_and_luggage_details_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['person_no_and_luggage_details_nonce'] ) || ! wp_verify_nonce( $_POST['person_no_and_luggage_details_nonce'], '_person_no_and_luggage_details_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['person_no_and_luggage_details_no_of_adults'] ) )
		update_post_meta( $post_id, 'person_no_and_luggage_details_no_of_adults', esc_attr( $_POST['person_no_and_luggage_details_no_of_adults'] ) );
	if ( isset( $_POST['person_no_and_luggage_details_no_of_children'] ) )
		update_post_meta( $post_id, 'person_no_and_luggage_details_no_of_children', esc_attr( $_POST['person_no_and_luggage_details_no_of_children'] ) );
	if ( isset( $_POST['person_no_and_luggage_details_no_of_suitcase'] ) )
		update_post_meta( $post_id, 'person_no_and_luggage_details_no_of_suitcase', esc_attr( $_POST['person_no_and_luggage_details_no_of_suitcase'] ) );
}
add_action( 'save_post', 'person_no_and_luggage_details_save' );


?>
<?php
function post_codes_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function post_codes_add_meta_box() {
	add_meta_box(
		'post_codes-post-codes',
		__( 'Post codes', 'post_codes' ),
		'post_codes_html',
		'brands',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'post_codes_add_meta_box' );

function post_codes_html( $post) {
	wp_nonce_field( '_post_codes_nonce', 'post_codes_nonce' ); ?>

	<p>
		<label for="post_codes_pickup_postcode"><?php _e( 'pickup postcode', 'post_codes' ); ?></label><br>
		<input type="text" name="post_codes_pickup_postcode" id="post_codes_pickup_postcode" value="<?php echo post_codes_get_meta( 'post_codes_pickup_postcode' ); ?>">
	</p>	<p>
		<label for="post_codes_dropoff_postcode"><?php _e( 'dropoff postcode', 'post_codes' ); ?></label><br>
		<input type="text" name="post_codes_dropoff_postcode" id="post_codes_dropoff_postcode" value="<?php echo post_codes_get_meta( 'post_codes_dropoff_postcode' ); ?>">
	</p><?php
}

function post_codes_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['post_codes_nonce'] ) || ! wp_verify_nonce( $_POST['post_codes_nonce'], '_post_codes_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['post_codes_pickup_postcode'] ) )
		update_post_meta( $post_id, 'post_codes_pickup_postcode', esc_attr( $_POST['post_codes_pickup_postcode'] ) );
	if ( isset( $_POST['post_codes_dropoff_postcode'] ) )
		update_post_meta( $post_id, 'post_codes_dropoff_postcode', esc_attr( $_POST['post_codes_dropoff_postcode'] ) );
}
add_action( 'save_post', 'post_codes_save' );


function invoice_id_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function invoice_id_add_meta_box() {
	add_meta_box(
		'invoice_id-invoice-id',
		__( 'Invoice id', 'invoice_id' ),
		'invoice_id_html',
		'brands',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'invoice_id_add_meta_box' );

function invoice_id_html( $post) {
	wp_nonce_field( '_invoice_id_nonce', 'invoice_id_nonce' ); ?>

	<p>
		<label for="invoice_id_invoice_id"><?php _e( 'invoice id', 'invoice_id' ); ?></label><br>
		<input type="text" name="invoice_id_invoice_id" id="invoice_id_invoice_id" value="<?php echo invoice_id_get_meta( 'invoice_id_invoice_id' ); ?>">
	</p>	<p>
		<label for="invoice_id_quatation_id"><?php _e( 'Quatation id', 'invoice_id' ); ?></label><br>
		<input type="text" name="invoice_id_quatation_id" id="invoice_id_quatation_id" value="<?php echo invoice_id_get_meta( 'invoice_id_quatation_id' ); ?>">
	</p><?php
}

function invoice_id_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['invoice_id_nonce'] ) || ! wp_verify_nonce( $_POST['invoice_id_nonce'], '_invoice_id_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['invoice_id_invoice_id'] ) )
		update_post_meta( $post_id, 'invoice_id_invoice_id', esc_attr( $_POST['invoice_id_invoice_id'] ) );
	if ( isset( $_POST['invoice_id_quatation_id'] ) )
		update_post_meta( $post_id, 'invoice_id_quatation_id', esc_attr( $_POST['invoice_id_quatation_id'] ) );
}
add_action( 'save_post', 'invoice_id_save' );

/*
	Usage: invoice_id_get_meta( 'invoice_id_invoice_id' )
	Usage: invoice_id_get_meta( 'invoice_id_quatation_id' )
*/


?>
<?php
add_action("wp_ajax_get_post_code", "get_post_code");
add_action("wp_ajax_nopriv_get_post_code", "get_post_code");

function get_post_code()
{
	$add  = $_REQUEST["location"];
	$add  = str_replace(" ","%20",$add);
	$urlmap ='http://maps.googleapis.com/maps/api/geocode/json?address='.$add.'&sensor=false';

	$data = file_get_contents($urlmap);
	$data=strtolower($data);
	$data = json_decode($data);



	foreach($data->results as $results)
	{

	foreach($results->address_components as $address_components)
	{
	// Check types is set then get first element (may want to loop through this to be safe,
	// rather than getting the first element all the time)
	if(isset($address_components->types) && $address_components->types[0] == 'country')
        {
                 $country = $address_components->long_name;    
                  
                  
            
        }
        if($country == "australia")
        {
			
	if(isset($address_components->types) && $address_components->types[0] == 'postal_code')
	{
		  echo $address_components->long_name;    // Do what you want with data here
			$someJSON = json_encode($address_components->long_name);
               
               exit();
	}
}
	}

	}
}
?>





<?php
add_action("wp_ajax_get_postal_code", "get_postal_code");
add_action("wp_ajax_nopriv_get_postal_code", "get_postal_code");

function get_postal_code()
{
   $from = $_REQUEST["location"];
   $to = $_REQUEST["end"];

   $drop = $_REQUEST["drop_off"];
   $pick = $_REQUEST["pickup"];

   $post_code = $_REQUEST['post_code'];
   $post_code2 = $_REQUEST['post_code2'];

   $name = $_REQUEST["name"];
   $email = $_REQUEST["email"];
   $psg_phone = $_REQUEST["psg_phone"];

   $date = $_REQUEST["date"];
   $time1 = $_REQUEST["time"];

   $time_person = $_REQUEST["time"];


   $book = $_REQUEST["book"];
   $email_bk = $_REQUEST["email_bk"];
   $phone = $_REQUEST["phone"];

   $people_no = $_REQUEST["people_no"];
   $suitcases_no = $_REQUEST["suitcases_no"];
   $child_no = $_REQUEST["child_no"];


   $car=$_REQUEST["car"];
   $car_type=$_REQUEST["car_type"];
   $type_services=$_REQUEST["type_services"];

   $to = str_replace(' ', '+', $to);
   $from = str_replace(' ', '+', $from);
   
   $ext_text = $_REQUEST["ext_text"];



   if( ($post_code=="3002" || $post_code2=="3002" )||( $post_code=="3004" || $post_code2=="3004") ||($post_code=="4101" || $post_code2=="4101" )|| ($post_code=="4169"||$post_code2=="4169") || ($post_code=="0815"||$post_code2=="0800" || $post_code=="0801"||$post_code2=="0820") || ($post_code=="6809"||$post_code2=="6000")||($post_code=="6001"||$post_code2=="7300"))
   {

    $someArray = [
    [
    "name"   => "Service only available in Sydney And Adeliade",
    "time" => "",
    "distance" => ""

    ],
    [
    "price"   => "",
    "cart" => ""
    ],
    [
    "name"   => "name",
    "gender" => "female"
    ]
    ];

  // Convert Array to JSON String
    $someJSON = json_encode($someArray);
    echo $someJSON;
//echo $data;

    exit();
}

$urlmap = 'http://maps.googleapis.com/maps/api/distancematrix/json?origins='.$from.'&destinations='.$to.'&language=en-EN&sensor=false';
$data = file_get_contents($urlmap);
$data = json_decode($data);
$time = 0;
$distance = 0;
foreach($data->rows[0]->elements as $road) 
{
    $time += $road->duration->text;
    $distance += $road->distance->text;
}

if($pick=="Sydney International Airport" || $pick=="Sydney Domestic Airport")
{
	
	$post_code = 2020;
}

if($drop=="Sydney International Airport" || $drop=="Sydney Domestic Airport")
{
	
	$post_code2 = 2020;
}

/* Code for Sydney starts*/ 

/*If The pick Up Address Is Sydney International Airport And The Drop off address is Syndey City */

if($pick=="Sydney International Airport" && $drop=="Sydney City")
{  
	/*If post codes are blank*/
	if($post_code2=='')
	{
		echo "enter your postcode";
		exit();
	}
	/*If phone numbers are blank*/
	if($psg_phone == '' || $phone == '')
	{
		echo "enter your phone numbers";
		exit();
	}
	
 $pick="Sydney+NSW+2020,+Australia";
 $urlmap = 'http://maps.googleapis.com/maps/api/distancematrix/json?origins='.$pick.'&destinations='.$to.'&language=en-EN&sensor=false';
 $data = file_get_contents($urlmap);
 $data=strtolower($data);
 $data = json_decode($data);
 /*Distance and time to be calculated here*/
 
 $pick_data = "Sydney International Airport";/*Pick up address original name*/

 if($post_code=="2000" || $post_code2=="2000") /*Check the post codes are between sydney cbd or not*/
 {
    $time = 0;
    $distance = 0;
    foreach($data->rows[0]->elements as $road) 
        {
            $time += $road->duration->value;
            $distance += $road->distance->value;
        }
        $time = $time/60; // time is calcutaled in min
		$time = explode('.',$time);
		$time = $time[0]+1; // add 1 extra min
		$distance = $distance/1000; // distance calculated in km
		$distance = explode('.',$distance);
		$distance = $distance[0]+1;// add 1 extra in km
        $base_fare = 88;
        $base_fare_org = $base_fare;
        $base_fare1 = 9;
        $base_fare2 =9;
        //$base_fare = ($base_fare*1.1);/*Base fare calculation*/
        $base_fare_final = $base_fare+$base_fare1+$base_fare2;
        $text = " Base fare is :$";/*Fare Text*/
        $data = $text.$base_fare_without_card_charge;/*Assign To the data variable*/

        $time1=" Time is :";/*Time text*/
        $min="min";/*Time calculation in min*/
        $time_new = $time1.$time." ".$min;/*Total time marged in a text mood*/

		$to=str_replace("+"," ",$to);
		$pick_new=$to."(".$pick.")" ;
		$distance_new=" Distance is :".$distance." km";
		$post_type = 'brands';
		$custom_field_1 = "Sydney International Airport";
		$custom_field_2 = $drop;    
		$custom_field_3 = $email;

		$custom_field_4 = $time_person;
		$custom_field_5 = $date;    
		$custom_field_6 = $name;

		$custom_field_7 = $book;
		$custom_field_8 = $email_bk;    
		$custom_field_9 = $phone;

		$custom_field_10 = $people_no;
		$custom_field_11 = $suitcases_no;    
		$custom_field_12 = $child_no;
		$custom_field_13 =$psg_phone;
		$postname=$name.'('.$email.')';
		$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;
		
			    //the array of arguements to be inserted with wp_insert_post
    $new_post = array(
        'post_title'    => $postname,
        'post_status'   => 'publish',          
        'post_type'     => $post_type 
        );

						//insert the the post into database by passing $new_post to wp_insert_post
						//store our post ID in a variable $pid
    $pid = wp_insert_post($new_post);

						//we now use $pid (post id) to help add out post meta data
    add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
    add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
    add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

    add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
    add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
    add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

    add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
    add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
    add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

    add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
    add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
    add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
    add_post_meta($pid, 'customer_name_customer_phone', $custom_field_13, true);

	add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
	add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
	add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
	add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
	add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
	add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
	add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);

	
	
	
	
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);
	
	
   
    $to=str_replace("+"," ",$to);
        $cart_fare = $base_fare_final;
        $drop="Sydney International Airport"; 
        $item_name = "Sydney International Airport to".$to;
        $item_name_mail = "Sydney International Airport to".$to;
		$item_name = $item_name."###ADE-".$pid;
		$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');

    $someArray = [
    [
    "base_fare"   => $data,
    "time" => $time_new,
    "distance" => $distance_new

    ],
    [
    "price"   => $base_fare,
    "cart" => $add_cart
    ],
    [
    "pid"   => $pid,
    ]
    ];
				 // Convert Array to JSON String
    $someJSON = json_encode($someArray);
    echo $someJSON;
    
    $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
    
    exit();	 	


		  }// end of sydney cbd
		  else 
            {  $time = 0;
                $distance = 0;
                foreach($data->rows[0]->elements as $road) 
                {
                   $time += $road->duration->value;
                    $distance += $road->distance->value;
                }
                $time = $time/60; // time is calcutaled in min
                $time = explode('.',$time);
                $time = $time[0]+1; // add 1 extra min
                $distance = $distance/1000; // distance calculated in km
                $distance = explode('.',$distance);
                $distance = $distance[0]+1;// add 1 extra in km
                $time1=" Time is :";
                $min="min";
                $time_new = $time1.$time." ".$min; // time text
                $dn= $distance;
		        $base_fare = ($dn * 2.15)+($time * 0.50) + 9;
                $base_fare = explode('.',$base_fare);
				$base_fare = $base_fare[0]+1;// actual base fare with out any point
				$base_fare_org = $base_fare;// assign into new variable
				
				$base_fare1 = $base_fare*.1;// after gst
				$base_fare1 = explode('.',$base_fare1);
				$base_fare1 = $base_fare1[0]+1;// gst 1 added
				
				
				$base_fare2 = $base_fare*.1; // 2nd tax
				$base_fare2 = explode('.',$base_fare2);
				$base_fare2 = $base_fare2[0]+1;// 1 added
                
                $base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1; // total fare
                
                $cart_fare = $base_fare_final; // add to cart variable

                $pick="Sydney International Airport";
                $to=str_replace("+"," ",$to);

                

               
							//echo  " Total fare: $".($base_fare);

                if($base_fare <= "20")
                {
                   $data=20;
                   $cart_fare = 20;
                   $base_fare_org = 20;
                   $base_fare1 = $base_fare_org*.1;
				   $base_fare2 = $base_fare_org*.1;
                   $base_fare_final = ($base_fare_org * 1.2);
                   
                   $data="Base fare is :$".$data;
                   $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$base_fare_final.'" description="'.$pid.'"]');
               }


               $data = "Base fare is :$".$base_fare_without_card_charge;


               $text2="Distance is :";
               $km="km";

               $distance_new = $text2.$distance." ".$km;

               $title     = "Test";

               $post_type = 'brands';
               
               $custom_field_1 = "Sydney International Airport";
               $custom_field_2 = $to;    
               $custom_field_3 = $email;

               $custom_field_4 = $time_person;
               $custom_field_5 = $date;    
               $custom_field_6 = $name;

               $custom_field_7 = $book;
               $custom_field_8 = $email_bk;    
               $custom_field_9 = $phone;

               $custom_field_10 = $people_no;
               $custom_field_11 = $suitcases_no;    
               $custom_field_12 = $child_no;

               $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

							//the array of arguements to be inserted with wp_insert_post
               $new_post = array(
                 'post_title'    => $postname,

                 'post_status'   => 'publish',          
                 'post_type'     => $post_type 
                 );

							//insert the the post into database by passing $new_post to wp_insert_post
							//store our post ID in a variable $pid
               $pid = wp_insert_post($new_post);

							//we now use $pid (post id) to help add out post meta data
               add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
               add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
               add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

               add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
               add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
               add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

               add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
               add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
               add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

               add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
               add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
               add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
               
               add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare1, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
				add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
				
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

				$item_name = $pick."to ".$to;
				$item_name_mail = $pick."to ".$to;
                $item_name = $item_name."###ADE-".$pid;
                $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');
                
               $someArray = [
               [
               "base_fare"   => $data,
               "time" => $time_new,
               "distance" => $distance_new

               ],
               [
               "price"   => $base_fare,
               "cart" => $add_cart
               ],
               [
               "pid"   => $pid,
               "gender" => "female"
               ]
               ];

							  // Convert Array to JSON String
               $someJSON = json_encode($someArray);
               echo $someJSON;
               
               $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;
;
    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;
;
    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
							//echo $data;
               exit();



           }

	 }// end for international airport to sydney city

   /*If The pick up is Sydney City and drop off is Sydney International Airport*/

   if($drop=="Sydney International Airport" && $pick=="Sydney City")
   {
	   if($post_code=='')
	{
		echo "enter your postcode";
		exit();
	}
	/*If phone numbers are blank*/
	if($psg_phone == '' || $phone == '')
	{
		echo "enter your phone numbers";
		exit();
	}
     $drop="Sydney+NSW+2020,+Australia";
     $urlmap = 'http://maps.googleapis.com/maps/api/distancematrix/json?origins='.$from.'&destinations='.$drop.'&language=en-EN&sensor=true';
     $data = file_get_contents($urlmap);
     $data=strtolower($data);
     $data = json_decode($data);
     /*Distance and time to be calculated here*/


     if($post_code=="2000" || $post_code2=="2000")
     {
        $time = 0;
        $distance = 0;
        foreach($data->rows[0]->elements as $road) 
        {
            $time += $road->duration->value;
            $distance += $road->distance->value;
        }
        $time = $time/60; // time is calcutaled in min
		$time = explode('.',$time);
		$time = $time[0]+1; // add 1 extra min
		$distance = $distance/1000; // distance calculated in km
		$distance = explode('.',$distance);
		$distance = $distance[0]+1;// add 1 extra in km
        $base_fare = 88;
        $base_fare_org = $base_fare;
        $base_fare1 = 9;
        $base_fare2 =9;
        //$base_fare = ($base_fare*1.1);/*Base fare calculation*/
        $base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
        $text = " Base fare is :$";/*Fare Text*/
        $data = $text.$base_fare_without_card_charge;/*Assign To the data variable*/

        $time1=" Time is :";/*Time text*/
        $min="min";/*Time calculation in min*/
        $time_new = $time1.$time." ".$min;/*Total time marged in a text mood*/

        //$from=str_replace("+"," ",$from);
        $drop=$from."(".$drop.")" ;
        $distance_new=" Distance is :".$distance." km";
        $post_type = 'brands';
        $drop1= "Sydney International Airport";
        $custom_field_1 = $from;
        $custom_field_2 = $drop1;    
        $custom_field_3 = $email;

        $custom_field_4 = $time_person;
        $custom_field_5 = $date;    
        $custom_field_6 = $name;

        $custom_field_7 = $book;
        $custom_field_8 = $email_bk;    
        $custom_field_9 = $phone;

        $custom_field_10 = $people_no;
        $custom_field_11 = $suitcases_no;    
        $custom_field_12 = $child_no;
        $custom_field_13 =$psg_phone;
        $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

			    //the array of arguements to be inserted with wp_insert_post
        $new_post = array(
            'post_title'    => $postname,
            'post_status'   => 'publish',          
            'post_type'     => $post_type 
            );

						//insert the the post into database by passing $new_post to wp_insert_post
						//store our post ID in a variable $pid
        $pid = wp_insert_post($new_post);

						//we now use $pid (post id) to help add out post meta data
        add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
        add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
        add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

        add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
        add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
        add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

        add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
        add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
        add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

        add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
        add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
        add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
        add_post_meta($pid, 'customer_name_customer_phone', $custom_field_13, true);
        
        add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
		add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
		add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
		add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
		add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
		add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
		
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        $from=str_replace("+"," ",$from);
        $cart_fare = $base_fare_final;
        $drop="Sydney International Airport"; 
        $item_name = $from."to ".$drop;
        $item_name_mail = $from."to ".$drop;
		$item_name = $item_name."###ADE-".$pid;
		$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');
        $someArray = [
        [
        "base_fare"   => $data,
        "time" => $time_new,
        "distance" => $distance_new

        ],
        [
        "price"   => $base_fare,
        "cart" => $add_cart
        ],
        [
        "pid"   => $pid,
        ]
        ];
				 // Convert Array to JSON String
        $someJSON = json_encode($someArray);
        echo $someJSON;
        $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
        exit();	 	


		  }// end of sydney cbd
		  else
            {  $time = 0;
                $distance = 0;
			foreach($data->rows[0]->elements as $road) 
			{
				$time += $road->duration->value;
				$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$time1=" Time is :";
			$min="min";
			$time_new = $time1.$time." ".$min; // time text
			$dn= $distance;
			$base_fare = ($dn * 2.15)+($time * 0.50) + 9;
			$base_fare = explode('.',$base_fare);
			$base_fare = $base_fare[0]+1;// actual base fare with out any point
			$base_fare_org = $base_fare;// assign into new variable

			$base_fare1 = $base_fare*.1;// after gst
			$base_fare1 = explode('.',$base_fare1);
			$base_fare1 = $base_fare1[0]+1;// gst 1 added


			$base_fare2 = $base_fare*.1; // 2nd tax
			$base_fare2 = explode('.',$base_fare2);
			$base_fare2 = $base_fare2[0]+1;// 1 added

			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1; // total fare

			$cart_fare = $base_fare_final; // add to cart variable

                $drop="Sydney International Airport";
                $from=str_replace("+"," ",$from);

               
							//echo  " Total fare: $".($base_fare);
				if($base_fare <= "20")
				{
				   $data=20;
				   $cart_fare = 20;
				   $base_fare_org = 20;
				   $base_fare1 = $base_fare_org*.1;
				   $base_fare2 = $base_fare_org*.1;
				   $base_fare_final = ($base_fare_org * 1.2);
				   
				   $data="Base fare is :$".$data;
				   $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$base_fare_final.'" description="'.$pid.'"]');
				}


               $data = "Base fare is :$".$base_fare_without_card_charge;


               $text2="Distance is :";
               $km="km";

               $distance_new = $text2.$distance." ".$km;

               $title     = "Test";

               $post_type = 'brands';
               $custom_field_1 = $from;
               $custom_field_2 = $drop;    
               $custom_field_3 = $email;

               $custom_field_4 = $time_person;
               $custom_field_5 = $date;    
               $custom_field_6 = $name;

               $custom_field_7 = $book;
               $custom_field_8 = $email_bk;    
               $custom_field_9 = $phone;

               $custom_field_10 = $people_no;
               $custom_field_11 = $suitcases_no;    
               $custom_field_12 = $child_no;

               $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

							//the array of arguements to be inserted with wp_insert_post
               $new_post = array(
                 'post_title'    => $postname,

                 'post_status'   => 'publish',          
                 'post_type'     => $post_type 
                 );

							//insert the the post into database by passing $new_post to wp_insert_post
							//store our post ID in a variable $pid
               $pid = wp_insert_post($new_post);

							//we now use $pid (post id) to help add out post meta data
               add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
               add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
               add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

               add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
               add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
               add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

               add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
               add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
               add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

               add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
               add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
               add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
               
               add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
				add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
				
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);
				$from=str_replace("+"," ",$from);
				$item_name = $from." to Sydney International Airport";
				$item_name_mail = $from." to Sydney International Airport";
				$item_name = $item_name."###ADE-".$pid;
				$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');

               $someArray = [
               [
               "base_fare"   => $data,
               "time" => $time_new,
               "distance" => $distance_new

               ],
               [
               "price"   => $base_fare,
               "cart" => $add_cart
               ],
               [
               "pid"   => $pid,
               "gender" => "female"
               ]
               ];

							  // Convert Array to JSON String
               $someJSON = json_encode($someArray);
               echo $someJSON;
               
               $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
							//echo $data;
               exit();



           }

	  }// end of sydney city to sydney international airport

      /*The pick_up is Sydney Domestic Airport and the drop off is Syndey CBD */
      if($pick=="Sydney Domestic Airport" && $drop=="Sydney City")
      {
			if($post_code2=='')
			{
				echo "enter your postcode";
				exit();
			}
			/*If phone numbers are blank*/
			if($psg_phone == '' || $phone == '')
			{
			echo "enter your phone numbers";
			exit();
			}
          $pick="Sydney+NSW+2020,+Australia";
          $urlmap = 'http://maps.googleapis.com/maps/api/distancematrix/json?origins='.$pick.'&destinations='.$to.'&language=en-EN&sensor=false';
          $data = file_get_contents($urlmap);
          $data=strtolower($data);
          $data = json_decode($data);
          /*Distance and time to be calculated here*/
			$to_new=str_replace("+"," ",$to);

          if($post_code=="2000" || $post_code2=="2000")
          {
            $time = 0;
            $distance = 0;
			foreach($data->rows[0]->elements as $road) 
			{
			$time += $road->duration->value;
			$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$base_fare = 80;
			$base_fare_org = $base_fare;
			$base_fare1 = 8;
			$base_fare2 =8;
			//$base_fare = ($base_fare*1.1);/*Base fare calculation*/
			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
			$text = " Base fare is :$";/*Fare Text*/
			$data = $text.$base_fare_without_card_charge;/*Assign To the data variable*/

			$time1=" Time is :";/*Time text*/
			$min="min";/*Time calculation in min*/
			$time_new = $time1.$time." ".$min;/*Total time marged in a text mood*/
			
			$to_new=str_replace("+"," ",$to);
			//$drop=$from."(".$drop.")" ;
			$distance_new=" Distance is :".$distance." km";
			$post_type = 'brands';
            $custom_field_1 = "Sydney Domestic Airport";
            $custom_field_2 = $to_new;    
            $custom_field_3 = $email;

            $custom_field_4 = $time_person;
            $custom_field_5 = $date;    
            $custom_field_6 = $name;

            $custom_field_7 = $book;
            $custom_field_8 = $email_bk;    
            $custom_field_9 = $phone;

            $custom_field_10 = $people_no;
            $custom_field_11 = $suitcases_no;    
            $custom_field_12 = $child_no;
            $custom_field_13 =$psg_phone;
            $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

			    //the array of arguements to be inserted with wp_insert_post
            $new_post = array(
                'post_title'    => $postname,
                'post_status'   => 'publish',          
                'post_type'     => $post_type 
                );

						//insert the the post into database by passing $new_post to wp_insert_post
						//store our post ID in a variable $pid
            $pid = wp_insert_post($new_post);

						//we now use $pid (post id) to help add out post meta data
            add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
            add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
            add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

            add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
            add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
            add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

            add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
            add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
            add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

            add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
            add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
            add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
            add_post_meta($pid, 'customer_name_customer_phone', $custom_field_13, true);

			add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
			add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
			add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
			add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
			add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
			add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
			
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        
			$cart_fare = $base_fare_final;
			$pick="Sydney Domestic Airport"; 
			$item_name = "Sydney Domestic Airport to ".$to_new;
			$item_name_mail = "Sydney Domestic Airport to ".$to_new;
            $item_name = $item_name."###ADE-".$pid;
			$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');
            $someArray = [
            [
            "base_fare"   => $data,
            "time" => $time_new,
            "distance" => $distance_new

            ],
            [
            "price"   => $base_fare,
            "cart" => $add_cart
            ],
            [
            "pid"   => $pid,
            ]
            ];
				 // Convert Array to JSON String
            $someJSON = json_encode($someArray);
            echo $someJSON;
            $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
            exit();	 	


		  }// end of sydney cbd
		  else 
            {  $time = 0;
                $distance = 0;
                foreach($data->rows[0]->elements as $road) 
			{
				$time += $road->duration->value;
				$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$time1=" Time is :";
			$min="min";
			$time_new = $time1.$time." ".$min; // time text
			$dn= $distance;
			$base_fare = ($dn * 2.15)+($time * 0.50) + 9;
			$base_fare = explode('.',$base_fare);
			$base_fare = $base_fare[0]+1;// actual base fare with out any point
			$base_fare_org = $base_fare;// assign into new variable

			$base_fare1 = $base_fare*.1;// after gst
			$base_fare1 = explode('.',$base_fare1);
			$base_fare1 = $base_fare1[0]+1;// gst 1 added


			$base_fare2 = $base_fare*.1; // 2nd tax
			$base_fare2 = explode('.',$base_fare2);
			$base_fare2 = $base_fare2[0]+1;// 1 added

			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1; // total fare

			$cart_fare = $base_fare_final; // add to cart variable

                $pick="Sydney Domestic Airport";
                $to_new=str_replace("+"," ",$to);

               
							//echo  " Total fare: $".($base_fare);
				if($base_fare <= "20")
				{
				   $data=20;
				   $cart_fare = 20;
				   $base_fare_org = 20;
				   $base_fare1 = $base_fare_org*.1;
				   $base_fare2 = $base_fare_org*.1;
				   $base_fare_final = ($base_fare_org * 1.2);
				   
				   $data="Base fare is :$".$data;
				   $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$base_fare_final.'" description="'.$pid.'"]');
				}


               $data = "Base fare is :$".$base_fare_without_card_charge;


               $text2="Distance is :";
               $km="km";

               $distance_new = $text2.$distance." ".$km;

               $title     = "Test";

               $post_type = 'brands';
               $custom_field_1 = $pick;
               $custom_field_2 = $to_new;    
               $custom_field_3 = $email;

               $custom_field_4 = $time_person;
               $custom_field_5 = $date;    
               $custom_field_6 = $name;

               $custom_field_7 = $book;
               $custom_field_8 = $email_bk;    
               $custom_field_9 = $phone;

               $custom_field_10 = $people_no;
               $custom_field_11 = $suitcases_no;    
               $custom_field_12 = $child_no;

               $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

							//the array of arguements to be inserted with wp_insert_post
               $new_post = array(
                 'post_title'    => $postname,

                 'post_status'   => 'publish',          
                 'post_type'     => $post_type 
                 );

							//insert the the post into database by passing $new_post to wp_insert_post
							//store our post ID in a variable $pid
               $pid = wp_insert_post($new_post);

							//we now use $pid (post id) to help add out post meta data
               add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
               add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
               add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

               add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
               add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
               add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

               add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
               add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
               add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

               add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
               add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
               add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
				
			   add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
			   add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
				add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
				
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);
			
				$item_name = "Sydney Domestic Airport to ".$to_new;
				$item_name_mail = "Sydney Domestic Airport to ".$to_new;
				$item_name = $item_name."###ADE-".$pid;
				$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');

               $someArray = [
               [
               "base_fare"   => $data,
               "time" => $time_new,
               "distance" => $distance_new

               ],
               [
               "price"   => $base_fare,
               "cart" => $add_cart
               ],
               [
               "pid"   => $pid,
               "gender" => "female"
               ]
               ];

							  // Convert Array to JSON String
               $someJSON = json_encode($someArray);
               echo $someJSON;
               $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;
;
    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;
;
    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
							//echo $data;
               exit();



           }

	}// end for international airport to sydney city

	/****Pick up is from Sydney CBD and drop off is Sydney Domestic Airport****/
	if($drop=="Sydney Domestic Airport" && $pick=="Sydney City")
  {
	  if($post_code=='')
			{
				echo "enter your postcode";
				exit();
			}
			/*If phone numbers are blank*/
			if($psg_phone == '' || $phone == '')
			{
			echo "enter your phone numbers";
			exit();
			}
	  
    $drop="Sydney+NSW+2020,+Australia";
    $urlmap = 'http://maps.googleapis.com/maps/api/distancematrix/json?origins='.$from.'&destinations='.$drop.'&language=en-EN&sensor=true';
    $data = file_get_contents($urlmap);
    $data=strtolower($data);
    $data = json_decode($data);
    /*Distance and time to be calculated here*/
    if($post_code=="2000" || $post_code2=="2000")
    {
        $time = 0;
        $distance = 0;
        foreach($data->rows[0]->elements as $road) 
			{
			$time += $road->duration->value;
			$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$base_fare = 80;
			$base_fare_org = $base_fare;
			$base_fare1 = 8;
			$base_fare2 =8;
			//$base_fare = ($base_fare*1.1);/*Base fare calculation*/
			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
			$text = " Base fare is :$";/*Fare Text*/
			$data = $text.$base_fare_without_card_charge;/*Assign To the data variable*/

			$time1=" Time is :";/*Time text*/
			$min="min";/*Time calculation in min*/
			$time_new = $time1.$time." ".$min;/*Total time marged in a text mood*/
			
			$to_new=str_replace("+"," ",$to);
			//$drop=$from."(".$drop.")" ;
			$distance_new=" Distance is :".$distance." km";
			$from_new=str_replace("+"," ",$from);
        $post_type = 'brands';
        $custom_field_1 = $from_new;
        $custom_field_2 = "Sydney Domestic Airport";    
        $custom_field_3 = $email;

        $custom_field_4 = $time_person;
        $custom_field_5 = $date;    
        $custom_field_6 = $name;

        $custom_field_7 = $book;
        $custom_field_8 = $email_bk;    
        $custom_field_9 = $phone;

        $custom_field_10 = $people_no;
        $custom_field_11 = $suitcases_no;    
        $custom_field_12 = $child_no;
        $custom_field_13 =$psg_phone;
        $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

			    //the array of arguements to be inserted with wp_insert_post
        $new_post = array(
            'post_title'    => $postname,
            'post_status'   => 'publish',          
            'post_type'     => $post_type 
            );

						//insert the the post into database by passing $new_post to wp_insert_post
						//store our post ID in a variable $pid
        $pid = wp_insert_post($new_post);

						//we now use $pid (post id) to help add out post meta data
        add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
        add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
        add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

        add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
        add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
        add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

        add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
        add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
        add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

        add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
        add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
        add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
        add_post_meta($pid, 'customer_name_customer_phone', $custom_field_13, true);
		
		add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
		add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
		add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
		add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
		add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
		add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
		
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        
			$cart_fare = $base_fare_final;
			$drop="Sydney Domestic Airport"; 
			$item_name = $from_new." to Sydney Domestic Airport";
			$item_name_mail = $from_new." to Sydney Domestic Airport";
            $item_name = $item_name."###ADE-".$pid;
			$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');
			
        
        $someArray = [
        [
        "base_fare"   => $data,
        "time" => $time_new,
        "distance" => $distance_new

        ],
        [
        "price"   => $base_fare,
        "cart" => $add_cart
        ],
        [
        "pid"   => $pid,
        ]
        ];
				 // Convert Array to JSON String
        $someJSON = json_encode($someArray);
        echo $someJSON;
        $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
        exit();	 	


    }
    $time = 0;
    $distance = 0;
      foreach($data->rows[0]->elements as $road) 
			{
				$time += $road->duration->value;
				$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$time1=" Time is :";
			$min="min";
			$time_new = $time1.$time." ".$min; // time text
			$dn= $distance;
			$base_fare = ($dn * 2.15)+($time * 0.50) + 9;
			$base_fare = explode('.',$base_fare);
			$base_fare = $base_fare[0]+1;// actual base fare with out any point
			$base_fare_org = $base_fare;// assign into new variable

			$base_fare1 = $base_fare*.1;// after gst
			$base_fare1 = explode('.',$base_fare1);
			$base_fare1 = $base_fare1[0]+1;// gst 1 added


			$base_fare2 = $base_fare*.1; // 2nd tax
			$base_fare2 = explode('.',$base_fare2);
			$base_fare2 = $base_fare2[0]+1;// 1 added

			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
$base_fare_without_card_charge = $base_fare+$base_fare1; // total fare

			$cart_fare = $base_fare_final; // add to cart variable

                
                $from_new=str_replace("+"," ",$from);

               
							//echo  " Total fare: $".($base_fare);
				if($base_fare <= "20")
				{
				   $data=20;
				   $cart_fare = 20;
				   $base_fare_org = 20;
				   $base_fare1 = $base_fare_org*.1;
				   $base_fare2 = $base_fare_org*.1;
				   $base_fare_final = ($base_fare_org * 1.2);
				   
				   $data="Base fare is :$".$data;
				   $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$base_fare_final.'" description="'.$pid.'"]');
				}


               $data = "Base fare is :$".$base_fare_without_card_charge;


               $text2="Distance is :";
               $km="km";

               $distance_new = $text2.$distance." ".$km;

     $title     = "Test";

   $post_type = 'brands';
   $custom_field_1 = $from_new;
   $custom_field_2 = "Sydney Domestic Airport";    
   $custom_field_3 = $email;

   $custom_field_4 = $time_person;
   $custom_field_5 = $date;    
   $custom_field_6 = $name;

   $custom_field_7 = $book;
   $custom_field_8 = $email_bk;    
   $custom_field_9 = $phone;

   $custom_field_10 = $people_no;
   $custom_field_11 = $suitcases_no;    
   $custom_field_12 = $child_no;

   $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

							//the array of arguements to be inserted with wp_insert_post
   $new_post = array(
     'post_title'    => $postname,

     'post_status'   => 'publish',          
     'post_type'     => $post_type 
     );

							//insert the the post into database by passing $new_post to wp_insert_post
							//store our post ID in a variable $pid
   $pid = wp_insert_post($new_post);

							//we now use $pid (post id) to help add out post meta data
   add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
   add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
   add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

   add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
   add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
   add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

   add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
   add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
   add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

   add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
   add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
   add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
	
	add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
	add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
	add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
	add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
	add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
	add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
	
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        
			$cart_fare = $base_fare_final;
			
			$item_name = $from_new." to Sydney Domestic Airport";
			$item_name_mail = $from_new." to Sydney Domestic Airport";
            $item_name = $item_name."###ADE-".$pid;
			$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');
	

   $someArray = [
   [
   "base_fare"   => $data,
   "time" => $time_new,
   "distance" => $distance_new

   ],
   [
   "price"   => $base_fare,
   "cart" => $add_cart
   ],
   [
   "pid"   => $pid,
   "gender" => "female"
   ]
   ];

							  // Convert Array to JSON String
   $someJSON = json_encode($someArray);
   echo $someJSON;
   $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
							//echo $data;
   exit();




}

/*The pick_up is Syndey CBD and the drop off is Syndey CBD */
if($pick=="Sydney City" || $drop=="Sydney City")
{
  $urlmap = 'http://maps.googleapis.com/maps/api/distancematrix/json?origins='.$to.'&destinations='.$from.'&language=en-EN&sensor=false';
  $data = file_get_contents($urlmap);
  $data=strtolower($data);
  $data = json_decode($data);



  /*Distance and time to be calculated here*/
  $time = 0;
  $distance = 0;
   foreach($data->rows[0]->elements as $road) 
			{
				$time += $road->duration->value;
				$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$time1=" Time is :";
			$min="min";
			$time_new = $time1.$time." ".$min; // time text
			$dn= $distance;
			$base_fare = ($dn * 2.15)+($time * 0.50) + 9;
			$base_fare = explode('.',$base_fare);
			$base_fare = $base_fare[0]+1;// actual base fare with out any point
			$base_fare_org = $base_fare;// assign into new variable

			$base_fare1 = $base_fare*.1;// after gst
			$base_fare1 = explode('.',$base_fare1);
			$base_fare1 = $base_fare1[0]+1;// gst 1 added


			$base_fare2 = $base_fare*.1; // 2nd tax
			$base_fare2 = explode('.',$base_fare2);
			$base_fare2 = $base_fare2[0]+1;// 1 added

			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
$base_fare_without_card_charge = $base_fare+$base_fare1; // total fare

			$cart_fare = $base_fare_final; // add to cart variable

                
                $from_new=str_replace("+"," ",$from);
                $to_new=str_replace("+"," ",$to);

               
							//echo  " Total fare: $".($base_fare);
				if($base_fare <= "20")
				{
				   $data=20;
				   $cart_fare = 20;
				   $base_fare_org = 20;
				   $base_fare1 = $base_fare_org*.1;
				   $base_fare2 = $base_fare_org*.1;
				   $base_fare_final = ($base_fare_org * 1.2);
				   
				   $data="Base fare is :$".$data;
				   $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$base_fare_final.'" description="'.$pid.'"]');
				}


               $data = "Base fare is :$".$base_fare_without_card_charge;


               $text2="Distance is :";
               $km="km";

               $distance_new = $text2.$distance." ".$km;

$title     = "Test";

$post_type = 'brands';
$custom_field_1 = $from_new;
$custom_field_2 = $to_new;    
$custom_field_3 = $email;

$custom_field_4 = $time_person;
$custom_field_5 = $date;    
$custom_field_6 = $name;

$custom_field_7 = $book;
$custom_field_8 = $email_bk;    
$custom_field_9 = $phone;

$custom_field_10 = $people_no;
$custom_field_11 = $suitcases_no;    
$custom_field_12 = $child_no;

$postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

							//the array of arguements to be inserted with wp_insert_post
$new_post = array(
 'post_title'    => $postname,

 'post_status'   => 'publish',          
 'post_type'     => $post_type 
 );

							//insert the the post into database by passing $new_post to wp_insert_post
							//store our post ID in a variable $pid
$pid = wp_insert_post($new_post);

							//we now use $pid (post id) to help add out post meta data
add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);

add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);

$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        
			$cart_fare = $base_fare_final;
			
			$item_name = $from_new." to ".$to_new;
			$item_name_mail = $from_new." to ".$to_new;
            $item_name = $item_name."###ADE-".$pid;
			$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');


$someArray = [
[
"base_fare"   => $data,
"time" => $time_new,
"distance" => $distance_new

],
[
"price"   => $base_fare,
"cart" => $add_cart
],
[
"pid"   => $pid,
"gender" => "female"
]
];

							  // Convert Array to JSON String
$someJSON = json_encode($someArray);
echo $someJSON;
 $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;
   $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
							//echo $data;
exit();



	}// end for international airport to sydney city
	


	
   /*Code for Sydney ends*/			


   /*Code for adelaide starts*/

   /*The pick_up type is Adelaide Airport and drop of address is Adelaide City */

   if($pick=="Adelaide Airport" && $drop=="Adelaide City")
   {
	   if($post_code2=='')
			{
				echo "enter your postcode";
				exit();
			}
			/*If phone numbers are blank*/
			if($psg_phone == '' || $phone == '')
			{
			echo "enter your phone numbers";
			exit();
			}
     $pick="1+James+Schofield+Dr,+Adelaide+Airport+SA+5950,+Australia";
     $urlmap = 'http://maps.googleapis.com/maps/api/distancematrix/json?origins='.$pick.'&destinations='.$to.'&language=en-EN&sensor=true'; 
     $data = file_get_contents($urlmap);
     $data=strtolower($data);
     $data = json_decode($data);
		$to_new=str_replace("+"," ",$to);
     if($post_code=="5000" || $post_code2=="5000")
     {
        $time = 0;
        $distance = 0;
        foreach($data->rows[0]->elements as $road) 
			{
			$time += $road->duration->value;
			$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$base_fare = 40;
			$base_fare_org = $base_fare;
			$base_fare1 = 4;
			$base_fare2 =4;
			//$base_fare = ($base_fare*1.1);/*Base fare calculation*/
			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
$base_fare_without_card_charge = $base_fare+$base_fare1;
			$text = " Base fare is :$";/*Fare Text*/
			$data = $text.$base_fare_without_card_charge;/*Assign To the data variable*/

			$time1=" Time is :";/*Time text*/
			$min="min";/*Time calculation in min*/
			$time_new = $time1.$time." ".$min;/*Total time marged in a text mood*/
			
			$to_new=str_replace("+"," ",$to);
			//$drop=$from."(".$drop.")" ;
			$distance_new=" Distance is :".$distance." km";
        $post_type = 'brands';
        $custom_field_1 = "Adelaide Airport";
        $custom_field_2 = $to_new;    
        $custom_field_3 = $email;

        $custom_field_4 = $time_person;
        $custom_field_5 = $date;    
        $custom_field_6 = $name;

        $custom_field_7 = $book;
        $custom_field_8 = $email_bk;    
        $custom_field_9 = $phone;

        $custom_field_10 = $people_no;
        $custom_field_11 = $suitcases_no;    
        $custom_field_12 = $child_no;
        $custom_field_13 =$psg_phone;
        $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

			    //the array of arguements to be inserted with wp_insert_post
        $new_post = array(
            'post_title'    => $postname,
            'post_status'   => 'publish',          
            'post_type'     => $post_type 
            );

						//insert the the post into database by passing $new_post to wp_insert_post
						//store our post ID in a variable $pid
        $pid = wp_insert_post($new_post);

						//we now use $pid (post id) to help add out post meta data
        add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
        add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
        add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

        add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
        add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
        add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

        add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
        add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
        add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

        add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
        add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
        add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
        add_post_meta($pid, 'customer_name_customer_phone', $custom_field_13, true);
		
		add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
		add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
		add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
		add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
		add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
		add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
		
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        
			$cart_fare = $base_fare_final;
			 $item_name = "Adelaide Airport to ".$to_new;
			 $item_name_mail = "Adelaide Airport to ".$to_new;
			
            $item_name = $item_name."###ADE-".$pid;
			$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');

       
       
       
        
        $someArray = [
        [
        "base_fare"   => $data,
        "time" => $time_new,
        "distance" => $distance_new

        ],
        [
        "price"   => $base_fare,
        "cart" => $add_cart
        ],
        [
        "pid"   => $pid,
        ]
        ];
				 // Convert Array to JSON String
        $someJSON = json_encode($someArray);
        echo $someJSON;
        $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
        exit();	 	


		  }// end of sydney cbd
		  else 
            {  $time = 0;
                $distance = 0;
                foreach($data->rows[0]->elements as $road) 
			{
				$time += $road->duration->value;
				$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$time1=" Time is :";
			$min="min";
			$time_new = $time1.$time." ".$min; // time text
			$dn= $distance;
			$base_fare = ($dn * 2.15)+($time * 0.50) + 9;
			$base_fare = explode('.',$base_fare);
			$base_fare = $base_fare[0]+1;// actual base fare with out any point
			$base_fare_org = $base_fare;// assign into new variable

			$base_fare1 = $base_fare*.1;// after gst
			$base_fare1 = explode('.',$base_fare1);
			$base_fare1 = $base_fare1[0]+1;// gst 1 added


			$base_fare2 = $base_fare*.1; // 2nd tax
			$base_fare2 = explode('.',$base_fare2);
			$base_fare2 = $base_fare2[0]+1;// 1 added

			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
$base_fare_without_card_charge = $base_fare+$base_fare1; // total fare

			$cart_fare = $base_fare_final; // add to cart variable

                
                $to_new=str_replace("+"," ",$to);

               
							//echo  " Total fare: $".($base_fare);
				if($base_fare <= "20")
				{
				   $data=20;
				   $cart_fare = 20;
				   $base_fare_org = 20;
				   $base_fare1 = $base_fare_org*.1;
				   $base_fare2 = $base_fare_org*.1;
				   $base_fare_final = ($base_fare_org * 1.2);
				   
				   $data="Base fare is :$".$data;
				   $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$base_fare_final.'" description="'.$pid.'"]');
				}


               $data = "Base fare is :$".$base_fare_without_card_charge;


               $text2="Distance is :";
               $km="km";

               $distance_new = $text2.$distance." ".$km;


               $title     = "Test";

               $post_type = 'brands';
               $custom_field_1 = "Adelaide Airport";
               $custom_field_2 = $to_new;    
               $custom_field_3 = $email;

               $custom_field_4 = $time_person;
               $custom_field_5 = $date;    
               $custom_field_6 = $name;

               $custom_field_7 = $book;
               $custom_field_8 = $email_bk;    
               $custom_field_9 = $phone;

               $custom_field_10 = $people_no;
               $custom_field_11 = $suitcases_no;    
               $custom_field_12 = $child_no;

               $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

							//the array of arguements to be inserted with wp_insert_post
               $new_post = array(
                 'post_title'    => $postname,

                 'post_status'   => 'publish',          
                 'post_type'     => $post_type 
                 );

							//insert the the post into database by passing $new_post to wp_insert_post
							//store our post ID in a variable $pid
               $pid = wp_insert_post($new_post);

							//we now use $pid (post id) to help add out post meta data
               add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
               add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
               add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

               add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
               add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
               add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

               add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
               add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
               add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

               add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
               add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
               add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
			
				add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
				add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
				add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
				add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
				add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
				add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
				
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        
			$cart_fare = $base_fare_final;
			 $item_name = "Adelaide Airport to ".$to_new;
			 $item_name_mail = "Adelaide Airport to ".$to_new;
			
            $item_name = $item_name."###ADE-".$pid;
			$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');

               $someArray = [
               [
               "base_fare"   => $data,
               "time" => $time_new,
               "distance" => $distance_new

               ],
               [
               "price"   => $base_fare,
               "cart" => $add_cart
               ],
               [
               "pid"   => $pid,
               "gender" => "female"
               ]
               ];

							  // Convert Array to JSON String
               $someJSON = json_encode($someArray);
               echo $someJSON;
							//echo $data;
							 $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
               exit();



           }


       }
       
       if($drop=="Adelaide Airport" && $pick=="Adelaide City")
       { 
		   if($post_code=='')
			{
				echo "enter your postcode";
				exit();
			}
			if($psg_phone == '' || $phone == '')
			{
			echo "enter your phone numbers";
			exit();
			}
          $drop="1+James+Schofield+Dr,+Adelaide+Airport+SA+5950,+Australia";
          $drop_new = "Adelaide Airport";
          $urlmap = 'http://maps.googleapis.com/maps/api/distancematrix/json?origins='.$from.'&destinations='.$drop.'&language=en-EN&sensor=true';
          $data = file_get_contents($urlmap);
          $data=strtolower($data);
          $data = json_decode($data);
          /*Distance and time to be calculated here*/


          if($post_code=="5000" || $post_code2=="5000")
          {
            $time = 0;
            $distance = 0;
           foreach($data->rows[0]->elements as $road) 
			{
			$time += $road->duration->value;
			$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$base_fare = 40;
			$base_fare_org = $base_fare;
			$base_fare1 = 4;
			$base_fare2 =4;
			//$base_fare = ($base_fare*1.1);/*Base fare calculation*/
			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
$base_fare_without_card_charge = $base_fare+$base_fare1;
			$text = " Base fare is :$";/*Fare Text*/
			$data = $text.$base_fare_without_card_charge;/*Assign To the data variable*/

			$time1=" Time is :";/*Time text*/
			$min="min";/*Time calculation in min*/
			$time_new = $time1.$time." ".$min;/*Total time marged in a text mood*/
			
			$from_new=str_replace("+"," ",$from);
			//$drop=$from."(".$drop.")" ;
			$distance_new=" Distance is :".$distance." km";
           $post_type = 'brands';
           $custom_field_1 = $from_new;
           $custom_field_2 = $drop_new;    
           $custom_field_3 = $email;

           $custom_field_4 = $time_person;
           $custom_field_5 = $date;    
           $custom_field_6 = $name;

           $custom_field_7 = $book;
           $custom_field_8 = $email_bk;    
           $custom_field_9 = $phone;

           $custom_field_10 = $people_no;
           $custom_field_11 = $suitcases_no;    
           $custom_field_12 = $child_no;
           $custom_field_13 =$psg_phone;
           $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

								//the array of arguements to be inserted with wp_insert_post
           $new_post = array(
             'post_title'    => $postname,
             'post_status'   => 'publish',          
             'post_type'     => $post_type 
             );

										//insert the the post into database by passing $new_post to wp_insert_post
										//store our post ID in a variable $pid
           $pid = wp_insert_post($new_post);

										//we now use $pid (post id) to help add out post meta data
           add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
           add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
           add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

           add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
           add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
           add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

           add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
           add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
           add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

           add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
           add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
           add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
           add_post_meta($pid, 'customer_name_customer_phone', $custom_field_13, true);
			add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
			add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
			add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
			add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
			add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
			add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
			
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        
			$cart_fare = $base_fare_final;
			 $item_name = $from_new." to ".$drop;
			 $item_name_mail = $from_new." to ".$drop;
			
            $item_name = $item_name."###ADE-".$pid;
			$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');
           $someArray = [
           [
           "base_fare"   => $data,
           "time" => $time_new,
           "distance" => $distance_new

           ],
           [
           "price"   => $base_fare,
           "cart" => $add_cart
           ],
           [
           "pid"   => $pid,
           ]
           ];
								 // Convert Array to JSON String
           $someJSON = json_encode($someArray);
           echo $someJSON;
            $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
           exit();	 	


						  }// end of sydney cbd
						  else 
                            {  $time = 0;
                                $distance = 0;
                                   foreach($data->rows[0]->elements as $road) 
			{
				$time += $road->duration->value;
				$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$time1=" Time is :";
			$min="min";
			$time_new = $time1.$time." ".$min; // time text
			$dn= $distance;
			$base_fare = ($dn * 2.15)+($time * 0.50) + 9;
			$base_fare = explode('.',$base_fare);
			$base_fare = $base_fare[0]+1;// actual base fare with out any point
			$base_fare_org = $base_fare;// assign into new variable

			$base_fare1 = $base_fare*.1;// after gst
			$base_fare1 = explode('.',$base_fare1);
			$base_fare1 = $base_fare1[0]+1;// gst 1 added


			$base_fare2 = $base_fare*.1; // 2nd tax
			$base_fare2 = explode('.',$base_fare2);
			$base_fare2 = $base_fare2[0]+1;// 1 added

			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
$base_fare_without_card_charge = $base_fare+$base_fare1; // total fare

			$cart_fare = $base_fare_final; // add to cart variable

                
                $from_new=str_replace("+"," ",$from);

               
							//echo  " Total fare: $".($base_fare);
				if($base_fare <= "20")
				{
				   $data=20;
				   $cart_fare = 20;
				   $base_fare_org = 20;
				   $base_fare1 = $base_fare_org*.1;
				   $base_fare2 = $base_fare_org*.1;
				   $base_fare_final = ($base_fare_org * 1.2);
				   
				   $data="Base fare is :$".$data;
				   $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$base_fare_final.'" description="'.$pid.'"]');
				}


               $data = "Base fare is :$".$base_fare_without_card_charge;


               $text2="Distance is :";
               $km="km";

               $distance_new = $text2.$distance." ".$km;

                               $title     = "Test";

                               $post_type = 'brands';
                               $custom_field_1 = $from_new;
                               $custom_field_2 = $drop_new;    
                               $custom_field_3 = $email;

                               $custom_field_4 = $time_person;
                               $custom_field_5 = $date;    
                               $custom_field_6 = $name;

                               $custom_field_7 = $book;
                               $custom_field_8 = $email_bk;    
                               $custom_field_9 = $phone;

                               $custom_field_10 = $people_no;
                               $custom_field_11 = $suitcases_no;    
                               $custom_field_12 = $child_no;

                               $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

											//the array of arguements to be inserted with wp_insert_post
                               $new_post = array(
                                 'post_title'    => $postname,

                                 'post_status'   => 'publish',          
                                 'post_type'     => $post_type 
                                 );

											//insert the the post into database by passing $new_post to wp_insert_post
											//store our post ID in a variable $pid
                               $pid = wp_insert_post($new_post);

											//we now use $pid (post id) to help add out post meta data
                               add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
                               add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
                               add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

                               add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
                               add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
                               add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

                               add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
                               add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
                               add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

                               add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
                               add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
                               add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);
								add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
								add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
								add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
								add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
								add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
								add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
								
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        
			$cart_fare = $base_fare_final;
			 $item_name = $from_new." to ".$drop;
			 $item_name_mail = $from_new." to ".$drop;
			
            $item_name = $item_name."###ADE-".$pid;
			$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');

                               $someArray = [
                               [
                               "base_fare"   => $data,
                               "time" => $time_new,
                               "distance" => $distance_new

                               ],
                               [
                               "price"   => $base_fare,
                               "cart" => $add_cart
                               ],
                               [
                               "pid"   => $pid,
                               "gender" => "female"
                               ]
                               ];

											  // Convert Array to JSON String
                               $someJSON = json_encode($someArray);
                               echo $someJSON;
											//echo $data;
											 $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;
;
    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;
;
    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
                               exit();



                           }

                       }

                       /*The drop off address is Adelaide Airport and the pick up address is adelaide city */

                       if($drop=="Adelaide City" && $pick=="Adelaide City")
                       {

                         $urlmap = 'http://maps.googleapis.com/maps/api/distancematrix/json?origins='.$to.'&destinations='.$from.'&language=en-EN&sensor=true';
                         $data = file_get_contents($urlmap);
                         $data=strtolower($data);
                         $data = json_decode($data);


                         /*Distance and time to be calculated here*/
                         $time = 0;
                         $distance = 0;
                         foreach($data->rows[0]->elements as $road) 
			{
				$time += $road->duration->value;
				$distance += $road->distance->value;
			}
			$time = $time/60; // time is calcutaled in min
			$time = explode('.',$time);
			$time = $time[0]+1; // add 1 extra min
			$distance = $distance/1000; // distance calculated in km
			$distance = explode('.',$distance);
			$distance = $distance[0]+1;// add 1 extra in km
			$time1=" Time is :";
			$min="min";
			$time_new = $time1.$time." ".$min; // time text
			$dn= $distance;
			$base_fare = ($dn * 2.15)+($time * 0.50) + 9;
			$base_fare = explode('.',$base_fare);
			$base_fare = $base_fare[0]+1;// actual base fare with out any point
			$base_fare_org = $base_fare;// assign into new variable

			$base_fare1 = $base_fare*.1;// after gst
			$base_fare1 = explode('.',$base_fare1);
			$base_fare1 = $base_fare1[0]+1;// gst 1 added


			$base_fare2 = $base_fare*.1; // 2nd tax
			$base_fare2 = explode('.',$base_fare2);
			$base_fare2 = $base_fare2[0]+1;// 1 added

			$base_fare_final = $base_fare+$base_fare1+$base_fare2;
$base_fare_without_card_charge = $base_fare+$base_fare1;
$base_fare_without_card_charge = $base_fare+$base_fare1; // total fare

			$cart_fare = $base_fare_final; // add to cart variable

                
                $from_new=str_replace("+"," ",$from);
                $to_new=str_replace("+"," ",$to);

               
							//echo  " Total fare: $".($base_fare);
				if($base_fare <= "20")
				{
				   $data=20;
				   $cart_fare = 20;
				   $base_fare_org = 20;
				   $base_fare1 = $base_fare_org*.1;
				   $base_fare2 = $base_fare_org*.1;
				   $base_fare_final = ($base_fare_org * 1.2);
				   
				   $data="Base fare is :$".$data;
				   $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$base_fare_final.'" description="'.$pid.'"]');
				}


               $data = "Base fare is :$".$base_fare_without_card_charge;


               $text2="Distance is :";
               $km="km";

               $distance_new = $text2.$distance." ".$km;

$title     = "Test";

$post_type = 'brands';
$custom_field_1 = $from_new;
$custom_field_2 = $to_new;    
$custom_field_3 = $email;

$custom_field_4 = $time_person;
$custom_field_5 = $date;    
$custom_field_6 = $name;

$custom_field_7 = $book;
$custom_field_8 = $email_bk;    
$custom_field_9 = $phone;

$custom_field_10 = $people_no;
$custom_field_11 = $suitcases_no;    
$custom_field_12 = $child_no;

$postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

							//the array of arguements to be inserted with wp_insert_post
$new_post = array(
 'post_title'    => $postname,

 'post_status'   => 'publish',          
 'post_type'     => $post_type 
 );

							//insert the the post into database by passing $new_post to wp_insert_post
							//store our post ID in a variable $pid
$pid = wp_insert_post($new_post);

							//we now use $pid (post id) to help add out post meta data
add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);

add_post_meta($pid, 'booking_price_and_travel_details_base_fare', $base_fare_org, true);
add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', $base_fare2, true);
add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', $base_fare2, true);
add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', $distance, true);
add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', $time, true);
add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);

$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

        
			$cart_fare = $base_fare_final;
			
			$item_name = $from_new." to ".$to_new;
			$item_name_mail = $from_new." to ".$to_new;
            $item_name = $item_name."###ADE-".$pid;
			$add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');


$someArray = [
[
"base_fare"   => $data,
"time" => $time_new,
"distance" => $distance_new

],
[
"price"   => $base_fare,
"cart" => $add_cart
],
[
"pid"   => $pid,
"gender" => "female"
]
];

							  // Convert Array to JSON String
$someJSON = json_encode($someArray);
echo $someJSON;
							//echo $data;
							 $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;
;
    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is ".$ext_text;
;
    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
exit();



                   }

                   if($pick=="Sydney International Airport" && $drop=="Sydney Domestic Airport")
                   {  
                       $cart_fare = 24;


							//echo  " Total fare: $".($base_fare);


                    $base_fare =20;

                    $data = "Base fare is :$22";

                    $time_new="10 mins";


                    $title     = "Test";

                    $post_type = 'brands';
                    $custom_field_1 = $pick;
                    $custom_field_2 = $drop;    
                    $custom_field_3 = $email;

                    $custom_field_4 = $time_person;
                    $custom_field_5 = $date;    
                    $custom_field_6 = $name;

                    $custom_field_7 = $book;
                    $custom_field_8 = $email_bk;    
                    $custom_field_9 = $phone;

                    $custom_field_10 = $people_no;
                    $custom_field_11 = $suitcases_no;    
                    $custom_field_12 = $child_no;

                    $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

							//the array of arguements to be inserted with wp_insert_post
                    $new_post = array(
                     'post_title'    => $postname,

                     'post_status'   => 'publish',          
                     'post_type'     => $post_type 
                     );

							//insert the the post into database by passing $new_post to wp_insert_post
							//store our post ID in a variable $pid
                    $pid = wp_insert_post($new_post);

							//we now use $pid (post id) to help add out post meta data
                    add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
                    add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
                    add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

                    add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
                    add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
                    add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

                    add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
                    add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
                    add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

                    add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
                    add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
                    add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);

                    add_post_meta($pid, 'booking_price_and_travel_details_base_fare', 20, true);
                    add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', 2, true);
                    add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', 2, true);
                    add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', 4, true);
                    add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', 12, true);
                    add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
					
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

                    $item_name = $pick." to ".$drop;
                    $item_name_mail = $pick." to ".$drop;
                    $item_name = $item_name."###ADE-".$pid;
                    $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');

                    $someArray = [
                    [
                    "base_fare"   => $data,
                    "time" => $time_new,
                    "distance" => ""

                    ],
                    [
                    "price"   => $base_fare,
                    "cart" => $add_cart
                    ],
                    [
                    "pid"   => $pid,
                    "gender" => "female"
                    ]
                    ];

							  // Convert Array to JSON String
                    $someJSON = json_encode($someArray);
                    echo $someJSON;
                    
                     $msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is "."The special request is ".$ext_text;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is "."The special request is ".$ext_text;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
							//echo $data;
                    exit();


                   }
                   if($drop=="Sydney International Airport" && $pick=="Sydney Domestic Airport")
                   {  

                    $cart_fare = 24;


							//echo  " Total fare: $".($base_fare);


                    $base_fare =20;

                    $data = "Base fare is :$22";

                    $time_new="10 mins";


                    $title     = "Test";

                    $post_type = 'brands';
                    $custom_field_1 = $pick;
                    $custom_field_2 = $drop;    
                    $custom_field_3 = $email;

                    $custom_field_4 = $time_person;
                    $custom_field_5 = $date;    
                    $custom_field_6 = $name;

                    $custom_field_7 = $book;
                    $custom_field_8 = $email_bk;    
                    $custom_field_9 = $phone;

                    $custom_field_10 = $people_no;
                    $custom_field_11 = $suitcases_no;    
                    $custom_field_12 = $child_no;

                    $postname=$name.'('.$email.')';$uni_id = rand();
$postname=$name.'('.$email.')'."-".$uni_id;

							//the array of arguements to be inserted with wp_insert_post
                    $new_post = array(
                     'post_title'    => $postname,

                     'post_status'   => 'publish',          
                     'post_type'     => $post_type 
                     );

							//insert the the post into database by passing $new_post to wp_insert_post
							//store our post ID in a variable $pid
                    $pid = wp_insert_post($new_post);

							//we now use $pid (post id) to help add out post meta data
                    add_post_meta($pid, 'customer_name_pick_upup_address', $custom_field_1, true);
                    add_post_meta($pid, 'customer_name_drop_address', $custom_field_2, true);
                    add_post_meta($pid, 'customer_name_customer_email', $custom_field_3, true);

                    add_post_meta($pid, 'customer_name_time', $custom_field_4, true);
                    add_post_meta($pid, 'customer_name_date', $custom_field_5, true);
                    add_post_meta($pid, 'customer_name_customer_name', $custom_field_6, true);
add_post_meta($pid, 'customer_name_customer_phone', $psg_phone, true);

                    add_post_meta($pid, 'booking_address_book_person_name', $custom_field_7, true);
                    add_post_meta($pid, 'booking_address_phone_no', $custom_field_9, true);
                    add_post_meta($pid, 'booking_address_email', $custom_field_8, true);

                    add_post_meta($pid, 'person_no_and_luggage_details_no_of_adults', $custom_field_10, true);
                    add_post_meta($pid, 'person_no_and_luggage_details_no_of_children', $custom_field_11, true);
                    add_post_meta($pid, 'person_no_and_luggage_details_no_of_suitcase', $custom_field_12, true);

                    add_post_meta($pid, 'booking_price_and_travel_details_base_fare', 20, true);
                    add_post_meta($pid, 'booking_price_and_travel_details_after_1st_tax', 2, true);
                    add_post_meta($pid, 'booking_price_and_travel_details_after_2nd_tax', 2, true);
                    add_post_meta($pid, 'booking_price_and_travel_details_total_distance_in_km', 4, true);
                    add_post_meta($pid, 'booking_price_and_travel_details_total_time_taken_in_min', 12, true);
                    add_post_meta($pid, 'post_codes_pickup_postcode', $post_code, true);
add_post_meta($pid, 'post_codes_dropoff_postcode', $post_code2, true);
	add_post_meta($pid, 'extra_instraction_extra_instraction', $ext_text, true);
					
$uni_id_ivn = "IVN".$uni_id;
$uni_id_qtn = "QTN".$uni_id;
add_post_meta($pid, 'invoice_id_invoice_id', $uni_id_ivn, true);
add_post_meta($pid, 'invoice_id_quatation_id', $uni_id_qtn, true);

                    $item_name = $pick." to ".$drop;
                    $item_name_mail = $pick." to ".$drop;
                    $item_name = $item_name."###ADE-".$pid;
                    $add_cart =  do_shortcode('[wp_cart_button name="'.$item_name.'" price="'.$cart_fare.'" description="'.$pid.'"]');

                    $someArray = [
                    [
                    "base_fare"   => $data,
                    "time" => $time_new,
                    "distance" => ""

                    ],
                    [
                    "price"   => $base_fare,
                    "cart" => $add_cart
                    ],
                    [
                    "pid"   => $pid,
                    "gender" => "female"
                    ]
                    ];

							  // Convert Array to JSON String
                    $someJSON = json_encode($someArray);
                    echo $someJSON;
							//echo $data;
							$msg ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is "."The special request is ".$ext_text;;

    //$msg. ="Someone is going to book a car from ".$item_name_mail."and the booking unit id is".$uni_id."clint pc ip address is".$_SERVER['REMOTE_ADDR']."The special request is "."The special request is ".$ext_text;;

    $headers[] = "Content-type: text/html" ;
    wp_mail( $email_bk, "Booking Adelaide", $msg, $headers);
                    exit();


                }					
                /*Code for adelaide ends*/		
                
                
                function wpse27856_set_content_type(){
                    return "text/html";
                }
                add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );

            }
            if(function_exists('set_pdf_print_support')) {
              set_pdf_print_support(array('post', 'page', 'brands'));
          }
// Add metabox
          function metabox_after_publish() {
             add_meta_box( 'send-email', 'Send Invoice', 'send_email_metabox_content', 'brands', 'advanced', 'high' );
         }
         add_action( 'add_meta_boxes', 'metabox_after_publish' );

    // callback function to populate metabox
         function send_email_metabox_content() { 
            global $post;
            $post_id = $post->ID;

            $atttff = PDF_CACHE_DIRECTORY . get_the_ID() . '-INVOICE.pdf';
            ?>
            <form>Extra Cost:
            <input type="text" name="invoicesubtotal" id="invoicesubtotal" value="<?php echo get_post_meta( get_the_ID(), 'invoicesubtotal', true ); ?>"><br>
            <br>


               <textarea id="email_content" name="email_content" style="width:100%"><?php echo get_post_meta( get_the_ID(), 'email_content', true ); ?></textarea>
               <input type="hidden" value="<?php echo $post_id;?>" name="pid">
               <p><input id="email_send_button" type="submit" class="button button-primary button-large" value="Send" /></p>
           </form>
           <?php }

           if ( isset($_POST["email_content"]) && !empty($_POST["email_content"]) ) {
                         if (!defined('PDF_CACHE_DIRECTORY')) {
                          define('PDF_CACHE_DIRECTORY', $upload_dir['basedir'] . '/pdf-cache/');
                         }

                         add_post_meta($_REQUEST["pid"], 'email_content', $_POST["email_content"], true);
                         add_post_meta($_REQUEST["pid"], 'invoicesubtotal', $_POST["invoicesubtotal"], true);                         
                          $name = get_post_meta($_REQUEST["pid"], "booking_address_book_person_name", true); 
                          $email = get_post_meta($_REQUEST["pid"], "booking_address_email", true); 
                          $phone = get_post_meta($_REQUEST["pid"], "booking_address_phone_no", true);
                          $dropoff_address = get_post_meta($_REQUEST["pid"], "customer_name_drop_address", true); 
                          $pickup_address =  get_post_meta($_REQUEST["pid"], "customer_name_pick_upup_address", true);             
                          $time =  get_post_meta($_REQUEST["pid"], "customer_name_time", true);
                          $base_fare = get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_base_fare", true);
							$gst = get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_1st_tax", true);
							$card_charges = get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_2nd_tax", true);
							$total = $base_fare+$gst+$card_charges;
							$extra_charge = get_post_meta($_REQUEST["pid"], "invoicesubtotal", true);
							$total_new = $total+$extra_charge;
							$pid = $_REQUEST["pid"];
							$invoice_number = rand()."#".$pid;

                          $msg = '

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SEATON TYRES</title>
</head>

<body style="background: url(http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/plugins/wp-pdf-templates/images/pdf-bg.jpg);  background-repeat:no-repeat; background-position:center center; margin:0; padding:0">

<table style="width: 100%;padding: 0 15px;margin:0 auto;"  >
  <tr>
     <td colspan="5" align="center">
        <img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/plugins/wp-pdf-templates/images/letter_Head_logo.jpg" >
     </td>
  </tr>
  <tr>
     <td style="width:70%"><strong>SAdelaide Limusine Car Hire</strong><br/>
      2-Hurtle Street<br/>
      Croydon SA 5008<br/>
      Australia<br/>
      PH: 0430236500<br/>
      ABN: 26303196571<br/>
      <br/>
      
    </td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td style="border:1px solid #000">
      <table width="100%" style="padding:0 10px">
         <tr>
           <td>Invoice</td>
           <td align="right">'.$invoice_number.'</td>
           
         </tr>
         <tr>
           <td>Date:</td>
           <td align="right">'.date("Y/m/d").'</td>
         </tr>
         
      </table>
   </td>

</tr>
  <tr>
     <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"  style="padding: 50px 0;border: 1px solid #000;text-align: center;">
       CASH SALE
    </td>
   
    <td style="padding:50px;border:1px solid #000;" colspan="2"> Delivery Address:<br/>
      CASH SALE </td>
  </tr>
  <tr>
     <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
     <td colspan="5">
        <table width="100%" cellspacing="0" style="border-collapse:collapse" >
           <thead>
              <tr>
                 <th style="border:1px solid #000; line-height:42px">Quality</th>
                  <th style="border:1px solid #000; line-height:42px"><ul>
     
     <li>pickup Address : '.$pickup_address.'</li>
<li>Dropoff Address : '.$dropoff_address.'</li>
<li>Total distance of your travel in km : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_total_distance_in_km", true).'</li>
<li>Total time taken of your travel in min (approximate) : '.get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_total_time_taken_in_min", true).'</li>
<li>Base fare of your travel in AUS : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_base_fare", true).'</li>
<li>GST will be 10% of base fare : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_1st_tax", true).'</li>
<li>Card Charges 10% of base fare : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_2nd_tax", true).'</li>
    </ul></th>
                 <th style="border:1px solid #000; line-height:42px">Base Price</th>
                 <th style="border:1px solid #000; line-height:42px">Unit Price (inc-GST)</th>
                 <th style="border:1px solid #000; line-height:42px">Unit Price (inc-Card charge)</th>
                 <th style="border:1px solid #000; line-height:42px">Total (inc-GST)</th>
              </tr>
           </thead>
           <tbody>
             <tr>
               <td style="border:1px solid #000; line-height:42px; padding:15px; text-align:center;">1</td>
               <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">ROTAION & BALANCE</td>
               <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">$'.$base_fare.'</td>
               <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">$'.$gst.'</td>
                <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">$'.$card_charges.'</td>
               <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">$'.$total_new.'</td>
             </tr>
           </tbody>
        </table>
     </td>
  </tr> 
  <tr>
     <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
     <td colspan="5">
        <table width="100%" cellspacing="0" style="border-collapse:collapse" cellpadding="0">
           <tr>
              <td style="border:1px solid #000; padding:15px">
                 To pay via MasterCard or VISA. <br>
                  Call 08 83453672<br>
<br>
                  by INTERNET: BSB 065112 ACC 10215522<br>
                  
              </td>
              <td valign="top" style="border-top:1px solid #000">
                 <table width="100%" cellspacing="0" style="border-collapse:collapse">
                    
                    <tr>
                       <td style="border:1px solid #000; border-left:none;  padding:15px">
                          Total:
                         
                       </td>
                       <td style="border:1px solid #000;padding:15px" align="right">
                          '.$total_new.'
                         
                       </td>
                    </tr>
                   
                 </table>
              </td>
           </tr>
           <tr></tr>
        </table>
     </td>
  </tr>
  <tr>
     <td colspan="5">&nbsp;</td>
  </tr>
   <tr>
     <td colspan="5" align="center">
        <img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/plugins/wp-pdf-templates/images/letter_Head_bottom-logo.jpg" >
     </td>
  </tr>
  
</table>
</body>
</html>';


                           /* $msg .=$_POST["email_content"].' <br> email id='.get_post_meta( $_POST["pid"], 'booking_address_email' ).' link='.get_permalink($_POST["pid"]).'?pdf';*/
                            $headers[] = "Content-type: text/html" ;
                           // $filesatt = file_get_contents(get_permalink($_POST["pid"]).'?pdf-preview');
							
							
                            
                            
                            $filesatt = '<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>SEATON TYRES</title>
</head>

<body style="margin:0; padding:0">

<table style="width: 100%;padding: 0 15px;margin:0 auto;"  >
  <tr>
     <td colspan="5" align="center">
     </td>
  </tr>
  <tr>
     <td style="width:70%"><strong>Adelaide Limusine Car Hire</strong><br/>
      2-Hurtle Street<br/>
      Croydon SA 5008<br/>
      Australia<br/>
      PH: 0430236500<br/>
      ABN: 26303196571<br/>
      <br/>
      
    </td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td style="border:1px solid #000">
      <table width="100%" style="padding:0 10px">
         <tr>
           <td>Invoice</td>
           <td align="right">'.$invoice_number.'</td>
           
         </tr>
         <tr>
           <td>Date:</td>
           <td align="right">'.date("Y/m/d").'</td>
         </tr>
         
      </table>
   </td>

</tr>
  <tr>
     <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"  style="padding: 50px 0;border: 1px solid #000;text-align: center;">
       CASH SALE
    </td>
   
    <td style="padding:50px;border:1px solid #000;" colspan="2"> Delivery Address:<br/>
      CASH SALE </td>
  </tr>
  <tr>
     <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
     <td colspan="5">
        <table width="100%" cellspacing="0" style="border-collapse:collapse" >
           <thead>
              <tr>
                 <th style="border:1px solid #000; line-height:42px">Quality</th>
                  <th style="border:1px solid #000; line-height:42px"><ul>
     
     <li>You are going to travel from : '.$pickup_address.'</li>
<li>You are going to end your travel : '.$dropoff_address.'</li>
<li>Total distance of your travel in km : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_total_distance_in_km", true).'</li>
<li>Total time taken of your travel in min (approximate) : '.get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_total_time_taken_in_min", true).'</li>
<li>Base fare of your travel in AUS : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_base_fare", true).'</li>
<li>GST will be 10% of base fare : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_1st_tax", true).'</li>
<li>Card Charges 10% of base fare : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_2nd_tax", true).'</li>
    </ul></th>
                 <th style="border:1px solid #000; line-height:42px">Base Price</th>
                 <th style="border:1px solid #000; line-height:42px">Unit Price (inc-GST)</th>
                 <th style="border:1px solid #000; line-height:42px">Unit Price (inc-Card charge)</th>
                 <th style="border:1px solid #000; line-height:42px">Total (inc-GST)</th>
              </tr>
           </thead>
           <tbody>
             <tr>
               <td style="border:1px solid #000; line-height:42px; padding:15px; text-align:center;">1</td>
               <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">ROTAION & BALANCE</td>
               <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">$'.$base_fare.'</td>
               <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">$'.$gst.'</td>
                <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">$'.$card_charges.'</td>
               <td style="border:1px solid #000; line-height:42px;padding:15px;text-align:center;">$'.$total_new.'</td>
             </tr>
           </tbody>
        </table>
     </td>
  </tr> 
  <tr>
     <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
     <td colspan="5">
        <table width="100%" cellspacing="0" style="border-collapse:collapse" cellpadding="0">
           <tr>
              <td style="border:1px solid #000; padding:15px">
                 To pay via MasterCard or VISA. <br>
                  Call 08 83453672<br>
<br>
                  by INTERNET: BSB 065112 ACC 10215522<br>
                  
              </td>
              <td valign="top" style="border-top:1px solid #000">
                 <table width="100%" cellspacing="0" style="border-collapse:collapse">
                    
                    <tr>
                       <td style="border:1px solid #000; border-left:none;  padding:15px">
                          Total:
                         
                       </td>
                       <td style="border:1px solid #000;padding:15px" align="right">
                          '.$total_new.'
                         
                       </td>
                    </tr>
                   
                 </table>
              </td>
           </tr>
           <tr></tr>
        </table>
     </td>
  </tr>
  <tr>
     <td colspan="5">&nbsp;</td>
  </tr>
   <tr>
     <td colspan="5" align="center">
     </td>
  </tr>
  
</table>
</body>
</html>
';							//$filesatt1 = get_post_meta($_REQUEST["pid"], "email_content", true); 
                            $filename = $_POST["pid"] . '.pdf';
                            $cached = PDF_CACHE_DIRECTORY . $_POST["pid"] . '-INVOICE.pdf';
                            require_once 'dompdf/autoload.inc.php';
                                                  // html to pdf conversion
                            $dompdf = new Dompdf\Dompdf();      
                            $htmlff = apply_filters('pdf_html_to_dompdf', $filesatt);
                            $dompdf->loadHtml($htmlff);
                            $dompdf->render();

                                                  // create PDF cache if one doesn't yet exist
                            if(!is_dir(PDF_CACHE_DIRECTORY)) {
                                @mkdir(PDF_CACHE_DIRECTORY);
                            }

                                                  //save the pdf file to cache
                            file_put_contents($cached, $dompdf->output());
                            if (file_exists($cached)) {
                                $attachments = array($cached);
                            } else {
                                $attachments = array('');
                            }
                            $mypost = get_post($_REQUEST["pid"]);
                           $posttitle = $mypost->post_title.'(Invoice done)';
                           
                            
  $my_post = array(
      'ID'           => $pid,
      'post_title'   => $posttitle,
      'post_content' => 'This is the updated content.',
  );

// Update the post into the database
  wp_update_post( $my_post );

                            
                            wp_mail( $email, "Send Invoice", $msg, $headers , $attachments );
        }
        
        
   function extra_instraction_get_meta( $value ) {
	global $post;

	$field = get_post_meta( $post->ID, $value, true );
	if ( ! empty( $field ) ) {
		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
	} else {
		return false;
	}
}

function extra_instraction_add_meta_box() {
	add_meta_box(
		'extra_instraction-extra-instraction',
		__( 'Extra Instraction', 'extra_instraction' ),
		'extra_instraction_html',
		'brands',
		'normal',
		'default'
	);
}
add_action( 'add_meta_boxes', 'extra_instraction_add_meta_box' );

function extra_instraction_html( $post) {
	wp_nonce_field( '_extra_instraction_nonce', 'extra_instraction_nonce' ); ?>

	<p>
		<label for="extra_instraction_extra_instraction"><?php _e( 'extra instraction', 'extra_instraction' ); ?></label><br>
		<textarea name="extra_instraction_extra_instraction" id="extra_instraction_extra_instraction" ><?php echo extra_instraction_get_meta( 'extra_instraction_extra_instraction' ); ?></textarea>
	
	</p><?php
}

function extra_instraction_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! isset( $_POST['extra_instraction_nonce'] ) || ! wp_verify_nonce( $_POST['extra_instraction_nonce'], '_extra_instraction_nonce' ) ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;

	if ( isset( $_POST['extra_instraction_extra_instraction'] ) )
		update_post_meta( $post_id, 'extra_instraction_extra_instraction', esc_attr( $_POST['extra_instraction_extra_instraction'] ) );
}
add_action( 'save_post', 'extra_instraction_save' );

/*
	Usage: extra_instraction_get_meta( 'extra_instraction_extra_instraction' )
*/
      
    

        ?>
