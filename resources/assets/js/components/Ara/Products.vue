<template>
<div>
    <div class="tt-breadcrumb">
	<div class="container">
		<ul>
            <li><router-link to="/">الرئيسية / </router-link></li>
            <li v-if="!!currentCategory">{{currentCategory.name.ar ? currentCategory.name.ar : currentCategory.name.en}}</li>
		</ul>
	</div>
</div>
<div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<div class="row "><!-- flex-sm-row-reverse -->
				<div class="col-md-4 col-lg-3 col-xl-3 leftColumn rightColumn aside">
					<div class="tt-btn-col-close">
						<a >إغلاق</a>
					</div>
					<div class="tt-collapse open tt-filter-detach-option">
						<div class="tt-collapse-content">
							<div class="filters-mobile">
								<div class="filters-row-select">

								</div>
							</div>
						</div>
					</div>
					<!-- <div class="tt-collapse open">
						<h3 class="tt-collapse-title">SORT BY</h3>
						<div class="tt-collapse-content">
							<ul class="tt-filter-list">
								<li class="active">
									<a href="#">Shirts &amp; Tops</a>
								</li>
								<li>
									<a href="#">XS</a>
								</li>
								<li>
									<a href="#">White</a>
								</li>
							</ul>
							<a href="#" class="btn-link-02">Clear All</a>
						</div>
					</div> -->
					<div class="tt-collapse close" v-if="categories.length">
						<h3 class="tt-collapse-title">أصناف المنتجات</h3>
						<div class="tt-collapse-content">
							<ul class="tt-list-row">
								<li v-for="(c,i) in categories" :key="i"
                                 :class="(c.name.en == currentCategory.name.en) ? 'active' : '' " >
                                    <a @click="setAndFilterByCategory(c,$event)"
                                    >{{ c.name.ar ? c.name.ar : c.name.en }}</a>
                                </li>
							</ul>
						</div>
					</div>
					<div class="tt-collapse open">
						<h3 class="tt-collapse-title">حسب السعر</h3>
						<div class="tt-collapse-content">
							<ul class="tt-list-row">
								<li @click="filterByPrice('0')" class="active"><a >الكل</a></li>
								<li @click="filterByPrice('50')"><a >{{currencySign}}0 — {{currencySign}}50</a></li>
								<li @click="filterByPrice('100')"><a >{{currencySign}}50 — {{currencySign}}100</a></li>
								<li @click="filterByPrice('150')"><a >{{currencySign}}100 — {{currencySign}}150</a></li>
								<li @click="filterByPrice('200')"><a >{{currencySign}}150 —  {{currencySign}}200</a></li>
							</ul>
						</div>
					</div>
					<div class="tt-collapse open">
						<h3 class="tt-collapse-title">حسب الحجم</h3>
						<div class="tt-collapse-content">
							<ul class="tt-options-swatch options-middle">
								<li @click="filterBySize('0')" class="active"><a>كل الأحجام</a></li>
								<li @click="filterBySize('4')"><a>4</a></li>
								<li @click="filterBySize('8')"><a>8</a></li>
								<li @click="filterBySize('16')"><a>16</a></li>
								<li @click="filterBySize('32')"><a>24</a></li>
								<li @click="filterBySize('32')"><a>32</a></li>
								<li @click="filterBySize('58')"><a>58</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="tt-collapse open">
						<h3 class="tt-collapse-title">FILTER BY COLOR</h3>
						<div class="tt-collapse-content">
							<ul class="tt-options-swatch options-middle">
								<li><a class="options-color tt-border tt-color-bg-08" href="#"></a></li>
								<li><a class="options-color tt-color-bg-09" href="#"></a></li>
								<li class="active"><a class="options-color tt-color-bg-10" href="#"></a></li>
								<li><a class="options-color tt-color-bg-11" href="#"></a></li>
								<li><a class="options-color tt-color-bg-12" href="#"></a></li>
								<li><a class="options-color tt-color-bg-13" href="#"></a></li>
								<li><a class="options-color tt-color-bg-14" href="#"></a></li>
								<li><a class="options-color tt-color-bg-15" href="#"></a></li>
								<li><a class="options-color tt-color-bg-16" href="#"></a></li>
								<li><a class="options-color tt-color-bg-17" href="#"></a></li>
								<li><a class="options-color tt-color-bg-18" href="#"></a></li>
								<li><a class="options-color" href="#">
									<span class="swatch-img">
										<img src="images/custom/texture-img-01.jpg" alt="">
									</span>
									<span class="swatch-label color-black"></span>
								</a></li>
							</ul>
						</div>
					</div>
					<div class="tt-collapse open">
						<h3 class="tt-collapse-title">VENDOR</h3>
						<div class="tt-collapse-content">
							<ul class="tt-list-row">
								<li><a href="#">Levi's</a></li>
								<li><a href="#">Gap</a></li>
								<li><a href="#">Polo</a></li>
								<li><a href="#">Lacoste</a></li>
								<li><a href="#">Guess</a></li>
							</ul>
							<a href="#" class="btn-link-02">+ More</a>
						</div>
					</div> -->
					<div class="tt-collapse open">
						<h3 class="tt-collapse-title">كلمات مفتاحية</h3>
						<div class="tt-collapse-content">
							<ul class="tt-list-inline">
								<li @click="filterByTag('all')" class="active"><a>الكل</a></li>
								<li @click="filterByTag('Dresses')" ><a>فساتين</a></li>
								<li @click="filterByTag('Shirts')"><a>قمصان </a></li>
								<li @click="filterByTag('Polo Shirts')"><a>قمصان بولو</a></li>
								<li @click="filterByTag('Sweaters')"><a>معاطف</a></li>
								<li @click="filterByTag('Blazers')"><a>سترات</a></li>
								<li @click="filterByTag('Jackets')"><a>جاكيت</a></li>
								<li @click="filterByTag('shoe')"><a>أحدية</a></li>
								<li @click="filterByTag('Activewear')"><a>ملابس رياضية</a></li>
								<li @click="filterByTag('Pants')"><a>بنطال</a></li>
								<li @click="filterByTag('Jumpsuits')"><a>حلل</a></li>
								<li @click="filterByTag('Shorts')"><a>السراويل القصيرة</a></li>
								<li @click="filterByTag('Jeans')"><a>جينز</a></li>
								<li @click="filterByTag('Skirt')"><a>تنانير</a></li>
								<li @click="filterByTag('Swim')"><a>ملابس سباحة</a></li>
							</ul>
						</div>
					</div>
					<!-- <div class="tt-content-aside">
						<a href="listing-left-column.html" class="tt-promo-03">
							<img src="images/custom/listing_promo_img_07.jpg" alt="">
						</a>
					</div> -->
				</div>
				<div class="col-md-12 col-lg-9 col-xl-9">
					<div class="content-indent container-fluid-custom-mobile-padding-02">
						<div class="tt-filters-options">
							<h1 class="tt-title" v-if="!!currentCategory">
								{{currentCategory.name.ar ? currentCategory.name.ar : currentCategory.name.en}}
                                 <span class="tt-title-total">({{currentProducts.length}})</span>
							</h1>
							<h1 class="tt-title" v-else>الكل	</h1>
							<div class="tt-btn-toggle">
								<a style="cursor:pointer" id="showMobNav">فلترة</a>
							</div>
							<div class="tt-sort">
								 <select name="SortBy" v-model="SortProperty"  id="SortBy" style="padding: 4px;    border: 1px solid #e6e6e6;">
                                    <option value="all" selected="selected" > بلا ترتيب</option>
                                    <option value="title-ascending">أبجدي أ-ي</option>
                                    <option value="title-descending"> أبجدي ي-أ</option>
                                    <option value="price-ascending">سعر تصاعدي</option>
                                    <option value="price-descending">سعر تنازلي</option>

                                </select>
							<!-- 	<select>
									<option value="Show">Show</option>
									<option value="9">9</option>
									<option value="16">16</option>
									<option value="32">32</option>
								</select> -->
							</div>
							<div class="tt-quantity">
								<a href="#" class="tt-col-one" data-value="tt-col-one"></a>
								<a href="#" class="tt-col-two" data-value="tt-col-two"></a>
								<a href="#" class="tt-col-three" data-value="tt-col-three"></a>
								<a href="#" class="tt-col-four" data-value="tt-col-four"></a>
								<a href="#" class="tt-col-six" data-value="tt-col-six"></a>
							</div>
						</div>
						<div class="tt-product-listing row" v-if="loading">
							<div class="col-6 col-md-4 tt-col-item" v-for="i in 6" :key="i">
								<div class="tt-product thumbprod-center">
									<div class="tt-image-box">

										<a href="product.html">
											<span class="tt-img" ><img src="wokiee_ecommerce/images/loader.svg" data-src="images/product/product-18.jpg" alt=""></span>
											<span class="tt-img-roll-over" ><img src="images/loader.svg" data-src="images/product/product-18-01.jpg" alt=""></span>
										</a>
									</div>
								</div>
							</div>

						</div>
                        <div class="" v-show="currentProducts.length == 0">
                                <div class="alert alert-info text-center mt-4">لايوجد عناصر ضمن هاته الفئة</div>
                        </div>
						<div class="tt-product-listing row"  v-if="!loading">
							<div class="col-6 col-md-4 tt-col-item" v-for="(p,i) in currentProducts" :key="i">
								<div class="tt-product thumbprod-center">
									<div class="tt-image-box">
										<a  class="tt-btn-quickview" @click="setProductInViewer(p,$event)"
                                        data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
										<a @click="addPToFavorite(p,$event)"
                                        class="tt-btn-wishlist"
                                        data-tooltip="Add to Wishlist" data-tposition="left"></a>
										<!-- <a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a> -->
										<a href="product.html">
											<span class="tt-img"  v-if="!loading"><img onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-03.jpg'"
                                            :src="p.images[0]" data-src="wokiee_ecommerce/images/product/product-03.jpg" alt=""></span>
                                            <span class="tt-img-roll-over" v-if="!loading"><img onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-03.jpg'"
                                            :src="p.images[0]"  data-src="wokiee_ecommerce/images/product/product-03-02.jpg" alt=""></span>
										</a>
									</div>
									<div class="tt-description">
										<div class="tt-row">
											<div class="tt-rating">
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star"></i>
												<i class="icon-star-half"></i>
												<i class="icon-star-empty"></i>
											</div>
										</div>
										<h2 class="tt-title"><a href="product.html">{{p.name.ar ? p.name.ar : p.name.en}}</a></h2>
										<div class="tt-price">
											{{currencySign}}{{ (currencyRate * (p.variations[0].sale_price)).toFixed(2)}}
										</div>
										<div class="tt-product-inside-hover">
											<div class="tt-row-btn">
												<a  class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
											</div>
											<div class="tt-row-btn">
												<a  class="tt-btn-quickview" @click="setProductInViewer(p,$event)"
                                                data-toggle="modal" data-target="#ModalquickView"></a>
												<a  class="tt-btn-wishlist"
                                                @click="addPToFavorite(p,$event)"></a>
												<!-- <a  class="tt-btn-compare"></a> -->
											</div>
										</div>
									</div>
								</div>
							</div>


						</div>
						<!-- <div class="text-center tt_product_showmore">
							<a v-if="!loading" class="btn btn-border">LOAD MORE</a>
							<div class="tt_item_all_js">
								<a href="#" class="btn btn-border01">NO MORE ITEM TO SHOW</a>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<modalViewProduct></modalViewProduct>
