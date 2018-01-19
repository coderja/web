var now = new Date();
s=now.getSeconds();
m=now.getMinutes();
h=now.getHours();
console.log(s,m,h)
h>12&&(h-=12)
var sDeg = s/60*360; 
var mDeg = (m*60+s)/3600*360;
var hDeg = (h*3600+m*60+s)/(3600*12)*360;
console.log(sDeg,mDeg,hDeg)

//1.获得第二个样式表对象
var sheet=document.styleSheets[1];
//2.获得时针分针秒针的动画对应的规则
var sRule = sheet.cssRules[4];
var mRule = sheet.cssRules[5];
var hRule = sheet.cssRules[6];
//2.1获得每个指针开始和结束样式规则
var srule_start=sRule.cssRules[0];
var srule_end=sRule.cssRules[1];
var mrule_start=mRule.cssRules[0];
var mrule_end=mRule.cssRules[1];
var hrule_start=hRule.cssRules[0];
var hrule_end=hRule.cssRules[1];
//3修改开始和结束样式规则中的旋转角度
srule_start.style.transform='rotate('+sDeg+'deg)';
srule_end.style.transform='rotate('+(sDeg+360)+'deg)';
mrule_start.style.transform='rotate('+mDeg+'deg)';
mrule_end.style.transform='rotate('+(mDeg+360)+'deg)';
hrule_start.style.transform='rotate('+hDeg+'deg)';
hrule_end.style.transform='rotate('+(hDeg+360)+'deg)';

