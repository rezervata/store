<section class="midContainer">
<form id="orderSearchForm" method="post" action="admClients/">
Name:<input name="fname" value="{if isset($smarty.post.fname)}{$smarty.post.fname}{/if}" style="width:80px;">
Family:<input name="lname" value="{if isset($smarty.post.lname)}{$smarty.post.lname}{/if}" style="width:80px;">
E-mail:<input name="email" value="{if isset($smarty.post.email)}{$smarty.post.email}{/if}" style="width:100px;">
<input class="_btn" type="submit" value="find">
</form>
<table class="tblClients" cellpadding="2" cellspacing="0" width="100%">
<thead>
<tr>
    <th>Name(email)</th>
    <th>Phone</th>
    <th>Registered</th>
    <th>Status</th>
</tr>
</thead>

<tbody>
{section name=sc loop=$CLIENTS}
<tr class="cRow" cid="{$CLIENTS[sc].id}" style="cursor:pointer;">
    <td>{$CLIENTS[sc].fname} {$CLIENTS[sc].lname} ({$CLIENTS[sc].email})</td>
    <td>{$CLIENTS[sc].phone}</td>
    <td>{$CLIENTS[sc].input}</td>
    <td>{$CLIENTS[sc].status}</td>
</tr>
{/section}
</tbody>

</table>
</section>