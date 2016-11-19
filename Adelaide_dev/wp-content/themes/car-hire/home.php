<?php

/*

 * Template Name: Home Template

 * Description: Page template without sidebar

 */

get_header(); ?>
<section id="Fleet">
  <div class="container clearfix">
    <div class="fleet-container1 clearfix">
      <h3>ABOUT OUR FLEET</h3>
      <?php $recent1 = new WP_Query("page_id=58"); while($recent1->have_posts()) : $recent1->the_post();?>
      <div class="fleet-img">
      	 <?php the_post_thumbnail(); ?>
      	 <div class="headAndReadmore clearfix">
	      	 <h4>
	          <?php the_title(); ?>
	        </h4>
	         <a href="<?php echo get_permalink(54);?>" class="btn-read-more">Read More</a>
         </div>
       </div>
   	<?php endwhile;?>
   	<?php $recent1 = new WP_Query("page_id=54"); while($recent1->have_posts()) : $recent1->the_post();?>
   	
      <div class="fleet-content">
        	 <?php the_post_thumbnail(); ?>
        	 <div class="headAndReadmore clearfix">
        	 <h4>
	          <?php the_title(); ?>
	        </h4>
			<a href="<?php echo get_permalink(54);?>" class="btn-read-more">Read More</a>
			</div>
        <!-- <p>
          <?php //the_content(); ?>
         
        </p> -->
      </div>
      <?php endwhile;?>
    </div>
   
    <div class="fleet-container2 clearfix">
      
      <div class="fleet-img"> </div>
      <div class="fleet-content">
        
        <!-- <p>
          <?php //the_content(); ?>
         
        </p> -->
      </div>
      
    </div>
  </div>
</section>

<!--
<section id="services">
  <div class="services-cover clearfix">
    <div class="container">
      <h3>Our services</h3>
		
		<div class="servicesList">
			<ul>
				<li class="serviceBox">
					<div class="box">
						<img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/uploads/2016/08/thumb01.png" alt="">
					</div>
					<div class="box serviceHead">
						<h3><a href="#">Corporate Transfers</a></h3>
					</div>
				</li>
				<li class="serviceBox">
					<div class="box">
						<img src="http://onlinedevserver.biz/html/adelaide/images/thumb02.png" alt="">
					</div>
					<div class="box serviceHead">
						<h3><a href="#">Airport Transfers</a></h3>
					</div>
				</li>
				<li class="serviceBox">
					<div class="box">
						<img src="http://onlinedevserver.biz/html/adelaide/images/thumb03.png" alt="">
					</div>
					<div class="box serviceHead">
						<h3><a href="#"> Conferences</a></h3>
					</div>
				</li>
			</ul>
		</div>
		<div class="servicesList">
			<ul>
				<li class="serviceBox">
					<div class="box">
						<img src="http://onlinedevserver.biz/html/adelaide/images/thumb03.png" alt="">
					</div>
					<div class="box serviceHead">
						<h3><a href="#"> Weddings</a></h3>
					</div>
				</li>
				<li class="serviceBox">
					<div class="box">
						<img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/uploads/2016/08/thumb01.png" alt="">
					</div>
					<div class="box serviceHead">
						<h3><a href="#"> Special Events</a></h3>
					</div>
				</li>
				<li class="serviceBox">
					<div class="box">
						<img src="http://onlinedevserver.biz/html/adelaide/images/thumb02.png" alt="">
					</div>
					<div class="box serviceHead">
						<h3><a href="#"> Tours</a></h3>
					</div>
				</li>
			</ul>
		</div>

    </div>
  </div>
</section>
-->

