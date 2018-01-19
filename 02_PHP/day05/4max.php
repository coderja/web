<?php
//http://127.0.0.1/02_PHP/day05/4max.php?a=16&b=22&c=13
//var_dump($_REQUEST);
echo $_REQUEST['a'].'<br>';
echo $_REQUEST['b'].'<br>';
echo $_REQUEST['c'].'<br>';
echo max($_REQUEST).'<br>' ;


//将$_REQUEST中的数据放到数组中
$arr=[];
foreach($_REQUEST as $v){
     $arr[count($arr)]=$v;
}
var_dump ($arr);


/*
定义一个最大值函数
function ma($arr){
 $m=$arr[0];
for($i=1;$i<count($arr);$i++){
  if($arr[$i]>$m){
     $m=$arr[$i];
  } 
}
return $m;
}
$arr=[1,4,5,8];
echo ma($arr);
*/

$m=0;
foreach($_REQUEST as $v){
  if($v>$m){
     $m=$v;
  } 
}
echo"$m";




?>