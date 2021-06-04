<?php 
header("content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','')//连接数据库
         or die('数据库无法连接');

        mysql_set_charset('utf8');
        @mysql_select_db('Neu-video',$conn)//选择数据库
         or die('数据库不存在');

         $sql = 'select comments.* from comments join users on comments.uid=users.uid join videos on comments.vid=videos.vid';

         $result = mysql_query($sql,$conn);//执行
/*         while($result && ($row = mysql_fetch_assoc($result))!==FALSE){
           echo $row['uname'].'<br>';
         }*/

        $arrs=fetch_array($result);
        //var_dump($users);
        echo '<table border="1">';
        echo '<caption>评论信息</caption>';
        echo '<tr><th>评论id</th><th>评论内容</th><th>评论日期</th><th>评论用户</th><th>评论视频</th></tr>';
         foreach ($arrs as $index=>$one) {
        	echo '<tr>';
        	echo '<td>'.($index+1).'</td>';
        	echo '<td>'.$one['content'].'</td>';
        	echo '<td>'.$one['cdate'].'</td>';
        	echo '<td>'.$one['uid'].'</td>';
        	echo '<td>'.$one['vid'].'</td>';

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