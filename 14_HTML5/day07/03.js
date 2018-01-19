/**
 * Created by web-01 on 2017/11/23.
 */
onmessage=function(e){
    var val = e.data;
    for(var sum=0,i=0;i<=val;i++){
       sum+=i;
    }

  postMessage(sum);
}
