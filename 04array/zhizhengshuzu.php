<?php 
header("content-type:text/html;charset=utf-8");
$schools = array('大连东软信息学院','大连理工大学','东北财经大学');

$schools[3]='大连海洋大学';
$schools[2]='大连工业大学';
$schools[]='东北财经大学';
//var_dump($schools);
//遍历指针数组
for ($i=0; $i < count($schools); $i++) { 
	echo '<li>'.$schools[$i].'</li>';
}
	echo '</ul>';


foreach ($schools as $one) {
	echo $one;
	echo '<br>';
}


 
foreach ($schools as $index => $one) {
	echo $index+1;
}
	echo ''.$one.'<br>';
 ?>