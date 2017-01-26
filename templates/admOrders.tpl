<section class="midContainer">
<form id="orderSearchForm" method="post" action="admOrders/">

No.<input name="id" value="{if isset($smarty.post.id)}{$smarty.post.id}{/if}" style="width:30px;">
From:<input name="from" value="{if isset($smarty.post.from)}{$smarty.post.from}{/if}" style="width:80px;">
To:<input name="to" value="{if isset($smarty.post.to)}{$smarty.post.to}{/if}" style="width:80px;">
E-mail:<input name="email" value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}" style="width:100px;">
<input class="_btn" type="submit" value="find">
</form>
<table class="tblOrders" cellpadding="2" cellspacing="0" width="100%">
<thead>
<tr>
	<th width="60">No.</th>
    <th>Name</th>
    <th>Total</th>
    <th>From</th>
    <th>Status</th>
</tr>
</thead>

<tbody>
{section name=so loop=$ORDERS}
<tr oid="{$ORDERS[so].id}" class="ORD{$ORDERS[so].status|ordStat}">
	<td>{$ORDERS[so].id}</td>
    <td>{$ORDERS[so].fname} {$ORDERS[so].lname}</td>
    <td>{$ORDERS[so].sum}</td>
    <td>{$ORDERS[so].input}</td>
    <td>{$ORDERS[so].status|ordStat}</td>
</tr>
{/section}
</tbody>

</table>
<div id="orderData"></div>
</section>