<?php
$page = basename(__FILE__, '.php');
include('include/config.php');
require('include/lock.php');
require('include/class.patients.php');
require('include/smarty.php');
require('include/utils.php');

$patient = new patients();
$utils = new utils();
if(!empty($_POST) && $_POST['action'] == 'add_patient'){

	$patient_id = $_POST['patient_id'];
	$name = $_POST['name'];
	$disease = $_POST['disease'];
	$email  = $_POST['email'];
	$mobile = $_POST['mobile'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	
	$utils->log("Params :$patient_id, $name, $disease, $email, $mobile, $dob, $gender, $address ",'INFO', 'Patients');
	if($patient_id){
                $msg['output'] = $patient->update_patient($utils, $patient_id, $name, $disease, $email, $mobile, $dob, $gender, $address);
	}else{
		$msg['output'] = $patient->add_patient($utils, $name, $disease, $email, $mobile, $dob, $gender, $address);
	}
	$utils->log("Message : ".$msg['output'], 'INFO', 'Patients');
	echo json_encode($msg);

}else if(!empty($_POST) && $_POST['action'] == 'delete_patient'){

        $patient_id = $_POST['patient_id'];
		$msg['output'] = $user->delete_patient($utils, $patient_id);
        $utils->log("Message : ".$msg['output'], 'INFO', 'Patients');
        echo json_encode($msg);

}else{

	$patient_data = $patient->list_patients($utils);
	$smarty->assign('patient_data', $patient_data);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('patients.tpl');
}

?>
