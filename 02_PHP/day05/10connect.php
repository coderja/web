<?php
$conn = mysqli_connect('127.0.0.1','root','','danei','3306');
#测试查看是否成功 var_dump($conn);
//2.向数据库提交SQL命令
$sql = "INSERT INTO dept VALUES(60,'TESTING1')";
$result = mysqli_query($conn,$sql);
if($result===false){
    echo "SQL语句执行失败！请检查语法";
}else{
    echo "新的部门已经保存数据库";
}

?>