<template>
  <div id="app">
    
    <img src="./assets/logo.png">
    <h1>{{ msg}}</h1>
    <!--访问状态对象-->
    <div>使用mutation触发改变状态-->{{$store.state.count}}</div>
    <!--用commit访问触发的mutations里面的方法-->
    <button @click="$store.commit('jia',{a:10})">+</button>
    <!--使用mapMutations-->
    <button @click="jian">-</button>
  </div>
</template>

<script>

//vuex提供的辅助函数
import {mapState,mapMutations,mapGetters,mapActions} from 'vuex'
export default {
  name: 'app',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  },
  
  //解决页面白屏问题
  mounted(){
    if(app.hasChildNodes()){
          loading.style.display="none";
       }else{
         console.log(app.childNodes)
       }
  },

  // methods:mapMutations([
  //   'jian'
  // ])
  methods:{
    ...mapMutations([
      'jian'
    ])
  }
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
