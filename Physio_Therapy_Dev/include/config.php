<?php
$host_name = '192.168.10.137';
$user_name = 'root';
$pass_word = '';
$database_name = 'therexpo_physio';


if(!isset($conn)){

	$conn = mysql_connect($host_name, $user_name, $pass_word) or die ('Error connecting to mysql');
	mysql_select_db($database_name);
	mysql_set_charset('utf8',$conn);

}

?>
