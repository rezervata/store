<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <link rel="icon" type="imgage/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        {*<link rel="stylesheet" href="libs/css/bootstrap.css" type="text/css">
        <script src="libs/js/jquery.js"></script>
        <script src="libs/js/bootstrap-min.js"></script>*}
        <script type="text/javascript" src="js/core.js"></script>

        	<!-- Mobile specific metas -->		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="../libs/img/fav_icon.ico">
		<!--All Fonts  Here -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:500,400,700,300' rel='stylesheet' type='text/css'>
		
		<!-- ALL CSS FILES HERE -->
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../libs/css/bootstrap.min.css">
		<!-- font-awesome CSS -->
        <link rel="stylesheet" href="../libs/css/font-awesome.min.css">
		<!-- fancybox CSS -->
        <link rel="stylesheet" href="../libs/css/fancybox/jquery.fancybox.css">	
		<!--bxslider CSS -->
        <link rel="stylesheet" href="../libs/css/jquery.bxslider.min.css">	
		<!-- owl.carousel CSS-->
        <link rel="stylesheet" href="../libs/css/owl.carousel.css">
         <!-- owl.carousel transitions CSS-->
        <link rel="stylesheet" href="../libs/css/owl.transitions.css">
		<!-- simplelens CSS-->
        <link rel="stylesheet" href="../libs/css/jquery.simplelens.css">
		<!-- owl.theme CSS-->
        <link rel="stylesheet" href="../libs/css/owl.theme.css">
		<!-- rs-plugin CSS -->	
		<!-- slider revolution css settings -->
		<link rel="stylesheet" type="text/css" href="../libs/lib/rs-plugin/css/settings.css" media="screen" />
		<!-- jquery-ui-->
        <link rel="stylesheet" href="../libs/css/jquery-ui.css">
		<!-- css for mobile menu-->
        <link rel="stylesheet" href="../libs/css/mobile_menu.min.css">
		<!-- normalize CSS -->		
        <link rel="stylesheet" href="../libs/css/normalize.css">
		<!-- main CSS -->		
        <link rel="stylesheet" href="../libs/css/main.css">
		<!-- style CSS -->			
        <link rel="stylesheet" href="../libs/style.css">
		<!-- responsive CSS -->			
        <link rel="stylesheet" href="../libs/css/responsive.css">
		
		<!-- modernizr js -->		
        <script src="../libs/js/vendor/modernizr-2.8.3.min.js"></script>
        
    </head>
    <body class="home-2 h-17">

     <!-- header area start -->
	<header>
		<!-- header top area start -->
		<div class="header_top_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-3 col-lg-3">
					   <p> {*<i class="fa fa-phone"></i>*} MEDICINE-GET Medicines for your health!</p>
					</div>
					<div class="col-sm-8 col-md-9 col-lg-9">
					   <div class="right-menus">
							<ul>
								{*<li><a href="#"><img alt="" src="img/lng/english.png"> English <i class="fa fa-angle-down"></i> </a>
								   <ul class="sub-lng">
								   	<li><a href="#"> <img alt="" src="img/lng/english.png"> <span>English</span> </a></li>
								   	<li><a href="#"> <img alt="" src="img/lng/french.png"> <span>French</span> </a></li>
								   	<li><a href="#"> <img alt="" src="img/lng/german.png"> <span>German</span> </a></li>
								   </ul>
								</li>*}
								{*<li><a href="#">USD <i class="fa fa-angle-down"></i></a>
								  <ul class="sub-lng tk">
								   	<li><a href="#"> <span>EUR</span> </a></li>
								   	<li><a href="#"> <span>USD</span> </a></li>
								   	<li><a href="#"> <span>EUR</span> </a></li>
								   </ul>
								</li>*}
                                                                
                                                      {*          
                                                                {if isset($smarty.session.admin.logged)}
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> {$smarty.session.admin.name}</a></li>
                            <li><a href="/admin-exit/" name="logout" id="logout" class="logout glyphicon glyphicon-user" >Sign out</a></li>
                        {elseif isset($smarty.session.client.logged)}
                            <li><a href="#" class="glyphicon glyphicon-user">{$smarty.session.client.fname} {$smarty.session.client.lname}</a></li>
                            <li><a href="#" name="logout" id="logout" class="logout glyphicon glyphicon-user" >Sign out</a></li>
                                <div class="logout"></div>
                             <li><a href="orders/" name="myorders" class="glyphicon glyphicon-user">My Orders</a></li>
                        {else}
                            <li><a href="#" id="_accCreate" name="_accCreate" class="_accCreate glyphicon glyphicon-user"> Sign Up</a></li>
                            <li><a href="#" id="clLogin" name="clLogin" class="clLogin glyphicon glyphicon-log-in"> Login</a></li>
                            <div class="login"></div>
                            <div class="acc_create"></div>
                        {/if}
                                                               *} 
                                                                
                                                                {if isset($smarty.session.admin.logged)}
                            <li><a href="#"><span <i class="fa fa-unlock-alt"></i></span> {$smarty.session.admin.name}</a></li>
                            <li><a href="/admin-exit/" name="logout" id="logout" <i class="fa fa-unlock-alt"></i> >Sign out</a></li>
                        {elseif isset($smarty.session.client.logged)}
                        
                        <li><a href="#" <i class="fa fa-unlock-alt"></i>{$smarty.session.client.fname} {$smarty.session.client.lname}</a></li>
                            <li><a href="#" name="logout" id="logout" <i class="fa fa-unlock-alt"></i>Sign out</a></li>
                                <div class="logout"></div>
                                {else}
                            <li><a href="#" id="_accCreate" name="_accCreate" <i class="fa fa-key"></i> Sign Up</a></li>
                            <li><a href="#" id="clLogin" name="clLogin" <i class="fa fa-unlock-alt"></i> Login</a></li>
                            <div class="login"></div>
                            <div class="acc_create"></div>
                        {/if}
                        
                        
								{*<li><a href="#"><span> <i class="fa fa-unlock-alt"></i></span> Login  </a>
									<div class="block-content">
									  <ul class="form-list">
									    <li> 
										 <label>Email Address<em>*</em></label> 
										 <input type="text" class="input-text">
										</li>
										<li> 
										 <label>Password<em>*</em></label> 
										 <input type="password" class="input-text">
										 </li>
										 <li><span class="required">* Required Fields</span></li>
									  </ul>
									  <div class="action-forgot">
										   <div class="login_forgotpassword">
											 <p><a href="#">Forgot Your Password?</a></p>
											  <p><span>Don't have an account?</span>
											   <a class="create-account-link-wishlist" href="#" title="Sign Up">Sign Up</a>
											   </p>
										   </div>
										   <div class="actions">
											 <button type="submit" class="button"><span><span>Login</span></span></button>
										  </div>
									  </div>
									</div>
								</li>*}
								{*<li><a href="#"><span><i class="fa fa-key"></i></span>  Register</a></li>
								<li><a href="#"><span> <i class="fa fa-heart"></i> </span>Wishlist</a></li>*}
							</ul>
						
						</div>
					</div>
				</div>
			</div>
		</div>	
		<!-- header main area start -->
		<div class="header_main_area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-3 col-lg-3">
					  <div class="h2-logo">
						<a href="/"><img src="../libs/img/logos/medicine-get-logo.png" alt="" /></a>
					  </div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6">
					  <div class="h2-cat-search">
					    <div class="em-category-search">
						  <form method="get" action="index.php">
						   <div class="form-search cate_search">
						     <div class="input_cat hidden-xs"> 
                                                         
                     
                                                         
                                                         
							  {*<div class="catsearch-dropdown over">
							    <span class="current">&nbsp;&nbsp;&nbsp; All Categories</span>
									<ul >
										<li><a href="#"> &nbsp;&nbsp;&nbsp;All Categories </a></li>
										<li><a href="#">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Furniture</a></li>
										<li><a href="#">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Living Room</a></li>
										<li><a href="#">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bedroom</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Electronics </a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell Phones</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cameras</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Accessories</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Digital Cameras</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computers</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Build Your Own</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Laptops</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hard Drives</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Monitors</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RAM / Memory</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cases</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Processors</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Peripherals</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fashion</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Dresses</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Backpacks</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Shoes</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; T-Shirt</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Baby</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Computers</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cell Phones</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Application</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lingerie</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Drug</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Office</a></li>
										<li><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Lamp-Chair</a></li>
									</ul>
								</div>*}
							</div> 
                                                        
							<div class="text-search">
								<input type="search" placeholder="Search entire store here..." class="input-text required-entry" value=""> 
								<button class="button" name="search_BTN" title="Search Now!" type="submit"><span><span>Search</span></span></button>
							</div> 
					       </div>
						 </form>
						</div>
					  </div>
					</div>
                                                        
                                                        
                            {*                            <li>
                            <a href="cart/" id="_cartStep">
                                {if isset($smarty.session.cart) != null}
                                    <span class="label label-default">{$smarty.session.cart|@count}</span>
                                {else}
                                    <span class="label label-default">0</span>
                                {/if}
                                <span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                        </li>*}
                                                        
                                                        
                                                        
                                                        
					<div class="col-sm-12 col-md-3 col-lg-9">
					  <div class="cart-area">
						<div class="main-cart-area">
							<div class="cart-icon">
								<a href="cart/" id="_cartStep">
                                                                    {if isset($smarty.session.cart) != null}
								<i class="fa fa-shopping-cart"></i>My Cart {$smarty.session.cart|@count}
                                                                 {else}
                                                                     <i class="fa fa-shopping-cart"></i>My Cart
                                                                     {/if}
								</a>
							</div>
							<div class="cart-sub">
								<div class="all_carts_item">
									<div class="row mini-cart-item ">
										<a href="#" class="cart_list_product_img">
											<img class="attachment-shop_thumbnail" src="../libs/img/cart/1.jpg" alt="04">
										</a> 
										<div class="mini-cart-info">
											<a href="#" class="cart_list_product_title">bicy0004 Sky Print</a>
											<div class="cart_list_product_quantity">2 x <span class="amount">$40.00</span></div> 
										</div>
										<a title="Remove this item" class="remove" href="#"><i class="fa fa-trash-o"></i></a> 
									</div>
									<div class="row mini-cart-item ">
										<a href="#" class="cart_list_product_img">
											<img class="attachment-shop_thumbnail" src="../libs/img/cart/2.jpg" alt="04">
										</a> 
										<div class="mini-cart-info">
											<a href="#" class="cart_list_product_title">Print Night Sky </a>
											<div class="cart_list_product_quantity">3 x <span class="amount">$140.00</span></div> 
										</div>
										<a title="Remove this item" class="remove" href="#"><i class="fa fa-trash-o"></i></a> 
									</div>
								</div>
								<div class="minicart_total_checkout">                                        
									Subtotal<span><span class="amount">$80.00</span></span>                                   
								</div>
								<div class="btn-mini-cart inline-lists">
									<a class="button btn-viewcart" href="shopping-cart.html">View Cart</a>
									<a title="Checkout" class="button btn-checkout" href="checkout.html">Checkout</a>
								</div>
							</div>
						</div>
					  </div>
					</div>
				</div>
			</div>
		</div>	
		<!-- header main area end -->
	</header>	
	<!-- header area end -->

    <!-- main menu area start -->
	<div id="sticker" class="h2_main-menu_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
				    <div class="small-logo"><a href="#"><img src="../libs/img/logos/h2-logo_small.png" alt=""></a></div>
					<div class="menu-area">
						<nav class="main-menu">
						  <ul>
						   	<li><a href="#">home</a>
								<ul class="img-mega-menu">
									<li><a href="index.html"> <img src="../libs/img/home-menu/1.jpg" alt="" /> </a>
									  <a href="index.html" class="mega-title"> BiCycle Store </a>
									</li>
                                                                        
                                                                        
                                                                        
                                                                        
									{*<li><a href="index-2.html"> <img src="img/home-menu/2.jpg" alt="" /> </a>
									  <a href="index-2.html" class="mega-title"> Shopping Mall Store </a>
									</li>
									<li><a href="index-3.html"> <img src="img/home-menu/3.jpg" alt="" /> </a>
									  <a href="index-3.html" class="mega-title"> BackPacks Store </a>
									</li>
									<li><a href="index-4.html"> <img src="img/home-menu/4.jpg" alt="" /> </a>
									  <a href="index-4.html" class="mega-title"> Bakery Store </a>
									</li>
									<li><a href="index-5.html"> <img src="img/home-menu/5.jpg" alt="" /> </a>
									  <a href="index-5.html" class="mega-title"> T-Shirt Store </a>
									</li>
									<li><a href="index-6.html"> <img src="img/home-menu/6.jpg" alt="" /> </a>
									  <a href="index-6.html" class="mega-title"> Tools Hardware Store </a>
									</li>
									<li><a href="index-7.html"> <img src="img/home-menu/7.jpg" alt="" /> </a>
									  <a href="index-7.html" class="mega-title"> Baby Store </a>
									</li>
									<li><a href="index-8.html"> <img src="img/home-menu/8.jpg" alt="" /> </a>
									  <a href="index-8.html" class="mega-title"> Health Store </a>
									</li>
									<li><a href="index-9.html"> <img src="img/home-menu/9.jpg" alt="" /> </a>
									  <a href="index-9.html" class="mega-title"> Jewelry Store </a>
									</li>
									<li><a href="index-10.html"> <img src="img/home-menu/10.jpg" alt="" /> </a>
									  <a href="index-10.html" class="mega-title"> Application Store </a>
									</li>
									<li><a href="index-11.html"> <img src="img/home-menu/11.jpg" alt="" /> </a>
									  <a href="index-11.html" class="mega-title"> Lingeries Store </a>
									</li>
									<li><a href="index-12.html"> <img src="img/home-menu/12.jpg" alt="" /> </a>
									  <a href="index-12.html" class="mega-title"> HighTech Store </a>
									</li>
									<li><a href="index-13.html"> <img src="img/home-menu/13.jpg" alt="" /> </a>
									  <a href="index-13.html" class="mega-title"> Office Store </a>
									</li>
									<li><a href="index-14.html"> <img src="img/home-menu/14.jpg" alt="" /> </a>
									  <a href="index-14.html" class="mega-title"> Fashion Jemiz Store </a>
									</li>
									<li><a href="index-15.html"> <img src="img/home-menu/15.jpg" alt="" /> </a>
									  <a href="index-15.html" class="mega-title"> GameWorld Store </a>
									</li>
									<li><a href="index-16.html"> <img src="img/home-menu/16.jpg" alt="" /> </a>
									  <a href="index-16.html" class="mega-title"> Sneaker Store </a>
									</li>*}
									<li><a href="index-17.html"> <img src="../libs/img/home-menu/17.jpg" alt="" /> </a>
									  <a href="index-17.html" class="mega-title"> Drug Store </a>
									</li>
									{*<li><a href="index.html"> <img src="../libs/img/home-menu/18.jpg" alt="" /> </a>
									  <a href="index.html" class="mega-title"> Fashion Store </a>
									</li>*}
								</ul>
							</li>
						   	<li><a href="#">Category</a>
								<div class="mega-menu">
									<span>
										<a class="mega_title" href="shop.html">Dresses</a>
										<a href="shop.html">Cocktail</a>
										<a href="shop-list.html">Day</a>
										<a href="shop.html">Evening</a>
										<a href="shop-list.html">T-Shirts</a>
									</span>
									<span>      
										<a class="mega_title" href="shop.html">shoes</a>
										<a href="shop.html">Sports</a>
										<a href="shop-list.html">run</a>
										<a href="shop.html">sandals</a>
										<a href="shop-list.html">Books</a>
									</span>
									<span>      
										<a class="mega_title" href="shop.html">Handbags</a>
										<a href="shop.html">Blazers</a>
										<a href="shop-list.html">table</a>
										<a href="shop.html">coats</a>
										<a href="shop-list.html">kids</a>
									</span>
								</div> 
							</li>
						   	<li><a class="hot-p nrp" href="#">Products</a>
								<div class="mega-menu only-dropdown">
									<span>
										<a href="shop.html">Cocktail</a>
										<a class="hot-p" href="shop-list.html">Day</a>
										<a href="shop.html">Evening</a>
										<a class="hot-p" href="shop-list.html">T-Shirts</a>
										<a href="shop-list.html">T-Shirts</a>
										<a class="hot-p" href="shop-list.html">T-Shirts</a>
									</span>
								</div> 
							</li>
						   	{*<li><a href="blog.html">blog</a></li>*}
						   	<li><a href="about.html">About</a></li>
						   	{*<li><a href="#">pages</a>
								<div class="mega-menu only-dropdown">
									<span>
										<a href="shop.html">shop page</a>
										<a href="single-product.html">single product page</a>
										<a href="cart.html">cart page</a>
										<a href="checkout.html">checkout page</a>
										<a href="blog.html">blog page</a>
										<a href="single-blog.html">single blog page</a>
										<a href="about.html">About page</a>
										<a href="404.html">404 page</a>
										<a href="contact.html">contact page </a>
									</span>
								</div> 
							</li>*}
							<li><a href="contact.html">contact us</a></li>
                                                        
                                                         {if isset($smarty.session.admin.logged)}
                                                            <li><a href="admClients/">Clients</a></li>
                                                            <li><a href="admOrders/" name="bAdmOrders">Orders</a></li>
                                                            <li><a href="#" name="bShowBanners">Banners</a></li>
                                                            <li><a href="#" name="bNewBanner">New Banner</a></li> 
                                                            <li><a href="/admin-categories/">Categories</a></li>
                                                            <li><a href="/admin-products/">Products</a></li>
                                                            {/if}
                                                        
						   </ul>
						</nav>
					</div>
	            </div>
			</div>
		</div>
	</div>
	<!-- main menu area end -->

    <!-- mobile-menu-area start -->
	<div class="mobile-menu-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mobile-menu">
						<nav id="dropdown">
							<ul>
								<li><a href="index.html">Home</a>
									<ul>
										<li><a href="index.html" class="mega-title"> BiCycle Store </a></li>
										{*<li><a href="index-2.html" class="mega-title"> Shopping Mall Store </a></li>
										<li><a href="index-3.html" class="mega-title"> BackPacks Store </a></li>
										<li> <a href="index-4.html" class="mega-title"> Bakery Store </a></li>
										<li><a href="index-5.html" class="mega-title"> T-Shirt Store </a></li>
										<li><a href="index-6.html" class="mega-title"> Tools Hardware Store </a></li>
										<li><a href="index-7.html" class="mega-title"> Baby Store </a></li>
										<li><a href="index-8.html" class="mega-title"> Health Store </a></li>
										<li> <a href="index-9.html" class="mega-title"> Jewelry Store </a> </li>
										<li>  <a href="index-10.html" class="mega-title"> Application Store </a> </li>
										<li><a href="index-11.html" class="mega-title"> Lingeries Store </a></li>
										<li><a href="index-12.html" class="mega-title"> HighTech Store </a></li>
										<li><a href="index-13.html" class="mega-title"> Office Store </a></li>
										<li><a href="index-14.html" class="mega-title"> Fashion Jemiz Store </a></li>
										<li> <a href="index-15.html" class="mega-title"> GameWorld Store </a></li>
										<li>  <a href="index-16.html" class="mega-title"> Sneaker Store </a> </li>*}
										<li> <a href="index-17.html" class="mega-title"> Drug Store </a> </li>
										<li> <a href="index.html" class="mega-title"> Fashion Store </a> </li>
									</ul>
								</li>
								<li><a href="shop.html">Women</a>
									<ul>
										<li><a href="shop-list.html">Dresses</a>
											<ul>
												<li><a href="shop.html">Cocktail</a></li>
												<li><a href="shop-list.html">Day</a></li>
												<li><a href="shop.html">Evening</a></li>
												<li><a href="shop-list.html">T-Shirts</a></li>
											</ul>
										</li>
										<li><a href="shop.html">Clothing</a>
											<ul>
												<li><a href="shop.html">Sports</a></li>
												<li><a href="shop-list.html">run</a></li>
												<li><a href="shop.html">sandals</a></li>
												<li><a href="shop-list.html">Books</a></li>
												<li><a href="shop.html">T-Shirts</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="shop.html">Men</a>
									<ul>
										<li><a href="shop.html">Sports</a></li>
										<li><a href="shop.html">run</a></li>
										<li><a href="shop.html">sandals</a></li>
										<li><a href="shop.html">Books</a></li>
										<li><a href="shop.html">T-Shirts</a></li>
									</ul>
								</li>
								<li><a href="shop.html">Shop</a>
									<ul>
										<li><a href="shop.html">Grid View</a></li>
										<li><a href="shop-list.html">List View</a></li>
										<li><a href="cart.html">Cart page</a></li>
										<li><a href="wishlist.html">wishlist page</a></li>
										<li><a href="checkout.html">checkout page</a></li>
										<li><a href="single-product.html">single product page</a></li>
									</ul>
								</li>
								<li><a href="#">Other Pages</a>
									<ul>
										<li><a href="shop.html">shop page</a></li>
										<li><a href="single-product.html">single product page</a></li>
										<li><a href="cart.html">cart page</a></li>
										<li><a href="checkout.html">checkout page</a></li>
										<li><a href="blog.html">blog page</a></li>
										<li><a href="single-blog.html">single blog page</a></li>
										<li><a href="about.html">About page</a></li>
										<li><a href="404.html">404 page</a></li>
										<li><a href="contact.html"> contact page </a></li>
									</ul>
								</li>
								<li><a href="contact-us.html">contact</a></li>
							</ul>
						</nav>
					</div>					
				</div>
			</div>
		</div>
	</div>
	<!-- mobile-menu-area end -->

    <!-- slider area start -->
	<div class="h2_slider_area">
		<div class="container">
			<div class="row">
				<div class="h2-main-slider ">
					<div class="col-sm-9 col-md-3 col-lg-3 hidden-sm hidden-xs ">
					  <div class="h-16">
					    <div class="h2-left-cat">
							<h2 class="left-crt-title">Cateogry</h2>
							<div class="h16-menu">
								<nav>
									<div class="left-cart-menu">
										<ul>
                                         {section name=kk loop=$CATEGORIES}
                                            <li>
                                                <a href="category/{$CATEGORIES[kk].metakeys}">{$CATEGORIES[kk].name|stripslashes}</a>
                                            </li>
                                        {/section}
											<li> <i class="fa fa-car"></i> <a href="#"> Women’s Clothing </a> <span><i class="fa fa-caret-right"></i></span>
												<ul class="cat-sb">
                                                
													<li><a href="#">I-phone5 Clothing</a></li>
													<li><a href="#">Nokia 007 Handbags</a></li>
													<li><a href="#">Eyeglasses technology</a></li>
													<li><a href="#">Shoes man calculations</a></li>
													<li><a href="#">Book stall forever</a></li>
													<li><a href="#">computer best soft</a></li>
													<li><a href="#">Bangladesh country</a></li>
												</ul>
											</li>
											{*<li> <i class="fa fa-heart"></i> <a href="#"> Men’s Clothing </a> <span><i class="fa fa-caret-right"></i></span>
												<ul class="cat-sb">
													<li><a href="#">I-phone5 Clothing</a></li>
													<li><a href="#">Nokia 007 Handbags</a></li>
													<li><a href="#">Eyeglasses technology</a></li>
													<li><a href="#">Shoes man calculations</a></li>
													<li><a href="#">Book stall forever</a></li>
													<li><a href="#">computer best soft</a></li>
													<li><a href="#">Bangladesh country</a></li>
												</ul>
											</li>
											<li> <i class="fa fa-university"></i> <a href="#"> Eyeglasses </a> <span><i class="fa fa-caret-right"></i></span> 
												<ul class="cat-sb">
													<li><a href="#">I-phone5 Clothing</a></li>
													<li><a href="#">Nokia 007 Handbags</a></li>
													<li><a href="#">Eyeglasses technology</a></li>
													<li><a href="#">Shoes man calculations</a></li>
													<li><a href="#">Book stall forever</a></li>
													<li><a href="#">computer best soft</a></li>
													<li><a href="#">Bangladesh country</a></li>
												</ul>
											</li>
											<li> <i class="fa fa-camera"></i> <a href="#"> Steel  Watches </a> <span><i class="fa fa-caret-right"></i></span> 
												<ul class="cat-sb">
													<li><a href="#">I-phone5 Clothing</a></li>
													<li><a href="#">Nokia 007 Handbags</a></li>
													<li><a href="#">Eyeglasses technology</a></li>
													<li><a href="#">Shoes man calculations</a></li>
													<li><a href="#">Book stall forever</a></li>
												</ul>
											</li>
											<li> <i class="fa fa-video-camera"></i> <a href="#"> Handbags </a> <span><i class="fa fa-caret-right"></i></span>
												<ul class="cat-sb">
													<li><a href="#">I-phone5 Clothing</a></li>
													<li><a href="#">Nokia 007 Handbags</a></li>
													<li><a href="#">Eyeglasses technology</a></li>
													<li><a href="#">Shoes man calculations</a></li>
												</ul>
											</li>
											<li> <i class="fa fa-desktop"></i>   <a href="#"> desktop </a> </li>
											<li> <i class="fa fa-rss"></i>  <a href="#"> Shoes  </a>  </li>
											<li> <i class="fa fa-gift"></i>   <a href="#"> gift  </a> </li>*}
										</ul>
									</div>
								</nav>
							</div>
						</div>
					  </div>
                        <div class="h2-testimuial">
                            <div class="singl-tesimonial">
                                <div class="s-test-img">
                                    <img src="../libs/img/testi2.png" alt="">
                                </div>
                                <div class="s-test-infos">
                                    <h3>Nirob khan </h3>
                                    <p class="text-testi"><i class="fa fa-quote-left"></i>You can change the visual appearance of almost every                                element of the theme.</p>
                                </div>
                            </div>
                            <div class="singl-tesimonial">
                                <div class="s-test-img">
                                    <img src="../libs/img/testi3.png" alt="">
                                </div>
                                <div class="s-test-infos">
                                    <h3>salim rana </h3>
                                    <p class="text-testi"><i class="fa fa-quote-left"></i>You can change the visual appearance of almost every                                element of the theme.</p>
                                </div>
                            </div>
                        </div> 
                   
					{*<div class="h2-left-cat nra">
						<h2 class="left-crt-title">Best Sellers</h2>
						<div class="b-p-area">
							<div class="product-sale-of">
							  <div class="s-of-p-img">
								  <a href="#">
									  <img class="min-img" src="img/products/thumb/23.jpg" alt="">
									  <img class="other-img" src="img/products/thumb/24.jpg" alt="">
								  </a>
							  </div>
							  <div class="s-of-p-info">
								<div class="tab-p-info">
									<a href="#"> Apple iMac ME045 </a>
									<div class="star">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
									</div>
									<h3>$872.00 </h3>
								</div>  
							  </div>
						  </div>
						  <div class="product-sale-of">
							  <div class="s-of-p-img">
								  <a href="#">
									  <img class="min-img" src="img/products/thumb/25.jpg" alt="">
									  <img class="other-img" src="img/products/thumb/26.jpg" alt="">
								  </a>
							  </div>
							  <div class="s-of-p-info">
								<div class="tab-p-info">
									<a href="#"> Apple iMac ME045 </a>
									<div class="star">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
									</div>
									<h3>$872.00 </h3>
								</div>  
							  </div>
						  </div>
						  <div class="product-sale-of last-pd">
							  <div class="s-of-p-img">
								  <a href="#">
									  <img class="min-img" src="img/products/thumb/27.jpg" alt="">
									  <img class="other-img" src="img/products/thumb/28.jpg" alt="">
								  </a>
							  </div>
							  <div class="s-of-p-info">
								<div class="tab-p-info">
									<a href="#"> Apple iMac ME045 </a>
									<div class="star">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
									</div>
									<h3>$872.00 </h3>
								</div>  
							  </div>
						  </div>
						</div>
					</div>*}
					
					<!-- add area -->
					{*<div class="all-h17-left-add">
						<div class="new-adds electronics-bottom-bannar-area">
							<a href="#"><img src="../libs/img/all-adds/90.jpg" alt=""></a>
						</div>
						
						<div class="new-adds electronics-bottom-bannar-area hidden-md">
							<a href="#"><img src="../libs/img/all-adds/91.jpg" alt=""></a>
						</div>
						<div class="img-banner-small hidden-md">
						  <div class="banner-img  b-stripe">
							<a href="#">
								<img src="../libs/img/all-adds/93.jpg" alt="" class="img-responsive">
								<span class="b-line-9 b-position-1">&nbsp;</span> 
								<span class="b-line-9 b-position-2">&nbsp;</span> 
								<span class="b-line-9 b-position-3">&nbsp;</span> 
								<span class="b-line-9 b-position-4">&nbsp;</span> 
								<span class="b-line-9 b-position-5">&nbsp;</span> 
								<span class="b-line-9 b-position-6">&nbsp;</span> 
								<span class="b-line-9 b-position-7">&nbsp;</span> 
								<span class="b-line-9 b-position-8">&nbsp;</span> 
								<span class="b-line-9 b-position-9">&nbsp;</span>
							</a>
						  </div>
						</div>
					</div>*}
					<!-- add area -->
					</div>
					
					<div class="col-sm-12 col-md-9 col-lg-6">
						<div class="h-2-sliders all-navs">
							<div class="single-h2-slide s171">
								<img src="../libs/img/slider/h17/1.jpg" alt="" />
								<div class="slider-text">
									<h2>Best Quality <br> <span>Medications</span> </h2>
									<h3>at Low Prices</h3>
									<a href="#">purchase now</a>
								</div>
							</div>
							<div class="single-h2-slide s172">
								<img src="../libs/img/slider/h17/2.jpg" alt="" />
								<div class="slider-text">
									<h2>Quality Service</h2>
									<h3>for all your health needs</h3>
									<a href="#">purchase now</a>
								</div>
							</div>
							<div class="single-h2-slide s173">
								<img src="../libs/img/slider/h17/3.jpg" alt="" />
								<div class="slider-text">
									<h3>medication packing</h3>
									<h2>Pharmacy <br> Solutions</h2>
									<a href="#">purchase now</a>
								</div>
							</div>
						</div>
						<div class="row">
							 <!-- add area start -->
							    <div class="electronics-bottom-bannar-area">
								    <div class="col-sm-6 col-md-6 col-lg-6">
								     <a href="#"><img alt="" src="../libs/img/all-adds/88.jpg"></a>
								    </div>
								    <div class="col-sm-6  col-md-6 col-lg-6">
								     <a href="#"><img alt="" src="../libs/img/all-adds/89.jpg"></a>
								    </div>
								</div>
								
							
							  <!-- add area end -->
						</div>
						<div class="h2-new-arrivals-area">
					        <div class="h2-arviel-title h17t"><h3>Vaccines, Blood &amp; Biologics</h3></div>
					        <div class="clear"></div>
					        <div class="row">
					            <div class="h2-products nrb-next-prev">
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/1.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/2.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                            <h3>$172.00</h3>
	                                             <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/3.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/4.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                             <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <h3>$172.00</h3>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/5.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/6.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                            <h3>$172.00</h3>
	                                             <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/7.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/8.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                            <h3>$172.00 </h3>
	                                            <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					            </div>
					        </div>
					    </div>
						<div class="clear"></div>
						<div class="h2-new-arrivals-area cend-pd">
					        <div class="h2-arviel-title h17t"><h3>Comestics</h3></div>
					        <div class="clear"></div>
					        <div class="row">
					            <div class="h2-products nrb-next-prev">
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/9.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/10.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                            <h3>$172.00</h3>
	                                             <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/11.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/12.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                             <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <h3>$172.00</h3>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/13.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/14.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                            <h3>$172.00</h3>
	                                             <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/1.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/2.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                            <h3>$172.00 </h3>
	                                            <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					            </div>
					        </div>
					    </div>
						
						<div class="rnew-adds electronics-bottom-bannar-area">
							<a href="#"><img src="../libs/img/all-adds/92.jpg" alt=""></a>
						</div>
						
						<div class="clear"></div>
						<div class="h2-new-arrivals-area cend-pn">
					        <div class="h2-arviel-title h17t"><h3>Vitamins &amp; Supplements</h3></div>
					        <div class="clear"></div>
					        <div class="row">
								<div class="h2-products nrb-next-prev">
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/1.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/2.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                            <h3>$172.00</h3>
	                                             <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/3.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/4.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                             <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <h3>$172.00</h3>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/5.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/6.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                            <h3>$172.00</h3>
	                                             <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					                <div class="col-sm-12 col-md-12 col-lg-12">
	                                    <div class="t-all-product-info">
	                                        <div class="p-sign">new</div>
	                                        <div class="t-product-img">
	                                            <a href="#">
	                                                <img src="../libs/img/products/h17/7.jpg" alt="" />
	                                                <img class="second-img" src="../libs/img/products/h17/8.jpg" alt="" />
	                                            </a>
	                                        </div>
	                                        <div class="tab-p-info">
	                                            <a href="#">Bike Hardtail MTB </a>
	                                            <h3>$172.00 </h3>
	                                            <div class="star">
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                                 <i class="fa fa-star-half-o"></i>
	                                             </div>
	                                            <div class="al-btns">
	                                                <button type="button" title="Add to Cart" class="button btn-cart"><span> <i class="fa fa-shopping-cart"></i> Add to Cart</span></button>
	                                                <ul class="add-to-links">
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-eye"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-retweet"></i></a></li>
	                                                    <li><a href="#" class="link-wishlist" title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
					            </div>
					        </div>
					    </div>
					</div>
                    <h2>Test</h2>
                    		<div class="h2-left-cat nra">
						<h2 class="left-crt-title">Best Sellers</h2>
						<div class="b-p-area">
							<div class="product-sale-of">
							  <div class="s-of-p-img">
								  <a href="#">
									  <img class="min-img" src="../libs/img/products/thumb/23.jpg" alt="">
									  <img class="other-img" src="../libs/img/products/thumb/24.jpg" alt="">
								  </a>
							  </div>
							  <div class="s-of-p-info">
								<div class="tab-p-info">
									<a href="#"> Apple iMac ME045 </a>
									<div class="star">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
									</div>
									<h3>$872.00 </h3>
								</div>  
							  </div>
						  </div>
						  <div class="product-sale-of">
							  <div class="s-of-p-img">
								  <a href="#">
									  <img class="min-img" src="../libs/img/products/thumb/25.jpg" alt="">
									  <img class="other-img" src="../libs/img/products/thumb/26.jpg" alt="">
								  </a>
							  </div>
							  <div class="s-of-p-info">
								<div class="tab-p-info">
									<a href="#"> Apple iMac ME045 </a>
									<div class="star">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
									</div>
									<h3>$872.00 </h3>
								</div>  
							  </div>
						  </div>
						  <div class="product-sale-of last-pd">
							  <div class="s-of-p-img">
								  <a href="#">
									  <img class="min-img" src="../libs/img/products/thumb/27.jpg" alt="">
									  <img class="other-img" src="../libs/img/products/thumb/28.jpg" alt="">
								  </a>
							  </div>
							  <div class="s-of-p-info">
								<div class="tab-p-info">
									<a href="#"> Apple iMac ME045 </a>
									<div class="star">
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
										 <i class="fa fa-star-half-o"></i>
									</div>
									<h3>$872.00 </h3>
								</div>  
							  </div>
						  </div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- footer product area  -->
			{*<div class="footer-product-area">
				<div class="h2-sell-off-area">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12">
						  <div class="h2-arviel-title fpd"><h3>Products</h3></div>
						</div>
						<div class="clear"></div>
						<div class="footer-single-p">
							<div class="col-sm-6 col-md-4 col-lg-4">
								<div class="sp-f">	
								  <div class="sp-title"><h3>Medicine &amp; Health</h3></div>
								  <div class="product-sale-of">
									  <div class="s-of-p-img">
										  <a href="#">
											  <img alt="" src="img/products/thumb/23.jpg" class="min-img">
											  <img alt="" src="img/products/thumb/24.jpg" class="other-img">
										  </a>
									  </div>
									  <div class="s-of-p-info">
										<div class="tab-p-info">
											<a href="#"> Apple iMac ME045 </a>
											<div class="star">
												 <i class="fa fa-star"></i>
												 <i class="fa fa-star"></i>
												 <i class="fa fa-star-half-o"></i>
												 <i class="fa fa-star-half-o"></i>
												 <i class="fa fa-star-half-o"></i>
											</div>
											<h3>$872.00 </h3>
										</div>  
									  </div>
								  </div>
								  <div class="product-sale-of">
									  <div class="s-of-p-img">
										  <a href="#">
											  <img alt="" src="img/products/thumb/26.jpg" class="min-img">
											  <img alt="" src="img/products/thumb/25.jpg" class="other-img">
										  </a>
									  </div>
									  <div class="s-of-p-info">
										<div class="tab-p-info">
											<a href="#"> Apple iMac ME045 </a>
											<div class="star">
												 <i class="fa fa-star"></i>
												 <i class="fa fa-star"></i>
												 <i class="fa fa-star-half-o"></i>
												 <i class="fa fa-star-half-o"></i>
												 <i class="fa fa-star-half-o"></i>
											</div>
											<h3>$872.00 </h3>
										</div>  
									  </div>
								  </div>
								  <div class="product-sale-of lst-item">
									  <div class="s-of-p-img">
										  <a href="#">
											  <img alt="" src="img/products/thumb/27.jpg" class="min-img">
											  <img alt="" src="img/products/thumb/28.jpg" class="other-img">
										  </a>
									  </div>
									  <div class="s-of-p-info">
										<div class="tab-p-info">
											<a href="#"> Apple iMac ME045 </a>
											<div class="star">
												 <i class="fa fa-star"></i>
												 <i class="fa fa-star"></i>
												 <i class="fa fa-star-half-o"></i>
												 <i class="fa fa-star-half-o"></i>
												 <i class="fa fa-star-half-o"></i>
											</div>
											<h3>$872.00 </h3>
										</div>  
									  </div>
								  </div>
							     </div>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-4">
							<div class="sp-f">	
							  <div class="sp-title"><h3>HouseHold</h3></div>
							  <div class="product-sale-of">
								  <div class="s-of-p-img">
									  <a href="#">
										  <img alt="" src="img/products/thumb/23.jpg" class="min-img">
										  <img alt="" src="img/products/thumb/29.jpg" class="other-img">
									  </a>
								  </div>
								  <div class="s-of-p-info">
									<div class="tab-p-info">
										<a href="#"> Apple iMac ME045 </a>
										<div class="star">
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
										</div>
										<h3>$872.00 </h3>
									</div>  
								  </div>
							  </div>
							  <div class="product-sale-of">
								  <div class="s-of-p-img">
									  <a href="#">
										  <img alt="" src="img/products/thumb/25.jpg" class="min-img">
										  <img alt="" src="img/products/thumb/27.jpg" class="other-img">
									  </a>
								  </div>
								  <div class="s-of-p-info">
									<div class="tab-p-info">
										<a href="#"> Apple iMac ME045 </a>
										<div class="star">
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
										</div>
										<h3>$872.00 </h3>
									</div>  
								  </div>
							  </div>
							  <div class="product-sale-of lst-item">
								  <div class="s-of-p-img">
									  <a href="#">
										  <img alt="" src="img/products/thumb/28.jpg" class="min-img">
										  <img alt="" src="img/products/thumb/29.jpg" class="other-img">
									  </a>
								  </div>
								  <div class="s-of-p-info">
									<div class="tab-p-info">
										<a href="#"> Apple iMac ME045 </a>
										<div class="star">
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
										</div>
										<h3>$872.00 </h3>
									</div>  
								  </div>
							  </div>
							  </div>
							</div>
							
							<div class="col-sm-12 col-md-4 col-lg-4 hidden-sm">
							<div class="sp-f">	
							  <div class="sp-title"><h3>Beauty</h3></div>
							  <div class="product-sale-of">
								  <div class="s-of-p-img">
									  <a href="#">
										  <img alt="" src="img/products/thumb/23.jpg" class="min-img">
										  <img alt="" src="img/products/thumb/24.jpg" class="other-img">
									  </a>
								  </div>
								  <div class="s-of-p-info">
									<div class="tab-p-info">
										<a href="#"> Apple iMac ME045 </a>
										<div class="star">
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
										</div>
										<h3>$872.00 </h3>
									</div>  
								  </div>
							  </div>
							  <div class="product-sale-of">
								  <div class="s-of-p-img">
									  <a href="#">
										  <img alt="" src="img/products/thumb/25.jpg" class="min-img">
										  <img alt="" src="img/products/thumb/26.jpg" class="other-img">
									  </a>
								  </div>
								  <div class="s-of-p-info">
									<div class="tab-p-info">
										<a href="#"> Apple iMac ME045 </a>
										<div class="star">
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
										</div>
										<h3>$872.00 </h3>
									</div>  
								  </div>
							  </div>
							  <div class="product-sale-of lst-item">
								  <div class="s-of-p-img">
									  <a href="#">
										  <img alt="" src="img/products/thumb/27.jpg" class="min-img">
										  <img alt="" src="img/products/thumb/28.jpg" class="other-img">
									  </a>
								  </div>
								  <div class="s-of-p-info">
									<div class="tab-p-info">
										<a href="#"> Apple iMac ME045 </a>
										<div class="star">
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
											 <i class="fa fa-star-half-o"></i>
										</div>
										<h3>$872.00 </h3>
									</div>  
								  </div>
							  </div>
							</div>
						</div>
					 </div>
					</div>
				</div>
			</div>*}
		</div>
	</div>
	<!-- slider area End -->

    <!-- footer area start -->
	<div class="h2-footer-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="footer-about">
						<img src="../libs/img/logos/h2-logo_small.png" alt="" />
						<p>Skort Maison Martin Margiela knot ponytail cami texture as tucked t-shirt. Black skirt razor pleats plaited gold collar. Crop 90s spearmint indigo seam luxe washed out.</p>
						<ul>
							<li><a href="#"><i class="fa fa-home"></i> NewYork </a></li>
							<li><a href="#"><i class="fa fa-phone"></i> +8801922262289 </a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> owner@example.com </a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="use-full-links">
					  <h3 class="u-f-link">My Account</h3>
						<ul>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Term &amp; Conditions</a></li>
							<li><a href="#">My Orders</a></li>
							<li><a href="#">My Credit Slips</a></li>
							<li><a href="#">My Addresses</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="newsletter-sign-up">
						<h3 class="u-f-link">Newsletter Sign Up</h3>
						<div class="input-area-h2">
							<input type="text" placeholder="Sign up for your email ..."/>
							<button class="button"> <i class="fa fa-paper-plane"></i> </button>
						</div>
					</div>
					<div class="h2-fllow-area">
						<h3 class="u-f-link">Follow us</h3>
						<div class="all-social-icons">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
	<!-- footer area end -->
	
	<!-- footer area start -->
	<div class="copyright-address-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="footer-address"> 
					   <address>
						   &copy; 2015 Bootexperts. All Rights Reserved.<br>
						   <a href="#">Best HTML5 Template </a>
						   <span>By <a href="http://bootexperts.com">Bootexperts</a></span>
						   <div class="payment-logo">
								<a href="#"> <img src="../libs/img/prayment.png" alt="" /></a>
						   </div>
					   </address>
					</div>
	            </div>
            </div>
        </div>
    </div>


        <div id="wrapper">

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">MEDICINE-GET.com</a>
                    </div>
                    <ul class="nav navbar-nav">
                        
                        

                        
                        {if isset($smarty.session.admin.logged)}
                            <li><a href="admClients/">Clients</a></li>
                            <li><a href="admOrders/" name="bAdmOrders">Orders</a></li>
                            <li><a href="#" name="bShowBanners">Banners</a></li>
                            <li><a href="#" name="bNewBanner">New Banner</a></li> 
                            <li><a href="/admin-categories/">Categories</a></li>
                            <li><a href="/admin-products/">Products</a></li>
                            {/if}
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        {if isset($smarty.session.admin.logged)}
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> {$smarty.session.admin.name}</a></li>
                            <li><a href="/admin-exit/" name="logout" id="logout" class="logout glyphicon glyphicon-user" >Sign out</a></li>
                        {elseif isset($smarty.session.client.logged)}
                            <li><a href="#" class="glyphicon glyphicon-user">{$smarty.session.client.fname} {$smarty.session.client.lname}</a></li>
                            <li><a href="#" name="logout" id="logout" class="logout glyphicon glyphicon-user" >Sign out</a></li>
                                <div class="logout"></div>
                             <li><a href="orders/" name="myorders" class="glyphicon glyphicon-user">My Orders</a></li>
                        {else}
                            <li><a href="#" id="_accCreate" name="_accCreate" class="_accCreate glyphicon glyphicon-user"> Sign Up</a></li>
                            <li><a href="#" id="clLogin" name="clLogin" class="clLogin glyphicon glyphicon-log-in"> Login</a></li>
                            <div class="login"></div>
                            <div class="acc_create"></div>
                        {/if}
                        <li>
                            <a href="cart/" id="_cartStep">
                                {if isset($smarty.session.cart) != null}
                                    <span class="label label-default">{$smarty.session.cart|@count}</span>
                                {else}
                                    <span class="label label-default">0</span>
                                {/if}
                                <span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
                        </li>

                    </ul>
                </div>
            </nav>


            <div class="row">
                <form class="col-md-3 col-md-push-5" method="get" action="index.php">
                    <input type="text" name="search" title="Search…">
                    <input type="submit" name="search_BTN" title="Search Now!" value="Search!"
                           class="searchbutton">
                </form>
            </div>
                                
                                
                              
                                <div class="metro_body" id="metro_body"></div>
            
                                
                                
                                
                                
                                
                                <!-- Sidebar -->
            <div class="col-sm-2 sidenav">
                <ul class="sidebar-nav">
                    {section name=kk loop=$CATEGORIES}
                        <li>
                            <a href="category/{$CATEGORIES[kk].metakeys}">{$CATEGORIES[kk].name|stripslashes}</a>
                        {/section}
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            
            <div class="col-sm-8 content">
                {if isset($smarty.get.cat) || isset($smarty.get.search)}                                {include file='catproducts.tpl'}
                {elseif isset($smarty.get.product)}                                                     {include file='product.tpl'}
                {elseif isset($smarty.get.adminlogin)&& !isset($smarty.session.admin.logged)}           {include file='adminlogin.tpl'}
              {*  {elseif isset($smarty.get.register) && !isset($smarty.session.client.logged)}           {include file='regform.tpl'}
                {elseif isset($smarty.get.clLogin) && !isset($smarty.session.client.logged)}            {include file='login.tpl'}*}
                {elseif isset($smarty.get.vCart)}                                                       {include file='cart.tpl'}
{*                {elseif isset($smarty.session.admin.logged)}                                            {include file='adminMenu.tpl'}*}
                {elseif isset($smarty.get.adminCategories)}                                            {include file='adminCategory.tpl'}
                {elseif isset($smarty.get.adminProducts)}                                            {include file='adminProducts.tpl'}
                {elseif isset($smarty.get.myorders)}                                                    {include file='myOrders.tpl'}
                                {elseif isset($smarty.get.admOrders)}                                {include file='admOrders.tpl'}
                {elseif isset($smarty.get.admClients)}                                              {include file='admClients.tpl'}

                {else}
                    {include file='top.tpl'}
                {/if}



            </div>
                
                <!-- Banner -->
                
            <div class="col-sm-2 content">
                <table cellpadding="2" border="1" cellspacing="0" style="width:100%;">
                {* <ul class="sidebar-nav">
                    {section name=kk loop=$CATEGORIES}
                        <li>
                            <a href="category/{$CATEGORIES[kk].metakeys}">{$CATEGORIES[kk].name|stripslashes}</a>
                        {/section} *}
                    <div class="svSlider" style="position:relative; width:100%; height:140px; border:#fff 1px solid; margin-bottom:2px;">
                                    {include file='banners.tpl'}
                                                        </div>                    

                                    {include file='itemsLatest.tpl'}
                </table>                        
                {*</ul>*}
            </div>
            <!-- /#banner-wrapper -->
                
        </div>
        {*<!-- /#wrapper -->*}

    <!-- ALL JS FILES HERE -->
	<!-- jquery js -->
	<script src="../libs/js/vendor/jquery-1.11.3.min.js"></script>
	<!-- price_slider js -->
	<script src="../libs/js/price_slider.js"></script>  
	<!-- bootstrap js -->
	<script src="../libs/js/bootstrap.min.js"></script>
	<!-- owl.carousel.min js -->
	<script src="../libs/js/owl.carousel.min.js"></script>
	<!-- slicknav js -->
	<script src="../libs/js/jquery.mobilemenu.js"></script>   
	<!-- jquery.scrollUp js -->
	<script src="../libs/js/jquery.scrollUp.min.js"></script>  
	 <!-- jquerye levatezoom js -->
	<script src="../libs/js/jquery.elevatezoom.js"></script>  
	 <!-- jquerye countdown js -->
	<script src="../libs/js/countdown.js"></script> 		
	<!-- jquery fancybox js -->
	<script src="../libs/js/jquery.fancybox.pack.js"></script>  
	<!-- jquery bx-slider js -->
	<script src="../libs/js/bx-slider.min.js"></script> 
	<!--RS Lib js -->       
	<script type="text/javascript" src="../libs/lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
	<script type="text/javascript" src="../libs/lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="../libs/js/rs-slider.js"></script>
	<!-- plugins js -->
	<script src="../libs/js/plugins.js"></script>
	<!-- main js -->
	<script src="../libs/js/main.js"></script>

</body>
</html>
