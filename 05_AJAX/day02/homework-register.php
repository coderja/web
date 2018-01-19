<?php
@$u=$_REQUEST['uname'];
@$p=$_REQUEST['upwd'];
@$e=$_REQUEST['email'];
@$h=$_REQUEST['phone'];
@$un=$_REQUEST['user_name'];
@$g=$_REQUEST['gender'];

if($u===''||$u===null){
  die("uname require");
}
if($p===''||$p===null){
  die("upwd require");
}
if($e===''||$e===null){
  die("email require");
}
if($h===''||$h===null){
  die("phone require");
}
if($un===''||$un===null){
  die("user_name require");
}
if($g===''||$g===null){
  die("gender require");
}
require('init.php');
$sql = "INSERT INTO xz_user(uname,upwd,email,phone,user_name,gender) VALUES('$u','$p','$e','$h','$un',$g)";
$result = mysqli_query($conn,$sql);
if(!$result){
  echo "语法错误";
}else{
  echo "注册成功";
}
?>