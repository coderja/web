<?php
session_start();
  require('init.php');
  @$uname = $_REQUEST['uname'];
  @$upwd = $_REQUEST['upwd'];
  @$yzm = $_REQUEST['yzm'];
  $uPattern = "/^[a-zA-Z0-9_]{3,12}$/";
  $pPattern = "/^[a-zA-Z0-9_]{3,12}$/";
  $yzmPattern = "/^[a-zA-Z]{4}$/";
  if(!preg_match($uPattern,$uname)){
    echo '{"code":-2,"msg":"用户名格式不正确"}';
    exit;
  }
  if(!preg_match($pPattern,$upwd)){
      echo '{"code":-3,"msg":"密码格式不正确"}';
      exit;
    }
   if(!preg_match($yzmPattern,$yzm)){
          echo '{"code":-4,"msg":"验证码格式不正确"}';
          exit;
        }
   $code = $_SESSION['code'];
  if($code!=$yzm){
        echo '{"code":-3,"msg":"验证码不正确"}';
        exit;
  }
  if($uname&&$upwd){
    $sql = "SELECT * FROM xz_admin WHERE uname='$uname' AND upwd=md5($upwd) AND expire='0'";
    $result = mysqli_query($conn,$sql);
    $user=mysqli_fetch_assoc($result);
    if($user==null){
       echo '{"code":-1,"msg":"用户名或密码错误"}';
    }else{
       echo '{"code":1,"msg":"登陆成功"}';
    }
  }



?>