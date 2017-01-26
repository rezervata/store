<?php /* Smarty version Smarty-3.1.18, created on 2017-01-26 15:59:18
         compiled from "./templates/banners.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1804062976588a00b6be96d3-08680618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73131597419e19ef6f29eb5f9b319765153ef61f' => 
    array (
      0 => './templates/banners.tpl',
      1 => 1485438097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1804062976588a00b6be96d3-08680618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BANNERS' => 0,
    'NODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588a00b6c693b2_78157462',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588a00b6c693b2_78157462')) {function content_588a00b6c693b2_78157462($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['NODE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NODE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BANNERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NODE']->key => $_smarty_tpl->tpl_vars['NODE']->value) {
$_smarty_tpl->tpl_vars['NODE']->_loop = true;
?>

<div>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['si'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['si']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['name'] = 'si';
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NODE']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['si']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['si']['total']);
?>
    <div class="svNode" style="position:absolute; height:140px; width:100%; background:url(img/<?php echo $_smarty_tpl->tpl_vars['NODE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['image'];?>
.jpg) center; background-size:140%; white-space: nowrap;">
    	<a href="product/<?php echo stripslashes($_smarty_tpl->tpl_vars['NODE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['name']);?>
">
        <p style="opacity:0; color:#fff; text-shadow:#000 1px 1px 3px;"><?php echo stripslashes($_smarty_tpl->tpl_vars['NODE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['name']);?>
<br>
        <span style="font-size:1.6em;">now for: &euro; <?php echo $_smarty_tpl->tpl_vars['NODE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['price'];?>
</span></p>
        </a>
    </div>
<?php endfor; endif; ?>


</div>
<?php } ?><?php }} ?>
