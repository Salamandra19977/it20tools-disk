require('./bootstrap');

import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import router from './routes'
import axios from 'axios'

import { VBModal } from 'bootstrap-vue'
// Note: Vue automatically prefixes the directive name with 'v-'
Vue.directive('b-modal', VBModal)

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)


Vue.use(VueRouter);
Vue.prototype.$http = axios;
Vue.config.productionTip = false;

Vue.component('search', require('./components/Search.vue').default);

const app = new Vue({
    el: '#app',
    render:h => h(App),
    router
});