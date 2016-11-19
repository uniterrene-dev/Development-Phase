<?php

/*

* Template Name: Pdf Template

* Description: Page template without sidebar

*/

$pid = $_REQUEST["pid"];

$mypost = get_post($_REQUEST["pid"]);
$name = get_post_meta($_REQUEST["pid"], "booking_address_book_person_name", true); 
$email = get_post_meta($_REQUEST["pid"], "booking_address_email", true); 
$phone = get_post_meta($_REQUEST["pid"], "booking_address_phone_no", true); 
$dropoff_address = get_post_meta($_REQUEST["pid"], "customer_name_drop_address", true); 
$pickup_address =  get_post_meta($_REQUEST["pid"], "customer_name_pick_upup_address", true); 
$time =  get_post_meta($_REQUEST["pid"], "customer_name_time", true); 

// include autoloader
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html = file_get_contents("http://onlinedevserver.biz/dev/Adelaide_limuisine/print_new/?pid=$pid");
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();
$dompdf->stream("codex",array("Attachment"=>0));
// Output the generated PDF (1 = download and 0 = preview)
//~ $dompdf->stream("codexworld",array("Attachment"=>0));

//~ $upload_dir = wp_upload_dir();
//~ if (!defined('PDF_CACHE_DIRECTORY')) {
//~ define('PDF_CACHE_DIRECTORY', $upload_dir['basedir'] . '/pdf-cache/');
//~ }
//~ $cached = PDF_CACHE_DIRECTORY . $pid. '-quatation.pdf';
//~ //save the pdf file to cache
//~ file_put_contents($cached, $dompdf->output());
?>
