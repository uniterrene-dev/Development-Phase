<?php
$page = basename(__FILE__, '.php');
include('include/config.php');
require('include/lock.php');
require('include/class.users.php');
require('include/class.exercises.php');
require('include/smarty.php');
require('include/utils.php');

$user = new users();
$utils = new utils();
$exercises = new exercises();

if(!empty($_POST) && $_POST['action'] == 'add_exercise'){

	$exercise_id = $_POST['exercise_id'];
	$exercise = $_POST['name'];
	$description = $_POST['description'];
	$conditions  = $_POST['conditions'];
	$position = $_POST['position'];
	$bodypart = $_POST['bodypart'];
	$purpose = $_POST['purpose'];
	$equipment = $_POST['equipment'];
    $muscle = 0; //$_POST['muscle'];
    $movement = 0; //$_POST['movement'];
	$keywords = explode(',',$_POST['keyword']);
	$exp_keys = $exercises->set_keywords($utils, $keywords);
	
	$utils->log("Params :$exercise_id, $exercise, $description, $conditions, $position, $bodypart, $purpose, $equipment, $muscle, $movement ",'INFO', 'Exercises');
	if($exercise_id){
		$msg['output'] = $exercises->update_exercises($utils, $exercise_id, $exercise, $description, $conditions, $position, $bodypart, $purpose, $equipment, $muscle, $movement, $exp_keys);
	}else{
		$msg['output'] = $exercises->add_exercises($utils, $exercise, $description, $conditions, $position, $bodypart, $purpose, $equipment, $muscle, $movement, $exp_keys);
	}
	$utils->log("Message : ".$msg['output'], 'INFO', 'Exercises');
	echo json_encode($msg);

}else if(!empty($_POST) && $_POST['action'] == 'delete_exercise'){

        $exercise_id = $_POST['exercise_id'];
	$utils->log("Params :$exercise_id",'INFO', 'Exercises');
	$msg['output'] = $exercises->delete_exercise($utils, $exercise_id);
        $utils->log("Message : ".$msg['output'], 'INFO', 'Exercises');
        echo json_encode($msg);

}else{
	$cond_data  = $exercises->conditions_list($utils, 'conditions');
	$bp_data = $exercises->bodypart_list($utils, 'bodyparts');
	$position_data = $exercises->position_list($utils, 'positions');
	$purpose_data = $exercises->purpose_list($utils, 'purpose');
	$equipment_data = $exercises->equipment_list($utils, 'equipment');
	$muscle_data = $exercises->muscle_list($utils, 'muscle');
	$movement_data = $exercises->movement_list($utils, 'movement');

	$exercise_data = $exercises->list_exercises($utils);
        
	$smarty->assign('cond_data', $cond_data);
	$smarty->assign('bp_data', $bp_data);
	$smarty->assign('pos_data', $position_data);
	$smarty->assign('purpose_data', $purpose_data);
	$smarty->assign('equip_data', $equipment_data);
	$smarty->assign('muscle_data', $muscle_data);
	$smarty->assign('movement_data', $movement_data);


	$smarty->assign('exercise_data', $exercise_data);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('exercises.tpl');
}

?>
