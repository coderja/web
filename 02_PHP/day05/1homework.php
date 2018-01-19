<?php

$userList=[
['uid'=>101,'nich'=>'tom','avatar'=>'img1.jpg','registTime'=>15622256352,'isOnline'=>true],
['uid'=>102,'nich'=>'nick','avatar'=>'img1.jpg','registTime'=>15622256365,'isOnline'=>false],
['uid'=>103,'nich'=>'tonny','avatar'=>'img1.jpg','registTime'=>15622256452,'isOnline'=>false],
['uid'=>104,'nich'=>'lucky','avatar'=>'img1.jpg','registTime'=>15622256892,'isOnline'=>true]
];

foreach($userList[0] as $k=>$v){
  echo "$k";
}
echo"<hr>";

for($i=0;$i<count($userList);$i++){
  foreach($userList[$i] as $k=>$v){
  echo "$v";

}
  echo"<hr>";;
}
echo"<table border=1px;>";
for($i=0;$i<count($userList);$i++){
  echo"<tr>";
  echo "<td>".$userList[$i]['uid']."</td>";
  echo "<td>".$userList[$i]['nich']."</td>";
  echo "<td>".$userList[$i]['avatar']."</td>";
  echo "<td>".$userList[$i]['registTime']."</td>";
  echo "<td>".$userList[$i]['isOnline']."</td>";
  echo"</tr>";
}
echo"</table>";
?>