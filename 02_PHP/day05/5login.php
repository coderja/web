<?php
echo "login.php";
echo "<hr>";
//读取客户端提交给服务器端的登录信息
$n=$_REQUEST['loginName'];
$p=$_REQUEST['loginPwd'];
if($n==='admin'&& $p==='123456'){
   echo "登陆成功";
}else{
   echo " 登陆失败";
}

?>