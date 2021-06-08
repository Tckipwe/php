<?php 
    header("content-type:text/html;charset=utf-8");

	$xx = array('sname' => '天水市小学','saddr'=> '天水市第一路');
	$cz = array('sname' => '天水市初中','saddr'=> '天水市第二路');


	$unis[]=$xx;
	$unis[]=$cz;

	foreach ($unis as $one) {
		echo $one['sname'].$one['saddr'];
		echo '<br>';
	}

$xx = array(
     array('sname' => '天水市小学','saddr'=> '天水市第一路');
	 array('sname' => '天水市初中','saddr'=> '天水市第二路');
	 );

	
	foreach ($xx as $one) {
		echo $one['sname'].$one['saddr'];
		echo '<br>';
	}

 ?>