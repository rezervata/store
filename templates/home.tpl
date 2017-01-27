<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <link rel="icon" type="imgage/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
        <script type="text/javascript" src="js/admin.js"></script>

    </head>
    <body>


        <div id="wrapper">

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/">WebSiteName</a>
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
                    <input type="submit" name="search_BTN" title="Search Now!" value="Go"
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

    </body>
</html>

{*
 <!-----right------> 
        <aside class="column">
        	<div style="margin:10px; position:relative;">
            
            {include file='banners.tpl'}
            
        	{include file='itemsLatest.tpl'}
            </div>
        </aside>
<! ---- >

        <div class="clearfix"></div>
    </section>
    
    
    
<!---****** FOOTER ******--->
    <footer class="mainFooter">
    	<div style="margin:10px; position:relative;">
            <div class="footColumn">
            	<div class="footContent">
                	<h3>Information</h3>
                	<a href="information/" title="Information" alt="Information">information</a><br>
                    <a href="delivery/" title="Delivery" alt="Delivery">delivery</a><br>
                    <a href="" class="_contactUs" title="Contact" alt="Contact">contact us</a><br>
                    <a href="sitemap/" title="Site map" alt="Site map">site map</a>
                </div>
            </div>
            
            <div class="footColumn">
            	<div class="footContent">
                	<h3>My account</h3>
                	<a href="orders/">Orders</a><br>
                    <a href="" id="_myInfo">Personal info</a>
                </div>
            </div>
            
            <div class="footColumn">
            	<div class="footContent">
                	<h3>Follow us</h3>
                	<img src="_css/img/following.png">
                </div>
            </div>
            
            <div class="footColumn">
            	<div class="footContent" style="margin-right:0;">
                	<h3>Accepting</h3>
                	<img src="_css/img/accepting.png">
                </div>
            </div>
            
            <div class="clearfix"></div>
        </div>
    </footer>
    
</div>

<!---*** Metro style ***--->
<div id="_blanketH">
<div id="metro_msg">
	<div id="metro_content">
    	<div id="metro_msg_holder">
        	<div class="metro_aj_filler">
        		<img src="_libs/css/img/close-new-24.png" id="metroClose" alt="Close" title="Close">
        		<div id="metro_body">
            	</div>
            </div>
        </div>
    </div>
</div>
</div>
 <!---*** end metro style ***--->

<div id="_blanket" style="display:none;">
<div id="_block"><div id="_cFrame"><img id="_closeBtn" src="libs/css/img/close-new-24.png" alt="Close" title="Close"><div id="_centered">
Loading...
</div></div></div></div>

</body>
</html>









{if isset($smarty.get.master)}
{literal}
<script>
$(document).ready(function() {
    $('#metro_body').html('');
	$('#metro_body').load('async.php?load=admLogin',function(){
		$('#_blanketH').fadeIn(400, function(){
			$('input[name="xaUser"]').focus();
		});
	});
});

</script>
{/literal}
{/if}
*}