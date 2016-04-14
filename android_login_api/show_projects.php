<?php
define("DB_HOST", "127.0.0.1");
define("DB_USER", "user");
define("DB_PASSWORD", "1234");
define("DB_DATABASE", "enable_supplies_db");
 
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
 
$sql = "SELECT * FROM works_with";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
	array_push($result,
		array('workerid'=>$row[0],
		'companyid'=>$row[1]
	));
}
 //print_r(array_values($result));
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>