<?php
require_once('system/dbConn.php');
header("Content-type:text/html;charset=utf-8");
$DBConnect = connect();
$SQLstring = "select * from users";
$QueryResult = mysql_query($SQLstring,$DBConnect);


$arrs = fetch_array($QueryResult);
//msql_free_result($QueryResult);
echo '<table>';
echo '<tr><th>username</th><th>gender</th><th>hobby</th></tr>';
foreach($arrs as $one){
	echo '<tr>';
	echo '<td>'.$one['uname'].'</td>';
	echo '<td>'.$one['gender'].'</td>';
	echo '<td>'.$one['hobby'].'</td>';
	echo '</tr>';
}
echo '</table>';
@mysql_close($DBConnect);

?>

