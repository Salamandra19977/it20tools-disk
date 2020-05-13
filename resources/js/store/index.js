import Vue from 'vue'
import Vuex from 'vuex'
import disk from './modules/disk'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        disk,
    }
})