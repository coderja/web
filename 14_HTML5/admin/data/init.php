<?php
  header("Content-Type:application/json;charset=utf8");
  $conn = mysqli_connect('127.0.0.1','root','','xz',3306);
  mysqli_query($conn,"SET NAMES UTF8");