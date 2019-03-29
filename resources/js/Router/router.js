import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)




import Brands from '../components/Brands/index.vue'
import Categories from '../components/Categories/index.vue'
import Descriptions from '../components/Descriptions/index.vue'
import Locations from '../components/Locations/index.vue'
import Manufactures from '../components/Manufactures/index.vue'
import Products from '../components/Products/index.vue'
import CreateProduct from '../components/Products/create.vue'


const routes = [
  { path: '/brands', component: Brands ,name: 'brands'},
  { path: '/categories', component: Categories ,name: 'categories'},
  { path: '/descriptions', component: Descriptions ,name: 'descriptions'},
  { path: '/locations', component: Locations ,name: 'locations'},
  { path: '/manufactures', component: Manufactures ,name: 'manufactures'},
  { path: '/products', component: Products ,name: 'products'},
  { path: '/products/create', component: CreateProduct ,name: 'createProduct'},
  
 
]


const router = new VueRouter({
  routes ,
  base:__dirname,
  mode:'history',
 linkActiveClass:'active',
 hashbang:false,
})
export default router