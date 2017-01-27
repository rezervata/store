<?php /* Smarty version Smarty-3.1.18, created on 2017-01-27 18:40:44
         compiled from "./templates/bannersAdm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238683014588b77bee60509-17278727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3738638463fba6736e5447bcb8a9bf896a8a6129' => 
    array (
      0 => './templates/bannersAdm.tpl',
      1 => 1485535210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238683014588b77bee60509-17278727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588b77bf03ec26_94254181',
  'variables' => 
  array (
    'BANNERS' => 0,
    'NODE' => 0,
    'KK' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588b77bf03ec26_94254181')) {function content_588b77bf03ec26_94254181($_smarty_tpl) {?><p class="aj_msg"><?php if (empty($_smarty_tpl->tpl_vars['BANNERS']->value)) {?>You do not have any banners yet.<?php }?></p>
<?php  $_smarty_tpl->tpl_vars['NODE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NODE']->_loop = false;
 $_smarty_tpl->tpl_vars['KK'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BANNERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NODE']->key => $_smarty_tpl->tpl_vars['NODE']->value) {
$_smarty_tpl->tpl_vars['NODE']->_loop = true;
 $_smarty_tpl->tpl_vars['KK']->value = $_smarty_tpl->tpl_vars['NODE']->key;
?>
<div style="position:relative; border-bottom:#ccc 1px solid;">
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
	<img src="/img/t<?php echo $_smarty_tpl->tpl_vars['NODE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['image'];?>
.jpg" style="float:left; width:60px; height:auto; border:#fff 2px solid; margin:8px; box-shadow:0 0 5px #888;" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['NODE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['name']);?>
 - <?php echo $_smarty_tpl->tpl_vars['NODE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['price'];?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['NODE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['name']);?>
 - <?php echo $_smarty_tpl->tpl_vars['NODE']->value[$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['price'];?>
">

<?php endfor; endif; ?>
	<div style="clear:both; padding:10px;">
    	<span class="_btn bDelBanner" data-grp="<?php echo $_smarty_tpl->tpl_vars['KK']->value;?>
">delete banner</span>
    </div>
</div>
<?php } ?><?php }} ?>