<section id="services">
  <div class="services-cover clearfix">
    <div class="container">
      <h3>Our services</h3>
     <div class="service-div">  
      <ul>
      <li class="highlight-box">
       
       <div class="highlight-frame">
        <img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/uploads/2016/10/corporate-transfers.jpg" alt="Corporate Transfers" />
        
         <div class="highlight-content">
          <p>For the ultimate corporate transport, travel in comfort and style with our professional, discreet chauffeurs. Your time is precious, so don't waste it driving or waiting in queues for taxis. </p>
         </div>

       
       </div>
       
       <h2>Corporate Transfers</h2>
      </li>
  
    
      <li class="highlight-box">
       
       <div class="highlight-frame">
        <img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/uploads/2016/10/airport-transfers.jpg" alt="Airport Transfers" />
        
         <div class="highlight-content">
          <p>Avoid the traffic and taxi queues! Allow Hughes to take the stress out of travelling to and from the airport. Book your luxury chauffeur-driven vehicle now.</p>
         </div>

       </div>
       
       <h2>Airport Transfers</h2>
      </li>
      
    
      <li class="highlight-box">
       
       <div class="highlight-frame">
        <img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/uploads/2016/10/Conferences.jpg" alt="Conferences" />
       
         <div class="highlight-content">
          <p>Understanding the importance of detailed conference planning, Hughes specialises in providing superior transport for all your delegates and guests. </p>
         </div>

       </div>
       
       <h2>Conferences</h2>
      </li>
  
    
      <li class="highlight-box">
       
       <div class="highlight-frame">
        <img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/uploads/2016/10/weddings.jpg" alt="Weddings" />
       
         <div class="highlight-content">
          <p>You deserve the very best on your wedding day. For generations Hughes has been trusted to chauffeur brides and bridal parties in style. </p>
         </div>

       </div>
       
       <h2>Weddings</h2>
      </li>
      
    
      <li class="highlight-box">
       
       <div class="highlight-frame">
        <img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/uploads/2016/10/special-events.jpg" alt="Special Events" />
       
         <div class="highlight-content">
          <p>Hughes can make your special event even more special. 
    Hughes offers the perfect transport option whatever the Special Event, from Hens Nights and Race Days to School Formals.</p>
         </div>

       </div>
       
       <h2>Special Events</h2>
      </li>
  
    
      <li class="highlight-box">
       
       <div class="highlight-frame">
        <img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/uploads/2016/10/tours.jpg" alt="Tours" />
        
         <div class="highlight-content">
          <p>Hughes’ experienced and knowledgeable chauffeurs can show you all of the must-see sites. Tours are designed to suit your needs, utilising our wide selection of well appointed vehicles.</p>
         </div>

       </div>
       
       <h2>Tours</h2>
      </li>
     </ul> 
  </div>
 </div>
 </div>
</section> 
  
  
<section id="car-book">
  <div class="container clearfix">
    <h3>BOOK A CAR</h3>
    
    <div class="full-form clearfix">
      
      <ul>
        <li class="left-form">
           <h5>BOOKING PERSON DETAILS</h5>
            <input type="text" id="txtNumHours" placeholder="NAME" class="inputFields forMargin" required="required"/>
          <input type="text" id="txtEmail" placeholder="EMAIL" class="inputFields forMargin"/>
          
         
               <input type="tel" id="txtPhone" placeholder="PHONE NO"  class="inputFields forMargin" required="required"/>
           
            

        
        
          <div class="row clearfix check">
               <input type="checkbox" id="chkIsTeamLead" name="check"> <label>Please Check this if booking person and passenger are same! </label>
          </div>
       
         
        </li>
        <li class="left-form">
             <h5>PASSENGER DETAILS</h5>
             <input type="text" id="firstname" name="firstname" placeholder="NAME" class="inputFields forMargin"/>
            <input type="email" id="email" placeholder="EMAIL" class="inputFields forMargin"/>
             <!-- country codes (ISO 3166) and Dial codes. -->
			<input type="tel" placeholder="PHONE NO" id="phn" class="inputFields forMargin"/> 
            
             
            <div class="selectFields" id="no_of_people" onClick="showhide()">
              <select name="cars1" class="inputFields">
                <option value="Text" selected>No. of Adults</option>
                <option value="Text1">1</option>
                <option value="Text2">2</option>
                <option value="Text3">3</option>
                 <option value="Text4">4</option>
               <option value="Text5">More than 4</option>
              </select>
            </div>
             <div id="no_of_people_total_div" style="display:none;"><input type="text" id="no_of_people_total" placeholder="No. of Adults" class="inputFields forMargin"/></div>
             <div class="selectFields" id="no_of_suitcases" onClick="showhide()">
              <select name="cars2" class="inputFields">
                <option value="Text" selected>No of suitcases </option>
                <option value="Text1">1</option>
                <option value="Text2">2</option>
                <option value="Text3">3</option>
                 <option value="Text4">4</option>
               <option value="Text5">More than 4</option>
              </select>
              </div>
               <div id="no_of_suit_total_div" style="display:none;"><input type="text" id="no_of_suit_total" placeholder="No. of Adults" class="inputFields forMargin"/></div>
               <div class="selectFields" id="no_of_child" onClick="showhide()">
                <select name="cars3" class="inputFields">
                  <option value="Text" selected>No of children’s</option>
                  <option value="Text1">1</option>
                  <option value="Text2">2</option>
                  <option value="Text3">3</option>
                  <option value="Text4">4</option>
                  <option value="Text5">More than 4</option>
               </select>
            </div>
             <div id="no_of_child_total_div" style="display:none;"><input type="text" id="no_of_child_total" placeholder="No. of Adults" class="inputFields forMargin"/></div>
        </li>
        <li class="left-form">
          <h5>TRAVEL DETAILS</h5>
          <div class="date pull_left demo-1">
                                   <input type="text" name="form" placeholder="Pick Up DATE" class="timing" 
                                   style="width: 100%;
    background-color: #fff;
    border: 1px solid #dfdcdc;
    margin-bottom: 5px;
    font-size: 10px;
    color: #545252 !important;
    padding: 18px;">  
                                  </div>
          
         <input type="text"  id='timepicker' placeholder="PICK Up TIME" class="inputFields forMargin"/>
                                 
         <!--  pick up -->
          <div class="selectFields" id="pickup"  >
            <select name="cars5" class="inputFields" onchange="checkOnChange(this)">
              <option id="pick_up_type" value="Pick up type" selected>Pick up type</option>
              <option id="syd_apt" value="Sydney International Airport">Sydney International Airport</option>
			        <option id="syd_dpt" value="Sydney Domestic Airport">Sydney Domestic Airport</option>
              <option id="syd_cdn" value="Sydney City">Sydney City</option>
              <option id="Ade_apt" value="Adelaide Airport">Adelaide Airport</option>
              <option id="Ade_cdn" value="Adelaide City">Adelaide City</option>
            </select>
          </div>

          <input id="geocomplete" type="text" class="inputFields forMargin" placeholder="Pick up address" size="90" style="display:none;" />
          <button style="display:none;" id="pst_cd1" onClick="dolookup();">Check the post code</button>
          <input id="post_code" type="text" disabled="" class="inputFields forMargin" placeholder="Pick up postal code" size="90" style="display:none;" />
          <!-- drop off -->
          <div class="selectFields" id="drop_off" >
            <select name="cars4"  class="inputFields" onchange="checkOnChange2(this)">
                <option id="drop_off_type" value="Drop off type " selected>Drop off type </option>
                <option id="syd_apt_drp" value="Sydney International Airport">Sydney International Airport</option>
  			        <option id="syd_dpt_drp" value="Sydney Domestic Airport">Sydney Domestic Airport</option>
                <option id="syd_cdn_drp" value="Sydney City">Sydney City</option>
                <option id="Ade_apt_drp" value="Adelaide Airport">Adelaide Airport</option>
                <option id="Ade_cdn_drp" value="Adelaide City">Adelaide City</option>
            </select>
          </div>

          <div>
          
          <input id="geocomplete1"  class="inputFields forMargin end_geo" type="text" placeholder="Drop off address" size="90" style="display:none;"/>
           <button style="display:none;" id="pst_cd2" onClick="dolookupnew();">Check the post code</button>
              <input id="post_code2" type="text" disabled="" class="inputFields forMargin" placeholder="Drop off postal code" size="90" style="display:none;" />
          </div>
          
         
         <div class="extra_text">
			 
			 <input id="ext_text" type="text"  class="inputFields forMargin" placeholder="Extra Instraction" size="90" />
			 
			 </div>
         
         
         
        </li>
      </ul><!-- 
       <span> * All Mandatory Fields</span> -->
    </div> 
        <div class="submitBtn">
        <span class="erromMsg"></span>
         <!--  <div class="btnOverlay"></div> -->
          <input type="button" value="GET STARTED" id="my_btn" class="submit-button mainInputFormBtn" onClick="emailClicked();">
        </div>
  
    </div>
  </div>
  </div>
