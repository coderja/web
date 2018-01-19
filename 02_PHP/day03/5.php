<?php
/*创建一个变量保存人的年龄，如果是老年人，就输出“欢迎您！老年人”
如果不是老年人。只输出"欢迎您！"
*/
$age = 69;
if( $age > 60){
  
    echo "欢迎您！老年人<br>";

}else{
 
    echo "欢迎您<br>";

};
echo "<hr>";
$text='李若安好，便是晴天';
if($text!==''){
   echo $text;
}else{
   echo "主人很懒";
};
echo "<hr>";
/*创建一个变量保存学生的成绩，如果>=69,输出“及格”否则输出不及格*/
$score = 90;
if( $score >= 80 ){
  echo "优秀";
}else{
	if( $score>=60){
	 echo "及格";
	}else{
	 echo "不及格";
	}
}

?>