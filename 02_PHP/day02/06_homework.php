<?php
/*>20000高薪
8000<2000中高工资
8000<普通工资*/

$salary=10000;
$result =  $salary>20000 ? '土豪' : 
           ($salary<8000 ?  '中产':  
                           '屌丝');
                         
echo($result);
echo"<br>" ; 
/*体重/身高的平方
20-25正常
20以下偏瘦
25以上偏胖
*/
$weight=100;
$height=1.65;
$klt=$weight/($height*$height);
$result = $klt>25 ? '胖':
          ($klt<20 ? '瘦':
                   '正常');
echo  $klt."体重".$weight."kg身高".$height."m指标".$result
?>