</section>
<div id="addtocartds">
	  
	 
    </div> 
<section id="joinus">
  <div class="joinus-cover clearfix">
    <div class="container">
      <div class="joinus-left">
        <h2>JOIN <br/>
          US</h2>
        <p><?php $my_postid = 43;//This is page id or post id
$content_post = get_post($my_postid);
$content = $content_post->post_content;

echo $content;?></p>
      </div>
      <div class="joinus-right">
       <div class="joinus-form">
        <?php echo do_shortcode('[contact-form-7 id="92" title="Upload cv"]');?>
        </div>
      </div>
    </div>
  </div>
  <div class="clear"></div>
</section>
<!--end of joinus section-->

<section class="contactUs" id="contactUs">
  <div class="container">
	  <div class="textSection">
      <h2>Contact Us</h2>
      <p></p>
    </div>
    <div class="formSection">
        <div class="joinus-form">
         <?php echo do_shortcode('[contact-form-7 id="675" title="Contact Us"]');?>          
        </div>
    </div>
    
    <div class="clear"></div>
  </div>
</section>
<section class="logoCarousel">
<div class="container">
  <div class="logosliderHolder">
    <ul id="flexiselDemo3">
      <?php   

	   $args = array('post_type' => 'brands');	 

	   $loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post();

	?>
      <li>
        <?php the_post_thumbnail(); ?>
      </li>
      <?php endwhile;?>
    </ul>
    <div class="clear"></div>
  </div>
</div>
</section>
<span id="psterror" style="display:none"> </span>

<span id="phnerror" style="display:none"> </span>

<span id="phnerror2" style="display:none"> </span>


<span id="emailerror" style="display:none"> </span>
<span id="emailerror2" style="display:none"> </span>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>

<script type="text/javascript">
$('#terms').click(function(e) {
	$('.wp-cart-button-form input[type="submit"]').prop('disabled', false);
});

