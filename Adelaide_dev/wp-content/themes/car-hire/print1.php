<?php

/*

 * Template Name: Print1 Template

 * Description: Page template without sidebar

 */
require_once 'dompdf/autoload.inc.php';



// reference the Dompdf namespace
use Dompdf\Dompdf;

$pid = $_REQUEST["pid"];

$mypost = get_post($_REQUEST["pid"]);




$name = get_post_meta($_REQUEST["pid"], "booking_address_book_person_name", true); 

$cus_name = get_post_meta($_REQUEST["pid"], "customer_name_customer_name", true); 




$email = get_post_meta($_REQUEST["pid"], "booking_address_email", true); 

$cus_email = get_post_meta($_REQUEST["pid"], "customer_name_customer_email", true); 



$phone = get_post_meta($_REQUEST["pid"], "booking_address_phone_no", true); 



$dropoff_address = get_post_meta($_REQUEST["pid"], "customer_name_drop_address", true); 
$dropoff_postcode =  get_post_meta($_REQUEST["pid"], "post_codes_dropoff_postcode", true); 




$pickup_address =  get_post_meta($_REQUEST["pid"], "customer_name_pick_upup_address", true); 
$pickup_postcode =  get_post_meta($_REQUEST["pid"], "post_codes_pickup_postcode", true); 



$time =  get_post_meta($_REQUEST["pid"], "customer_name_time", true); 
$date =  get_post_meta($_REQUEST["pid"], "customer_name_date", true); 

$qtn_number = get_post_meta($_REQUEST["pid"], "invoice_id_quatation_id", true); 
               

?>
<?php $base=get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_base_fare", true);
				$gst = get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_1st_tax", true);
				$tax = get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_2nd_tax", true);
				
				$total = $base+$gst+$tax;
				$total_withouttax = $base+$gst;
		
		?>

			<div>
				<!--img style="width:100%" src="<?php //echo get_template_directory_uri(); ?>/images/Letter Head ( ALHC)  copy.jpg"/-->

			<div class="quoation_price">
								<h1 style="text-align:center">Adelaide Limousine & Hire Cars</h1>
								<h5 style="text-align:center"> 2-hurtle street, Croydon 5008 South Australia. M 0424 516 500 Email: info@alhc.com.au www.alhc.com.au<br/>ABN: 26303196571
</h5>

			
					<div style="padding-bottom:80px;padding-top:50px;">
						<div class="header_div">
					<div style="float:left; padding-left:30px;width:40%">Date of booking : <strong><?php echo $date;?></strong></div>
					<div style="float:right; padding-right:30px;width:40%">Quatation Number : <strong><?php echo $qtn_number;?></strong></div>
					</div>

					</div>
					</div>
				
			<div style="margin-top:80px;text-align:center;font-weight:bold;">Quotation </div>
			
				 

<div style="border-top: 1px dotted #444;border-bottom:1px dotted #444;float: left; margin: 20px 0 35px 0;width: 100%; font-size:14px;">

<div class="description" style="width:49%;margin-right:2px solid black; float:left;padding: 40px 0; border-right:1px dotted #444;" >
<div>Pickup Address : <?php echo $pickup_address;?></div>
<div>Pickup Postcode :<?php echo $pickup_postcode;?></div>
<div>Dropoff Address : <?php echo $dropoff_address;?></div>
<div>Dropoff Postcode : <?php echo $dropoff_postcode;?></div>
<div>Total distance : <?php echo get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_total_distance_in_km", true);?> km</div>
<div>Total time (approximate) : <?php echo get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_total_time_taken_in_min", true);?> min</div>
</div>

<div class="description" style="width:50%;margin-right:2px solid black; float:right;padding: 40px -10px;" >
<div>Customer name : <?php echo $cus_name;?></div>
<div>Booked by: <?php echo $name;?></div>
<div style="display: inline-block;overflow-wrap: break-word;width: 100%;">Customer email:<?php echo $cus_email;?></div>
<div>Customer phone number: <?php echo get_post_meta($_REQUEST["pid"], "customer_name_customer_phone", true);?></div>
</div>



</div>
<div class="table_holder" style="margin-top:200px;">
<table>
	<tr>
		<td>Base Fare </td>
		<td>$<?php echo get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_base_fare", true); ?></td>
	</tr>
	<tr>
		<td>GST will be 10% of base fare </td>
		<td>$<?php echo get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_1st_tax", true); ?></td>
	</tr>
	
	<tr>
		
		<td style="font-weight:bold">Total</td>
		<td style="font-weight:bold"> $<?php echo $total_withouttax; ?></td>
	</tr>
</table>
</div>
<div class="payment_tab">

<div style="width:40%;float:left;">
<p>We allow following payment options</p>
<div>

