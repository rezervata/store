<?php /* Smarty version Smarty-3.1.18, created on 2016-12-10 16:36:38
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1429808565584c12f6f0e4c7-70741475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1481314129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1429808565584c12f6f0e4c7-70741475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CLIENTLOGIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584c12f700d736_85857428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584c12f700d736_85857428')) {function content_584c12f700d736_85857428($_smarty_tpl) {?><div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['CLIENTLOGIN']->value)) {?><h2></h2><?php }?>
    <form class="form-signin" name="loginform" method="post" action="" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="pass" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="login" type="submit">Sign in</button>
    </form>

</div><?php }} ?>
