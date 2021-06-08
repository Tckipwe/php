<?php
function connect(){
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PWD', '');
  define('DB_CHARSET', 'UTF8');
  define('DB_DBNAME', 'neu-video');
 $DBConnect = @mysql_connect(DB_HOST,DB_USER,DB_PWD)
 	Or die("<p>The database server is not available.</p>");
	
	mysql_set_charset(DB_CHARSET);
	@mysql_select_db(DB_DBNAME,$DBConnect)
	Or die("<p>The database is not available.</p>");
	return $DBConnect;
}


function fetch_array($Result){
	$arrs = array();
	while($Result && ($Row = mysql_fetch_assoc($Result))!==FALSE){
		$arrs[]=$Row;
	}
	return $arrs;
}
function add($tbl,$data){
	$keys = implode(',',array_keys($data));
	$values = implode('\',\'', array_values($data));
	$sql = "insert into ".$tbl;
	$sql.="(".$keys.") values('".$values."')";
	$result = mysql_query($sql);
	if($result===FALSE){
		return 0;
	}
	else{
		return mysql_insert_id();
	}

}
?>