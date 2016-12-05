<?php 

/*

* The template for displaying the front page

*/

get_header(); 



global $vrsp_options;

?>

<banner>
    <div id="banner-slides" class="carousel slide"> 
      
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox"> 
        <?php 
            $args = array( 'post_type' => 'home_banner', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date', );
            $banner_list = new WP_Query( $args ); 

            while ($banner_list -> have_posts()) : $banner_list -> the_post();
        ?>
        <!-- slide -->
        <div class="item"> 
            <?php
                if ( has_post_thumbnail() ) { 
                    the_post_thumbnail( 'full' );
                } 
                else { 
                    _e( 'Sorry, no image found' ); 
                } 
            ?>
          <div class="carousel-caption">
            <h1 data-animation="animated zoomInUp"> <?php echo banner_content_and_button_link_get_meta( 'banner_content_and_button_link_first_content_line' ); ?> </h1>
            <h3 data-animation="animated zoomInUp"> <?php echo banner_content_and_button_link_get_meta( 'banner_content_and_button_link_second_content_line' ); ?> </h3>
            <?php if(!empty(banner_content_and_button_link_get_meta( 'banner_content_and_button_link_download_profile_pdf_link' ))) { ?>
            <a class="btn btn-primary btn-lg" data-animation="animated zoomInUp" href="<?php echo banner_content_and_button_link_get_meta( 'banner_content_and_button_link_download_profile_pdf_link' ); ?>">Download Profile</a>
            <?php } ?>
          </div>
        </div>
        <!-- /.item -->

        <?php
            endwhile;
            wp_reset_query(); 
        ?>
        
      </div>
      <!-- /.carousel-inner --> 
      
      <!-- Controls --> 
      <a class="left banner-controls" href="#banner-slides" role="button" data-slide="prev"> 
      <!--<span class="glyphicon fa-angle-left" aria-hidden="true"></span>--> 
      <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> <a class="right banner-controls" href="#banner-slides" role="button" data-slide="next"> 
      <!--<span class="glyphicon fa-angle-right" aria-hidden="true"></span>--> 
      <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
    <!-- /.carousel --> 
</banner> 


<section id="about-company">
    <div class="container">
        <div class="row">
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="about-img-box"> 
                    <div class="welcome-img"> 
                        <?php if(has_post_thumbnail()){ ?>
                        <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>" alt="" class="img-responsive" /> 
                        <?php } ?>
                    </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="welcome-content">
                  <div class="heading-text">
                    <?php 
                        $spanvalue = page_title_field_get_meta( 'page_title' );
                        $words = page_title_field_get_meta( 'page_title_no_of_words' );
                        $words = $words-1;
                      $arr = explode(' ',trim($spanvalue));
                      $arrre = '';
                      for($ds = 0; $ds <= count($arr); $ds++){
                        $arrre .= $arr[$ds].' ';          
                        if($words == $ds){ 
                          $arrre .="</span>";
                        }else{

                        }
                      }
                      ?>
                      <h3><span><?php echo $arrre; ?></h3>
                  </div>
                  <?php the_content(); ?>             
                  </div>
              </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<services>
  <section id="services-div" class="services-div">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text heading-texts">
            <h3> <span> Services </span> We Do </h3>
          </div>
        </div>
        <div class="services-div-box">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <?php
              $audit_args=array(
                'name' => 'audit-assurance',
                'post_type' => 'page',
                'post_status' => 'publish',
                'numberposts' => 1,
              );

              $audit_page = get_posts($audit_args);

              //print_r($audit_page);

              if( $audit_page ) {   
            ?>
            <div class="services-div">
              <div class="services-div-img"> 
                  <?php if(has_post_thumbnail()){ ?>
                    <img src="<?php echo get_the_post_thumbnail_url($audit_page[0]->ID, 'full'); ?>" class="img-responsive" /> 
                  <?php } ?>
              </div>
              <div class="services-div-text">
                <h3> <?php echo $audit_page[0]->post_title; ?> </h3>
                <p><?php echo $audit_page[0]->post_content; ?></p>
                
                <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo $audit_page[0]->post_name; ?>" class="button-div"> Read More </a> 
              </div>
            </div>
            <?php } ?>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="services-div">
              <div class="services-div-img"> <img src="<?php echo get_bloginfo('template_url') ?>/images/services-img-2.jpg" class="img-responsive"/> </div>
              <div class="services-div-text">
                <h3> Taxation </h3>
                <p> Consultancy on TDS & processing TDS refunds Preparation, Review and Filing of Income Tax... </p>
                <a href="#" class="button-div"> Read More </a> </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

            <div class="services-div">
              <div class="services-div-img"> <img src="<?php echo get_bloginfo('template_url') ?>/images/services-img-3.jpg" class="img-responsive"/> </div>
              <div class="services-div-text">
                <h3> Business Advisory </h3>
                <p> Company Incorporation & Management Restructuring, Merger... </p>
                <a href="#" class="button-div"> Read More </a> </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</services>

<quotes>
  <section id="quotes" class="quotes-div">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="heading-text quotes-heading-text">
            <h3> <span> Quotes </span> </h3>
          </div>
        </div>
        <div class="quotes-box">
          <div class="auther-icon"> <img src="<?php echo get_bloginfo('template_url') ?>/images/invited.png" /> </div>
          <div class="quotes-box-text">
            <ul id="flexiselDemo2" class="">
                <?php 
                    $args = array( 'post_type' => 'home_quotes', 'posts_per_page' => -1, 'order' => 'DESC', 'orderby' => 'date', );
                    $quotes = new WP_Query( $args ); 

                    while ($quotes -> have_posts()) : $quotes -> the_post();
                ?>
                <li>
                    <?php the_content(); ?>
                    <p><i><?php the_title(); ?></i></p>
                </li>
                <?php
                    endwhile;
                    wp_reset_query(); 
                ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</quotes>


<portfolio>
  <section id="portfolio" class="portfolio-div">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <div class="tex-calender">
            <div class="heading-text heading-texts">
              <h3><img src="<?php echo get_bloginfo('template_url') ?>/images/calendar-icon.png" /> <span> Tax </span> Calendar </h3>
            </div>
            <div class="tex-calender-box">
              <ul>
                <li>
                  <h4><span><img src="<?php echo get_bloginfo('template_url') ?>/images/calendar-icon-small.png" /></span> June 26, 2016 </h4>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.It has survived not only five centuries, but also the leap into </p>
                </li>
                <li>
                  <h4><span><img src="<?php echo get_bloginfo('template_url') ?>/images/calendar-icon-small.png" /></span> June 26, 2016 </h4>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.It has survived not only five centuries, but also the leap into </p>
                </li>
              </ul>
              <button class="button-div"> View All </button>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <div class="tex-calender">
            <div class="heading-text heading-texts">
              <h3><img src="<?php echo get_bloginfo('template_url') ?>/images/business-man-icon.png" /> <span> Our </span> Team </h3>
            </div>
            <?php
              $team_args=array(
                'name' => 'our-team',
                'post_type' => 'page',
                'post_status' => 'publish',
                'numberposts' => 1,
              );

              $team_page = get_posts($team_args);

              //print_r($team_page);

              if( $team_page ) {   
            ?>
            <div class="team-box">
              <div class="team-img"> 
                <?php if(has_post_thumbnail()){ ?>
                    <img src="<?php echo get_the_post_thumbnail_url($team_page[0]->ID, 'full'); ?>" class="img-responsive" /> 
                  <?php } ?>
              </div>
              <div class="team-content">
                <p><?php echo $team_page[0]->post_excerpt; ?></p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo $team_page[0]->post_name; ?>" class="button-div"> Know About Our Team </a> </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
</portfolio>


<blog>
  <section id="blog" class="blog-div">
    <div class="container">
      <div class="row">
        <div class="recent_update col-lg-5 col-md-5 col-sm-5 col-xs-12">
          <div class="heading-text heading-texts">
            <h3> <span> Recent </span> Updates </h3>
          </div>
          <div class="recent-update-box">
            <?php 
              $recent_query = new WP_Query( 'page_id=143' );
              while ($recent_query -> have_posts()) : $recent_query -> the_post();
            ?>
            <div class="recent-update-img"> 
              <?php
                if ( has_post_thumbnail() ) {
              ?>
              <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive" />
              <?php
                  }
                else { 
                _e( 'Sorry, no image found' ); 
                }
              ?>
            </div>
            <div class="recent-update-text">
              <p><?php the_content(); ?></p>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>recent-updates" class="button-div"> Read More </a> 
            </div>
            <?php
              endwhile;
              wp_reset_postdata();
            ?>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
          <div class="heading-text heading-texts">
            <h3> <span> Useful </span> Links </h3>
          </div>
          <div class="useful-links-box">
            <div class="panel-group wrap" id="accordion" role="tablist" aria-multiselectable="true">
              
              <?php 
                $args = array( 'post_type' => 'useful_link', 'posts_per_page' => 4, 'order' => 'ASC', 'orderby' => 'date', );
                $usefuls = wp_get_recent_posts( $args, ARRAY_A );

                //print_r($usefuls);

                $i = 1;

                foreach ($usefuls as $useful) {

                  //echo "<pre>";

                 // print_r($useful);
                 
                //while ($usefuls -> have_posts()) : $usefuls -> the_post();
            ?>

              <div class="panel">
                <div class="panel-heading" role="tab" id="heading<?php echo $i; ?>">
                  <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"> <?php echo $useful['post_title']; ?> </a> </h4>
                </div>
                <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                  <div class="panel-body">
                    <?php echo $useful['post_content']; ?>
                  </div>
                </div>
              </div>
              <!-- end of panel -->

              <?php 
               $i++; 
              }              
               wp_reset_query(); ?>
              
              
              <div>
                <div class="view_button"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>useful-links/" class="button-div"> View All </a> </div>
              </div>
            </div>
            <!-- end of #bs-collapse  --> 
            
          </div>
        </div>
      </div>
    </div>
  </section>
</blog>

<?php get_footer(); ?>