<?php /* Smarty version Smarty-3.1.18, created on 2017-01-30 16:08:38
         compiled from "./templates/adminlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1748348384588f48e67a61f3-02688136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b025d89838bea554c68bed9bba7684813e40558' => 
    array (
      0 => './templates/adminlogin.tpl',
      1 => 1485767140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1748348384588f48e67a61f3-02688136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMINLOGIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588f48e6829544_79152076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588f48e6829544_79152076')) {function content_588f48e6829544_79152076($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['ADMINLOGIN']->value)) {?><h2><?php echo getError($_smarty_tpl->tpl_vars['ADMINLOGIN']->value);?>
</h2><?php }?>
<form method="post" action="/admin-login/">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
</form><?php }} ?>
