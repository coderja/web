<?php
echo"user register";
echo"<hr>";
var_dump($_REQUEST);
echo'<br>';
echo"要存入数据库的用户名".$_REQUEST['uname']."<br>";
echo"要存入数据库的密码".$_REQUEST['pwd']."<br>";
echo"要存入数据库的密码".$_REQUEST['uid']."<br>";
echo "两个数的和是".($_REQUEST['pwd']+$_REQUEST['uid']);

//http://127.0.0.1/02_PHP/day05/3register.php?uname=wenhua&pwd=1234564&uid=10000
//创建一个add.php文件，客户端浏览器向该文件传输两个数字，num1,num2 add.php中读取客户端请求提交的两个数字输出这两个数字的和


?>