(()=>{
   if(location.search!=''){
     ajax({
	    type:'get',
		url:"data/routes/products/getProductsById.php",
		data:location.search.slice(1)	
	}).then(data=>{
			console.log(data)
	   /*var p = data.product;
	   var family = data.family;
	   var imgs = data.imgs;*/
	   var {product:p,family,imgs}=data
	   var div=document.querySelector('#show-details');
	   var title=div.querySelector('h1');
	   var subtitle=div.querySelector('h3>a');
	   var price=div.querySelector('.price>.stu-price>span');
	   var promise=div.querySelector('.price>.promise>b');
	   title.innerHTML=p.title;
	   subtitle.innerHTML=p.subtitle;
	   price.innerHTML="¥"+p.price;
	   promise.innerHTML=p.promise;
	   var spec=div.querySelector('.spec>div');
	   var html='';
	   for(var laptop of family){
	             html+=`
		         <a href="product-details.html?lid=${laptop.lid}" 
			     class="${p.lid===laptop.lid?"active":""}">${laptop.spec}</a>	 
		        `
				spec.innerHTML=html;
		        var pbtn = div.querySelector(' p.account ') ;
			pbtn.onclick=e=>{
                  if(e.target.className=='number-reduce'||e.target.className=='number-add')
				   var tar = e.target;
				   var input = tar.parentNode.children[2];
				   var n = parseInt(input.value);
					   if(e.target.className=='number-add')
					   n++;
					   else if(n>1)
					   n--;
					   input.value=n;
			}
			var cart=div.querySelector('.shops a.cart').onclick=e=>{
			   ajax({
					type:'get',
					url:'data/routes/users/isLogin.php'  
			   }).then(data=>{
				    if(data.ok==1){	
						console.log(data)
					  var inValue = e.target.parentNode.previousElementSibling.children[2];
					  var count = parseInt(inValue.value);
					  var lid = location.search.split('=')[1];
					  ajax({
					       type:'get',
							url:'data/routes/cart/addToCart.php',
							data:"lid="+lid+"&count="+count,
						   dataType:'text'
					  }).then(()=>{
					       alert('加入购物车成功');
						   
					  })
					}else{
						   var url = location.href;
						   url = encodeURIComponent(url);
						   location='login.html?back='+url 
						}
				})
			}
	   }

	   /*******放大镜********/
	    var mImg=document.getElementById('mImg');
	    mImg.src=p.md
	    var lgDiv=document.getElementById('largeDiv');
	       lgDiv.style.backgroungImage="url("+imgs[0].lg+")";
	    var html='';
	    for(var pic of imgs){
		  html+=`
		    <li class="i1"><img src="${pic.sm}" data-md="${pic.md}" data-lg="${pic.lg}"></li>	  
		  `
		}
		  icon_list = document.getElementById('icon_list');
		  icon_list.innerHTML=html
		  var aBackward = document.querySelector('#preview>h1>a:nth-child(1)');
		  var aForward = aBackward.nextElementSibling;
		  if(imgs.length<=5){
		     aForward.className='forward disabled';
		  }
		  var moved=0;LIWIDTH=62;
        aForward.onclick=e=>{
			if(!e.target.className.endsWith('disabled')){
				moved++;
		        icon_list.style.left=-moved*LIWIDTH+20+'px';
		        if(moved>0)aBackward.className='backward';
				if(moved==imgs.length-5);
				e.target.className='forward disabled';
			}
		  }
		aBackward.onclick=e=>{
			if(!e.target.className.endsWith('disabled')){
			   moved--;
		       icon_list.style.left=-moved*LIWIDTH+20+'px';
		       if(moved<imgs.length-5){
				  aForward.className='forward';
			   }
			   if(moved==0){
			     e.target.className='backward disabled';
			   }
		    }  
		}
		icon_list.onmouseover=e=>{
		   if(e.target.nodeName=="IMG"){
		     var md = e.target.dataset.md,
				 lg = e.target.dataset.lg;
			     mImg.src=md;
				 lgDiv.style.backgroundImage="url("+lg+")"
		   }
		}
		
		var supMask=document.getElementById('superMask');
		var mask = document.getElementById('mask');
		superMask.onmouseover=e=>{
		   mask.style.display=lgDiv.style.display='block';
		}
		superMask.onmouseout=e=>{
		  mask.style.display=lgDiv.style.display='none';
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
			  'display:block;top:'+top+"px;left:"+left+"px";
		  lgDiv.style.backgroundPosition=-16/7*left+'px '+(-16/7*top)+'px';
		}
	})
   }
})()