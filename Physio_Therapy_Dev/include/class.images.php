<?php

class images{

	function list_images($utils, $conditions,$bodyparts, $positions, $purpose, $equipment){

	    $sql="select exercise, img_loc from exercises e, exercise_steps s where e.exercise_id = s.exercise_id ";
		$sql .= ($conditions) ? " and condition_id = $conditions" : '';
		$sql .= ($bodyparts) ? " and bodyparts_id = $bodyparts" : '';
		$sql .= ($positions) ? " and positions_id = $positions" : '';
		$sql .= ($purpose) ? " and purpose_id = $purpose" : '';
		$sql .= ($equipment) ? " and equipment_id = $equipment" : '';
		$utils->log("SQL: $sql", 'INFO', 'Images');
        	$result=mysql_query($sql);
	        $count=mysql_num_rows($result);

		$data = '';
		if($count){
			while($row= mysql_fetch_assoc($result)){
				$data .= '<img src="uploads/steps/'.$row['img_loc'].'" alt="" style="position: relative;" width="125" height="50" class="ui-draggable ui-draggable-handle">';
			}
		}
		$data1  = ($data)? $data : '<p>Please select from select criteria!!</p>';
		return $data1;
	}

	function add_user($utils, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role){

		$sql="INSERT INTO users (user_name, password, email, phone, first_name, last_name, active, created_date, updated_date, role_id) VALUES ('$user_name', '$password', '$email', '$phone', '$first_name', '$last_name', $active, now(), now(), $role) ";
		$utils->log("SQL : $sql", "INFO", "USERS");

                if(mysql_query($sql)){
			return "Inserted successfully!!";
		}else{
			return "Insertion Failed!!";
		}
		
	}

	function update_user($utils, $user_id, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role){

		$sql = "UPDATE users SET ";
		$sql .= $user_name ? " user_name = '$user_name'," : "";
		$sql .= $password ? " password = '$password'," : "";
		$sql .= $email ? " email = '$email'," : "";
		$sql .= $phone ? " phone = '$phone'," : "";
		$sql .= $first_name ? " first_name = '$first_name'," : "";
		$sql .= $last_name ? " last_name = '$last_name'," : "";
		$sql .= (isset($active)) ? " active = $active," : "";
		$sql .= (isset($role)) ? " role_id = $role," : "";
		$sql .= ' updated_date = now()';
		$sql = rtrim($sql,',');
		$sql .= " WHERE user_id = $user_id";
                $utils->log("SQL : $sql", "INFO", "USERS");

                if(mysql_query($sql)){
                        return "Updated successfully!!";
                }else{
                        return "Updation Failed!!";
                }
	}

	function delete_user($utils, $user_id){

		$sql = "DELETE FROM users WHERE user_id = $user_id";
                $utils->log("SQL : $sql", "INFO", "USERS");

                if(mysql_query($sql)){
                        return "Deleted successfully!!";
                }else{
                        return "Deletion Failed!!";
                }


	}

	function user_info($utils, $user_id){
		$sql = "SELECT user_id, first_name, last_name, role_id from users where user_id = $user_id ";
                $utils->log("SQL : $sql", "INFO", "USERS");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
		
		if(count){
			$row= mysql_fetch_assoc($result);
			return $row;			
		}else{
			return 0;
		}
	}

        function conditions_dropdown($utils, $type){
                $sql = "SELECT cond_id, conditions, parent_id from conditions ";
                $utils->log("SQL : $sql", "INFO", "Images");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
		$temp = array();
                if($count){
			while($row= mysql_fetch_assoc($result)){
                        	$temp[$row['parent_id']][$row['cond_id']] = $row['conditions'];
                        }
		}
		$str = '';
		foreach($temp[0] as $parent_id => $p_cond) {
			$str .= $this->child_div_prepare($utils, $parent_id, $p_cond, $temp, $type);
		}
                return $str;

        }

