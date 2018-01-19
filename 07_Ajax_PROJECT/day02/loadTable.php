<?php
//设置响应消息头
header('Content-Type:application/json');
//连接数据库
require('init.php');
//执行SQL语句
$sql = "SELECT uname,email,phone,avatar,user_name,gender from xz_user";
//执行查询，并返回结果
$result = mysqli_query($conn,$sql);
//将查询结果转换为关联数组
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);



//将关联数组转换为json字符串
echo json_encode($row);
?>