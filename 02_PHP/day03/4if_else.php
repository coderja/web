<?php
/*
$price = 110;

$count = 5;

$total = 500;

$sum = $price * $count;

#$sum>500&&$sum*=0.8;
if( $sum > 500 ){
  
  $sum *= 0.8;
  echo "您可以享受我们的折扣<br>";
   
 }; 

$change = $total - $sum;

echo "应收金额 $sum <br>找零$change";
*/
$price = 200;

$count = 5;

$total = 500;

$sum = $price * $count;
if($sum>=500){
  $sum*=0.8;
};

if( $sum>$total ){
   
   echo "还差".($sum-$total);

}else{

  echo "应找零".($total-$sum) ;
}




?>