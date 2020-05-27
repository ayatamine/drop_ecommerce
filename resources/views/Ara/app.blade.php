
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

    <title>@yield('title')</title>
    @yield('css')

</head>
<body>
<div id="app">
	{{-- <header> --}}
		<!-- tt-mobile menu -->
		{{-- <nav class="panel-menu mobile-main-menu mm-right">
			<ul>
				<li>
					<a href="index.html">HOME</a>
					<ul>
						<li>
							<a href="index.html">HOME STYLES</a>
							<ul>
								<li><a href="index.html">Home — Example 1 <span class="tt-badge tt-fatured">Popular</span></a></li>
								<li><a href="index-02.html">Home — Example 2</a></li>
								<li><a href="index-03.html">Home — Example 3</a></li>
								<li><a href="index-04.html">Home — Example 4 <span class="tt-badge tt-fatured">Popular</span></a></li>
								<li><a href="index-05.html">Home — Example 5</a></li>
								<li><a href="index-06.html">Home — Example 6</a></li>
								<li><a href="index-07.html">Home — Example 7</a></li>
								<li><a href="index-08.html">Home — Example 8</a></li>
								<li><a href="index-09.html">Home — Example 9</a></li>
							</ul>
						</li>
						<li>
							<a href="index.html">HOME STYLES</a>
							<ul>
								<li><a href="index-10.html">Home — Example 10</a></li>
								<li><a href="index-11.html">Home — Example 11</a></li>
								<li><a href="index-12.html">Home — Example 12</a></li>
								<li><a href="index-13.html">Home — Example 13</a></li>
								<li><a href="index-14.html">Home — Example 14</a></li>
								<li><a href="index-15.html">Home — Example 15</a></li>
								<li><a href="index-16.html">Home — Example 16 <span class="tt-badge tt-fatured">Popular</span></a></li>
								<li><a href="index-17.html">Home — Example 17</a></li>
								<li><a href="index-18.html">Home — Example 18</a></li>
							</ul>
						</li>
						<li>
							<a href="index.html">HOME SKINS <span class="tt-badge tt-sale">HOT</span></a>
							<ul>
								<li><a href="index-skin-snowboards.html">Snowboards Shop <span class="tt-badge tt-fatured">Popular</span></a></li>
								<li><a href="index-skin-phones.html">Phones Shop <span class="tt-badge tt-fatured">Popular</span></a></li>
								<li><a href="index-skin-bikes.html">Bikes Shop <span class="tt-badge tt-fatured">Popular</span></a></li>
								<li><a href="index-skin-lingerie.html">Lingerie Shop</a></li>
								<li><a href="index-skin-furniture.html">Furniture Shop</a></li>
								<li><a href="index-skin-books.html">Books Shop <span class="tt-badge tt-new">New</span></a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="listing-left-column.html">SHOP</a>
					<ul>
						<li>
							<a href="listing-left-column.html">LISTING STYLES</a>
							<ul>
								<li><a href="listing-left-column.html">Listing With Left Sidebar</a></li>
								<li><a href="listing-right-column.html">Listing With Right Sidebar</a></li>
								<li><a href="listing-not-sidebar.html">Listing Not Sidebar</a></li>
								<li><a href="listing-not-sidebar-full-width.html">Listing Not Sidebar Full Width</a></li>
								<li><a href="listing-metro.html">Listing Metro</a></li>
								<li><a href="listing-left-column-with-block.html">Listing With Custom HTML Block</a></li>
								<li><a href="listing-collection.html">Listing Collection</a></li>
								<li><a href="lookbook.html">Look Book</a></li>
							</ul>
						</li>
						<li>
							<a href="product.html">PRODUCT PAGE STYLES</a>
							<ul>
								<li><a href="product.html">Product Example 1</a></li>
								<li><a href="product-02.html">Product Example 2</a></li>
								<li><a href="product-03.html">Product Example 3</a></li>
								<li><a href="product-04.html">Product Example 4</a></li>
								<li><a href="product-variable.html">Product Layout</a></li>
								<li><a href="product-three-columns.html">Three Columns</a></li>
							</ul>
						</li>
						<li>
							<a href="product-variable.html">PRODUCT PAGE TYPES</a>
							<ul>
								<li><a href="product.html">Standard Product</a></li>
								<li><a href="product-variable.html">Variable Product</a></li>
								<li><a href="product-04.html">Grouped Product</a></li>
								<li><a href="product-label-new.html">New Product</a></li>
								<li><a href="product-label-sale.html">Sale Product</a></li>
								<li><a href="product-label-out-of-stock.html">Out Of Stock Product</a></li>
							</ul>
						</li>
						<li>
							<a href="shopping_cart_02.html">OTHER PAGES</a>
							<ul>
								<li><a href="shopping_cart_02.html">Cart</a></li>
								<li><a href="shopping_cart_01.html">Cart With Right Col</a></li>
								<li><a href="account.html">Account</a></li>
								<li><a href="account_address.html">Account Address</a></li>
								<li><a href="account_address_fields.html">Account Address Fields</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="blog-listing-without-col.html">BLOG</a>
					<ul>
						<li>
							<a href="blog-listing-without-col.html">BLOG STYLE</a>
							<ul>
								<li><a href="blog-listing-without-col.html">Standard Without Sidebar</a></li>
								<li><a href="blog-listing-col-left.html">Standard With Left Sidebar</a></li>
								<li><a href="blog-listing-col-right.html">Standard With Right Sidebar</a></li>
								<li><a href="blog-masonry-col-2.html">Two Colums</a></li>
								<li><a href="blog-masonry-col-3.html">Three Colums</a></li>
								<li><a href="blog-masonry-col-3-filter.html">Three Colums With Filter</a></li>
							</ul>
						</li>
						<li>
							<a href="blog-single-post.html">POST TYPE</a>
							<ul>
								<li><a href="blog-single-post.html">Standard</a></li>
								<li><a href="blog-single-post-gallery.html">Gallery</a></li>
								<li><a href="blog-single-post-link.html">Link</a></li>
								<li><a href="blog-single-post-quote.html">Quote</a></li>
								<li><a href="blog-single-post-video.html">Video</a></li>
								<li><a href="blog-single-post-audio.html">Audio</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="portfolio-col-grid-four.html">PORTFOLIO</a>
					<ul>
						<li>
							<a href="portfolio-col-grid-four.html">BOXED GRID</a>
							<ul>
								<li><a href="portfolio-col-grid-two.html">Two Colums</a></li>
								<li><a href="portfolio-col-grid-three.html">Three Colums</a></li>
								<li><a href="portfolio-col-grid-four.html">Four Colums</a></li>
								<li><a href="portfolio-col-grid-four-without-filter.html">Four Colums Without Filter</a></li>
							</ul>
						</li>
						<li>
							<a href="portfolio-col-wide-three.html">BOXED STYLES</a>
							<ul>
								<li><a href="portfolio-col-wide-two.html">Two Colums</a></li>
								<li><a href="portfolio-col-wide-three.html">Three Colums</a></li>
								<li><a href="portfolio-col-wide-four.html">Four Colums</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="about.html">PAGES</a>
					<ul>
						<li><a href="about.html">About Example 1</a>
							<ul>
								<li><a href="about.html">Link Level 1</a></li>
								<li>
									<a href="about.html">Link Level 1</a>
									<ul>
										<li><a href="about.html">Link Level 2</a></li>
										<li>
											<a href="about.html">Link Level 2</a>
											<ul>
												<li><a href="about.html">Link Level 3</a></li>
												<li><a href="about.html">Link Level 3</a></li>
												<li><a href="about.html">Link Level 3</a></li>
												<li>
													<a href="about.html">Link Level 3</a>
													<ul>
														<li>
															<a href="about.html">Link Level 4</a>
															<ul>
																<li><a href="about.html">Link Level 5</a></li>
																<li><a href="about.html">Link Level 5</a></li>
																<li><a href="about.html">Link Level 5</a></li>
																<li><a href="about.html">Link Level 5</a></li>
																<li><a href="about.html">Link Level 5</a></li>
															</ul>
														</li>
														<li><a href="about.html">Link Level 4</a></li>
													</ul>
												</li>
												<li><a href="about.html">Link Level 3</a></li>
											</ul>
										</li>
										<li><a href="about.html">Link Level 2</a></li>
										<li><a href="about.html">Link Level 2</a></li>
									</ul>
								</li>
								<li><a href="about.html">Link Level 1</a></li>
								<li><a href="about.html">Link Level 1</a></li>
								<li><a href="about.html">Link Level 1</a></li>
							</ul>
						</li>
						<li><a href="about-02.html">About Example 2</a></li>
						<li><a href="contact.html">Contacts Example 1</a></li>
						<li><a href="contact-02.html">Contacts Example 2</a></li>
						<li><a href="services.html">Services</a></li>
						<li><a href="faq.html">FAQ</a></li>
						<li><a href="coming-soon.html">Coming Soon</a></li>
						<li><a href="page404.html">Page 404</a></li>
						<li><a href="typography.html">Typography</a></li>
						<li><a href="gift-cart.html">Gift Cart</a></li>
						<li>
							<a href="compare.html">Compare</a>
							<ul>
								<li><a href="compare.html">Compare 01</a></li>
								<li><a href="compare-02.html">Compare 02</a></li>
							</ul>
						</li>
						<li><a href="wishlist.html">Wishlist</a></li>
						<li>
							<a href="empty-search.html">Empty</a>
							<ul>
								<li><a href="empty-cart.html">Empty Cart</a></li>
								<li><a href="empty-search.html">Empty Search</a></li>
								<li><a href="empty-wishlist.html">Empty Wishlist</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="listing-left-column.html">WOMEN</a>
					<ul>
						<li>
							<a href="listing-left-column.html">TOPS</a>
							<ul>
								<li><a href="listing-left-column.html">Blouses &amp; Shirts</a></li>
								<li><a href="listing-left-column.html">Dresses <span class="tt-badge tt-new">New</span></a></li>
								<li>
									<a href="listing-left-column.html">Tops &amp; T-shirts</a>
									<ul>
										<li><a href="listing-left-column.html">Link Level 1</a></li>
										<li>
											<a href="listing-left-column.html">Link Level 1</a>
											<ul>
												<li><a href="listing-left-column.html">Link Level 2</a></li>
												<li>
													<a href="listing-left-column.html">Link Level 2</a>
													<ul>
														<li><a href="listing-left-column.html">Link Level 3</a></li>
														<li><a href="listing-left-column.html">Link Level 3</a></li>
														<li><a href="listing-left-column.html">Link Level 3</a></li>
														<li>
															<a href="listing-left-column.html">Link Level 3</a>
															<ul>
																<li>
																	<a href="listing-left-column.html">Link Level 4</a>
																	<ul>
																		<li><a href="listing-left-column.html">Link Level 5</a></li>
																		<li><a href="listing-left-column.html">Link Level 5</a></li>
																		<li><a href="listing-left-column.html">Link Level 5</a></li>
																		<li><a href="listing-left-column.html">Link Level 5</a></li>
																		<li><a href="listing-left-column.html">Link Level 5</a></li>
																	</ul>
																</li>
																<li><a href="listing-left-column.html">Link Level 4</a></li>
																<li><a href="listing-left-column.html">Link Level 4</a></li>
																<li><a href="listing-left-column.html">Link Level 4</a></li>
																<li><a href="listing-left-column.html">Link Level 4</a></li>
															</ul>
														</li>
														<li><a href="listing-left-column.html">Link Level 3</a></li>
													</ul>
												</li>
												<li><a href="listing-left-column.html">Link Level 2</a></li>
												<li><a href="listing-left-column.html">Link Level 2</a></li>
												<li><a href="listing-left-column.html">Link Level 2</a></li>
											</ul>
										</li>
										<li><a href="listing-left-column.html">Link Level 1</a></li>
										<li><a href="listing-left-column.html">Link Level 1</a></li>
										<li><a href="listing-left-column.html">Link Level 1</a></li>
									</ul>
								</li>
								<li><a href="listing-left-column.html">Sleeveless Tops</a></li>
								<li><a href="listing-left-column.html">Sweaters</a></li>
								<li><a href="listing-left-column.html">Jackets</a></li>
								<li><a href="listing-left-column.html">Outerwear</a></li>
							</ul>
						</li>
						<li>
							<a href="listing-left-column.html">BOTTOMS</a>
							<ul>
								<li><a href="listing-left-column.html">Trousers <span class="tt-badge tt-fatured">Fatured</span></a></li>
								<li><a href="listing-left-column.html">Jeans</a></li>
								<li><a href="listing-left-column.html">Leggings</a></li>
								<li><a href="listing-left-column.html">Jumpsuit &amp; Shorts</a></li>
								<li><a href="listing-left-column.html">Skirts</a></li>
								<li><a href="listing-left-column.html">Tights</a></li>
							</ul>
						</li>
						<li>
							<a href="listing-left-column.html">ACCESSORIES</a>
							<ul>
								<li><a href="listing-left-column.html">Jewellery</a></li>
								<li><a href="listing-left-column.html">Hats</a></li>
								<li><a href="listing-left-column.html">Scarves &amp; Snoods</a></li>
								<li><a href="listing-left-column.html">Belts</a></li>
								<li><a href="listing-left-column.html">Bags</a></li>
								<li><a href="listing-left-column.html">Shoes</a></li>
								<li><a href="listing-left-column.html">Sunglasses <span class="tt-badge tt-sale">Sale 15%</span></a></li>
							</ul>
						</li>
						<li>
							<a href="listing-left-column.html">SPECIALS</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="listing-right-column.html">MEN</a>
					<ul>
						<li>
							<a href="listing-right-column.html">TOPS</a>
							<ul>
								<li><a href="listing-right-column.html">Blouses &amp; Shirts</a></li>
								<li><a href="listing-right-column.html">Dresses <span class="tt-badge tt-new">New</span></a></li>
								<li>
									<a href="listing-right-column.html">Tops &amp; T-shirts</a>
									<ul>
										<li><a href="listing-right-column.html">Link Level 1</a></li>
										<li>
											<a href="listing-right-column.html">Link Level 1</a>
											<ul>
												<li><a href="listing-right-column.html">Link Level 2</a></li>
												<li>
													<a href="listing-right-column.html">Link Level 2</a>
													<ul>
														<li><a href="listing-right-column.html">Link Level 3</a></li>
														<li><a href="listing-right-column.html">Link Level 3</a></li>
														<li><a href="listing-right-column.html">Link Level 3</a></li>
														<li>
															<a href="listing-right-column.html">Link Level 3</a>
															<ul>
																<li>
																	<a href="listing-right-column.html">Link Level 4</a>
																	<ul>
																		<li><a href="listing-right-column.html">Link Level 5</a></li>
																		<li><a href="listing-right-column.html">Link Level 5</a></li>
																		<li><a href="listing-right-column.html">Link Level 5</a></li>
																		<li><a href="listing-right-column.html">Link Level 5</a></li>
																		<li><a href="listing-right-column.html">Link Level 5</a></li>
																	</ul>
																</li>
																<li><a href="listing-right-column.html">Link Level 4</a></li>
																<li><a href="listing-right-column.html">Link Level 4</a></li>
																<li><a href="listing-right-column.html">Link Level 4</a></li>
																<li><a href="listing-right-column.html">Link Level 4</a></li>
															</ul>
														</li>
														<li><a href="listing-right-column.html">Link Level 3</a></li>
													</ul>
												</li>
												<li><a href="listing-right-column.html">Link Level 2</a></li>
												<li><a href="listing-right-column.html">Link Level 2</a></li>
												<li><a href="listing-right-column.html">Link Level 2</a></li>
											</ul>
										</li>
										<li><a href="listing-right-column.html">Link Level 1</a></li>
										<li><a href="listing-right-column.html">Link Level 1</a></li>
										<li><a href="listing-right-column.html">Link Level 1</a></li>
									</ul>
								</li>
								<li><a href="listing-right-column.html">Sleeveless Tops</a></li>
								<li><a href="listing-right-column.html">Sweaters</a></li>
								<li><a href="listing-right-column.html">Jackets</a></li>
								<li><a href="listing-right-column.html">Outerwear</a></li>
							</ul>
						</li>
						<li>
							<a href="listing-right-column.html">BOTTOMS</a>
							<ul>
								<li><a href="listing-right-column.html">Trousers <span class="tt-badge tt-fatured">Fatured</span></a></li>
								<li><a href="listing-right-column.html">Jeans</a></li>
								<li><a href="listing-right-column.html">Leggings</a></li>
								<li><a href="listing-right-column.html">Jumpsuit &amp; shorts</a></li>
								<li><a href="listing-right-column.html">Skirts</a></li>
								<li><a href="listing-right-column.html">Tights</a></li>
							</ul>
						</li>
						<li>
							<a href="listing-right-column.html">ACCESSORIES</a>
							<ul>
								<li><a href="listing-right-column.html">Jewellery</a></li>
								<li><a href="listing-right-column.html">Hats</a></li>
								<li><a href="listing-right-column.html">Scarves &amp; Snoods</a></li>
								<li><a href="listing-right-column.html">Belts</a></li>
								<li><a href="listing-right-column.html">Bags</a></li>
								<li><a href="listing-right-column.html">Shoes</a></li>
								<li><a href="listing-right-column.html">Sunglasses <span class="tt-badge tt-sale">Sale 15%</span></a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="index-rtl.html">RTL</a></li>
			</ul>
			<div class="mm-navbtn-names">
				<div class="mm-closebtn">Close</div>
				<div class="mm-backbtn">Back</div>
			</div>
		</nav> --}}
		<!-- tt-mobile-header -->
		{{-- <div class="tt-mobile-header">
			<div class="container-fluid">
				<div class="tt-header-row">
					<div class="tt-mobile-parent-menu">
						<div class="tt-menu-toggle">
							<i class="icon-03"></i>
						</div>
					</div>
					<!-- search -->
					<div class="tt-mobile-parent-search tt-parent-box"></div>
					<!-- /search -->
					<!-- cart -->
					<div class="tt-mobile-parent-cart tt-parent-box"></div>
					<!-- /cart -->
					<!-- account -->
					<div class="tt-mobile-parent-account tt-parent-box"></div>
					<!-- /account -->
					<!-- currency -->
					<div class="tt-mobile-parent-multi tt-parent-box"></div>
					<!-- /currency -->
				</div>
			</div>
			<div class="container-fluid tt-top-line">
				<div class="row">
					<div class="tt-logo-container">
						<!-- mobile logo -->
						<a class="tt-logo tt-logo-alignment" href="index.html"><img src="{{asset('wokiee_ecommerce/images/custom/logo.png')}}" alt=""></a>
						<!-- /mobile logo -->
					</div>
				</div>
			</div>
		</div> --}}
		<!-- tt-desktop-header -->

		<!-- stuck nav -->
		{{-- <div class="tt-stuck-nav">
			<div class="container">
				<div class="tt-header-row ">
					<div class="tt-stuck-parent-menu"></div>
					<div class="tt-stuck-parent-search tt-parent-box"></div>
					<div class="tt-stuck-parent-cart tt-parent-box"></div>
					<div class="tt-stuck-parent-account tt-parent-box"></div>
					<div class="tt-stuck-parent-multi tt-parent-box"></div>
				</div>
			</div>
		</div> --}}
	{{-- </header> --}}
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