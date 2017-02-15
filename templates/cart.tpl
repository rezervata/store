<html class="no-js" lang="">
    <head>
		<!-- Basic page needs
		============================================ -->	
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Champions - Cart Page </title>
        <meta name="description" content="">
		<!-- Mobile specific metas -->		
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/fav_icon.ico">
		<!--All Fonts  Here -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:500,400,700,300' rel='stylesheet' type='text/css'>
		
		<!-- ALL CSS FILES HERE -->
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- fancybox CSS -->
        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">	
		<!--bxslider CSS -->
        <link rel="stylesheet" href="css/jquery.bxslider.min.css">	
		<!-- owl.carousel CSS-->
        <link rel="stylesheet" href="css/owl.carousel.css">
         <!-- owl.carousel transitions CSS-->
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- simplelens CSS-->
        <link rel="stylesheet" href="css/jquery.simplelens.css">
		<!-- owl.theme CSS-->
        <link rel="stylesheet" href="css/owl.theme.css">
		<!-- rs-plugin CSS -->	
		<!-- slider revolution css settings -->
		<link rel="stylesheet" type="text/css" href="libs/lib/rs-plugin/css/settings.css" media="screen" />
		<!-- jquery-ui-->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<!-- css for mobile menu-->
        <link rel="stylesheet" href="css/mobile_menu.min.css">
		<!-- normalize CSS -->		
        <link rel="stylesheet" href="css/normalize.css">
		<!-- main CSS -->		
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS -->			
        <link rel="stylesheet" href="libs/lib/style.css">
		<!-- responsive CSS -->			
        <link rel="stylesheet" href="css/responsive.css">
		
		<!-- modernizr js -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <header>
		<div class="header-top" id="sticker">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4 col-md-12 col-lg-2 ">
						<div class="logo-area">
							<a href="#"><img src="img/logos/logo.png" alt="logo" /> </a>
						</div>			
					</div>
					<div class="col-sm-8 col-md-8 col-lg-7">
						<div class="menu-area">
							<nav class="main-menu">
							  <ul>
							   	<li><a href="#">home</a>
									<ul class="img-mega-menu">
										
										<li><a href="index-17.html"> <img src="img/home-menu/17.jpg" alt="" /> </a>
										  <a href="index-17.html" class="mega-title"> Drug Store </a>
										</li>
										
									</ul>

<div class="cart">

    {if !isset($smarty.session.cart_step) || $smarty.session.cart_step == 1}
        <header class="cartSteps">
            <ul>
                <li class="currentTab">1. Your cart</li>
                <li>2. Your details</li>
                <li>3. Add Address</li>
                <li>4. Payment method</li>
                <li>5. Place order</li>
            </ul>
        </header>

        {if isset($CART) && !empty($CART)}

            <table width="100%">
                {assign var="total" value=0}

                {foreach from=$CART key=k item=v }
                    <tr>
                        <td>product id: {$k}</id>
                        <td>{$v.name}</td>
                        <td>{$v.price}</td>
                        <td width="20"><a href="#" button type="minus" class="btn btn-default minus" data-id={$v.id}>-</a></td>
                        <td width="50">{$v.qty}</td>
                        <td width="20"><a href="#" button type="plus" class="btn btn-default plus" data-id={$v.id}>+</a></td>
                        <td>{$v.sum}</td>
                        <td width="20"><a href="#" button type="del" class="btn btn-default del" data-id={$v.id}>Delete</a></td>
                    </tr>
                    {$total = $total + $v.sum}
                {/foreach}

                <tr>
                    <td colspan=6>total</td>
                    <td><b>{$total}</b></td>
                    <td width="20"><button type="clr" class="btn btn-default clr">Clear Cart</button></td>
                </tr>
                
            </table>

        {else}

            {include file='top.tpl'}

        {/if}
    </div>

    <!-- SECTIONS 2,3,4 -->

    <div class="cartNav">
        <a href="#" class="steps _btn" data-step="2">Check out</a>
    </div>

{elseif empty($smarty.session.client)}
    <header class="cartSteps">
        <ul>
            <li>1. Your cart</li>
            <li class="currentTab">2. Your details</li>
            <li>3. Add Address</li>
            <li>4. Payment method</li>
            <li>5. Place order</li>
        </ul>
    </header>

     

    {if !isset($smarty.session.client.guest) && !isset($smarty.session.client.logged)}   

            <p style="padding:1.8em;">
                <a href="#" class="clLogin _btn" alt="Login" title="Client login">Login</a> &nbsp; <a href="#" class="_accCreate _btn" alt="Create account" title="Create account">Create account</a>
            </p>
            <div class="login"></div>
            <div class="acc_create"></div>
            <a href="#" class="_guestOrder" id="newGuestUser" style="margin-left:1.9em; font-size:0.9em;">Continue as guest</a>
                <div id="metro_body"></div>

                <div id="_blanketH"></div>
                
    {/if}            

 <div class="cartNav">
        <a href="#" class="steps _btn" data-step="1">Back to Cart</a>
    </div>



