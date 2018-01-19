<?php
header('Content-Type:application/json');
sleep(4);
echo json_encode(['ok'=>1,'msg'=>'响应成功']);
?>