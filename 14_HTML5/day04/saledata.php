<?php
header("Content-Type:application/json");
$row = [];
$row[] = ["label"=>"部门一","value"=>180];
$row[] = ["label"=>"部门二","value"=>190];
$row[] = ["label"=>"部门三","value"=>200];
$row[] = ["label"=>"部门四","value"=>210];
echo json_encode($row);



?>