<?php /* Smarty version Smarty-3.1.18, created on 2016-09-07 15:38:58
         compiled from ".\templates\top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:824057cff42b374533-45907675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b648a63498e5dc36aac3ed77201fdb5c3993c5f' => 
    array (
      0 => '.\\templates\\top.tpl',
      1 => 1473255535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '824057cff42b374533-45907675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_57cff42b386586_84512718',
  'variables' => 
  array (
    'TOPPRODUCT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cff42b386586_84512718')) {function content_57cff42b386586_84512718($_smarty_tpl) {?><!-- Content -->

<div class="row">
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['prod'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['name'] = 'prod';
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['TOPPRODUCT']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['prod']['total']);
?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="../img/apple.png"> 
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p><?php echo stripslashes($_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['name']);?>
</p>
                    <p>
                        <a href="product/<?php echo $_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['url'];?>
" class="btn btn-primary" role="button"><?php echo stripslashes($_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['name']);?>
</a>
                        <label><?php echo $_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['price'];?>
 лв.</label>
                        <a href="#" class="btn btn-default" role="button"><?php echo $_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['price'];?>
 лв.</a>
                    </p>
                </div>
            </div>
        </div>
    <?php endfor; endif; ?>
</div>

<!-- /#content-wrapper -->
<?php }} ?>
