/**
 * Created by web-01 on 2017/11/23.
 */
/*
*
*/
onmessage=function(e){
      console.log('接收到主线程发来的数据:'+e.data)
}

function isPrime(num){
   //让程序停止5s
    var start  = new Date().getTime();
    do{
        var end = new Date().getTime()
    }while(end-start<=5000)
    for(var i=2;i<num;i++){
       if(num%i==0){
           break;
       }
   }
       return i==num
}

console.time()
var ps = isPrime(10)
postMessage(ps)
console.timeEnd()