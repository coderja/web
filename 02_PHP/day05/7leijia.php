<?php
 function leijia($r){
     for($i=0,$sum=0;$i<=$r;$i++){
	    $sum+=$i;
	 }
      echo "$sum<br>";
}
leijia(50);
leijia(100);
leijia(150);
echo"<hr>";

//求和
function add($r,$d){
   $i=$r;
   $j=$d;
   $sum=$j+$i;
   echo "$sum<br>"; 
}
add(100,20);
add(32,15);
add(12,15);
add(45,56);
add(45,62);
echo '<hr>';
//找最大数
function ma($i,$j,$k){
   $max=$i>$j?'$i':"$j";
   return $max>$k?"max":"$k";
 }
echo ma(10,20,30);
echo "<hr>";

//找最大数
function myMax($arr){
 $max=$arr[0];
 for($i=1;$i<count($arr);$i++){
      if($arr[$i]>$max){
	    $max=$arr[$i];
	  } 
  }
  return $max;
}
 $result = myMax([10,90,40,50,89]);
 echo $result;

//max方法
echo"<hr>";
$ff=[4,5,6,7];
echo max($ff);

?>