Paypal, Master Card, Visa, Americal-express, Cab-charges

</div>

</div>
<div style="width:20%; float:left; font-size:22px; padding:40px 0;">
	<p>
	OR			
</p>
</div>

<div style="width:40%;float:right;">
	<p>
In case of Direct money transfer<br>
					Account Details:<br>
					
					BSB 065000<br>
					Account No 11231542<br>
					</p>
					

</div>


</div>

</div>
<div style="padding: 15px;
    text-align: center;margin-top:150px;">This quote will valid for 24 hours after issuance</div>
</div>

    
<style>
	.quoation_price div
	{
		line-height:2;
		text-align:center;
		
		}
		.table_holder table{
			margin:0 auto;
			border:1px solid gainsboro;
		}
		.table_holder table td{
			padding: 5px 20px;
			border: 1px solid gainsboro;
			width: 50%;
		}
	
	
	</style>
	<?php 
	$msg = $msg ='<div style="">
				

			<div class="quoation_price" style="text-align:center;">
			<img style="width:40%;text-align:center;"src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/themes/car-hire/images/letter_Head_logo.jpg"/>
			<div class="quoation_price" style="position:absolute;top:0;left:0;right:0;bottom:0;">
				<img style="width:64%; " src="http://onlinedevserver.biz/dev/Adelaide_limuisine/wp-content/themes/car-hire/images/letter_Head_logo.jpg"/>
				<h1 style="text-align:center">Adelaide Limousine & Hire Cars</h1>
								<h5 style="text-align:center"> 2-hurtle street, Croydon 5008 South Australia. M 0424 516 500 Email: info@alhc.com.au www.alhc.com.au<br/>ABN: 26303196571
</h5>
				<div>
					<div style="padding-bottom:50px;padding-top:50px;">
						<div class="header_div">
					<div style="float:left; padding-left:30px;width:40%">Date of booking : <strong>'.$date.'</strong></div>
					<div style="float:right; padding-right:30px;width:40%">Quatation Number : <strong>'.$qtn_number.'</strong></div>
</div>

					</div>
				
			<div style="text-align:center;font-weight:bold;">Quotation </div>
			
				

<div style="border-top: 1px dotted #444;border-bottom:1px dotted #444;float: left; margin: 0 0 35px 0;width: 100%; font-size:14px;">

<div class="description" style="width:49%;margin-right:2px solid black; float:left;padding: 40px 0; border-right:1px dotted #444;" >
<div>Pickup Address : '.$pickup_address.'</div>
<div>Pickup Postcode :'.$pickup_postcode.'</div>
<div>Dropoff Address : '.$dropoff_address.'</div>
<div>Dropoff Postcode : '.$dropoff_postcode.'</div>
<div>Total distance : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_total_distance_in_km", true).' km</div>
<div>Total time (approximate) : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_total_time_taken_in_min", true).' min</div>
</div>

<div class="description" style="width:50%;margin-right:2px solid black; float:right;padding: 40px 0;" >
<div>Customer name : '.$cus_name.'</div>
<div>Booked by: '.$name.'</div>
<div style="display: inline-block;overflow-wrap: break-word;width: 100%;">Customer email:'.$cus_email.'</div>
<div>Customer phone number: '.get_post_meta($_REQUEST["pid"], "customer_name_customer_phone", true).'</div>
</div>



</div>

<div class="table_holder">
<table>
	<tr>
		<td>Base Fare </td>
		<td>$'.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_base_fare", true).'</td>
	</tr>
	<tr>
		<td>GST will be 10% of base fare </td>
		<td>$'.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_1st_tax", true).'</td>
	</tr>

	<tr>
		
		<td style="font-weight:bold">Total</td>
		<td style="font-weight:bold"> $'.$total_withouttax.'</td>
	</tr>
</table>

<div class="payment_tab">

<div style="width:40%;float:left;">
<p>We allow following payment options</p>
<div>

<div>

Paypal, Master Card, Visa, Americal-express, Cab-charges

</div>

</div>

</div>
<div style="width:20%; float:left; font-size:22px; padding:40px 0;">
	<p>
	OR			
</p>
</div>

<div style="width:40%;float:right;">
	<p>
In case of Direct money transfer<br>
					Account Details:<br>
					
					BSB 065000<br>
					Account No 11231542<br>
					</p>
					

</div>


</div>

<div style="text-align: center;font-size:12px; width:100%;float:left;"><strong>This quote will valid for 24 hours after issuance.</strong>
</div>






    
</div>

</div>


</div>