{elseif $smarty.session.cart_step == 3}
    <header class="cartSteps">
        <ul>
            <li>1. Your cart</li>
            <li>2. Your details</li>
            <li class="currentTab">3. Add Address</li>
            <li>4. Payment method</li>
            <li>5. Place order</li>
        </ul>
    </header>
    
    
    
    <div class="_locationNew">
        {if !empty($smarty.session.client)}    
        <a href="#" id="_newLocation" class="_btn">Add address</a>
        
        <div id="metro_body"></div>
        <div id="test"></div>
        <div id="test2"></div>
        <div id="_blanketH"></div>
    
            <table cellpadding="2" cellspacing="0" style="width:100%;">
            {section name=sl loop=$LOCATIONS}
                <tr>
                   <tr><td>Country: {$LOCATIONS[sl].country}</td> </tr>
                   <tr><td>State: {$LOCATIONS[sl].state}</td></tr>
                   <tr><td>City: {$LOCATIONS[sl].city}</td></tr>
                   <tr><td>Street: {$LOCATIONS[sl].street}</td></tr>
                   <tr><td width="60">zip code: {$LOCATIONS[sl].zip}</td></tr>
                    <tr><td width="60" style="padding-top:5px; padding-bottom:5px; text-align:left;">
                        <a href="#" class="steps _btn" data-step="4" name="shipAddr" data-id="{$LOCATIONS[sl].id}" data-ship="{$LOCATIONS[sl].shipping}" class="_btn">Use</a>
                    </td></tr>
                </tr>
            {/section}
        </table>
    {/if}
    
    </div>
    
    

    <div class="cartNav">
        <a href="#" class="steps _btn" data-step="2" class="_btn">Back</a>
        <a href="#" class="steps _btn" data-step="1" class="_btn">Back to Cart</a>
    </div>

{else $smarty.session.cart_step == 4 || !empty($smarty.session.client.shipAddr)}
    <header class="cartSteps">
        <ul>
            <li>1. Your cart</li>
            <li>2. Your details</li>
            <li>3. Add Address</li>
            <li class="currentTab">4. Payment method</li>
            <li>5. Place order</li>
        </ul>
    </header>
    
    <table cellpadding="7" cellspacing="0" style="width:100%;">
        

        <tr>
            <td>Bank wire transfer</td>
            <td width="60"><a href="#" class="steps _btn" data-step="5" name="paymentOption" data-name="wire" class="_btn">Select</a></td>
        </tr>
        <tr>
            <td>MoneyGram</td>
            <td width="60"><a href="#" class="steps _btn" data-step="5" name="paymentOption" data-name="moneygram" class="_btn">Select</a></td>
        </tr>

    </table>
        
        <div class="cartNav">
        <a href="#" class="steps _btn" data-step="3" class="_btn">Back</a>
        <a href="#" class="steps _btn" data-step="1" class="_btn">Back to Cart</a>
    </div>



{/if}


{if $smarty.session.cart_step == 5 && isset($smarty.session.client.payMethod)}
    
    <p class="finalmsg"></p>
    
    <div class="finish">
        
     <header class="cartSteps">
        <ul>
            <li>1. Your cart</li>
            <li>2. Your details</li>
            <li>3. Add Address</li>
            <li>4. Payment method</li>
            <li class="currentTab">5. Place order</li>
        </ul>
    </header>


    <table cellpadding="2" cellspacing="0" border="1">
        {foreach from=$CART item=v}
            <tr id="{$v.id}">
                <td>{$v.name}</td>
                <td width="60">&euro; {$v.price}</td>
                <td width="60">{$v.qty}</td>
                <td width="80">&euro; {$v.qty * $v.price}</td>
            </tr>
        {/foreach}

        <tr>
            <td colspan="3" style="padding-right:16px; text-align:right;">Cart total</td>
            <td align="left">&euro; {$CART_TOTAL}</td>
        </tr>
        <tr>
            <td colspan="3" style="padding-right:16px; text-align:right;">Shipping tax</td>
            <td align="left">&euro; {$smarty.session.client.shipTax}</td>
        </tr>
        <tr>
            <td colspan="3" style="padding-right:16px; text-align:right;">Total</td>
            <td align="left">&euro; {($CART_TOTAL + $smarty.session.client.shipTax)|number_format:2}</td>
        </tr>
    </table>
    
{if $smarty.session.client.payMethod == 'moneygram'}
    <p>
        Payment with MoneyGram - Please, provide the payment code for verification.<br><br>
        name: <strong>DIMITAR ASENOV KORUDZHIEV</strong><br>
        city: <strong>SOFIA</strong><br>
        country: <strong>BULGARIA</strong>
    </p>
    <p><a href="#" class="payNow _btn" data-name="moneygram">Order Now</a></p>
{else}
    <p>
        Payment with Bank wire Transfer<br><br>
        BIC/SWIFT: <strong>FINVBGSF</strong><br>
        IBAN: <strong>BG82FINV91501015882657</strong><br>
        CARD HOLDER: <strong>DIMITAR KORUDZHIEV</strong><br>
        <br>
        BANK: First Investment Bank AD<br>
        ADDRESS: 37, Dragan Tsankov Blvd.<br>
        CITY: 1797 Sofia<br>
        COUNTRY: Bulgaria
    </p>
    <p><a href="#" class="payNow _btn" data-name="wire">Order Now</a></p>
{/if}
</div>

<div class="cartNav">
    <a hhref="#" class="steps _btn" data-step="4" class="_btn">Back</a>
    <a href="#" class="steps _btn" data-step="1" class="_btn">Back to Cart</a>
</div>


{/if}


<!-- END SECTIONS 2,3,4 -->
