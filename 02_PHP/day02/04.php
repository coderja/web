<?php
$age = 12;
$result = $age > 15;
var_dump($result);

$ee = 33;
$de = 123;
$result = $ee>$de;
var_dump($result);

$ee = "33";
$de = "123";
$result = $ee<$de;
var_dump($result);

$ee = "123";
$de = 123;
$result = $ee==$de;
var_dump($result);

$ee = true;
$de = false;
$result = $ee>$de;
var_dump($result);

$ee = 'true';
$de = false;
$result = $ee>$de;
var_dump($result);

$ee = 1;
$de = null;
$result = $ee==$de;
var_dump($de == 0);

$ee = null;
$de = null;
$result = $ee==$de;
var_dump($result);

$ee = TRUE;  #bool=>string=>int
$de = 'ABC'; #string=>int
$result = $ee==$de;
var_dump($result);
?>