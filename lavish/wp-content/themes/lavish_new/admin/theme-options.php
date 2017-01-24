<?php

add_action('init','of_options');

if (!function_exists('of_options')) {
function of_options(){
	
// VARIABLES
$themename = get_theme_data(STYLESHEETPATH . '/style.css');
$themename = $themename['Name'];
$shortname = "lp";

// Populate OptionsFramework option in array for use in theme
global $of_options;
$of_options = get_option('of_options');

$GLOBALS['template_path'] = OF_DIRECTORY;

//Access the WordPress Categories via an Array
$of_categories = array();  
$of_categories_obj = get_categories('hide_empty=0');
foreach ($of_categories_obj as $of_cat) {
    $of_categories[$of_cat->cat_ID] = $of_cat->cat_name;}
$categories_tmp = array_unshift($of_categories, "Select a category:");    
       
//Access the WordPress Pages via an Array
$of_pages = array();
$of_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($of_pages_obj as $of_page) {
    $of_pages[$of_page->ID] = $of_page->post_name; }
$of_pages_tmp = array_unshift($of_pages, "Select a page:");       

// Image Alignment radio box
$options_thumb_align = array("alignleft" => "Left","alignright" => "Right","aligncenter" => "Center"); 

// Image Links to Options
$options_image_link_to = array("image" => "The Image","post" => "The Post"); 

//Testing 
$options_select = array("one","two","three","four","five"); 
$options_radio = array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"); 

//Stylesheets Reader
$alt_stylesheet_path = OF_FILEPATH . '/styles/';
$alt_stylesheets = array();

if ( is_dir($alt_stylesheet_path) ) {
    if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
        while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
            if(stristr($alt_stylesheet_file, ".css") !== false) {
                $alt_stylesheets[] = $alt_stylesheet_file;
            }
        }    
    }
}

//More Options
$uploads_arr = wp_upload_dir();
$all_uploads_path = $uploads_arr['path'];
$all_uploads = get_option('of_uploads');
$other_entries = array("Select a number:","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19");
$body_repeat = array("no-repeat","repeat-x","repeat-y","repeat");
$body_pos = array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");

// Set the Options Array
$options = array();

$options[] = array( "name" => "General Settings For Home Page Different Options",
                    "type" => "heading");

	$options[] = array( "name" => "High Class",
                    "type" => "heading");				
	
					
$options[] = array( "name" => "High Class Escort Service",
					"desc" => "Here you can enter any heading you want",
					"id" => "webq_es_srv",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "High Class Escort Service",
					"desc" => "Here you can enter any description you want",
					"id" => "webq_es_srv_des",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "High Class Escort Service2",
					"desc" => "Here you can enter any heading you want",
					"id" => "webq_es_srv2",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "High Class Escort Service2",
					"desc" => "Here you can enter any description you want",
					"id" => "webq_es_srv_des2",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "High Class Escort Service3",
					"desc" => "Here you can enter any heading you want",
					"id" => "webq_es_srv3",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "High Class Escort Service3",
					"desc" => "Here you can enter any description you want",
					"id" => "webq_es_srv_des3",
					"std" => "",
					"type" => "webq_editor");						
																							
														
$options[] = array( "name" => "Our Discreet Concierge Service",
                    "type" => "heading");					
					

$options[] = array( "name" => "Our Discreet Concierge Service",
					"desc" => "Here you can enter any heading you want",
					"id" => "webq_dis_srv",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "Our Discreet Concierge Service Description",
					"desc" => "Here you can enter any description you want",
					"id" => "webq_dis_srv_des",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "Our Discreet Concierge Service2",
					"desc" => "Here you can enter any heading you want",
					"id" => "webq_dis_srv2",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "Our Discreet Concierge Service2 Description",
					"desc" => "Here you can enter any description you want",
					"id" => "webq_dis_srv_des2",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => " View All Exclusive Models",
                    "type" => "heading");	
                    
$options[] = array( "name" => "View All Exclusive Models",
					"desc" => "Here you can enter any heading you want and also give the link of the section",
					"id" => "webq_ex_models",
					"std" => "",
					"type" => "webq_editor");	                    				
	
$options[] = array( "name" => "Latest News",
                    "type" => "heading");										


