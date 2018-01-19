<?php
$u = $_REQUEST['user'];
$p = $_REQUEST['upwd'];
require('init.php');
$sql = "select * from xz_user where uname='$u' and upwd=''or'1'='1' ";
$result = mysqli_query($conn,$sql);
if(!$result){
  echo '语法错误';
} else{
  $row = mysqli_fetch_row($result);
  if($row==null){
    echo '用户不存在';
  }else{
    echo '登陆成功';
  }
}
?>