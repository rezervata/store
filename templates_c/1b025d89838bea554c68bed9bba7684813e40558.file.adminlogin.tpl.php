<?php /* Smarty version Smarty-3.1.18, created on 2017-02-16 17:44:06
         compiled from "./templates/adminlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48661892158a5c8c6895431-99410585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b025d89838bea554c68bed9bba7684813e40558' => 
    array (
      0 => './templates/adminlogin.tpl',
      1 => 1487067826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48661892158a5c8c6895431-99410585',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMINLOGIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58a5c8c68ec503_28979178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5c8c68ec503_28979178')) {function content_58a5c8c68ec503_28979178($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['ADMINLOGIN']->value)) {?><h2><?php echo getError($_smarty_tpl->tpl_vars['ADMINLOGIN']->value);?>
</h2><?php }?>
<form method="post" action="/admin-login/">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
</form><?php }} ?>
