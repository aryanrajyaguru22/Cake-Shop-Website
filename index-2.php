<?php
session_start();
if($_SESSION['user']=='')
{
  header("location:login.php");
}
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cake - Bakery</title>

        <!-- Icon css link -->
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linearicons/style.css" rel="stylesheet">
        <link href="vendors/flat-icon/flaticon.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="vendors/magnifc-popup/magnific-popup.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <!--================Main Header Area =================-->
		<header class="main_header_area">
			<div class="top_header_area row m0">
				<div class="container">
					<div class="float-left">
						<a href="tell:+18004567890"><i class="fa fa-phone" aria-hidden="true"></i> + (1800) 456 7890</a>
						<a href="mainto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@cakebakery.com</a>
					</div>
					<div class="float-right">
						<ul class="h_social list_style">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
						<ul class="h_search list_style">
							<li class="shop_cart"><a href="#"><i class="lnr lnr-cart"></i></a></li>
							<li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="main_menu_two">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php"><img src="img/logo-2.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav justify-content-end">
								<li class="dropdown submenu active">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
									<ul class="dropdown-menu">
										<li><a href="index.php">Home 1</a></li>
										<li><a href="index-2.php">Home 2</a></li>
										<li><a href="index-3.php">Home 3</a></li>
										<li><a href="index-4.php">Home 4</a></li>
										<li><a href="index-5.php">Home 5</a></li>
									</ul>
								</li>
								<li><a href="cake.php">Our Cakes</a></li>
								<li><a href="menu.php">Menu</a></li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About Us</a>
									<ul class="dropdown-menu">
										<li><a href="about-us.php">About Us</a></li>
										<li><a href="our-team.php">Our Chefs</a></li>
										<li><a href="testimonials.php">Testimonials</a></li>
									</ul>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li><a href="service.php">Services</a></li>
										<li class="dropdown submenu">
											<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
											<ul class="dropdown-menu">
												<li><a href="portfolio.php">-  Gallery Classic</a></li>
												<li><a href="portfolio-full-width.php">-  Gallery Full width</a></li>
											</ul>
										</li>
										<li><a href="faq.php">Faq</a></li>
										<li><a href="what-we-make.php">What we make</a></li>
										<li><a href="special.php">Special Recipe</a></li>
										<li><a href="404.php">404 page</a></li>
										<li><a href="comming-soon.php">Coming Soon page</a></li>
									</ul>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li><a href="blog.php">Blog with sidebar</a></li>
										<li><a href="blog-2column.php">Blog 2 column</a></li>
										<li><a href="single-blog.php">Blog details</a></li>
									</ul>
								</li>
								<li class="dropdown submenu">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
									<ul class="dropdown-menu">
										<li><a href="shop.php">Main shop</a></li>
										<li><a href="product-details.php">Product Details</a></li>
										<li><a href="cart.php">Cart Page</a></li>
										<li><a href="checkout.php">Checkout Page</a></li>
									</ul>
								</li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
        <!--================End Main Header Area =================-->
        
        <!--================Slider Area =================-->
        <section class="main_slider_area">
            <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
                <ul>
                    <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/home-slider/slider-3.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']" 
                            data-fontsize="['65','65','65','40','30']"
                            data-lineheight="['80','80','80','50','40']"
                            data-width="['800','800','800','500']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']">Quality Products ... <br /> with sweet, eggs & breads</div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']"  
                                data-fontsize="['20','20','20','20','16']"
                                data-lineheight="['28','28','28','28']"
                                data-width="['640','640','640','640','350']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni dolores eos qui ratione
                            </div>
                            
                            <div class="tp-caption tp-resizeme slider_button" 
                               data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="main_btn" href="#">See the recipe</a>
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-4.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/home-slider/slider-4.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']" 
                            data-fontsize="['65','65','65','40','30']"
                            data-lineheight="['80','80','80','50','40']"
                            data-width="['800','800','800','500']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']">Cake Bakery ... <br /> make delicious products</div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']"  
                                data-fontsize="['20','20','20','20','16']"
                                data-lineheight="['28','28','28','28']"
                                data-width="['640','640','640','640','350']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni dolores eos qui ratione
                            </div>
                            
                            <div class="tp-caption tp-resizeme slider_button" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="main_btn" href="#">See the recipe</a>
                            </div>
                        </div>
                    </li>
                    <li data-index="rs-1589" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="img/home-slider/slider-5.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="img/home-slider/slider-5.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="slider_text_box">
                            <div class="tp-caption tp-resizeme first_text" 
                            data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','top','top']" data-voffset="['175','175','125','165','160']" 
                            data-fontsize="['65','65','65','40','30']"
                            data-lineheight="['80','80','80','50','40']"
                            data-width="['800','800','800','500']"
                            data-height="none"
                            data-whitespace="normal"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
                            data-textAlign="['left','left','left','left']">Cake theme ... <br /> made with care and love</div>
                            
                            <div class="tp-caption tp-resizeme secand_text" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['345','345','300','300','250']"  
                                data-fontsize="['20','20','20','20','16']"
                                data-lineheight="['28','28','28','28']"
                                data-width="['640','640','640','640','350']"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-transform_idle="o:1;"
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit quia consequuntur magni dolores eos qui ratione
                            </div>
                            
                            <div class="tp-caption tp-resizeme slider_button" 
                                data-x="['left','left','left','15','15']" data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" data-voffset="['435','435','390','390','360']" 
                                data-fontsize="['14','14','14','14']"
                                data-lineheight="['46','46','46','46']"
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]">
                                <a class="main_btn" href="#">See the recipe</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--================End Slider Area =================-->
        
        <!--================Welcome Area =================-->
        <section class="welcome_bakery_area cake_feature_main p_100">
        	<div class="container">
				<div class="main_title">
					<h2>Our Featured Cakes</h2>
					<h5> Seldolor sit amet consect etur</h5>
				</div>
				<div class="cake_feature_row row">
					<div class="col-lg-3 col-md-4 col-6">
						<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-1.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-2.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-3.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-4.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-1.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-2.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-3.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-4 col-6">
						<div class="cake_feature_item">
							<div class="cake_img">
								<img src="img/cake-feature/c-feature-4.jpg" alt="">
							</div>
							<div class="cake_text">
								<h4>$29</h4>
								<h3>Strawberry Cupcakes</h3>
								<a class="pest_btn" href="#">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Welcome Area =================-->
        
        <!--================Service We offer Area =================-->
        <section class="service_we_offer_area p_100">
        	<div class="container">
        		<div class="single_w_title">
        			<h2>Services We offer</h2>
        		</div>
        		<div class="row we_offer_inner">
        			<div class="col-lg-4">
        				<div class="s_we_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-6"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Cookies Cakes</h4></a>
        							<p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-5"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Tasty Cupcakes</h4></a>
        							<p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-3"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Wedding Cakes</h4></a>
        							<p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-book"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Awesome Recipes</h4></a>
        							<p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-food-4"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Menu Planner</h4></a>
        							<p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="s_we_item">
        					<div class="media">
        						<div class="d-flex">
        							<i class="flaticon-transport"></i>
        						</div>
        						<div class="media-body">
        							<a href="#"><h4>Home Delivery</h4></a>
        							<p>Lorem Ipsum is  simply my text of the printing and Ipsum is simply text of the Ipsum is simply.</p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Service We offer Area =================-->
        
        <!--================Discover Menu Area =================-->
        <section class="discover_menu_area menu_d_two">
        	<div class="discover_menu_inner">
        		<div class="container">
        			<div class="single_pest_title">
						<h2>Services We offer</h2>
					</div>
       				<div class="row">
       					<div class="col-lg-6">
       						<div class="discover_item_inner">
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       						</div>
       					</div>
       					<div class="col-lg-6">
       						<div class="discover_item_inner">
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       							<div class="discover_item">
									<h4>Double Chocolate Pie</h4>
									<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
								</div>
       						</div>
       					</div>
       					<div class="col-lg-12">
       						<a class="pest_btn" href="#">View Full Menu</a>
       					</div>
       				</div>
        		</div>
        	</div>
        </section>
        <!--================End Discover Menu Area =================-->
        
        <!--================End Client Says Area =================-->
        <section class="our_chef_area p_100">
        	<div class="container">
        		<div class="row our_chef_inner">
        			<div class="col-lg-3">
        				<div class="chef_text_item">
        					<div class="main_title">
								<h2>Our Chefs</h2>
								<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion.</p>
							</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-6">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="img/chef/chef-1.jpg" alt="">
        						<ul class="list_style">
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-skype"></i></a></li>
        						</ul>
        					</div>
        					<a href="#"><h4>Michale Joe</h4></a>
        					<h5>Expert in Cake Making</h5>
        				</div>
        			</div>
        			<div class="col-lg-3 col-6">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="img/chef/chef-2.jpg" alt="">
        						<ul class="list_style">
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-skype"></i></a></li>
        						</ul>
        					</div>
        					<a href="#"><h4>Michale Joe</h4></a>
        					<h5>Expert in Cake Making</h5>
        				</div>
        			</div>
        			<div class="col-lg-3 col-6">
        				<div class="chef_item">
        					<div class="chef_img">
        						<img class="img-fluid" src="img/chef/chef-3.jpg" alt="">
        						<ul class="list_style">
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
        							<li><a href="#"><i class="fa fa-skype"></i></a></li>
        						</ul>
        					</div>
        					<a href="#"><h4>Michale Joe</h4></a>
        					<h5>Expert in Cake Making</h5>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Client Says Area =================-->
        
        <!--================New Arivals Area =================-->
        <section class="new_arivals_area p_100">
        	<div class="container">
        		<div class="single_pest_title">
					<h2>New Arrivals</h2>
				</div>
        		<div class="row arivals_inner">
        			<div class="col-lg-6 col-sm-7">
        				<div class="arivals_chocolate">
        					<div class="arivals_pic">
        						<img class="img-fluid" src="img/cake-feature/arivals-pic.jpg" alt="">
        						<div class="price_text">
        							<h5>$39</h5>
        						</div>
        					</div>
        					<div class="arivals_text">
        						<h4>Chocolate <span>Crumble</span></h4>
        						<a href="#">Mine cup</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="arivals_slider owl-carousel">
        					<div class="item">
        						<div class="cake_feature_item">
									<div class="cake_img">
										<img src="img/cake-feature/arivals-1.jpg" alt="">
									</div>
									<div class="cake_text">
										<h4>$29</h4>
										<h3>Strawberry Cupcakes</h3>
										<a class="pest_btn" href="#">Add to cart</a>
									</div>
								</div>
        					</div>
        					<div class="item">
        						<div class="cake_feature_item">
									<div class="cake_img">
										<img src="img/cake-feature/arivals-2.jpg" alt="">
									</div>
									<div class="cake_text">
										<h4>$29</h4>
										<h3>Chocolate Cupcakes</h3>
										<a class="pest_btn" href="#">Add to cart</a>
									</div>
								</div>
        					</div>
        					<div class="item">
        						<div class="cake_feature_item">
									<div class="cake_img">
										<img src="img/cake-feature/arivals-1.jpg" alt="">
									</div>
									<div class="cake_text">
										<h4>$29</h4>
										<h3>Strawberry Cupcakes</h3>
										<a class="pest_btn" href="#">Add to cart</a>
									</div>
								</div>
        					</div>
        					<div class="item">
        						<div class="cake_feature_item">
									<div class="cake_img">
										<img src="img/cake-feature/arivals-2.jpg" alt="">
									</div>
									<div class="cake_text">
										<h4>$29</h4>
										<h3>Chocolate Cupcakes</h3>
										<a class="pest_btn" href="#">Add to cart</a>
									</div>
								</div>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End New Arivals Area =================-->
        
        <!--================Latest News Area =================-->
        <section class="latest_news_area gray_bg p_100">
        	<div class="container">
        		<div class="main_title">
					<h2>Latest Blog</h2>
					<h5>an turn into your instructor your helper, your </h5>
				</div>
       			<div class="row latest_news_inner">
       				<div class="col-lg-4 col-md-6">
       					<div class="l_news_image">
       						<div class="l_news_img">
       							<img class="img-fluid" src="img/blog/latest-news/l-news-1.jpg" alt="">
       						</div>
       						<div class="l_news_hover">
       							<a href="#"><h5>Oct 15, 2016</h5></a>
       							<a href="#"><h4>Nanotechnology immersion along the information</h4></a>
       						</div>
       					</div>
       				</div>
       				<div class="col-lg-4 col-md-6">
       					<div class="l_news_item">
       						<div class="l_news_img">
       							<img class="img-fluid" src="img/blog/latest-news/l-news-2.jpg" alt="">
       						</div>
       						<div class="l_news_text">
       							<a href="#"><h5>Oct 15, 2016</h5></a>
       							<a href="#"><h4>Nanotechnology immersion along the information</h4></a>
       							<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
       						</div>
       					</div>
       				</div>
       				<div class="col-lg-4 col-md-6">
       					<div class="l_news_item">
       						<div class="l_news_img">
       							<img class="img-fluid" src="img/blog/latest-news/l-news-3.jpg" alt="">
       						</div>
       						<div class="l_news_text">
       							<a href="#"><h5>Oct 15, 2016</h5></a>
       							<a href="#"><h4>Nanotechnology immersion along the information</h4></a>
       							<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
       						</div>
       					</div>
       				</div>
       			</div>
        	</div>
        </section>
        <!--================End Latest News Area =================-->
        
        <!--================Newsletter Area =================-->
        <section class="newsletter_area gray_bg">
        	<div class="container">
        		<div class="newsletter_inner">
					<div class="row">
						<div class="col-lg-6">
							<div class="news_left_text">
								<h4>Join our Newsletter list to get all the latest offers, discounts and other benefits</h4>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="newsletter_form">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Enter your email address">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="button">Subscribe Now</button>
									</div>
								</div>
							</div>
						</div>
					</div>
        		</div>
        	</div>
        </section>
        <!--================End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
        	<div class="footer_widgets">
        		<div class="container">
        			<div class="row footer_wd_inner">
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_about_widget">
        						<img src="img/footer-logo.png" alt="">
        						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
        						<ul class="nav">
        							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
        							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Quick links</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Your Account</a></li>
        							<li><a href="#">View Order</a></li>
        							<li><a href="#">Privacy Policy</a></li>
        							<li><a href="#">Terms & Conditionis</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_link_widget">
        						<div class="f_title">
        							<h3>Work Times</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Mon. :  Fri.: 8 am - 8 pm</a></li>
        							<li><a href="#">Sat. : 9am - 4pm</a></li>
        							<li><a href="#">Sun. : Closed</a></li>
        						</ul>
        					</aside>
        				</div>
        				<div class="col-lg-3 col-6">
        					<aside class="f_widget f_contact_widget">
        						<div class="f_title">
        							<h3>Contact Info</h3>
        						</div>
        						<h4>(1800) 574 9687</h4>
        						<p>Justshiop Store <br />256, baker Street,, New Youk, 5245</p>
        						<h5>cakebakery@contact.co.in</h5>
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="footer_copyright">
        		<div class="container">
        			<div class="copyright_inner">
        				<div class="float-left">
        					<h5><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></h5>
        				</div>
        				<div class="float-right">
        					<a href="#">Purchase Now</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        <!--================Search Box Area =================-->
        <div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
            <div class="search_box_inner">
                <h3>Search</h3>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
                    </span>
                </div>
            </div>
        </div>
        <!--================End Search Box Area =================-->
        
        
        
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <!-- Extra plugin js -->
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/magnifc-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>

</html>