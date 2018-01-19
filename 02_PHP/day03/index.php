<?php
  echo "<style>
  body{
   color:#f00;
  }
 </style>";
   $j = 1;
   while( $j<=9 ){
		$i = 1; 
		while( $i<=$j ){
		  echo "$i*$j=".$i*$j.' ';
		  $i++;
		}
     echo "<br>";
	  $j++;
	};
echo" <br><br>";

  
   $j=1;
   do{
	$i=1;
    do{
	  echo "$i*$j=".$i*$j.' ';
	  $i++;
	}while($i<=$j);
	echo '<br>';
	$j++;
   }while($j<=9);

#echo" <br><br>";

/*for($j=9;$j>0;$j--){
	for($i=1;$i<=$j;$i++){
	  echo "$j*$i=".$i*$j." ";
	 }
	 echo '<br>';
	}*/

$j=9;
while($j>0){
   $i=1;
   while($i<=$j){ 
    echo "$j*$i=".$i*$j.' ';
    $i++;
   }
   echo '<br>';
$j--;
}

?>