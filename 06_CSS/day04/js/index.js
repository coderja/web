	var n=0;
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
			console.log(llen[n].parentNode.children)
			bc.style.left = -960*n+'px'
			n++
		}else{
		 n=0
		}
   	for(let i=0,len=llen.length;i<len;i++){
		  llen[i].onmouseenter=function(){
			  bc.style.left = -960*i+'px';
				llen[0].className='';
				llen[1].className='';
				llen[2].className='';
				llen[3].className='';
			}
		}
	}
	var timer = setInterval(move,1000+1000)