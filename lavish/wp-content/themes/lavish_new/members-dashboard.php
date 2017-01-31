<?php
/**
 * Template Name: membersdashboards Page
 */
 
get_header('model');
?>
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/vertical-tab.css">

<section id="members-dashboard" class="members-dashboard-div">
   <div class="members-dashboard-heading-tag">
     <div class="container">
       <ul>
        <li>Book a new model</li>
        <li>My VIP plan</li>
        <li>My upcoming events</li>
       </ul>
     </div>  
   </div>
   <div class="container">
     <div class="members-dashboard-box clearfix">
       
     <div class="vertical-tab">
     <ul class="tabs">
      <li class="vertical-panel active" rel="tab1">My Info <span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-1.png" alt=""> </span></li>
      <li class="vertical-panel" rel="tab2">Previous History <span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-2.png" alt=""> </span></li>
      <li class="vertical-panel" rel="tab3">Payment Methods<span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-3.png" alt=""> </span></li>
     </ul>
    <div class="tab_container">
      <div class="d_active tab_drawer_heading" rel="tab1">
       <h3> My Info </h3>
      </div>
      
      <div id="tab1" class="tab_content">
       <div class="payment-method-box clearfix">
        <div class="payment-method-client">
          <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-client.png" alt="">
        </div>
        <div class="payment-method-client-content">
         <h3> Lamothe Mildort </h3>
         <h4> lham2929 </h4>
        </div> 
       </div>
       <div class="billing-payment-box">
       <h3> Account Details </h3>
      </div>
       <div class="payment-info-box">
        <table class="rwd-table" cellpadding="0" cellspacing="0">
          <tr class="payment-info-box-top">
            <th>Client name/User name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
          </tr>
          <tr>
            <td data-th="Client name/User name"> <strong>Lamothe Mildort </br>
lham2929</strong></td>
            <td data-th="Address">NW Moorhen Trail  </br>
Port Saint Lucie, FL 34986 </br>
United States</td>
            <td data-th="Phone">202-777-7799 </br>
                305-777-7799 </td>
            <td data-th="Email" class="payment-email"> <a href="#">lavishmate@gmail.com</a> </td>
          </tr>
          <tr class="payment-info-box-bottom">
            <td data-th="Client name/User name"> </td>
            <td data-th="Address"><a href="#">Edit</a></td>
            <td data-th="Phone"><a href="#">Edit</a></td>
            <td data-th="Email"><a href="#">Edit</a></td>
          </tr>
        </table>
        
        <div class="Back-to-Escort-Ladies-btn">
          <a href="#"> Back to Escort Ladies </a>
        </div>
        
      </div>
       
      </div>
  <!-- #tab1 -->
  <div class="tab_drawer_heading" rel="tab2"><h3>Previous History </h3></div>
  <div id="tab2" class="tab_content">
    <div class="dashboard-get_option">
      <div class="dashboard-box">
                  <table class="rwd-table dashboard-member-details" cellpadding="0" cellspacing="0" width="100%">
                      <tr class="odd">
                        <th>Model</th>
                        <th>Dress style</th>
                        <th>Location</th>
                        <th>Hotel#</th>
                        <th>Date of meeting</th>
                        <th>Time of meeting</th>
                        <th>Duration</th>
                        <th>Message</th>
                      </tr>
                      <tr class="even">
                        <td data-th="Model" class="dashbord-model-name">
                          <h5>Mia</h5>
                          <p> Age Mid 20’s </p>
                          <a href="#"> Book Mia again ?</a>
                        </td>
                        <td data-th="Dress style">Sport chic</td>
                        <td data-th="Location">Hotel visit</td>
                        <td data-th="Hotel#">303</td>
                        <td data-th="Date of meeting">1/26/2017</td>
                        <td data-th="Time of meeting">7pm </td>
                        <td data-th="Duration">5 hours</td>
                        <td data-th="Message"> 
                         <p> I would like you to wear a very beautiful dress  for a special occasion thank you and i’m looking forward to </p>
                        </td>
                      </tr>
                      <tr class="odd">
                        <td data-th="Model" class="dashbord-model-name">
                          <h5>Mia</h5>
                          <p> Age Mid 20’s </p>
                          <a href="#"> Book Mia again ?</a>
                        </td>
                        <td data-th="Dress Style">Cocktail dress</td>
                        <td data-th="Location">Hotel Visit</td>
                        <td data-th="Hotel#">606</td>
                        <td data-th="Date of meeting">1/03/2016</td>
                        <td data-th="Time of Date">4pm</td>
                        <td data-th="Duration">1 day</td>
                        <td data-th="Message"><p>We are going to dinner and fly 
