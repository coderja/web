<?php
#1.接收前端数据
$u = $_REQUEST['uname'];
$pd = $_REQUEST['upwd'];
$em = $_REQUEST['email'];
$p = $_REQUEST['phone'];
$un = $_REQUEST['user_name'];
$g = $_REQUEST['gender'];
$id = $_REQUEST['uid'];
#2.连接到数据库
require('init.php');
#3.SQL语句
$sql = "update xz_user set uname='$u',upwd='$pd',email='$em',phone='$p',user_name='$un',gender='$g' where uid=$id";
#4.执行SQL语句并返回结果
$result = mysqli_query($conn,$sql);
if($result){
  echo '<script>  location.href="loadTable.html"  </script>';
}else{
  echo '修改失败';
}

?>