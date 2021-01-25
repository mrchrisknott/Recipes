{extends file="layouts/main.tpl"}
{block name="body"}
    <div class="glide">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide">
            <div class="recipe-slide-card">
              <div class="recipe-slide-card-img" style="background-image: url('./recipe-images/burger.jpg');">
              </div>
              <h3>Burger</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="recipe-slide-card">
              <div class="recipe-slide-card-img" style="background-image: url('./recipe-images/cake.jpg');">
              </div>
              <h3>Cake</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="recipe-slide-card">
              <div class="recipe-slide-card-img" style="background-image: url('./recipe-images/fishpie.jpg');">
              </div>
              <h3>Fish Pie</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="recipe-slide-card">
              <div class="recipe-slide-card-img" style="background-image: url('./recipe-images/salad.jpg');">
              </div>
              <h3>Salad</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="recipe-slide-card">
              <div class="recipe-slide-card-img" style="background-image: url('./recipe-images/salsa.jpg');">
              </div>
              <h3>Salsa</h3>
            </div>
          </li>
          <li class="glide__slide">
            <div class="recipe-slide-card">
              <div class="recipe-slide-card-img" style="background-image: url('./recipe-images/smoothie.jpg');">
              </div>
              <h3>Smoothie</h3>
            </div>
          </li>

        </ul>
      </div>
      <div class="glide__arrows" data-glide-el="controls">
        <button class="carousel-button glide__arrow glide__arrow--left" data-glide-dir="<">
          <i class="fa fa-chevron-left"></i>
        </button>
        <button class="carousel-button glide__arrow glide__arrow--right" data-glide-dir=">">
          <i class="fa fa-chevron-right"></i>
        </button>
      </div>
    </div>
    <h1 class="mb-4 pb-2">Welcome to StudentEat</h1>
    <div class="row">
      <div class="col-lg-9">
        <p>This website is designed for students that are struggling on a shoestring - just like you!</p>
        <p>Tuck into healthy recipes that you can make in under 30 minutes and all with less than 3000 calories a
          portion.</p>
        <a href="categories.html" class="btn btn-studenteat">Browse recipes</a>
      </div>
      <div class="col-lg-3">
        <img src="./images/plate.png" alt="Plate of food" />
      </div>
    </div>

{/block}
