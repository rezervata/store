{*admin Categories*}

<div id="blockNewCategory">
    Нова категория
    <input name="newCategoryName" id="newCategoryName" type="text" value=""/>
    <br/>

    Подкатегория на
    <select name="generalCatId" style=" width:300px">
        <option value="0">
            Главна категория
            {section name=kk loop=$rsCategories}

            <option value="{$rsCategories[kk].id}">{$rsCategories[kk].name|stripslashes} </option>
        {/section}

    </select>
    <br/>
    <br/>
    <input class="newCat" type="button"  value="Нова категория"/>
</div>

<br/>
<hr/>
<br/>
    <h2>Категории</h2>
    <table  border="1" cellpadding="1" cellspasing="1">
        <tr>
            <th>N:</th>
            <th>ID</th>
            <th>Име</th>
            <th>Родителска категория</th>
            <th>Действие</th>
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
                    <input class="updateCat" type="button" value="Запамети"/>
                </td>
            </tr>
            {/section}
    {*    {/foreach}*}
    </table>