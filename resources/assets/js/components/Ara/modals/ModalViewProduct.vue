<template>
  <!-- modal (quickViewModal) -->
<div class="modal  fade"  id="ModalquickView" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<div class="modal-body">
				<div class="tt-modal-quickview desctope" v-if="!!product" >
					<div class="row">
						<div class="col-12 col-md-5 col-lg-6">
							<div class="tt-mobile-product-slider arrow-location-center slick-initialized slick-slider">
								<button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" style="display: block;">Previous</button>
								<div tabindex="-1" role="option" aria-describedby="slick-slide03" data-slick-index="-1" aria-hidden="true" class="slick-slide slick-cloned" style="width: 431px;">
									<img alt="" :src="product.images[0]" data-was-processed="true" class="loading"></div>
								<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>
									<div class="tt-video-block">
										<a href="#" class="link-video"></a>
										<video class="movie" src="video/video.mp4" poster="video/video_img.jpg"></video>
									</div>
								</div>
						</div>
						<div class="col-12 col-md-7 col-lg-6 pt-3">
							<div class="tt-product-single-info">
								<div class="tt-add-info">
									<ul>
										<li><span style="font-weight:bold">الرقم التسلسلي : </span> {{product.sku }}</li>
										<li class="quantity-a mt-4">
											<label for=""><span class="mb-2" style="font-weight:bold">  الكمية:<br></span> </label>
											<span class="badge-info quantity-badge">{{getQuantity()}}</span>منتج من<span class="badge-info quantity-badge">{{product.variations.length}}</span> أنواع
										</li>
									</ul>
								</div>
								<h2 class="tt-title">{{ product.name.ar }}</h2>
								<div class="tt-price">
									<span class="new-price">{{currencySign}}{{ (currencyRate * (product.variations[0].sale_price)).toFixed(2)}}</span>
									<span class="old-price"></span>
								</div>
								<div class="tt-review">
									<div class="tt-rating">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star-half"></i>
										<i class="icon-star-empty"></i>
									</div>
									<!-- <a href="#">(1 Customer Review)</a> -->
								</div>
								<div class="tt-wrapper">
									{{product.description.ar ? product.description.ar : product.description[0] }}
								</div>
								 <div v-for="(attr,i) in product.attributes" :key="i">
									<div class="p-size mt-4 mb-4 text-right" v-if="attr.name.en == 'Size'" >
											<label for=""><strong class="mb-2"  >المقاسات المتوفرة : <br></strong></label>

											<span  v-for="(opt,i) in attr.options" :key="i"   class="border p-2 ml-2"
											>
											<!-- tr value is always available so its good to work on it -->
											{{opt.tr}}
											</span>

									</div>
								 </div>

								<!-- <div class="tt-swatches-container">
									<div class="tt-wrapper">
										<div class="tt-title-options">SIZE</div>
										<form class="form-default">
											<div class="form-group">
												<select class="form-control">
													<option>21</option>
													<option>25</option>
													<option>36</option>
												</select>
											</div>
										</form>
									</div>
									<div class="tt-wrapper">
										<div class="tt-title-options">COLOR</div>
										<form class="form-default">
											<div class="form-group">
												<select class="form-control">
													<option>Red</option>
													<option>Green</option>
													<option>Brown</option>
												</select>
											</div>
										</form>
									</div>
									<div class="tt-wrapper">
										<div class="tt-title-options">TEXTURE:</div>
										<ul class="tt-options-swatch options-large">
											<li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="wokiee_ecommerce/images/loader.svg" data-src="" alt="">
												</span>
												<span class="swatch-label color-black"></span>
											</a></li>
											<li class="active"><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="wokiee_ecommerce/images/loader.svg" data-src="" alt="">
												</span>
												<span class="swatch-label color-black"></span>
											</a></li>
											<li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="wokiee_ecommerce/images/loader.svg" data-src="" alt="">
												</span>
												<span class="swatch-label color-black"></span>
											</a></li>
											<li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="wokiee_ecommerce/images/loader.svg" data-src="" alt="">
												</span>
												<span class="swatch-label color-black"></span>
											</a></li>
											<li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="wokiee_ecommerce/images/loader.svg" data-src="" alt="">
												</span>
												<span class="swatch-label color-black"></span>
											</a></li>
										</ul>
									</div>
								</div> -->
								<div class="tt-wrapper">
									<div class="tt-row-custom-01">
										<div class="col-item">
											<div class="tt-input-counter style-01">
												<span class="minus-btn"></span>
												<input type="text" value="1" size="5">
												<span class="plus-btn"></span>
											</div>
										</div>
										<div class="col-item">
											<a href="#" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</template>

<script>
import currencyMixins from '../../../mixins/currencyMixins';
export default {
  data(){
      return {

	  }
  },
  mixins:[currencyMixins],
  methods:{
	  getQuantity(){
           let sum = 0;
           let availables = [];
           //get all index of the size attribute in list of attributes
           let ind=0;
           this.product.variations[0].attributes.forEach((attr,index) =>{
               if(attr.name.en == "Size"){ind = index};
           })
           this.product.variations.forEach( variation =>{
               //we test if a quantity is > 0 so the size is available for this variation
               if(variation.quantity > 0){
                  availables.push(variation.attributes[ind].option.tr);
               }
               sum+= variation.quantity;
           })
           this.availableVariationsSize = availables;
           // active the availabe sizes
           this.testAvailableSizes();
           return sum;

	   },
	    testAvailableSizes(){

           document.querySelectorAll('.p-size span').forEach(size =>{

               if(this.availableVariationsSize.indexOf(size.textContent.trim()) > -1){
                   size.classList.add('active')
               }
           })
          /*  if(this.availableVariationsSize.indexOf(opt) > -1){
               return true;
           }
           return false; */
       },
  },
  computed:{

	  product(){
		  return this.$store.getters.productInViewer
	  },

  }

}
</script>

<style scoped>
.quantity-badge{    padding: 5px 5px;
    border-radius: 50%;
    margin-right: 5px;margin-left: 5px;}
.p-size span.active {
    color: #fff;
    background: #17a2b8;
}
.quantity-badge {
      padding: 1px 7px;
    border-radius: 50%;
    margin-right: 5px;
    margin-left: 5px;
}
.badge-info{    color: #fff;
    background-color: #17a2b8;}
</style>