/* Function onchange check ranit 16-11-16 */

  function checkOnChange(theChangedVal){
     // alert(theChangedVal.value);
      var selectedVal = theChangedVal.value;
      var str2 = "City";
      if(selectedVal.indexOf(str2) != -1){
         // alert(str2 + " found");
         $('#geocomplete').show();
         $('#pst_cd1').show();
         $('#post_code').show();

      }else{
          $('#geocomplete').hide();
         $('#pst_cd1').hide();
         $('#post_code').hide();
      }

      //field options control

      var syd_inter = 'Sydney International';
      var syd_domes = 'Sydney Domestic';
      var syd_city =  'Sydney City';
      var adl_airPrt = 'Adelaide Airport';
      var adl_city = 'Adelaide City';
        if(selectedVal.indexOf(syd_inter) != -1){          
          $('#syd_apt_drp').hide();
          $('#Ade_apt_drp').hide();
          $('#Ade_cdn_drp').hide();
          $('#syd_dpt_drp').show();      
          $('#syd_cdn_drp').show();      

        }else if(selectedVal.indexOf(syd_domes) != -1){
          $('#syd_apt_drp').show();
          $('#syd_dpt_drp').hide();
          $('#syd_cdn_drp').show();
          $('#Ade_apt_drp').hide();      
          $('#Ade_cdn_drp').hide();
        }else if(selectedVal.indexOf(syd_city) != -1){
          $('#syd_apt_drp').show();
          $('#syd_dpt_drp').show();
          $('#syd_cdn_drp').show();
          $('#Ade_apt_drp').hide();      
          $('#Ade_cdn_drp').hide();
        }else if(selectedVal.indexOf(adl_airPrt) != -1){
          $('#syd_apt_drp').hide();
          $('#syd_dpt_drp').hide();
          $('#syd_cdn_drp').hide();
          $('#Ade_apt_drp').hide();      
          $('#Ade_cdn_drp').show();
        }else if(selectedVal.indexOf(adl_city) != -1){
          $('#syd_apt_drp').hide();
          $('#syd_dpt_drp').hide();
          $('#syd_cdn_drp').hide();
          $('#Ade_apt_drp').show();      
          $('#Ade_cdn_drp').show();
        }


        






  }

  function checkOnChange2(theChangedVal){
     // alert(theChangedVal.value);
      var selectedVal = theChangedVal.value;
      var str2 = "City";
      if(selectedVal.indexOf(str2) != -1){
         // alert(str2 + " found");
         $('#geocomplete1').show();
         $('#pst_cd2').show();
         $('#post_code2').show();

      }else{
          $('#geocomplete1').hide();
         $('#pst_cd2').hide();
         $('#post_code2').hide();
      }
  }






// /* start function showHide */ 
// function showhide(){
  	
//   	var drop_off = $( "#drop_off option:selected" ).text();
//   	var pickup = $( "#pickup option:selected" ).text();
  	
//   	var location = $('#geocomplete').val();
//   	var end = $('.end_geo').val();
  	
//   	var post_code = $("#post_code").val();
//   	var post_code2 = $("#post_code2").val();

//   	var people_no = $( "#no_of_people option:selected" ).text();
//   	var suitcases_no = $( "#no_of_suitcases option:selected" ).text();
//   	var child_no = $( "#no_of_child option:selected" ).text();
  	
//   	var car_type = $( "#car_type option:selected" ).text();
  	
//   	//var adelaide_car = $("#adelaide_car").text();
//   	//var sydney_car = $("#sydney_car").text();
  	
//       var type_services = $("#type_services option:selected" ).text();

       
  	
//   	if(people_no == "More than 4")
//   	{
//   		$("#no_of_people_total_div").css("display", "block");
//   		$("#no_of_people").css("display", "none");
  		
//   	}
  	
//   	if(suitcases_no == "More than 4")
//   	{
  		
//   		$("#no_of_suit_total_div").css("display", "block");
//   		$("#no_of_suitcases").css("display", "none");
  		
//   	}
  	
//   	if(child_no == "More than 4")
  	
//   	{
//   		$("#no_of_child_total_div").css("display", "block");
//   		$("#no_of_child").css("display", "none");
  		
//   	}
//   	/*******************************************************************************************/
//   	/*pickup type is Adelaide City*/
//   	if(pickup == "Adelaide City")
//   	{
  		
//   		$("#ade_sub_drp").css("display", "block");
//   		$("#Ade_cdn_drp").css("display", "block");
//   		$("#Ade_apt_drp").css("display", "block");
  		
  		
//   		$("#syd_apt_drp").css("display", "none");
//   		$("#syd_dpt_drp").css("display", "none");
//   		$("#syd_cdn_drp").css("display", "none");
//   	}
//   	/*Drop off type is Adelaide City*/
//   	if(drop_off == "Adelaide City")
//   	{
//   		$("#Ade_sub").css("display", "block");
//   		$("#Ade_cdn").css("display", "block");
//   		$("#Ade_apt").css("display", "block");
  		
