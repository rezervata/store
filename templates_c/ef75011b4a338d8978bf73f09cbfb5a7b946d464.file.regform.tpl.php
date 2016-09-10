<?php /* Smarty version Smarty-3.1.18, created on 2016-09-10 13:58:49
         compiled from ".\templates\regform.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2530557cebb1d5e8e90-06709634%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef75011b4a338d8978bf73f09cbfb5a7b946d464' => 
    array (
      0 => '.\\templates\\regform.tpl',
      1 => 1473508422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2530557cebb1d5e8e90-06709634',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cebb1d76b895_19946862',
  'variables' => 
  array (
    'CLREGISTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cebb1d76b895_19946862')) {function content_57cebb1d76b895_19946862($_smarty_tpl) {?><div class="container">
    <?php if (isset($_smarty_tpl->tpl_vars['CLREGISTER']->value)) {?><h2><?php echo getError($_smarty_tpl->tpl_vars['CLREGISTER']->value);?>
</h2><?php }?>
    <form class="form-horizontal" role="form" id='register' action='/register/' method='post'
    accept-charset='UTF-8'>

        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" id="name" name='name' placeholder="Full Name" class="form-control" autofocus>
                <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Phone number</label>
            <div class="col-sm-9">
                <input type="text" id="phone" name='phone' placeholder="Phone number" class="form-control" autofocus>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" name="mail" placeholder="Email" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password"  name="pass" id="password" placeholder="Password" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label for="confirmPassword" class="col-sm-3 control-label">Confirm Password</label>
            <div class="col-sm-9">
                <input type="password" name="pass2" id="confirmPassword" placeholder="Confirm Password" class="form-control">
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <div class="checkbox">
                    <label>
                        <input type="checkbox">I accept <a href="#">terms</a>
                    </label>
                </div>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div> <!-- /.form-group -->
 
    </form> <!-- /form -->
    
</div> <!-- ./container --><?php }} ?>
