<?php

/*
 * Author name: Shourya Chowdhury
 *
 * Description: Get all the new and old site categroies id's
 */


$fp = fopen("allcategories_local.csv", 'r'); 

$j=0;
while(($website=fgetcsv($fp))) 
	{
	
	$new=$website[1];
	$old=$website[3];
	
	if($new!=$old)
	{
		echo $new;
		echo "-------------------------";
		echo $old;
		echo "<br/>";
		
	}
	
	
	$j++;
	}
	//print_r($sku);
	//print_r($img);
	fclose($fp);
	
	?>
	
