<?php 
	#1、接收前端传递过来的数据
	$uname=$_REQUEST["uname"];
	#2、连接到数据库
	require("00-init.php");
	#3、拼查询SQL语句
	$sql="select * from xz_user where uname='$uname'";
	#4、执行SQL语句并得到结果
	$result=mysqli_query($conn,$sql);
	#5、从结果集中取出一行数据
	$row = mysqli_fetch_row($result);
	#6、根据取出一行数据的结果，给出响应
	if($row == null){
		echo "1";
	}else{
		echo "0";
	}
?>