<?php 
	#1、接收前端传递过来的数据
	$uname=$_REQUEST["uname"];
	$upwd =$_REQUEST["upwd"];
	$uemail=$_REQUEST["uemail"];
	$utel=$_REQUEST["utel"];
	$user_name=$_REQUEST["user_name"];
	$ugender=$_REQUEST["ugender"];
	#2、数据库连接
	require("00-init.php");
	#3、拼SQL语句
	$sql = "insert into xz_user(uname,upwd,email,phone,user_name,gender) values ('$uname','$upwd','$uemail','$utel','$user_name',$ugender)";
	#4、执行并获取结果
	$result=mysqli_query($conn,$sql);
	#5、根据结果给出响应
	if($result == true){
		echo "注册成功";
	}else{
		echo "注册失败";
	}
?>