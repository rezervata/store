{*admin Categories*}

<div id="blockNewCategory">
    New category
    <input name="newCategoryName" id="newCategoryName" type="text" value=""/>
    <br/>

    Subcategory of
    <select name="generalCatId" style=" width:300px">
        <option value="0">
            Main category
            {section name=kk loop=$rsCategories}

            <option value="{$rsCategories[kk].id}">{$rsCategories[kk].name|stripslashes} </option>
        {/section}

    </select>
    <br/>
    <br/>
    <input class="newCat" type="button"  value="New category"/>
</div>

<br/>
<hr/>
<br/>
    <h2>Categories</h2>
    <table  border="1" cellpadding="1" cellspasing="1">
        <tr>
            <th>N:</th>
            <th>ID</th>
            <th>Name</th>
            <th>Parent category</th>
            <th>Action</th>
        </tr>
            {section name=kk loop=$rsCategories}
            <tr id="blockUpdateCat">
                <td>{$smarty.section.kk.iteration}</td>
                <td>
                    <input name="id" value=" {$rsCategories[kk].id}"/>
               </td>
                <td>
                    <input type="edit"  id="itemName_{$rsCategories[kk].id}" value="{$rsCategories[kk].name|stripslashes}"/>
                </td>
                <td>
                    <select name="parentId" id="parentId" value="{$rsCategories[kk].name|stripslashes}">
                        <option value="0"/>
                    {*{$rsCategories[kk].name|stripslashes}}*}
                    {*{$rsCategories[kk].parent.name}*}
                            {section name=mk loop=$rsMainCategories}
                            <option value="{$rsMainCategories[mk].id}" {if {$rsCategories[kk].parent} == {$rsMainCategories[mk].id}} selected{/if}/>
                                {$rsMainCategories[mk].name|stripslashes}
                            
                        
                            {/section}

                    </select>
                </td>
                <td>
                    <input class="updateCat" type="button" value="Save"/>
                </td>
            </tr>
            {/section}
    {*    {/foreach}*}
    </table>