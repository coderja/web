<?php
header('Content-Type:application/json');
sleep(6);
echo json_encode(['ok'=>1,'msg'=>'连接成功']);
?>