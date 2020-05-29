<template>
  <div id="tt-pageContent">
	<div class="container-indent">
		<div class="container">
			<h1 class="tt-title-subpages noborder">سلة التسوق </h1>
			<div class="row">
				<div class="col-sm-12 col-xl-8">
					<div class="tt-shopcart-table">
                        <table v-if="!itemsloaded"></table>
						<table v-else>
							<tbody v-if="cartItems.length">

								<tr v-for="(p,index) in cartItems" :key="index" >
									<td>
										<a style="cursor:pointer"
                                        class="tt-btn-close" @click="removeFromCart(p,$event)"></a>
									</td>
									<td>
										<div class="tt-product-img">
											<img :src="p.images[0]" style="    height: 67px;" data-src="images/product/product-01.jpg" alt="">
										</div>
									</td>
									<td>
										<h2 class="tt-title">
											<a href="#">{{ p.name.ar ? p.name.ar : p.name.en }}</a>
										</h2>
										<ul class="tt-list-parameters">
											<li>
												<div class="tt-price">
													{{currencySign}}{{ (currencyRate * (p.variations[0].sale_price)).toFixed(2)}}
												</div>
											</li>
											<li>
												<div class="detach-quantity-mobile"></div>
											</li>
											<li>
												<div class="tt-price subtotal">
													$124
												</div>
											</li>
										</ul>
									</td>
									<td>
										<div class="tt-price">
											$124
										</div>
									</td>
									<td>
										<div class="detach-quantity-desctope">
											<div class="tt-input-counter style-01">
												<span class="minus-btn"></span>
												<input type="text" value="1" size="5">
												<span class="plus-btn"></span>
											</div>
										</div>
									</td>
									<td>
										<div class="tt-price subtotal">
											$124
										</div>
									</td>
								</tr>
							</tbody>
                            <tbody v-else>
                                <tr>
                                    <td colspan="6"> لايوجد أي منتج</td>
                                </tr>
                            </tbody>
						</table>
						<div class="tt-shopcart-btn">
							<div class="col-left">
								<a class="btn-link" href="#"><i class="icon-e-19"></i>مواصلة التسوق</a>
							</div>
							<div class="col-right">
								<a class="btn-link" href="#"><i class="icon-h-02"></i>مسح سلة التسوق</a>
								<a class="btn-link" href="#"><i class="icon-h-48"></i>تحديث السلة</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-xl-4">
					<div class="tt-shopcart-wrapper">
						<div class="tt-shopcart-box">
							<h4 class="tt-title">
								تقدير الشحن والضرائب
							</h4>
							<p>Enter your destination to get a shipping estimate.</p>
							<form class="form-default">
								<div class="form-group">
									<label for="address_country">COUNTRY <sup>*</sup></label>
									<select id="address_country" class="form-control">
										<option>Austria</option>
										<option>Belgium</option>
										<option>Cyprus</option>
										<option>Croatia</option>
										<option>Czech Republic</option>
										<option>Denmark</option>
										<option>Finland</option>
										<option>France</option>
										<option>Germany</option>
										<option>Greece</option>
										<option>Hungary</option>
										<option>Ireland</option>
										<option>France</option>
										<option>Italy</option>
										<option>Luxembourg</option>
										<option>Netherlands</option>
										<option>Poland</option>
										<option>Portugal</option>
										<option>Slovakia</option>
										<option>Slovenia</option>
										<option>Spain</option>
										<option>United Kingdom</option>
									</select>
								</div>
								<div class="form-group">
									<label for="address_province">STATE/PROVINCE <sup>*</sup></label>
									<select id="address_province" class="form-control">
										<option>State/Province</option>
									</select>
								</div>
								<div class="form-group">
									<label for="address_zip">ZIP/POSTAL CODE <sup>*</sup></label>
									<input type="text" name="name" class="form-control" id="address_zip" placeholder="Zip/Postal Code">
								</div>
								<a href="#" class="btn btn-border">CALCULATE SHIPPING</a>
								<p>
									There is one shipping rate available for Alabama, Tanzania, United Republic Of.
								</p>
								<ul class="tt-list-dot list-dot-large">
									<li><a href="#">International Shipping at $20.00</a></li>
								</ul>
							</form>
						</div>
						<div class="tt-shopcart-box">
							<h4 class="tt-title">
								NOTE
							</h4>
							<p>Add special instructions for your order...</p>
							<form class="form-default">
								<textarea class="form-control" rows="7"></textarea>
							</form>
						</div>
						<div class="tt-shopcart-box tt-boredr-large">
							<table class="tt-shopcart-table01">
								<tbody>
									<tr>
										<th>SUBTOTAL</th>
										<td>$324</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th>GRAND TOTAL</th>
										<td>$324</td>
									</tr>
								</tfoot>
							</table>
							<a href="#" class="btn btn-lg"><span class="icon icon-check_circle"></span>PROCEED TO CHECKOUT</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</template>

<script>
import currencyMixins from '../../mixins/currencyMixins'
export default {
 data(){
        return {
				loading : true,
				itemsloaded : false,
				loaded_sku :[],
				SkuQuantity :[],
				//totalPrice : 0,
        }
	},
	mixins:[currencyMixins],
    computed:{
        auth(){
            return this.$store.getters.auth
		},
		cartItems(){
			return this.$store.getters.cartItems
		}
    },
    created(){
       this.getCartItems()
    },
    methods:{
       setUser(){
           this.$store.commit('setUser')
       },
       logout(){
           axios.get('/userlogout')
           .then(res =>{
               window.location.pathname ='/'
              // console.log('logout',res)
           })
           .catch(err => {
               console.log(err)
           })
	   },
	   getCartItems(){
				this.loading = true
				this.itemsloaded = false;
				let sku_quantity_map = new Map();
				if(!this.itemsloaded ){
                    axios.get(`/users/${this.auth.id}/cartItems`)
                    .then(res =>{
						let res_sku =[]
						res.data.forEach(item =>{
							res_sku.push(item.sku)
							this.SkuQuantity.push(item.quantity)
						});

                        /* if(!!this.products){
                          this.favoritesProducts  = this.products.filter(item =>(res_sku.indexOf(item.sku) > -1 ) )
                        } */
                            let url = '/getProductBySku/';
                            let promisedItems = [];

                            res_sku.forEach(sku => {
                                promisedItems.push(axios.get(url + sku))
                            });
							this.cartItems.length  = 0;
                            Promise.all(promisedItems)
                            .then(res => {

								//console.log(res)
								//let tot = 0;
                                res.forEach((p,i) =>{
                                    //console.log(this.loaded_sku)

                                        this.cartItems.push(p.data.product);
										this.loaded_sku.push(p.data.product.sku);
										//tot+= ((this.currencyRate * (p.data.product.variations[0].sale_price )).toFixed(2)) * parseInt(this.SkuQuantity[i]);


								})
								//console.log(tot)
								//this.totalPrice = tot;
								this.loading = false

								this.itemsloaded = true
                            })
					})
				}
	   },
	   removeFromCart(product,event){
		 this.$store.dispatch('removeFromCart',product)
		 .then(res => {
			 if(res == 'done'){
					this.getCartItems()
			 }
		 })

	   }
    }
}
</script>

<style>

</style>