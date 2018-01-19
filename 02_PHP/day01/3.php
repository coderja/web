<?php
  $user = 'TOM';
  $uid = 55;
  $pwd = '123456';
  $email = '1516@163.com';
  $phone = '1519563894';
  $time = 15032152658;
  $isMarried = true;
  $avator = 'sina.com/img/1/jpg';
  #echo '用户编号：$uid';#错误
  echo "用户编号：$uid<hr>";#PHP中的'和"字符串有着细微的差别
  echo '用户姓名：',$user."<hr>";
  echo '用户姓名：'.$user.'<hr>';
  echo "编号：$uid<hr>";
  echo "密码：$pwd<hr>";
  echo '邮箱：'.$email.'<hr>';
  echo '电话：'.$phone.'<hr>';
  echo '时间：'.$time.'<hr>';
  echo '是否已婚：'.$isMarried.'<hr>';
  echo "$avator<br>";
  
/**/
?>