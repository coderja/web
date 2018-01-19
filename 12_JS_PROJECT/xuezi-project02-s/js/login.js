(()=>{
	var txtName=document.getElementById("txtName");
	var txtPwd=document.getElementById("txtPwd");
	document.getElementById("btnLogin").onclick=()=>{
		ajax({
			type:"post",
			url:"data/routes/users/login.php",
			data:"uname="+txtName.value.trim()+"&upwd="+txtPwd.value.trim(),
			dataType:"text"
		}).then(text=>{
			if(text=="false")
				alert("用户名或密码错误!");
			else{
			    if(location.search!==''){
			       location=decodeURIComponent(location.search.slice(6));
				}else{
				   location="index.html";
				}
            }
		})
	};
})();