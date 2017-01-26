{if !empty($CATEGORIES)}

<div class="content">
    <h2>{$PRODUCT[0].name|stripslashes}</h2>
    <h4>{$PRODUCT[0].mkeys|stripslashes}</h4>
 {*   <p><a href="product/{$PRODUCT[0].mkeys}" class="btn btn-primary" role="button">{$PRODUCT[0].name|stripslashes}</a>
 *}
   <div class="product_data">
     <div style="position:relative;">
      <!--   <div style="width:200px; float:left;">    -->
             <img  src="../img/m{$PRODUCT[0].image}.jpg" class="product_image" alt="{$PRODUCT[0].name|stripslashes}" title="{$PRODUCT[0].name|stripslashes}" width="480px" height="300px">
           </div>

           <div class="fixed"></div>
       </div>


    <label>Price: {$PRODUCT[0].price} лв.</label>

            <a href="#" class="btn btn-default toCart" role="button" data-id="{$PRODUCT[0].id}">Add to Cart</a>

         <p>{$PRODUCT[0].data|stripslashes}</p>
</div>
{else}

    No such product!!!

{/if}
