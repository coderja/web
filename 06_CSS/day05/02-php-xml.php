<?php
header('Content-Type:application/xml');
$xml="<?xml version='1.0' encoding='utf-8' ?>";
$xml.="<studentList>";
$xml.="<student>";
$xml.="<name>tom</name>";
$xml.="<age>12</age>";
$xml.="</student>";
$xml.="</studentList>";
echo $xml;








?>