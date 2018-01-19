<?php
$fn=$_REQUEST["callback"];//从请求中动态获得函数名
$str='晴 -1~12';
echo "$fn('$str')";//js语句
    //doit(晴 -1~12) 错误的js语句
		//doit('晴 -1~12') 正确的js语句