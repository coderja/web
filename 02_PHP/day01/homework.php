<?php
$uid = 11;
echo "编号:$uid<hr>";
var_dump ($uid);

$pic = 'sina.com/img/1.jpg';
echo "图片地址:$pic<hr>";
var_dump($pic);
$title = '联想';
echo "标题:$pic<hr>";
var_dump($title);
$price = 1200;
echo "价格:$price<hr>";
var_dump($price);
$spec = '123*34*56';
echo "规格:$spec<hr>";
var_dump($spec);
$time = 156000000000;
echo "时间:$time<hr>";
var_dump($time);
$isOnsale = true;
echo "是否特价:$isOnsale<hr>";
var_dump($isOnsale);
#创建一个常量，表示银行的单日取款限额(如2000)，输出该常量的值。试着
#再次给这个常量赋值，是否可行
 const MONEY = 2000;
 echo MONEY."<br>";
 #MONEY = 3000;#报错
 #CONST MONEY = 3000;#报错 

 CONST PI = 3.14;
 $onedu = PI/180;
 echo(30*$onedu."<br>");
 echo(60*$onedu);
 echo "字符串：PI";
?>