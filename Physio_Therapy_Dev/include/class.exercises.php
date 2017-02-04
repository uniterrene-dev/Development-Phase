<?php

class exercises{

	function list_exercises($utils){

	        $sql="SELECT exercise_id, exercise, description, condition_id, position_id, purpose_id, equipment_id, muscle_id, movement_id, bodypart_id, keywords FROM exercises";
			$utils->log("SQL: $sql", 'INFO', 'Exercises');
        	$result=mysql_query($sql);
	        $count=mysql_num_rows($result);

		$data = array();
		$data['count'] = $count;
		$drop_down = array();
		if($count){
			while($row= mysql_fetch_assoc($result)){
				$drop_down[$row['exercise_id']]['exercise_id'] = $row['exercise_id'];
				$drop_down[$row['exercise_id']]['name'] = $row['exercise'];
				$drop_down[$row['exercise_id']]['description'] = $row['description'];
				$drop_down[$row['exercise_id']]['condition_id'] = $row['condition_id'];
				$drop_down[$row['exercise_id']]['position_id'] = $row['position_id'];
				$drop_down[$row['exercise_id']]['purpose_id'] = $row['purpose_id'];
				$drop_down[$row['exercise_id']]['equipment_id'] = $row['equipment_id'];
				$drop_down[$row['exercise_id']]['muscle_id'] = $row['muscle_id'];
				$drop_down[$row['exercise_id']]['movement_id'] = $row['movement_id'];
				$drop_down[$row['exercise_id']]['bodypart_id'] = $row['bodypart_id'];
				$drop_down[$row['exercise_id']]['keyword'] = $row['keywords'];
			}
		}
		$data['drop_down'] = $drop_down;
		return $data;
	}

	function add_exercises($utils, $exercise, $description, $conditions, $position, $bodypart, $purpose, $equipment, $muscle, $movement, $exp_keys){
	/* $sql="INSERT INTO exercises (exercise, description, condition_id, position_id, bodypart_id, purpose_id, equipment_id, muscle_id, movement_id, keywords, created_date, updated_date) VALUES ('$exercise', '$description', $conditions, $position, $bodypart, $purpose, $equipment,  $muscle, $movement,$exp_keys, now(), now()) ";
		 */		
	$sql= "INSERT INTO `therexpo_physio`.`exercises` (`exercise` ,`description` ,`condition_id` ,`position_id` ,`purpose_id` ,`equipment_id` ,`muscle_id` ,`movement_id` ,`bodypart_id` ,`keywords` ,`created_date` ,`updated_date`)VALUES ('{$exercise}', '{$description}', '{$conditions}', '{$position}', '{$bodypart}', '{$purpose}', '{$equipment}', '{$muscle}', '{$movement}', '{$exp_keys}', '{now()}', '2017-02-03 00:00:00')";
		$utils->log("SQL : $sql", "INFO", "Exercises");
		if(mysql_query($sql)){
			return "Inserted successfully!!";
		}else{
			return "Insertion Failed!!";
		}
		
	}

	function update_exercises($utils, $exercise_id, $exercise, $description, $conditions, $position, $bodypart, $purpose, $equipment, $muscle, $movement, $exp_keys){

		$sql = "UPDATE exercises SET ";
		$sql .= $exercise ? " exercise = '$exercise'," : "";
		$sql .= $description ? " description = '$description'," : "";
		$sql .= $conditions ? " condition_id = '$conditions'," : "";
		$sql .= $position ? " position_id = '$position'," : "";
		$sql .= $bodypart ? " bodypart_id = '$bodypart'," : "";
		$sql .= $purpose ? " purpose_id = '$purpose'," : "";
		$sql .= $equipment ? " equipment_id = '$equipment'," : "";
		$sql .= $muscle ? " muscle_id = '$muscle'," : "";
		$sql .= $movement ? " movement_id = '$movement'," : "";
		$sql .= $exp_keys ? " keywords = '$exp_keys'," : "";
		$sql .= ' updated_date = now()';
		$sql = rtrim($sql,',');
		$sql .= " WHERE exercise_id = $exercise_id";
		$utils->log("SQL : $sql", "INFO", "Exercises");

		if(mysql_query($sql)){
				return "Updated successfully!!";
		}else{
				return "Updation Failed!!";
		}
	}

