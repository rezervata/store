<?php /* Smarty version Smarty-3.1.18, created on 2017-01-21 13:38:31
         compiled from "./templates/myOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20093821215852c9280d4d77-68226603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb165490ad70accb3af7c769d3e53f84412943cd' => 
    array (
      0 => './templates/myOrders.tpl',
      1 => 1484998681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20093821215852c9280d4d77-68226603',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5852c9281abc19_46558587',
  'variables' => 
  array (
    'ORDERS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852c9281abc19_46558587')) {function content_5852c9281abc19_46558587($_smarty_tpl) {?>
<section class="midContainer">
<?php if (isset($_SESSION['client']['logged'])) {?>
<?php if ($_smarty_tpl->tpl_vars['ORDERS']->value) {?>
<table class="tblOrders" cellpadding="2" cellspacing="0">
<tr>
	<th width="50">No.</th>
    <th width="140">From(date)</th>
    <th width="80">Value(&euro;)</th>
    <th>Payment method</th>
    <th width="60">Status</th>
</tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['so'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['so']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['name'] = 'so';
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ORDERS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['so']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['so']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['so']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['so']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['so']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['so']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['so']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['so']['total']);
?>
<tr oid="<?php echo $_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['id'];?>
" class="ORD<?php echo ordStat($_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['status']);?>
">
	<td><?php echo $_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['id'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['input'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['all_tax'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['pay_method'];?>
</td>
    <td><?php echo ordStat($_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['status']);?>
</td>
</tr>
<div id="orderData"></div>
<?php endfor; endif; ?>
</table>
<?php } else { ?>
<p>
	You do not have any orders yet.
</p>
<?php }?>

<?php } else { ?>
<p>
	Please, log in to see your orders.
</p>
<?php }?>
</section><?php }} ?>
