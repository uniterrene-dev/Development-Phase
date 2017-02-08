<?php

$page = basename(__FILE__, '.php');
include('include/config.php');
include('include/lock.php');
require('include/class.users.php');
require('include/class.patients.php');
//require('include/class.images.php');
require('include/class.home.php');
require('include/class.exercises.php');
include("include/smarty.php");
require('include/utils.php');

$user = new users();
//$images = new images();
$utils = new utils();
$patients = new patients();
$exercises = new exercises();
$home = new homes();

$cond_data = $home->home_conditions_dropdown($utils, 'conditions');
$bp_data = $home->home_bodypart_dropdown($utils, 'bodyparts');
$position_data = $home->home_position_dropdown($utils, 'positions');
$purpose_data = $home->home_purpose_dropdown($utils, 'purpose');
$equipment_data = $home->home_equipment_dropdown($utils, 'equipment');
/* 	
$cond_data = $images->conditions_dropdown($utils, 'conditions');
$bp_data = $images->bodypart_dropdown($utils, 'bodyparts');
$position_data = $images->position_dropdown($utils, 'positions');
$purpose_data = $images->purpose_dropdown($utils, 'purpose');
$equipment_data = $images->equipment_dropdown($utils, 'equipment'); */


$paitentdata = $patients->patient_info($utils,$_GET['patient']);
$exercise_data = $exercises->list_exercises($utils);
$smarty->assign('exercise_data', $exercise_data);
  
function list_steps($exercise_id = 0){
	$sql="SELECT steps_id, es.exercise_id, e.exercise, es.description, file_id, english, hindi, urdu, telugu, tamil, bengali FROM exercise_steps es, exercises e  WHERE es.exercise_id = e.exercise_id";
	$sql .= ($exercise_id) ? " AND es.exercise_id = $exercise_id" : "";
	
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	$data = array();
	$data['count'] = $count;
	$temp_data = array();
	if($count){
		$incr = 0;
		while($row= mysql_fetch_assoc($result)){
			$temp_data[] = $row;
		}
	}
	$data['table_data'] = $temp_data;
	return $data;
}
		
function get_image($file_id){
	$sql = "SELECT *  FROM `storage_files` WHERE `file_id` = '{$file_id}'";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	return $row['name']; 
}
$smarty->assign('role_id', $role_id);
$smarty->assign('logout_no_show', 0);
	
$smarty->assign('paitentdata', $paitentdata);
$smarty->assign('cond_data', $cond_data);
$smarty->assign('bp_data', $bp_data);
$smarty->assign('pos_data', $position_data);
$smarty->assign('purpose_data', $purpose_data);
$smarty->assign('equip_data', $equipment_data);

	
$smarty->display('task_panel.tpl');

?>
