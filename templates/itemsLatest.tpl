	<div class="sidePanTitle">most recent products</div>

{section name=li loop=$LAST5}
    <a class="lastetItem" href="/product/{$LAST5[li].name|stripslashes}" alt="{$LAST5[li].name}" title="{$LAST5[li].name}">
    <link href="http://medicine-speed.com/product/{$LAST5[li].name|htmlentities|stripslashes|toSEO}" rel="canonical">
    <div class="liItem{if $smarty.section.li.last} liLast{/if}">
    	<div class="liName">{$LAST5[li].name|stripslashes}</div>
        <div class="liText">
        	{*<p style="display:inline-block; background:url(images/m{$LAST5[li].image}.jpg) center; float:left; width:50px; height:40px;"></p>*}
            <img src="/img/t{$LAST5[li].image}.jpg" style="width:30%; float:left; margin-right:4px;">
        	{$LAST5[li].data|stripslashes}...
            <div class="clearfix"></div>
        	<span>View more...</span>
        </div>
    </div>
    </a>
{/section}