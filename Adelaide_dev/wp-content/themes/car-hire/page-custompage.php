<?php
/*
 * Template Name: Custom Page
 * Description: Page template without sidebar
 */
get_header();
?>
<section id="Fleet">
  <div class="container">
    <div class="fleet-container1">
      <h3 class="inner_header"><?php echo get_the_title(58);?></h3>
    </div>
    <ul class="rrrrr">
    <?php 
 $args = array(
	'sort_order' => 'asc',
	'sort_column' => 'menu_order',
	'hierarchical' => 1,
	'exclude' => '',
	'include' => '',
	'meta_key' => '',
	'meta_value' => '',
	'authors' => '',
	'child_of' => 58,
	'parent' => 58,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$mypages = get_pages($args);
$ds=2;
$tono = count($mypages)+1;
		foreach( $mypages as $page ) {
		$content = $page->post_content;
		$url = wp_get_attachment_url( get_post_thumbnail_id($page->ID) );
		if($ds%2==0){
			$css = 'odd_row';
			}else{
				$css = 'even_row';
				}
        ?>
        
	         <li class="row <?php //echo $css;?> clearfix">
			      <div class="fleet-img-inner"> 
			       <img src="<?php echo $url;?>" alt="#"/> 
			       <h4><?php echo get_the_title($page->ID);?></h4>
			      </div>
			     <!--  <div class="fleet-content-inner">
			        
			        <p><?php //echo $content;?></p>
			      </div> -->
	    	</li>
    <?php
    if($tono!=$ds){
	?>
    <!-- <div class="inner_border"><?php //echo $tono.'===>'.$ds;?></div> -->
        <?php
		}
		$ds++;
		}
		?>
		</ul>
  </div>
  <div class="container">
    <div class="fleet-container1">
      
      <h3 class="inner_header"><?php echo get_the_title(54);?></h3>
    </div>
    <ul class="rrrrr">
    <?php 
 $args = array(
	'sort_order' => 'asc',
	'sort_column' => 'menu_order',
	'hierarchical' => 1,
	'exclude' => '',
	'include' => '',
	'meta_key' => '',
	'meta_value' => '',
	'authors' => '',
	'child_of' => 54,
	'parent' => 54,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$mypages = get_pages($args);
//$ds=2;
$tonods = count($mypages)+1;
$dsdd = $tonods+$tono-1;
		foreach( $mypages as $page ) {
		$content = $page->post_content;
		$url = wp_get_attachment_url( get_post_thumbnail_id($page->ID) );
		if($ds%2==0){
			$css = 'odd_row';
			}else{
				$css = 'even_row';
				}
        ?>
         <li class="row <?php// echo $css;?> clearfix">
		      <div class="fleet-img-inner"> 
		       <img src="<?php echo $url;?>" alt="#"/>
		       <h4><?php echo get_the_title($page->ID);?></h4>
		      </div>
      <!-- <div class="fleet-content-inner">
        <h4><?php //echo get_the_title($page->ID);?></h4>
        <p><?php //echo $content;?></p>
      </div> -->
    </li>
    <?php
    if($dsdd!=$ds){
	?>
   <!--  <div class="inner_border"><?php //echo $dsdd.'===>'.$ds;?></div> -->
        <?php
		}
		$ds++;
		}
		?>
		</ul>
  </div>
</section>
<?php get_footer(); ?>
