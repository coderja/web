<?php
/*
学子商城需要保存每个订单的状态
$status='代付款'
$status='备货中'
$status='派送中'
$status='已完成'
$status='未知状态'
使用汉字保存固定的几种可能：浪费空间不便于实现i18n可以使用TINYINT来存储
固定的几种可能
$status=1;
$status=2;
$status=3;
$status=4;
$status=5;
创建一个整数变量表示一个订单的状态，
*/
$status = 7;
$result=
  $status == 1 ? "代付款" :(
    $status == 2 ?'备货中' :(
      $status == 3 ?'运输中' :(
         $status == 4 ?'派送中' :(
           $status == 5 ?'已完成' :'未知状态'
           )
	    )
	)
);
echo $result;


?>