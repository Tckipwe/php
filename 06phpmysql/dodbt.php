
<?php 
require_once('system2_connect.php');
header("Content-type: textml; charset=utf-8");
$DBConnect=connect();
$id = $_GET['uid'];
$sql ="delete from users where id =$id";
$result = mysql_query($sql);
if ($result) {


}
else
{}


 ?>     




























