<?php 
    header("content-type:text/html;charset=utf-8");

   /* $neusoft = array('xxdm' => 1111,'xxmc'=> '大连东软信息学院','dlwz'=>'大连市软件园路8号','bmlb'=>array('计算机系','数字艺术系','电子工程系') );
*/
	$neusoft = array('xxdm' => 1111,'xxmc'=> '大连东软信息学院','dlwz'=>'大连市软件园路8号');
	$dlut= array('xxdm' => 1112,'xxmc'=> '大连理工大学','dlwz'=>'大连市软件园路10号');
	var_dump($neusoft);
	var_dump($dlut);
	echo '学校名称：'.$dlut['xxmc'];



	$universities =array($neusoft,$dlut);

	$unis[]=$neusoft;
	$unis[]=$dlut;
	var_dump($unis);
	var_dump($universities);
	foreach ($unis as $one) {
		echo $one['xxdm'].$one['xxmc'].$one['dlwz'];
		echo '<br>';
	}


	$unis2 = array('neusoft'=>$neusoft,'dlut'=>$dlut);
	var_dump($unis2);
	foreach ($unis2 as $key => $one) {
		echo $one['xxdm'].$one['xxmc'].$one['dlwz'];
		echo '<br>';
	}

	echo $unis2['neusoft']['dlwz'];
	

 ?>