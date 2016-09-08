<?php /* Smarty version Smarty-3.1.18, created on 2016-09-08 01:53:59
         compiled from ".\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1944757cdde4d8a0373-69140913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97d060df136bc68287855ad0037b446ebb85b73d' => 
    array (
      0 => '.\\templates\\home.tpl',
      1 => 1473292438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1944757cdde4d8a0373-69140913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cdde4e0148b6_90751517',
  'variables' => 
  array (
    '_SESSION' => 0,
    'USER' => 0,
    'CATEGORIES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cdde4e0148b6_90751517')) {function content_57cdde4e0148b6_90751517($_smarty_tpl) {?><!DOCTYPE html>
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
                        <a class="navbar-brand" href="home/">WebSiteName</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="home/">Home</a></li>
                        <li><a href="home/">Page 1</a></li>
                        <li><a href="home/">Page 2</a></li> 
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['loggedin'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['loggedin']==true;?>
<?php $_tmp2=ob_get_clean();?><?php if (isset($_tmp1)&&$_tmp2) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['us'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['us']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['name'] = 'us';
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['USER']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['us']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['us']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['us']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['us']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['us']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['us']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['us']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['us']['total']);
?>
                                <li><a href="register/"><span class="glyphicon glyphicon-user"></span><?php echo $_smarty_tpl->tpl_vars['USER']->value[$_smarty_tpl->getVariable('smarty')->value['section']['us']['index']]['name'];?>
</a></li>                            

                            <?php endfor; endif; ?>
                            <li><a href="home/"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                            <?php } else { ?>
                            <li><a href="register/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="client-login/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <?php }?>

                    </ul>
                </div>
            </nav>
            <?php if (isset($_SESSION['admin'])&&$_SESSION['admin']=='555') {?>
                <?php echo $_smarty_tpl->getSubTemplate ('adminMenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>


            <!-- login -->



            

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
                            <a href="category/<?php echo $_smarty_tpl->tpl_vars['CATEGORIES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['url'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['CATEGORIES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['name']);?>
</a>                           
                        <?php endfor; endif; ?>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            

            <div class="col-sm-10 content">
                <?php if (isset($_GET['cat'])) {?>             <?php echo $_smarty_tpl->getSubTemplate ('catproducts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        <?php }?>
                <?php if (isset($_GET['product'])) {?>         <?php echo $_smarty_tpl->getSubTemplate ('product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            <?php }?>
                <?php if (isset($_GET['adminlogin'])) {?>      <?php echo $_smarty_tpl->getSubTemplate ('adminlogin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
         <?php }?>
                <?php if (isset($_GET['register'])) {?>        <?php echo $_smarty_tpl->getSubTemplate ('regform.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
            <?php }?>
                <?php if (isset($_GET['clLogin'])) {?>         <?php echo $_smarty_tpl->getSubTemplate ('login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
              <?php }?>                
                <?php if (isset($_GET['home'])) {?>            <?php echo $_smarty_tpl->getSubTemplate ('top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
                <?php }?>



            </div>
        </div>
        

    </body>
</html>
<?php }} ?>
