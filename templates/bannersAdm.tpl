<p class="aj_msg">{if empty($BANNERS)}You do not have any banners yet.{/if}</p>
{foreach from=$BANNERS key=KK item=NODE}
<div style="position:relative; border-bottom:#ccc 1px solid;">
{section name=si loop=$NODE}
	<img src="images/t{$NODE[si].image}.jpg" style="float:left; width:60px; height:auto; border:#fff 2px solid; margin:8px; box-shadow:0 0 5px #888;" alt="{$NODE[si].name|stripslashes} - {$NODE[si].price}" title="{$NODE[si].name|stripslashes} - {$NODE[si].price}">

{/section}
	<div style="clear:both; padding:10px;">
    	<span class="_btn bDelBanner" data-grp="{$KK}">delete banner</span>
    </div>
</div>
{/foreach}