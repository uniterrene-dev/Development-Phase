<?php
$page = basename(__FILE__, '.php');
include('include/config.php');
require('include/lock.php');
require('include/class.users.php');
require('include/class.clinics.php');
require('include/smarty.php');
require('include/utils.php');

$user = new users();
$clinic = new clinics();
$utils = new utils();


if(!empty($_POST) && $_POST['action'] == 'add_clinic'){
	$clinic_id = $_POST['clinic_id'];
	$name = $_POST['name'];
	$email  = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$site = $_POST['site'];

	$error = '';
	$uploaddir = '/var/www/myhealth/uploads/';
	$uploadfile = '';
	$save_path = '';
	if(!empty($_FILES['logo'])){
		$utils->log("I am in!!",'INFO', 'Clinic');
		$name_1 = strtolower($name);
		$name_1 = str_replace(' ', '_', $name_1);

		$uploadfile = $uploaddir . $name_1 . '_' .basename($_FILES['logo']['name']);
		$save_path = 'uploads/' . $name_1 . '_' .basename($_FILES['logo']['name']);
		if (move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile)) {
			$utils->log("File is valid, and was successfully uploaded",'INFO', 'Clinic');
		} else {
			$utils->log("Possible file upload attack!!",'INFO', 'Clinic');
		    	$error = "Possible file upload attack!!";
		}
	}else{
		$utils->log("No file Params!!",'INFO', 'Clinic');
	}

	if($error){
		$msg['output'] = $error;
	}else{
		$utils->log("Params :$clinic_id, $name, $email, $phone, $address, $site, $uploadfile, $save_path ",'INFO', 'Clinic');
		if($clinic_id){
                	$msg['output'] = $clinic->update_clinic($utils, $clinic_id, $name, $email, $phone, $address, $site, $save_path);
		}else{
			$msg['output'] = $clinic->add_clinic($utils, $name, $email, $phone, $address, $site, $save_path);
		}
	}
	$utils->log("Message : ".$msg['output'], 'INFO', 'Clinic');
	echo json_encode($msg);

}else if(!empty($_POST) && $_POST['action'] == 'delete_clinic'){

        $clinic_id = $_POST['clinic_id'];
	$msg['output'] = $clinic->delete_clinic($utils, $clinic_id);
        $utils->log("Message : ".$msg['output'], 'INFO', 'Clinic');
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

	$clinic_data = $clinic->list_clinincs($utils, $next, $rows);
	$smarty->assign('clinic_data', $clinic_data);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('clinics.tpl');
}

?>
