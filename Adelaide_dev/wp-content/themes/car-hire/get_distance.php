<?php
//$from = $_REQUEST['location'];
//echo $form;
if($_REQUEST['location']!='' || $_REQUEST['end']!='' ){
$from = $_REQUEST['location'];
$to = $_REQUEST['end'];
//$to = "ultodanga";

$from = substr($from, 0, strpos($from, ' '));
$to = substr($to, 0, strpos($to, ' '));

$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$from&destinations=$to&language=en-EN&sensor=false");
$data = json_decode($data);

$time = 0;
$distance = 0;

foreach($data->rows[0]->elements as $road) {
    $time += $road->duration->text;
    $distance += $road->distance->text;
}

echo "To: ".$data->destination_addresses[0];
echo "<br/>";
echo "From: ".$data->origin_addresses[0];
echo "<br/>";
echo "Time: ".$time." min";
echo "<br/>";
echo "Distance: ".$distance." km";
$base_fare = ($distance*2.05)+($time*.46)+9;
echo "Basic Fare :".$base_fare."<br/>";
echo  "Total Fare :".($base_fare*1.1);
exit();
}
?>