require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue';
// import VueAxios from 'vue-axios';
// import axios from 'axios';
import { VBModal } from 'bootstrap-vue'
// Note: Vue automatically prefixes the directive name with 'v-'
Vue.directive('b-modal', VBModal)

import { BreadcrumbPlugin } from 'bootstrap-vue'
Vue.use(BreadcrumbPlugin)
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('disk-component', require('./components/DiskComponent.vue').default);
Vue.component('selected', require('./components/Selected.vue').default);
Vue.component('breadcrumb', require('./components/Breadcrumbs.vue').default);
Vue.component('search', require('./components/Search.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
