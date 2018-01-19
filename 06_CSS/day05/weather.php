<?php
 require('init.php');
$cid = $_REQUEST['cid'];
$city = $_REQUEST['city'];
$pam = $_REQUEST['pam'];
$pro = $_REQUEST['pro'];
$sql = "INSERT INTO city VALUES(NULL,$cid,$city,$pam,$pro)";
$result = mysqli_query($conn,$sql);
$row = mysqli_affected_rows($conn);
if($row>0){
  echo '{"插入成功"}';
}
?>