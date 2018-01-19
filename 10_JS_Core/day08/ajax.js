function ajax({type,url,data,dataType}){
	return new Promise(function(callback){
		dataType=dataType||"json";
		//1. 获得xhr对象
		var xhr=new XMLHttpRequest();
		//2. 定义连接url,打开连接
		if(type.toLowerCase()=="get"&&data!==undefined)
			url+="?"+data;
		xhr.open(type,url,true);
		//3. 定义回调函数
		xhr.onreadystatechange=()=>{
			if(xhr.readyState==4 && xhr.status==200){
				if(callback!==undefined){
					if(dataType.toLowerCase()=="json")
						callback(JSON.parse(xhr.responseText));
					else
						callback(xhr.responseText);
				}
			}
		}
		if(type.toLowerCase()=="get")
			//4. 发送请求:
			xhr.send();
		else{
			A
			//增加：更改请求消息头
			xhr.setRequestHeader(
				"Content-Type",
				"application/x-www-form-urlencoded"
			);
			//4. 发送请求
			xhr.send(data);
		}
	});
}

/*function ajax({type,url,data,dataType,callback}){
		dataType=dataType||"json";
		//1. 获得xhr对象
		var xhr=new XMLHttpRequest();
		//2. 定义连接url,打开连接
		if(type.toLowerCase()=="get"&&data!==undefined)
			url+="?"+data;
		xhr.open(type,url,true);
		//3. 定义回调函数
		xhr.onreadystatechange=()=>{
			if(xhr.readyState==4 && xhr.status==200){
				if(callback!==undefined){
					if(dataType.toLowerCase()=="json")
						callback(JSON.parse(xhr.responseText));
					else
						callback(xhr.responseText);
				}
			}
		}
		if(type.toLowerCase()=="get")
			//4. 发送请求:
			xhr.send();
		else{
			A
			//增加：更改请求消息头
			xhr.setRequestHeader(
				"Content-Type",
				"application/x-www-form-urlencoded"
			);
			//4. 发送请求
			xhr.send(data);
		}
}*/