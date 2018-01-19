<?php
$weight = 80;

$height = 1.8;

$klt = $weight/($height*$height);

$result = $klt > 25 ?"胖":(
      $klt < 20?"瘦" : "正常"
	);
echo "科莱托指数：$result";
?>
SELECT ename,dname FROM emp WHERE emp INNER JOIN dept ON did=depId;
SELECT ename,dname FROM emp WHERE emp LEFT OUTER JOIN dept ON did=depId;