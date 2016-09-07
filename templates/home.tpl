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
    </head>
    <body>


        <div id="wrapper">

            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">WebSiteName</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li>
                        <li><a href="client-login/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </nav>
            {*     {if isset($smarty.session.admin) && $smarty.session.admin == '555'}
            {include file='adminMenu.tpl'}
            {/if}*}


            <!-- login -->



            {*  <div class="loginmodal-container">
            <h1>{if isset($ERR)}{$ERR}{else}Login to Your Account{/if}</h1>
            <form method="post" action="/client-login/">
            <input type="text" name="mail" placeholder="E-mail address">
            <input type="password" name="pass" placeholder="Password">
            <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>
            </div>

            <div class="register">

            <form metod='post' action="/register/">
            <input type="submit" name="register" class="register" value="Register">
            </form>

            </div>*}

            <!-- Sidebar -->
            <div class="col-sm-2 sidenav">
                <ul class="sidebar-nav">
                    {section name=kk loop=$CATEGORIES}
                        <li>
                            <a href="category/{$CATEGORIES[kk].url}">{$CATEGORIES[kk].name|stripslashes}</a>                           
                        {/section}
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Content -->
            {section name=prod loop=$TOPPRODUCT}

                <div class="row">
                    <div class="col-sm-3 col-md-4">
                        <div class="thumbnail">
                            <img src="product/{$TOPPRODUCT[prod].url}" alt="{$TOPPRODUCT[prod].name|stripslashes}">
                            <div class="caption">
                                <h3>Thumbnail label</h3>
                                <p>{$TOPPRODUCT[prod].name|stripslashes}</p>
                                <p>
                                    <a href="product/{$TOPPRODUCT[prod].url}" class="btn btn-primary" role="button">{$TOPPRODUCT[prod].name|stripslashes}</a>
                                    <label>{$TOPPRODUCT[prod].price} лв.</label>
                                    <a href="#" class="btn btn-default" role="button">{$TOPPRODUCT[prod].price} лв.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            {/section}
            <!-- /#content-wrapper -->

            <div class="col-sm-10 content">
                {if isset($smarty.get.cat)}         {include file='catproducts.tpl'}        {/if}
                {if isset($smarty.get.product)}     {include file='product.tpl'}            {/if}
                {*                {if isset($smarty.get.adminlogin)}     {include file='adminlogin.tpl'}      {/if}*}
                {if isset($smarty.get.register)}     {include file='regform.tpl'}           {/if}
                {if isset($smarty.get.clLogin)}     {include file='login.tpl'}           {/if}


            </div>
        </div>
        {*<!-- /#wrapper -->*}

    </body>
</html>
