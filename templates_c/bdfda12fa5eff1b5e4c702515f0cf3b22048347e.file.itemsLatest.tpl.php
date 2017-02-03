<?php /* Smarty version Smarty-3.1.18, created on 2017-02-03 13:39:14
         compiled from "./templates/itemsLatest.tpl" */ ?>
<?php /*%%SmartyHeaderCode:221788514588f3842c12b42-29721377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdfda12fa5eff1b5e4c702515f0cf3b22048347e' => 
    array (
      0 => './templates/itemsLatest.tpl',
      1 => 1486117376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221788514588f3842c12b42-29721377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588f3842ce5693_47270567',
  'variables' => 
  array (
    'LAST5' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588f3842ce5693_47270567')) {function content_588f3842ce5693_47270567($_smarty_tpl) {?>	<div class="sidePanTitle">most recent products</div>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['li'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['li']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['name'] = 'li';
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LAST5']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['li']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['li']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['li']['total']);
?>
    <a class="lastetItem" href="/product/<?php echo stripslashes($_smarty_tpl->tpl_vars['LAST5']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['name']);?>
" alt="<?php echo $_smarty_tpl->tpl_vars['LAST5']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LAST5']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['name'];?>
">
    <link href="http://medicine-speed.com/product/<?php echo toSEO(stripslashes(htmlentities($_smarty_tpl->tpl_vars['LAST5']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['name'])));?>
" rel="canonical">
    <div class="liItem<?php if ($_smarty_tpl->getVariable('smarty')->value['section']['li']['last']) {?> liLast<?php }?>">
    	<div class="liName"><?php echo stripslashes($_smarty_tpl->tpl_vars['LAST5']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['name']);?>
</div>
        <div class="liText">
        	
            <img src="/img/t<?php echo $_smarty_tpl->tpl_vars['LAST5']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['image'];?>
.jpg" style="width:30%; float:left; margin-right:4px;">
        	<?php echo stripslashes($_smarty_tpl->tpl_vars['LAST5']->value[$_smarty_tpl->getVariable('smarty')->value['section']['li']['index']]['data']);?>
...
            <div class="clearfix"></div>
        	<span>View more...</span>
        </div>
    </div>
    </a>
<?php endfor; endif; ?><?php }} ?>
