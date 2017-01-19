<?php
/**
 * Template Name: modelprofile Page
 */
get_header('model');
?>
<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();
				
				echo get_the_ID();?>
				
				<section id="modelprofile-about" class="modelprofile-about-div">
  <div class="container">
  
    <div class="modelprofile-about-box">
      <ul>
       <li><a href="#"> rates </a></li>
       <li><a href="#"> Contact  </a></li>
       <li><a href="#"> Escort ladies </a></li>
       <li><a href="#"> cities </a></li>
      </ul>
      <div class="about-box-divider"> <span> </span> </div>
    </div>
    
    <div class="modelprofile-details">
     <ul>
      <li>
       <div class="modelprofile-details-title">
         Age
       </div>
       <div class="modelprofile-details-des">
         MID 20
       </div>
      </li>
      <li>
       <div class="modelprofile-details-title">
         Height
       </div>
       <div class="modelprofile-details-des">
         5’ 5” (168 CM)	
       </div>
      </li>
      <li>
       <div class="modelprofile-details-title">
         Weight
       </div>
       <div class="modelprofile-details-des">
          <?php echo get_post_meta( $post->ID, 'weight_', true ); ?>
       </div>
      </li>
      <li>
       <div class="modelprofile-details-title">
         Bust
       </div>
       <div class="modelprofile-details-des">
         34B (86 CM)
       </div>
      </li>
      <li>
       <div class="modelprofile-details-title">
         Waist
       </div>
       <div class="modelprofile-details-des">
         27” (69 CM)
       </div>
      </li>
      <li>
       <div class="modelprofile-details-title">
         Hips 
       </div>
       <div class="modelprofile-details-des">
         35” (96 CM)	
       </div>
      </li>
      <li>
       <div class="modelprofile-details-title">
         Hair
       </div>
       <div class="modelprofile-details-des">
         BRUNNETTE	
       </div>
      </li>
      <li>
       <div class="modelprofile-details-title">
         Eyes
       </div>
       <div class="modelprofile-details-des">
         HAZLE
       </div>
      </li>
     </ul>
    </div>
    
  </div>
</section>

<section id="model-gallery" class="model-gallery-div">
  	<div class="container-fluid gallery-nav">
		<div class="row">
			<div class="gallery-arrow-div">
				<div class="btn-prev arrow arrow-lg">
					<span class="icon"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
				</div>
				<div class="btn-next arrow arrow-lg">
					<span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
	</div>
    
	<article class="gallery-container-div">
							<div class="gallery-container">
								<ul style="width:4050px;">
															<li id="model-pic-0">
															<a href="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-1.jpg" class="fancybox" rel="gallery">
															<img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-1.jpg" alt="">
															</a>							
							                                </li>
															<li id="model-pic-1">
															<a href="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-2.jpg" class="fancybox" rel="gallery">
															<img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-2.jpg" alt="">
															</a>														
				                                            </li>
															<li id="model-pic-2">
															<a href="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-3.jpg" class="fancybox" rel="gallery">
															<img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-3.jpg" alt="">
															</a>							
							                                </li>
															<li id="model-pic-3">
															<a href="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-4.jpg" class="fancybox" rel="gallery">
															<img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-4.jpg" alt="">
															</a>
									
						                                    </li>
															<li id="model-pic-4">
															<a href="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-5.jpg" class="fancybox" rel="gallery">
															<img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-5.jpg" alt="">
															</a>								
						                                    </li>
															<li id="model-pic-5">
															<a href="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-6.jpg" class="fancybox" rel="gallery">
															<img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-6.jpg" alt="">
														    </a>
						                                    </li>
															<li id="model-pic-6">
															<a href="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-7.jpg" class="fancybox" rel="gallery">
															<img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-7.jpg" alt="">
															</a>
						                                    </li>
															<li id="model-pic-7">
															<a href="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-8.jpg" class="fancybox" rel="gallery">
															<img src="<?php echo esc_url( get_template_directory_uri() )?>/images/model-profile/model-profile-8.jpg" alt="">
															</a>							
						                                    </li>
                                                           
															</ul>
			</div>
		
			
	</article>   
</section>

<section id="model-descrip" class="model-descrip-div">
 <div class="container">
   <div class="model-descrip-box clearfix">
     <div class="model-descrip-left">
       <h3> My Location </h3>
       <p> In Dubai till the 27.03.2016 Hanover, Hamburg, Burlin, Dusseldorf </p>
     </div>
     <div class="model-descrip-right">
       <h3> Travel Expenses </h3>
       <p> Minimum booking 2 hours: 0 Euro - Hanover, Marbella Minimum booking 2 hours: 100 - Hamburg </p>
     </div>
     <div class="about-box-divider"> <span> </span> </div>
   </div>
 </div>
</section>

<section id="model-booking" class="model-booking-div">
  <div class="model-booking-heading">
    <h3> Marion </h3>
    <h3> Well-mannered and well-versed in social etiquette </h3>
  </div>
  <div class="model-booking-description">
    <div class="container">
      <div class="model-booking-box">
        <p> Since we started our operations back in 2008, being No.1 Lavish Mate® has evolved into one of the most reputable, trusted and established escort agencies in world. Based in West Palm Beach, 
Florida Lavish Mate® provides exclusive companion services to local and international clientele. </p>
        <p> Since we started our operations back in 2008, being No.1 Lavish Mate® has evolved into one of the most reputable, trusted and established escort agencies in world. Based in West Palm Beach, 
Florida Lavish Mate® provides exclusive companion services to local and international clientele. </p>
        <div class="model-booking-box-btn">
         <a href="#"> BOOK MARION </a>
        </div>
      </div>
      
    </div>
  </div>
  
