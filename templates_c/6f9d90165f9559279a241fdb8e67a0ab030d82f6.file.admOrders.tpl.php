<?php /* Smarty version Smarty-3.1.18, created on 2017-02-05 16:00:53
         compiled from "./templates/admOrders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19639734225897301574aaf4-38916153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9d90165f9559279a241fdb8e67a0ab030d82f6' => 
    array (
      0 => './templates/admOrders.tpl',
      1 => 1486117376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19639734225897301574aaf4-38916153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ORDERS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5897301598fb45_23733276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5897301598fb45_23733276')) {function content_5897301598fb45_23733276($_smarty_tpl) {?><section class="midContainer">
<form id="orderSearchForm" method="post" action="admOrders/">

No.<input name="id" value="<?php if (isset($_POST['id'])) {?><?php echo $_POST['id'];?>
<?php }?>" style="width:30px;">
From:<input name="from" value="<?php if (isset($_POST['from'])) {?><?php echo $_POST['from'];?>
<?php }?>" style="width:80px;">
To:<input name="to" value="<?php if (isset($_POST['to'])) {?><?php echo $_POST['to'];?>
<?php }?>" style="width:80px;">
E-mail:<input name="email" value="<?php if (isset($_POST['email'])) {?><?php echo $_POST['email'];?>
<?php }?>" style="width:100px;">
<input class="_btn" type="submit" value="find">
</form>
<table class="tblOrders" cellpadding="2" cellspacing="0" width="100%">
<thead>
<tr>
	<th width="60">No.</th>
    <th>Name</th>
    <th>Total</th>
    <th>From</th>
    <th>Status</th>
</tr>
</thead>

<tbody>
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
    <td><?php echo $_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['lname'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['sum'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['input'];?>
</td>
    <td><?php echo ordStat($_smarty_tpl->tpl_vars['ORDERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['so']['index']]['status']);?>
</td>
</tr>
<?php endfor; endif; ?>
</tbody>

</table>
<div id="orderData"></div>
</section><?php }} ?>
