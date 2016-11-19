<style type="text/css">
ul{
  padding: 0;
  margin: 0;
} 
.cart_home
{
display:block !important;
}
.responsiveMenu
{
display:none !important;
}
.menu
{
display:none !important;
}
ul li{
  list-style-type: none;
  line-height: 28px;
}  
.one-coloum {
    float: left;
    padding-left: 25px;
    width: 30%;
}
.two-coloum{
   float: left;
    text-align: right;
    width: 20%;
}
.two-coloum ul{
  margin: 0;
  padding: 0;
}
.two-coloum ul li{
  list-style-type: none;
  line-height: 28px;
}
.three-coloum ul{
 float: left;
    margin: 0;
    padding-right: 40px;
    text-align: left
}
.three-coloum ul li{
  list-style-type: none;
  line-height: 28px;
}
.second-row {
    float: left;
    width: 100%;
}
.second-row-one-coloum ul{
  padding:0px;
  margin: 0;
}
.second-row-one-coloum ul li{
  line-height: 26px;
}
.second-row-one-coloum{
  float: left;
  width: 60%;
}
.second-row-one-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-two-coloum{
  width: 17%;
  float: left;
  text-align: right;
}
.second-row-two-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-three-coloum{
  width: 20%;
  float: left;
  text-align: right;
}
.second-row-three-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-four-coloum{
  width: 20%;
  float: left;
  text-align: right;
}
.second-row-four-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-five-coloum{
  width: 10%;
  float: left;
  text-align: right;
}
.second-row-five-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-six-coloum{
  width: 10%;
  float: left;
  text-align: right;
}
.second-row-six-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row ul{
  padding: 20px;
  margin: 0;
}
.second-row ul li{
  list-style-type: none;
}
.thard-row {
    float: left;
    padding-bottom: 45px;
    width: 100%;
}
.fast-row {
    clear: both;
}
.thard-row {
    clear: both;
    float: right;
    padding-bottom: 45px;
    width: 25%;
}
.thard-row ul li{
   display: inline-block;
   width: 48%;
}

.thard-row {
    border-bottom: 1px solid #ddd;
    border-top: 1px solid #ddd;
    clear: both;
    float: right;
    padding-bottom: 12px;
    padding-top: 12px;
    width: 25%;
    margin-bottom: 30px;
}
.three-coloum {
    float: right;
}
.second-row h4{
  font-size: 16px;
  font-weight: 600;
}
.second-row h4 {
    font-size: 14px;
    font-weight: 600;
    text-align: right;
}
.footer-bottom {
    clear: both;
    padding: 10px 0;
    text-align: center;
}
.payment-chart {
    float: right;
    width: 60%;
    margin: 30px 0;
    padding-right: 30px;
}
.payment-chart-left {
    float: left;
    width: 50%;
    
}
.payment-chart-left li {
    border: 1px solid #ddd;
    padding: 5px;
    text-align: right;
}
.payment-chart-right{
    float: left;
    width: 50%;
}
.payment-chart-right li {
    border: 1px solid #ddd;
    padding: 5px;
    text-align: right;
}


</style>

<?php 


get_header();
// include autoloader
require_once 'dompdf/autoload.inc.php';



// reference the Dompdf namespace
use Dompdf\Dompdf;
?>

