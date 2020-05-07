require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue';
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

Vue.use(VueRouter);
Vue.prototype.$http = axios;
Vue.config.productionTip = false;

const app = new Vue({
    el: '#app',
    render:h => h(App),
    router
});
