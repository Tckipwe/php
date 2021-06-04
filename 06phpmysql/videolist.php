<?php 
header("content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','')//连接数据库
         or die('数据库无法连接');

        mysql_set_charset('utf8');
        @mysql_select_db('Neu-video',$conn)
         or die('数据库不存在');

         $sql = 'select t1.*,t2.typename from videos t1 left join videotype t2 on t1.tid=t2.tid'; 
         $result = mysql_query($sql,$conn);
/*         while($result && ($row = mysql_fetch_assoc($result))!==FALSE){
           echo $row['uname'].'<br>';
         }*/

        $users=fetch_array($result);
        //var_dump($users);
        echo '<table border="1">';
        echo '<caption>视频管理</caption>';
        echo '<tr><th>序号</th><th>视频名称</th><th>视频类别</th><th>点击量</th></tr>';
         foreach ($users as $index=>$one) {
        	echo '<tr>';
            echo '<td>'.($index+1).'</td>';
        	echo '<td>'.$one['videoname'].'</td>';
        	echo '<td>'.$one['typename'].'</td>';
        	echo '<td>'.$one['hittimes'].'</td>';
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