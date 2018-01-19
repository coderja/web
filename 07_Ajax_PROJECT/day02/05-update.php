<?php
$u = $_REQUEST['uname'];
require('init.php');
$sql = "select * from xz_user where uname='$u'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>

<!doctype html>
<html>
  <head>
	  <meta charset="utf-8">
		<title></title>
	</head>
	<body>
	  <form action="05-update-user.php" method='post'>
	    <p>
		  登录名称
		  <input type="text" name='uname' value="<?php echo $row['uname'] ?>">
		</p>
		<p>
		  登录密码
		  <input type="password" name='upwd' value="<?php echo $row['upwd'] ?>">
		</p>
		<p>
		  登录邮箱
		  <input type="email" name='email' value="<?php echo $row['email'] ?>">
		</p>
		<p>
		  联系方式
		  <input type="text" name='phone' value="<?php echo $row['phone'] ?>">
		</p>
		<p>
		  用户姓名
		  <input type="text" name='user_name' value="<?php echo $row['user_name'] ?>">
		</p>
		<p>
		  用户性别
		  <select name="gender">
		    <option value="0" 
			  <?php if($row['gender']=='0') echo 'selected';?>
			>女</option>
		    <option value="1" 
			  <?php if($row['gender']=='1') echo 'selected';?>
			>男</option>
		  </select>
		</p>
		<p>
		  <input type="hidden" name='uid' value="<?php echo $row['uid']?>">
		</p>
		<p>
		  <input type="submit" value='修改'>
		</p>
	  </form>
	</body>
</html>