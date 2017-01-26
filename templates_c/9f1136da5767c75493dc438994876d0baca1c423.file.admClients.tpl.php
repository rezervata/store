<?php /* Smarty version Smarty-3.1.18, created on 2017-01-26 15:11:11
         compiled from "./templates/admClients.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60889873758875d654a7df3-27513191%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f1136da5767c75493dc438994876d0baca1c423' => 
    array (
      0 => './templates/admClients.tpl',
      1 => 1485391049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60889873758875d654a7df3-27513191',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58875d655a89c9_51150255',
  'variables' => 
  array (
    'CLIENTS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58875d655a89c9_51150255')) {function content_58875d655a89c9_51150255($_smarty_tpl) {?><section class="midContainer">
<form id="orderSearchForm" method="post" action="admClients/">
Name:<input name="fname" value="<?php if (isset($_POST['fname'])) {?><?php echo $_POST['fname'];?>
<?php }?>" style="width:80px;">
Family:<input name="lname" value="<?php if (isset($_POST['lname'])) {?><?php echo $_POST['lname'];?>
<?php }?>" style="width:80px;">
E-mail:<input name="email" value="<?php if (isset($_POST['email'])) {?><?php echo $_POST['email'];?>
<?php }?>" style="width:100px;">
<input class="_btn" type="submit" value="find">
</form>
<table class="tblClients" cellpadding="2" cellspacing="0" width="100%">
<thead>
<tr>
    <th>Name(email)</th>
    <th>Phone</th>
    <th>Registered</th>
    <th>Status</th>
</tr>
</thead>

<tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sc'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['name'] = 'sc';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CLIENTS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sc']['total']);
?>
<tr class="cRow" cid="<?php echo $_smarty_tpl->tpl_vars['CLIENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['id'];?>
" style="cursor:pointer;">
    <td><?php echo $_smarty_tpl->tpl_vars['CLIENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['fname'];?>
 <?php echo $_smarty_tpl->tpl_vars['CLIENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['lname'];?>
 (<?php echo $_smarty_tpl->tpl_vars['CLIENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['email'];?>
)</td>
    <td><?php echo $_smarty_tpl->tpl_vars['CLIENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['phone'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['CLIENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['input'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['CLIENTS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sc']['index']]['status'];?>
</td>
</tr>
<?php endfor; endif; ?>
</tbody>

</table>
</section><?php }} ?>
