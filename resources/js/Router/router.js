import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)




import Brands from '../components/Brands/index.vue'
const routes = [
  { path: '/brands', component: Brands },
 
]


const router = new VueRouter({
  routes ,
  base:__dirname,
  mode:'history',
 linkActiveClass:'active',
 hashbang:false,
})
export default router