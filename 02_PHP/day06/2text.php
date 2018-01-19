<?php
/*
接收客户端提交的新用户数据，保存数据库实现用户注册
输入:uname upwd email phone
输出:"注册成功！"或者 "注册失败"等形式的提示消息
*/
//1.接收客户端提交的注册数据
@$u=$_REQUEST['uname'];
if($u===null || $u===''){//终止当前页面的执行！并向页面输出消息
  die( "uname require");
}
@$p=$_REQUEST['pwd'];
if($p===null || $p===''){
 die( "pwd require");
}

@$e=$_REQUEST['email'];
if($e===null || $e===''){
  die( "email require");
}
@$h=$_REQUEST['phone'];
if($h===null || $h===''){
  die( "phone require");
}
//2.连接数据库
$conn = mysqli_connect('127.0.0.1','root','','xuezi',3306);
//var_dump($conn);
//3.向数据库服务器提交SQL语句
$sql = "INSERT INTO xz_user(uname,upwd,email,phone) VALUES('$u','$p','$e','$h')";
//4.查看SQL语句执行结果
$result = mysqli_query($conn,$sql);
if(!$result){
  echo "执行错误请检查 $sql";
}else{
  $uid = mysqli_insert_id($conn);
  echo" 创建成功 编号为 $uid 行 ";
}






?>