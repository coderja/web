<?php
//sleep(1);//模拟网络繁忙3秒后发送数据
require('init.php');
@$low = $_REQUEST['low'];
@$height = $_REQUEST['height'];
@$name = $_REQUEST['name'];
@$pno = $_REQUEST['pno'];
@$ps = $_REQUEST['ps'];
if($name==null){
  $name='';
}
if($pno==null){
   $pno=1;
}
if($ps==null){
   $ps=8;
}
if($height==null){
  $height=210000000000;
}
if($low==null){
  $low=0;
}
$offset =($pno-1)*$ps;
$sql="";
$sql = "SELECT l.lid,l.lname,l.title,l.price,p.sm pic,f.fname,l.expire FROM xz_laptop l,xz_laptop_pic p,xz_laptop_family f ";
$sql.="WHERE l.lid=p.laptop_id AND  l.lname LIKE '%$name%' AND l.price>=$low AND l.price<=$height  GROUP BY l.lid LIMIT $offset,$ps";
//echo "$sql";
$result = mysqli_query($conn,$sql);
$rows = mysqli_fetch_all($result,1);
$sql =  "SELECT COUNT(*) AS c FROM xz_laptop WHERE price>=$low AND price<=$height AND lname LIKE '%$name%' ";
$result  = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result)['c'];
$pc = ceil($row/$ps);
$output=[
    "data"=>$rows,
    "recoderCount"=>$row,
    "pagecount"=>$pc,
    "pno"=>$pno,
    "pageSize"=>$ps,
    "height"=>$height,
    "low"=>$low,
    "name"=>$name
  ];
echo json_encode($output);