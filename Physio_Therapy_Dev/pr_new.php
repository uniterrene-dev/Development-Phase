<?php

header('Content-type: text/html; charset=UTF-8');
$host_name = 'localhost';
$user_name = 'myhealth';
$pass_word = 'myhealth';
$database_name = 'myhealth';


$conn = mysql_connect($host_name, $user_name, $pass_word) or die ('Error connecting to mysql');
mysql_select_db($database_name);
//mysql_set_charset('utf8',$conn);

$sql="select exercise, english, hindi, urdu, telugu, tamil, bengali from exercises e, exercise_steps s where e.exercise_id = s.exercise_id limit 5";
//print $sql;
mysql_query("set names utf8");
$result=mysql_query($sql);
$count=mysql_num_rows($result);

$str = '';
while($row= mysql_fetch_assoc($result)){
$str .= '<tr>';
	$str .= '<td>'. $row['exercise'].'</td>';
	$str .= '<td>'. $row['english'].'</td>';
	$str .= '<td>'. $row['hindi'].'</td>';
	$str .= '<td>'. $row['urdu'].'</td>';
	$str .= '<td>'. $row['telugu'].'</td>';
	$str .= '<td>'. $row['tamil'].'</td>';
	$str .= '<td>'. $row['bengali'].'</td>';
$str .= '</tr>';
}


?>

<html>
  <head>

    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="UTF-8">
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/font-awesome.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <script src="static/js/bootstrap.min.new.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.3.js"></script>

  </head>
<body>

<table id="example" name="example" class="display" cellspacing="0" width="100%">
  <thead>
    <tr> <th class="header">Exercise</th> <th class="header"> English</th> <th class="header">Hindi</th> <th class="header">Urdu</th><th class="header">Telugu</th><th class="header">Tamil</th><th class="header">Bengali</th></tr> 
  </thead>
  </thead>
  <tbody>
<?php echo $str ?>
  </tbody>
</table>

</div>  
</body>
</html>
