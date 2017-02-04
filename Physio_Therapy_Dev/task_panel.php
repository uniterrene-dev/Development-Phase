<?php

$page = basename(__FILE__, '.php');
include('include/config.php');
include('include/lock.php');
require('include/class.users.php');
require('include/class.images.php');
include("include/smarty.php");
require('include/utils.php');

$user = new users();
$images = new images();
$utils = new utils();

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

	
$smarty->display('task_panel.tpl');

?>
