<template>
  <div id="app">
    <img src="./assets/logo.png">
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App',
  created(){
    //传统axios调用是this.$http[method]
    this.$http.get('http://jsonplaceholder.typicode.com/users').then((data)=>{
      console.log(data)
    }).catch((e)=>{
      alert(e)
    });

    //将axios添加到window对象中后使用get方法
    axios.get('http://jsonplaceholder.typicode.com/users').then((data)=>{
      console.log(data)
    }).catch((e)=>{
      alert(e)
    });

    //axios中携带REST参数
    /*axios.get('index.php',{
      params:{
        id:12345,
        text:'小火柴'
      }
    }).then((response)=>{
      console.log(response)
    }).catch((error)=>{
      console.log(error)
    })*/

    //axios  get请求
    axios({
      method: 'get',
      url: 'http://jsonplaceholder.typicode.com/users',
      // data: {
      //   firstName: 'Fred',
      //   lastName: 'Flintstone'
      // }
    }).then((data)=>{
      console.log(data)
      console.log(1)
    });

    // 为给定 ID 的 user 创建请求
    /*axios.get('/user?ID=12345')
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });*/

    //post请求
    /*axios.post('index.php',{
      id:12345,
      text:'小火柴'
    }).then((response)=>{
      console.log(response)
    }).catch((error)=>{
      console.log(error)
    })*/


    //post请求
    /*axios({
      method: 'post',
      url: 'index.php',
      data: {
        firstName: 'Fred',
        lastName: 'Flintstone'
      }
    }).then((data)=>{
        console.log(data)
    });*/

    //多并发请求
    /*function getUserAccount() {
      return axios.get('/user/12345');
    }

    function getUserPermissions() {
      return axios.get('/user/12345/permissions');
    }

    axios.all([getUserAccount(), getUserPermissions()])
      .then(axios.spread(function (acct, perms) {
        // acct为第一个请求的结果，perms为第二个请求的结果
      }));*/

    let ddd = axios.create({
      baseURL:'http://jsonplaceholder.typicode.com',
      timeout: 1000,
      // headers: {'X-Custom-Header': 'foobar'}
    })
    ddd('/users').then((data)=>{
      console.log(data)
    }).catch((e)=>{
      console.log(e)
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
</style>
