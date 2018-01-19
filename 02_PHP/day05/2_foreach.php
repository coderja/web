<?php
$user = ['uid'=>101,'uname'=>'tom','age'=>20];
foreach($user as $k=>$v){
   echo "$k=>$v<br>";
}
echo"<hr>";


$user = ['uid','uname','tom','age'];
foreach($user as $k=>$v){
   echo "$k=>$v<br>";
}
echo'<hr>';

$sum=0;
$user =[100,200,300,400,500];
foreach($user as $v){
  echo $v;
  echo"<br>";
  $sum+=$v;
}
echo $sum.'<hr>';



$arr=[
	'pname'=>'戴尔',
	'price'=>6900,
	'time'=>15463256548,
	'isOnsale'=>false
];
foreach($arr as $k=>$v){
 echo "$k $v<br>";
}
//说明：一般项目中，关联数组不需要遍历，逐个输出即可
?>