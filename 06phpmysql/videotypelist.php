<?php 
header("content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','')//连接数据库
         or die('数据库无法连接');

        mysql_set_charset('utf8');
        @mysql_select_db('Neu-video',$conn)//选择数据库
         or die('数据库不存在');

         $sql = 'select * from videotype'; 
         $result = mysql_query($sql,$conn);//执行
/*         while($result && ($row = mysql_fetch_assoc($result))!==FALSE){
           echo $row['uname'].'<br>';
         }*/

        $arrs=fetch_array($result);
        //var_dump($users);
        echo '<table border="1">';
        echo '<caption>视频类型</caption>';
        echo '<tr><th>序号</th><th>视频类型</th></tr>';
         foreach ($arrs as $index=>$one) {
        	echo '<tr>';
        	echo '<td>'.($index+1).'</td>';
        	echo '<td>'.$one['typename'].'</td>';
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