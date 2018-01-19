<?php
header("Content-Type:application/json;charset=utf-8");
$picname = $_FILES['myfile']['name'];
$picsize = ceil($_FILES['myfile']['size']/1000);
if($picsize>10240){
  die('{"code":"-1","msg":"文件不能超过十兆"}');
}
$type  = strtolower(strstr($picname,"."));//判断文件名后缀,strtolower()转为小写
if($type!=".jpg"&&$type!=".png"&&$type!=".gif"){
  echo '{"code":"-2","msg":"图片格式不正确"}';
  exit;
}
$pics = time().rand(1,9999).$type;
$old = $_FILES['myfile']["tmp_name"];
$new = "upload/".$pics;
move_uploaded_file($old,$new);
echo '{"code":"1","msg":"上传成功"}';