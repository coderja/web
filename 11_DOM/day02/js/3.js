var tabs = document.querySelectorAll('[data-toggle=tab]');
console.log(tabs)
for(tab of tabs){
tab.onclick=e=>{
    tab=e.target;
    var divs=document.querySelectorAll('#container>div');
    for(var div of divs)
      div.style.zIndex='';
    
    var i=tab.href.lastIndexOf('#');
    var id = tab.href.slice(i);
    console.log(id)
    document.querySelector(id).style.zIndex=10;
    
  }
}