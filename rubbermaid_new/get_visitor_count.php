<?php

/*
 * Author Name : Shourya Chowdhury
 * 
 * Company : Uniterrene Websoft Pvt Ltd
 * 
 * Description: Get the current online visitor and the total visitor of all time
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
echo $date = Mage::getModel('core/date')->date('Y-m-d');
$write = Mage::getSingleton('core/resource')->getConnection('core_write');
$readresult_today=$write->query("SELECT * 
FROM  `log_visitor` 
WHERE  `last_visit_at` LIKE  '%$date%'
LIMIT 0 , 30");
while ($row_today = $readresult_today->fetch() )
{
	
	print_r($row_today);
	
	//echo "Total Visitors Today : ".$row_today['visitor_id'];
}
?>