<?php
@$u=$_REQUEST['uname'];
if($u===''||$u===null){
  die('uname require');
}
require('init.php');
$sql="select $u from xz_user";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if(!$result){
  echo "语法错误";
}else{
  if($row){
    echo '用户名被占用';
  }else{
    echo '用户名不能为空';
  }
}
?>