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
                            <li><a href="#" name="run">TEST RUN</a></li> 
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