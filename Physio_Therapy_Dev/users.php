<?php
$page = basename(__FILE__, '.php');
include('include/config.php');
require('include/lock.php');
require('include/class.users.php');
require('include/smarty.php');
require('include/utils.php');

$user = new users();
$utils = new utils();
if(!empty($_POST) && $_POST['action'] == 'add_user'){

	$user_id = $_POST['user_id'];
	$user_name = $_POST['name'];
	$password = $_POST['password'];
	$email  = $_POST['email'];
	$phone = $_POST['phone'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$active = $_POST['active'];
	$role = $_POST['role'];
	$clinic = $_POST['clinic'];

	$utils->log("Params :$user_id, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role, $clinic ",'INFO', 'USERS');
	if($user_id){
                $msg['output'] = $user->update_user($utils, $user_id, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role, $clinic);
	}else{
		$msg['output'] = $user->add_user($utils, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role, $clinic);
	}
	$utils->log("Message : ".$msg['output'], 'INFO', 'USERS');
	echo json_encode($msg);

}else if(!empty($_POST) && $_POST['action'] == 'delete_user'){

        $user_id = $_POST['user_id'];
	$msg['output'] = $user->delete_user($utils, $user_id);
        $utils->log("Message : ".$msg['output'], 'INFO', 'USERS');
        echo json_encode($msg);

}else{

	if(isset($_GET['rows'])){
		$rows = $_GET['rows'];
	}else{
		$rows = 10;
	}	
	if(isset($_GET['next'])){
		$next = $_GET['next'];
	}else if(isset($_GET['prev'])){
		$next = $_GET['prev'] - $rows;
	}else{
		$next = 0;
	}
	
	$user_data = $user->list_users($utils, $next, $rows);
	$clinic_data = $user->clinic_info($utils);
	//var_dump($user_data);
	$smarty->assign('clinic_data', $clinic_data);
	$smarty->assign('user_data', $user_data);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('users.tpl');
}

?>
