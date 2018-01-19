<?php 
	#1、声明一个二维数组
	$array=[
		["哈尔滨","齐齐哈尔","牡丹江"],
		["长春","吉林","四平"],
		["沈阳","大连","鞍山"]
	];
	#2、接收前端传递过来的province的value -> p
	$p=$_REQUEST["p"];
	#3、根据$p获取具体的城市信息
	$city = $array[$p];
	#4、循环遍历city数组，拼成 <option>，再进行响应
	$opts="";
	for($i=0;$i<count($city);$i++){
		$opts.="<option value='$i'>$city[$i]</option>";
	}
	echo $opts;
?>