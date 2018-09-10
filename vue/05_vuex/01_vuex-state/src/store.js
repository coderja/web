import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

//访问状态对象
const state = {
    count:1
}


export default new Vuex.Store({
    state
})
