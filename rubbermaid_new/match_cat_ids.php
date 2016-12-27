<?php

/*
 * Author name: Shourya Chowdhury
 *
 * Description: Get All the categroies id's
 */


$fp = fopen("category_ids.csv", 'r'); 

$j=0;
while(($website=fgetcsv($fp))) 
	{
	
	foreach($website as $cat_id)
	{
		//print_r($cat_id);
		
		print_r (explode(",",$cat_id));
		echo "<br/>";
	}
	
	$j++;
	}
	//print_r($sku);
	//print_r($img);
	fclose($fp);
	
	?>
	
