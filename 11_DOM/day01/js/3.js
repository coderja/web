(()=>{
 var table = document.getElementById('data');

    table.tBodies[0].onclick=e=>{
	  var btn = e.target;
      //if(btn.nodeName=='BUTTON'&&btn.parentNode==btn.parentNode.parentNode.children[2]){
      if(btn.nodeName=='BUTTON'&&(btn.innerHTML=='+'||btn.innerHTML=='-')){
	  var span = btn.parentNode.children[1];
      var i = parseInt(span.innerHTML)
      if(btn.innerHTML=='+')
		  i++;
	  else if(i>1)
		  i--;
        span.innerHTML=i;
	  //计算小计
	  var price = btn.parentNode.previousElementSibling.innerHTML.slice(1);
	  var  subTotal = i * price;
      btn.parentNode.nextElementSibling.innerHTML='￥'+subTotal.toFixed(2);
      //计算总计
	  var sum=0;
	  var tds = document.querySelectorAll('tbody td:last-child');
	  for(var td of tds){
	    sum+=parseInt(td.innerHTML.slice(1))
	  }
	  document.querySelector('tfoot td:last-child').innerHTML=sum.toFixed(2);
	}
 }
})();