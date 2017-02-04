<?php /* Smarty version Smarty-3.1.18, created on 2017-02-04 15:20:00
         compiled from "./templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19375668845891d2c6b53371-87466674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5f63cf8bf5077cbe9e40e023158dd20352e878a' => 
    array (
      0 => './templates/login.tpl',
      1 => 1486214068,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19375668845891d2c6b53371-87466674',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5891d2c6caf2a4_66795924',
  'variables' => 
  array (
    'CLIENTLOGIN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5891d2c6caf2a4_66795924')) {function content_5891d2c6caf2a4_66795924($_smarty_tpl) {?><head>
<script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
<div class="container">
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
            <div class="g-recaptcha" data-sitekey="6LeY-BMUAAAAAILzmoKccnfPH3F6uga8EW1NOaCM"></div> 
        
        <input type="submit" id="login" class="btn btn-lg btn-primary btn-block">Sign in</input>
    </form>
  
</div>
<?php }} ?>
