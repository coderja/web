<?php

@$s=$_REQUEST['start'];
if($s===''||$s===null){
    die('start require');
}
@$c=$_REQUEST['count'];
if($c===''||$c===null){
    die('count require');
}
require('init.php');
$sql="SELECT * FROM xz_user LIMIT $s,$c";
$result = mysqli_query($conn,$sql);
if(!$result){
    echo "操作失败检查语句 $sql";
}else{
    $row=mysqli_fetch_all($result,MYSQL_ASSOC);
    if($row){
        echo "成功";
        var_dump($row);
    }else{
        echo "暂无数据";
    }
}







?>