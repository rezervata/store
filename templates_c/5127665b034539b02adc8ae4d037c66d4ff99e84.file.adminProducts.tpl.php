<?php /* Smarty version Smarty-3.1.18, created on 2017-02-05 17:37:52
         compiled from "./templates/adminProducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:460211723589746d06c9ab4-25365487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5127665b034539b02adc8ae4d037c66d4ff99e84' => 
    array (
      0 => './templates/adminProducts.tpl',
      1 => 1486305583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '460211723589746d06c9ab4-25365487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rsCategories' => 0,
    'rsProducts' => 0,
    'PAGES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_589746d0a450c9_27828257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589746d0a450c9_27828257')) {function content_589746d0a450c9_27828257($_smarty_tpl) {?>

<h2 > Products </h2 >
<div id = "blockNewProduct" >
    <table border = "1"cellpadding = "1"cellspacing = "1" >  
        <caption > Add new products </caption >
        <tr >  
            <th > Name </th >
            <th > Price </th >  
            <th > Category </th >
            <th > Manufacturer </th >
            <th > Mkey </th > 
            <th > Mdes </th >
            <th > Description </th >
            <th > Save </th >
        </tr >
        <tr > 
            <td > 
                <input type = "edit"id = "newItemName"name = "newItemName"value = ""/> 
            </td >
            <td >
                <input type = "edit"id = "newItemPrice"name = "newItemPrice"value = ""/>
            </td >
            <td >
                <select id = "newItemCatId"name = "newItemCatId" >
                    <option value = "0"> Main category </option >
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['name'] = 'kk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rsCategories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total']);
?> 
                        <option value = "<?php echo $_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['id'];?>
">
                            <?php echo stripslashes($_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['name']);?>

                        </option > 
                    <?php endfor; endif; ?>
                </select >
            </td >  
            <td >
                <select id = "newItemMake"name = "newItemMake" >
                    <option value = "0" > New manufacturer </option >
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['prod'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['name'] = 'prod';
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rsProducts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total']);
?>
                            <option value = "<?php echo stripslashes($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['make']);?>
" >  <?php echo stripslashes($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['make']);?>
 </option > 
                        <?php endfor; endif; ?>
                </select > 
            </td >
            <td >
                <textarea id = "newItemMkey"name = "newItemMkey" ></textarea >
            </td >
            <td >
                <textarea id = "newItemDesc"name = "newItemDesc" ></textarea >
            </td >
            <td >
                <textarea id = "newItemData"name = "newItemData" ></textarea >
            </td >
            <td >
                <input class = "newProduct"type = "button"value = "Save"/>
            </td >
        </tr >    
    </table >
</div >

<div>
    <table border = "1"cellpadding = "1"cellspacing = "1" >
        <tr >
            <th > N: </th >
            <th > ID </th >
            <th > Name </th >
            <th > Price </th >
            <th > Category </th >
            <th > Manufacturer </th >
            <th > Mkey </th >
            <th > Mdes </th >
            <th > Description </th >
            <th > Deleted </th >
            <th > Image </th >
            <th > Save </th >
        </tr >
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pr'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pr']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['name'] = 'pr';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rsProducts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pr']['total']);
?> 
            <tr id="blockUpdateProduct">
                <td >
                    <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['pr']['iteration'];?>

                </td >
                <td >
                    <?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>

                </td > 
                <td >
                    <input type = "edit"id = "itemName_<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>
"value = "<?php echo stripslashes($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['name']);?>
"/>
                </td >
                <td >
                    <input type = "edit"id = "itemPrice_<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>
"value = "<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['price'];?>
"/>
                </td >
                <td >
                    <select id = "itemCatId_<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>
" >
                        <option value = "0" > Main category </option >
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['name'] = 'kk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rsCategories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['kk']['total']);
?>
                                <option value = "<?php echo $_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['id'];?>
" >
                                    <?php echo stripslashes($_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['name']);?>

                                </option > 
                            <?php endfor; endif; ?>
                    </select >
                </td >
                <td >
                    <select id = "newItemMake_<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>
" > 
                        <option value = "0" > New manufacturer </option >  
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['prod'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['name'] = 'prod';
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rsProducts']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total']);
?>
                                <option value = "<?php echo stripslashes($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['make']);?>
" >
                                    <?php echo stripslashes($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['make']);?>
 
                                </option >
                            <?php endfor; endif; ?> 
                    </select >
                </td >
                <td >
                    <textarea id = "newItemMkey_<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>
" >
                        <?php echo stripslashes($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['mkeys']);?>

                    </textarea >
                </td >
                <td >
                    <textarea id = "newItemData_<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>
" >
                        <?php echo stripslashes($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['data']);?>

                    </textarea >
                </td > 
                <td >
                    <textarea id = "itemDesc_<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>
" >
                        <?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['mdesc'];?>
 
                    </textarea >
                </td >
                <td > 
                    <suap >&nbsp;&nbsp;&nbsp;&nbsp;</suap >
                    <input type = "checkbox"id = "newItemStatus_<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>
" 
                        <?php if ($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['hidden']!==0) {?>
                            checked 
                        <?php }?>
                    />
                </td >
                <td >
                    <?php if ($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['image']) {?>
                        <img src = "../img/m<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['image'];?>
.jpg"class = "product_image"width = "100"/>
                    <?php }?>
                    <form action = "async.php?do=newItemImage"method = "POST"enctype = "multipart/form-data" >
                        <input type = "file"name = "nameImg[]"multiple = ""value = "<?php echo stripslashes($_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['name']);?>
"/>
                        <br/>
                        <input type = "hidden"name = "itemId"value = "<?php echo $_smarty_tpl->tpl_vars['rsProducts']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pr']['index']]['id'];?>
"/>
                        <br/>
                        <input type = "submit"value = "Upload"/>
                        <br/>
                    </form >
                </td >
                <td >
                    <input class="updateProduct" type = "button"value = "Save"/>
                </td >
            </tr >
            
        <?php endfor; endif; ?>


     </table >
 </div >

 
        
	<p style="text-align:center; margin:0; padding:1em; background-color:red">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['name'] = 'sp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PAGES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total']);
?>
	<?php if (isset($_GET['page'])) {?>
		<a href="admin-products/<?php echo $_GET['page'];?>
/page/<?php echo $_smarty_tpl->tpl_vars['PAGES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sp']['index']];?>
" class="btn " alt="page <?php echo $_smarty_tpl->tpl_vars['PAGES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sp']['index']];?>
" title="page <?php echo $_smarty_tpl->tpl_vars['PAGES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sp']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['PAGES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sp']['index']];?>
</a>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            ...
        </ul>
    </nav>
    
    
    <?php }?>
<?php endfor; endif; ?>
	</p><?php }} ?>