        function delete_exercise($utils, $exercise_id){

		$utils->log("Deleting Exercise Steps for $exercise_id", "INFO", "Exercises");
		$this->delete_steps($utils, $exercise_id );

                $sql = "DELETE FROM exercises WHERE exercise_id = $exercise_id";
                $utils->log("SQL : $sql", "INFO", "Exercises");

                if(mysql_query($sql)){
                        return "Deleted successfully!!";
                }else{
                        return "Deletion Failed!!";
                }


        }

        function conditions_list($utils, $type){
			$sql = "SELECT cond_id, conditions, parent_id from conditions ";
			$utils->log("SQL : $sql", "INFO", "Exercises");

			$result=mysql_query($sql);
			$count=mysql_num_rows($result);
			$temp = array();
			if($count){
					while($row= mysql_fetch_assoc($result)){
							$temp[$row['parent_id']][$row['cond_id']] = $row['conditions'];
					}
			}
			$ret_array = array();
			foreach($temp[0] as $parent_id => $p_cond) {
					$inside = $this->prepare_tree($utils, $parent_id, $p_cond, $temp, $type);
					if(count($inside)){
							foreach($inside as $key => $val){
									$ret_array[$key] = $val;
							}
					}
			}
			return $ret_array;
        }

        function prepare_tree($utils, $parent_id, $p_cond, $temp, $type){

		$out_array = array();
		$out_array[$parent_id] = $p_cond;
                $inside = array();
                if(isset($temp[$parent_id])){
                        foreach($temp[$parent_id] as $child_id => $c_cond){
				$concate_str = $p_cond .' / ' .$c_cond;
                                $inside = $this->prepare_tree($utils, $child_id, $concate_str, $temp, $type);
		                if(count($inside)){
                		        foreach($inside as $key => $val){
                                		$out_array[$key] = $val;
		                        }
                		}
                        }
                }
                return $out_array;
        }

