<template>
  <div id="app">
    
    <img src="./assets/logo.png">
    <h1>{{ msg}}</h1>
    <!--访问状态对象-->
    <div>state-->{{$store.state.count}}</div>
    <!--计算属性-->
    <h1>mapState 计算属性-->{{count}}</h1>
    
  </div>
</template>

<script>

//vuex提供的辅助函数
import {mapState} from 'vuex'
export default {
  name: 'app',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  
  // computed:{
  //   count(){
  //     return  this.$store.state.count //this指的是store
  //   }
  // },

  // computed:mapState({
  //   count:state=>state.count++
  // })
  
  // 不对computed进行计算，count直接引进来
  computed:{
    ...mapState([
      'count'
    ])
  },
  //解决页面白屏问题
  mounted(){
    if(app.hasChildNodes()){
          loading.style.display="none";
          console.log(1)
       }else{
         console.log(app.childNodes)
       }
  },
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

h1, h2 {
  font-weight: normal;
}

ul {
  list-style-type: none;
  padding: 0;
}

li {
  display: inline-block;
  margin: 0 10px;
}

a {
  color: #42b983;
}
</style>
