require('./bootstrap');

import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import router from './routes'
import axios from 'axios'
import store from './store/index.js'

import { VBModal } from 'bootstrap-vue'
// Note: Vue automatically prefixes the directive name with 'v-'
Vue.directive('b-modal', VBModal)
// Vue.use(FileManager, {store})

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)


Vue.use(VueRouter);
Vue.prototype.$http = axios;
Vue.config.productionTip = false;
// Vue.config.devtools = false;
// Vue.config.debug = false;
// Vue.config.silent = true;
Vue.filter('shortDate', function(str) {
    let date = new Date(str);

    return date.getDate() + "." + date.getMonth() + "." + date.getFullYear();
});

Vue.filter('shortTime', function(str) {
    let time = new Date(str);

    return time.getHours() + ":" + time.getMinutes();
});

Vue.component('search', require('./components/Search.vue').default);

const app = new Vue({
    el: '#app',
    render:h => h(App),
    router,store
});