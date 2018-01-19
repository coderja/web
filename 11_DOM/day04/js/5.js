//启动拖拽
var offsetX,offsetY,canMove=false;
pop.onmousedown=e=>{
  canMove=true;
  offsetX=e.offsetX;
  offsetY=e.offsetY;
}
//移动过程中
document.onmousemove=e=>{
 if(canMove){
	  var top = e.clientY-offsetY;
	  var left = e.clientX-offsetX;
	  pop.style.cssText='left:'+left+'px;top:'+top+'px';
 }
}
//停止拖拽
pop.onmouseup=()=>{
  canMove=false;
}
document.onmouseout=()=>{
	canMove=false;
}