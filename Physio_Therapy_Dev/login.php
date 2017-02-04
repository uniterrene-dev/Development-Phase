<?php

include("include/config.php");
include("include/smarty.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){ // username and password sent from form 
	//print "I am in !!\n";
	$myusername=addslashes($_POST['username']); 
	$mypassword=addslashes($_POST['password']); 

	$sql="SELECT user_id, active FROM users WHERE user_name='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$active=$row['active'];
	$user_id=$row['user_id'];
	$count=mysql_num_rows($result);
	if($count==1){
		if($active != 1){
        	$smarty->display('inactive.tpl');
		}else{
			$_SESSION['login_user']=	$myusername;
			$_SESSION['user_id']=	$user_id;
			header("location: index.php");
		}
	}else{
		$error="Your Login Name or Password is invalid!! Please try again";
		$smarty->assign('error', $error);
		$smarty->display('login.tpl');
	}
}else{

	$smarty->assign('logout_no_show', 1);
	$smarty->display('login.tpl');

}
?>