        function bodypart_list($utils, $type){
                $sql = "select bodypart_id, bodypart, parent_id from bodyparts";
                $utils->log("SQL : $sql", "INFO", "Exercises");
                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['bodypart_id']] = $row['bodypart'];
                        }
                }
                $ret_array = array();
                foreach($temp[0] as $parent_id => $p_cond) {
                        $inside = $this->prepare_tree($utils, $parent_id, $p_cond, $temp, $type);
                        if(count($inside)){
                                foreach($inside as $key => $val){
                                        $ret_array[$key] = $val;
                                }
                        }
                }
                return $ret_array;
        }

        function position_list($utils, $type){
                $sql = "select position_id, position, parent_id from positions";
                $utils->log("SQL : $sql", "INFO", "Exercises");
                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['position_id']] = $row['position'];
                        }
                }
                $ret_array = array();
                foreach($temp[0] as $parent_id => $p_cond) {
                        $inside = $this->prepare_tree($utils, $parent_id, $p_cond, $temp, $type);
                        if(count($inside)){
                                foreach($inside as $key => $val){
                                        $ret_array[$key] = $val;
                                }
                        }
                }
                return $ret_array;
        }

        function purpose_list($utils, $type){
                $sql = "select purpose_id, purpose, parent_id from purpose";
                $utils->log("SQL : $sql", "INFO", "Exercises");
                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['purpose_id']] = $row['purpose'];
                        }
                }
                $ret_array = array();
                foreach($temp[0] as $parent_id => $p_cond) {
                        $inside = $this->prepare_tree($utils, $parent_id, $p_cond, $temp, $type);
                        if(count($inside)){
                                foreach($inside as $key => $val){
                                        $ret_array[$key] = $val;
                                }
                        }
                }
                return $ret_array;
        }

        function equipment_list($utils, $type){
                $sql = "select equipment_id, equipment, parent_id from equipment";
                $utils->log("SQL : $sql", "INFO", "Exercises");
                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['equipment_id']] = $row['equipment'];
                        }
                }
                $ret_array = array();
                foreach($temp[0] as $parent_id => $p_cond) {
                        $inside = $this->prepare_tree($utils, $parent_id, $p_cond, $temp, $type);
                        if(count($inside)){
                                foreach($inside as $key => $val){
                                        $ret_array[$key] = $val;
                                }
                        }
                }
                return $ret_array;
        }

        function muscle_list($utils, $type){
                $sql = "select muscle_id, muscle, parent_id from muscle";
                $utils->log("SQL : $sql", "INFO", "Exercises");
                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['muscle_id']] = $row['muscle'];
                        }
                }
                $ret_array = array();
                foreach($temp[0] as $parent_id => $p_cond) {
                        $inside = $this->prepare_tree($utils, $parent_id, $p_cond, $temp, $type);
                        if(count($inside)){
                                foreach($inside as $key => $val){
                                        $ret_array[$key] = $val;
                                }
                        }
                }
                return $ret_array;
        }

        function movement_list($utils, $type){
                $sql = "select movement_id, movement, parent_id from movement";
                $utils->log("SQL : $sql", "INFO", "Exercises");
                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['movement_id']] = $row['movement'];
                        }
                }
                $ret_array = array();
                foreach($temp[0] as $parent_id => $p_cond) {
                        $inside = $this->prepare_tree($utils, $parent_id, $p_cond, $temp, $type);
                        if(count($inside)){
                                foreach($inside as $key => $val){
                                        $ret_array[$key] = $val;
                                }
                        }
                }
                return $ret_array;
        }

	function get_exercise_data($utils, $exercise_id){

		$sql = "SELECT * FROM exercises WHERE exercise_id = $exercise_id";
                $utils->log("SQL: $sql", 'INFO', 'Exercises');
                $result=mysql_query($sql);
		$row = mysql_fetch_assoc($result);
		return $row;
	}

        function list_steps($utils, $exercise_id = 0, $steps_id = 0){

                $sql="SELECT steps_id, es.exercise_id, e.exercise, es.description, file_id, english, hindi, urdu, telugu, tamil, bengali FROM exercise_steps es, exercises e  WHERE es.exercise_id = e.exercise_id";
				$sql .= ($exercise_id) ? " AND es.exercise_id = $exercise_id" : "";
				$sql .= ($steps_id) ? " AND steps_id = $steps_id" : "";
                $utils->log("SQL: $sql", 'INFO', 'Exercises');
                $result=mysql_query($sql);
                $count=mysql_num_rows($result);

                $data = array();
                $data['count'] = $count;
                $temp_data = array();
				$exer_data = '';
                if($count){
					$incr = 0;
					while($row= mysql_fetch_assoc($result)){
						$incr = $incr + 1;
						$exer_data = $row['exercise'];
						$temp_data[$incr]['exercise_id'] = $row['exercise_id'];
						$temp_data[$incr]['exercise'] = $row['exercise'];
						$temp_data[$incr]['steps_id'] = $row['steps_id'];
						$temp_data[$incr]['description'] = $row['description'];
						$temp_data[$incr]['file_id'] = $row['file_id'];
						$temp_data[$incr]['english'] = $row['english'];
						$temp_data[$incr]['hindi'] = $row['hindi'];
						$temp_data[$incr]['urdu'] = $row['urdu'];
						$temp_data[$incr]['telugu'] = $row['telugu'];
						$temp_data[$incr]['tamil'] = $row['tamil'];
						$temp_data[$incr]['bengali'] = $row['bengali'];
					}
                }
                $data['table_data'] = $temp_data;
				$data['exer_data'] = $exer_data;
						return $data;
				}


        function add_steps($utils, $exercise_id, $description, $file_id, $english, $hindi, $urdu, $telugu, $tamil, $bengali){
                $sql="INSERT INTO exercise_steps (exercise_id, description, file_id, english, hindi, urdu, telugu, tamil, bengali, created_date, updated_date) VALUES ($exercise_id, '$description', '$file_id', '$english', '$hindi', '$urdu', '$telugu', '$tamil', '$bengali', now(), now()) ";
                $utils->log("SQL : $sql", "INFO", "Exercises");
                if(mysql_query($sql)){
                        return "Inserted successfully!!";
                }else{
                        return "Insertion Failed!!";
                }

        }

        function update_steps($utils, $exercise_id, $steps_id, $description, $save_path, $english, $hindi, $urdu, $telugu, $tamil, $bengali){

                $sql = "UPDATE exercise_steps SET ";
                $sql .= $exercise ? " exercise_id = '$exercise_id'," : "";
                $sql .= $description ? " description = '$description'," : "";
				$sql .= $save_path ? " img_loc = '$save_path'," : "";
                $sql .= $english ? " english = '$english'," : "";
                $sql .= $hindi ? " hindi = '$hindi'," : "";
                $sql .= $urdu ? " urdu = '$urdu'," : "";
                $sql .= $telugu ? " telugu = '$telugu'," : "";
                $sql .= $tamil ? " tamil = '$tamil'," : "";
                $sql .= $bengali ? " bengali = '$bengali'," : "";
                $sql .= ' updated_date = now()';
                $sql = rtrim($sql,',');
                $sql .= " WHERE exercise_id = $exercise_id AND steps_id = $steps_id";
                $utils->log("SQL : $sql", "INFO", "Exercises");

                if(mysql_query($sql)){
                        return "Updated successfully!!";
                }else{
                        return "Updation Failed!!";
                }
	}

        function delete_steps($utils, $exercise_id, $steps_id){

                $sql="DELETE FROM exercise_steps WHERE exercise_id = $exercise_id";
		$sql .= $steps_id ? " AND steps_id = $steps_id " : " ";
                $utils->log("SQL : $sql", "INFO", "Exercises");

                if(mysql_query($sql)){
                        return "Deleted successfully!!";
                }else{
                        return "Deletion Failed!!";
                }
        }
		
		
		function upload_img($utils, $filename,$uploadfile,$file_obj){
			$ext = explode('.',$filename); 
			$extsn = end($ext); 
			$uploadfile = '/xampp/htdocs/prabhu3482/uploads/steps'; 
			$sql = "INSERT INTO `therexpo_physio`.`storage_files` (
					`parent_file_id` ,
					`type` ,
					`path` ,
					`name` ,
					`extension` ,
					`size` ,
					`mimetype`
					)
					VALUES (
						NULL , 'normal', '{$uploadfile}', '{$filename}', '{$extsn}', '{$file_obj["upload_img"]["size"]}', '{$file_obj["upload_img"]["type"]}'
					)";
				$utils->log("SQL : $sql", "INFO", "Exercises");
				if(mysql_query($sql)){
                        $sql = "SELECT * FROM `storage_files`  ORDER BY `file_id` DESC";
						$utils->log("SQL : $sql", "INFO", "Exercises");
						$result = mysql_query($sql);
						$row =  mysql_fetch_assoc($result);
						return $row['file_id'];
                }else{
                        return "Insertion Failed!!";
                }
		
		}
		
		function gt_img_name($file_id){
			echo "hello".$file_id;
		}
		
		function set_keywords($utils, $keywords){
			$ids = array();
			foreach($keywords as $value){
				$sql = "INSERT INTO `therexpo_physio`.`keywords` (`keywords`) VALUES ('{$value}')";
				$utils->log("SQL : $sql", "INFO", "Exercises");
				if( mysql_query($sql)){
					$sql = "SELECT * FROM `keywords` ORDER BY `keyword_id` DESC";
					$utils->log("SQL : $sql", "INFO", "Exercises");
					$result = mysql_query($sql);
					$row =  mysql_fetch_assoc($result);
					$ids[] = $row['keywords'];
					
				}
			}
			return serialize($ids);			
		}
}

?>
