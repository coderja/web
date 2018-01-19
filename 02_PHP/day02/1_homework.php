<?php
  /*创建各种类型的变量，并输出*/
  #笔记本编号
    $lid = 23;
    echo "编号.$lid<br>";
    var_dump ($lid);
  #图片地址
    $pic = 'img/2.jpg';
    echo "<br>图片地址: $pic<br>";
    var_dump($pic);
  #标题
    $title = '戴尔7000';
    echo "<br>标题:$title<br>";
    var_dump($title);
  #价格
   $price = 5000;
   echo('<br>价格'.$price.'<br>');
   var_dump($price);
  #是否特价
  $isOnsale = true;
  echo "<br>是否特价:$isOnsale 111<br>";
  var_dump($isOnsale);
  #上架时间
  $time = 156000000000;

  echo "$lid,$pic";
?>