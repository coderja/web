<?php
/*
  更新用户的基本信息，包括用户的真实姓名、性别、邮箱、电话
  输入：user_name/gender/email/phone uid
  输出:"修改成功"或"修改失败"
*/
//1.接受客户端提交的五个输入数据
  @$n=$_REQUEST['user_name'];
  if($n===''||$n===null){
      die('user_name require');
  }
  @$m=$_REQUEST['uname'];
  if($m===''||$m===null){
      die('uname require');
  }
  @$g=$_REQUEST['gender'];
  if($g===''||$g===null){
      die('gender require');
  }
  @$e=$_REQUEST['email'];
  if($e===null||$e===''){
      die('email require');
  }
  @$p=$_REQUEST['phone'];
  if($p===null||$p===''){
      die('phone require');
  }
  @$uid=$_REQUEST['uid'];
  if($uid===null||$uid===''){
      die('uid require');
  }
//2.连接数据库服务器
require('init.php');
//3.向数据库提交SQL语句
$sql="UPDATE xz_user SET user_name='$n',gender=1,email='$e',phone='$p',uname='$m' WHERE uid=$uid";
//4.执行结果
$result=mysqli_query($conn,$sql);

if(!$result){
    echo"操作失败检查$sql";
}else{
    $count=mysqli_affected_rows($conn);
    echo"删除成功影响的行数$count";
}




?>