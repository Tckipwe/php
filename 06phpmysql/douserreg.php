<?php
require_once('dbConn.php');
header("Content-type:text/html;charset=utf-8");
$DBConnect = connect();

$data['uname'] = $_POST['uname'];
$data['password'] = md5($_POST['password']);
$data['hobby'] = implode(',', $_POST['hobby']);
$data['gender'] = $_POST['gender'];
$data['degree'] = $_POST['degree'];
$data['intro'] = $_POST['intro'];
$data['birthdate'] = $_POST['birthdate'];
$result = add('users',$data);
if($result){
	header('location:userslist.php');
}
else{
	echo '插入失败！';
	/*echo '<script>alert("插入失败！");location.href="'.$_SERVER['HTTP_REFERER'].'"</script>';*/

}
/*$uname = trim($_POST['uname']);
$gender = $_POST['gender'];
$password = md5($_POST['password']);
$hobby = implode(',', $_POST['hobby']);
$intro = htmlspecialchars($_POST['intro']);
$sql="insert into users(uname,gender,password,hobby) values('$uname','$gender','$password','$hobby')";
//echo $sql;
$result = mysql_query($sql,$DBConnect);
if($result===FALSE){
	die('mysql query error'.mysql_error());
}
else{
	echo 'successful!';
}*/
//$data = $_POST;

?>