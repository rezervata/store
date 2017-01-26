<?php /* Smarty version Smarty-3.1.18, created on 2016-12-12 18:35:03
         compiled from "./templates/locationNew.tpl" */ ?>
<?php /*%%SmartyHeaderCode:492833902584ed1b7776ef8-16130041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b1f91472f30d708cd4d8031c0d97a6a15ceb2a2' => 
    array (
      0 => './templates/locationNew.tpl',
      1 => 1481112021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '492833902584ed1b7776ef8-16130041',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_584ed1b7790237_75057316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584ed1b7790237_75057316')) {function content_584ed1b7790237_75057316($_smarty_tpl) {?><p class="aj_msg"></p>
<form name="addLocation" method="post">
<table class="regular_table_form" cellpadding="2" cellspacing="0" width="300">
<tr>
    <td>Country *</td>
    <td><input name="xCountry"></td>
</tr>
<tr>
	<td>in Europe</td>
    <td><input type="checkbox" name="chEurope" checked="checked"></td>
</tr>
<tr>
    <td>State/Province *</td>
    <td><input name="xState"></td>
</tr>
<tr>
    <td>City *</td>
    <td><input name="xCity"></td>
</tr>
<tr>
    <td>Street address *</td>
    <td><input name="xStreet"></td>
</tr>
<tr id="rowZipCode">
    <td>Zip/post code</td>
    <td><input name="xZipcode"></td>
</tr>
<tr>
    <td></td>
    <td><a href="" class="_btn" id="addLocation">Save</a></td>
</tr>
</table>
<p style="font-size:0.8em; text-align:center;">Filds with (*) are required.</p>
</form><?php }} ?>
