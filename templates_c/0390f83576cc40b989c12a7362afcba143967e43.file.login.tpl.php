<?php /* Smarty version Smarty-3.1.18, created on 2016-09-06 18:38:17
         compiled from ".\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1807457ceefe1bbe796-80924785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0390f83576cc40b989c12a7362afcba143967e43' => 
    array (
      0 => '.\\templates\\login.tpl',
      1 => 1473179857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1807457ceefe1bbe796-80924785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57ceefe1e13368_50136963',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ceefe1e13368_50136963')) {function content_57ceefe1e13368_50136963($_smarty_tpl) {?><div class="container">

    <form class="form-signin" method="post" action="/client-login/" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div><?php }} ?>
