
{foreach from=$BANNERS item=NODE}
{*<div class="svSlider" style="position:relative; width:100%; height:140px; border:#fff 1px solid; margin-bottom:2px;">*}
<div>
{section name=si loop=$NODE}
    <div class="svNode" style="position:absolute; height:140px; width:100%; background:url(img/m{$NODE[si].image}.jpg) center; background-size:140%; white-space: nowrap;">
    	<a href="product/{$NODE[si].name|stripslashes|toSEO}">
        <p style="opacity:0; color:#fff; text-shadow:#000 1px 1px 3px;">{$NODE[si].name|stripslashes}<br>
        <span style="font-size:1.6em;">now for: &euro; {$NODE[si].price}</span></p>
        </a>
    </div>
{/section}


</div>
{/foreach}