//   		$("#syd_apt").css("display", "none");
//   		$("#syd_dpt").css("display", "none");
//   		$("#syd_cdn").css("display", "none");
//   	}
  	
//   	/*******************************************************************************************/
//   	/*pickup type is Adelaide Airport*/
//   	if(pickup == "Adelaide Airport")
//   	{
//   		$("#Ade_cdn_drp").css("display", "block");
//   		$("#Ade_apt_drp").css("display", "none");

//   		$("#syd_apt_drp").css("display", "none");
//   		$("#syd_dpt_drp").css("display", "none");
//   		$("#syd_cdn_drp").css("display", "none");
//   	}
//   	/*Drop off type is Adelaide Airport*/
//   	if(drop_off == "Adelaide Airport")
//   	{
//   		$("#Ade_cdn").css("display", "block");
//   		$("#Ade_apt_drp").css("display", "none");

//   		$("#syd_apt").css("display", "none");
//   		$("#syd_dpt").css("display", "none");
//   		$("#syd_cdn").css("display", "none");
//   	}
  	
//   	/*******************************************************************************************/
  	
  		
//   	/*******************************************************************************************/
  	
//   	/*pickup type is Sydney International Airport*/
//   	if(pickup == "Sydney International Airport")
//   	{
  		
//   		$("#syd_dpt_drp").css("display", "block");
//   		$("#syd_cdn_drp").css("display", "block");
  		
//   		$("#syd_apt_drp").css("display", "none");
//   		$("#Ade_cdn_drp").css("display", "none");
//   		$("#Ade_apt_drp").css("display", "none");
//   	}


//   	/*Drop off type is Sydney International Airport*/
//   	if(drop_off == "Sydney International Airport")
//   	{
  		
//   		$("#syd_dpt").css("display", "block");
//   		$("#syd_cdn").css("display", "block");
  		
//   		$("#syd_apt").css("display", "none");
//   		$("#Ade_cdn").css("display", "none");
//   		$("#Ade_apt").css("display", "none");
  		
//   	}
  	
//     /*******************************************************************************************/
   
//     /*******************************************************************************************/
  	
//   	/*pickup type is Sydney Domestic Airport*/
//   	if(pickup == "Sydney Domestic Airport")
//   	{
//   		$("#syd_apt_drp").css("display", "block");
//   		$("#syd_cdn_drp").css("display", "block");
  		
//   		$("#syd_dpt_drp").css("display", "none");
//   		$("#Ade_cdn_drp").css("display", "none");
//   		$("#Ade_apt_drp").css("display", "none");
//   	}

//   	/*Drop off type is Sydney Domestic Airport*/
//   	if(drop_off == "Sydney Domestic Airport")
//   	{
//   		$("#syd_apt").css("display", "block");
//   		$("#syd_cdn").css("display", "block");
  		
//   		$("#syd_dpt").css("display", "none");
//   		$("#Ade_cdn").css("display", "none");
//   		$("#Ade_apt").css("display", "none");
  		
//   	}
//     /*******************************************************************************************/
    
//     /*******************************************************************************************/
  	
//   	/*pickup type is Sydney City*/
//   	if(pickup == "Sydney City")
//   	{
//   		$("#syd_dpt_drp").css("display", "block");
//   		$("#syd_apt_drp").css("display", "block");
//   		$("#syd_cdn_drp").css("display", "block");
  		
//   		$("#Ade_cdn_drp").css("display", "none");
//   		$("#Ade_apt_drp").css("display", "none");
//   	}
  	

//   	/*Drop off type is Sydney City*/
//   	if(drop_off == "Sydney City")
//   	{
//   		$("#syd_dpt").css("display", "block");
//   		$("#syd_apt").css("display", "block");
//   	    $("#syd_cdn").css("display", "block");
  		
//   		$("#Ade_cdn").css("display", "none");
//   		$("#Ade_apt").css("display", "none");
  		
//   	}
  	
  	
  	
  	
//   	/*******************************************************************************************/
  	
//   	if(pickup == "Sydney City" || pickup == "Adelaide City"  )
//   	{
  	
//   	$("#geocomplete").css("display", "block");
//   	$("#post_code").css("display","block");
//   	$("#pst_cd1").css("display","block");
//     $('div').data("isOpened","1");
//   	}
//   	else
//   	{
//   	$("#geocomplete").css("display", "none");
//   	$("#post_code").css("display", "none");
//   	$("#pst_cd1").css("display", "none");

//   	}
  	
  	
//   	if(drop_off == "Sydney City" || drop_off == "Adelaide City"  )
//   	{	
//   	  $(".end_geo").css("display", "block");
//   	  $("#post_code2").css("display","block");
//   	  $("#pst_cd2").css("display","block");
//   	}
//   	else
//   	{
//   	 $(".end_geo").css("display", "none");
//        $("#post_code2").css("display","none");
//        $("#pst_cd2").css("display","none");
//   	}
  	
