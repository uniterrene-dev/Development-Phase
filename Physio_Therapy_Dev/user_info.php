<?php
$page = basename(__FILE__, '.php');
include('include/config.php');
require('include/lock.php');
require('include/class.users.php');
require('include/smarty.php');
require('include/utils.php');

$user = new users();
$utils = new utils();
if(!empty($_POST) && $_POST['action'] == 'show_user'){

	$user_id = $_POST['user_id'];
	$user_name = $_POST['name'];
	$password = $_POST['password'];
	$email  = $_POST['email'];
	$phone = $_POST['phone'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$active = $_POST['active'];
	$role = $_POST['role'];
	$utils->log("Params :$user_id, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role ",'INFO', 'USERS');
	if($user_id){
                $msg['output'] = $user->update_user($utils, $user_id, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role);
	}else{
		$msg['output'] = $user->add_user($utils, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role);
	}
	$utils->log("Message : ".$msg['output'], 'INFO', 'USERS');
	echo json_encode($msg);

}else if(!empty($_POST) && $_POST['action'] == 'add'){

        $user_id = $_POST['user_id'];
	$msg['output'] = $user->delete_user($utils, $user_id);
        $utils->log("Message : ".$msg['output'], 'INFO', 'USERS');
        echo json_encode($msg);

}else{

	$user_data = $user->user_dropdown($utils);
	//var_dump($user_data);
	$smarty->assign('user_data', $user_data);
	$smarty->assign('role_id', $role_id);
	$smarty->display('user_info.tpl');
}

?>
