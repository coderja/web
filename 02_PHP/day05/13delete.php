<?php
$conn = mysqli_connect('127.0.0.1','root','','xuezi',3306);
$sql = "DELETE FROM xz_user where uid=12";
$result = mysqli_query($conn,$sql);
if($result===false){
  echo "请检查你的SQL语句+$sql";
}else{
  echo "操作成功";
}



?>