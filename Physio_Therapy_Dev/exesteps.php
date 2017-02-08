<?php
$page = basename(__FILE__, '.php');
include('include/config.php');
require('include/lock.php');
require('include/class.users.php');
require('include/class.exercises.php');
require('include/class.pdf.php');
require('include/smarty.php');
require('include/utils.php');

$user = new users();
$utils = new utils();
$exercises = new exercises();
$pdf = new PDF();

if(!empty($_GET) && $_GET['action'] == 'search'){
	
	$exercise_id = $_GET['exer_dropdown'];
	$utils->log("Params :$exercise_id ",'INFO', 'Exe Steps');
	$steps_data['count'] = 0;
	if($exercise_id && $_GET['type']=='step'){
        $steps_data = $exercises->list_steps($utils, $exercise_id);       
	} else if($exercise_id && $_GET['type']=='video'){
		$video_data = $exercises->list_video($utils, $exercise_id);
	}
	$exercise_data = $exercises->list_exercises($utils);
	
	if($exercise_id){
		$exr_data = $exercises->get_exercise_data($utils, $exercise_id);
	}
	function get_image($file_id){
		$sql = "SELECT *  FROM `storage_files` WHERE `file_id` = '{$file_id}'";
		$result = mysql_query($sql);
		$row = mysql_fetch_assoc($result);
		return $row['name']; 
	}
	@$type = '';
	if(@$_GET['type']){
		@$type = $_GET['type'];
	}
	$exer_data = $exr_data['exercise'];
	$smarty->assign('exercise_id', $exercise_id); 
	$smarty->assign('exer_data', $exer_data);
	$smarty->assign('exercise_data', $exercise_data);
	$smarty->assign('show_steps', 1);
	$smarty->assign('steps_data', $steps_data);
	$smarty->assign('video_data', @$video_data);
	$smarty->assign('type', $type);
	

	$smarty->assign('role_id', $role_id);	
	$smarty->assign('logout_no_show', 0);
	$smarty->display('exesteps.tpl');

} else if(!empty($_GET) && $_GET['action'] == 'add_steps'){
        $exercise_id = $_GET['exercise_id'];
        //$utils->log("Params :$exercise_id",'INFO', 'Exe Steps');
		if($exercise_id){
			$exr_data = $exercises->get_exercise_data($utils, $exercise_id);
		}
		$exercise_name = $exr_data['exercise'];
		$smarty->assign('exercise_id', $exercise_id);
		$smarty->assign('exercise_name', $exercise_name);
		$smarty->assign('show_steps_form', 1);
		$smarty->assign('role_id', $role_id);
		$smarty->assign('action', 'step');
        $smarty->assign('logout_no_show', 0);
        $smarty->display('edit_exesteps.tpl');

} else if(!empty($_GET) && $_GET['action'] == 'add_video'){
		$exercise_id = $_GET['exercise_id']; 
		if($exercise_id){
			$exr_data = $exercises->get_exercise_data($utils, $exercise_id);
		}
		$exercise_name = $exr_data['exercise'];
		$smarty->assign('exercise_id', $exercise_id);
		$smarty->assign('exercise_name', $exercise_name);
		$smarty->assign('show_steps_form', 1);
		$smarty->assign('role_id', $role_id);
		$smarty->assign('action', 'video');
        $smarty->assign('logout_no_show', 0);
        $smarty->display('edit_exesteps.tpl');

} else if(!empty($_GET) && $_GET['action'] == 'update_steps'){

        $exercise_id = $_GET['exercise_id'];
        $steps_id = $_GET['steps_id'];
	$utils->log("Params :$exercise_id, $steps_id",'INFO', 'Exe Steps');

        $steps_data['count'] = 0;
        if($exercise_id && $steps_id){
		$exr_data = $exercises->get_exercise_data($utils, $exercise_id);
                $steps_data = $exercises->list_steps($utils, $exercise_id, $steps_id);
        }
        //var_dump($steps_data);
		$exercise_name = $exr_data['exercise'];
        $smarty->assign('steps_id', $steps_id);
        $smarty->assign('exercise_id', $exercise_id);
        $smarty->assign('exercise_name', $exercise_name);
        $smarty->assign('show_steps', 1);
        $smarty->assign('steps_data', $steps_data);
		$smarty->assign('role_id', $role_id);
        $smarty->assign('logout_no_show', 0);
        $smarty->display('edit_exesteps.tpl');

}else if(!empty($_GET) && $_GET['action'] == 'delete_steps'){

        $exercise_id = $_GET['exercise_id'];
        $steps_id = $_GET['steps_id'];
        $utils->log("Params :$exercise_id, $steps_id",'INFO', 'Exe Steps');

		$result = $exercises->delete_steps($utils, $exercise_id, $steps_id);

        $steps_data['count'] = 0;
        if($exercise_id){
			$steps_data = $exercises->list_steps($utils, $exercise_id);
        }
        //var_dump($steps_data);
        $exercise_data = $exercises->list_exercises($utils);
		$exr_data = $exercises->get_exercise_data($utils, $exercise_id);
        $exer_data = $exr_data['exercise'];

		$smarty->assign('return_info', $result);
        $smarty->assign('exercise_id', $exercise_id);
        $smarty->assign('exer_data', $exer_data);
        $smarty->assign('exercise_data', $exercise_data);
        $smarty->assign('show_steps', 1);
        $smarty->assign('steps_data', $steps_data);
		$smarty->assign('role_id', $role_id);
        $smarty->assign('logout_no_show', 0);
        $smarty->display('exesteps.tpl');


}else if(!empty($_GET) && $_GET['action'] == 'delete_video'){

        $exercise_id = $_GET['exercise_id'];
        $video_id = $_GET['video_id'];
        $utils->log("Params :$exercise_id, $video_id",'INFO', 'Exe Steps');
		$result = $exercises->delete_video($utils, $exercise_id, $video_id);

		$exercise_data = $exercises->list_exercises($utils);
		$exr_data = $exercises->get_exercise_data($utils, $exercise_id);
        $exer_data = $exr_data['exercise'];

		$smarty->assign('return_info', $result);
        $smarty->assign('exercise_id', $exercise_id);
        $smarty->assign('exer_data', $exer_data);
        $smarty->assign('exercise_data', $exercise_data);
		$smarty->assign('role_id', $role_id);
        $smarty->assign('logout_no_show', 0);
        $smarty->display('exesteps.tpl');


}else if(!empty($_POST) && $_POST['action'] == 'edit_steps'){

        $exercise_id = $_POST['exercise_id'];
        $steps_id = $_POST['steps_id'];
		$description = $_POST['description'];
		$english = $_POST['english'];
		$hindi = $_POST['hindi'];
		$urdu = $_POST['urdu'];
		$telugu = $_POST['telugu'];
		$tamil = $_POST['tamil'];
		$bengali = $_POST['bengali'];

        $utils->log("Params :$exercise_id, $steps_id, $description, $english, $hindi, $urdu, $telugu, $tamil, $bengali",'INFO', 'Exe Steps');

        $error = '';
		$root = __DIR__;
        $uploaddir = $root.'\uploads\steps';
        $uploadfile = '';
        $save_path = '';
		$file_id = 0;
        if(!empty($_FILES['upload_img']) && ($_FILES['upload_img']['size'] > 0 )){
			$utils->log("found upload pic!!",'INFO', 'Exe Steps');				
			$unique_id = uniqid();
			$filename = $unique_id.$_FILES['upload_img']['name'];
			$uploadfile = $uploaddir ."\/". $filename;
			$path = '/uploads/steps';
			$file_id = $exercises->upload_img($utils, $filename,$path,$_FILES);
			$utils->log("Uploaded pic name : $uploadfile, save_path : $save_path",'INFO', 'Exe Steps');
			if(move_uploaded_file($_FILES['upload_img']['tmp_name'], $uploadfile)) {
				$utils->log("File is valid, and was successfully uploaded",'INFO', 'Exe Steps');
			} else {
				$utils->log("Possible file upload attack!!",'INFO', 'Exe Steps');
				$error = "Possible file upload attack!!";
			}
        }else{
			$utils->log("No file Params!!",'INFO', 'Exe Steps');
        } 
	
	if($error){
		$result = $error; // Upload image failed!!
	}else{
		$result = '';
		if($exercise_id && $steps_id){
			$result = $exercises->update_steps($utils, $exercise_id, $steps_id, $description, $file_id, $english, $hindi, $urdu, $telugu, $tamil, $bengali);
		}else{
			$result = $exercises->add_steps($utils, $exercise_id, $description, $file_id, $english, $hindi, $urdu, $telugu, $tamil, $bengali);
		}
	}
	if($exercise_id){
			$steps_data = $exercises->list_steps($utils, $exercise_id);
	}
	//var_dump($steps_data);
	$exercise_data = $exercises->list_exercises($utils);
	$exr_data = $exercises->get_exercise_data($utils, $exercise_id);
	$exer_data = $exr_data['exercise'];

	$smarty->assign('return_info', $result);
	$smarty->assign('exercise_id', $exercise_id);
	$smarty->assign('exer_data', $exer_data);
	$smarty->assign('exercise_data', $exercise_data);
	$smarty->assign('show_steps', 1);
	$smarty->assign('steps_data', $steps_data);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('exesteps.tpl');

}else if(!empty($_POST) && $_POST['action'] == 'edit_video'){
        $exercise_id = $_POST['exercise_id'];
        $type = $_POST['type'];
		$path = $_POST['upload_video'];
        $utils->log("Params :$exercise_id, $type",'INFO', 'Exe Steps');

        $error = '';
		if($type == 'local'){
			$root = __DIR__;
			$uploaddir = $root.'\uploads\videos';
			$uploadfile = '';
			if(!empty($_FILES['upload_video']) && ($_FILES['upload_video']['size'] > 0 )){
				$utils->log("found upload pic!!",'INFO', 'Exe Steps');				
				$unique_id = uniqid();
				$filename = $unique_id.$_FILES['upload_video']['name'];
				$uploadfile = $uploaddir ."\/". $filename;
				$path = '/uploads/videos';
				$utils->log("Uploaded pic name : $uploadfile, save_path : $path",'INFO', 'Exe Steps');
				if(move_uploaded_file($_FILES['upload_video']['tmp_name'], $uploadfile)) {
					$utils->log("File is valid, and was successfully uploaded",'INFO', 'Exe Steps');
				} else {
					$utils->log("Possible file upload attack!!",'INFO', 'Exe Steps');
					$error = "Possible file upload attack!!";
				}
				$exercises->upload_video($utils,$exercise_id,$type,$path,$filename,$_FILES);
			}else{
				$utils->log("No file Params!!",'INFO', 'Exe Steps');
			} 
		} else {
			$exercises->upload_video($utils,$exercise_id,$type,$path);
		}
	if($error){
		$result = $error; // Upload image failed!!
	}else{
		$result = '';
		
	}
	
	$exercise_data = $exercises->list_exercises($utils);
	$exr_data = $exercises->get_exercise_data($utils, $exercise_id);
	$exer_data = $exr_data['exercise'];

	$smarty->assign('return_info', $result);
	$smarty->assign('exercise_id', $exercise_id);
	$smarty->assign('exer_data', $exer_data);
	$smarty->assign('exercise_data', $exercise_data);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('exesteps.tpl');

}else if(!empty($_GET) && $_GET['action'] == 'pdf'){
        $exercise_id = $_GET['exercise_id'];
        $utils->log("Params :$exercise_id",'INFO', 'Exe Steps');

        $steps_data['count'] = 0;
        if($exercise_id){
                $steps_data = $exercises->list_steps($utils, $exercise_id);
        }

	//var_dump($steps_data);
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->Image('/var/www/myhealth/uploads/pr_clinic_myhealth_1.png',10,6,30);
	$pdf->SetFont('Arial','B',15);
	$pdf->Cell(80);
	$pdf->Cell(30,10,$steps_data['exer_data'],1,0,'C');
	$pdf->Ln(20);

	$pdf->SetFont('Times','',12);
	//$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
	//$pdf->SetFont('DejaVu','',14);

	foreach($steps_data['table_data'] as $key => $row ){

		$pdf->Cell(0,10, 'Execcise ID : '.$row['exercise_id'],0,1);
		$pdf->Cell(0,10, 'Execcise : '.$row['exercise'],0,1);
		$pdf->Cell(0,10, 'Step ID : '.$row['steps_id'],0,1);
		$pdf->Cell(0,10, 'Description :'.$row['description'],0,1);
		$pdf->Cell(0,10, 'English :'.$row['english'],0,1);
		mb_internal_encoding('UTF-8');
		$enc = mb_detect_encoding($row['hindi'], "auto");
		//echo "$enc"."<br/>";
		//echo iconv($enc, 'ISO-8859-1', $row['hindi'])."<br/>";
		//$pdf->Cell(0,10, iconv($enc,'ISO-8859-1//TRANSLIT//IGNORE', $row['hindi']),0,1);
		$pdf->Cell(0,10, iconv('UTF-8','iso-8859-1//TRANSLIT//IGNORE', $row['hindi']),0,1);
		$pdf->Cell(0,10, mb_convert_encoding($row['urdu'], 'windows-1252', 'UTF-8'),0,1);
		$pdf->Cell(0,10, $row['telugu'],0,1);
		$pdf->Cell(0,10, 'tamil :'.$row['tamil'],0,1);
		$pdf->Cell(0,10, 'bengali :'.$row['bengali'],0,1);
	}

	$pdf->Output('D','test.pdf',1);

}else{

	$exercise_data = $exercises->list_exercises($utils);
        
	$smarty->assign('exercise_data', $exercise_data);
	$smarty->assign('role_id', $role_id);
	$smarty->assign('logout_no_show', 0);
	$smarty->display('exesteps.tpl');
}

?>
