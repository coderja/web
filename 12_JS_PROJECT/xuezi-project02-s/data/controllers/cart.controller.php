<?php
require_once("../../init.php");
function addToCart(){
	global $conn;
	session_start();
	@$uid=$_SESSION["uid"];
	@$product_id=$_REQUEST["lid"];
	@$count=$_REQUEST["count"];
	if($uid){
		$sql="select * from xz_shoppingcart_item where user_id=$uid and product_id=$product_id";
		$result=mysqli_query($conn,$sql);
		//如果$uid的购物车中有$product_id商品
		if(count(mysqli_fetch_all($result,1)))
			$sql="update xz_shoppingcart_item set count=count+$count where user_id=$uid and product_id=$product_id";
		else//否则
			$sql="insert into xz_shoppingcart_item (user_id,product_id,count) values ($uid,$product_id,$count)";
		mysqli_query($conn,$sql);
	}
}
function updateCart(){
	global $conn;
	@$iid=$_REQUEST["iid"];
	@$count=$_REQUEST["count"];
	if($count==0)
		$sql="delete from xz_shoppingcart_item where iid=$iid";
	else
		$sql="update xz_shoppingcart_item set count=$count where iid=$iid";
	mysqli_query($conn,$sql);
}
//updateCart();
function getCart(){
	global $conn;
	session_start();
	@$uid=$_SESSION["uid"];
	if($uid){
		$sql="select iid, title, price, count from xz_shoppingcart_item inner join xz_laptop on product_id=lid where user_id=$uid";
		$result=mysqli_query($conn,$sql);
		echo json_encode(mysqli_fetch_all($result,1));
	}else{
		echo json_encode([]);
	}
}
//getCart();
function clearCart(){
	global $conn;
	session_start();
	@$uid=$_SESSION["uid"];
	if($uid){
		$sql="delete from xz_shoppingcart_item where user_id=$uid";
		mysqli_query($conn,$sql);
	}
}
