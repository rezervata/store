<?php /* Smarty version Smarty-3.1.18, created on 2017-02-16 17:39:12
         compiled from "./templates/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49436817458a5c7a01e6e95-36248995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '596a02a5b0280a75530d396803234209abb39d26' => 
    array (
      0 => './templates/product.tpl',
      1 => 1487067826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49436817458a5c7a01e6e95-36248995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CATEGORIES' => 0,
    'PRODUCT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58a5c7a0344de9_91110553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a5c7a0344de9_91110553')) {function content_58a5c7a0344de9_91110553($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {?>

<div class="content">
    <h2><?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value[0]['name']);?>
</h2>
    <h4><?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value[0]['mkeys']);?>
</h4>
 
   <div class="product_data">
     <div style="position:relative;">
      <!--   <div style="width:200px; float:left;">    -->
             <img  src="../img/m<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value[0]['image'];?>
.jpg" class="product_image" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value[0]['name']);?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value[0]['name']);?>
" width="480px" height="300px">
           </div>

           <div class="fixed"></div>
       </div>


    <label>Price: <?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value[0]['price'];?>
 euro</label>

            <a href="#" class="btn btn-default toCart" role="button" data-id="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value[0]['id'];?>
">Add to Cart</a>

         <p><?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value[0]['data']);?>
</p>
</div>

<?php if (isset($_SESSION['admin']['logged'])&&$_SESSION['admin']['logged']==md5('OK')) {?>
		<div style="float:left">
			<input type="button" name="bEditItem" data-id="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value[0]['id'];?>
" value="edit">
                        <input type="button" name="bAddToBanGrp" data-id="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value[0]['id'];?>
" value="add to banner">
                </div>
  <?php }?>

<?php } else { ?>

    No such product!!!

<?php }?>
<?php }} ?>
