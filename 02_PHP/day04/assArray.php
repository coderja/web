<?php
//创建一个数组用于保存一个用户信息的空数组，向其中添加一个ID，再添加一个用户名，再添加一个积分，再添加一个是否在线，再添加一个注册时间，使用for循环遍历
$userData=['uid' => 122,'ename' => 'tom' ];
$userData['isOnline'] = true;
$userData['age'] = 25;
var_dump($userData);
echo $userData['uid'];
echo"<br>";
foreach($userData as $k=>$v){
  echo "$k=>$v<br>";
}
//首先创建一个表示商品列表的数组，在创建一个数组保存商品的编号 图片 名称  价格 上架时间 是否特价;
//创建四个商品保存商品列表大数组中，使用for循环输出这个大数组
$product0=[];
$product0['uid']=100;
$product0['pic']='img.jpg';
$product0['pname']='戴尔';
$product0['time']=159600056320;
$product0['isOnsale']=true;

$product1=[];
$product1['uid']=101;
$product1['pic']='img1.jpg';
$product1['pname']='联想';
$product1['time']=159699056320;
$product1['isOnsale']=false;

$product2=[];
$product2['uid']=102;
$product2['pic']='img2.jpg';
$product2['pname']='戴尔';
$product2['time']=159666056320;
$product2['isOnsale']=false;

$product3=[];
$product3['uid']=103;
$product3['pic']='img3.jpg';
$product3['pname']='mac';
$product3['time']=159666666320;
$product3['isOnsale']=false;

$arr=[$product0,$product1,$product2,$product3];
for($i=0;$i<count($arr);$i++){
     echo $arr[$i]['uid'];
     echo $arr[$i]['pic'];
     echo $arr[$i]['pname'];
     echo $arr[$i]['time'];
     echo $arr[$i]['isOnsale'];
	 echo"<br>";
}


/*$arr=[
 ['uid'=>100,'pic'=>'img0.jpg','pname'=>'联想','time'=>15698763524,'isOnsale'=>true],
 ['uid'=>101,'pic'=>'img1.jpg','pname'=>'戴尔','time'=>15698763524,'isOnsale'=>true],
 ['uid'=>102,'pic'=>'img2.jpg','pname'=>'mac','time'=>15698763524,'isOnsale'=>true],
 ['uid'=>103,'pic'=>'img3.jpg','pname'=>'华硕','time'=>15698763524,'isOnsale'=>true]
];

     foreach($arr[0] as $k=>$v){
	  //var_dump($prcList[0][$v]);
	  echo $k;
	 }
	 echo"<br>";



$arr=[
 ['uid'=>100,'pic'=>'img0.jpg','pname'=>'联想','time'=>15698763524,'isOnsale'=>true],
 ['uid'=>101,'pic'=>'img1.jpg','pname'=>'戴尔','time'=>15698763524,'isOnsale'=>true],
 ['uid'=>102,'pic'=>'img2.jpg','pname'=>'mac','time'=>15698763524,'isOnsale'=>true],
 ['uid'=>103,'pic'=>'img3.jpg','pname'=>'华硕','time'=>15698763524,'isOnsale'=>true]
];



for($i=0;$i<count($arr);$i++){
   echo $arr[$i]['uid'];
   echo $arr[$i]['pic'];
   echo $arr[$i]['pname'];
   echo $arr[$i]['time'];
   echo $arr[$i]['isOnsale'];
   echo"<br>";
 
}
*/
?>