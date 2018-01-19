<?php
echo"<style>
   body{
     color:#de56de;
	 font-size:20px;
   }
   hr{color:#de56de;}
</style>";
/**
*1.输出一个*
*
*/
echo "*";
echo "<hr>";
/**
*1.输出10个*
*
*/
$i=0;
while($i<10){
	echo "*";
	$i++;
}
echo "<hr>";
/**
*1.输出10个*用do...while
*
*/
$i=0;
do{
  echo"*";
  $i++;
}while($i<10);
echo"<hr>";

/*
*打印五行*每行10个
*
*/
$j=0;
while($j<5){
	$i=0;
	while($i<10){
	  echo "*";
	  $i++;
	}
	  echo"<br>";
 $j++;
}
echo"<hr>";
/*
*打印五行*每行10个
*
*/
 $j=1;
 while($j<=50){
  echo"*";
  if($j%10==0){
  echo"<br>";
  }
  $j++;
 }
/*
*打印乘法口诀表
*/
$j=1;
while($j<=9){
	$i=1;
	while($i<=$j){
	echo "$i*$j=".$i*$j." ";
	$i++;
	}
	echo"<br>";
 $j++;
}
echo"<hr>";
/*
*打印倒得乘法口诀表
*/
$j=9;
while($j>1){
	$i=1;
	while($i<=$j){
	 echo "$i*$j=".$i*$j." ";
	 $i++;
	}
	echo '<br>';
 $j--;
}
echo"<hr>";
/*
 打印反三角
*/
for($j=1;$j<=5;$j++){
	for($i=0;$i<5;$i++){
	  echo   $i<5-$j?"_":"*";
	}
	echo"<br>";
}
echo"<hr>";
/*
 打印倒反三角
*/
for($j=5;$j>0;$j--){
	for($i=0;$i<5;$i++){
	  echo   $i<5-$j?"_":"*";
	}
	echo"<br>";
}
echo"<hr>";




//输出0-9
for($i=0;$i<=9;$i++){
  echo"$i";
}
 echo"<hr>";
//输出0.2.4.6.8
for($i=0;$i<=8;$i+=2){
  echo"$i";
}
 echo"<hr>";
//输出9,7,5,3,1
for($i=9;$i>=1;$i-=2){
  echo"$i";
}
echo"<hr>";
//输出0-100的累加和
for($i=0,$sum=0;$i<=100;$i++){
 $sum+=$i;
}
echo "$sum<hr>";

//输出1-10的累积
for($i=1,$sum=1;$i<=10;$i++){
 $sum*=$i;
}
echo"$sum<hr>";

for($sum=0,$i=1,$j=99;$i<=10;$i++,$j--){
     $sum+=$i/$j;
}
echo "$sum<br>";


 $sum=0;$i=1;$j=99; 
while($i<=10){
  $sum+=$i/$j;
  $i++;
  $j--;
}
echo"$sum<br>";

//while死循环
$i=0;
while(true){
  if($i>=10){break;}
  echo"$i";
  $i++;
}
echo"<hr>";
//for死循环
$i=0;
for(;;){
  if($i>=10){break;}
  echo"$i";
  $i++;
}
echo"<hr>";
//打印棋盘
for($j=1;$j<=10;$j++){
 for($i=1;$i<=10;$i++){
   echo ($i+$j)%2?"<div style='display:inline-block;width:30px;height:30px;background:#de56de'></div>":"<div style='box-sizing:border-box;display:inline-block;width:30px;height:30px;border:1px solid #de56de'></div>";
 }
 echo"<br>";
}

//打印3位水仙花数
for($i=100;$i<1000;$i++){
  $ge=$i%10;
  $shi=($i%100-$ge)/10;
  //$bai=($i-$ge-$shi)/100;
  $bai=(int)($i/100);//强制转换
    if($i===($ge*$ge*$ge+$shi*$shi*$shi+$bai*$bai*$bai)){
     echo "$i &nbsp;";
  }
}
echo"<hr>";
//从2000年开始打印出10个闰年
$year=2000;
$i=0;
for(;;){
  if(($year%4==0&&$year%100!=0)||($year%400==0)){
	   if($i>=10){
	   break;
	  }
    $i++;
	echo($year.'<hr>') ;
  }
   $year++;
}
//质数判断
for($i=2;$i<=99;$i++){
  for($j=2;$j<=$i-1;$j++){
   //$i即将要判断是否为质数
    if($i%$j==0){
	  break;
	}
  }
  if($i==$j){
	echo"$j<br>";
  }
}

//100以上10个质数判断

$c=0;
for($i=100;;$i++){
  for($j=2;$j<=$i-1;$j++){
   //$i即将要判断是否为质数
    if($i%$j==0){
	  break;
	}
  }
  if($i==$j){
	echo"$j<br>";
	$c++;
	if($c>=10){
	 break;
	}
  }
}


?>