$options[] = array( "name" => "Latest News",
					"desc" => "Here you can enter any heading you want",
					"id" => "webq_lat_news",
					"std" => "",
					"type" => "webq_editor");	
					

$options[] = array( "name" => "Latest News Subheading",
					"desc" => "Here you can enter any heading you want",
					"id" => "webq_lat_news_sub_heading",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "General Settings For Footer Area",
                    "type" => "heading");	
                    
$options[] = array( "name" => "Copy Right Text",
					"desc" => "Here you can enter any copy right text you want",
					"id" => "webq_copy",
					"std" => "",
					"type" => "webq_editor");                    																						
$options[] = array( "name" => "Facebook Link",
					"desc" => "Here you can enter any fb link",
					"id" => "webq_fb",
					"std" => "",
					"type" => "webq_editor");                    																						
$options[] = array( "name" => "Twitter Link",
					"desc" => "Here you can enter any twitter link",
					"id" => "webq_twt",
					"std" => "",
					"type" => "webq_editor");                    																						
$options[] = array( "name" => "Instragram Link",
					"desc" => "Here you can enter any twitter link",
					"id" => "webq_ins",
					"std" => "",
					"type" => "webq_editor");                    																						
$options[] = array( "name" => "Youtube Link",
					"desc" => "Here you can enter any youtube link",
					"id" => "webq_youtube",
					"std" => "",
					"type" => "webq_editor");                    
/*Casting Area*/
$options[] = array( "name" => "General Settings For Cast Your Lavish Mate",
                    "type" => "heading");
                    
$options[] = array( "name" => "Cast Your Lavish Mate Header",
					"desc" => "Here you can enter any header",
					"id" => "webq_cast_header",
					"std" => "",
					"type" => "webq_editor");
					                    																							$options[] = array( "name" => "Casting Contest One",
					"desc" => "Here you can enter any header",
					"id" => "webq_cast_one",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "Casting Contest Two",
					"desc" => "Here you can enter any header",
					"id" => "webq_cast_two",
					"std" => "",
					"type" => "webq_editor");	
					

					
$options[] = array( "name" => "Amezing Header Tab One Heading",
					"desc" => "Here you can enter any header",
					"id" => "webq_amz_one_head",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "Amezing Header Tab One Description",
					"desc" => "Here you can enter any header",
					"id" => "webq_amz_one_des",
					"std" => "",
					"type" => "webq_editor");
					
$options[] = array( "name" => "Amezing Header Tab Two Heading",
					"desc" => "Here you can enter any header",
					"id" => "webq_amz_two_head",
					"std" => "",
					"type" => "webq_editor");	
					
$options[] = array( "name" => "Amezing Header Tab Two Description",
					"desc" => "Here you can enter any header",
					"id" => "webq_amz_two_des",
					"std" => "",
					"type" => "webq_editor");
		
$options[] = array( "name" => "Amezing Area Bottom Content",
					"desc" => "Here you can enter any content",
					"id" => "webq_amz_btm_content",
					"std" => "",
					"type" => "webq_editor");
					
$options[] = array( "name" => "Lavish Mate fees guide Header",
					"desc" => "Here you can enter any content",
					"id" => "webq_lavish_header",
					"std" => "",
					"type" => "webq_editor");																												
$options[] = array( "name" => "Lavish Mate fees guide Description",
					"desc" => "Here you can enter any content",
					"id" => "webq_lavish_des",
					"std" => "",
					"type" => "webq_editor");		
					
/***********************************Vip Page***************************************/

