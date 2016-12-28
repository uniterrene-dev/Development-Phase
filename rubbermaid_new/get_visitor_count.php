<?php

/*
 * Author Name : Shourya Chowdhury
*
* Company : Uniterrene Websoft Pvt Ltd
*
* Description: Get the current online visitor and the total visitor of all time
* 
* Version:1.0.1
*
*/

require_once 'app/Mage.php';
Mage::app('admin');

$visitor_data = Mage::getModel('log/visitor_online')->prepare()->getCollection();

//print_r($visitor_data->getData());

$visitor_count = Mage::getModel('log/visitor_online')->prepare()->getCollection()->count();
if(!empty($visitor_count) && $visitor_count > 0)
{
	$cnt =  $visitor_count;
	echo 'Visitors online :'.$cnt;
	echo "<br/>";
}
$write = Mage::getSingleton('core/resource')->getConnection('core_write');
$readresult=$write->query("SELECT * FROM log_visitor ORDER BY visitor_id DESC LIMIT 1 ");
while ($row = $readresult->fetch() )
{

	//print_r($row);

	echo "Total Visitors : ".$row['visitor_id'];

	echo "<br/>";
}

$date = Mage::getModel('core/date')->date('Y-m-d');

$time = time();
//set yesterday's date
$lastTime = $time - 86400*1; // 60*60*24
$from = date('Y-m-d', $lastTime);

//Get The Last Visitor Number Of Today
$today=$write->query("SELECT *
FROM log_visitor
WHERE  `last_visit_at` LIKE  '%$date%'
ORDER BY visitor_id DESC
LIMIT 1 ");
// Get The Last Visitor Numver Of Last day
$yesterday = $write->query("SELECT *
FROM log_visitor
WHERE  `last_visit_at` LIKE  '%$from%'
ORDER BY visitor_id DESC
LIMIT 1 ");

while ($row_to = $today->fetch() )
{
	$today_visit = $row_to['visitor_id'];

}

while ($row_yes = $yesterday->fetch() )
{
	$yesterday_visit = $row_yes['visitor_id'];

}
// Todays Visitor = Today's last visitor id - Yesterday last Visitor id
$today_total_visit = $today_visit - $yesterday_visit;


echo "Today's Total Visit : ".$today_total_visit;

?>
