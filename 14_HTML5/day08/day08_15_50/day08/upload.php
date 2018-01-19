<?php
//1:设置响应头json     14:35--14:45
header("Content-Type:application/json;charset=utf-8");
//2:获取上传文件的名称
//3:获取上传文件的大小
$name = $_FILES["myfile"]["name"];
$size = ceil($_FILES["myfile"]["size"]/1000);
//4:判断如果用户上传文件大于512K
//5:停止php执行
if($size>512){
  die('{"code":-1,"msg":"图片超过范围 512kb"}');
}
//6:获取文件名后缀
$type = strstr($name,".");
//7:如果后缀名不是 .jpg  .png .gif
//8:停止php执行
if($type != ".jpg" && $type != ".png" && $type != ".gif"){
  die('{"code":-2,"msg":"上传文件必须是图片格式"}');
}
//9:创建新上传文件名
$pics = time().rand(1,9999).$type;
//10:获取上传临时文件名
$src = $_FILES["myfile"]["tmp_name"];
$des = "upload/".$pics;
//11:将临时文件名移动upload下
move_uploaded_file($src,$des);
//12:输出上传成功json
echo '{"code":1,"msg":"上传成功"}';