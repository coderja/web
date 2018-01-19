(()=>{
var txtname = document.getElementsByName('username')[0]; 
var txtpwd = document.getElementsByName('pwd')[0]; 
console.log(txtname,txtpwd)
txtname.onfocus=txtpwd.onfocus=function(){
  this.className='txt_focus';
  this.parentNode.nextElementSibling.children[0].className='';
}

txtname.onblur=e=>vali(e.target,/^\w{1,10}$/);
function vali(txt,reg){
   txt.className='';
  div =txt.parentNode.nextElementSibling.children[0]
   if(reg.test(txt.value)&&(txt.value)!==''){
     div.className='vali_success';
   }else{
     div.className='vali_fail';
   }
}
txtpwd.onblur=e=>vali(e.target,/^\d{6}$/);


})()