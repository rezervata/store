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
                        <a class="navbar-brand" href="/">WebSiteName</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home</a></li>
                        <li><a href="/">Page 1</a></li>
                        <li><a href="/">Page 2</a></li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        {if isset($smarty.session.client.logged)}
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> {$smarty.session.client.name}</a></li>
                            <li><a href="/client-exit/">Sign out</a></li>
                        {else}
                        <li><a href="register/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="client-login/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        {/if}
                        
                    </ul>
                </div>
            </nav>


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


            <div class="col-sm-10 content">
                {if isset($smarty.get.cat)}             {include file='catproducts.tpl'}
                {elseif isset($smarty.get.product)}         {include file='product.tpl'}
                {elseif isset($smarty.get.adminlogin)}      {include file='adminlogin.tpl'} 
                {elseif isset($smarty.get.register)}        {include file='regform.tpl'}
                {elseif isset($smarty.get.clLogin)}         {include file='login.tpl'}
                {else}
                    {include file='top.tpl'}
                {/if}



            </div>
        </div>
        {*<!-- /#wrapper -->*}

    </body>
</html>
