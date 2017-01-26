<?php /* Smarty version Smarty-3.1.18, created on 2017-01-24 18:16:44
         compiled from "./templates/admAnOrder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13840693155883488561cfe2-91617481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93058be0976915077bdbafff1ced5295557d319' => 
    array (
      0 => './templates/admAnOrder.tpl',
      1 => 1485274581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13840693155883488561cfe2-91617481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5883488588fa81_99298252',
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5883488588fa81_99298252')) {function content_5883488588fa81_99298252($_smarty_tpl) {?><p class="aj_msg"><?php if (empty($_smarty_tpl->tpl_vars['DATA']->value)) {?>Cannot find order<?php }?></p>
<p style="font-size:1.35em;">
	Order details #<?php echo $_smarty_tpl->tpl_vars['DATA']->value['id'];?>
 - <?php echo ordStat($_smarty_tpl->tpl_vars['DATA']->value['o_status']);?>

</p>
<div class="orderData" style="position:relative; text-align:left;">
    <div style="float:left; width:20%">
    	<label>First name</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['fname'];?>

        
        <label>Last name</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['lname'];?>

        
        <label>e-mail</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['email'];?>

        
        <label>Phone</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['phone'];?>

    </div>
    <div style="float:left; width:20%">
    	<label>Country</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['country'];?>

        
        <label>State</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['state'];?>

        
        <label>City</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['city'];?>

        
        <label>Street address</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['street'];?>

        
        <label>zip/post code</label>
    	<?php if ($_smarty_tpl->tpl_vars['DATA']->value['zip']) {?><?php echo $_smarty_tpl->tpl_vars['DATA']->value['zip'];?>
<?php } else { ?>-<?php }?>
    </div>
    <div style="float:left; width:15%;">
    	<label>Order no.</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['id'];?>

        
        <label>Subtotal</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['subtotal'];?>

        
        <label>Shipping tax</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['ship_price'];?>

        
        <label>Total</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['total'];?>

        
        <label>Payment method</label>
    	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['pay_method'];?>

    </div>
    <div style="float:left; width:30%;">
    	<table class="ordCartTable" cellpadding="2" cellspacing="0">
        <tr>
        	<th>name</th>
            <th width="40">qty</th>
            <th width="80">price</th>
        </tr>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['si'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['si']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['name'] = 'si';
$_smarty_tpl->tpl_vars['smarty']->value['section']['si']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['DATA']->value['cart']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
		<tr>
        	<td><?php echo stripslashes($_smarty_tpl->tpl_vars['DATA']->value['cart'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['name']);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['DATA']->value['cart'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['qty'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['DATA']->value['cart'][$_smarty_tpl->getVariable('smarty')->value['section']['si']['index']]['price'];?>
</td>
        </tr>
<?php endfor; endif; ?>
        </table>
    </div>
    <div style="float:left; width:15%;">
    	<?php if (isset($_SESSION['a_login'])) {?>
        	<label>Shipment code</label>
        	<input name="shipCode" style="border:#39F 1px solid; width:98%;" value="<?php echo $_smarty_tpl->tpl_vars['DATA']->value['ship_code'];?>
">
            
            <label>notes</label>
            <textarea name="xNotes" style="width:98%; height:110px;"><?php echo $_smarty_tpl->tpl_vars['DATA']->value['notes'];?>
</textarea>
        <?php } else { ?>
        	<label>Shipment code</label>
        	<?php echo $_smarty_tpl->tpl_vars['DATA']->value['ship_code'];?>

            <label>notes</label>
            <?php echo $_smarty_tpl->tpl_vars['DATA']->value['notes'];?>

        <?php }?>
    </div>
    
    <div class="clearfix"></div>
	<?php if (isset($_SESSION['admin']['logged'])) {?>
    <p class="orderOper" style="text-align:center; padding-top:1em;">
    	<span class="_btn" data-rel="9" data-id="<?php echo $_smarty_tpl->tpl_vars['DATA']->value['id'];?>
">Cancel order</span>
        <span class="_btn" data-rel="2" data-id="<?php echo $_smarty_tpl->tpl_vars['DATA']->value['id'];?>
">Verify</span>
        <span class="_btn" data-rel="3" data-id="<?php echo $_smarty_tpl->tpl_vars['DATA']->value['id'];?>
">Dispatch</span>
    </p>
    <?php }?>
</div><?php }} ?>
