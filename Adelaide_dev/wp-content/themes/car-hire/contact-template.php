<?php /* Template Name: Contact Template */ get_header(custom); ?>

<section id="inner_body">
      <div class="container">
		<div class="gags_area clearfix ">
		
			<div class="gig_box contact_left">
			   <h4>Get Connected</h4>
			   <div class="row">
				  <h5>Address</h5> 
				  <p></p>
			   </div>
			   <div class="row">
				  <h5>Phone</h5> 
				  <p>925-997-2214</p>
			   </div>
			   <div class="row">
				  <h5>Email</h5> 
				  <p>dannyj@mixxmusic.net</p>
			   </div>
			</div>
			
			
			<div class="gig_box">
				<h4>Please send your message</h4>	
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
						<?php the_content(); ?>			
		
					<?php endwhile; endif; ?>
			</div>

</div>
</div>
</section>


<?php get_footer(); ?>