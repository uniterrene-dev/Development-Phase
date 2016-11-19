<?php
/*
 * Template Name: Home page Template
 * Description: Page template without sidebar
 */

get_header(); ?>

<section class="myBanner">

 <div class="wrapper">
  <div class="slider">
    <ul>
	 <?php   
	   $args = array('post_type' => 'slider');	 
	   $loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
	?>
      <li>
        <div class="image"> 
		
		<img src="<?php the_post_thumbnail('full'); ?>
        <div class="overlay"></div>
        <div class="sliderInfo">
          <h1><?php the_title(); ?></h1>
          <h2><?php the_excerpt(); ?></h2>
        </div>
         </div>
      </li> 
<?php endwhile;?>	  
    </ul>
  </div>

  <div class="navigation">
    <div class="button" data-dir="prev"><img src="<?php echo get_template_directory_uri(); ?>/images/right_nav.png" alt="#"></div>
    <div class="button" data-dir="next"><img src="<?php echo get_template_directory_uri(); ?>/images/left_nav.png" alt="#"></div>
  </div>
</div>
</section>


<section id="Fleet">
  <div class="container clearfix">
    <div class="fleet-container1 clearfix">
      <h3>ABOUT OUR FLEET</h3>
       <?php $recent1 = new WP_Query("page_id=54"); while($recent1->have_posts()) : $recent1->the_post();?>
	  <div class="fleet-img"> 
      <img src="<?php the_post_thumbnail(); ?>
      </div>
     
	  <div class="fleet-content">
        <h4><?php the_title(); ?></h4>
        <p><?php the_content(); ?></p>
      </div>
    </div>
	<?php endwhile;?>
	
    <div class="fleet-container2 clearfix">
      <?php $recent1 = new WP_Query("page_id=58"); while($recent1->have_posts()) : $recent1->the_post();?>
	 <div class="fleet-img"> 
      <img src="<?php the_post_thumbnail(); ?>
       </div>
      <div class="fleet-content">
        <h4><?php the_title(); ?></h4>
        <p><?php the_content(); ?></p>
      </div>
	  <?php endwhile;?>
    </div>
  </div>
</section>

<section id="services">
  <div class="services-cover clearfix">
    <div class="container">
      <h3>Our services</h3>
      <div id="w">
        <nav class="slidernav">
          <div id="navbtns" class="clearfix"> <a href="#" class="previous"><img src="images/pre.png" alt="previous" title="previous"/></a> <a href="#" class="next"><img src="images/next.png" alt="next" title="next"/></a> </div>
        </nav>
        <div class="crsl-items" data-navigation="navbtns">
          <div class="crsl-wrap">
            <div class="crsl-item">
              <div class="thumbnail"> <img src="<?php echo get_template_directory_uri(); ?>/images/thumb01.png" alt="thumb01"> </div>
              <h3><a href="#">Everyday Transport</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam augue elit, porttitor a sapien ultrices, tincidunt convallis leo. Suspendisse a posuere enim. Aenean ullamcorper bibendum odio dapibus semper. </p>
            </div>
            <!-- post #1 -->
            
            <div class="crsl-item">
              <div class="thumbnail"> <img src="<?php echo get_template_directory_uri(); ?>/images/thumb02.png" alt="thumb02"> </div>
              <h3><a href="#">Corporate Transfers</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam augue elit, porttitor a sapien ultrices, tincidunt convallis leo. Suspendisse a posuere enim. Aenean ullamcorper bibendum odio dapibus semper. </p>
            </div>
            <!-- post #2 -->
            
            <div class="crsl-item">
              <div class="thumbnail"> <img src="<?php echo get_template_directory_uri(); ?>/images/thumb03.png" alt="thumb03"></div>
              <h3><a href="#">Airport Transfers </a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam augue elit, porttitor a sapien ultrices, tincidunt convallis leo. Suspendisse a posuere enim. Aenean ullamcorper bibendum odio dapibus semper.</p>
            </div>
            <!-- post #3 -->
            
            <div class="crsl-item">
              <div class="thumbnail"> <img src="<?php echo get_template_directory_uri(); ?>/images/thumb02.png" alt="thumb02"> </div>
              <h3><a href="#">Corporate Transfers</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam augue elit, porttitor a sapien ultrices, tincidunt convallis leo. Suspendisse a posuere enim. Aenean ullamcorper bibendum odio dapibus semper. </p>
            </div>
            <!-- post #4 -->
            
            <div class="crsl-item">
              <div class="thumbnail"> <img src="<?php echo get_template_directory_uri(); ?>/images/thumb03.png" alt="thumb03"></div>
              <h3><a href="#">Airport Transfers </a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam augue elit, porttitor a sapien ultrices, tincidunt convallis leo. Suspendisse a posuere enim. Aenean ullamcorper bibendum odio dapibus semper.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="car-book">
  <div class="container clearfix">
    <h3>BOOK A CAR</h3>
    <div class="full-form clearfix">
      <form >
        <div class="main-left-form">
          <div class="left-form">
            <input type="text" placeholder="Name" id="name" class="inputFields forMargin"/>
           
              <input type="text" placeholder="Lastname" id="lastname" class="inputFields forMargin"/>
               <input type="text" placeholder="Email" id="email" class="inputFields forMargin"/>
             <input id="geocomplete" type="text" placeholder="Type in an address" size="90" />
             
             <input type="text" placeholder="Name" id="name" class="inputFields forMargin"/>
           
             
             <input id="geocomplete1" class="end_geo" type="text" placeholder="Type end address" size="90" />
      
            </div>
          </div>
        </div>
     
        <div class="clear"></div>
        <div class="submitBtn">
