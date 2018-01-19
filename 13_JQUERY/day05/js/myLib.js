if(typeof jQuery!=="function")
	throw new Error(
		"myLib依赖于jQuery，必须先引入jQuery!");
else
	jQuery.fn.sum=function(){
		//this->将来调用该函数的.前的jQuery对象
		//强调: 不用再用$(this)封装
		//      this可直接使用jQuery所有简化版API
		var sum=0;
		for(var child of this.children()){
			//child->DOM
			sum+=parseFloat($(child).html());
		}
		return sum;
	}
	//$(ul).sum()
	//$(select).sum()