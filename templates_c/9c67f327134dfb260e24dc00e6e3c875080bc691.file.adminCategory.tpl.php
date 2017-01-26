<?php /* Smarty version Smarty-3.1.18, created on 2017-01-26 15:11:21
         compiled from "./templates/adminCategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192202116258835056d74833-94874279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c67f327134dfb260e24dc00e6e3c875080bc691' => 
    array (
      0 => './templates/adminCategory.tpl',
      1 => 1485391049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192202116258835056d74833-94874279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588350570c2719_50413468',
  'variables' => 
  array (
    'rsCategories' => 0,
    'rsMainCategories' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588350570c2719_50413468')) {function content_588350570c2719_50413468($_smarty_tpl) {?>

<div id="blockNewCategory">
    Нова категория
    <input name="newCategoryName" id="newCategoryName" type="text" value=""/>
    <br/>

    Подкатегория на
    <select name="generalCatId" style=" width:300px">
        <option value="0">
            Главна категория
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

            <option value="<?php echo $_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['id'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['name']);?>
 </option>
        <?php endfor; endif; ?>

    </select>
    <br/>
    <br/>
    <input class="newCat" type="button"  value="Нова категория"/>
</div>

<br/>
<hr/>
<br/>
    <h2>Категории</h2>
    <table  border="1" cellpadding="1" cellspasing="1">
        <tr>
            <th>N:</th>
            <th>ID</th>
            <th>Име</th>
            <th>Родителска категория</th>
            <th>Действие</th>
        </tr>
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
            <tr id="blockUpdateCat">
                <td><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['kk']['iteration'];?>
</td>
                <td>
                    <input name="id" value=" <?php echo $_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['id'];?>
"/>
               </td>
                <td>
                    <input type="edit"  id="itemName_<?php echo $_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['id'];?>
" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['name']);?>
"/>
                </td>
                <td>
                    <select name="parentId" id="parentId" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['name']);?>
">
                        <option value="0"/>
                    
                    
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['mk'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['mk']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['name'] = 'mk';
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['rsMainCategories']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['mk']['total']);
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['rsMainCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mk']['index']]['id'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rsCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['kk']['index']]['parent'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['rsMainCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mk']['index']]['id'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1==$_tmp2) {?> selected<?php }?>/>
                                <?php echo stripslashes($_smarty_tpl->tpl_vars['rsMainCategories']->value[$_smarty_tpl->getVariable('smarty')->value['section']['mk']['index']]['name']);?>

                            
                        
                            <?php endfor; endif; ?>

                    </select>
                </td>
                <td>
                    <input class="updateCat" type="button" value="Запамети"/>
                </td>
            </tr>
            <?php endfor; endif; ?>
    
    </table><?php }} ?>
