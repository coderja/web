import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

//访问状态对象
const state = {
    count:1
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
    //vue2.0不要使用箭头函数,getters主要任务就是对状态state对象里面的数据，执行计算后输出
    count:function(state){
            return state.count+=100
    }
}
export default new Vuex.Store({
    state,
    mutations,
    getters
})
