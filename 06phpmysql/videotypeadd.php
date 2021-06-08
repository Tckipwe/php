<?php 
header("content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','')//连接数据库
         or die('数据库无法连接');

        mysql_set_charset('utf8');
        @mysql_select_db('Neu-video',$conn)//选择数据库
         or die('数据库不存在');

//require_once('system/dbConn.php');
//$DBConnect = connect();
$typename = $_POST['typename'];

$sql = "insert into videotype(typename)
        values('$typename')";
/*echo $sql;
exit();
*/$result = mysql_query($sql);
if($result===FALSE){
	echo '失败';
}
else{
	echo '数据插入成功';
}    
 ?>