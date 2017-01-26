<!-- Content -->

<div class="row">
    {section name=prod loop=$TOPPRODUCT}
        <div class="col-sm-6 col-md-4" style="
    width: 200px;
    height: 300px;
">
            <div class="thumbnail" style="
        width: 195px;
        height: 295px;
    ">
                <a href="product/{$TOPPRODUCT[prod].name|stripslashes}">
                <img src="../img/m{$TOPPRODUCT[prod].image}.jpg" style="height:100px; width:100px;" class="btn btn-primary" role="button">{*    {$TOPPRODUCT[prod].name|stripslashes} *}     {*{$TOPPRODUCT[prod].mkeys}" alt="{$TOPPRODUCT[prod].name|stripslashes}">*}
              </a>
                <div class="caption">
                    <h3>{$TOPPRODUCT[prod].name|stripslashes}</h3>

                    <p>
        {*                <a href="product/{$TOPPRODUCT[prod].id}" class="btn btn-primary" role="button">{$TOPPRODUCT[prod].name|stripslashes}</a>    *}
                        <label>{$TOPPRODUCT[prod].price} лв.</label>
                        <a href="#" class="btn btn-primary toCart" style="position:absolute; bottom:10px; right:5px;" role="button" data-id="{$TOPPRODUCT[prod].id}">Add to Cart</a>

                    </p>
                </div>
            </div>
        </div>
    {/section}
</div>

<!-- /#content-wrapper -->
