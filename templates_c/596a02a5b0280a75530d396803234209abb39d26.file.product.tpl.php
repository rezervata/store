<?php /* Smarty version Smarty-3.1.18, created on 2017-01-27 18:24:21
         compiled from "./templates/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1359697475588a00b6b0b375-35811020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '596a02a5b0280a75530d396803234209abb39d26' => 
    array (
      0 => './templates/product.tpl',
      1 => 1485534259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1359697475588a00b6b0b375-35811020',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588a00b6bd4503_01078638',
  'variables' => 
  array (
    'CATEGORIES' => 0,
    'PRODUCT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588a00b6bd4503_01078638')) {function content_588a00b6bd4503_01078638($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value)) {?>

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
 лв.</label>

            <a href="#" class="btn btn-default toCart" role="button" data-id="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value[0]['id'];?>
">Add to Cart</a>

         <p><?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value[0]['data']);?>
</p>
</div>
<?php } else { ?>

    No such product!!!

<?php }?>
<?php }} ?>
