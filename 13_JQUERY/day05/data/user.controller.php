<?php
require_once("init.php");//$conn
function login(){
	global $conn;
	//从request中获得uname和upwd
	@$uname=$_REQUEST["uname"];
	@$upwd=$_REQUEST["upwd"];
	if($uname&&$upwd){
		//定义SQL语句: select 
		$sql="select * from xz_user where uname='$uname' and binary upwd='$upwd'";
		$result=mysqli_query($conn,$sql);//执行查询
		//获得查询结果
		$user=mysqli_fetch_all($result,1);
		if(count($user)!=0){//如果有结果
			session_start();//打开session
			$_SESSION["uid"]=$user[0]["uid"];
			return true;//登录成功
		}else//否则
			return false;//登录失败
	}
}
function isLogin(){
	global $conn;
	session_start();
	@$uid=$_SESSION["uid"];
	if($uid){
		$sql=
			"select uname from xz_user where uid=$uid";
		$result=mysqli_query($conn,$sql);
		$user=mysqli_fetch_all($result,1);
		return ["ok"=>1,"uname"=>$user[0]["uname"]];
	}else
		return ["ok"=>0];
}