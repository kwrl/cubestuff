

{if isset($LATEST_PRODUCTS)}
<div>
  <h2>{$LANG.catalogue.latest_products}</h2>
  {foreach from=$LATEST_PRODUCTS item=product}
  <div class="latest_product">
	<form action="{$VAL_SELF}" method="post" class="addForm">
	  <p class="image">
		<a href="{$product.url}" title="{$product.name}">
		  <img src="{$product.image}" alt="{$product.name}" />
		</a>
	  </p>
	  <div class="info">
	  <p class="title"><a href="{$product.url}" title="{$product.name}">{$product.name|truncate:20:"&hellip;"}</a></p>
	  {if $product.review_score && $CTRL_REVIEW}
	  
	  <p class="rating">
	  {for $i = 1; $i <= 5; $i++}
	    {if $product.review_score >= $i}
		<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/common/star.png" alt="" />
		{elseif $product.review_score > ($i - 1) && $product.review_score < $i}
		<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/common/star_half.png" alt="" />
		{else}
		<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/images/common/star_off.png" alt="" />
		{/if}
	  {/for}
	  </p>
	  
	  {/if}
	  {if $product.ctrl_sale}
	  <p class="price"><span class="price_previous">{$product.price}</span> <span class="price_sale">{$product.sale_price}</span></p>
	  {else}
	  <p class="price">{$product.price}</p>
	  {/if}
	  <p class="actions">
		<!-- Not shown in this skin
		<a href="{$product.url}" title="{$product.name}">{$LANG.common.info}</a>
		-->
		<input type="hidden" name="add" value="{$product.product_id}" />
		{if $product.ctrl_stock && !$CATALOGUE_MODE}
		<input type="submit" value="{$LANG.catalogue.buy_now}" class="button_add_basket" />
		{elseif !$CATALOGUE_MODE}
		<input type="submit" value="{$LANG.catalogue.out_of_stock_short}" class="button_add_basket disabled" disabled="disabled" />
		{/if}
	  </p>
	  </div>
	  	</form>
  </div>
  {/foreach}
</div>
{/if}

<!--

removed from top of document, the default announcement
{if isset($DOCUMENT)}
<div id="announcement">
  <h1>{$DOCUMENT.title}</h1>
  {$DOCUMENT.content}
</div>
{/if}

-->