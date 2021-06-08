<?php 
$data=array(
	'uname'=>'xuexuan',
	'gender'=>'male'
	);
$result = add('users',$data);
if($result){header('location:listuser.php');}
else{header('location:test2.php');}

function add($tbl,$data)
{
	$keys = implode(',',array_keys($data));
	$values = implode("','", array_values($data));
	$sql = "insert into $tbl ($keys) values($values)";
	$result = mysql_query($sql);
	if($result){
		return mysql_insert_id();
	}
	else{
		return 0;
	}
}
 ?>
