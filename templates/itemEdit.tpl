
<p class="aj_msg"></p>
<form method="post" id="editItem" action="async.php?do=editItem" enctype="multipart/form-data">
	<div class="regular_table_form" style="width:700px; text-align:left; position:relative; margin:0 auto;">
    	<div style="width:300px; float:left;">
        	<input type="hidden" name="itemId" value="{$PRODUCT.id}">
		    <input type="hidden" name="hItemImage" value="{$PRODUCT.image}">
        
        	<label>Name</label>
            <input name="itemName" value="{$PRODUCT.name|stripslashes|htmlspecialchars}">
            
            <label>Make</label>
            <input name="itemMake" value="{$PRODUCT.make|stripslashes|htmlspecialchars}">
            
            <label>Category</label>
            <select name="itemCatId">
                <option value="0">--Select--</option>
{section name=ss loop=$ALLCATS}
        <div>{$ALLCATS[ss].name}</div>
        
        {if isset($ALLCATS[ss].sub)}
        {section name=ssb loop=$ALLCATS[ss].sub}
        <option value="{$ALLCATS[ss].sub[ssb].id}"{if $ALLCATS[ss].sub[ssb].id == $PRODUCT.cat} selected="selected"{/if}>{$ALLCATS[ss].name} / {$ALLCATS[ss].sub[ssb].name}</option>
        {/section}
        {/if}
{/section}
            </select>
            
            <label>Meta keywords</label>
            <input name="itemMKey" value="{$PRODUCT.mkeys|stripslashes|htmlspecialchars}">
            
            <label>Meta description</label>
            <input name="itemDesc" value="{$PRODUCT.mdesc|stripslashes|htmlspecialchars}">
            
            <label>price</label>
            <input name="itemPrice" value="{$PRODUCT.price}">
            
            <label>hidden</label>
            <input type="checkbox" name="itemStatus"{if $PRODUCT.hidden == 1} checked="checked"{/if}>
        </div>
        
        <div style="width:400px; float:left;">
        	<label>Image <img src="/img/t{$PRODUCT.image}.jpg"></label>
            <input type="file" name="fIMG">
            
            <label>Description</label>
            <textarea name="itemData">{$PRODUCT.data|stripslashes}</textarea>
        </div>
        <div class="clearfix"></div>
        
        <p style="text-align:center"><input type="submit" id="_saveEditItem" class="_btn">Save</input></p>
    </div>

{*<!--
	<input type="hidden" name="hItemId" value="{$ITEM.id}">
    <input type="hidden" name="hItemImage" value="{$ITEM.image}">
    <table class="regular_table_form" width="500" cellpadding="2" cellspacing="0">
    <tr>
        <td>Name</td>
        <td><input name="xName" value="{$ITEM.name|stripslashes|htmlspecialchars}"></td>
    </tr>
    <tr>
        <td>Make</td>
        <td><input name="xMake" value="{$ITEM.make|stripslashes|htmlspecialchars}"></td>
    </tr>
    <tr>
        <td>Category</td>
        <td>
            <select name="sCat">
                <option value="0">--Select--</option>
{section name=ss loop=$ALLCATS}
        <div>{$ALLCATS[ss].name}</div>
        
        {if isset($ALLCATS[ss].sub)}
        {section name=ssb loop=$ALLCATS[ss].sub}
        <option value="{$ALLCATS[ss].sub[ssb].id}"{if $ALLCATS[ss].sub[ssb].id == $ITEM.cat} selected="selected"{/if}>{$ALLCATS[ss].name} / {$ALLCATS[ss].sub[ssb].name}</option>
        {/section}
        {/if}
{/section}
            </select>
        </td>
    </tr>
     <tr>
        <td>Image</td>
        <td><img src="images/t{$ITEM.image}.jpg"><input type="file" name="fIMG"></td>
    </tr>
    <tr>
        <td>Price</td>
        <td><input name="xPrice" value="{$ITEM.price}"></td>
    </tr>
    <tr>
        <td>Keywords</td>
        <td><input name="xKeys" value="{$ITEM.mkeys|stripslashes|htmlspecialchars}"></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><textarea name="xDesc">{$ITEM.data|stripslashes}</textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><span id="_saveEditItem" class="_btn">Save</span></td>
    </tr>
    </table>
-->*}
</form>