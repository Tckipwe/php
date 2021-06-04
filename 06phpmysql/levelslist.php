<?php 
header("content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','')//连接数据库
         or die('数据库无法连接');

        mysql_set_charset('utf8');
        @mysql_select_db('Neu-video',$conn)//选择数据库
         or die('数据库不存在');

         $sql = 'select * from levels'; 
         $result = mysql_query($sql,$conn);//执行
/*         while($result && ($row = mysql_fetch_assoc($result))!==FALSE){
           echo $row['uname'].'<br>';
         }*/

        $arrs=fetch_array($result);
        //var_dump($users);
        echo '<table border="1">';
        echo '<caption>视频评分信息</caption>';
        echo '<tr><th>级别id</th><th>视频id</th><th>打分用户</th><th>评分</th></tr>';
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