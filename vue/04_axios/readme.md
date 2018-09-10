1.项目结构我就不多做介绍，还是基于vue-cli搭建的脚手架
vue init webpack projectName

2.进入项目中 cd demo
安装axios和vue-axios
在src目录中一个启动文件，一个是组件
	--main.js
	   在启动文件中该文件中引入上述两个模块
		import Axios from 'axios'
		
		//该模块目的为了让axios能够支持Vue.use()
		import VueAxios from 'vue-axios'

		Vue.use(VueAxios,Axios)

		window.axios = Axios
	
	--App.vue
	   axios案例都是在该文件中演示