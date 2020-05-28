
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>

     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
     <script>window.laravel= {csrfToken : '{{csrf_token()}}'}</script>
     <meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Wokiee - Responsive HTML5 Template">
	<meta name="author" content="wokiee">
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="{{ asset('wokiee_ecommerce/css/theme.css')}}">
	<link rel="stylesheet" href="{{ asset('wokiee_ecommerce/css/rtl.css')}}">
    <style>
		#tt-pageContent{    padding-top: 3rem;}
	</style>
    <title>@yield('title')</title>
    @yield('css')

</head>
<body>
<div id="app">

    <global-index></global-index>

    <a href="#" class="tt-back-to-top">BACK TO TOP</a>
<!-- modal (AddToCartProduct) -->
<div class="modal  fade"  id="modalAddToCartProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<div class="modal-body">
				<div class="tt-modal-addtocart mobile">
					<div class="tt-modal-messages">
						<i class="icon-f-68"></i> Added to cart successfully!
					</div>
					<a href="#" class="btn-link btn-close-popup">CONTINUE SHOPPING</a>
			        <a href="shopping_cart_02.html" class="btn-link">VIEW CART</a>
			        <a href="page404.html" class="btn-link">PROCEED TO CHECKOUT</a>
				</div>
				<div class="tt-modal-addtocart desctope">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="tt-modal-messages">
								<i class="icon-f-68"></i> Added to cart successfully!
							</div>
							<div class="tt-modal-product">
								<div class="tt-img">
									<img src="{{-- {{asset('wokiee_ecommerce/images/loader.svg')}}--}}" data-src="{{asset('wokiee_ecommerce/images/product/product-01.jpg')}}" alt="">
								</div>
								<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
								<div class="tt-qty">
									QTY: <span>1</span>
								</div>
							</div>
							<div class="tt-product-total">
								<div class="tt-total">
									TOTAL: <span class="tt-price">$324</span>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<a href="#" class="tt-cart-total">
								There are 1 items in your cart
								<div class="tt-total">
									TOTAL: <span class="tt-price">$324</span>
								</div>
							</a>
							<a href="#" class="btn btn-border btn-close-popup">CONTINUE SHOPPING</a>
							<a href="shopping_cart_02.html" class="btn btn-border">VIEW CART</a>
							<a href="#" class="btn">PROCEED TO CHECKOUT</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- modalVideoProduct -->
<div class="modal fade"  id="modalVideoProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-video">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<div class="modal-body">
				<div class="modal-video-content">

				</div>
			</div>
		</div>
	</div>
</div>
<!-- modal (ModalSubsribeGood) -->
<div class="modal  fade"  id="ModalSubsribeGood" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xs">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<div class="modal-body">
				<div class="tt-modal-subsribe-good">
					<i class="icon-f-68"></i> You have successfully signed!
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal (newsletter) -->
{{-- <div class="modal  fade"  id="Modalnewsletter" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true"  data-pause=2000>
	<div class="modal-dialog modal-sm">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<form>
				<div class="modal-body no-background">
					<div class="tt-modal-newsletter">
						<div class="tt-modal-newsletter-promo">
							<div class="tt-title-small">BE THE FIRST<br> TO KNOW ABOUT</div>
							<div class="tt-title-large">WOKIEE</div>
							<p>
								HTML FASHION DROPSHIPPING THEME
							</p>
						</div>
						<p>
							By subscribe, you accept the terms &amp; privacy policy<br>
						</p>
						<div class="subscribe-form form-default">
							<div class="row-subscibe">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Enter your e-mail">
									<button type="submit" class="btn">JOIN US</button>
								</div>
							</div>
							<div class="checkbox-group">
								<input type="checkbox" id="checkBox1">
								<label for="checkBox1">
									<span class="check"></span>
									<span class="box"></span>
									Don’t Show This Popup Again
								</label>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div> --}}

</div>
<script src="{{ asset('wokiee_ecommerce/external/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/slick/slick.min.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
{{-- <script src="{{ asset('wokiee_ecommerce/external/panelmenu/panelmenu.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/instafeed/instafeed.min.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/countdown/jquery.plugin.min.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/countdown/jquery.countdown.min.js')}}"></script> --}}
<script src="{{ asset('wokiee_ecommerce/external/lazyLoad/lazyload.min.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/js/main.js')}}"></script>
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<!-- form validation and sending to mail -->
{{-- <script src="{{ asset('wokiee_ecommerce/external/form/jquery.form.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/form/jquery.validate.min.js')}}"></script>
<script src="{{ asset('wokiee_ecommerce/external/form/jquery.form-init.js')}}"></script> --}}
<script src="{{asset('js/app.js')}}"></script>
</body>
</html