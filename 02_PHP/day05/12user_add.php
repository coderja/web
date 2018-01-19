<?php
$conn = mysqli_connect('127.0.0.1','root','','xuezi',3306);
$sql = "INSERT INTO xz_user VALUES(12,'TOM','123456','1107854543@qq.com','13915439097','img.jpg','王杰',1)";

$result = mysqli_query($conn,$sql);
if($result===false){
   echo "SQL语句有错请检查";
}else{
   echo "数据创建成功";
}
?>