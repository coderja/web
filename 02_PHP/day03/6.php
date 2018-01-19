<?php
/*数据库中的订单支付方式存储为数字，
1-银行卡支付 
2-支付宝支付
3-微信支付
4-京东白条
其他未知支付
*/
/*$payWay = 5;
if($payWay == 1){
  echo "银行卡支付";
}else if( $payWay == 2 ){
  echo "支付宝支付";
}else if( $payWay == 3 ){
  echo "微信支付";
}else if( $payWay == 4 ){
  echo "京东白条支付";
}else{
  echo "其他支付";
};*/

$payWay = 4;
switch( $payWay ){
      case 1:
      echo "支付宝支付";
      break;
     
	  case 2:
      echo "微信支付";
      break;
	  
	  case 3:
	  echo "京东白条支付";
	  break;
	  
	  case 4:
	  echo "银行卡支付";
	  break;
      
	  default:
      echo "其他支付";
    }
?>