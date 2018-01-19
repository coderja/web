<?php
require('init.php');
@$lid = $_REQUEST['lid'];
$sql = "SELECT * FROM xz_laptop WHERE lid=$lid";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
echo json_encode($row);
?>