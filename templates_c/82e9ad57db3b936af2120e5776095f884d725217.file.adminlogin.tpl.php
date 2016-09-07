<?php /* Smarty version Smarty-3.1.18, created on 2016-09-07 12:56:53
         compiled from ".\templates\adminlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2064157cff2758f3e85-65591492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82e9ad57db3b936af2120e5776095f884d725217' => 
    array (
      0 => '.\\templates\\adminlogin.tpl',
      1 => 1473109343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2064157cff2758f3e85-65591492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cff2759b3c70_70218381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cff2759b3c70_70218381')) {function content_57cff2759b3c70_70218381($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['ERR']->value)) {?><?php echo $_smarty_tpl->tpl_vars['ERR']->value;?>
<?php }?>
<form method="post" action="/admin-login/">
        <input type="text" name="user" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <input type="submit" name="login" class="login loginmodal-submit" value="Login">
</form><?php }} ?>
