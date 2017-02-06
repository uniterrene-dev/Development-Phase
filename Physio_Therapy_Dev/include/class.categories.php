<?php

class categories{

	function list_categories($utils){

	       
	}

	function add_category($utils,$params=array()){
		switch ($params['main_category']) {
			case 'conditions':
			$sql= "INSERT INTO `therexpo_physio`.`conditions` (`conditions`,`description`,`parent_id`)
			VALUES ('{$params['category_name']}','{$params['description']}','{$params['parent']}')";
			break;
			case 'positions':
			$sql= "INSERT INTO `therexpo_physio`.`positions`";
			$sql= "INSERT INTO `therexpo_physio`.`positions` (`position`,`description`,`parent_id`)
			VALUES ('{$params['category_name']}','{$params['description']}','{$params['parent']}')";
			break;
			case 'bodyparts':
			$sql= "INSERT INTO `therexpo_physio`.`bodyparts` (`bodypart`,`description`,`parent_id`,`type`)
			VALUES ('{$params['category_name']}','{$params['description']}','{$params['parent']}','')";		
			break;	
			case 'purpose':
			$sql= "INSERT INTO `therexpo_physio`.`purpose` (`purpose`,`description`,`parent_id`)
			VALUES ('{$params['category_name']}','{$params['description']}','{$params['parent']}')";		
			break;	
			case 'equipment':
			$sql= "INSERT INTO `therexpo_physio`.`equipment` (`equipment`,`description`,`parent_id`)
			VALUES ('{$params['category_name']}','{$params['description']}','{$params['parent']}')";		
			break;	
			
		}
		$utils->log("SQL : $sql", "INFO", "Exercises");
		if(mysql_query($sql)){
			return "Inserted successfully!!";
		}else{
			return "Insertion Failed!!";
		}
	}
	
	function getchild($utils,$params=array()){
		$selectOption ='<option value="0" >Select One</option>';
		switch($params['main']){
			case 'conditions':
				$sql = "SELECT * FROM `{$params['main']}`";
				$utils->log("SQL : $sql", "INFO", "{$params['main']}");
				$result = mysql_query($sql);
				if(mysql_num_rows($result) > 0){
					$selectOption ='<option value="0" >Select conditions</option>';
					while($row =  mysql_fetch_assoc($result)){
						$selectOption .= "<option value='".$row['cond_id']."'>".$row['conditions']."</option>";
					}					
				}
			break;	
			case 'positions':
				$sql = "SELECT * FROM `{$params['main']}`";
				$utils->log("SQL : $sql", "INFO", "{$params['main']}");
				$result = mysql_query($sql);
				if(mysql_num_rows($result) > 0){
					$selectOption ='<option value="0" >Select positions</option>';
					while($row =  mysql_fetch_assoc($result)){
						$selectOption .= "<option value='".$row['position_id']."'>".$row['position']."</option>";
					}					
				}
			break;
			case 'bodyparts':
				$sql = "SELECT * FROM `{$params['main']}`";
				$utils->log("SQL : $sql", "INFO", "{$params['main']}");
				$result = mysql_query($sql);
				if(mysql_num_rows($result) > 0){
					$selectOption ='<option value="0" >Select bodyparts</option>';
					while($row =  mysql_fetch_assoc($result)){
						$selectOption .= "<option value='".$row['bodypart_id']."'>".$row['bodypart']."</option>";
					}					
				}	
			break;	
				case 'purpose':
				$sql = "SELECT * FROM `{$params['main']}`";
				$utils->log("SQL : $sql", "INFO", "{$params['main']}");
				$result = mysql_query($sql);
				if(mysql_num_rows($result) > 0){
					$selectOption ='<option value="0" >Select purpose</option>';
					while($row =  mysql_fetch_assoc($result)){
						$selectOption .= "<option value='".$row['purpose_id']."'>".$row['purpose']."</option>";
					}					
				}
			break;	
			case 'equipment':
				$sql = "SELECT * FROM `{$params['main']}`";
				$utils->log("SQL : $sql", "INFO", "{$params['main']}");
				$result = mysql_query($sql);
				if(mysql_num_rows($result) > 0){
					$selectOption ='<option value="0" >Select equipment</option>';
					while($row =  mysql_fetch_assoc($result)){
						$selectOption .= "<option value='".$row['equipment_id']."'>".$row['equipment']."</option>";
					}					
				}		
			break;	
		}
		
		return $selectOption;
		
	}
}

?>
