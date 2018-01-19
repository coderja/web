//分页函数
function loadProducts(pno=0){
   ajax({
    type:'get',
    url:'data/routes/products/getProductsByKw.php',
    data:location.search.slice(1)+'&pno='+pno
	}).then(output=>{
	var  show_list = document.getElementById('show-list');
    var html=''
	for(var p of output['data']){
	 html+=`
	      <li>
            <a href="product-details.html?lid=${p.lid}">
              <img src="${p.md}" alt="">
            </a>
            <p>
              ¥<span class="price">${p.price}</span>
              <a href="product-details.html?lid=${p.lid}">${p.title}</a>
            </p>
            <div>
              <span class="reduce">-</span>
              <input type="text" value="1">
              <span class="add">+</span>
              <a href="javascript:;" class="addCart">加入购物车</a>
            </div>
          </li>`
        show_list.innerHTML=html;
	 }
	 var pageNo = parseInt(output['pageNo']);
	 var pageCount = output['pageCount']
		 console.log(pageCount,pageNo)
	 var str = `
	   <a href="javascript:;" class="previous">上一页</a>
	 `
		 for(var i=1;i<=pageCount;i++){
	      str+=`<a href="javascript:;">${i}</a>`
	 }
      str+=`<a href="javascript:;" class="next">下一页</a>`;
    var divpages = document.getElementById('pages');
	divpages.innerHTML=str;
	divpages.children[pageNo+1].className='current';
    //分类功能
	divpages.onclick=e=>{
	  if(e.target.nodeName=='A'){
	    var a = e.target;
		if(a!=divpages.children[0]&a!=divpages.lastElementChild){
		  if(a.className!='current'){
		    var pno = a.innerHTML-1
            loadProducts(pno)
		  }
		}else{
		  if(!a.className.endsWith('disabled')){
			  var curr = divpages.querySelector('.current')
		    if(a.className.startsWith('next')){
              loadProducts(curr.innerHTML)
			}else{
			  loadProducts(curr.innerHTML-2)  
			}
		  }
		}
	  }
	}
    if(divpages.children.length==3){
	  divpages.children[0].className='previous disabled';
	  divpages.lastElementChild.className='next disabled';
	}else if(divpages.children[pageNo+1].previousElementSibling==divpages.children[0]){
	  divpages.children[0].className='previous disabled';
	  console.log(divpages.children[0]);
	}else if(divpages.children[pageNo+1].nextElementSibling==divpages.lastElementChild){
	  divpages.lastElementChild.className='next disabled';
	}

   /*function(divPages,pageCount,pageNo){
	  var prev = divpages.children[0];
	  var next = divpages.lastElementChild;
	  if(pageNo!=0&&pageNode!=pageCount-1){
	    prev.className='previous';
		next.className='next';
	  }else{
	    if(pageNo==0)
     		pre.className='previous disabled';
 		if(pageNo==pageCount-1)
           next.className='next disabled';
	  }
	}*/
    
   })
}
//加载购物车
function loadCart(){
    ajax({
	    type:'get',
	    url:'data/routes/cart/getCart.php'
	}).then(data=>{
		var html='';
		for(var p of data){
		  html+=`
		    <div class="item" data-iid="${p.iid}">
              <span>${p.title}</span>
              <div>
                <span class="reduce">-</span>
                <input type="text" value="${p.count}">
                <span class="add">+</span>
              </div>
              <p>
                <span>￥${(p.price*p.count).toFixed(2)}</span>	
              </p>
            </div>	  
		  `
		 document.querySelector('#cart>.cart_content').innerHTML=html
		 document.getElementById('total').innerHTML=total.toFixed(2);
		}
	 
	})
}
(()=>{
  loadProducts();
  loadCart();
  //为id为show-list的ul绑定单击事件
    document.querySelector('#show-list').onclick=e=>{
		console.log('chu')
	//如果目标元素的class是reduce或者add
	    if(e.target.className=='reduce'||e.target.className=='add'){
		   //找到目标元素旁边的input
		   var input = e.target.parentNode.children[1];
		  console.log(input)
		   //获得input的值转为整数
		   var n = parseInt(input.value)
			   console.log(n)
		   //如果目标元素的ClassName为add
		   if(e.target.className=='add'){
			//将n+1
			   n++
			}else if(n>1){ //否则如果n>1
			//将n-1
			   n--
			}
			//将n保存在input的值中 
			 input.value=n
	    }else if(e.target.className=='addCart'){
			ajax({
			     type:'get',
                 url:'data/routes/users/isLogin.php'
		    }).then(data=>{
			     if(data.ok==0){
				   var url = location.href;
				   url = encodeURIComponent(url);
				   location='login.html?back='+url
	    		}else{
				    var lid = e.target.parentNode
						       .parentNode.children[0].href.split('=')[1];
					var count = e.target.parentNode.children[1].value;
					ajax({
						type:"get",
						url:"data/routes/cart/addToCart.php",
						data:"lid="+lid+"&count="+count,
						dataType:"text"
					}).then(()=>{
						e.target.parentNode.children[1]
										.value=1
						alert("添加成功");
						loadCart();
					})
				}
			})
	    }
	}	 
	document.querySelector("#cart>.cart_content")
		.onclick=e=>{
		if(e.target.className=="reduce"
				||e.target.className=="add"){
			var n=parseInt(
				e.target.parentNode.children[1].value
			);
			e.target.className=="add"?(n++):(n--);
			var iid=
			 e.target.parentNode.parentNode.dataset.iid;
			ajax({
				type:"get",
				url:"data/routes/cart/updateCart.php",
				data:"iid="+iid+"&count="+n,
				dataType:"text"
			}).then(loadCart);
		}
	}
	document.querySelector("#cart>.title>a")
		.onclick=e=>{
		e.preventDefault();
		ajax({
			type:"get",
			url:"data/routes/cart/clearCart.php",
			dataType:"text"
		}).then(()=>{
			document.querySelector(
				"#cart>.cart_content"
			).innerHTML="";
			document.getElementById("total")
						.innerHTML="0.00";
		})
	}
})()
