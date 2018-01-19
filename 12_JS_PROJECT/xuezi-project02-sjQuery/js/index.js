$(()=>{
	//加载首页商品
	ajax({
		type:"get",
		url:"data/routes/products/index_product.php"
	}).then(products=>{
		var html="";
		//遍历recommended数组中的每个商品
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
		html="";
		for(var i=0;i<products.new_arrival.length;i++){
			var p=products.new_arrival[i];
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
		//设置id为f2下的class为floor-content的div的内容为html
		document.querySelector("#f2>.floor-content")
			      .innerHTML=html;
		html="";
		for(var i=0;i<products.top_sale.length;i++){
			var p=products.top_sale[i];
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
		document.querySelector("#f3>.floor-content")
			      .innerHTML=html;
	})
})//();