
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
      <li class="vertical-panel" rel="tab2">Password & Security <span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-2.png" alt=""> </span></li>
      <li class="vertical-panel" rel="tab3">Notification Settings<span> <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/dashboard-icon-3.png" alt=""> </span></li>
     </ul>
    <div class="tab_container">
      <h3 class="d_active tab_drawer_heading" rel="tab1">
      <div class="payment-method-box">
       <h3> Payment  Methods </h3>
       <a href="#"> Add  payment method </a>
      </div>
      <div class="billing-payment-box">
       <h3> Billing & Payment Processing </h3>
      </div>
      
      </h3>
      <div id="tab1" class="tab_content">
       <div class="payment-method-box">
       <h3> Payment  Methods </h3>
       <a href="#"> Add  payment method </a>
      </div>
       <div class="billing-payment-box">
       <h3> Billing & Payment Processing </h3>
      </div>
       <div class="payment-info-box">
        <table class="rwd-table">
  <tr>
    <th>Payment method</th>
    <th>Actions</th>
    <th>Autopay status</th>
  </tr>
  <tr>
    <td data-th="Movie Title"><span><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/payment-icon.png" alt=""></span>Visa ending in 4650</td>
    <td data-th="Genre"><a href="#">Edit | remove</a></td>
    <td data-th="Year">Primary </td>
  </tr>
  <tr>
    <td data-th="Movie Title"><span><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/payment-icon.png" alt=""></span>Visa ending in 7474</td>
    <td data-th="Genre"><a href="#">Edit | remove</a></td>
    <td data-th="Year">Set as primary</td>
  </tr>
</table>
      </div>
       <p> We accept all major credit cards, as well as electronic transfers and cash payments
We accept the following credit cards </p>
      </div>
  <!-- #tab1 -->
  <h3 class="tab_drawer_heading" rel="tab2">Tab 2</h3>
  <div id="tab2" class="tab_content">
       <div class="payment-method-box">
       <h3> Payment  Methods </h3>
       <a href="#"> Add  payment method </a>
      </div>
       <div class="billing-payment-box">
       <h3> Billing & Payment Processing </h3>
      </div>
       <div class="payment-info-box">
        <table class="rwd-table">
  <tr>
    <th>Payment method</th>
    <th>Actions</th>
    <th>Autopay status</th>
  </tr>
  <tr>
    <td data-th="Movie Title"><span><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/payment-icon.png" alt=""></span>Visa ending in 4650</td>
    <td data-th="Genre"><a href="#">Edit | remove</a></td>
    <td data-th="Year">Primary </td>
  </tr>
  <tr>
    <td data-th="Movie Title"><span><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/payment-icon.png" alt=""></span>Visa ending in 7474</td>
    <td data-th="Genre"><a href="#">Edit | remove</a></td>
    <td data-th="Year">Set as primary</td>
  </tr>
</table>
      </div>
  </div>
  <!-- #tab2 -->
  <h3 class="tab_drawer_heading" rel="tab3">Tab 3</h3>
  <div id="tab3" class="tab_content">
       <div class="payment-method-box">
       <h3> Payment  Methods </h3>
       <a href="#"> Add  payment method </a>
      </div>
       <div class="billing-payment-box">
       <h3> Billing & Payment Processing </h3>
      </div>
       <div class="payment-info-box">
        <table class="rwd-table">
  <tr>
    <th>Payment method</th>
    <th>Actions</th>
    <th>Autopay status</th>
  </tr>
  <tr>
    <td data-th="Movie Title"><span><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/payment-icon.png" alt=""></span>Visa ending in 4650</td>
    <td data-th="Genre"><a href="#">Edit | remove</a></td>
    <td data-th="Year">Primary </td>
  </tr>
  <tr>
    <td data-th="Movie Title"><span><img src="<?php echo esc_url( get_template_directory_uri() )?>/images/payment-icon.png" alt=""></span>Visa ending in 7474</td>
    <td data-th="Genre"><a href="#">Edit | remove</a></td>
    <td data-th="Year">Set as primary</td>
  </tr>
</table>
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
