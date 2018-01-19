<?php
 $u = $_REQUEST['user'];
 $p = $_REQUEST['upwd'];
 require('init.php');
 $sql = "SELECT * from xz_user where uname='$u' and upwd='$p'";
 $result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_row($result);
 if($row){
     echo '1';
 }else{
     echo '0';
 }
?>