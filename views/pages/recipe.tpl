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
                <li><i class="far fa-clock"></i> {$recipe.recipe_time}</li>
                <li><i class="fas fa-users"></i> {$recipe.recipe_servings} Servings</li>
                <li><i class="fas fa-dollar-sign"></i> {$recipe.recipe_budget}</li>
                <li><i class="fas fa-tags"></i> {$recipe.recipe_tags}</li>

            </ul>

        </div>
    </div>
{/block}