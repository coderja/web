function $(id){
  return document.getElementById(id)
}

/*function createXhr(){
   var xhr=null;
   if(window.XMLHttpRequest){
    var xhr = new XMLHttpRequest();
   }else{
    var xhr = new ActiveXobject('Mircrosoft.XMLHttp')  
   }
   return xhr
}*/
   function createXhr(){
	var xhr=null;
	if(window.XMLHttpRequest){
		var xhr = new XMLHttpRequest()
	}else{
		var xhr = new ActiveXObject('Mircrosoft.XMLHttp')
	}
	return xhr
}