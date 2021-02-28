{extends file="layouts/main.tpl"}
{block name="body"}
    <h1 class="mb-4 pb-2">{$recipe.recipe_name}</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <div class="recipe-image mb-4" style="background-image: url('./recipe-images/burger.jpg');">
                        <a href="./recipe-images/burger.jpg" data-lightbox="recipe-imgs"></a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="recipe-image mb-4" style="background-image: url('./recipe-images/cake.jpg');">
                        <a href="./recipe-images/cake.jpg" data-lightbox="recipe-imgs"></a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="recipe-image mb-4" style="background-image: url('./recipe-images/fishpie.jpg');">
                        <a href="./recipe-images/fishpie.jpg" data-lightbox="recipe-imgs"></a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="recipe-image mb-4" style="background-image: url('./recipe-images/salad.jpg');">
                        <a href="./recipe-images/salad.jpg" data-lightbox="recipe-imgs"></a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="recipe-image mb-4" style="background-image: url('./recipe-images/salsa.jpg');">
                        <a href="./recipe-images/salsa.jpg" data-lightbox="recipe-imgs"></a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="recipe-image mb-4" style="background-image: url('./recipe-images/smoothie.jpg');">
                        <a href="./recipe-images/smoothie.jpg" data-lightbox="recipe-imgs"></a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="recipe-image mb-4" style="background-image: url('./recipe-images/burger.jpg');">
                        <a href="./recipe-images/burger.jpg" data-lightbox="recipe-imgs"></a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="recipe-image mb-4" style="background-image: url('./recipe-images/cake.jpg');">
                        <a href="./recipe-images/cake.jpg" data-lightbox="recipe-imgs"></a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="recipe-image mb-4" style="background-image: url('./recipe-images/fishpie.jpg');">
                        <a href="./recipe-images/fishpie.jpg" data-lightbox="recipe-imgs"></a>
                    </div>

                </div>
            </div>

        </div>
        <div class="col-md-6">
            <p>{$recipe.recipe_instructions}</p>
            <ul class="recipe-features">
                <li><i class="fas fa-star-half-alt"></i> {$recipe_rating} Stars</li>
                <li><i class="far fa-clock"></i> {$recipe.recipe_time}</li>
                <li><i class="fas fa-users"></i> {$recipe.recipe_servings} Servings</li>
                <li><i class="fas fa-dollar-sign"></i> {$recipe.recipe_budget}</li>
                <li><i class="fas fa-tags"></i> {$recipe.recipe_tags}</li>

            </ul>

        </div>
    </div>
    <h2>Leave a review</h2>
    {if $user_data}
        <form action="" method="post">
            <div class="form-group">
                <label for="rating">Rating</label>
                <select class="form-control" id="rating" name="rating">
                    <option value="1">1 Star (Very bad)</option>
                    <option value="2">2 Star (Bad)</option>
                    <option value="3">3 Star (Okay)</option>
                    <option value="4">4 Star (Good)</option>
                    <option value="5">5 Star (Very Good)</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    {else}
        <p>Please login to leave a review of this recipe.</p>
    {/if}

{/block}