<?php
const WITHDEAW_LIMIT = 2000;
echo "取款限额：".WITHDEAW_LIMIT;
#const WITHDEAW_LIMIT = 1000;#常量不能重复定义

/*
  中学数学问题
  角度制:一圈为360 
  弧度制:2π
  角度转为弧度：deg*PI/180
*/
const PI = 3.14;
$deg = 30;
$deg2 = 60;
$result = 30*PI/180;
$result2 = 60*PI/180;
echo"<br>$deg 对应的角度为 $result<br>";
echo"$deg2 对应的角度为 $result2<br>";



?>