//   	 /*** If Pick up and drop is empty***/
//   	if(pickup == "Pick up type")
//   	{	
//           $("#Ade_sub").show();
//   		$("#Ade_cdn").show();
//   		$("#Ade_apt").show();
  		
//   		$("#syd_apt").show();
//   		$("#syd_dpt").show();
//   		$("#syd_cdn").show();
//   		$("#syd_sub").show();
  		
//      }
//   	if(drop_off == "Drop off type")
//   	{
//    		$("#ade_sub_drp").show();
//   		$("#Ade_cdn_drp").show();
//   		$("#Ade_apt_drp").show();
  		
//   		$("#syd_apt_drp").show();
//   		$("#syd_dpt_drp").show();
//   		$("#syd_cdn_drp").show();
//   		$("#syd_sub_drp").show();
//   	}
//   	/** end of pick up and droff**/
  	
//   	/********************************************************************************************/
  	
//   	if (location.indexOf("Sydney") >= 0)
//   	{
//   		$("#car_ald2").css("display", "none");
//   		$("#car_ald1").css("display", "none");

//   	}
  	
//   	if (end.indexOf("Sydney") >= 0)
//   	{
//   		$("#car_ald2").css("display", "none");
//   		$("#car_ald1").css("display", "none");

//   	}
  	
//   	if (location.indexOf("Adelaide") >= 0)
//   	{
//   		$("#car_syn1").css("display", "none");
//   		$("#car_syn2").css("display", "none");

//   	}
  	
//   	if (end.indexOf("Adelaide") >= 0)
//   	{
//   		$("#car_syn1").css("display", "none");
//   		$("#car_syn2").css("display", "none");

//   	}
  	
//    if(pickup=="Sydney International Airport" || pickup=="Sydney Domestic Airport" || pickup=="Sydney City" || pickup=="Sydney Suburb")
//   	{
//   	  $("#car_ald").prop("disabled", true);
//   	  $("#car_syn").prop("disabled", false);
//       $('div').data("isOpened","0");
//   	}
//     if(drop_off=="Sydney International Airport" || drop_off=="Sydney Domestic Airport" || drop_off=="Sydney City" || drop_off=="Sydney Suburb")
//   	{
//   	  $("#car_ald").prop("disabled", true);
//   	  $("#car_syn").prop("disabled", false);
//   	}	
  	
//   	if(pickup=="Adelaide Airport" || pickup=="Adelaide City" )
//   	{
//   	  $("#car_ald").prop("disabled", false);
//   	  $("#car_syn").prop("disabled", true);

//   	}
//     if(drop_off=="Adelaide Airport" || drop_off=="Adelaide City")
//   	{
//         $("#car_ald").prop("disabled", false);
//   	  $("#car_syn").prop("disabled", true);	
//   	}	

//   	if(car_type == "Adelaide")
//   	{
//   		$("#adelaide_car").css("display", "block");
  		
//   	}
//   	else
  	
//   	{
//   		$("#adelaide_car").css("display", "none");
  		
//   	}
  	
//   	if(car_type == "Sydney")
//   	{
//   		$("#sydney_car").css("display", "block");
  		
//   	}
//   	else
  	
//   	{
//   		$("#sydney_car").css("display", "none");
  		
//   	}
  	
// }
// /* end function show hide */




</script>

