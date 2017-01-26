<?php /* Smarty version Smarty-3.1.18, created on 2016-12-10 17:11:31
         compiled from "./templates/userGuestData.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268441166584c1b23927b48-27492632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba2ec2b9eff461a17b89946f5f4143c944a63bc9' => 
    array (
      0 => './templates/userGuestData.tpl',
      1 => 1481112021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268441166584c1b23927b48-27492632',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584c1b2393f242_75165889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584c1b2393f242_75165889')) {function content_584c1b2393f242_75165889($_smarty_tpl) {?><p class="aj_msg"></p>
<form name="guestUserData" method="post">

<div class="regular_table_form" style="position:relative; width:400px; margin: 0 auto; text-align:left;">
	<div style="float:left; width:50%">
    	<label>First name *</label>
        <input name="xFName">
        
        <label>Last name *</label>
        <input name="xLName">
        
        <label>E-mail Address *</label>
        <input name="xEmail">
        
        <label>Phone number *</label>
        <input name="xPhone">
    </div>
    
    <div style="float:left; width:50%">
    	<label>Country *</label>
        <input name="xCountry">
        
        <label>in Europe *</label>
        <input type="checkbox" name="chEurope" checked="checked">
        
        <label>State/Province *</label>
        <input name="xState">
        
        <label>City *</label>
        <input name="xCity">
        
        <label>Address *</label>
        <input name="xAddress">
        
        <label>Zip/post Code</label>
        <input name="xZipCode">
    </div>
    
    <div class="clearfix"></div>
  
  <td width="20"><button id="newGuestUser" type="save" class="btn btn-default save">Save</button></td>
    <p style="font-size:0.8em; text-align:center;">Filds with (*) are required.</p>
</div>


</form>
<?php }} ?>
