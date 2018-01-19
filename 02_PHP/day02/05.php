<?php
$age = 30;
if($age<65&&$age>18) 
echo '适合';
else
echo '不适合';


$year = 2000;
if(($year%4==0&&$year%100!=0)||($year%400==0))
echo "闰年";
else
echo "平年";

$user = 'dangdang';
$pwd  = '123456';
if($user=='dinging'&&$pwd=='123456')
echo '登录成功';
else
echo '账户不正确';


$price=100;
#$price>80&&$price*=0.8;
$price<100||$price*=0.8;
echo $price;

$text1='';
($text1=='')&& ($text1='主人很懒')||$text1;
echo $text1;

if($price>80)
echo $price*=0.8;
$text='主人';


if($text)
echo($text);
else if($text=='')
echo"主人很懒";

$msg ='hello'.' ';
$msg.='world';
   echo  $msg;

         $age = 30;
   echo  $age == 30 ? '成年人' : "未成年";

         $a=98;
         $b=80;
   echo  $a>$b?$a:$b;


    $isMarried = true;
   $is =  $isMarried ? "未婚" : "已婚";
   echo $is;
?>