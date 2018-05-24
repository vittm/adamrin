@extends('layout')
@section('content')
<!-- Slide show -->
<div class="slide-home1">
		<div class="slide-container">
			<img src="images/sliders/1.jpg" alt="">
			<img src="images/sliders/2.jpg" alt="">
			<img src="images/sliders/3.jpg" alt="">
			<img src="images/sliders/1.jpg" alt="">
			<img src="images/sliders/2.jpg" alt="">
			<img src="images/sliders/3.jpg" alt="">
		</div>
		<div class="thumbs">
			<a data-slide-index="0" href=""><img src="images/sliders/thumb1.jpg" alt="" /></a>
			<a data-slide-index="1" href=""><img src="images/sliders/thumb2.jpg" alt="" /></a>
			<a data-slide-index="2" href=""><img src="images/sliders/thumb3.jpg" alt="" /></a>
			<a data-slide-index="3" href=""><img src="images/sliders/thumb4.jpg" alt="" /></a>
			<a data-slide-index="4" href=""><img src="images/sliders/thumb5.jpg" alt="" /></a>
			<a data-slide-index="5" href=""><img src="images/sliders/thumb6.jpg" alt="" /></a>
		</div>
	</div>
	<!-- ./Slide show -->
	<!-- promotions -->
	<div class="margin-top-60">
		<div class="container">
			<div class="row margin-0">
				<div class="col-sm-12 col-md-4 padding-0 wow fadeInLeft">
					<div class="kt-banner block-banner-text margin-bottom-30" data-height="214" data-background="images/banners/4.jpg" data-positionleft="30px" data-verticalmiddle="middle">
						<a href="#" class="bg-image">Banner Bg</a>
						<div class="content">
							<h3 class="title">Creative</h3>
							<h4 class="subtitle">Work Lamp</h4>
							<a class="link-more" href="#"><i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 padding-0 wow fadeInUp">
					<div class="kt-banner block-banner-text white margin-bottom-30" data-height="214" data-background="images/banners/5.jpg" data-positionleft="30px" data-verticalmiddle="middle">
						<a href="#" class="bg-image">Banner Bg</a>
						<div class="content">
							<h3 class="title">Decorative</h3>
							<h4 class="subtitle">Bolt stool</h4>
							<a class="link-more" href="#"><i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 padding-0 wow fadeInRight">
					<div class="kt-banner block-banner-text margin-bottom-30" data-height="214" data-background="images/banners/6.jpg" data-positionleft="30px" data-verticalmiddle="middle">
						<a href="#" class="bg-image">Banner Bg</a>
						<div class="content">
							<h3 class="title">Revoler bar</h3>
							<h4 class="subtitle">WOODEN</h4>
							<a class="link-more" href="#"><i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ./promotions -->
	<!-- Product daily-deal -->
	<div class="margin-top-30 section-daily-deal wow fadeInUp">
		<div class="container">
			<div class="block-daily-deal">
				<div class="thumbs">
					<a class="selected" data-imageMedium="images/products/27.jpg" data-imageFull="images/products/31.jpg" href="#"><img src="images/products/24.jpg" alt=""></a>
					<a data-imageMedium="images/products/29.jpg" data-imageFull="images/products/32.jpg" href="#"><img src="images/products/25.jpg"  alt=""></a>
					<a data-imageMedium="images/products/30.jpg" data-imageFull="images/products/33.jpg" href="#"><img src="images/products/26.jpg"  alt=""></a>
				</div>
				<div class="product-detail">
					<div class="inner">
						<div class="product-image kt-images">
							<span class="percent">-25%</span>
							<a class="mainImage zoom" href="images/products/31.jpg"><img src="images/products/27.jpg"  alt=""></a>
						</div>
						<div class="product-info">
							<h3 class="product-name"><a href="#">Vitra Asterisk Wall Clock</a></h3>
							<div class="rating" title="Rated 3 out of 5">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o"></i>
								<i class="fa fa-star-o"></i>
								<span>(3 reviews)</span>
							</div>
							<div class="attributes">
								<p><label>Size:</label>Medium</p>
								<p><label>Color:</label>Grey white & Brown</p>
								<p><label>Dimensions:</label>Height: 13cm x Length: 15cm</p>
								<p><label>Brand:</label>Poulandar</p>
								<p><label>Material & Finishes:</label>Handmade in beechwood</p>
							</div>
							<span class="price">
								<del>$95.00</del>
								<ins>$75.00</ins>
							</span>
						</div>
					</div>
				</div>
				<div class="product-count-down">
					<div class="kt-countdown" data-y="2027" data-m="12" data-d="1" data-h="10" data-i="0" data-s="0"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- ./Product daily-deal -->
	<!-- List product -->
	<div class="heading-section text-center margin-top-90 wow fadeInLeft">
		<h3 class="title">Our Products</h3>
	</div>
	<div class="section-our-product wow fadeInUp">
		<div class="container">
			<ul class="products product-list-grid desktop-columns-4 tablet-columns-3 mobile-columns-1 owl-carousel-mobile" data-nav="false" data-dots="false" data-items="1">
				<li class="product-item style2 col-md-3 col-sm-4 col-xs-12 item-owl-mobile">
					<div class="product-inner">
						<div class="thumb has-second-image">
							<a href="#">
								<img src="images/products/1.jpg" alt="">
								<img class="second-image" src="images/products/2.jpg" alt="">
							</a>
							<div class="group-button">
								<a class="wishlist" href="#">Wishlist</a>
								<a class="button add_to_cart_button" href="#">Add to cart</a>
								<a class="compare button" href="#">Compare</a>
							</div>
							<div class="flash">
								<span class="new">New</span>
							</div>
							<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
						</div>
						<div class="info">
							<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
							<span class="price">$75.00</span>
						</div>
					</div>
				</li>
				<li class="product-item style2 col-md-3 col-sm-4 col-xs-12 item-owl-mobile">
					<div class="product-inner">
						<div class="thumb has-second-image">
							<a href="#">
								<img src="images/products/2.jpg" alt="">
								<img class="second-image" src="images/products/3.jpg" alt="">
							</a>
							<div class="group-button">
								<a class="wishlist" href="#">Wishlist</a>
								<a class="button add_to_cart_button" href="#">Add to cart</a>
								<a class="compare button" href="#">Compare</a>
							</div>
							<div class="flash">
								<span class="sale">Sale</span>
							</div>
							<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
						</div>
						<div class="info">
							<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
							<span class="price"><ins>$75.00</ins><del>$100.00</del></span>
						</div>
					</div>
				</li>
				<li class="product-item style2 col-md-3 col-sm-4 col-xs-12 item-owl-mobile">
					<div class="product-inner">
						<div class="thumb has-second-image">
							<a href="#">
								<img src="images/products/3.jpg" alt="">
								<img class="second-image" src="images/products/4.jpg" alt="">
							</a>
							<div class="group-button">
								<a class="wishlist" href="#">Wishlist</a>
								<a class="button add_to_cart_button" href="#">Add to cart</a>
								<a class="compare button" href="#">Compare</a>
							</div>
							<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
						</div>
						<div class="info">
							<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
							<span class="price">$75.00</span>
						</div>
					</div>
				</li>
				<li class="product-item style2 col-md-3 col-sm-4 col-xs-12 item-owl-mobile">
					<div class="product-inner">
						<div class="thumb has-second-image">
							<a href="#">
								<img src="images/products/4.jpg" alt="">
								<img class="second-image" src="images/products/5.jpg" alt="">
							</a>
							<div class="group-button">
								<a class="wishlist" href="#">Wishlist</a>
								<a class="button add_to_cart_button" href="#">Add to cart</a>
								<a class="compare button" href="#">Compare</a>
							</div>
							<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
						</div>
						<div class="info">
							<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
							<span class="price">$75.00</span>
						</div>
					</div>
				</li>
				<li class="product-item style2 col-md-3 col-sm-4 col-xs-12 item-owl-mobile">
					<div class="product-inner">
						<div class="thumb has-second-image">
							<a href="#">
								<img src="images/products/5.jpg" alt="">
								<img class="second-image" src="images/products/6.jpg" alt="">
							</a>
							<div class="group-button">
								<a class="wishlist" href="#">Wishlist</a>
								<a class="button add_to_cart_button" href="#">Add to cart</a>
								<a class="compare button" href="#">Compare</a>
							</div>
							<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
						</div>
						<div class="info">
							<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
							<span class="price">$75.00</span>
						</div>
					</div>
				</li>
				<li class="product-item style2 col-md-3 col-sm-4 col-xs-12 item-owl-mobile">
					<div class="product-inner">
						<div class="thumb has-second-image">
							<a href="#">
								<img src="images/products/6.jpg" alt="">
								<img class="second-image" src="images/products/7.jpg" alt="">
							</a>
							<div class="group-button">
								<a class="wishlist" href="#">Wishlist</a>
								<a class="button add_to_cart_button" href="#">Add to cart</a>
								<a class="compare button" href="#">Compare</a>
							</div>
							<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
						</div>
						<div class="info">
							<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
							<span class="price">$75.00</span>
						</div>
					</div>
				</li>
				<li class="product-item style2 col-md-3 col-sm-4 col-xs-12 item-owl-mobile">
					<div class="product-inner">
						<div class="thumb has-second-image">
							<a href="#">
								<img src="images/products/7.jpg" alt="">
								<img class="second-image" src="images/products/8.jpg" alt="">
							</a>
							<div class="group-button">
								<a class="wishlist" href="#">Wishlist</a>
								<a class="button add_to_cart_button" href="#">Add to cart</a>
								<a class="compare button" href="#">Compare</a>
							</div>
							<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
						</div>
						<div class="info">
							<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
							<span class="price">$75.00</span>
						</div>
					</div>
				</li>
				<li class="product-item style2 col-md-3 col-sm-4 col-xs-12 item-owl-mobile">
					<div class="product-inner">
						<div class="thumb has-second-image">
							<a href="#">
								<img src="images/products/8.jpg" alt="">
								<img class="second-image" src="images/products/9.jpg" alt="">
							</a>
							<div class="group-button">
								<a class="wishlist" href="#">Wishlist</a>
								<a class="button add_to_cart_button" href="#">Add to cart</a>
								<a class="compare button" href="#">Compare</a>
							</div>
							<a href="#" title="Quick View" class="button quick-view yith-wcqv-button">Quick View</a>
						</div>
						<div class="info">
							<h3 class="product-name short"><a href="#">Stockholm Chair high Mosta gruancy</a></h3>
							<span class="price">$75.00</span>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- ./List product -->

	<!-- Section Services -->
	<div class="section-services bg-parallax">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4">
					<div class="box-icon margin-bottom-80 wow zoomInUp">
						<div class="icon">
							<span class="icon-font flaticon-label36"></span>
						</div>
						<div class="box-content">
							<h3 class="title">Money Back Guarantee!</h3>
							<span class="subtitle">We free 30 days 100% money back & return</span>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="box-icon margin-bottom-80 wow zoomInUp">
						<div class="icon">
							<span class="icon-font flaticon-mappoint6"></span>
						</div>
						<div class="box-content">
							<h3 class="title">Free Shipping World wide</h3>
							<span class="subtitle">Free shipping on all order over $99.00</span>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
					<div class="box-icon margin-bottom-80 wow zoomInUp">
						<div class="icon">
							<span class="icon-font flaticon-speech102"></span>
						</div>
						<div class="box-content">
							<h3 class="title">Online Support 24/7</h3>
							<span class="subtitle">We are here to make your day. Let’s talk !</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ./Section Services -->
	<!-- Section SPECIAL LOOK!-->
	<div class="heading-section text-center margin-top-90 wow fadeInRight">
		<h3 class="title">SPECIAL LOOK!</h3>
	</div>
	<div class="container wow fadeIn">
		<div class="row margin-0">
			<div class="col-sm-5 col-md-4 padding-0">
				<div class="kt-banner block-banner-text style2" data-height="595" data-background="images/banners/8.jpg" data-positionleft="0px" data-positionright="0px" data-positionbottom="100px">
					<a href="#" class="bg-image"></a>
					<div class="content text-center">
						<h3 class="title">Northern Pendant Light</h3>
						<h4 class="subtitle">A modern pendant lighting solution from Atle Tveit</h4>
						<span class="flash">SALE</span>
					</div>
				</div>
			</div>
			<div class="col-sm-7 col-md-8 padding-0">
				<div class="kt-banner block-banner-text style2 right" data-height="328" data-background="images/banners/9.jpg" data-positionleft="50%" data-verticalmiddle="middle">
					<a href="#" class="bg-image"></a>
					<div class="content">
						<span class="flash" style="background-color: #ff9081;">HOT</span>
						<h3 class="title">Nolbin Brown Chair</h3>
						<h4 class="subtitle">Clean because the cushions are machine washable!</h4>
					</div>
				</div>
				<div class="kt-banner block-banner-text style2 left" data-height="267" data-background="images/banners/10.jpg" data-positionright="50%" data-verticalmiddle="middle">
					<a href="#" class="bg-image"></a>
					<div class="content text-right">
						<h3 class="title">Nolbin Brown Chair</h3>
						<h4 class="subtitle">Clean because the cushions are machine washable!</h4>
						<span class="flash" style="background-color: #83ccd5;">New</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ./Section SPECIAL LOOK!-->
	<!-- Section blog -->
	<div class="heading-section text-center margin-top-90 wow fadeInLeft">
		<h3 class="title">FROM OUR BLOG</h3>
	</div>
	<div class="section-last-test-blog margin-bottom-90 wow zoomIn">
		<div class="container">
			<div class="lasttest-blog owl-carousel nav-center nav-style-1" data-thumbs="false" data-margin="25" data-loop="true" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"768":{"items":"2"},"992":{"items":"3"}}'>
				<article class="item-blog">
					<div class="post-thumb">
						<a href="#"><img src="images/blogs/14.jpg" alt=""></a>
					</div>
					<div class="blog-info">
						<h3 class="title"><a href="#">Who says you can’t mix business with office pleasure?</a></h3>
						<span class="date">23 July 2016</span>
					</div>
					<div class="blog-buttom">
						<span class="like"><i class="fa fa-heart-o"></i> 316 likes</span>
						<span class="comments"><i class="fa fa-comment-o"></i> 23 Comments</span>
						<a href="#" class="button">Read more</a>
					</div>
				</article>
				<article class="item-blog">
					<div class="post-thumb">
						<a href="#"><img src="images/blogs/15.jpg" alt=""></a>
					</div>
					<div class="blog-info">
						<h3 class="title"><a href="#">Who says you can’t mix business with office pleasure?</a></h3>
						<span class="date">23 July 2016</span>
					</div>
					<div class="blog-buttom">
						<span class="like"><i class="fa fa-heart-o"></i> 316 likes</span>
						<span class="comments"><i class="fa fa-comment-o"></i> 23 Comments</span>
						<a href="#" class="button">Read more</a>
					</div>
				</article>
				<article class="item-blog">
					<div class="post-thumb">
						<a href="#"><img src="images/blogs/16.jpg" alt=""></a>
					</div>
					<div class="blog-info">
						<h3 class="title"><a href="#">Who says you can’t mix business with office pleasure?</a></h3>
						<span class="date">23 July 2016</span>
					</div>
					<div class="blog-buttom">
						<span class="like"><i class="fa fa-heart-o"></i> 316 likes</span>
						<span class="comments"><i class="fa fa-comment-o"></i> 23 Comments</span>
						<a href="#" class="button">Read more</a>
					</div>
				</article>
			</div>
		</div>
	</div>
	<!-- ./Section blog -->
	<div class="row margin-0">
		<div class="col-sm-6 padding-0">
			<div class="block-social">
				<div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                </div>
			</div>
		</div>
		<div class="col-sm-6 padding-0">
			<div class="block-newsletter">
				<div class="inner">
					<h2 class="title">Join Our Newsletter</h2>
					<p class="subtitle">Sign up our newsletter and get more events & promotions!</p>
					<form>
						<input type="text" placeholder="Enter your email here" class="text-input">
						<button class="button"><i class="fa fa-envelope-o"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection