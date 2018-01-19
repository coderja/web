<?php 
	#1、连接到数据库
	require("00-init.php");
	#2、拼 sql 语句
	$sql = "select * from xz_user";
	#3、执行 sql 并获取结果保存在 $result 中
	$result = mysqli_query($conn,$sql);
	#4、将结果转换成 关联数组
	$array=mysqli_fetch_all($result,MYSQLI_ASSOC);
	#5、将结果转换成 JSON格式字符串进行响应
	echo json_encode($array);
?>