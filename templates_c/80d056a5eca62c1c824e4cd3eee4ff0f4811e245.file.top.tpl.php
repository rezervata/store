<?php /* Smarty version Smarty-3.1.18, created on 2017-01-26 16:02:34
         compiled from "./templates/top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1811429708588a017aab2626-03046440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80d056a5eca62c1c824e4cd3eee4ff0f4811e245' => 
    array (
      0 => './templates/top.tpl',
      1 => 1485439034,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1811429708588a017aab2626-03046440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TOPPRODUCT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588a017ab58604_54464479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588a017ab58604_54464479')) {function content_588a017ab58604_54464479($_smarty_tpl) {?><!-- Content -->

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
        <div class="col-sm-6 col-md-4" style="
    width: 200px;
    height: 300px;
">
            <div class="thumbnail" style="
        width: 195px;
        height: 295px;
    ">
                <a href="product/<?php echo stripslashes($_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['name']);?>
">
                <img src="../img/m<?php echo $_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['image'];?>
.jpg" style="height:100px; width:100px;" class="btn btn-primary" role="button">     
              </a>
                <div class="caption">
                    <h3><?php echo stripslashes($_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['name']);?>
</h3>

                    <p>
        
                        <label><?php echo $_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['price'];?>
 лв.</label>
                        <a href="#" class="btn btn-primary toCart" style="position:absolute; bottom:10px; right:5px;" role="button" data-id="<?php echo $_smarty_tpl->tpl_vars['TOPPRODUCT']->value[$_smarty_tpl->getVariable('smarty')->value['section']['prod']['index']]['id'];?>
">Add to Cart</a>

                    </p>
                </div>
            </div>
        </div>
    <?php endfor; endif; ?>
</div>

<!-- /#content-wrapper -->
<?php }} ?>
