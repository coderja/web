<?php
$scoreArray=[98,92,88,76,87];
$enameArray=['tom','jack','erric','scott','kelus'];
$isMarryArray=[true,true,false,false,true];

var_dump($isMarryArray);
var_dump($scoreArray);

echo "$scoreArray[2]<br>";
echo count($enameArray)."<hr>";

$any=['tom',99,true];
echo $any[2]."<br>";
$any[2]=false;
$any[count($any)-2]=true;
var_dump($any);

$array=[];
$array[]=1;
$array[]=2;
var_dump($array);

echo"<br>";

$arr=[];
for($i=0;$i<10;$i++){
  $arr[count($arr)]=$i;
  
}
var_dump($arr);

echo"<br>";
//练习创建一个表示购物车的数组，开始时没有数据，
//向其中添加一个商品的价格,总共添加五个
//使用循环输出商品中所有的价格
$car=[];
$car[]=99;
$car[]=88;
$car[]=109;
$car[]=110;
for($i=0;$i<count($car);$i++){
 echo "$i-$car[$i]<br>";
}

//创建一个数组用于保存一个用户信息的空数组，向其中添加一个ID，再添加一个用户名，再添加一个积分，再添加一个是否在线，再添加一个注册时间，使用for循环遍历
$info=[];
$info=[45,'tom',3445,true,1];
for($i=0;$i<count($info);$i++){
  echo"$info[$i]<br>";
  var_dump($info[$i]);
}












?>