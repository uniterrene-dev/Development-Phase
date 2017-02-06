<?php

$page = basename(__FILE__, '.php');
include('include/config.php');
include('include/lock.php');
require('include/class.users.php');
include("include/smarty.php");
require('include/utils.php');
$utils = new utils();
if(!empty($_POST) && $_POST['submitButton'] == 'Reports'){

        header("location: reports.php");

}else if(!empty($_POST) && $_POST['submitButton'] == 'Users'){

        header("location: users.php");

}else if(!empty($_POST) && $_POST['submitButton'] == 'UserInfo'){

        header("location: user_info.php");

}else if(!empty($_POST) && $_POST['submitButton'] == 'Clinics'){

        header("location: clinics.php");

}else if(!empty($_POST) && $_POST['submitButton'] == 'Images'){

        header("location: images.php");

}else if(!empty($_POST) && $_POST['submitButton'] == 'Exercises'){

        header("location: exercises.php");

}else if(!empty($_POST) && $_POST['submitButton'] == 'ExeSteps'){

        header("location: exesteps.php");

}else if(!empty($_POST) && $_POST['submitButton'] == 'Categories'){

        header("location: categories.php");

}else if(!empty($_POST) && $_POST['submitButton'] == 'Patients'){

        header("location: patients.php");

}else{
	$user = new users();
	$user_id = $_SESSION['user_id'];
	$user_data = $user->user_info($utils, $user_id);
	$f_name = $user_data['first_name'];
	$l_name = $user_data['last_name'];
	$role = $user_data['role_name'];
	$smarty->assign('role', $role);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('f_name', $f_name);
	$smarty->assign('l_name', $l_name);
	$smarty->display('index.tpl');

}
?>
