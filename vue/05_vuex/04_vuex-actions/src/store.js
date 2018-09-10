import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

//访问状态对象
const state = {
    count:1,
    age:10
}

// 触发的状态，mutations是同步的
const mutations = {
    jian(state){
        state.count--
    },
    jia(state,n){
        state.count+=n.a
    }
}

const getters = {
    // 继续玩count,vue2.0建议computed不要使用箭头函数
    age(state){
        return state.age += 100
    }
}

// actions是异步的 异步的批处理触发集合,可以调用mutations里面的方法
// Action 类似于 mutation，不同在于：

// Action 提交的是 mutation，而不是直接变更状态。
// Action 可以包含任意异步操作。
const actions = {
   jiaplus(context){//context代表整个store
        context.commit('jia',{a:10})
   },
   jianplus({commit}){
       commit('jian')
   }
}


export default new Vuex.Store({
    state,
    mutations,
    getters,
    actions
})
