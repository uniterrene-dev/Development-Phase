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
if(!empty($_GET) && $_GET['action'] == 'edit_exercise' && !empty($_GET['exercise_id'])){
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
	if(!empty($_GET) && isset($_GET['message'])){
		$smarty->assign('message', $_GET['message']);
	}
	$smarty->assign('exercise_data', $exercise_data);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('exercises.tpl');
} else if(!empty($_POST) && $_POST['action'] == 'add_exercise'){
	 $params = array();
	 foreach($_POST as $key => $value){
		 if(is_array($value)){
			$params[$key] = max($value);
		 } else {
			$params[$key] = $value;
		 }
	 }
	$exercise_id = $params['exercise_id'];
	$exercise = $params['name'];
	$description = $params['description'];
	$conditions  = $params['condition'];
	$position = $params['position'];
	$bodypart = $params['bodypart'];
	$purpose = $params['purpose'];
	$equipment = $params['equipment'];
    $muscle = 0; //$_POST['muscle'];
    $movement = 0; //$_POST['movement'];
	$params['keyword'] = $_POST['keyword'];
	$keywords = explode(',',$_POST['keyword']);
	$exercises->set_keywords($utils, $keywords);
	
	$utils->log("Params :$exercise_id, $exercise, $description, $conditions, $position, $bodypart, $purpose, $equipment, $muscle, $movement ",'INFO', 'Exercises');
	if($exercise_id){
		$msg['output'] = $exercises->update_exercises($utils, $exercise_id, $exercise, $description, $conditions, $position, $bodypart, $purpose, $equipment, $muscle, $movement, $exp_keys);
	}else{
		$msg['output'] = $exercises->add_exercises($utils, $params);
	}
	$utils->log("Message : ".$msg['output'], 'INFO', 'Exercises');
	header("Location: exercises.php");

}else if(!empty($_POST) && $_POST['action'] == 'delete_exercise'){

        $exercise_id = $_POST['exercise_id'];
		$utils->log("Params :$exercise_id",'INFO', 'Exercises');
		$msg['output'] = $exercises->delete_exercise($utils, $exercise_id);
        $utils->log("Message : ".$msg['output'], 'INFO', 'Exercises');
        echo json_encode($msg);

}else if(!empty($_POST) && $_POST['action'] == 'sub_category'){
		$category_value = $exercises->getSubCategory($utils,$_POST);
		$smarty->assign('category_value', $category_value);
		$smarty->assign('type', $_POST['type']);
		$smarty->assign('parent_id', $_POST['parent_id']);
		if(!empty($category_value)){
			$smarty->display('get_subcategory.tpl');
        }


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
	if(!empty($_GET) && isset($_GET['message'])){
		$smarty->assign('message', $_GET['message']);
	}

	$smarty->assign('exercise_data', $exercise_data);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('exercises.tpl');
}

?>