</div>

</template>
<script>


import modalViewProduct from './modals/ModalViewProduct.vue'
import mixins from '../../mixins/new_mixins.js';
import currencyMixins from '../../mixins/currencyMixins';
export default {
  data(){
      return {
          currentProducts:[],
          loading :true,
            SortProperty :'------'
      }
  },
  components:{
	  modalViewProduct
  },
   mixins:[mixins,currencyMixins],
  created(){
  },
  mounted(){
      this.loading = true;
      this.setallProducts();
  },
  methods:{
	 setProductInViewer(product,event){
		 console.log('cliken',product)
         this.$store.commit('setProductInViewer',product);
	 },
	 setCurrentCategory(categoryName){
        this.$store.commit('setCurrentCategory',categoryName)
     },
    setallProducts(){
        let sessionproducts = localStorage.getItem('allproducts');
        if(!!sessionproducts){
            this.$store.commit('setProducts',JSON.parse(sessionproducts))
             this.loading = false;


        }else{
                 axios.get('/getProducts')
                .then(res => {
                console.log("all",res.data)
                // this.products = res.data.products;
                //sessionStorage.setItem('products',JSON.stringify(this.products))
                this.$store.commit('setProducts',res.data.products)
                localStorage.setItem('allproducts',JSON.stringify(res.data.products))
                 this.loading = false;
                 })
                .catch(error => {
                        console.log("error")
                         this.loading = false;
                });

        }
        this.filterByCategory()

    },
    filterByCategory(){
        let allproducts = this.products;
        this.currentProducts = allproducts;
        if(!!this.currentCategory && this.currentCategory.name.en != 'all'){
            let type = this.currentCategory.name.en;
            //console.log(type)
            let fil = allproducts
            .filter((element) =>
                element.categories.some((c) => (c.name.en == type) ))
            .map(element => {
                return Object.assign({}, element, {categories : element.categories.filter(subElement => (subElement.name.en == type ))});

            });
            //console.log(allproducts)
            this.currentProducts = fil;
        }


    },
    setAndFilterByCategory(category){
          this.loading = true;
          this.$store.commit('setCurrentCategory',category);
          var self = this;
          setTimeout(() => {
              self.filterByCategory();
          }, 2000);
          this.loading = false
    },
    filterByPrice(price){
           //console.log(price)
           this.loading = true;
           if(price == '0' ){
              this.filterByCategory();
           }else{
               var intprice = parseInt(price);
                if(!!this.currentCategory && this.currentCategory.name.en != 'all'){
                    if(this.currentProducts.length ==0){this.filterByCategory()}
                    //console.log(type)
                    let fil = this.currentProducts
                    .filter((element) =>
                        element.variations.some((v) => ((parseInt(v.sale_price) < intprice) && (parseInt(v.sale_price) > (intprice - 50)) ) ))
                    .map(element => {
                        return Object.assign({}, element, {variations : element.variations.filter(subElement => ((parseInt(subElement.sale_price) < intprice && (parseInt(subElement.sale_price) > (intprice - 50))) ))});

                    });
                    this.currentProducts = fil;
                }
           }
           this.loading = false;
    },
    filterBySize(size){
           //console.log(price)
           this.loading = true;
           if(size == '0' ){
              this.filterByCategory();
           }else{
                var intsize = parseInt(size);
                if(!!this.currentCategory && this.currentCategory.name.en != 'all'){
                    if(this.currentProducts.length ==0){this.filterByCategory()}
                    //console.log(type)
                    let fil = this.currentProducts
                    .filter((element) =>
                        element.variations.some((v) => ((v.attributes[0].name.en =='size') && (parseInt(v.attributes[0].option.en) < intsize) ) ))
                    .map(element => {
                        return Object.assign({}, element, {variations : element.variations.filter(subElement => ((subElement.attributes[0].name.en =='size')  && (parseInt(v.attributes[0].option.en) < intprice) ))});

                    });
                    this.currentProducts = fil;
                }
           }
           this.loading = false;
    },
    filterByTag(tag){
        let allproducts = this.products;
           //console.log(price)
           this.loading = true;
           if(tag == 'all' ){
              this.filterByCategory();
           }else{

                    let type = tag;
                    //console.log(type)
                    let fil = allproducts
                    .filter((element) =>
                        element.categories.some((c) => (c.name.en.includes(type)) ))
                    .map(element => {
                        return Object.assign({}, element, {categories : element.categories.filter(subElement => (subElement.name.en == type ))});

                    });
                    this.currentProducts = fil;

           }
           this.loading = false;
    }
    },
  computed:{
      categories(){
          return this.$store.getters.categories
      },
      currentCategory(){
          return this.$store.state.currentCategory
      },
      products(){
          return this.$store.getters.products
      }

  },
   watch:{
       SortProperty(query){
              let sortedProducts = []; let allproducts =[];
              if(this.currentCategory.name.en =='all'){
                    allproducts = this.products;
              }else{
                   allproducts = this.currentProducts;
              }

              switch(query){

              case 'title-ascending':
                sortedProducts = allproducts.sort(function(a, b) {

                     if((a.name.ar).substring(0,1) > (b.name.ar).substring(0,1))
                    {
                        return 1;
                    }else{
                        return -1;
                    }
                    return 0;
                });
                  break;
              case 'title-descending':
                   sortedProducts = allproducts.sort(function(a, b) {

                     if((a.name.ar).substring(0,1) > (b.name.ar).substring(0,1))
                    {
                        return -1;
                    }else{
                        return 1;
                    }
                    return 0;
                    });
                      break;
              case 'price-ascending':
                   sortedProducts = allproducts.sort(function(a, b) {

                     if((a.variations[0].sale_price) > (b.variations[0].sale_price))
                    {
                        return 1;
                    }else{
                        return -1;
                    }
                    return 0;
                    });
                      break;
              case 'price-descending':
                   sortedProducts = allproducts.sort(function(a, b) {

                     if((a.variations[0].sale_price) < (b.variations[0].sale_price))
                    {
                        return 1;
                    }else{
                        return -1;
                    }
                    return 0;
                    });
                     break;

                   default:
                       sortedProducts =  this.currentProducts;
                       break;
                }


             this.currentProducts = sortedProducts;

       },
    },
}
$(document).on('click','#showMobNav',function(){
      $('.aside.leftColumn').addClass('column-open ps-container ps-theme-default ps-active-y')
})
$(document).on('click','.tt-btn-col-close',function(){
      $('.aside.leftColumn').removeClass('column-open ps-container ps-theme-default ps-active-y')
})
$(document).on('mouseenter','.tt-product.thumbprod-center',function(){
//	console.log('yes')
  $('.tt-product.thumbprod-center').removeClass('hovered')
  $(this).addClass('hovered')
})
$(document).on('click','.tt-collapse-title',function(){
let par = $(this).parent();
if(par.hasClass('open')){
   par.removeClass('open').addClass('close')
}else{
   par.removeClass('close').addClass('open')
}

})
$(document).on('click','.tt-list-row li',function(){
     $(this).siblings('li').removeClass('active')
    $(this).addClass('active')

})
$(document).on('click','.tt-collapse-content li',function(){
     $(this).siblings('li').removeClass('active')
    $(this).addClass('active')

})
$(document).on('mouseleave','.tt-product.thumbprod-center',function(){
	//console.log('yes')
  $('.tt-product.thumbprod-center').removeClass('hovered')

})
</script>
<style  scoped>
.tt-img img,.tt-img-roll-over img{height: 22rem !important;}
.tt-product.thumbprod-center.hovered .tt-description{
  top : -69px;
}
.tt-product.thumbprod-center.hovered .tt-product-inside-hover{
opacity: 1;
}
.tt-collapse-content li.active{    color: #2879fe;}
.tt-options-swatch li.active a{    background: #2879fe;
    color: #ffffff;}
.alert{
    position: relative;
    padding: .75rem 1.25rem;
    margin-bottom: 1rem;
    border: 1px solid transparent;
    border-radius: .25rem;
}
.alert-info{
    color: #0c5460;
    background-color: #d1ecf1;
    border-color: #bee5eb;
}
.tt-collapse.open  .tt-collapse-content{display:block;transition: 1s ease-in-out;}
.tt-collapse.close  .tt-collapse-content{display:none;transition: 1s ease-in-out;}
li a{cursor: pointer;}
.aside.leftColumn.column-open {
    overflow-y: scroll !important;z-index: 9999;
}
.tt-btn-col-close{cursor: pointer;}
.tt-btn-col-close a:before {
    margin-left: 10px;
}
</style>