<main role="main">
  <!-- section -->
  <section>

     <h1><?php the_title(); ?></h1>

     <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        
        <?php if($_REQUEST["pageid"]!=''){
        	$mypost = get_post($_REQUEST["pageid"]);
        	//~ if(substr_count($mypost->post_title,"Money Recipt done")>0)
        	//~ {
				//~ $error_msg = '<h3 style="line-height: 55px;">You Already get your money recipt. If you did not get any email till now.
				//~ please contact us at our mail id.
				//~ </h3>';
				//~ echo $error_msg;
        	//~ exit();
			//~ }
            $name = get_post_meta($_REQUEST["pageid"], "booking_address_book_person_name", true); 
            $email = get_post_meta($_REQUEST["pageid"], "booking_address_email", true); 
            $phone = get_post_meta($_REQUEST["pageid"], "booking_address_phone_no", true);
            $dropoff_postcode =  get_post_meta($_REQUEST["pageid"], "post_codes_dropoff_postcode", true); 
            $dropoff_address = get_post_meta($_REQUEST["pageid"], "customer_name_drop_address", true); 
            $pickup_postcode =  get_post_meta($_REQUEST["pageid"], "post_codes_pickup_postcode", true); 
            $pickup_address =  get_post_meta($_REQUEST["pageid"], "customer_name_pick_upup_address", true);             
            $time =  get_post_meta($_REQUEST["pageid"], "customer_name_time", true);
            $pid = $_REQUEST["pageid"];
            
    $base_fare = get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_base_fare", true);
    $gst = get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_after_1st_tax", true);
    $card_charges = get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_after_2nd_tax", true);
    $total = $base_fare+$gst+$card_charges;
    $date =  get_post_meta($_REQUEST["pageid"], "customer_name_date", true); 

$qtn_number = get_post_meta($_REQUEST["pageid"], "invoice_id_quatation_id", true); 
    ?>
<style>
	.aa
	{
		display:none;
	}
	.slider
	{
		display:none;
	}
	header
	{
		display:none;
	}
	main section h1
	{
		display:none;
	}
.mainFooter
{
display:none;
}
	.dock-container
{
dispaly:none;
}
.second-row-one-coloum h4{
  text-align: left;
}
</style>

<body style="background: url(http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/plugins/wp-pdf-templates/images/pdf-bg.jpg); background-position: center center; margin: 0 auto; background-repeat: no-repeat;">




     <div class="container">
       <div class="logo_new" style="text-align: center; padding: 7px 0;"><img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/plugins/wp-pdf-templates/images/letter_Head_logo.jpg"> 
         <h5 style="text-align:center">Adelaide Limousine & Hire Cars</h5>
						<h6 style="text-align:center"> 2-hurtle street, Croydon 5008 South Australia. M 0424 516 500 Email: info@alhc.com.au www.alhc.com.au<br/>ABN: 26303196571</h6>
 
       </div>
        <div style="padding-bottom:80px;padding-top:50px;">
					<div class="header_div">
					  <div style="float:left; padding-left:30px;width:40%">Date of booking : <strong><?php echo $date;?></strong></div>
					  <div style="float:right; padding-right:30px;width:40%">Quatation Number : <strong><?php echo $qtn_number;?></strong></div>
					</div>
				</div>
		</div>

<h5 style="text-align:center">MONEY RECIEPT</h5>

 <div class="second-row">
  <div class="container">
   <div class="second-row-one-coloum">
    <h4> Description </h4>
    <ul>
       <li>Pickup Address : <?php echo $pickup_address; ?></li>
       <li>Pickup Postcode :<?php echo $pickup_postcode;?></li>
       <li>Dropoff Address : <?php echo $dropoff_address; ?></li>
       <li>Dropoff Postcode : <?php echo $dropoff_postcode;?></li>
       <li>Total distance : <?php echo get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_total_distance_in_km", true);?> km</li>
       <li>Total time (approximate) : <?php echo get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_total_time_taken_in_min", true);?> min</li>
    </ul>
  </div>

   <div class="second-row-two-coloum">
    <h4> Quantity    </h4>
    <ul>
      <li> 1.00 </li>
    </ul>
  </div>
  
  <div class="second-row-three-coloum">
    <h4> Unit Price </h4>
    <ul>
      <li> $<?php echo get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_base_fare", true); ?> </li>
    </ul>
  </div>
 </div> 
</div>

<!------------------>
<div class="last-row" style="border-top:1px solid #666 !important; margin-top: 20px; padding-top: 20px; float: left; width: 100%;">
 <div class="container">
  <!-- <div class="one-coloum">
    <span style="font-size: 16px;">PAYMENT ADVICE</span>

    <ul>
      <li>Adelaide Limuisine Car Hire</li>
      <li>2-hurtle street,</li>
      <li>Croydon 5008 South Australia</li>
      <li>M 0424 516 500</li>
      <li>Email: info@alhc.com.au www.alhc.com.au</li>
    </ul>

  </div> -->
  <div class="two-coloum">
     <ul> 
      <li>Customer Name </li>
      
      <li>Booked by  </li>
      
      <li>Customer Phone number   </li>
      <li>Customer Email   </li>
     </ul>
    </div>

  <div class="three-coloum">
   <ul> 
    <li><?php echo get_post_meta($_REQUEST["pageid"], "customer_name_customer_name", true); ?></li>
    
    <li><?php echo get_post_meta($_REQUEST["pageid"], "booking_address_book_person_name", true); ?></li>
    <li><?php echo get_post_meta($_REQUEST["pageid"], "customer_name_customer_phone", true); ?></li>
    <li><?php echo get_post_meta($_REQUEST["pageid"], "customer_name_customer_email", true);?></li>
   
   </ul>
  </div>
  </div>
 </div>

<div class="container">
 <div class="payment-chart">
   <div class="payment-chart-left">
     <ul>
      <li style="line-height:15px; font-size:15px;">Sub Total</li>
      <li style="line-height:15px; font-size:15px;">GST</li>
      <li style="line-height:15px; font-size:15px;">CARD CHARGES  </li>
      <li style="line-height:15px; font-size:15px;">TOTAL</li>
     </ul>
   </div>

   <div class="payment-chart-right">
     <ul>
      <li style="line-height:15px; font-size:15px;"> $<?php echo get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_base_fare", true); ?></li>
<li style="line-height:15px; font-size:15px;">$<?php echo get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_after_1st_tax", true);?></li>
<li style="line-height:15px; font-size:15px;">$<?php echo get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_after_2nd_tax", true); ?></li>
      <li style="line-height:15px; font-size:15px;">$<?php echo $total;?></li>
     </ul>
   </div>
  </div>
 </div>

</div>





 


</body>
      <?php 
      $dompdf = new Dompdf();
$msg='<style type="text/css">
ul{
  padding: 0;
  margin: 0;
} 
ul li{
  list-style-type: none;
  line-height: 28px;
}  
.one-coloum {
    float: left;
    width: 45%;
}
.two-coloum{
   float: left;
    text-align: right;
    width: 25%;
}
.three-coloum {
    float: right;
    width: 20%;
}
.two-coloum ul{
  margin: 0;
  padding: 0;
}
.two-coloum ul li{
  list-style-type: none;
  line-height: 28px;
}
.three-coloum ul{
 float: left;
    margin: 0;
    padding-right: 40px;
    text-align: left
}
.three-coloum ul li{
  list-style-type: none;
  line-height: 28px;
}
.second-row {
    width: 100%;
    clear:both;
    height:290px !important;
}
.second-row-one-coloum ul{
  padding:0px;
  margin: 0;
}
.second-row-one-coloum ul li{
  line-height: 26px;
}
.second-row-one-coloum{
  float: left;
  width: 60%;
}
.second-row-one-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-two-coloum{
  width: 30%;
  float: left;
  text-align: right;
}
.second-row-two-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-three-coloum{
  width: 10%;
  float: left;
  text-align: right;
}
.second-row-three-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-four-coloum{
  width: 20%;
  float: left;
  text-align: right;
}
.second-row-four-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-five-coloum{
  width: 10%;
  float: left;
  text-align: right;
}
.second-row-five-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-six-coloum{
  width: 10%;
  float: left;
  text-align: right;
}
.second-row-six-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row ul{
  padding: 20px;
  margin: 0;
}
.second-row ul li{
  list-style-type: none;
}
.thard-row {
    padding-bottom: 45px;
    width: 100%;
    height:270px !important;
}

.fast-row {
    clear: both;
}
.thard-row {
    clear: both;
    float: right;
    padding-bottom: 45px;
    width: 25%;
}
.thard-row ul li{
   display: inline-block;
   width: 48%;
}

.thard-row {
    border-bottom: 1px solid #ddd;
    border-top: 1px solid #ddd;
    clear: both;
    float: right;
    padding-bottom: 12px;
    padding-top: 12px;
    width: 25%;
    margin-bottom: 30px;
    clear:both;
}

.second-row h4{
  font-size: 16px;
  font-weight: 600;
}
.second-row h4 {
    font-size: 14px;
    font-weight: 600;
    text-align: right;
}
.footer-bottom {
    clear: both;
    padding: 10px 0;
    text-align: center;
}
.payment-chart {
    width: 70%;
    margin: 0 auto;
    clear:both;
    padding-top:30px;
}
.payment-chart-left {
    float: left;
    width: 40%;
    
}
.payment-chart-left li {
    border: 1px solid #ddd;
    padding: 5px;
    text-align: right;
}
.payment-chart-right{
    float: left;
    width: 40%;
}
.payment-chart-right li {
    border: 1px solid #ddd;
    padding: 5px;
    text-align: right;
    font-size:15px;
}

</style><style>
	.aa
	{
		display:none;
	}
	.slider
	{
		display:none;
	}
	header
	{
		display:none;
	}
	main section h1
	{
		display:none;
	}
	
	</style>
<body style="background: url(http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/plugins/wp-pdf-templates/images/pdf-bg.jpg); background-position: center center; margin: 0 auto; background-repeat: no-repeat;">




<div class="container">
 <div class="logo_new" style="text-align: center; padding: 30px 0;"><img src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/plugins/wp-pdf-templates/images/letter_Head_logo.jpg"> 
 <h5 style="text-align:center">Adelaide Limousine & Hire Cars</h5>

								<h6 style="text-align:center"> 2-hurtle street, Croydon 5008 South Australia. M 0424 516 500 Email: info@alhc.com.au www.alhc.com.au<br/>ABN: 26303196571</h6>

 
 </div>
<div style="padding-bottom:40px;padding-top:20px;">
						<div class="header_div">
					<div style="float:left; padding-left:30px;width:40%">Date of booking : <strong>'. $date.'</strong></div>
					<div style="float:right; padding-right:30px;width:40%">Quatation Number : <strong>'. $qtn_number.'</strong></div>
					</div>

					</div>
					</div>

<h5 style="text-align:center; font-size:16px;">MONEY RECIEPT</h5>
 <div class="second-row">
  <div class="second-row-one-coloum">
    <h4> Description </h4>
    <ul>
       <li>Pickup Address : '. $pickup_address.'</li>
       <li>Pickup Postcode :'. $pickup_postcode.'</li>
<li>Dropoff Address : '. $dropoff_address.'</li>
<li>Dropoff Postcode : '. $dropoff_postcode.'</li>
<li>Total distance : '. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_total_distance_in_km", true).' km</li>
<li>Total time (approximate) : '. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_total_time_taken_in_min", true).' min</li>

    </ul>
  </div>
<!------------------>
 <div class="second-row-two-coloum">
  <h4> Quantity    </h4>
  <ul>
    <li> 1.00 </li>
  </ul>
</div>
<!------------------>
<div class="second-row-three-coloum">
  <h4> Unit Price </h4>
  <ul>
    <li> $'. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_base_fare", true).' </li>
  </ul>
</div>
<!------------------>


 </div>

<!------------------>
<div class="last-row" style="border-top: 1px dashed #666;clear: both;width: 100%;">
  <div class="one-coloum">
    <span style="font-size: 18px;">PAYMENT ADVICE</span>

    <ul>
      <li>Adelaide Limuisine Car Hire</li>
      <li>2-hurtle street,</li>
      <li>Croydon 5008 South Australia</li>
      <li>M 0424 516 500</li>
      <li>Email: info@alhc.com.au www.alhc.com.au</li>
    </ul>

  </div>
  <div class="two-coloum">
     <ul> 
      <li>Customer Name </li>
      
      <li>Booked by  </li>
      
      <li>Customer Phone number   </li>
      <li>Customer Email   </li>
     </ul>
  </div>

 <div class="three-coloum">
  <div class="second-row-one-coloum">
    
    <ul> 
    <li>'. get_post_meta($_REQUEST["pageid"], "customer_name_customer_name", true).'</li>
    
    <li>'. get_post_meta($_REQUEST["pageid"], "booking_address_book_person_name", true).'</li>
    <li>'. get_post_meta($_REQUEST["pageid"], "customer_name_customer_phone", true).'</li>
    <li>'. get_post_meta($_REQUEST["pageid"], "customer_name_customer_email", true).'</li>
   
   </ul>
  </div>

 

 </div>
<!------------------>


 <div class="payment-chart">
   <div class="payment-chart-left">
     <ul>
      <li style="font-size: 15px; line-height: 15px;">Sub Total</li>
      <li style="font-size: 15px; line-height: 15px;">GST</li>
      <li style="font-size: 15px; line-height: 15px;">CARD CHARGES  </li>
      <li style="font-size: 15px; line-height: 15px;">TOTAL</li>
     </ul>
   </div>

   <div class="payment-chart-right">
     <ul>
      <li style="font-size: 15px; line-height: 15px;"> $'. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_base_fare", true).'</li>
<li style="font-size: 15px; line-height: 15px;">$'. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_after_1st_tax", true).'</li>
<li style="font-size: 15px; line-height: 15px;">$'. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_after_2nd_tax", true).'</li>
      <li style="font-size: 15px; line-height: 15px;">$'. $total.'</li>
     </ul>
   </div>

 </div>

</div>





 


</body>


';

$msg_new='<style type="text/css">
ul{
  padding: 0;
  margin: 0;
} 
ul li{
  list-style-type: none;
  line-height: 28px;
}  
.one-coloum {
    float: left;
    width: 45%;
}
.two-coloum{
   float: left;
    text-align: right;
    width: 25%;
}
.three-coloum {
    float: right;
    width: 20%;
}
.two-coloum ul{
  margin: 0;
  padding: 0;
}
.two-coloum ul li{
  list-style-type: none;
  line-height: 28px;
}
.three-coloum ul{
 float: left;
    margin: 0;
    padding-right: 40px;
    text-align: left
}
.three-coloum ul li{
  list-style-type: none;
  line-height: 28px;
}
.second-row {
    width: 100%;
    clear:both;
    height:290px !important;
}
.second-row-one-coloum ul{
  padding:0px;
  margin: 0;
}
.second-row-one-coloum ul li{
  line-height: 26px;
}
.second-row-one-coloum{
  float: left;
  width: 60%;
}
.second-row-one-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-two-coloum{
  width: 30%;
  float: left;
  text-align: right;
}
.second-row-two-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-three-coloum{
  width: 10%;
  float: left;
  text-align: right;
}
.second-row-three-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-four-coloum{
  width: 20%;
  float: left;
  text-align: right;
}
.second-row-four-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-five-coloum{
  width: 10%;
  float: left;
  text-align: right;
}
.second-row-five-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row-six-coloum{
  width: 10%;
  float: left;
  text-align: right;
}
.second-row-six-coloum h4 {
    border-bottom: 1px solid #ddd;
    padding-bottom: 6px;
}
.second-row ul{
  padding: 20px;
  margin: 0;
}
.second-row ul li{
  list-style-type: none;
}
.thard-row {
    padding-bottom: 45px;
    width: 100%;
    height:270px !important;
}

.fast-row {
    clear: both;
}
.thard-row {
    clear: both;
    float: right;
    padding-bottom: 45px;
    width: 25%;
}
.thard-row ul li{
   display: inline-block;
   width: 48%;
}

.thard-row {
    border-bottom: 1px solid #ddd;
    border-top: 1px solid #ddd;
    clear: both;
    float: right;
    padding-bottom: 12px;
    padding-top: 12px;
    width: 25%;
    margin-bottom: 30px;
    clear:both;
}

.second-row h4{
  font-size: 16px;
  font-weight: 600;
}
.second-row h4 {
    font-size: 14px;
    font-weight: 600;
    text-align: right;
}
.footer-bottom {
    clear: both;
    padding: 10px 0;
    text-align: center;
}
.payment-chart {
    width: 70%;
    margin: 0 auto;
    padding-right: 30px;
    clear:both;
    padding-top:30px;
}
.payment-chart-left {
    float: left;
    width: 40%;
    
}
.payment-chart-left li {
    border: 1px solid #ddd;
    padding: 5px;
    text-align: right;
}
.payment-chart-right{
    float: left;
    width: 40%;
}
.payment-chart-right li {
    border: 1px solid #ddd;
    padding: 5px;
    text-align: right;
    font-size:15px;
}

</style><style>
	.aa
	{
		display:none;
	}
	.slider
	{
		display:none;
	}
	header
	{
		display:none;
	}
	main section h1
	{
		display:none;
	}
	
	</style>
<body style="background: url(http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/plugins/wp-pdf-templates/images/pdf-bg.jpg); background-position: center center; margin: 0 auto; background-repeat: no-repeat;">




<div class="container">
 <div class="logo_new" style="text-align: center; padding: 30px 0;">
 <h5 style="text-align:center">Adelaide Limousine & Hire Cars</h5>

								<h6 style="text-align:center"> 2-hurtle street, Croydon 5008 South Australia. M 0424 516 500 Email: info@alhc.com.au www.alhc.com.au<br/>ABN: 26303196571</h6>

 
 </div>
<div style="padding-bottom:80px;padding-top:50px;">
						<div class="header_div">
					<div style="float:left; padding-left:30px;width:40%">Date of booking : <strong>'. $date.'</strong></div>
					<div style="float:right; padding-right:30px;width:40%">Quatation Number : <strong>'. $qtn_number.'</strong></div>
					</div>

					</div>
					</div>

<h5 style="text-align:center">MONEY RECIEPT</h5>
 <div class="second-row">
  <div class="second-row-one-coloum">
    <h4> Description </h4>
    <ul>
       <li>Pickup Address : '. $pickup_address.'</li>
       <li>Pickup Postcode :'. $pickup_postcode.'</li>
<li>Dropoff Address : '. $dropoff_address.'</li>
<li>Dropoff Postcode : '. $dropoff_postcode.'</li>
<li>Total distance : '. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_total_distance_in_km", true).' km</li>
<li>Total time (approximate) : '. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_total_time_taken_in_min", true).' min</li>

    </ul>
  </div>
<!------------------>
 <div class="second-row-two-coloum">
  <h4> Quantity    </h4>
  <ul>
    <li> 1.00 </li>
  </ul>
</div>
<!------------------>
<div class="second-row-three-coloum">
  <h4> Unit Price </h4>
  <ul>
    <li> $'. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_base_fare", true).' </li>
  </ul>
</div>
<!------------------>


 </div>

<!------------------>
<div class="last-row" style="border-top: 1px dashed #666;clear: both;width: 100%;">
  <div class="one-coloum">
    <span style="font-size: 32px;">PAYMENT ADVICE</span>

    <ul>
      <li>Adelaide Limuisine Car Hire</li>
      <li>2-hurtle street,</li>
      <li>Croydon 5008 South Australia</li>
      <li>M 0424 516 500</li>
      <li>Email: info@alhc.com.au www.alhc.com.au</li>
    </ul>

  </div>
  <div class="two-coloum">
     <ul> 
      <li>Customer Name </li>
      
      <li>Booked by  </li>
      
      <li>Customer Phone number   </li>
      <li>Customer Email   </li>
     </ul>
  </div>

 <div class="three-coloum">
  <div class="second-row-one-coloum">
    
    <ul> 
    <li>'. get_post_meta($_REQUEST["pageid"], "customer_name_customer_name", true).'</li>
    
    <li>'. get_post_meta($_REQUEST["pageid"], "booking_address_book_person_name", true).'</li>
    <li>'. get_post_meta($_REQUEST["pageid"], "customer_name_customer_phone", true).'</li>
    <li>'. get_post_meta($_REQUEST["pageid"], "customer_name_customer_email", true).'</li>
   
   </ul>
  </div>

 

 </div>
<!------------------>


 <div class="payment-chart">
   <div class="payment-chart-left">
     <ul>
      <li style="font-size: 15px; line-height: 15px;">Sub Total</li>
      <li style="font-size: 15px; line-height: 15px;">GST</li>
      <li style="font-size: 15px; line-height: 15px;">CARD CHARGES  </li>
      <li style="font-size: 15px; line-height: 15px;">TOTAL</li>
     </ul>
   </div>

   <div class="payment-chart-right">
     <ul>
      <li style="font-size: 15px; line-height: 15px;"> $'. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_base_fare", true).'</li>
<li style="font-size: 15px; line-height: 15px;">$'. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_after_1st_tax", true).'</li>
<li style="font-size: 15px; line-height: 15px;">$'. get_post_meta($_REQUEST["pageid"], "booking_price_and_travel_details_after_2nd_tax", true).'</li>
      <li style="font-size: 15px; line-height: 15px;">$'. $total.'</li>
     </ul>
   </div>

 </div>

</div>





 


</body>


';
$dompdf->loadHtml($msg_new);

$dompdf->render();
    //$output = $dompdf->output();
// Output the generated PDF (1 = download and 0 = preview)



                            if (!defined('PDF_CACHE_DIRECTORY')) {
  define('PDF_CACHE_DIRECTORY', $upload_dir['basedir'] . '/pdf-cache/');
}
// Update post 37
  $my_post = array(
      'ID'           => $pid,
      'post_title'   => 'shourya(shourya@uniterrene.com)(Money Recipt done)',
      'post_content' => 'This is the updated content.',
  );

// Update the post into the database
  wp_update_post( $my_post );



$cached = PDF_CACHE_DIRECTORY . $pid. '-money-recipt.pdf';
 //save the pdf file to cache
      file_put_contents($cached, $dompdf->output());
                            $attachments =$cached;
                            $headers[] = "Content-type: text/html" ;
                            //$filesds = print_pdf_ds($msg,$mypost);
                            //$attachments = array($filesds);
                             wp_mail( $email, "money-recipt", $msg, $headers,$attachments);
      
      
      
      
      ?>              
                   
<?php } ?>
                        <!-- article -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <?php the_content(); ?>

                            <?php comments_template( '', true ); // Remove if you don't want comments ?>

                            <br class="clear">

                            <?php edit_post_link(); ?>

                        </article>
                        <!-- /article -->

                    <?php endwhile; ?>

                <?php else: ?>

                 <!-- article -->
                 <article>

                    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                </article>
                <!-- /article -->

            <?php endif; ?>

        </section>
        <!-- /section -->
    </main>

    <?php //get_sidebar(); ?>

    <?php if($_REQUEST["pageid"]==''){ get_footer();} ?>
