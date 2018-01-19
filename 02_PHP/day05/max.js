function max(arr){
var max=arr[0];
for(var i=1;i<arr.length;i++){
  if(arr[i]>max){
     max=arr[i]
  } 
}
return max
}
arr=[1,4,5,8];
max(arr)