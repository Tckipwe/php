<?php 
    header("content-type:text/html;charset=utf-8");
    echo '<h2>1、学生案例</h2>';
           $xx=array('stuno'=>'14110100410','name'=>'薛烜','sex'=>'男','birth'=>'1855-01-01','class'=>'计算机14004');
           $xx['major']='计算机科学与技术';

           $zqy= array('stuno' => '14110100421','name'=>'赵庆阳','sex'=>'man','birth'=>'1995-10-12','class'=>'计算机14004','major'=>'计算机科学与技术');

           $xjn=array('stuno'=>'14110100409','name'=>'徐镜宁','sex'=>'男','birth'=>'1996-05-06','class'=>'计算机14004','major'=>'计算机科学与技术');

  //var_dump($zqy);
  //var_dump($xjn);
  //var_dump($xx);

  $stus=array($zqy,$xx);
  $stus[]=$xjn;

  //$stus=array($xx,$xjn,$zqy);
 /* var_dump($stus);
*/




echo '<h2>2、用户案例</h2>';
$user1=array(
	'username'=>'xuexuan',
	'password'=>'123456',
    'realname'=>'薛烜',
    'sex'=>'男',
    'hobby'=>'游泳，唱歌，乒乓球',
    'thumb'=>'thumb/xx.jpg',
    'email'=>'xuexuan14@neusoft.edu.cn'
	);

$user2=array(
	'username'=>'zhangsan',
	'password'=>'123456',
    'realname'=>'张三',
    'sex'=>'男',
    'hobby'=>'游泳，唱歌，乒乓球',
    'thumb'=>'thumb/zs.jpg',
    'email'=>'zhangsan@neusoft.edu.cn'
	);

$users=array();//可省略
$users[]=$user1;
$users[]=$user2;
//var_dump($users);

foreach($users as $one){
   foreach ($one as $key => $value) {
   	 echo $key.'-->'.$value.'<br>';}
   }

/*foreach($users as $one){
   echo '用户名:' .$one['username'] .'<br>';
   echo '姓名:' .$one['realname'] .'<br>';
}
*/

/*foreach($users as $one){
for ($i=0; $i <count($users) ; $i++) { 
	$one=$users[$i];}
}*/





echo '<h2>3、视频案例</h2>';

/*$categoty_movie = array(
	'id'=>1,
	'categoty_name'=>'电影'
	);

$categoty_series = array(
	'id'=>2,
	'categoty_name'=>'电视剧'
	);

$categoty_recreation = array(
	'id'=>3,
	'categoty_name'=>'综艺'
	);

$categoty=array($categoty_movie,$categoty_series,$categoty_recreation);

$movie_fish=array(
    'id'=>1,
    'name'=>'美人鱼',
    'intro'=>'还可以', 
    'director'=>'周星驰',
    'thumb'=>'fish.jpg',
    'categoty_id'=>1,
    'categoty_name'=>'电影'
 );

$movie_animal=array(
    'id'=>2,
    'name'=>'疯狂动物城',
    'intro'=>'还可以', 
    'director'=>'国外导演',
    'thumb'=>'animal.jpg',
    'categoty_id'=>1,
    'categoty_name'=>'电影'
 );

$movie_fish=array(
    'id'=>3,
    'name'=>'琅琊榜',
    'intro'=>'还可以', 
    'director'=>'周星驰',
    'thumb'=>'fish.jpg',
    'categoty_id'=>2,
    'categoty_name'=>'电视剧'
 );


$movie_fish=array(
    'id'=>4,
    'name'=>'花千骨',
    'intro'=>'还可以', 
    'director'=>'周星驰',
    'thumb'=>'fish.jpg',
    'categoty_id'=>2,
    'categoty_name'=>'电视剧'
 );


$movie_fish=array(
    'id'=>5,
    'name'=>'我是歌手',
    'intro'=>'还可以', 
    'director'=>'周星驰',
    'thumb'=>'fish.jpg',
    'categoty_id'=>3,
    'categoty_name'=>'综艺'
 );


$movie_fish=array(
    'id'=>6,
    'name'=>'欢乐喜剧人',
    'intro'=>'还可以', 
    'director'=>'周星驰',
    'thumb'=>'fish.jpg',
    'categoty_id'=>3,
    'categoty_name'=>'综艺'
 );

$video = array($video1,$video2);
$videos=array();
$movies = array(
       'categoty_id'=>1,
       'categoty_name'=>'电影',
       'videos'=>array($video1,$video2)
	);


$videos[]=$movies;*/
 ?>