	function child_div_prepare($utils, $parent_id, $p_cond, $temp, $type){

		//$str = '<li class="has-sub" onclick="image_select(\''.$type.'\', '.$parent_id.');" id="'.$type.'_'.$parent_id.'">'.$p_cond;
		//$str = '<li class="menu-item" ><a href="#">'.$p_cond.'</a></li>';

		$inside = '';
		if(isset($temp[$parent_id])){
	                foreach($temp[$parent_id] as $child_id => $c_cond){
				$inside .= $this->child_div_prepare($utils, $child_id, $c_cond, $temp, $type);
                	}
		}
		if($inside){
			$str = '<li class="menu-item menu-item-has-children" ><a href="#" >'.$p_cond.'</a>';
			$str .= '<ul class="childs evenChild childHide">'.$inside.'</ul>';
			$str .= '</li>';
		}else{
			
			$str = '<li class="menu-item" ><a href="#" onclick="image_select(\''.$type.'\', '.$parent_id.');" >'.$p_cond.'</a></li>';

		}
                //$str .= '</li>';

		return $str;
	}
	
	function child_div_prepare_eqp($utils, $parent_id, $p_cond, $temp, $type){

		//$str = '<li class="has-sub" onclick="image_select(\''.$type.'\', '.$parent_id.');" id="'.$type.'_'.$parent_id.'">'.$p_cond;
		//$str = '<li class="menu-item" ><a href="#">'.$p_cond.'</a></li>';

		$inside = '';
		
		
		if(isset($temp[$parent_id])){
					$class = 'oodChild';
	                foreach($temp[$parent_id] as $child_id => $c_cond){
						
						if($class == 'oodChild'){
							$class = 'evenChild';
						} else {
							$class = 'oodChild';
						}
						$inside .= $this->child_div_prepare_eqp($utils, $child_id, $c_cond, $temp, $type);
                	}
		}
		
		
		if($inside){
			$str = '<li><a href="#" >'.$p_cond.'</a>';
			$str .= '<ul class="childs '.$class.'">'.$inside.'</ul>';
			$str .= '</li>';
		}else{
			
			$str = '<li class="menu-item" ><a href="#" onclick="image_select(\''.$type.'\', '.$parent_id.');" >'.$p_cond.'</a></li>';

		}
                //$str .= '</li>';

		return $str;
	}

        function bodypart_dropdown($utils, $type){
                $sql = "select bodypart_id, bodypart, parent_id from bodyparts";
                $utils->log("SQL : $sql", "INFO", "Images");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['bodypart_id']] = $row['bodypart'];
                        }
                }
                $str = '';
                foreach($temp[0] as $parent_id => $p_cond) {
                        $str .= $this->child_div_prepare($utils, $parent_id, $p_cond, $temp, $type);
                }
                return $str;
        }

        function position_dropdown($utils, $type){
                $sql = "select position_id, position, parent_id from positions";
                $utils->log("SQL : $sql", "INFO", "Images");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['position_id']] = $row['position'];
                        }
                }
                $str = '';
                foreach($temp[0] as $parent_id => $p_cond) {
                        $str .= $this->child_div_prepare($utils, $parent_id, $p_cond, $temp, $type);
                }
                return $str;
        }

        function purpose_dropdown($utils, $type){
                $sql = "select purpose_id, purpose, parent_id from purpose";
                $utils->log("SQL : $sql", "INFO", "Images");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['purpose_id']] = $row['purpose'];
                        }
                }
                $str = '';
                foreach($temp[0] as $parent_id => $p_cond) {
                        $str .= $this->child_div_prepare($utils, $parent_id, $p_cond, $temp, $type);
                }
                return $str;
        }

        function equipment_dropdown($utils, $type){
                $sql = "select equipment_id, equipment, parent_id from equipment";
                $utils->log("SQL : $sql", "INFO", "Images");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['parent_id']][$row['equipment_id']] = $row['equipment'];
                        }
                }
                $str = '';
                foreach($temp[0] as $parent_id => $p_cond) {
                        $str .= $this->child_div_prepare_eqp($utils, $parent_id, $p_cond, $temp, $type);
                }
                return $str;
        }

}

?>
