<?php
/*
接收客户端提交的登录信息进行数据库验证
输入:uname upwd
输出:登陆成功 或者 登录失败
*/
//1.获取客户端数据
@$u=$_REQUEST['uname'];
if($u===''||$u===null){
    die('uname require');
}
@$p=$_REQUEST['upwd'];
if($p===''||$p===null){
    die('upwd require');
}
//2.连接数据库
require('init.php');
//3.执行SQL语句
$sql="SELECT * FROM xz_user  where uname='$u' and upwd='$p' ";
//4.返回查询结果
$result=mysqli_query($conn,$sql);
//var_dump($reqult);
if(!$result){
    echo "查询失败";
}else{
    $row=mysqli_fetch_assoc($result);//试着抓取一行查询结果返回索引数组或null
    //$row=mysqli_fetch_all($result)
    //$row=mysqli_fetch_assoc($result)
   if($row){  //能够抓取到一行记录
       echo"验证成功";
    }else{  //没有抓取到一行记录
       echo "用户名或密码错误";
    }
    
}


?>