<script type="text/javascript">
// function clickedOnSubmit(){
//   if(firstName != '' && email != '' && date != '' && drop_off != 'Text' && pickup != 'Text' ){
//      emailClicked();
//   }else{
//    alert("home.php")
//   }
// }
function emailClicked() 
{

	
	var ajaxurl='<?php echo admin_url('admin-ajax.php'); ?>';
	

	
	var people_no = $( "#no_of_people option:selected" ).text();
	var suitcases_no = $( "#no_of_suitcases option:selected" ).text();
	var child_no = $( "#no_of_child option:selected" ).text();
		
	var drop_off = $( "#drop_off option:selected" ).text();
	var pickup = $( "#pickup option:selected" ).text();
	
	var name = $("#firstname").val();
	var email = $("#email").val();
	
	var date = $(".timing").val();
	var time = $("#timepicker").val();

	var location = $('#geocomplete').val();
	var end = $('.end_geo').val();
	
	var post_code = $("#post_code").val();
	var post_code2 = $("#post_code2").val();
	
	var book = $('#txtNumHours').val();
	var email_bk = $('#txtEmail').val();
	var phone =  $('#txtPhone').val();
	
	var psg_phone= $('#phn').val(); 
	
	var car_type = $( "#car_type option:selected" ).text();
	
	
	//~ var country_code2 =  $( "#no_of_countrycode2 option:selected" ).text();
	
	//~ var country_code =  $( "#no_of_countrycode2 option:selected" ).text();
	
	//~ psg_phone = country_code2+psg_phone;
	
	//~ phone = country_code+phone;
	
    var ext_text = $('#ext_text').val(); 
    
    var type_services = $("#type_services option:selected" ).text();
    
    var pcode_error="false";
    var pcode_error2="false";
    
    
    var phnerror = $('#phnerror').text(); 
    
    if(drop_off =="Adelaide City")
    {
		var pcode2 = "test";
		
	}
    if(drop_off =="Sydney City")
    {
		var pcode2 = "test";
		
	}
    if(pickup =="Sydney City")
    {
		var pcode = "test";
		
	}
    if(pickup =="Adelaide City")
    {
		var pcode = "test";
		
	}
	
	if(pcode == "test")
	{
		if(post_code == "" || post_code =="0")
		{
			pcode_error = "true";
		}
	}
	
	if(pcode2 == "test")
	{
		if(post_code2 == "" || post_code2 =="0")
		{
			pcode_error2 = "true";
			alert(post_code2);
		}
	}
	
	if(pcode == "test")
	{
		if(post_code == "" || post_code =="0")
		{
			pcode_error = "true";
			alert(post_code);
		}
	}
	 if(pcode_error == "false" || pcode_error2 == "false")
	 {
		 $('#psterror').text(1);
	 }
	 if(pcode_error == "true" || pcode_error2 == "true")
	 
	 {
		 alert("you have to get post code before proceeding");
		
		 $('#psterror').text("0");
	 }
	
	

	if($('#ade_car1').is(':checked') == true)
		{
			var car= $('#ade_car1').val();
		}
	
	 if($('#ade_car2').is(':checked') == true)
		{
			var car= $('#ade_car2').val();
		}			
		
	/*** SYDNEY ***/
		if($('#syd_car1').is(':checked') == true)
		{
			var car= $('#syd_car1').val();
            
		}
		if($('#syd_car2').is(':checked') == true)
		{
			var car= $('#syd_car2').val();
		}
		

	if ($('#chkIsTeamLead').is(':checked') == true)
	{
		var book = $("#firstname").val();
		var email_bk = $("#email").val();
		var phone = $('#phn').val();
	}

  var data = {
        action: 'get_postal_code',
		dataType: 'json',
		name: name,
		date: date,
		time: time,
		
		car:car,
		car_type:car_type,
		type_services:type_services,
		
		
		book:book,
		email_bk:email_bk,
		phone:phone,
		
		people_no:people_no,
		suitcases_no:suitcases_no,
		child_no:child_no,
		
		email: email,
		psg_phone: psg_phone,
        location: location,
		end:end,
		drop_off:drop_off,
		pickup:pickup,
		
		ext_text:ext_text,
		
		post_code:post_code,
	    post_code2:post_code2
    };

var firstName = $('.left-form #firstname').val();
  var email = $('.left-form #email').val();
  var date = $('.right-form #datepicker').val();
  var drop_off = $( "#drop_off option:selected" ).val();
  var pickup = $( "#pickup option:selected" ).val();
  var phn = $('.left-form #phn').val();
  var postCode1 = $('#post_code').val();
  var postCode2 = $('#post_code2').val();
  var timeP = $('.date  .timing.minical_input').val();

var phnerror = $('#phnerror').text();
var phnerror2 = $('#phnerror2').text();

var emailerror = $('#emailerror').text();
var emailerror2 = $('#emailerror2').text();



    if(firstName != '' && pcode_error!= 'true' && pcode_error2!= 'true' && email != '' && date != '' && drop_off != 'Text' && pickup != 'Text' && timeP != 'Date is not Available' && phnerror!='error' && phnerror2!='error' && phone !='' && psg_phone!='' && emailerror != 'error' && emailerror2 != 'error' ){
      //alert("working"+timeP);

  $.post(ajaxurl, data, function(response) { 
//alert(response);
//$(".popUpInner h3").html(response);
  var JSONObject = $.parseJSON(response);
  //alert(JSONObject[2]["pid"]);
  console.log(JSONObject);      // Dump all data of the Object in the console
  var price_cart= JSONObject[1]["price"];
  
  $('.name').text(JSONObject[0]["name"]);
  $('.price').text(JSONObject[0]["base_fare"]);
  $('.distance').text(JSONObject[0]["distance"]);
  $('.time1').text(JSONObject[0]["time"]);
  $('.add_to_cart_div').html(JSONObject[1]["cart"]);
   
	var time=JSONObject[0]["time"];
	
	var pid = JSONObject[2]["pid"];
	
	var print = "http://onlinedevserver.biz/dev/Adelaide_limuisine/print/?pid="+pid;
	
	var pdf =  "http://onlinedevserver.biz/dev/Adelaide_limuisine/quatation/?pid="+pid;
	
	$('#print').attr("href",print );$('#pdf').attr("href",pdf );
	 //alert(time);
	if(time==''){
		$('.qprice').hide();
		$("#btn_yes").hide();
		$('p.buttonHolderTEXT').hide();
		$('.buttonHolderUl li > .Btns').css({'background':'transparent'});
		$('#btn_no').html('<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/No_Cross.svg/120px-No_Cross.svg.png" width="50%">'); 
   $('.price').html("");
  $('.distance').html("");
  $('.time1').html("");
  $('.add_to_cart_div').html("");
		}
     
   });
}else{
  $('.erromMsg').fadeIn();
  $('.erromMsg').html('<h2 style="color:red; font-size:12px; line-height:15px;">Please fill properly All Mandatory Fields!!</h2>').fadeOut(2000);
  //alert("not working");
}


}
</script> 

