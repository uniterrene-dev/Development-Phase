<?php

class patients{

	function list_patients($utils){

                $sql="SELECT patient_id, patient_name, disease, DOB, gender, mobile, email, address FROM patients";
                $utils->log("SQL: $sql", 'INFO', 'Patients');
                $result=mysql_query($sql);
                $count=mysql_num_rows($result);

                $data = array();
                $data['count'] = $count;
                $drop_down = array();
                if($count){
                        while($row= mysql_fetch_assoc($result)){
                                $drop_down[$row['patient_id']]['patient_id'] = $row['patient_id'];
                                $drop_down[$row['patient_id']]['name'] = $row['patient_name'];
                                $drop_down[$row['patient_id']]['disease'] = $row['disease'];
                                $drop_down[$row['patient_id']]['DOB'] = $row['DOB'];
                                $drop_down[$row['patient_id']]['gender'] = $row['gender'];
                                $drop_down[$row['patient_id']]['mobile'] = $row['mobile'];
                                $drop_down[$row['patient_id']]['email'] = $row['email'];
                                $drop_down[$row['patient_id']]['address'] = $row['address'];
                        }
                }
                $data['drop_down'] = $drop_down;
                return $data;

	}

	function add_patient($utils, $name, $disease, $email, $phone, $dob, $gender, $address, $clinic_id){

		$sql="INSERT INTO patients (patient_name, disease, DOB, gender, mobile, email, address, clinic_id, created_date) VALUES ('$name', '$disease', '$dob', '$gender', '$phone', '$email', '$address', $clinic_id, now()) ";
		$utils->log("SQL : $sql", "INFO", "Patients");

                if(mysql_query($sql)){
			return "Inserted successfully!!";
		}else{
			return "Insertion Failed!!";
		}
		
	}

	function update_patient($utils, $patient_id, $name, $disease, $email, $phone, $dob, $gender, $address){

		$sql = "UPDATE patients SET ";
		$sql .= $name ? " patient_name = '$name'," : "";
		$sql .= $disease ? " disease = '$disease'," : "";
		$sql .= $email ? " email = '$email'," : "";
		$sql .= $phone ? " mobile = '$phone'," : "";
		$sql .= $dob ? " DOB = '$dob'," : "";
		$sql .= $gender ? " gender = '$gender'," : "";
		$sql .= $address ? " address = '$address'," : "";
		$sql .= ' updated_date = now()';
		$sql = rtrim($sql,',');
		$sql .= " WHERE patient_id = $patient_id";
                $utils->log("SQL : $sql", "INFO", "Patients");

                if(mysql_query($sql)){
                        return "Updated successfully!!";
                }else{
                        return "Updation Failed!!";
                }
	}

	function delete_patient($utils, $patient_id){

		$sql = "DELETE FROM patients WHERE patient_id = $patient_id";
                $utils->log("SQL : $sql", "INFO", "Patients");

                if(mysql_query($sql)){
                        return "Deleted successfully!!";
                }else{
                        return "Deletion Failed!!";
                }


	}

	function patient_info($utils, $user_id){
		$sql = "SELECT user_id, first_name, last_name, u.role_id, r.role_name from users u, role_master r where u.role_id = r.role_id and user_id = $user_id ";
                $utils->log("SQL : $sql", "INFO", "Patients");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
		
		if(count){
			$row= mysql_fetch_assoc($result);
			return $row;			
		}else{
			return 0;
		}
	}

        function patient_dropdown($utils){
                $sql = "SELECT user_id, CONCAT(first_name, ' ', last_name) AS name from users ";
                $utils->log("SQL : $sql", "INFO", "Patients");

                $result=mysql_query($sql);
                $count=mysql_num_rows($result);
		$temp = array();
                if(count){
			while($row= mysql_fetch_assoc($result)){
                        	$temp[$row['user_id']] = $row['name'];
                        }
		}
                return $temp;
        }

}

?>
