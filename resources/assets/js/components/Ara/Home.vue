<template>
<div>
   <div id="tt-pageContent">

    <div class="container-indent0" v-if="categories">
		<div class="container-fluid">
			<div class="row tt-layout-promo-box">
				<div class="col-sm-12 col-md-6">
					<div class="row">
						<div class="col-sm-6">
							<a href="listing-left-column.html" v-for="i in 2" :key="i" class="tt-promo-box tt-one-child hover-type-2">
								<img src="wokiee_ecommerce/images/promo/index-promo-img-01.jpg"  class="catimg"  onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-01.jpg'"
								data-src="wokiee_ecommerce/images/promo/index-promo-img-01.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">{{categories[i].name.ar}}</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-6">
							<a href="listing-left-column.html"  class="tt-promo-box tt-one-child hover-type-2">
								<img src="wokiee_ecommerce/images/promo/index-promo-img-03.jpg" class="catimg"  onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-03.jpg'"
								 data-src="wokiee_ecommerce/images/promo/index-promo-img-03.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">{{ categories[3] ? categories[3].name.en : '' }}</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="row">
						<div class="col-sm-6" v-for="i in (0,2)" :key="i">
							<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
								<img src="wokiee_ecommerce/images/promo/index-promo-img-04.jpg" class="catimg"  onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-04.jpg'"
								data-src="wokiee_ecommerce/images/promo/index-promo-img-04.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">{{ categories.slice(3)[i].name.ar }}</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-sm-12">
							<a href="listing-left-column.html" class="tt-promo-box tt-one-child">
								<img src="wokiee_ecommerce/images/promo/index-promo-img-06.jpg" class="catimg"  onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-06.jpg'"
								 data-src="wokiee_ecommerce/images/promo/index-promo-img-06.jpg" alt="">
								<div class="tt-description">
									<div class="tt-description-wrapper">
										<div class="tt-background"></div>
										<div class="tt-title-small">{{ categories.slice(6)[0] ? categories.slice(6)[0].name.ar : '' }}</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title">
				<h1 class="tt-title">المميزة</h1>
				<div class="tt-description">أكثر مشاهدة هدا الاسبوع</div>
			</div>
			<div class="row tt-layout-product-item" v-if="featuredProducts.length">
				<div class="col-6 col-md-4 col-lg-3" v-for="(p,index) in featuredProducts.slice(0,8)" :key="index">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview"
							@click="setProductInViewer(p,$event)"
							 data-toggle="modal" data-target="#ModalquickView"></a>
							<a href="#" class="tt-btn-wishlist"></a>
							<a href="#" class="tt-btn-compare"></a>
							<a href="product.html">
								<span class="tt-img"  v-if="loading"><img src="wokiee_ecommerce/images/loader.svg" data-src="wokiee_ecommerce/images/product/product-03.jpg" alt=""></span>
								<span class="tt-img-roll-over" v-if="loading"><img src="wokiee_ecommerce/images/loader.svg" data-src="wokiee_ecommerce/images/product/product-03-02.jpg" alt=""></span>
								<span class="tt-img"  v-if="!loading"><img onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-03.jpg'"
								:src="p.images[0]" data-src="wokiee_ecommerce/images/product/product-03.jpg" alt=""></span>
								<span class="tt-img-roll-over" v-if="!loading"><img onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-03.jpg'"
								:src="p.images[0]"  data-src="wokiee_ecommerce/images/product/product-03-02.jpg" alt=""></span>

								<span class="tt-label-location">
									<span class="tt-label-new">New</span>
								</span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">{{p.categories[0].name.ar }}</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-half"></i>
									<i class="icon-star-empty"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">{{p.name.ar}}</a></h2>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#"
									 class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn" >
									<a href="#" class="tt-btn-quickview"
									@click="setProductInViewer(p,$event)"
									data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"
									@click="addPToFavorite(p,$event)"
									></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
    <div class="container-indent">
		<div class="container-fluid-custom">
			<div class="row tt-layout-promo-box">
				<div class="col-sm-6 col-md-4">
					<a href="listing-left-column.html" class="tt-promo-box">
						<img src="wokiee_ecommerce/images/promo/index-promo-img-07.jpg" data-src="wokiee_ecommerce/images/promo/index-promo-img-07.jpg" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">مبيعات التخليص الشتوي للشتاء</div>
								<div class="tt-title-large">خصم حتى<span class="tt-base-color">50%</span></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-4">
					<a href="listing-left-column.html" class="tt-promo-box">
						<img src="wokiee_ecommerce/images/promo/index-promo-img-08.jpg" data-src="wokiee_ecommerce/images/promo/index-promo-img-08.jpg" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">الصيفية <span class="tt-base-color">2018</span></div>
								<div class="tt-title-large">وصلت حديثا</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-4">
					<a href="listing-left-column.html" class="tt-promo-box">
						<img src="wokiee_ecommerce/images/promo/index-promo-img-09.jpg" data-src="wokiee_ecommerce/images/promo/index-promo-img-09.jpg" alt="">
						<div class="tt-description">
							<div class="tt-background"></div>
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">مجموعة جديدة</div>
								<div class="tt-title-large"><span class="tt-base-color">حقائب اليد</span></div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title">
				<h1 class="tt-title">الأكثر مبيعا</h1>
				<div class="tt-description">الأكثر مبيعا هدا الاسبوع</div>
			</div>
			<div class="row tt-layout-product-item" v-if="featuredProducts.length">
				<div class="col-6 col-md-4 col-lg-3" v-for="(p,index) in featuredProducts.slice(8,14)" :key="index">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview"
							@click="setProductInViewer(p,$event)"
							 data-toggle="modal" data-target="#ModalquickView"></a>
							<a href="#" class="tt-btn-wishlist"></a>
							<a href="#" class="tt-btn-compare"></a>
							<a href="product.html">
								<span class="tt-img"  v-if="loading"><img src="wokiee_ecommerce/images/loader.svg" data-src="wokiee_ecommerce/images/product/product-03.jpg" alt=""></span>
								<span class="tt-img-roll-over" v-if="loading"><img src="wokiee_ecommerce/images/loader.svg" data-src="wokiee_ecommerce/images/product/product-03-02.jpg" alt=""></span>
								<span class="tt-img"  v-if="!loading"><img onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-03.jpg'"
								:src="p.images[0]" data-src="wokiee_ecommerce/images/product/product-03.jpg" alt=""></span>
								<span class="tt-img-roll-over" v-if="!loading"><img onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-03.jpg'"
								:src="p.images[0]"  data-src="wokiee_ecommerce/images/product/product-03-02.jpg" alt=""></span>

								<span class="tt-label-location">
									<span class="tt-label-new">New</span>
								</span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">{{p.categories[0].name.ar }}</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-half"></i>
									<i class="icon-star-empty"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">{{p.name.ar}}</a></h2>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" @click="setProductInViewer(p,$event)"
									data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
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
export default {
  data(){
      return {

		  loading :false,
      }
  },
  components:{
	  modalViewProduct
  },
   mixins:[mixins],
  created(){

	  this.setCategories();
  },
  mounted(){
	  this.loading = true;
	  this.getFirstProducts();
  },
  methods:{
      getFirstProducts(){
          let sessionproducts = localStorage.getItem('featuredProducts');
           if(!!sessionproducts){
			  this.$store.commit('setFeateredProducts',JSON.parse(sessionproducts))
			  this.loading = false;
              //this.products = JSON.parse(sessionproducts)
              //this.$store.state.currentProducts = JSON.parse(sessionproducts).splice(1,10)
           }else{
              this.fetchfirstProducts();

           }


     },
      fetchfirstProducts(){
          this.loading = true;
          axios.get('/get10Products')
          .then(res => {
            console.log(res)


            setTimeout(() => {
              this.loading = false;
            }, 3000);
            if(!res.data.products){
                 this.fetchfirstProducts();
            }else{
			   this.$store.commit('setFeateredProducts',res.data.products)

			}
			this.loading = false;
          })
          .catch(error => {
                    this.loading = false
                    //do whatever with response
                })
	  },
	  setCategories(){
		 this.$store.dispatch('setCategories');
		// console.log($('.cateimg').data('src'))
	  },
	  getcatsrc(catname){
        let products = this.featuredProducts

          let fil = products
          .filter((element) =>
              element.categories.some((c) => c.name.en == catname))
          .map(element => {
              return Object.assign({}, element, {categories : element.categories.filter(subElement => subElement.name.en == catname)});

          });
          //get the image of first product
          let firstp = fil[Math.floor(Math.random() * (fil.length - 1))];
          return firstp.images[0];
	 },
	 setProductInViewer(product,event){
		 console.log('cliken',product)
         this.$store.commit('setProductInViewer',product);
	 }
  },
  computed:{
      featuredProducts(){
          return this.$store.getters.featuredProducts
	  },
      categories(){
          return this.$store.getters.categories
	  }
  }
}
$(document).on('mouseenter','.tt-product.thumbprod-center',function(){
	console.log('yes')
  $('.tt-product.thumbprod-center').removeClass('hovered')
  $(this).addClass('hovered')
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
</style>