to Las Vegas to have some fun</p></td>
                      </tr>
                      <tr class="even">
                        <td data-th="Model" class="dashbord-model-name">
                          <h5>Angelina</h5>
                          <p> Age Late 20’s </p>
                          <a href="#"> Book Angelina again ?</a>
                        </td>
                        <td data-th="Dress Style">Short dress</td>
                        <td data-th="Location">Home visit </td>
                        <td data-th="Hotel#"></td>
                        <td data-th="Date of meeting">10/29/2016</td>
                        <td data-th="Time of Date">9pm</td>
                        <td data-th="Duration">2 hours</td>
                        <td data-th="Message"><p>I would like to take you to an
                        event for my job a beautiful 
                        dress will fit the occasion 
                        well</p></td>
                      </tr>
                      <tr class="odd">
                        <td data-th="Model" class="dashbord-model-name">
                          <h5>Angelina</h5>
                          <p> Age Late 20’s </p>
                          <a href="#"> Book Angelina again ?</a>
                        </td>
                        <td data-th="Dress Style">Short dress</td>
                        <td data-th="Location">Home visit </td>
                        <td data-th="Hotel#"></td>
                        <td data-th="Date of meeting">10/29/2016</td>
                        <td data-th="Time of Date">9pm</td>
                        <td data-th="Duration">2 hours</td>
                        <td data-th="Message"><p>I would like to take you to an
                        event for my job a beautiful 
                        dress will fit the occasion 
                        well</p></td>
                      </tr>
                 </table>
                </div>          
    </div>
  </div>
  <!-- #tab2 -->
  <div class="tab_drawer_heading" rel="tab3"><h3> Payment Methods </h3></div>
  <div id="tab3" class="tab_content">
       <div class="payment-method-box">
       <h3> Payment  Methods </h3>
       <a href="#"> Add  payment method </a>
      </div>
       <div class="billing-payment-box">
       <h3> Billing & Payment Processing </h3>
      </div>
       <div class="payment-info-box">
        <table class="rwd-table" cellpadding="0" cellspacing="0">
          <tr class="payment-info-box-top">
            <th>Payment method</th>
            <th>Actions</th>
            <th>Actions</th>
          </tr>
          <tr>
            <td data-th="Payment method"><span><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/payment-icon.png" alt=""></span>Visa ending in 4650</td>
            <td data-th="Actions"><a href="#">Edit | remove</a></td>
            <td data-th="Actions">Primary </td>
          </tr>
          <tr class="payment-info-box-bottom">
            <td data-th="Payment method"><span><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/payment-icon.png" alt=""></span>Visa ending in 7474</td>
            <td data-th="Actions"><a href="#">Edit | remove</a></td>
            <td data-th="Actions">Set as primary</td>
          </tr>
        </table>
        <p> We accept all major credit cards, as well as electronic transfers and cash payments
We accept the following credit cards </p>
         <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/credit_grey.png" alt="">
         <p> Extra 5 % handling fee </p>
         <p class="payment-info-box-personal"> XE Personal Currency Assistant </p>
      </div>
  </div>
  <!-- #tab3 -->
  
</div>
    
</div>
       
       <?php //echo(the_content()); ?>
     </div>  
  </div>
</section>				


<?php
get_footer();
?>
