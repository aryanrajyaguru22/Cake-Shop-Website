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
        <link href="vendors/stroke-icon/style.css" rel="stylesheet">
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
			<div class="main_menu_area">
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="index.php">
						<img src="img/logo.png" alt="">
						<img src="img/logo-2.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="my_toggle_menu">
                            	<span></span>
                            	<span></span>
                            	<span></span>
                            </span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-auto">
								<li class="dropdown submenu">
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
							</ul>
							<ul class="navbar-nav justify-content-end">
								<li class="dropdown submenu active">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li><a href="service.php">Services</a></li>
										<li class="dropdown submenu">
											<li><a href="portfolio.php">Gallery</a></li>
											<!--<ul class="dropdown-menu">
												<li><a href="portfolio.php">-  Gallery Classic</a></li>
												<li><a href="portfolio-full-width.php">-  Gallery Full width</a></li>
											</ul>-->
										</li>
										<li><a href="faq.php">Faq</a></li>
										<li><a href="what-we-make.php">What we make</a></li>
										<li><a href="special.php">Special Recipe</a></li>
										<li><a href="404.php">404 page</a></li>
										<li><a href="comming-soon.php">Coming Soon page</a></li>
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
                                    <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.php">Blog with sidebar</a></li>
                                        <li><a href="blog-2column.php">Blog 2 column</a></li>
                                        <li><a href="single-blog.php">Blog details</a></li>
                                    </ul>
                                </li>
								<li><a href="contact.php">Contact Us</a></li>
                                <li class="dropdown submenu">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Profile</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="profile.php"><i class="fas fa-user-circle"></i>&nbsp;My Account </a></li>
                                        <li><a href="changepassword.php"><i class="fas fa-user-cog"></i> Change Password</a></li>
                                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                                    </ul>
                                </li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>What We Make</h3>
        			<ul>
        				<li><a href="index.php">Home</a></li>
        				<li><a href="service.php">Services</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Service Offer Area =================-->
        <section class="service_offer_area p_100">
        	<div class="container">
        		<div class="main_title">
        			<h2>What We Offer</h2>
        			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        		</div>
        		<div class="row service_main_item_inner">
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/service/service-1.png" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4>Valentines Day Cakes</h4></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/service/service-2.png" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4>Valentines Day Cakes</h4></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/service/service-3.png" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4>Valentines Day Cakes</h4></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/service/service-4.png" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4>Valentines Day Cakes</h4></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/service/service-5.png" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4>Valentines Day Cakes</h4></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/service/service-6.png" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4>Valentines Day Cakes</h4></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/service/service-1.png" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4>Valentines Day Cakes</h4></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/service/service-2.png" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4>Valentines Day Cakes</h4></a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4 col-sm-6">
        				<div class="service_m_item">
        					<div class="service_img_inner">
								<div class="service_img">
									<img class="rounded-circle" src="img/service/service-3.png" alt="">
								</div>
        					</div>
        					<div class="service_text">
        						<a href="#"><h4>Valentines Day Cakes</h4></a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Service Offer Area =================-->
        
        <!--================Bakery Video Area =================-->
        <section class="bakery_video_area">
        	<div class="container">
        		<div class="video_inner">
        			<h3>Real Taste</h3>
        			<p>A light, sour wheat dough with roasted walnuts and freshly picked rosemary, thyme, poppy seeds, parsley and sage</p>
        			<div class="media">
        				<div class="d-flex">
        					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="flaticon-play-button"></i></a>
        				</div>
        				<div class="media-body">
        					<h5>Watch intro video <br />about us</h5>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Bakery Video Area =================-->
        
        <!--================Newsletter Area =================-->
        <section class="newsletter_area">
        	<div class="container">
        		<div class="row newsletter_inner">
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
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/datetime-picker/js/moment.min.js"></script>
        <script src="vendors/datetime-picker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        
        <script src="js/theme.js"></script>
    </body>
</html>