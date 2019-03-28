
require('./bootstrap');

window.Vue = require('vue');

import router from './Router/router.js';
Vue.component('app-home', require('./components/AppHome.vue')).default;

const app = new Vue({
    el: '#app',
    router,

});
