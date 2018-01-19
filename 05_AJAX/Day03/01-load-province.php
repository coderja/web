<?php 
	#1、声明一个一维数组并且初始化三个省份的信息
	$array=["黑龙江","吉林","辽宁"];
	/*2、循环遍历数组，取出每个省份的信息，拼成字符串 <option value='0'>黑龙江</option>
	<option value='1'>吉林</option>
	<option value='2'>辽宁</option>*/
	$opts = "";
	for($i=0;$i<count($array);$i++){
		$opts.="<option value='$i'>$array[$i]</option>";
	}
	#3、将生成的字符串响应给客户端
	echo $opts;
?>