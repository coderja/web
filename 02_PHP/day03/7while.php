<?php
   $i=0;
   $j=2;
  while($i<10){
    echo  ($i-$j)."<hr>";
    $i++;
}

$i = 0;
while( $i<10 ){
  echo "$i<br>";
  $i++;
}
$i = 0;
while( $i<99 ){
  echo "$i<br>";
  $i += 2;
}

$i = 9;
while($i>0){
  echo "$i<br>";
  $i -= 2;
}

$i = 1;
#$j=99;
while( $i<=10 ){
 # echo "$i/$j<br>";
  echo "$i/".(100-$i)."<br>";
  $i++;
 # $j--;
}

#1+2+3+...100的和
#1*2*3*4...100的积

$i = 1;
$sum = 0;
while( $i<=100 ){
 $sum += $i;
 $i++;
};
echo "$sum<br>";


$i = 1;
$sum = 1;
while( $i<=10 ){
  $sum *= $i;
  $i++;
}
echo "$sum<br>";



$i=1;
$d='';
while($i<=10){
  $d.='※';
  $i++;
}
echo "$d<hr>";

$i=0;
while($i<50){
  echo "*";
  $i++;
  if($i%10===0){
   echo '<br>';
  }
};

$j=1;
while($j<6){
	$i=1;
	$d='';
	while($i<=10){
		$d.='※';
		$i++;
	}
	echo "$d<br>";
    $j++;
}

$j=1;
while($j<=9){
	$i=1;
	$d="";
	while($i<=$j){
		$d.=$i."*"."$j=".($i*$j)." ";
		$i++;
	}
	echo "$d<br>";
    $j++;
}



?>