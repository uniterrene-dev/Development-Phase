<?php

class clinics{

	function list_clinincs($utils, $next, $rows){

	        $sql="SELECT clinic_id, clinic_name, clinic_address, phone, clinic_site, clinic_email, clinic_logo_path FROM clinics ORDER BY clinic_id LIMIT $rows OFFSET $next";
		$utils->log("SQL: $sql", 'INFO', 'Clinics');
        	$result=mysql_query($sql);
	        $count=mysql_num_rows($result);

		$data = array();
		$data['count'] = $count;
		$cols_data['clinic_id'] = 'Clinic ID';
		$cols_data['clinic_name'] = 'Clinic Name';
		$cols_data['clinic_email'] = 'Email ID';
		$cols_data['phone'] = 'Phone';
		$cols_data['clinic_address'] = 'Address' ;
		$cols_data['clinic_site'] = 'Site';
		$cols_data['clinic_logo_path'] = 'Logo';
		
		$data['cols'] = $cols_data;
		$table_data = array();
		if($count){
			while($row= mysql_fetch_assoc($result)){
				$temp = array();
				foreach ($cols_data as $key => $value){
					$temp[$key] = $row[$key];
				}
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

	function add_clinic($utils, $name, $email, $phone, $address, $site, $logo_path){

		$sql="INSERT INTO clinics (clinic_name, clinic_address, phone, clinic_site, clinic_email, clinic_logo_path, created_date, updated_date) VALUES ('$name', '$address', '$phone', '$site', '$email', '$logo_path', now(), now()) ";
		$utils->log("SQL : $sql", "INFO", "Clinics");

                if(mysql_query($sql)){
			return "Inserted successfully!!";
		}else{
			return "Insertion Failed!!";
		}
		
	}

	function update_clinic($utils, $clinic_id, $name, $email, $phone, $address, $site, $logo_path){

		$sql = "UPDATE clinics SET ";
		$sql .= $name ? " clinic_name = '$name'," : "";
		$sql .= $email ? " clinic_email = '$email'," : "";
		$sql .= $phone ? " phone = '$phone'," : "";
		$sql .= $address ? " clinic_address = '$address'," : "";
		$sql .= $site ? " clinic_site = '$site'," : "";
		$sql .= $logo_path ? " clinic_logo_path = '$logo_path'," : "";
		$sql .= ' updated_date = now()';
		$sql = rtrim($sql,',');
		$sql .= " WHERE clinic_id = $clinic_id";
                $utils->log("SQL : $sql", "INFO", "Clinics");

                if(mysql_query($sql)){
                        return "Updated successfully!!";
                }else{
                        return "Updation Failed!!";
                }
	}

	function delete_user($utils, $clinic_id){

		$sql = "DELETE FROM clinics WHERE clinic_id = $clinic_id";
                $utils->log("SQL : $sql", "INFO", "Clinics");

                if(mysql_query($sql)){
                        return "Deleted successfully!!";
                }else{
                        return "Deletion Failed!!";
                }


	}
}

?>
