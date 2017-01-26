
<section class="midContainer">
{if isset($smarty.session.client.logged)}
{if $ORDERS}
<table class="tblOrders" cellpadding="2" cellspacing="0">
<tr>
	<th width="50">No.</th>
    <th width="140">From(date)</th>
    <th width="80">Value(&euro;)</th>
    <th>Payment method</th>
    <th width="60">Status</th>
</tr>
{section name=so loop=$ORDERS}
<tr oid="{$ORDERS[so].id}" class="ORD{$ORDERS[so].status|ordStat}">
	<td>{$ORDERS[so].id}</td>
    <td>{$ORDERS[so].input}</td>
    <td>{$ORDERS[so].all_tax}</td>
    <td>{$ORDERS[so].pay_method}</td>
    <td>{$ORDERS[so].status|ordStat}</td>
</tr>
<div id="orderData"></div>
{/section}
</table>
{else}
<p>
	You do not have any orders yet.
</p>
{/if}

{else}
<p>
	Please, log in to see your orders.
</p>
{/if}
</section>