<?php 
	/*
	#普通数组
	$array=["杨幂","李文华","范冰冰"];
	#1、将$array转换为 JSON格式的字符串，再响应
	$str=json_encode($array);
	echo $str;*/
	
	/*关联数组*/
	/*$lwh=["name"=>"WENHUA.Li","age"=>40,"gender"=>"FEMALE"];
	#将以上的关联数组转换为JSON格式的字符串，再响应
	echo json_encode($lwh);*/

	/*二维数组的关联数组*/
	$users = [
		["name"=>"WENHUA","age"=>40],
		["name"=>"BING","age"=>36]
	];

	echo json_encode($users);

?>