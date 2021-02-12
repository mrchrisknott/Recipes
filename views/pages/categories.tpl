{extends file="layouts/main.tpl"}
{block name="body"}
    <h1 class="mb-4 pb-2">Recipe Categories</h1>
    <div class="row">
        {foreach from=$categories item=category}
            <div class="col-md-3">
                <div class="recipe-card">
                    <div class="recipe-card-image" style="background-image: url('./user-images/categories/{$category.cat_image}');">
                        <a href="index.php?p=recipes&id={$category.cat_id}"></a>
                    </div>
                    <a href="index.php?p=recipes&id={$category.cat_id}">
                       
                        <h3>{$category.cat_name}</h3>
                        
                    </a>
                </div>
            </div>
        {/foreach}
    </div>
{/block}