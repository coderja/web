<?php
function arraySum($arr){
      $sum=0;
	  foreach($arr as $v){//for($i=0,$sum=0;$i<count($arr);$i++){
       $sum+=$v;//$sum+=$arr[$i];
    }
	return $sum;
}
$rr=[1,10,29,20,30,20];
$result = arraySum($rr);
echo "$result";
echo"<br>";




//创建一个函数求平均数
function arrAvg($arr){
  $sum=0;
  for($i=0;$i<count($arr);$i++){
    $avg = ($sum+=$arr[$i])/count($arr);
   }
   return $avg;
}
$result = arrAvg([10,20,30,40]);
echo $result;


?>