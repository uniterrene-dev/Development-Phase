<?php
class homes{
function home_conditions_dropdown($utils, $type){
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
$lable = 0;
foreach($temp[0] as $parent_id => $p_cond) {
	$str .= $this->home_child_div_prepare($utils, $parent_id, $p_cond, $temp, $type,$lable);
}
		return $str;

}
function home_bodypart_dropdown($utils, $type){
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
		$lable = 0;
		foreach($temp[0] as $parent_id => $p_cond) {
				$str .= $this->home_child_div_prepare($utils, $parent_id, $p_cond, $temp, $type,$lable);
		}
		return $str;
}
function home_position_dropdown($utils, $type){
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
		$lable = 0;
		foreach($temp[0] as $parent_id => $p_cond) {
				$str .= $this->home_child_div_prepare($utils, $parent_id, $p_cond, $temp, $type,$lable);
		}
		return $str;
}
function home_purpose_dropdown($utils, $type){
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
		$lable = 0;
		$str = '';
		foreach($temp[0] as $parent_id => $p_cond) {
				$str .= $this->home_child_div_prepare($utils, $parent_id, $p_cond, $temp, $type,$lable);
		}
		return $str;
}
function home_equipment_dropdown($utils, $type){
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
		$lable = 0;
		foreach($temp[0] as $parent_id => $p_cond) {
				$str .= $this->home_child_div_prepare($utils, $parent_id, $p_cond, $temp, $type,$lable);
		}
		return $str;
}
function home_child_div_prepare($utils, $parent_id, $p_cond, $temp, $type,$lable){
$iclab=1;
//$str = '<li class="has-sub" onclick="image_select(\''.$type.'\', '.$parent_id.');" id="'.$type.'_'.$parent_id.'">'.$p_cond;
//$str = '<li class="menu-item" ><a href="#">'.$p_cond.'</a></li>';
$lable++;
$inside = '';

if(isset($temp[$parent_id])){
			foreach($temp[$parent_id] as $child_id => $c_cond){
				
		$inside .= $this->home_child_div_prepare($utils, $child_id, $c_cond, $temp, $type,$lable);
		
			}
				
}
$ic=rand(1, 9);

$more='';
	if($lable==1){
		$icon='';	
	}else{
		$icon='<img src="static/home/images/ic_'.$ic.'.png" alt="">';
	}
			if($type=='bodyparts'){
			$cssclass='child mainChild mainChild_hide';
				if($lable>=1){
				$cssclass='childs oodChild childHide';
				}
				if($lable>=2){
				$cssclass='childs evenChild childHide';
				}
				if($lable>2){
				$more=' class="More"';
				}
			}
			if($type=='conditions'){
			$cssclass='child mainChild mainChild_hide';
				if($lable>=1){
				$cssclass='childs evenChild childHide';
				}		
			}
			if($type=='positions'){
			$cssclass='child mainChild mainChild_hide';
			}
			if($type=='purpose'){
			$cssclass='child mainChild mainChild_hide';
			if($lable>=1){
				$cssclass='childs oodChild childHide';
				}
			}
			if($type=='equipment'){
			$cssclass='child mainChild mainChild_hide';
			
			if($lable>=1){
				$cssclass='childs oodChild';
				$iclab=2;
				}
			}
if($inside){	
		if($type=='bodyparts'){
			if($lable>=3){
				$iconr='';
			}else{
				$iconr='<span class="fa fa-caret-right"></span>';
			}
		}elseif($type=='equipment'){
			$iconr='<span class="fa fa-caret-down"></span>';
		}else{
			$iconr='<span class="fa fa-caret-right"></span>';
		}
		$str = '<li'.$more.'><a href="#" >'.$icon.$p_cond.$iconr.'</a>';
	//$str .= '<ul class="sub-menu">'.$inside.'</ul>';
	//$str .= '<ul class="'.$cssclass.'">'.$lable.'-'.$countlable.$inside.'</ul>';
	
	
$str .= '<ul class="'.$cssclass.'">'.$inside.'</ul>';
	if($type=='bodyparts'){
		if($lable>=3){
			$str .= '<button class="moreBtn">More</button>';
		}
	}
	$str .= '</li>';
}else{
		//$countlable++;
	$str = '<li'.$more.'><a href="#" onclick="image_select(\''.$type.'\', '.$parent_id.');" >'.$icon.$p_cond.'</a></li>';
}
		//$str .= '</li>';

return $str;
}
	
}

?>
