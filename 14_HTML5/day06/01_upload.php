<?php
header("Content-Type:application/json;charset=utf-8");
$picname = $_FILES["myfile"]["name"];
$picsize = ceil($_FILES["myfile"]["size"]/1000);

if($picsize>10240){
  echo '{"code":"-1","msg":"文件不能超过512kb"}';
  exit;
}

$type=strtolower(strstr($picname,"."));//判断文件后缀;strtolower()转为小写
if($type !=".mp4"){
   echo '{"code":"-1","msg":"必须是视频"}';
   exit;
}
/*if($type !=".gif"&&$type!=".jpg"&&$type!=".png"){
   echo '{"code":"-1","msg":"必须是word"}';
   exit;
}*/
/*if($type !=".doc"&&$type!=".docx"){
   echo '{"code":"-1","msg":"必须是word"}';
   exit;
}*/
//time()时间戳rand(1,9999)1-9999生成随机数
$pics = time().rand(1,9999).$type;
$old=$_FILES["myfile"]["tmp_name"];
$new = "upload/".$pics;
move_uploaded_file($old,$new);
echo '{"code":"1","msg":"上传成功"}';

?>