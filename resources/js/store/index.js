import Vue from 'vue'
import Vuex from 'vuex'
import available from './modules/available'
import disk from './modules/disk'

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        disk, available,
    }
})