<script type="text/javascript">
function hideDiv()
{
	$(".name").css("display", "none");
	$(".price").css("display", "none");
	$(".time1").css("display", "none");
	$(".distance").css("display", "none");
	$("#print").css("display", "none");
	$("#pdf").css("display", "none");	
	$(".add_to_cart_div").css("display", "block");
	$(".terms").css("display", "block");
	$(".buttonHolderTEXT").css("display", "none");
	$(".buttonHolderUl").css("display", "none");
	$(".terms_conditation").css("display", "block");
	$('form.wp-cart-button-form input[type="submit"]').prop('disabled', true);
}
$(document).ready(function() 
 {
  $("#btn_yes").click(function()
     {
		 $(".buttonHolderTEXT").hide();
		 $(".book").show();
     });  
});
function hideDiv_inni()
{
//var blurred = false;
window.onblur = function() { blurred = true; };
window.onfocus = function() { blurred && (location.reload()); };
	
/*	$(".name").html("");
	$(".price").html("");
	$(".time1").html("");
	$(".distance").html("");
	$(".popUp").hide();
	$(".popUpInner").hide();
	$(".popUpHold").hide();
	$(".name").css("display", "none");
	$(".price").css("display", "none");
	$(".time1").css("display", "none");
	$(".distance").css("display", "none");
	$(".add_to_cart_div").css("display", "block");
	$(".buttonHolderUl").css("display", "none");
*/}
</script>


<!-- end of code for hide text-->
<script type="text/javascript">
$('#chkIsTeamLead').change(function(){
    if ($('#chkIsTeamLead').is(':checked') == true){
		var name = $('#txtNumHours').val();
		var email_psg = $('#txtEmail').val();
		var phone = $('#txtPhone').val();
        $('#txtNumHours').val('').prop('disabled', true);
		$('#txtEmail').val('').prop('disabled', true);
		$('#txtPhone').val('').prop('disabled', true);
		 $('#firstname').val(name);
		 $('#email').val(email_psg);
		 $('#phn').val(phone);
		  $('#cars3').val("+00");
        console.log('checked');
		
    } else {
        $('#txtNumHours').val('').prop('disabled', false);
		$('#txtEmail').val('').prop('disabled', false);
		$('#txtPhone').val('').prop('disabled', false);
		 $('#firstname').val('');
        console.log('unchecked');
    }
});
</script>
<link href="<?php echo get_template_directory_uri(); ?>/css/jquery.minical.css" rel="stylesheet" type="text/css">
<style type="text/css">
.adiSys ul li{
	width: 100% !important;
	display:block !important;
    min-height: auto !important;
    padding: 5px !important;
    margin: 0 !important;
    text-align: left;
    border: none !important;
}
#sydney_car li{
	widith:100% !important; 
}
#adelaide_car li{
	widith:100% !important; 
}
.adiSys{

	display: block;
    background: #fff;
    border: 1px solid gainsboro;
    padding: 10px;
    margin-bottom: 5px;
    }

#bonPowerExpd{
display:none !important;	
}
</style>
<script>
	function dolookup()
	{
		var ajaxurl='<?php echo admin_url('admin-ajax.php'); ?>';
		var location = $('#geocomplete').val();
		var data = {
        action: 'get_post_code',
		dataType: 'json',
		location: location
		}
		$.post(ajaxurl, data, function(response) { 
			
			var JSONObject = $.parseJSON(response);
			$("#post_code").val(response.trim());
		
     
   });
		
	}
	</script>
	
<script>
	function dolookupnew()
	{
		var ajaxurl='<?php echo admin_url('admin-ajax.php'); ?>';
		var location = $('.end_geo').val();
		var data = {
        action: 'get_post_code',
		dataType: 'json',
		location: location
		}
		$.post(ajaxurl, data, function(response) { 
			
			var JSONObject = $.parseJSON(response);
			$("#post_code2").val(response.trim());
		
     
   });
		
	}
	</script>	
	
	
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.minical.js"></script>
<script type="text/javascript">
$(".demo-1 :text").minical({
	
	});
$(".demo-2 :text").minical({
        inline: true
      });
   $(".demo-3 :text").minical({
        trigger: "i.trigger-icon"
      });
</script>