<input type="button" value="GET STARTED" id="my_btn" class="mainInputFormBtn" onClick="showHint()">
        </div>
      </form>
    </div>
  </div>
  </div>
</section>
<section id="joinus">
  <div class="joinus-cover clearfix">
    <div class="container">
      <div class="joinus-left">
        <h2>JOIN <br/>
          WITH US</h2>
        <p>You can apply with us , with full his / her full details like CV & attachment of documents</p>
      </div>
      <div class="joinus-right">
        <form>
          <div class="joinus-form">
            <input type="text" placeholder="FIRST NAME" class="inputFields forMargin" />
            <input type="text" placeholder="LAST NAME"  class="inputFields forMargin"/>
            <input type="text" placeholder="EMAIL ADDRESS"  class="inputFields forMargin"/>
            <input type="text" placeholder="PHONE NUMBER"  class="inputFields forMargin"/>
            <textarea name="comment" placeholder="FULL ADDRESS"  class="inputFields forMargin"></textarea>
            <input type="text" placeholder="UPLOAD YOUR CV"  class="inputFields forMargin"/>
            <div class="buttonHolder">
            <input type="submit" value="submit" class="submit-button"/>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</section><!--end of joinus section-->
<section class="contactUs">
  <div class="container">
    <div class="formSection">
      <form>
          <div class="joinus-form">
            <input type="text" placeholder="NAME" class="inputFields forMargin" />
             <input type="text" placeholder="PHONE NUMBER"  class="inputFields forMargin"/>
            <input type="text" placeholder="ENTER EMAIL"  class="inputFields forMargin"/>
           <textarea name="comment" placeholder="WRITE DOWN A FEW WORDS..."  class="inputFields forMargin"></textarea>  
            <div class="buttonHolder">
            <input type="submit" value="submit" class="submit-button"/>
            </div>
          </div>
          
        </form>
    </div>
    <div class="textSection">
      <h2>Contact Us</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitNunc sit amet orci dui. Fusce lectus libero, viverra vel quam quis</p>
    </div>
    <div class="clear"></div>
  </div>
</section>

<section class="logoCarousel">
  <div class="container">
    <div class="logosliderHolder">
      <ul id="flexiselDemo3">
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/sliderLogo1.png" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/sliderLogo2.png" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/sliderLogo3.png" /></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/sliderLogo4.png" /></li>   
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/sliderLogo5.png" /></li>                                               
      </ul> 
      <div class="clear"></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
