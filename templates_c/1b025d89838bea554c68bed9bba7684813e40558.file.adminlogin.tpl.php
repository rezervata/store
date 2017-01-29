<?php /* Smarty version Smarty-3.1.18, created on 2017-01-29 16:02:35
         compiled from "./templates/adminlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1958221772588df5fbc71849-03183663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b025d89838bea554c68bed9bba7684813e40558' => 
    array (
      0 => './templates/adminlogin.tpl',
      1 => 1485391049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1958221772588df5fbc71849-03183663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMINLOGIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588df5fbd77a17_87118741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588df5fbd77a17_87118741')) {function content_588df5fbd77a17_87118741($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['ADMINLOGIN']->value)) {?><h2><?php echo getError($_smarty_tpl->tpl_vars['ADMINLOGIN']->value);?>
</h2><?php }?>
<form method="post" action="/admin-login/">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
</form><?php }} ?>
