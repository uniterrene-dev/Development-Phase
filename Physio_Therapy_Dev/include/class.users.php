<?php

class users{

	function list_users($utils, $next, $rows){

	        $sql="SELECT user_id, user_name, active, email, U.phone, first_name, last_name, R.role_name, C.clinic_name, U.role_id, U.clinic_id FROM users U LEFT OUTER JOIN role_master R ON ( U.role_id = R.role_id ) LEFT OUTER JOIN clinics C ON(U.clinic_id = C.clinic_id) ORDER BY user_id LIMIT $rows OFFSET $next";
		$utils->log("SQL: $sql", 'INFO', 'USERS');
        	$result=mysql_query($sql);
	        $count=mysql_num_rows($result);

		$data = array();
		$data['count'] = $count;
		$cols_data['user_id'] = 'User ID';
		$cols_data['user_name'] = 'User Name';
		$cols_data['email'] = 'Email';
		$cols_data['phone'] = 'Phone' ;
		$cols_data['first_name'] = 'First Name';
		$cols_data['last_name'] = 'Last Name';
		$cols_data['role_name'] = 'Role';
		$cols_data['clinic_name'] = 'Clinic Name';
		$cols_data['active'] = 'Status';
		
		$data['cols'] = $cols_data;
		$table_data = array();
		if($count){
			while($row= mysql_fetch_assoc($result)){
				$temp = array();
				foreach ($cols_data as $key => $value){
					$temp[$key] = $row[$key];
				}
				$temp['role_id'] = $row['role_id'];
				$temp['clinic_id'] = $row['clinic_id'];
				array_push($table_data, $temp);
			}
		}
		if(($next + $count) >= ($next + $rows)){
			$data['next'] = $next + $rows;
			$data['prev'] = $next ;
		}else if(($next + $count) < ($next + $rows)){
			$data['prev'] = $next ;	
		}
		$data['page_rows'] = $rows;
		$data['data'] = $table_data;
		return $data;
	}

	function add_user($utils, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role, $clinic){

		$sql="INSERT INTO users (user_name, password, email, phone, first_name, last_name, active, created_date, updated_date, role_id, clinic_id) VALUES ('$user_name', '$password', '$email', '$phone', '$first_name', '$last_name', $active, now(), now(), $role, $clinic) ";
		$utils->log("SQL : $sql", "INFO", "USERS");

                if(mysql_query($sql)){
			return "Inserted successfully!!";
		}else{
			return "Insertion Failed!!";
		}
		
	}

	function update_user($utils, $user_id, $user_name, $password, $email, $phone, $first_name, $last_name, $active, $role, $clinic){

		$sql = "UPDATE users SET ";
		$sql .= $user_name ? " user_name = '$user_name'," : "";
		$sql .= $password ? " password = '$password'," : "";
		$sql .= $email ? " email = '$email'," : "";
		$sql .= $phone ? " phone = '$phone'," : "";
		$sql .= $first_name ? " first_name = '$first_name'," : "";
		$sql .= $last_name ? " last_name = '$last_name'," : "";
		$sql .= (isset($active)) ? " active = $active," : "";
		$sql .= (isset($role)) ? " role_id = $role," : "";
		$sql .= (isset($clinic)) ? " clinic_id = $clinic," : "";
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
		$sql = "SELECT user_id, first_name, last_name, u.role_id, r.role_name from users u, role_master r where u.role_id = r.role_id and user_id = $user_id ";
                $utils->log("SQL : $sql", "INFO", "USERS");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
		
		if($count){
			$row= mysql_fetch_assoc($result);
			return $row;			
		}else{
			return 0;
		}
	}

        function user_dropdown($utils){
                $sql = "SELECT user_id, CONCAT(first_name, ' ', last_name) AS name from users ";
                $utils->log("SQL : $sql", "INFO", "USERS");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
		$temp = array();
                if($count){
			while($row= mysql_fetch_assoc($result)){
                        	$temp[$row['user_id']] = $row['name'];
                        }
		}
                return $temp;
        }

        function clinic_info($utils){
                $sql = "SELECT clinic_id, clinic_name from clinics ";
                $utils->log("SQL : $sql", "INFO", "USERS");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
                $temp = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $temp[$row['clinic_id']] = $row['clinic_name'];
                        }
                }
                return $temp;
        }


}

?>
