import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from '../components/Ara/Home.vue'
import Products from '../components/Ara/Products.vue';
import Register from '../components/Ara/Register.vue';
import Login from '../components/Ara/Login.vue';
import VerifyEmail from '../components/Ara/VerifyEmail.vue';
import Favorites from '../components/Ara/Favorites.vue';
import Cart from '../components/Ara/Cart.vue';


const routes = [
    { path: '/', component: Home, name: 'الرئيسية' },
    { path: '/products/:category', component: Products, name: 'المنتجات' },
    { path: '/register', component: Register, name: 'حساب جديد' },
    { path: '/login', component: Login, name: 'تسجيل الدخول' },
    { path: '/verifyEmail', component: VerifyEmail, name: 'تفعيل البريد الالكتروني' },
    { path: '/Favorites', component: Favorites, name: 'المفضلة' },
    { path: '/Cart', component: Cart, name: 'عربة التسوق' },
];

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})

export default router;