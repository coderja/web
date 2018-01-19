<?php
$u = $_REQUEST['user'];
if($u==''||$u==null){
  die('user require');
}
$d = $_REQUEST['upwd'];
if($d==''||$d==null){
  die('upwd require');
}
$e = $_REQUEST['email'];
if($e==''||$e==null){
  die('user require');
}
$p = $_REQUEST['phone'];
if($u==''||$u==null){
  die('phone require');
}
$n = $_REQUEST['uname'];
if($n==''||$n==null){
  die('uname require');
}
$g = $_REQUEST['gender'];
if($g==''||$g==null){
  die('gender require');
}

require('init.php');
mysqli_query($conn,$sql);
$sql = "insert into xz_user(uname,upwd,email,phone,user_name,gender) values('$u','$d','$e','$p','$n',$g)";
$result = mysqli_query($conn,$sql);
if(!$result){
    echo "用户已存在";
  }else{
    echo "注册成功";
  }
?>