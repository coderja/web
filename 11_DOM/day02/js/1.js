spans = document.querySelectorAll('ul.tree li span');
for(span of spans){
   span.onclick=e=>{
       var span=e.target;
       if(span.className=='open'){
          var ul= document.querySelector('.open+ul')
           span.className='';         
    }else{
           openSpan = document.querySelector('ul span.open');
           if(openSpan)
               openSpan.className="";
           span.className='open';
           
       }
   }
}