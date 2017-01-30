<?php /* Smarty version Smarty-3.1.18, created on 2017-01-30 18:08:03
         compiled from "./templates/itemEdit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1831950286588f384a11fbe9-47465207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b9963b392d06799d069aa3575f83a12e04a9e06' => 
    array (
      0 => './templates/itemEdit.tpl',
      1 => 1485792434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1831950286588f384a11fbe9-47465207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588f384a2fb2a2_68645529',
  'variables' => 
  array (
    'PRODUCT' => 0,
    'ALLCATS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588f384a2fb2a2_68645529')) {function content_588f384a2fb2a2_68645529($_smarty_tpl) {?>
<p class="aj_msg"></p>
<form method="post" id="editItem" action="async.php?do=editItem" enctype="multipart/form-data">
	<div class="regular_table_form" style="width:700px; text-align:left; position:relative; margin:0 auto;">
    	<div style="width:300px; float:left;">
        	<input type="hidden" name="itemId" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['id'];?>
">
		    <input type="hidden" name="hItemImage" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['image'];?>
">
        
        	<label>Name</label>
            <input name="itemName" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value['name']));?>
">
            
            <label>Make</label>
            <input name="itemMake" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value['make']));?>
">
            
            <label>Category</label>
            <select name="itemCatId">
                <option value="0">--Select--</option>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ss'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['name'] = 'ss';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ALLCATS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ss']['total']);
?>
        <div><?php echo $_smarty_tpl->tpl_vars['ALLCATS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ss']['index']]['name'];?>
</div>
        
        <?php if (isset($_smarty_tpl->tpl_vars['ALLCATS']->value[$_smarty_tpl->getVariable('smarty',null,true,false)->value['section']['ss']['index']]['sub'])) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ssb'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['name'] = 'ssb';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ALLCATS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ss']['index']]['sub']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ssb']['total']);
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['ALLCATS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ss']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['ssb']['index']]['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['ALLCATS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ss']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['ssb']['index']]['id']==$_smarty_tpl->tpl_vars['PRODUCT']->value['cat']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['ALLCATS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ss']['index']]['name'];?>
 / <?php echo $_smarty_tpl->tpl_vars['ALLCATS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ss']['index']]['sub'][$_smarty_tpl->getVariable('smarty')->value['section']['ssb']['index']]['name'];?>
</option>
        <?php endfor; endif; ?>
        <?php }?>
<?php endfor; endif; ?>
            </select>
            
            <label>Meta keywords</label>
            <input name="itemMKey" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value['mkeys']));?>
">
            
            <label>Meta description</label>
            <input name="itemDesc" value="<?php echo htmlspecialchars(stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value['mdesc']));?>
">
            
            <label>price</label>
            <input name="itemPrice" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price'];?>
">
            
            <label>hidden</label>
            <input type="checkbox" name="itemStatus"<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['hidden']==1) {?> checked="checked"<?php }?>>
        </div>
        
        <div style="width:400px; float:left;">
        	<label>Image <img src="/img/t<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['image'];?>
.jpg"></label>
            <input type="file" name="fIMG">
            
            <label>Description</label>
            <textarea name="itemData"><?php echo stripslashes($_smarty_tpl->tpl_vars['PRODUCT']->value['data']);?>
</textarea>
        </div>
        <div class="clearfix"></div>
        
        <p style="text-align:center"><input type="submit" id="_saveEditItem" class="_btn">Save</input></p>
    </div>


</form><?php }} ?>
