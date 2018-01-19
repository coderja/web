<?php
require('init.php');
@$lid = $_REQUEST['lid'];
$price = $_REQUEST['price'];
$sql = "UPDATE xz_laptop SET price=$price   WHERE lid=$lid";
$result = mysqli_query($conn,$sql);
$row = mysqli_affected_rows($conn);
if($row>0){
  echo '{"code":1,"msg":"更新成功"}';
}else{
  echo '{"code":0,"msg":"更新失败"}';
}
?>