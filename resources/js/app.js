require('./bootstrap');

import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import router from './routes'
import axios from 'axios'
import store from './store/index.js'
import VueCryptojs from 'vue-cryptojs'
import VueClipboard from 'vue-clipboard2'

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
Vue.use(VueCryptojs);
Vue.use(VueClipboard);

Vue.prototype.$http = axios;
Vue.config.productionTip = false;
// Vue.config.devtools = false;
// Vue.config.debug = false;
// Vue.config.silent = true;
Vue.filter('shortDate', function(str) {
    let date = new Date(str);

    let day = date.getDate() < 10 ? '0' + date.getDate() : date.getDate();
    let month = (Number(date.getMonth()) + 1) < 10 ? '0' + (Number(date.getMonth()) + 1) : (Number(date.getMonth()) + 1);

    return day + "." + month + "." + date.getFullYear();
});

Vue.filter('shortTime', function(str) {
    let time = new Date(str);

    let hour = time.getHours() < 10 ? '0' + time.getHours() : time.getHours();
    let minutes = time.getMinutes() < 10 ? '0' + time.getMinutes() : time.getMinutes();

    return "00" + ":" + minutes;
});

Vue.filter('convertSize', function(size) {
    let i = Math.floor( Math.log(size) / Math.log(1024) );

    return ( size / Math.pow(1024, i) ).toFixed(2) * 1 + ' ' + ['B', 'kB', 'MB', 'GB', 'TB'][i];
});

Vue.component('search', require('./components/Search.vue').default);

const app = new Vue({
    el: '#app',
    render:h => h(App),
    router,store,VueClipboard
});