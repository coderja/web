<?php
//公共文件
 //创建数据库服务器的连接
 $conn = mysqli_connect('127.0.0.1','root','','weather',3306);
 //设置PHP解释器连接到mysql服务器所用的字符集
 mysqli_query($conn,'SET NAMES UTF8');
?>