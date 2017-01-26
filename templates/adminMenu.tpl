{*home admin*}

<div id="blockNewCategory">
    Нова категория
    <input name="newCategoryName" id="newCategoryName" type="text" value=""/>
    <br/>

    Подкатегория на
    <select name="generalCatId" style=" width:300px">
        <option value="0">
            Главна категория
            {section name=kk loop=$rsCategories}

            <option value="{$rsCategories[kk].id_cat}">{$rsCategories[kk].name|stripslashes} </option>
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
{*    {foreach $rsCategories as $item name=categories}*}
        {section name=kk loop=$rsCategories}
        <tr>
            <td>{$smarty.section.kk.iteration}</td>
            <td>{$rsCategories[kk].id_cat}</td>
            <td>
                <input type="edit" id="itemName_{$rsCategories[kk].id_cat}}" value="{$rsCategories[kk].name|stripslashes}"/>
            </td>
            <td>
                <select id="parentId_{$rsCategories[kk].parent_id}" value="{$rsCategories[kk].name|stripslashes}">
                    <option value="0"/>
                    Главна категория
{*                    {foreach $rsMainCategories as $mainItem}*}
                        {section name=mk loop=$rsMainCategories}
                        <option value="{$rsMainCategories[mk].id_cat}" {if {$rsCategories[kk].parent_id} == {$rsMainCategories[mk].id_cat}} selected{/if}/>{$rsMainCategories[mk].name|stripslashes}
                        {/section}
{*                    {/foreach}*}

                </select>
            </td>
            <td>
                <input type="button" value="Запамети" onclick="updateCat({$rsCategories[kk].id_cat});"/>
            </td>
        </tr>
        {/section}
{*    {/foreach}*}
</table>
{*----------------------------------------------------------------------------------------------*}
<br/>
<hr/>

<div style="color:#f00;">main menu <a href=""></a></div>

<div class="container">
    {if isset($ADMINLOGIN)}<h2>{$ADMINLOGIN|getError}</h2>{/if}
    <form class="form-horizontal cat" role="form" id='cat' action='/category/' method='post'
          accept-charset='UTF-8'>

        <h2>Add Category</h2>

        <div class="form-group">

            <label for="name" class="col-sm-3 control-label">Category Name</label>

            <div class="col-sm-9">

                <input type="text" id="id_cat" name='name' placeholder="Category Name" class="form-control" autofocus>

                <span class="help-block">Add Name of the new Category</span>

            </div>

        </div> <!-- /.form-group -->

        <div class="form-group">

            <label for="url" class="col-sm-3 control-label">URL</label>

            <div class="col-sm-9">

                <input type="text" id="id_cat" name='URL' placeholder="Add URL for Category" class="form-control" autofocus>

            </div>

        </div> <!-- /.form-group -->

    </form>

    <form class="form-horizontal sub_cat" role="form" id='id_sub' action='/subcategory/' method='post'
          accept-charset='UTF-8'>

        <h2>Add SubCategory</h2>    

        <div class="form-group">

            <label for="sub_cat" class="col-sm-3 control-label">SubCatgory Name</label>

            <div class="col-sm-9">

                <input type="name" id="id_sub" name="name" placeholder="SubCategory Name" class="form-control">

            </div>

        </div> <!-- /.form-group -->

        <div class="form-group">

            <label for="url" class="col-sm-3 control-label">URL</label>

            <div class="col-sm-9">

                <input type="text" id="id_sub" name='URL' placeholder="Add URL for SubCategory" class="form-control" autofocus>

            </div>

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Category
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">...</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">....</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>

        </div> <!-- /.form-group -->

    </form>
    <form class="form-horizontal product" role="form" id='id_prod' action='/product/' method='post'
          accept-charset='UTF-8'>

        <h2>Add Product</h2>    

        <div class="form-group">

            <label for="product" class="col-sm-3 control-label">Product Name</label>

            <div class="col-sm-9">

                <input type="name" id="id_prod" name="name" placeholder="Product Name" class="form-control">

            </div>

        </div> <!-- /.form-group -->

        <div class="form-group">

            <label for="url" class="col-sm-3 control-label">URL</label>

            <div class="col-sm-9">

                <input type="text" id="id_prod" name='URL' placeholder="Add URL for Product" class="form-control" autofocus>

            </div>

        </div> <!-- /.form-group -->

        <div class="form-group">

            <label for="product" class="col-sm-3 control-label">Description</label>

            <div class="col-sm-9">

                <input type="name" id="id_prod" name="name" placeholder="Description" class="form-control">

            </div>

        </div> <!-- /.form-group -->

        <div class="form-group">

            <label for="product" class="col-sm-3 control-label">Manifacturer</label>

            <div class="col-sm-9">

                <input type="name" id="id_prod" name="name" placeholder="Manifacturer" class="form-control">

            </div>

        </div> <!-- /.form-group -->

        <div class="form-group">

            <label for="product" class="col-sm-3 control-label">Price</label>

            <div class="col-sm-9">

                <input type="name" id="id_prod" name="name" placeholder="Price" class="form-control">

            </div>

        </div> <!-- /.form-group -->        

        <div class="form-group">

            <label for="product" class="col-sm-3 control-label">Promo Price</label>

            <div class="col-sm-9">

                <input type="name" id="id_prod" name="name" placeholder="Promo Price" class="form-control">

            </div>

        </div> <!-- /.form-group -->                      

        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                SubCategory
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#">...</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">....</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>







        <div class="form-group">

            <label for="product" class="col-sm-3 control-label">Upload Picture</label>

            <div class="col-sm-9">

                <input type="name" id="customfileupload" name="name" placeholder="Upload Picture" class="form-control">

                <div class="form-group">

                    <div class="col-sm-9 col-sm-offset-3">

                        <!--		<input type="button" id="get_file" value="Browse">     -->
                        <input type="file" id="my_file"> 




                        <!--            <button type="submit" class="btn btn-primary btn-block browse">Browse</button>   -->

                    </div>

                </div> <!-- /.form-group -->
            </div>

        </div> <!-- /.form-group -->                      

        <div class="form-group">

            <div class="col-sm-9 col-sm-offset-3">

                <button type="submit" class="btn btn-primary btn-block upload">Upload</button>

            </div>

        </div> <!-- /.form-group -->

    </form> <!-- /form -->

</div> <!-- ./container -->