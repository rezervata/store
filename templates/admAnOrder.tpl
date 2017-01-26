<p class="aj_msg">{if empty($DATA)}Cannot find order{/if}</p>
<p style="font-size:1.35em;">
	Order details #{$DATA.id} - {$DATA.o_status|ordStat}
</p>
<div class="orderData" style="position:relative; text-align:left;">
    <div style="float:left; width:20%">
    	<label>First name</label>
    	{$DATA.fname}
        
        <label>Last name</label>
    	{$DATA.lname}
        
        <label>e-mail</label>
    	{$DATA.email}
        
        <label>Phone</label>
    	{$DATA.phone}
    </div>
    <div style="float:left; width:20%">
    	<label>Country</label>
    	{$DATA.country}
        
        <label>State</label>
    	{$DATA.state}
        
        <label>City</label>
    	{$DATA.city}
        
        <label>Street address</label>
    	{$DATA.street}
        
        <label>zip/post code</label>
    	{if $DATA.zip}{$DATA.zip}{else}-{/if}
    </div>
    <div style="float:left; width:15%;">
    	<label>Order no.</label>
    	{$DATA.id}
        
        <label>Subtotal</label>
    	{$DATA.subtotal}
        
        <label>Shipping tax</label>
    	{$DATA.ship_price}
        
        <label>Total</label>
    	{$DATA.total}
        
        <label>Payment method</label>
    	{$DATA.pay_method}
    </div>
    <div style="float:left; width:30%;">
    	<table class="ordCartTable" cellpadding="2" cellspacing="0">
        <tr>
        	<th>name</th>
            <th width="40">qty</th>
            <th width="80">price</th>
        </tr>
{section name=si loop=$DATA.cart}
		<tr>
        	<td>{$DATA.cart[si].name|stripslashes}</td>
            <td>{$DATA.cart[si].qty}</td>
            <td>{$DATA.cart[si].price}</td>
        </tr>
{/section}
        </table>
    </div>
    <div style="float:left; width:15%;">
    	{if isset($smarty.session.a_login)}
        	<label>Shipment code</label>
        	<input name="shipCode" style="border:#39F 1px solid; width:98%;" value="{$DATA.ship_code}">
            
            <label>notes</label>
            <textarea name="xNotes" style="width:98%; height:110px;">{$DATA.notes}</textarea>
        {else}
        	<label>Shipment code</label>
        	{$DATA.ship_code}
            <label>notes</label>
            {$DATA.notes}
        {/if}
    </div>
    
    <div class="clearfix"></div>
	{if isset($smarty.session.admin.logged)}
    <p class="orderOper" style="text-align:center; padding-top:1em;">
    	<span class="_btn" data-rel="9" data-id="{$DATA.id}">Cancel order</span>
        <span class="_btn" data-rel="2" data-id="{$DATA.id}">Verify</span>
        <span class="_btn" data-rel="3" data-id="{$DATA.id}">Dispatch</span>
    </p>
    {/if}
</div>