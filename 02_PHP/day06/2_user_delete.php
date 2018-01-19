<?php
/*根据客户端提交的用户编号,从数据库中删除该用户记录
 输入:uid(客户端必须提交要删除的用户的编号)
 输出:"删除成功"或删除"失败"等提示信息

*/


//1.读取客户端提交的要删除的用户的编号
@$id = $_REQUEST['uid'];
 if($id ===NULL || $id===""){
     die('uid requrie');
 }
//2.连接到数据库服务器
// $conn = mysqli_connect('127.0.0.1','root','','xuezi',3306);
require('init.php');
//3.向数据库提交SQL语句
$sql = "DELETE FROM xz_user WHERE uid=$id";
//4.查看执行效果 DML：失败-false  成功-true
$result = mysqli_query($conn,$sql);

if(!$result){
    echo "删除失败";
}else{
    echo "删除成功";
    $count = mysqli_affected_rows($conn);
    echo  "删除操作影响的行数$count";
}
//如何获取DML语句影响的行数
// 只要DML(INSERT/DELETE/UPDATE)语句可以影响数据库中的数据行
//$count = mysqli_affected_rows($conn)
?>