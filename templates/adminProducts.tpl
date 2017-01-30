{* admin Products *}

<h2 > Продукти </h2 >
<div id = "blockNewProduct" >
    <table border = "1"cellpadding = "1"cellspacing = "1" >  
        <caption > Добавяне на продукти </caption >
        <tr >  
            <th > Име </th >
            <th > Цена </th >  
            <th > Категория </th >
            <th > Производител </th >
            <th > Mkey </th > 
            <th > Mdes </th >
            <th > Описание </th >
            <th > Запамети </th >
        </tr >
        <tr > 
            <td > 
                <input type = "edit"id = "newItemName"name = "newItemName"value = ""/> 
            </td >
            <td >
                <input type = "edit"id = "newItemPrice"name = "newItemPrice"value = ""/>
            </td >
            <td >
                <select id = "newItemCatId"name = "newItemCatId" >
                    <option value = "0"> Главна категория </option >
                    {section name = kk loop = $rsCategories} 
                        <option value = "{$rsCategories[kk].id}">
                            {$rsCategories[kk].name|stripslashes}
                        </option > 
                    {/section}
                </select >
            </td >  
            <td >
                <select id = "newItemMake"name = "newItemMake" >
                    <option value = "0" > Нов производител </option >
                        {section  name = prod loop = $rsProducts}
                            <option value = "{$rsProducts[prod].make|stripslashes}" >  {$rsProducts[prod].make|stripslashes} </option > 
                        {/section}
                </select > 
            </td >
            <td >
                <textarea id = "newItemMkey"name = "newItemMkey" ></textarea >
            </td >
            <td >
                <textarea id = "newItemDesc"name = "newItemDesc" ></textarea >
            </td >
            <td >
                <textarea id = "newItemData"name = "newItemData" ></textarea >
            </td >
            <td >
                <input class = "newProduct"type = "button"value = "Запамети"/>
            </td >
        </tr >    
    </table >
</div >

<div>
    <table border = "1"cellpadding = "1"cellspacing = "1" >
        <tr >
            <th > N: </th >
            <th > ID </th >
            <th > Име </th >
            <th > Цена </th >
            <th > Категория </th >
            <th > Производител </th >
            <th > Mkey </th >
            <th > Mdes </th >
            <th > Описание </th >
            <th > Изтрит </th >
            <th > Изображение </th >
            <th > Съхранение </th >
        </tr >
        {section name = pr loop = $rsProducts} 
            <tr id="blockUpdateProduct">
                <td >
                    {$smarty.section.pr.iteration}
                </td >
                <td >
                    {$rsProducts[pr].id}
                </td > 
                <td >
                    <input type = "edit"id = "itemName_{$rsProducts[pr].id}"value = "{$rsProducts[pr].name|stripslashes}"/>
                </td >
                <td >
                    <input type = "edit"id = "itemPrice_{$rsProducts[pr].id}"value = "{$rsProducts[pr].price}"/>
                </td >
                <td >
                    <select id = "itemCatId_{$rsProducts[pr].id}" >
                        <option value = "0" > Главна категория </option >
                            {section name = kk loop = $rsCategories}
                                <option value = "{$rsCategories[kk].id}" >
                                    {$rsCategories[kk].name|stripslashes}
                                </option > 
                            {/section}
                    </select >
                </td >
                <td >
                    <select id = "newItemMake_{$rsProducts[pr].id}" > 
                        <option value = "0" > Нов производител </option >  
                            {section  name = prod loop = $rsProducts}
                                <option value = "{$rsProducts[prod].make|stripslashes}" >
                                    {$rsProducts[prod].make|stripslashes} 
                                </option >
                            {/section} 
                    </select >
                </td >
                <td >
                    <textarea id = "newItemMkey_{$rsProducts[pr].id}" >
                        {$rsProducts[pr].mkeys|stripslashes}
                    </textarea >
                </td >
                <td >
                    <textarea id = "newItemData_{$rsProducts[pr].id}" >
                        {$rsProducts[pr].data|stripslashes}
                    </textarea >
                </td > 
                <td >
                    <textarea id = "itemDesc_{$rsProducts[pr].id}" >
                        {$rsProducts[pr].mdesc} 
                    </textarea >
                </td >
                <td > 
                    <suap >&nbsp;&nbsp;&nbsp;&nbsp;</suap >
                    <input type = "checkbox"id = "newItemStatus_{$rsProducts[pr].id}" 
                        {if $rsProducts[pr].hidden !== 0}
                            checked 
                        {/if}
                    />
                </td >
                <td >
                    {if $rsProducts[pr].image}
                        <img src = "../img/m{$rsProducts[pr].image}.jpg"class = "product_image"width = "100"/>
                    {/if}
                    <form action = "async.php?do=newItemImage"method = "POST"enctype = "multipart/form-data" >
                        <input type = "file"name = "nameImg[]"multiple = ""value = "{$rsProducts[pr].name|stripslashes}"/>
                        <br/>
                        <input type = "hidden"name = "itemId"value = "{$rsProducts[pr].id}"/>
                        <br/>
                        <input type = "submit"value = "Качване"/>
                        <br/>
                    </form >
                </td >
                <td >
                    <input class="updateProduct" type = "button"value = "Запамети"/>
                </td >
            </tr >
            
        {/section}

{*<!-- PAGES -->*}
     </table >
 </div >

 
        {*<!-- PAGES -->*}
	<p style="text-align:center; margin:0; padding:1em; background-color:red">
{section name=sp loop=$PAGES}
	{if isset($smarty.get.page)}
		<a href="admin-products/{$smarty.get.page}/page/{$PAGES[sp]}" class="btn " alt="page {$PAGES[sp]}" title="page {$PAGES[sp]}">{$PAGES[sp]}</a>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            ...
        </ul>
    </nav>
    
    {*{elseif isset($smarty.get.make)}
    	<a href="manufacturer/{$smarty.get.make}/page/{$PAGES[sp]}" class="_btn" alt="page {$PAGES[sp]}" title="page {$PAGES[sp]}">{$PAGES[sp]}</a>
    {elseif isset($smarty.get.lastUpd)}
    	<a href="last-updated/page/{$PAGES[sp]}" class="_btn" alt="page {$PAGES[sp]}" title="page {$PAGES[sp]}">{$PAGES[sp]}</a>
    {elseif isset($smarty.get.newest)}
    	<a href="newest/page/{$PAGES[sp]}" class="_btn" alt="page {$PAGES[sp]}" title="page {$PAGES[sp]}">{$PAGES[sp]}</a>
    {elseif isset($smarty.get.topSeller)}
    	<a href="top-sellers/page/{$PAGES[sp]}" class="_btn" alt="page {$PAGES[sp]}" title="page {$PAGES[sp]}">{$PAGES[sp]}</a>
    {elseif isset($smarty.get.mostVisited)}
    	<a href="most-visited/page/{$PAGES[sp]}" class="_btn" alt="page {$PAGES[sp]}" title="page {$PAGES[sp]}">{$PAGES[sp]}</a>
	{elseif isset($smarty.get.hidden)}
    	<a href="show-hidden/page/{$PAGES[sp]}" class="_btn" alt="page {$PAGES[sp]}" title="page {$PAGES[sp]}">{$PAGES[sp]}</a>
    {elseif isset($smarty.get.search)}
    	<a href="search/{$smarty.get.search}/page/{$PAGES[sp]}" class="_btn" alt="page {$PAGES[sp]}" title="page {$PAGES[sp]}">{$PAGES[sp]}</a>*}
    {/if}
{/section}
	</p>