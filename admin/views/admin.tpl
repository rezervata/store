{*home admin*}

<div id="blockNewCategory">
    New category
    <input name="newCategoryName" id="newCategoryName" type="text" value=""/>
    <br/>

    Subcategory of
    <select name="generalCatId">
        <option value="0">
            Main category
            {foreach $rsCategories as $item}
            <option value="{$item['id']}">{$item['name']}</option>
        {/foreach}

        </option>
    </select>
    <br/>
    <input type="button" onclick="newCategory();" value="New category"/>
</div>