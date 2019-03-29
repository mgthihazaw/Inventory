
require('./bootstrap');

window.Vue = require('vue');
import VueHotKey from 'v-hotkey'
Vue.use(VueHotKey)
import router from './Router/router.js';
Vue.component('app-home', require('./components/AppHome.vue')).default;

const app = new Vue({
    el: '#app',
    router,

});
