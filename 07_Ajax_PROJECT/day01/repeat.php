<?php
$u = $_REQUEST['user'];
require('init.php');
$sql = "SELECT * FROM xz_user where uname='$u'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($result);
if(!$result){
   echo "检查语法";
}else{
  if($row==null){
    echo "昵称可以使用";
  }else{
    echo "昵称被占用";
  
  }
}

?>