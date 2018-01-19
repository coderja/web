<?php
/*
创建一个变量，表示月薪6000;另一个变量表示每月奖金500;另一个变量表示年终奖
 15000;最后计算一年的总薪资，并输出;
*/
$yx = 6000;
$jj = 500;
$nzj = 15000;
$resuls = ($yx + $jj)*12 + $nzj;
echo "总薪资： $resuls";#双引号中的+-*/不会运算

#计算下列表达式的值
$total = 'ABC' + 'XYZ';
echo "<br>$total<br>";#0
$total = 123 + 456;#579
echo $total;
$total = 'ABC' + 123;
echo "<br>$total<br>";#123

$total = '5ABC' * 123;
echo "<br>$total<br>";#128

$total = '5ABC' + '123xyz';#128
echo "<br>$total<br>";

$total = '5ABC' + 'xyz123';#4
echo "<br>$total<br>";

#创建一个字符串变量表示商品1的单价，一个字符串变量表示商品2的数量;计算出购物车的总金额
$list = '12w';
$count = '10';
echo($list*$count);
?>