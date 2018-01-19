function $(id){
  return document.getElementById(id)
}
function createXhr(){
  var xhr = null;
  if(window.XMLHttpRequest){
      var xhr = new XMLHttpRequest();
  }else{
      var xhr =new ActiveXObject('Microsoft.Xmlhttp')
  }
  return xhr
}
