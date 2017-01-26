<div class="cart">

    {if !isset($smarty.session.cart_step) || $smarty.session.cart_step == 1}
        <header class="cartSteps">
            <ul>
                <li class="currentTab">1. Your cart</li>
                <li>2. Your details</li>
                <li>3. Add Address</li>
                <li>4. Payment method</li>
                <li>5. Place order</li>
            </ul>
        </header>

        {if isset($CART) && !empty($CART)}

            <table width="100%">
                {assign var="total" value=0}

                {foreach from=$CART key=k item=v }
                    <tr>
                        <td>product id: {$k}</id>
                        <td>{$v.name}</td>
                        <td>{$v.price}</td>
                        <td width="20"><a href="#" button type="minus" class="btn btn-default minus" data-id={$v.id}>-</a></td>
                        <td width="50">{$v.qty}</td>
                        <td width="20"><a href="#" button type="plus" class="btn btn-default plus" data-id={$v.id}>+</a></td>
                        <td>{$v.sum}</td>
                        <td width="20"><a href="#" button type="del" class="btn btn-default del" data-id={$v.id}>Delete</a></td>
                    </tr>
                    {$total = $total + $v.sum}
                {/foreach}

                <tr>
                    <td colspan=6>total</td>
                    <td><b>{$total}</b></td>
                    <td width="20"><button type="clr" class="btn btn-default clr">Clear Cart</button></td>
                </tr>
                
            </table>

        {else}

            {include file='top.tpl'}

        {/if}
    </div>

    <!-- SECTIONS 2,3,4 -->

    <div class="cartNav">
        <a href="#" class="steps _btn" data-step="2">Check out</a>
    </div>

{elseif empty($smarty.session.client)}
    <header class="cartSteps">
        <ul>
            <li>1. Your cart</li>
            <li class="currentTab">2. Your details</li>
            <li>3. Add Address</li>
            <li>4. Payment method</li>
            <li>5. Place order</li>
        </ul>
    </header>

     

    {if !isset($smarty.session.client.guest) && !isset($smarty.session.client.logged)}   

            <p style="padding:1.8em;">
                <a href="#" class="clLogin _btn" alt="Login" title="Client login">Login</a> &nbsp; <a href="#" class="_accCreate _btn" alt="Create account" title="Create account">Create account</a>
            </p>
            <div class="login"></div>
            <div class="acc_create"></div>
            <a href="#" class="_guestOrder" id="newGuestUser" style="margin-left:1.9em; font-size:0.9em;">Continue as guest</a>
                <div id="metro_body"></div>

                <div id="_blanketH"></div>
                
    {/if}            

 <div class="cartNav">
        <a href="#" class="steps _btn" data-step="1">Back to Cart</a>
    </div>



{elseif $smarty.session.cart_step == 3}
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
        {if !empty($smarty.session.client)}    
        <a href="#" id="_newLocation" class="_btn">Add address</a>
        
        <div id="metro_body"></div>
        <div id="test"></div>
        <div id="test2"></div>
        <div id="_blanketH"></div>
    
            <table cellpadding="2" cellspacing="0" style="width:100%;">
            {section name=sl loop=$LOCATIONS}
                <tr>
                   <tr><td>Country: {$LOCATIONS[sl].country}</td> </tr>
                   <tr><td>State: {$LOCATIONS[sl].state}</td></tr>
                   <tr><td>City: {$LOCATIONS[sl].city}</td></tr>
                   <tr><td>Street: {$LOCATIONS[sl].street}</td></tr>
                   <tr><td width="60">zip code: {$LOCATIONS[sl].zip}</td></tr>
                    <tr><td width="60" style="padding-top:5px; padding-bottom:5px; text-align:left;">
                        <a href="#" class="steps _btn" data-step="4" name="shipAddr" data-id="{$LOCATIONS[sl].id}" data-ship="{$LOCATIONS[sl].shipping}" class="_btn">Use</a>
                    </td></tr>
                </tr>
            {/section}
        </table>
    {/if}
    
    </div>
    
    

    <div class="cartNav">
        <a href="#" class="steps _btn" data-step="2" class="_btn">Back</a>
        <a href="#" class="steps _btn" data-step="1" class="_btn">Back to Cart</a>
    </div>

{else $smarty.session.cart_step == 4 || !empty($smarty.session.client.shipAddr)}
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



{/if}


{if $smarty.session.cart_step == 5 && isset($smarty.session.client.payMethod)}
    
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
        {foreach from=$CART item=v}
            <tr id="{$v.id}">
                <td>{$v.name}</td>
                <td width="60">&euro; {$v.price}</td>
                <td width="60">{$v.qty}</td>
                <td width="80">&euro; {$v.qty * $v.price}</td>
            </tr>
        {/foreach}

        <tr>
            <td colspan="3" style="padding-right:16px; text-align:right;">Cart total</td>
            <td align="left">&euro; {$CART_TOTAL}</td>
        </tr>
        <tr>
            <td colspan="3" style="padding-right:16px; text-align:right;">Shipping tax</td>
            <td align="left">&euro; {$smarty.session.client.shipTax}</td>
        </tr>
        <tr>
            <td colspan="3" style="padding-right:16px; text-align:right;">Total</td>
            <td align="left">&euro; {($CART_TOTAL + $smarty.session.client.shipTax)|number_format:2}</td>
        </tr>
    </table>
    
{if $smarty.session.client.payMethod == 'moneygram'}
    <p>
        Payment with MoneyGram - Please, provide the payment code for verification.<br><br>
        name: <strong>DIMITAR ASENOV KORUDZHIEV</strong><br>
        city: <strong>SOFIA</strong><br>
        country: <strong>BULGARIA</strong>
    </p>
    <p><a href="#" class="payNow _btn" data-name="moneygram">Order Now</a></p>
{else}
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
{/if}
</div>

<div class="cartNav">
    <a hhref="#" class="steps _btn" data-step="4" class="_btn">Back</a>
    <a href="#" class="steps _btn" data-step="1" class="_btn">Back to Cart</a>
</div>


{/if}


<!-- END SECTIONS 2,3,4 -->