</section>

<section id="vip-model-about" class="vip-model-about-div">
  <div class="container">
   <div class="vip-model-about-box clearfix">
    <div class="vip-model-about-video">
        <div class="vip-model-about-video-heading">
          <h3> more about me </h3>
        </div>  
        <!---Model Section --->

        <div class="index-slide">
            <ul class="target-slider"><!--ul start-->
             <li> <video preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" id="myVideo"><source src="http://localhost/public_html/newwp/lavish/wp-content/themes/lavish_new/video/movie.mp4"type="video/mp4"></video></li>
             <li> <video preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" id="myVideo"><source src="http://localhost/public_html/newwp/lavish/wp-content/themes/lavish_new/video/movie.mp4"type="video/mp4"></video></li>
             <li> <video preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" id="myVideo"><source src="http://localhost/public_html/newwp/lavish/wp-content/themes/lavish_new/video/movie.mp4"type="video/mp4"></video></li>
             	 
           </ul><!--End ul-->
        </div><!--End Div-->  
         
        <div class="vip-model-feedback">
          <h3> Feedback </h3>
          <h4> Peter 07.2017 </h4>
          <p> Helen is one of the most charming escort models that I have met in recent years. From our dinner date to the sensualmoments in intimate togetherness I never had the impression I booked an escort. I will definitely see Helen again. Thank you Scarlett for your recommendation! </p>
        </div>  
          
    </div>
    <div class="model-fact-div">
       <h3> Marion, Boca Raton </h3>
       <div class="model-fact-div-service"> 
        <h3> Services </h3>
        <ul>
         <li> Kissing </li>
         <li> Girlfriend Experience </li>
         <li> Travel </li>
        </ul>
       </div> 
       
       <h3> About Me </h3>
       <div class="fact-table">
        <ul>
        <li>
         <span class="fact-col">Ethnicity:</span>
         <span class="fact-col">xxx</span>
        </li>
        <li>
         <span class="fact-col">Conversasions:</span>
         <span class="fact-col">German, English</span>
        </li>
        <li>
         <span class="fact-col">Age:</span>
         <span class="fact-col">24</span>
        </li>
        <li>
         <span class="fact-col">Sexual Orientation:</span>
         <span class="fact-col">Sexy elegant and smart casual </span>
        </li>
        <li>
         <span class="fact-col">Education:</span>
         <span class="fact-col"> MMA </span>
        </li>
        <li>
         <span class="fact-col">Occupation:</span>
         <span class="fact-col"> Real estate agent </span>
        </li>
        <li>
         <span class="fact-col">Cuisine:</span>
         <span class="fact-col"> Italian, French, Japanese </span>
        </li>
        <li>
         <span class="fact-col">Drinks:</span>
         <span class="fact-col"> Champagne </span>
        </li>
        <li>
         <span class="fact-col">Flowers:</span>
         <span class="fact-col"> Roses </span>
        </li>
        <li>
         <span class="fact-col">Hobbies:</span>
         <span class="fact-col"> Travelling, sports, Fashion </span>
        </li>
        <li>
         <span class="fact-col">Perfumes:</span>
         <span class="fact-col"> Bond No9, Gucci </span>
        </li>
        <li>
         <span class="fact-col">Hand bags by:</span>
         <span class="fact-col"> LV, Gucci, Philipp Plein </span>
        </li>
        <li>
         <span class="fact-col">Loves shoes by:</span>
         <span class="fact-col"> Gucci, Christian Louboutin, Philipp Plein </span>
        </li>
        <li>
         <span class="fact-col">Character traits:</span>
         <span class="fact-col"> Sexy self-confident, open minded, humorous </span>
        </li>
        <li>
         <span class="fact-col">Trips:</span>
         <span class="fact-col"> Europe </span>
        </li>
        <li>
         <span class="fact-col">Duo Service:</span>
         <span class="fact-col"> Jasmin Stella Anna Cheryl </span>
        </li>
        <li>
         <span class="fact-col">Clothing Size:</span>
         <span class="fact-col"> US 2, UK 6, Italy 40 </span>
        </li>
        <li>
         <span class="fact-col">Bra size:</span>
         <span class="fact-col"> 34D </span>
        </li>
        <li>
         <span class="fact-col">Shoe size:</span>
         <span class="fact-col"> US 9, UK 7, EU 39 </span>
        </li>
        <li>
         <span class="fact-col">Jeans size:</span>
         <span class="fact-col"> 26 </span>
        </li>
        <li>
         <span class="fact-col">Wardrobe:</span>
         <span class="fact-col"> Louis Vuitton, Gucci, Philipp Plein </span>
        </li>
        <li>
         <span class="fact-col">Lingerie:</span>
         <span class="fact-col"> La Perla, Agent Provocateur </span>
        </li>
        <li>
         <span class="fact-col">Shave:</span>
         <span class="fact-col"> ffgf </span>
        </li>
        <li>
         <span class="fact-col">Piecing:</span>
         <span class="fact-col"> Body Button </span>
        </li>
        <li>
         <span class="fact-col">Tattoos:</span>
         <span class="fact-col"> No Tattoo,  </span>
        </li>
        <li>
         <span class="fact-col">Smoke:</span>
         <span class="fact-col"> Non smoker,  </span>
        </li>
        <li>
         <span class="fact-col">Drug user:</span>
         <span class="fact-col"> ffgf </span>
        </li>
       </div>
    </div>
   </div>
  </div>
</section>
			<?php	
				endwhile; // End of the loop.
			?>



<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() )?>/js/scripts.js" ></script>
<?php
get_footer();
?>

