import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from '../components/Ara/Home.vue'
import Products from '../components/Ara/products.vue';

const routes =[
    {path:'/',component : Home,name:'Home'},
    {path:'/products/:category',component:Products,name:'products'},
];

const router = new VueRouter({
    routes,hashbang:false,mode:'history'
})

export default router;

