1.��Ŀ�ṹ�ҾͲ��������ܣ����ǻ���vue-cli��Ľ��ּ�
vue init webpack projectName

2.������Ŀ�� cd demo
��װaxios��vue-axios
��srcĿ¼��һ�������ļ���һ�������
	--main.js
	   �������ļ��и��ļ���������������ģ��
		import Axios from 'axios'
		
		//��ģ��Ŀ��Ϊ����axios�ܹ�֧��Vue.use()
		import VueAxios from 'vue-axios'

		Vue.use(VueAxios,Axios)

		window.axios = Axios
	
	--App.vue
	   axios���������ڸ��ļ�����ʾ