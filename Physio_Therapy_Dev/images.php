<?php
$page = basename(__FILE__, '.php');
include('include/config.php');
require('include/lock.php');
require('include/class.users.php');
require('include/class.images.php');
require('include/smarty.php');
require('include/utils.php');

$user = new users();
$images = new images();
$utils = new utils();
if(!empty($_POST) && $_POST['action'] == 'search'){

	$conditions = $_POST['conditions'];
	$bodyparts = $_POST['bodyparts'];
	$positions = $_POST['positions'];
	$purpose  = $_POST['purpose'];
	$equipment = $_POST['equipment'];

	$utils->log("Params :$conditions,$bodyparts, $positions, $purpose, $equipment ",'INFO', 'Images');
	//$msg['output'] = "Selected Params :$conditions, $bodyparts, $positions, $purpose, $equipment ";
	$msg['output'] = $images->list_images($utils, $conditions,$bodyparts, $positions, $purpose, $equipment);

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
	
	$cond_data = $images->conditions_dropdown($utils, 'conditions');
	$bp_data = $images->bodypart_dropdown($utils, 'bodyparts');
	$position_data = $images->position_dropdown($utils, 'positions');
	$purpose_data = $images->purpose_dropdown($utils, 'purpose');
	$equipment_data = $images->equipment_dropdown($utils, 'equipment');

	//var_dump($cond_data);
	$smarty->assign('cond_data', $cond_data);
	$smarty->assign('bp_data', $bp_data);
	$smarty->assign('pos_data', $position_data);
	$smarty->assign('purpose_data', $purpose_data);
	$smarty->assign('equip_data', $equipment_data);

	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('images.tpl');
}

?>
