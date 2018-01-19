var chbAll = document.querySelector('table thead>tr input[type="checkbox"]');
chbAll.onclick=e=>{
    var chAll = document.querySelectorAll('table tbody input[type="checkbox"]');
    for(var ch of chAll){
      ch.checked=chbAll.checked;
    }
}

var chbs = document.querySelectorAll('table tbody input[type="checkbox"]');
  for(var cb of chbs)
  cb.onclick=e=>{  
   var chd=e.target;
   var unchecked = document.querySelector('table tbody td:first-child>input:not(:checked)')
    if(unchecked)
        chbAll.checked=false;
    else
        chbAll.checked=true;
  }