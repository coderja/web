$(()=>{
	//查找id为txtName的文本框
	var txtName=document.getElementById("txtName");
	var txtPwd=document.getElementById("txtPwd");
	//为txtName添加失去焦点事件
	txtName.onblur=e=>{
		checkName(e.target);//当前触发事件的文本框
	}
	function checkName(txt){
		return new Promise(callback=>{
			ajax({
				type:"post",
				url:"data/routes/users/checkName.php",
				data:"uname="+txt.value.trim(),
				dataType:"text"
			}).then(text=>{
				if(text=="false")
					alert("用户名已存在!");
				else
					callback();
			})
		})
	}
	//查找id为btnReg的按钮,绑定单击事件
	document.getElementById("btnReg").onclick=()=>{
		checkName(txtName)
		.then(()=>{
			ajax({
				type:"post",
				url:"data/routes/users/register.php",
				data:"uname="+txtName.value.trim()+"&upwd="+txtPwd.value.trim(),
				dataType:"text"
			}).then(()=>{
				//注册成功，跳转回首页
				location="index.html";
			})
		})
	}
})();