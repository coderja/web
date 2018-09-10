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


export default new Vuex.Store({
    state,
    mutations
})
