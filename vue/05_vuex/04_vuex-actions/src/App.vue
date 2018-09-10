<template>
  <div id="app">
    
    <img src="./assets/logo.png">
    <h1>{{ msg}}--{{age}}</h1>
    <!--访问状态对象-->
    <div>{{$store.state.count}}</div>
    <!--用commit访问触发的mutations里面的方法-->
    <button @click="$store.commit('jia',{a:10})">+</button>
    <!--使用mapMutations-->
    <button @click="jian">-</button>
    <p>
      mapActions
      <button @click='jiaplus'>+</button>
      <button @click='jianplus'>-</button>
    </p>
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
    ]),
    // count(){
    //   return this.$store.getters.count
    // }
    ...mapGetters([
      'age'
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

  // methods:mapMutations([
  //   'jian'
  // ])
  methods:{
    ...mapMutations([
      'jian'
    ]),
    ...mapActions([
      'jiaplus'
    ]),
    ...mapActions({
      jianplus:'jianplus'
    })
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
