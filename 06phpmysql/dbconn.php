<?php 
header("content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','')//连接数据库
         or die('数据库无法连接');

        mysql_set_charset('utf8');
        @mysql_select_db('Neu-video',$conn)
         or die('数据库不存在');

         $sql = 'select * from users'; 
         $result = mysql_query($sql,$conn);
/*         while($result && ($row = mysql_fetch_assoc($result))!==FALSE){
           echo $row['uname'].'<br>';
         }*/

        $users=fetch_array($result);
        //var_dump($users);
        echo '<table border="1">';
        echo '<tr><th>用户编号</th><th>用户名</th><th>性别</th><th>生日</th><th>爱好</th><th>学历</th><th>自我介绍</th><th>头像</th><th>操作</th></tr>';
         foreach ($users as $one) {
        	echo '<tr>';
        	echo '<td>'.$one['uid'].'</td>';
        	echo '<td>'.$one['uname'].'</td>';
        	echo '<td>'.$one['gender'].'</td>';
        	echo '<td>'.$one['birthdate'].'</td>';
        	echo '<td>'.$one['hobby'].'</td>';
        	echo '<td>'.$one['degree'].'</td>';
        	echo '<td>'.$one['intro'].'</td>';
        	echo '<td>'.$one['pic'].'</td>';
        	echo '</tr>';
        }


        echo '</table>';


         function fetch_array($Results){
         	$arrs = array();
         while($Results && ($row = mysql_fetch_assoc($Results))!==FALSE){
         	$arrs[]=$row;
         }
         	return $arrs;
         }








 ?>