<?php
session_start();

$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select user_id, user_name, role_id from users where user_name='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['user_name'];
$role_id=$row['role_id'];

if(!isset($login_session)){

	header("Location: login.php");

}else{

	if($role_id != 1){
		if(($page == 'reports') || ($page == 'users') || ($page == 'user_info') || ($page == 'clinics') || ($page == 'exercises') || ($page == 'exesteps') ){
			header("Location: index.php");
		}else{
			//header("Location: images.php");
		}
	}else{
		
		//header("Location: images.php");
	}
}
?>
