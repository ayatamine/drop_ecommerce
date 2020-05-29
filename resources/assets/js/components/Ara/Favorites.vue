<template>
  <div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">قائمة مفضلاتي</h1>
			<div class="tt-wishlist-box" id="js-wishlist-removeitem">
				<div class="tt-wishlist-list">

					<div class="tt-item" v-if="loading">
						<div class="tt-col-description">
							 <img src="wokiee_ecommerce/images/loader.svg" style="height: 9rem;"
                                data-src="images/product/product-18.jpg" alt="">
						</div>
						<div class="tt-col-btn">
							 <img src="wokiee_ecommerce/images/loader.svg" style="height: 9rem;"
                                    data-src="images/product/product-18.jpg" alt="">
						</div>
                         <img src="wokiee_ecommerce/images/loader.svg" style="height: 9rem;"
                          data-src="images/product/product-18.jpg" alt="">
					</div>
					<div class="tt-item" v-else v-for="(p,index) in favoritesProducts" :key="index">
						<div class="tt-col-description">
							<div class="tt-img ml-3">
								<img :src="p.images[0]" onerror="this.onerror=null; this.src='wokiee_ecommerce/images/promo/index-promo-img-03.jpg'" alt="product image">
							</div>
							<div class="tt-description">
								<h2 class="tt-title"><a href="product.html">{{ p.name.ar ? p.name.ar : p.name.en }}</a></h2>
								<div class="tt-price">
									<span class="new-price">{{currencySign}}{{ (currencyRate * (p.variations[0].sale_price)).toFixed(2)}}</span><!--
									<span class="old-price">$24</span> -->
								</div>
							</div>
						</div>
						<div class="tt-col-btn">
							<a href="#" class="tt-btn-addtocart" data-toggle="modal" data-target="#modalAddToCartProduct"><i class="icon-f-39"></i>إضافة للسلة</a>
							<a class="btn-link" href="#" data-toggle="modal" @click="setProductInViewer(p,$event)"
                            data-target="#ModalquickView"><i class="icon-f-73"></i>تفاصيل المنتج</a>
							<a class="btn-link js-removeitem" @click="removeFavorite(p.sku)"><i class="icon-h-02"></i>حدف</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</template>

<script>
import new_mixins from '../../mixins/new_mixins';
import currencyMixins from '../../mixins/currencyMixins';

export default {
   data(){
       return {
           favoritesProducts :[],
           loaded_sku:[],
           loading : true
       }
   },
   mixins:[new_mixins,currencyMixins],
   created(){
    this.setFavoritedProducts();
   },
   methods:{
       setFavoritedProducts(){
                   this.loading = true
                    axios.get(`/users/${this.auth.id}/favorites`)
                    .then(res =>{
                        let res_sku = res.data;
                        /* if(!!this.products){
                          this.favoritesProducts  = this.products.filter(item =>(res_sku.indexOf(item.sku) > -1 ) )
                        } */
                            let url = '/getProductBySku/';
                            let promisedItems = [];

                            res_sku.forEach(sku => {
                                promisedItems.push(axios.get(url + sku))
                            });

                            Promise.all(promisedItems)
                            .then(res => {

                                console.log(res)
                                res.forEach(p =>{
                                    //console.log(this.loaded_sku)
                                    if(!(this.loaded_sku.includes(p.data.product.sku))){
                                        this.favoritesProducts.push(p.data.product);
                                        this.loaded_sku.push(p.data.product.sku);
                                    }
                                })
                                this.loading = false
                            })
                    })



       },
       removeFavorite(sku){
           let prods = this.favoritesProducts;
            Swal.fire({
            text:   'هل أنت متأكد من حدف المنتج من المفضلة',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#E64545',
            confirmButtonText: 'نعم !',
            cancelButtonText: 'لا !'
            }).then((result) => {

            if (result.value) {
                axios.get('/user/favorites/'+sku+'/delete')
                .then(res => {
                   let fil= prods.filter(item => item.sku != sku)
                   this.favoritesProducts = fil
                   Swal.fire({
                     title:'تم الحدف',
                     text:res.data.msg,
                     type:'success'
                   })
                })

            }
          })
       },
   }


}
</script>

<style scoped>
.tt-img img {
    height: 12rem !important;
}
</style>