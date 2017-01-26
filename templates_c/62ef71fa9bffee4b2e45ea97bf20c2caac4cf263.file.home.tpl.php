<?php /* Smarty version Smarty-3.1.18, created on 2017-01-26 15:59:18
         compiled from "./templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1624016093588a00b67f9117-27486138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62ef71fa9bffee4b2e45ea97bf20c2caac4cf263' => 
    array (
      0 => './templates/home.tpl',
      1 => 1485434282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1624016093588a00b67f9117-27486138',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CATEGORIES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588a00b6aff5f9_10091707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588a00b6aff5f9_10091707')) {function content_588a00b6aff5f9_10091707($_smarty_tpl) {?><!DOCTYPE html>
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
                        
                        

                        
                        <?php if (isset($_SESSION['admin']['logged'])) {?>
                            <li><a href="admClients/">Clients</a></li>
                            <li><a href="admOrders/" name="bAdmOrders">Orders</a></li>
                            <li><a href="#" name="bShowBanners">Banners</a></li>
                            <li><a href="#" name="bNewBanner">New Banner</a></li>    
                            <li><a href="/admin-categories/">Categories</a></li>
                            <li><a href="/admin-products/">Products</a></li>
                            <?php }?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['admin']['logged'])) {?>
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['admin']['name'];?>
</a></li>
                            <li><a href="/admin-exit/" name="logout" id="logout" class="logout glyphicon glyphicon-user" >Sign out</a></li>
                        <?php } elseif (isset($_SESSION['client']['logged'])) {?>
                            <li><a href="#" class="glyphicon glyphicon-user"><?php echo $_SESSION['client']['fname'];?>
 <?php echo $_SESSION['client']['lname'];?>
</a></li>
                            <li><a href="#" name="logout" id="logout" class="logout glyphicon glyphicon-user" >Sign out</a></li>
                                <div class="logout"></div>
                             <li><a href="orders/" name="myorders" class="glyphicon glyphicon-user">My Orders</a></li>
                        <?php } else { ?>
                            <li><a href="#" id="_accCreate" name="_accCreate" class="_accCreate glyphicon glyphicon-user"> Sign Up</a></li>
                            <li><a href="#" id="clLogin" name="clLogin" class="clLogin glyphicon glyphicon-log-in"> Login</a></li>
                            <div class="login"></div>
                            <div class="acc_create"></div>
                        <?php }?>
                        <li>
                            <a href="cart/" id="_cartStep">
                                <?php if (isset($_SESSION['cart'])!=null) {?>
                                    <span class="label label-default"><?php echo count($_SESSION['cart']);?>
</span>
                                <?php } else { ?>
                                    <span class="label label-default">0</span>
                                <?php }?>
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
                                <div class="metro_body"></div>
            <!-- Sidebar -->
            <div class="col-sm-2 sidenav">
                <ul class="sidebar-nav">
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['name'] = 'kk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CATEGORIES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total']);
?>
                        <li>
                            <a href="category/<?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['metakeys'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['CATEGORIES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['name']);?>
</a>
                        <?php endfor; endif; ?>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            
            <div class="col-sm-8 content">
                <?php if (isset($_GET['cat'])||isset($_GET['search'])) {?>                                <?php echo $_smarty_tpl->getSubTemplate ('catproducts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif (isset($_GET['product'])) {?>                                                     <?php echo $_smarty_tpl->getSubTemplate ('product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif (isset($_GET['adminlogin'])&&!isset($_SESSION['admin']['logged'])) {?>           <?php echo $_smarty_tpl->getSubTemplate ('adminlogin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

              
                <?php } elseif (isset($_GET['vCart'])) {?>                                                       <?php echo $_smarty_tpl->getSubTemplate ('cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <?php } elseif (isset($_GET['adminCategories'])) {?>                                            <?php echo $_smarty_tpl->getSubTemplate ('adminCategory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif (isset($_GET['adminProducts'])) {?>                                            <?php echo $_smarty_tpl->getSubTemplate ('adminProducts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif (isset($_GET['myorders'])) {?>                                                    <?php echo $_smarty_tpl->getSubTemplate ('myOrders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                <?php } elseif (isset($_GET['admOrders'])) {?>                                <?php echo $_smarty_tpl->getSubTemplate ('admOrders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php } elseif (isset($_GET['admClients'])) {?>                                              <?php echo $_smarty_tpl->getSubTemplate ('admClients.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate ('top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>



            </div>
                
                <!-- Banner -->
                
            <div class="col-sm-2 content">
                <table cellpadding="2" border="1" cellspacing="0" style="width:100%;">
                
                    <div class="svSlider" style="position:relative; width:100%; height:140px; border:#fff 1px solid; margin-bottom:2px;">
                                    <?php echo $_smarty_tpl->getSubTemplate ('banners.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                                                        </div>                    

                                    <?php echo $_smarty_tpl->getSubTemplate ('itemsLatest.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </table>                        
                
            </div>
            <!-- /#banner-wrapper -->
                
        </div>
        

    </body>
</html>

<?php }} ?>
