{section name=cp loop=$CATPRODUCTS}

<a href="product/{$CATPRODUCTS[cp].name|stripslashes}">
  <div class="col-sm-4 col-md-3" style="
width: 200px;
height: 300px;
">
    <div class="thumbnail" style="
width: 195px;
height: 295px;
">
        <a href="product/{$CATPRODUCTS[cp].name}">
        <img src="../img/m{$CATPRODUCTS[cp].image}.jpg " style="height:100px; width:100px" class="btn btn-primary" role="button">
      </a>
        <div class="caption">
          <h3>{$CATPRODUCTS[cp].name|stripslashes}</h3>
         <p>
          <label>{$CATPRODUCTS[cp].price} лв.</label>
          <a href="#" class="btn btn-primary toCart" style="position:absolute; bottom:10px; right:5px;" role="button" data-id="{$CATPRODUCTS[cp].id}">Add to Cart</a>
        </p>
                </div>
        </div>
    </div>
<!-- div class="price">
        <p>{$CATPRODUCTS[cp].price} лв.</p>
</div> -->
</a>

{sectionelse}
 No products in this Category!
{/section}
