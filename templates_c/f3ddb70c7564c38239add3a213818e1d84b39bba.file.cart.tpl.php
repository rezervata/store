<?php /* Smarty version Smarty-3.1.18, created on 2017-02-10 17:05:28
         compiled from "./templates/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6299824589dd6b8c8d0d2-86326249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ddb70c7564c38239add3a213818e1d84b39bba' => 
    array (
      0 => './templates/cart.tpl',
      1 => 1486117376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6299824589dd6b8c8d0d2-86326249',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CART' => 0,
    'k' => 0,
    'v' => 0,
    'total' => 0,
    'LOCATIONS' => 0,
    'CART_TOTAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_589dd6b91340a8_51693720',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589dd6b91340a8_51693720')) {function content_589dd6b91340a8_51693720($_smarty_tpl) {?><div class="cart">

    <?php if (!isset($_SESSION['cart_step'])||$_SESSION['cart_step']==1) {?>
        <header class="cartSteps">
            <ul>
                <li class="currentTab">1. Your cart</li>
                <li>2. Your details</li>
                <li>3. Add Address</li>
                <li>4. Payment method</li>
                <li>5. Place order</li>
            </ul>
        </header>

        <?php if (isset($_smarty_tpl->tpl_vars['CART']->value)&&!empty($_smarty_tpl->tpl_vars['CART']->value)) {?>

            <table width="100%">
                <?php $_smarty_tpl->tpl_vars["total"] = new Smarty_variable(0, null, 0);?>

                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CART']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr>
                        <td>product id: <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</id>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
                        <td width="20"><a href="#" button type="minus" class="btn btn-default minus" data-id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
>-</a></td>
                        <td width="50"><?php echo $_smarty_tpl->tpl_vars['v']->value['qty'];?>
</td>
                        <td width="20"><a href="#" button type="plus" class="btn btn-default plus" data-id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
>+</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['sum'];?>
</td>
                        <td width="20"><a href="#" button type="del" class="btn btn-default del" data-id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
>Delete</a></td>
                    </tr>
                    <?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_smarty_tpl->tpl_vars['total']->value+$_smarty_tpl->tpl_vars['v']->value['sum'], null, 0);?>
                <?php } ?>

                <tr>
                    <td colspan=6>total</td>
                    <td><b><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</b></td>
                    <td width="20"><button type="clr" class="btn btn-default clr">Clear Cart</button></td>
                </tr>
                
            </table>

        <?php } else { ?>

            <?php echo $_smarty_tpl->getSubTemplate ('top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        <?php }?>
    </div>

    <!-- SECTIONS 2,3,4 -->

    <div class="cartNav">
        <a href="#" class="steps _btn" data-step="2">Check out</a>
    </div>

<?php } elseif (empty($_SESSION['client'])) {?>
    <header class="cartSteps">
        <ul>
            <li>1. Your cart</li>
            <li class="currentTab">2. Your details</li>
            <li>3. Add Address</li>
            <li>4. Payment method</li>
            <li>5. Place order</li>
        </ul>
    </header>

     

    <?php if (!isset($_SESSION['client']['guest'])&&!isset($_SESSION['client']['logged'])) {?>   

            <p style="padding:1.8em;">
                <a href="#" class="clLogin _btn" alt="Login" title="Client login">Login</a> &nbsp; <a href="#" class="_accCreate _btn" alt="Create account" title="Create account">Create account</a>
            </p>
            <div class="login"></div>
            <div class="acc_create"></div>
            <a href="#" class="_guestOrder" id="newGuestUser" style="margin-left:1.9em; font-size:0.9em;">Continue as guest</a>
                <div id="metro_body"></div>

                <div id="_blanketH"></div>
                
    <?php }?>            

 <div class="cartNav">
        <a href="#" class="steps _btn" data-step="1">Back to Cart</a>
    </div>



<?php } elseif ($_SESSION['cart_step']==3) {?>
    <header class="cartSteps">
        <ul>
            <li>1. Your cart</li>
            <li>2. Your details</li>
            <li class="currentTab">3. Add Address</li>
            <li>4. Payment method</li>
            <li>5. Place order</li>
        </ul>
    </header>
    
    
    
    <div class="_locationNew">
        <?php if (!empty($_SESSION['client'])) {?>    
        <a href="#" id="_newLocation" class="_btn">Add address</a>
        
        <div id="metro_body"></div>
        <div id="test"></div>
        <div id="test2"></div>
        <div id="_blanketH"></div>
    
            <table cellpadding="2" cellspacing="0" style="width:100%;">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sl'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['name'] = 'sl';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['LOCATIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sl']['total']);
?>
                <tr>
                   <tr><td>Country: <?php echo $_smarty_tpl->tpl_vars['LOCATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['country'];?>
</td> </tr>
                   <tr><td>State: <?php echo $_smarty_tpl->tpl_vars['LOCATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['state'];?>
</td></tr>
                   <tr><td>City: <?php echo $_smarty_tpl->tpl_vars['LOCATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['city'];?>
</td></tr>
                   <tr><td>Street: <?php echo $_smarty_tpl->tpl_vars['LOCATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['street'];?>
</td></tr>
                   <tr><td width="60">zip code: <?php echo $_smarty_tpl->tpl_vars['LOCATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['zip'];?>
</td></tr>
                    <tr><td width="60" style="padding-top:5px; padding-bottom:5px; text-align:left;">
                        <a href="#" class="steps _btn" data-step="4" name="shipAddr" data-id="<?php echo $_smarty_tpl->tpl_vars['LOCATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['id'];?>
" data-ship="<?php echo $_smarty_tpl->tpl_vars['LOCATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['sl']['index']]['shipping'];?>
" class="_btn">Use</a>
                    </td></tr>
                </tr>
            <?php endfor; endif; ?>
        </table>
    <?php }?>
    
    </div>
    
    

    <div class="cartNav">
        <a href="#" class="steps _btn" data-step="2" class="_btn">Back</a>
        <a href="#" class="steps _btn" data-step="1" class="_btn">Back to Cart</a>
    </div>

<?php } else { ?>
    <header class="cartSteps">
        <ul>
            <li>1. Your cart</li>
            <li>2. Your details</li>
            <li>3. Add Address</li>
            <li class="currentTab">4. Payment method</li>
            <li>5. Place order</li>
        </ul>
    </header>
    
    <table cellpadding="7" cellspacing="0" style="width:100%;">
        

        <tr>
            <td>Bank wire transfer</td>
            <td width="60"><a href="#" class="steps _btn" data-step="5" name="paymentOption" data-name="wire" class="_btn">Select</a></td>
        </tr>
        <tr>
            <td>MoneyGram</td>
            <td width="60"><a href="#" class="steps _btn" data-step="5" name="paymentOption" data-name="moneygram" class="_btn">Select</a></td>
        </tr>

    </table>
        
        <div class="cartNav">
        <a href="#" class="steps _btn" data-step="3" class="_btn">Back</a>
        <a href="#" class="steps _btn" data-step="1" class="_btn">Back to Cart</a>
    </div>



<?php }?>


<?php if ($_SESSION['cart_step']==5&&isset($_SESSION['client']['payMethod'])) {?>
    
    <p class="finalmsg"></p>
    
    <div class="finish">
        
     <header class="cartSteps">
        <ul>
            <li>1. Your cart</li>
            <li>2. Your details</li>
            <li>3. Add Address</li>
            <li>4. Payment method</li>
            <li class="currentTab">5. Place order</li>
        </ul>
    </header>


    <table cellpadding="2" cellspacing="0" border="1">
        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CART']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <tr id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
                <td width="60">&euro; <?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
                <td width="60"><?php echo $_smarty_tpl->tpl_vars['v']->value['qty'];?>
</td>
                <td width="80">&euro; <?php echo $_smarty_tpl->tpl_vars['v']->value['qty']*$_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
            </tr>
        <?php } ?>

        <tr>
            <td colspan="3" style="padding-right:16px; text-align:right;">Cart total</td>
            <td align="left">&euro; <?php echo $_smarty_tpl->tpl_vars['CART_TOTAL']->value;?>
</td>
        </tr>
        <tr>
            <td colspan="3" style="padding-right:16px; text-align:right;">Shipping tax</td>
            <td align="left">&euro; <?php echo $_SESSION['client']['shipTax'];?>
</td>
        </tr>
        <tr>
            <td colspan="3" style="padding-right:16px; text-align:right;">Total</td>
            <td align="left">&euro; <?php echo number_format(($_smarty_tpl->tpl_vars['CART_TOTAL']->value+$_SESSION['client']['shipTax']),2);?>
</td>
        </tr>
    </table>
    
<?php if ($_SESSION['client']['payMethod']=='moneygram') {?>
    <p>
        Payment with MoneyGram - Please, provide the payment code for verification.<br><br>
        name: <strong>DIMITAR ASENOV KORUDZHIEV</strong><br>
        city: <strong>SOFIA</strong><br>
        country: <strong>BULGARIA</strong>
    </p>
    <p><a href="#" class="payNow _btn" data-name="moneygram">Order Now</a></p>
<?php } else { ?>
    <p>
        Payment with Bank wire Transfer<br><br>
        BIC/SWIFT: <strong>FINVBGSF</strong><br>
        IBAN: <strong>BG82FINV91501015882657</strong><br>
        CARD HOLDER: <strong>DIMITAR KORUDZHIEV</strong><br>
        <br>
        BANK: First Investment Bank AD<br>
        ADDRESS: 37, Dragan Tsankov Blvd.<br>
        CITY: 1797 Sofia<br>
        COUNTRY: Bulgaria
    </p>
    <p><a href="#" class="payNow _btn" data-name="wire">Order Now</a></p>
<?php }?>
</div>

<div class="cartNav">
    <a hhref="#" class="steps _btn" data-step="4" class="_btn">Back</a>
    <a href="#" class="steps _btn" data-step="1" class="_btn">Back to Cart</a>
</div>


<?php }?>


<!-- END SECTIONS 2,3,4 -->
<?php }} ?>
