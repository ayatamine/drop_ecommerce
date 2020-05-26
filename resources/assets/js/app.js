
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vuex from 'vuex';
Vue.use(Vuex);
import LoadScript from 'vue-plugin-load-script';

Vue.use(LoadScript);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


/* Vue.component('catalogue', require('./components/home/Catalogue.vue'));
Vue.component('bigcatalogue', require('./components/BigCatalogue'));
Vue.component('products', require('./components/Products.vue'));
Vue.component('categories', require('./components/Categories.vue'));
Vue.component('categoriessm', require('./components/Categoriessm.vue'));
Vue.component('paginateproducts', require('./components/PaginateProducts.vue'));
Vue.component('currency', require('./components/Currency.vue'));
Vue.component('currencylg', require('./components/CurrencyLg.vue'));

Vue.component('searchproducts',require('./components/Search.vue'));
Vue.component('sortproducts',require('./components/SortProducts.vue'))
Vue.component('sizefilter',require('./components/SizeFilter.vue'));
Vue.component('sizefilterar',require('./components/Ar/SizeFilter.vue'));
Vue.component('bestsellers',require('./components/BestSellers.vue'));
Vue.component('popularcategories',require('./components/PopularCategories.vue'));
Vue.component('productdetails',require('./components/ProductDetails.vue'));
Vue.component('relatedproducts',require('./components/RelatedProducts.vue'));
//login and register modals
Vue.component('loginmodal', require('./components/Login.vue'));
Vue.component('loginarmodal', require('./components/Ar/Login.vue'));
Vue.component('registermodal', require('./components/Register.vue'));
Vue.component('registerarmodal', require('./components/Ar/Register.vue'));

Vue.component('favorites',require('./components/user/Favorites.vue'));
Vue.component('favoritescount',require('./components/user/FavoritesCount.vue'));
Vue.component('cart',require('./components/user/cart.vue'));
Vue.component('cartitemscount',require('./components/user/CartCount.vue'));
Vue.component('contact',require('./components/Contact.vue'));
Vue.component('mailinglist',require('./components/MailingList.vue'));

//the dashboard part
Vue.component('dashboardindex',require('./components/user/dashboard/Index.vue'));
Vue.component('settings',require('./components/user/dashboard/Settings.vue'));
Vue.component('authtickets',require('./components/user/dashboard/Tickets.vue'));
Vue.component('myorders',require('./components/user/dashboard/Orders.vue'));

//the dashboard part arabic version
Vue.component('settingsar',require('./components/user/dashboard/Ar/Settings.vue'));

//here is the arabic version for part of pages like home products and so on
Vue.component('homear', require('./components/Ar/home/Home.vue'));
Vue.component('cataloguear', require('./components/Ar/home/Catalogue.vue'));
//the admin part
Vue.component('productstable',require('./components/admin/ProductsTable.vue'));
Vue.component('tickets',require('./components/admin/Tickets.vue'));
Vue.component('orders',require('./components/admin/Orders.vue')); */

Vue.component('lang', require('./components/Lang.vue'));
Vue.component('global-index', require('./components/Ara/GlobalIndex.vue'));

import router from './routes/routes'

const store = new Vuex.Store({
    state:{
      categories :[],
      activeCategory:'',
      products :{},
      featuredProducts :[],
      productInViewer:null,
      user:null,
      currentCategory : {
        name : {
        ar: "كل المنتجات",
        en: "All",
        tr: "كل المنتجات"
        },
        productsCount: 0,
      },
      currentProducts :[],
      currencies :{},
      currenciesSigns :{
        'USD':'$',
        'EUR':'€',
        'GBP':'£',
        'TRY':'₺'
      },
      currentCurrency:'USD',
      currencyRate :1,//0.174,
      currencySign:'$',
      productDetails:{},

      favoritedProducts : [],
      cartItems:[],
      lang:null,
    },
    getters:{
       products(state){
            return state.products
       },
       featuredProducts(state){
            return state.featuredProducts
       },
       categories(state){
         return state.categories;
       },
       productInViewer(state){
         return state.productInViewer;
       }

    },
    mutations:{
      setProducts(state,products){
        state.products = products;
        localStorage.setItem('products',JSON.stringify(products))
        state.currentCategory.productsCount = products.length
      },
      setFeateredProducts(state,products){
        state.featuredProducts = products;
        localStorage.setItem('featuredProducts',JSON.stringify(products))
      },
      setCategories(state,payload){
           state.categories = payload;
      },
      setProductInViewer(state,product){
          //console.log(product)
          state.productInViewer = product
      },
      setCurrentCategory(state,category){
             state.currentCategory = category;
      }

    },
    actions:{
      setCategories({commit,state}){
        let sessionCategories =localStorage.getItem('categories')
        if(!sessionCategories){
            let cat = new Set();
            let allproducts = state.products.length > 0 ? state.product : state.featuredProducts;
            allproducts.forEach(product=>{
              product.categories.forEach(element => {

                cat.add(element);
              });
            })
            //remove duplicated categories
            const uniqueCategories = Array.from(cat)
            .map(e => e['id'])

            // store the keys of the unique objects
            .map((e, i, final) => final.indexOf(e) === i && i)

            // eliminate the dead keys & store unique objects
            .filter(e => Array.from(cat)[e]).map(e => Array.from(cat)[e]);
            //console.log('uniquecat',uniqueCategories)
            commit('setCategories',uniqueCategories);
        }else{
              commit('setCategories',JSON.parse(sessionCategories));
        }
      },

    }
})

const app = new Vue({
    el: '#app',
    store : store,
    router,
});

const adminapp = new Vue({
    el: '#adminapp',
    store : store
});