$options[] = array( "name" => "General Settings For Vip Page",
                    "type" => "heading");	
                    
                  $options[] = array( "name" => "Lounge Benefits Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_lounge_head",
					"std" => "",
					"type" => "webq_editor");  		
					
					
					$options[] = array( "name" => "Lounge Benefits",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_lounge",
					"std" => "",
					"type" => "webq_editor");  	
					
					$options[] = array( "name" => "Benefits Vip Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_ben_head",
					"std" => "",
					"type" => "webq_editor");  	
					
						$options[] = array( "name" => "Benefits Vip",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_ben",
					"std" => "",
					"type" => "webq_editor");  	
					
					
						$options[] = array( "name" => "Vip Luxury Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_lux_head",
					"std" => "",
					"type" => "webq_editor");  
					
					
						$options[] = array( "name" => "Vip Luxury",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_lux",
					"std" => "",
					"type" => "webq_editor");  														
	
	                  /*Car*/
	
					$options[] = array( "name" => "Super Car Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_car_head",
					"std" => "",
					"type" => "webq_editor");  
	
	
	                $options[] = array( "name" => "Super Car",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_car",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Yacht*/
					$options[] = array( "name" => "Yacht Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_youth_head",
					"std" => "",
					"type" => "webq_editor"); 
					
						$options[] = array( "name" => "Yacht",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_youth",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Jet Off*/
						$options[] = array( "name" => "Jet Off Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_jet_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Jet Off",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_jet",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Hotel*/
					$options[] = array( "name" => "Hotel Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_hotel_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Hotel",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_hotel",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Safari*/
					$options[] = array( "name" => "Safari Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_safari_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Safari",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_safari",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Candelelight*/
					
					$options[] = array( "name" => "Candelelight Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_candel_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Candelelight",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_candel",
					"std" => "",
					"type" => "webq_editor"); 
					
					
					/*Private*/
					
					$options[] = array( "name" => "Private Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_private_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Private",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_private",
					"std" => "",
					"type" => "webq_editor"); 
					
						
					/*Post Pistes*/
					
					$options[] = array( "name" => "Post Pistes Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_post_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Post Pistes",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_post",
					"std" => "",
					"type" => "webq_editor"); 
					
						/*Tour*/
					
					$options[] = array( "name" => "Tour Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_tour_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Tour",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_tour",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Preferrd*/
					
					$options[] = array( "name" => "Preferrd Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_prf_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Preferrd",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_prf",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Sit Back*/
					
					$options[] = array( "name" => "Sit Back Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_sit_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Sit Back",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_sit",
					"std" => "",
					"type" => "webq_editor"); 
					
					
					/*Special*/
					
					$options[] = array( "name" => "Special Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_spcl_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Special",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_spcl",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Value & Convenience*/
					$options[] = array( "name" => "Value & Convenience Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_values_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Value & Convenience",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_values",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Girl Friend*/
					$options[] = array( "name" => "Girl Friend Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_gf_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Girl Friend",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_gf",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Booking*/
					$options[] = array( "name" => "Booking Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_booking_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Booking",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_booking",
					"std" => "",
					"type" => "webq_editor"); 
					
					
					/*Agency*/
					$options[] = array( "name" => "Agency Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_agn_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Agency",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_agn",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Excellence*/
					$options[] = array( "name" => "Excellence Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_exc_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Excellence",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_exc",
					"std" => "",
					"type" => "webq_editor"); 
					
					/*Complenning*/
					$options[] = array( "name" => "Complenning Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_com_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Complenning",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_com",
					"std" => "",
					"type" => "webq_editor");
					
					/*Discretion*/
					$options[] = array( "name" => "Discretion Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_dis_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Discretion",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_dis",
					"std" => "",
					"type" => "webq_editor");
					
					/*Luxury*/
					$options[] = array( "name" => "Luxury Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_luxury_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Luxury",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_luxury",
					"std" => "",
					"type" => "webq_editor");
					
					/*Life*/
					$options[] = array( "name" => "Life Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_life_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Life",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_life",
					"std" => "",
					"type" => "webq_editor");
					
					 /*Luxurious*/
					 $options[] = array( "name" => "Luxurious Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_luxu_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Luxurious",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_luxu",
					"std" => "",
					"type" => "webq_editor");
					
					/*Internationally*/
					
					$options[] = array( "name" => "Internationally Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_inter_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Internationally",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_inter",
					"std" => "",
					"type" => "webq_editor");
					
					/* Beautiful Companion Dates*/
					
					$options[] = array( "name" => "Beautiful Companion Dates Heading",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_beatiful_head",
					"std" => "",
					"type" => "webq_editor"); 
					
					$options[] = array( "name" => "Beautiful Companion Dates",
					"desc" => "Here you can enter any text",
					"id" => "webq_vip_beatiful",
					"std" => "",
					"type" => "webq_editor");
					
	
update_option('of_template',$options); 					  
update_option('of_themename',$themename);   
update_option('of_shortname',$shortname);

}
}
?>
