(()=>{
	//加载首页商品
	ajax({
		type:"get",
		url:"data/routes/products/index_product.php"
	}).then(products=>{
		console.log(products);
		var html="";
		//遍历每个商品
		for(var i=0;i<products.recommended.length;i++){
			var p=products.recommended[i];
			if(i<2){
				html+=`
					<div>
						<div class="desc">
							<p class="name">${p.title}</p>
							<p class="details">${p.details}</p>
							<p class="price">¥${p.price}</p>
							<a href="${p.href}" class="view">查看详情</a>
						</div>
						<img src="${p.pic}">
					</div> 
				`;
			}else if(i==2){
				html+=`
					<div>
						<div class="desc">
							<p class="name">${p.title}</p>
							<p class="price">¥${p.price}</p>
							<a href="${p.href}" class="view">查看详情</a>
						</div>
						<img src="${p.pic}">
					</div>	
				`
			}else{
				html+=`
					<div class="product">
						<img src="${p.pic}">
						<p class="name">${p.title}</p>
						<p class="price">¥${p.price}</p>
						<a href="${p.href}">查看详情</a>
					</div>	
				`			
			}
		}
		//遍历结束后
		//设置id为f1下的class为floor-content的div的内容为html
		document.querySelector("#f1>.floor-content")
			      .innerHTML=html;
         html2=""
		for(var i=0;i<products.new_arrival.length;i++){
			var s=products.new_arrival[i];
			if(i<2){
				html2+=`
					<div>
						<div class="desc">
							<p class="name">${s.title}</p>
							<p class="details">${s.details}</p>
							<p class="price">¥${s.price}</p>
							<a href="${s.href}" class="view">查看详情</a>
						</div>
						<img src="${s.pic}">
					</div> 
				`;
			}else if(i==2){
				html2+=`
					<div>
						<div class="desc">
							<p class="name">${s.title}</p>
							<p class="price">¥${s.price}</p>
							<a href="${s.href}" class="view">查看详情</a>
						</div>
						<img src="${s.pic}">
					</div>	
				`
			}else{
				html2+=`
					<div class="product">
						<img src="${s.pic}">
						<p class="name">${s.title}</p>
						<p class="price">¥${s.price}</p>
						<a href="${s.href}">查看详情</a>
					</div>	
				`			
			}
		}
		document.querySelector("#f2>.floor-content")
			      .innerHTML=html2;

		html3=""
		for(var i=0;i<products.top_sale.length;i++){
			var m=products.top_sale[i];
			console.log(m)
			if(i<2){
				html3+=`
					<div>
						<div class="desc">
							<p class="name">${m.title}</p>
							<p class="details">${m.details}</p>
							<p class="price">¥${m.price}</p>
							<a href="${m.href}" class="view">查看详情</a>
						</div>
						<img src="${m.pic}">
					</div> 
				`;
			}else if(i==2){
				html3+=`
					<div>
						<div class="desc">
							<p class="name">${m.title}</p>
							<p class="price">¥${m.price}</p>
							<a href="${m.href}" class="view">查看详情</a>
						</div>
						<img src="${m.pic}">
					</div>	
				`
			}else{
				html3+=`
					<div class="product">
						<img src="${m.pic}">
						<p class="name">${m.title}</p>
						<p class="price">¥${m.price}</p>
						<a href="${m.href}">查看详情</a>
					</div>	
				`			
			}
		}
		document.querySelector("#f3>.floor-content")
			      .innerHTML=html3;
	})
})();