<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<article class="anItem">
{if $ITEM}
	<hgroup>
	    <h1>{$ITEM.name|stripslashes}</h1>
        <h5>{$ITEM.make}</h5>
    </hgroup>
    <div class="iData">
    	<div style="position:relative;">
        	<div style="width:200px; float:left;">
            	<img src="images/m{$ITEM.image}.jpg" class="anItemImage" alt="{$ITEM.name|stripslashes}" title="{$ITEM.name|stripslashes}"><br>
            </div>
            <div style="width:300px; float:left; text-align:right;">
            	<div class="fb-like" data-href="http://medicine-fast.com/product/{$smarty.get.item}" data-width="100" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
            	<div class="iPrice" style="margin-top:32px;">&euro; {$ITEM.price}</div>
            	<img class="_addToCart" id="{$ITEM.id}" src="_css/img/add-to-card-36.png" alt="Add to Cart" title="Add to Cart">
            </div>
            <div class="clearfix"></div>
        </div>


        {$ITEM.data|nl2br}
        <div class="clearfix"></div>
    </div>
    <div class="iPrice">&euro; {$ITEM.price}</div>
    <div class="iAction">
  {if isset($smarty.session.a_login) && $smarty.session.a_login == md5('OK')}
		<div style="float:left">
			<input type="button" name="bEditItem" data-id="{$ITEM.id}" value="edit">
            <input type="button" name="bAddToBanGrp" data-id="{$ITEM.id}" value="add to banner">
        </div>
  {/if}
    	<img class="_addToCart" id="{$ITEM.id}" src="_css/img/add-to-card-36.png" alt="Add to Cart" title="Add to Cart">
    </div>
{else}
	<p>No such product</p>
{/if}
</article>


<div class="imtem_holder" style="margin-top:1em; overflow:auto; background:#e3e3e3; border-radius:5px; padding-bottom:1em;">
	<h3 class="similarTitle">Similar products</h3>
{section name=si loop=$CATITEMS}
	<a href="product/{$CATITEMS[si].name|stripslashes|toSEO}" alt="{$CATITEMS[si].name|stripslashes}" title="{$CATITEMS[si].name|stripslashes}">
	<div class="thumbItem">
    	<div class="thItemName">{$CATITEMS[si].name}</div>
        <div class="thItemImage">
        	<div>
        		<img src="images/t{$CATITEMS[si].image}.jpg" alt="{$CATITEMS[si].name|stripslashes}" title="{$CATITEMS[si].name|stripslashes}">
            </div>
        </div>
        <div class="thItemPrice">&euro; {$CATITEMS[si].price}</div>
        <div class="thItemBuyBtn">
        	<img class="_addToCart" id="{$CATITEMS[si].id}" src="_css/img/add-to-card-small.png" alt="Add to Cart" title="Add to Cart">
        </div>
    </div>
    </a>
{/section}
	<div class="flearfix"></div>
</div>
