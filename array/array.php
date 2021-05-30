<?php 
header("content-type:text/html;charset=utf-8");
//$schools=array();
$schools = array('大连东软信息学院','大连理工大学','东北财经大学');

$schools[3]='大连海洋大学';
$schools[2]='大连工业大学';
$schools[]='东北财经大学';
//var_dump($schools);
//便利指标数组
for ($i=0; $i < count($schools); $i++) { 
	echo '<br>';
}
	echo $i+1;
	echo $schools[$i];

foreach ($schools as $one) {
	echo $one;
	echo '<br>';
}

foreach ($schools as $index => $one) {
	echo $index+1;
}
	echo ''.$one.'<br>';
	

    //关联数组
	/*$neusoft = array('xxdm' => 1111,'xxmc'=> '大连东软信息学院','dlwz'=>'大连市软件园路8号','bmlb'=>array('计算机系','数字艺术系','电子工程系') );*/

	/*$neusoft = array('xxdm' => 1111,'xxmc'=> '大连东软信息学院','dlwz'=>'大连市软件园路8号');
	$dlut= array('xxdm' => 1112,'xxmc'=> '大连理工大学','dlwz'=>'大连市软件园路10号');
	var_dump($neusoft);
	var_dump($dlut);
	echo '学校名称：'.$dlut['xxmc'];
*/


	/*$universities =array($neusoft,$dlut);

	$unis[]=$neusoft;
	$unis[]=$dlut;
	var_dump($unis);
	var_dump($universities);
	foreach ($unis as $one) {
		echo $one['xxdm'].$one['xxmc'].$one['dlwz'];
		echo '<br>';
	}*/


	/*$unis2 = array('neusoft'=>$neusoft,'dlut'=>$dlut);
	var_dump($unis2);
	foreach ($unis2 as $key => $one) {
		echo $one['xxdm'].$one['xxmc'].$one['dlwz'];
		echo '<br>';
	}

	echo $unis2['neusoft']['dlwz'];
	*/

	?>