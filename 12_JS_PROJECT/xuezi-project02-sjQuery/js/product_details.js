$(()=>{
	if(location.search!=""){
		ajax({
			type:"get",
			url:"data/routes/products/getProductById.php",
			data:location.search.slice(1)
		}).then(data=>{
			var {product:p,family,imgs}=data;
			var div=
				document.querySelector("#show-details");
			var title=div.querySelector("h1");
			var subtitle=div.querySelector("h3>a");
			var price=div.querySelector(
				".price>.stu-price>span"
			);
			var promise=div.querySelector(
				".price>.promise>b"
			);
			title.innerHTML=p.title;
			subtitle.innerHTML=p.subtitle;
			price.innerHTML="¥"+p.price;
			promise.innerHTML=p.promise;
			var spec=div.querySelector(".spec>div");
			var html="";
			for(var laptop of family){
				html+=`
				<a href="product_details.html?lid=${laptop.lid}" class="${p.lid==laptop.lid?"active":""}">${laptop.spec}</a>`
			}
			spec.innerHTML=html;

			//在div下找class为account的p为其绑定单击事件
			div.querySelector("p.account").onclick=e=>{
				//如果e.target的class是number-reduce或number-add
				if(e.target.className=="number-reduce"
						||e.target.className=="number-add"){
					//获得目标元素旁边的input
					var input=
						e.target.parentNode.children[2];
					//获取input的值转为整数保存到n中
					var n=parseInt(input.value);
					//如果目标元素的class是number-add,就n+1
					if(e.target.className=="number-add")
						n++;
					else if(n>1) n--;//否则如果n>1，就n-1
					input.value=n;//将n保存回input的值中
				}
			}
			//在div下找class为shops下的class为cart的a绑定单击事件
			div.querySelector(".shops>.cart").onclick=e=>{
				//向data/routes/users/isLogin.php发送get请求
				ajax({
					type:"get",
					url:"data/routes/users/isLogin.php"
				}).then(data=>{//收到响应data后:
					if(data.ok==1){//如果data的ok为1
						//获得当前a的父元素的前一个兄弟下的第三个子元素input
						var input=e.target.parentNode
														.previousElementSibling
														.children[2];
						//获得input的值转为整数，保存在count
						var count=parseInt(input.value);
						//将location的search按=切割，取第二段保存在变量lid中
						var lid=location.search.split("=")[1];
						//向data/routes/cart/addToCart.php发送get请求,设置data为"lid=lid&count=count",设置dataType为text
						ajax({
							type:"get",
							url:"data/routes/cart/addToCart.php",
							data:"lid="+lid+"&count="+count,
							dataType:"text"
						}).then(()=>{
							//收到响应后:提示:加入购物车成功!
							alert("加入购物车成功!");
							input.value=1;//重置input的值为1
						})
					}else{//否则
						var url=location.href;
						//将back参数值中的: /等保留字转为单字节
						url=encodeURIComponent(url);
						location="login.html?back="+url;
					}
				})
			}

			/********放大镜**********/
			var mImg=document.getElementById("mImg");
			mImg.src=p.md;
			var lgDiv=
				document.getElementById("largeDiv");
			lgDiv.style.backgroundImage=
				"url("+imgs[0].lg+")";
			var html="";
			for(var pic of imgs){
				html+=`
					<li class="i1"><img src="${pic.sm}" data-md="${pic.md}" data-lg="${pic.lg}"></li>	
				`
			}
			var icon_list=
				document.getElementById("icon_list");
			icon_list.innerHTML=html;
			var aBackward=document.querySelector(
				"#preview>h1>a:nth-child(1)"
			);
			var aForward=aBackward.nextElementSibling;
			if(imgs.length<=5) 
				aForward.className="forward disabled";
			var moved=0, LIWIDTH=62;
			aForward.onclick=e=>{
				if(!e.target.className.endsWith("disabled")){
					moved++;
					icon_list.style.left=-moved*LIWIDTH+20+"px";
					//有左移的li，就可以后退
					if(moved>0) aBackward.className="backward";
					//如果已经将右侧多余的li移动完了，就禁止前进
					if(moved==imgs.length-5)
						e.target.className="forward disabled";
				}
			};
			aBackward.onclick=e=>{
				if(!e.target.className.endsWith("disabled")){
					moved--;
					icon_list.style.left=-moved*LIWIDTH+20+"px";
					//只要右侧多余的li没有被移动完,就可继续前进
					if(moved<imgs.length-5)
						aForward.className="forward";
					//如果没有左移的li，则不能后退
					if(moved==0)
						e.target.className="backward disabled";
				}
			}
			
			icon_list.onmouseover=e=>{
				if(e.target.nodeName=="IMG"){
					var md=e.target.dataset.md,
						  lg=e.target.dataset.lg;
					mImg.src=md;
					lgDiv.style.backgroundImage=
						"url("+lg+")";
				}
			}

			var superMask=
				document.getElementById("superMask");
			var mask=document.getElementById("mask");
			superMask.onmouseover=e=>{
				mask.style.display=
					lgDiv.style.display="block";
			}
			superMask.onmouseout=e=>{
				mask.style.display=
					lgDiv.style.display="none";
			}
			var MSIZE=175;
			superMask.onmousemove=e=>{
				var x=e.offsetX,y=e.offsetY;
				var top=y-MSIZE/2,left=x-MSIZE/2;
				if(top<0) top=0;
				else if(top>175) top=175;
				if(left<0) left=0;
				else if(left>175) left=175;
				mask.style.cssText=
					"display:block;top:"+top+"px;left:"+left+"px";
				lgDiv.style.backgroundPosition=
					-16/7*left+"px "+(-16/7*top)+"px"
					//x         y
			}
		})
	}
})();