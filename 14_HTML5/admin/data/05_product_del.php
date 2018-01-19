<?php
require('init.php');
@$lid = $_REQUEST['lid'];
$sql = "UPDATE xz_laptop SET expire='1' WHERE lid=$lid ";
$result = mysqli_query($conn,$sql);
$row = mysqli_affected_rows($conn);
if($row>0){
  echo '{"code":1,"msg":"删除成功"}';
}else{
  echo '{"code":0,"msg":"删除失败"}';
}




?>