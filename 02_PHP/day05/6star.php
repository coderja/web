<?php
echo"star.php";
echo"<br>";
$r=$_REQUEST['row'];
$c=$_REQUEST['col'];
for($j=1;$j<=$r;$j++){
	  for($i=1;$i<=$c;$i++){
		 echo ($j+$i)%2?"☋":"☊";
	  }
	  echo "<br>";
}


//将打印星星封装为函数
function printStar($r,$c){
	for($j=1;$j<=$r;$j++){
	  for($i=1;$i<=$c;$i++){
		 echo ($j+$i)%2?"☋":"☊";
	  }
	  echo "<br>";
	}
}
printStar(5,8);



?>