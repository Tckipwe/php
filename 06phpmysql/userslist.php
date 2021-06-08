<?php 
header("content-type:text/html;charset=utf-8");
$conn = @mysql_connect('localhost','root','')//连接数据库
         or die('数据库无法连接');

        mysql_set_charset('utf8');
        @mysql_select_db('Neu-video',$conn)//选择数据库
         or die('数据库不存在');

         $sql = 'select * from users'; 
         $result = mysql_query($sql,$conn);//执行
/*         while($result && ($row = mysql_fetch_assoc($result))!==FALSE){
           echo $row['uname'].'<br>';
         }*/

        $arrs=fetch_array($result);
        //var_dump($users);
        echo '<table border="1">';
        echo '<caption>用户管理</caption>';
        echo '<tr><th>序号</th><th>用户名</th><th>密码</th><th>性别</th><th>生日</th><th>爱好</th><th>学历</th><th>自我介绍</th></tr>';
         foreach ($arrs as $index=>$one) {
        	echo '<tr>';
        	echo '<td>'.($index+1).'</td>';
        	echo '<td>'.$one['uname'].'</td>';
            echo '<td>'.$one['password'].'</td>';
        	if($one['gender']==1){$sex='男';}
            else{$sex='女';}
        	echo '<td>'.$sex.'</td>';
            echo '<td>'.$one['birthdate'].'</td>';
        	echo '<td>'.$one['hobby'].'</td>';
            if($one['degree']==1){$degree='本科';}
            if($one['degree']==2){$degree='研究生';}
            else{$degree='大专';}
            echo '<td>'.$degree.'</td>';
            echo '<td>'.$one['intro'].'</td>';

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