<?php
$u = $_REQUEST['uname'];
require('init.php');
$sql = "delete from xz_user where uname='$u'";
$result = mysqli_query($conn,$sql);
if($result==true){
  echo '1';
}else{
  echo '0';
}
?>