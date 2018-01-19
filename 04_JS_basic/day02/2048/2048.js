var data=null,
    RN=4,
    CN=4;
//启动游戏
function start(){
  //创建空数组
  data=[];
  //将data初始化为4*4个0的二维数组
   for(var r=0;r<RN;r++){
        data.push([]);
       for(var c=0;c<CN;c++){
           data[r][c]=0;
       }
   }
   randomNum();
   randomNum();
   upview()
      console.log(data.join('\n'))
}
//随机生成数
function randomNum(){
  //反复
  while(true){
    //随机生成行号r
        var r=parseInt(Math.random()*RN);
        //随机生成类号c
        var c=parseInt(Math.random()*CN);
    //如果data中r行c列的值为0
    if(data[r][c]==0){
        //在data中r行c列赋值一个2或4
        data[r][c]=Math.random()<0.5?2:4;
        break;
    }
  }
}
//将数组内容更新到页面div中
function upview(){
   //遍历data
   for(var r=0;r<RN;r++){
      for(var c=0;c<CN;c++){
         //查找和rc位置对应的div
         var div=document.getElementById('c'+r+c);
        //如果当前元素值不为0
        if(data[r][c]!=0){
        //设置div的内容为当前元素值
           div.innerHTML=data[r][c];
           div.className+=' n'+data[r][c];
        }else{
            div.innerHTML='';
            div.className='cell';
        }
      }
   }
}
//左移所有行
function moveLeft(){
    var before = String(data);
  //遍历data中每一行
  for(var r=0;r<RN;r++){
    //左移第r行
    moveLeftRow(r);
  //遍历结束
  }
   var after=String(data)
   if(before!=after){
   randomNum();
  //更新界面
   upview();
   }
}
function moveLeftRow(r){
       
}
start();

 