<?php
 require('init.php');
 @$pno = $_REQUEST['pageNo'];
 @$pSize = $_REQUEST['pageSize'];
 if($pno==null){
    $pno = 1;
 }else{
    intval($pno);
 }
 if($pSize == null){
    $pSize = 8;
 }else{
    intval($pno);
 }
 //echo $pno,$pSize;
 $start = ($pno-1)*$pSize;
 $sql = "select lid,title,spec,price,category,expire from xz_laptop order by price limit $start,$pSize";
 $result = mysqli_query($conn,$sql);
 $pro = mysqli_fetch_all($result,1);
 //echo json_encode($product);

 $sql = "select * from xz_laptop";
 $result = mysqli_query($conn,$sql);
 $product = mysqli_fetch_all($result,1);
 $count = count($product);
 //echo $count;
if(mysqli_error($conn)){
  echo mysqli_error($conn);
}
 $pageCount = ceil($count/$pSize);
// echo $pageCount;
$output=[
   "recordCount"=>$count,
   "pageCount"=>$pageCount,
   "pageSize"=>$pSize,
   "pno"=>$pno,
   "data"=>$pro
];
echo json_encode($output);
//1.今天作业，完成分页所有功能
//2.删除/更新/详情

//向表中添加一行失效列，默认是0；
//alter table xz_laptop add expire enum('0','1') default '0';
?>