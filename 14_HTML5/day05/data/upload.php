<?php
@$file=$_FILES["file"];
var_dump($file);
if($file){
	if($file["error"]>0)
		echo "Error:".$file["error"]."<br>";
	else{
		if(file_exists("../upload/".$file["name"])){
			echo $file["name"]."已存在<br>";
		}else{
			move_uploaded_file(
				$file["tmp_name"],//临时文件的路径
				"../upload/".iconv(//将文件名临时编码为gb2312
					"UTF-8",
					"gb2312",
					$file["name"]
				)//目标路径
			);
			//强调: 两个路径必须都是完整路径(path/filename)
			echo "保存到:"."upload/".$file["name"];
		}
	}
}

