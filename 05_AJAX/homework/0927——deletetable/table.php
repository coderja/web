<?php
header('Content-Type:application/json');
$conn = mysqli_connect('127.0.0.1','root','','xuezi',3306);
$sql = "select * from xz_user";
$result = mysqli_query($conn,$sql);
if(!$result){
  echo '�﷨����';
}else{
  $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
  if($row){
   echo json_encode($row);
  }else{
    echo "��������";
  }
}

?>