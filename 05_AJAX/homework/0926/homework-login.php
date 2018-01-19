<?php
@$u=$_REQUEST['uname'];
if($u===''||$u===null){
  die('uname require');
}
require('init.php');
$sql="select * from xz_user where uname='$u'";
$result = mysqli_query($conn,$sql);
if(!$result){
  echo "语法错误";
}else{
 $row = mysqli_fetch_assoc($result);
	if($row===null){
		echo 'bucunzai';
	}else {
		echo 'cunzai';
	}
}

?>