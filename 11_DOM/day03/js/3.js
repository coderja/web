var form = document.forms[0]
//Step1:为name为username和pwd的文本框绑定获得焦点事件
form.username.onfocus=getFocus;
form.pwd.onfocus=getFocus;
function getFocus(){
  //this->当前文本框
  //当前文本框边框加粗
  this.className="txt_focus";
  //清除旁边div的class
  var div=this.parentNode
      .nextElementSibling
      .firstElementChild;
  div.className="";
}
form.username.onblur=function(){
  vali(this,/^\w{1,10}$/);
}
function vali(txt,reg){
  //清除当前文本框的class
  txt.className="";
  //获取旁边div
  var div=txt.parentNode
    .nextElementSibling
    .firstElementChild;
  //用reg测试当前文本框的内容
  //如果通过,就修改div的class为vali_success
  if(reg.test(txt.value)){
    div.className="vali_success";
  //否则修改div的class为vali_fail
    return true;
  }else{
    div.className="vali_fail";
    return false;
  }
}
form.pwd.onblur=function(){
  vali(this,/^\d{6}$/);
}
form.elements[form.length-2].onclick=()=>{//获取form表单里倒数第二个元素提交按钮
    var rName = vali(form.username,/^\w{1,10}$/);
    var rPwd = vali(form.pwd,/^\d{6}$/);
    if(!rName){
	  form.username.focus()
	}else if(!rPwd){
	  form.pwd.focus() 
	}else{
	  form.submit()  
	}
}
document.onkeydown=function(e){
  var key = e.keyCode||e.which;
	  console.log('按下了'+key);
  if(key === 13){
	  var rName = vali(form.username,/^\w{1,10}$/);
	  var rPwd = vali(form.pwd,/^\d{6}$/);
	  if(rName&&rPwd)
		form.submit()
  }
form.elements[form.length-1].value=key
}
