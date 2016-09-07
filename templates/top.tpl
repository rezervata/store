<!-- Content -->

<div class="row">
    {section name=prod loop=$TOPPRODUCT}
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="../img/apple.png"> {*{$TOPPRODUCT[prod].url}" alt="{$TOPPRODUCT[prod].name|stripslashes}">*}
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>{$TOPPRODUCT[prod].name|stripslashes}</p>
                    <p>
                        <a href="product/{$TOPPRODUCT[prod].url}" class="btn btn-primary" role="button">{$TOPPRODUCT[prod].name|stripslashes}</a>
                        <label>{$TOPPRODUCT[prod].price} лв.</label>
                        <a href="#" class="btn btn-default" role="button">{$TOPPRODUCT[prod].price} лв.</a>
                    </p>
                </div>
            </div>
        </div>
    {/section}
</div>

<!-- /#content-wrapper -->
