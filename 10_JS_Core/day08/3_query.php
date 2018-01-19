<?php
header('Content-Type:application/json');
sleep(2);
echo json_encode(['ok'=>1,'msg'=>'查询成功']);
?>