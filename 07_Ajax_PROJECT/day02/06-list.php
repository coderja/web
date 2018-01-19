<?php
@$currentPage = $_REQUEST['currentPage'];
@$pageSize = $_REQUEST['pageSize'];
if($currentPage==null){
 $currentPage = 1;
}
 if($pageSize==null){
 $pageSize = 10;
}


require('init.php');
$sql = "SELECT COUNT(*) FROM xz_user";
$result1 = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($result1);
$total = $row[0];
$totalPage = ceil($total / $pageSize);
$prePage = 1;
$nextPage = $totalPage;

if($currentPage>$totalPage){
   $currentPage=$totalPage;
}

if($currentPage>1){
   $prePage=$currentPage-1;
}

if($currentPage<1){
   $currentPage=1;
}
if($currentPage<$totalPage){
   $nextPage=$currentPage+1;
}
$start=($currentPage-1)*$pageSize;

$sql = "SELECT uname,email,phone,avatar,user_name,gender from xz_user LIMIT $start,$pageSize";
$result = mysqli_query($conn,$sql);
$array = mysqli_fetch_all($result,MYSQLI_ASSOC);

Array_push($array,"{\"firstPage\":1,\"prePage\":$prePage,\"nextPage\":$nextPage,\"totalPage\":$totalPage}");
//echo '上一页：'.$prePage.'下一页：'.$nextPage."<br>";
echo json_encode($array);

?>