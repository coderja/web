	n=0
	function move(){
		if(n<=3){
			var br = document.getElementById('banner');
			var bc = document.querySelector('.bannerCon');
			var llen = br.getElementsByTagName('li');
			llen[0].className='';
			llen[1].className='';
			llen[2].className='';
			llen[3].className='';
			llen[n].className='current';
			bc.style.left = -960*n+'px'
			n++
		}else{
		 n=0
		}
	
	
//   	for(let i=0,len=llen.length;i<len;i++){
//		  llen[i].onmouseenter=function(){
//			  bc.style.left = -960*i+'px';
//				llen[0].className='';
//				llen[1].className='';
//				llen[2].className='';
//				llen[3].className='';
//				clearInterval(timer);
//				timer=null
//			}
//			llen[i].onmouseout=function(){
//			  
//				setInterval(move,1000+1000);
//			}
//
//		}
//	
	}
	timer = setInterval(move,1000+1000)
	var bc = document.querySelector('.bannerCon');
	var banner = document.getElementById('banner');
	(function(){
		   var n=1;
	banner.onclick=e=>{
	  if(e.target.nodeName=='SPAN'){
		   if(e.target.className=='cl'){
			   if(n<4){
					   console.log(n)
				  bc.style.left = -960*n+'px'
			       n++
		        } 
			}else if(e.target.className=='cr'){
					   console.log(n)
				if(n>1){
			       n--
			       bc.style.left = -960*(n-1)+'px';
					   console.log(n)
			    }
			}
		}
	}
	})()
	
	