</div>
<style>
	div{
		font-family:Sans Serif
	}
	.quoation_price div
	{
		line-height:2;
		text-align:center;
		
		}
		.table_holder table{
			margin:0 auto;
			border:1px solid gainsboro;
		}
		.table_holder table td{
			padding: 5px 20px;
			border: 1px solid gainsboro;
			width: 50%;
		}
	
	
	</style>
';

$msg_new ='<div>
				

			<div class="quoation_price">
								<h1 style="text-align:center">Adelaide Limousine & Hire Cars</h1>
								<h5 style="text-align:center"> 2-hurtle street, Croydon 5008 South Australia. M 0424 516 500 Email: info@alhc.com.au www.alhc.com.au<br/>ABN: 26303196571
</h5>
			
					<div style="padding-bottom:80px;padding-top:50px;">
						<div class="header_div">
					<div style="float:left; padding-left:30px;width:40%">Date of booking : <strong>'.$date.'</strong></div>
					<div style="float:right; padding-right:30px;width:40%">Quatation Number : <strong>'.$qtn_number.'</strong></div>
					</div>

					</div>
					</div>
				
			<div style="margin-top:80px;text-align:center;font-weight:bold;">Quotation </div>
			
				 

<div style="border-top: 1px dotted #444;border-bottom:1px dotted #444;float: left; margin: 20px 0 35px 0;width: 100%; font-size:14px;">

<div class="description" style="width:49%;margin-right:2px solid black; float:left;padding: 40px 0; border-right:1px dotted #444;" >
<div>Pickup Address : '.$pickup_address.'</div>
<div>Pickup Postcode :'.$pickup_postcode.'</div>
<div>Dropoff Address : '.$dropoff_address.'</div>
<div>Dropoff Postcode : '.$dropoff_postcode.'</div>
<div>Total distance : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_total_distance_in_km", true).' km</div>
<div>Total time (approximate) : '.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_total_time_taken_in_min", true).' min</div>
</div>

<div class="description" style="width:50%;margin-right:2px solid black; float:right;padding: 40px -10px;" >
<div>Customer name : '.$cus_name.'</div>
<div>Booked by: '.$name.'</div>
<div style="display: inline-block;overflow-wrap: break-word;width: 100%;">Customer email:'.$cus_email.'</div>
<div>Customer phone number: '.get_post_meta($_REQUEST["pid"], "customer_name_customer_phone", true).'</div>
</div>



</div>
<div class="table_holder" style="margin-top:200px;">
<table>
	<tr>
		<td>Base Fare </td>
		<td>$'.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_base_fare", true).'</td>
	</tr>
	<tr>
		<td>GST will be 10% of base fare </td>
		<td>$'.get_post_meta($_REQUEST["pid"], "booking_price_and_travel_details_after_1st_tax", true).'</td>
	</tr>
	
	<tr>
		
		<td style="font-weight:bold">Total</td>
		<td style="font-weight:bold"> $'.$total_withouttax.'</td>
	</tr>
</table>
</div>
<div class="payment_tab">

<div style="width:40%;float:left;">
<p>We allow following payment options</p>
<div>

Paypal, Master Card, Visa, Americal-express, Cab-charges

</div>

</div>
<div style="width:20%; float:left; font-size:22px; padding:40px 0;">
	<p>
	OR			
</p>
</div>

<div style="width:40%;float:right;">
	<p>
In case of Direct money transfer<br>
					Account Details:<br>
					
					BSB 065000<br>
					Account No 11231542<br>
					</p>
					

</div>


</div>

</div>
<div style="padding: 15px;
    text-align: center;margin-top:150px;">This quote will valid for 24 hours after issuance</div>
</div>

    
<style>
	.quoation_price div
	{
		line-height:2;
		text-align:center;
		
		}
		.table_holder table{
			margin:0 auto;
			border:1px solid gainsboro;
		}
		.table_holder table td{
			padding: 5px 20px;
			border: 1px solid gainsboro;
			width: 50%;
		}
	
	
	</style>
';

$dompdf = new Dompdf();
$dompdf->set_paper('letter', 'portrait');

$dompdf->loadHtml($msg_new);

$dompdf->render();
    //$output = $dompdf->output();
// Output the generated PDF (1 = download and 0 = preview)



                            if (!defined('PDF_CACHE_DIRECTORY')) {
  define('PDF_CACHE_DIRECTORY', $upload_dir['basedir'] . '/pdf-cache/');
}


$cached = PDF_CACHE_DIRECTORY . $pid. '-quatation.pdf';
 //save the pdf file to cache
      file_put_contents($cached, $dompdf->output());
                            $attachments =$cached;
                            $headers[] = "Content-type: text/html" ;
                            //$filesds = print_pdf_ds($msg,$mypost);
                            //$attachments = array($filesds);
                            wp_mail( $email, "Quatation", $msg, $headers,$attachments);
                            
                            ?>
