<?php
/*
向客户端输出所有的用户信息
输入：无
输出：所有的用户信息
*/
//1.接受客户端提交的请求数据
@$i=$_REQUEST['start'];
if($i===''||$i===null){
    die('start require');
}
@$j=$_REQUEST['count'];
if($j===''||$j===null){
    die('count require');
}
//2.连接到数据库服务器
require('init.php');
//3.向数据库服务器提交服务器SQL语句——SELECT
$sql = "SELECT * FROM xz_user LIMIT $i,$j";
//4.查看执行结果
$result=mysqli_query($conn,$sql);
if(!$result){
   echo" 查询失败检查SQL语句$sql";
}else{
    $row=mysqli_fetch_all($result,1);
   if($row){
     var_dump ($row);
     echo "查询成功";
   }else{
      echo "暂无数据";
   }
}


?>