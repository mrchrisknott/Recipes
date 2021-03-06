<?php
$recipe_id = $_GET['id'];

if ($_POST['rating']) {
    $Review = new Review($Conn);
    $Review->createReview([
        "recipe_id" => (int) $recipe_id,
        "review_rating" => (int) $_POST['rating']
    ]);
}

$Recipe = new Recipe($Conn);
$recipe_data = $Recipe->getRecipe($recipe_id);
$smarty->assign('recipe', $recipe_data);

// act 21 step 5
$Review = new Review($Conn);
$recipe_rating = $Review->calculateRating($recipe_id);
$smarty->assign('recipe_rating', round($recipe_rating['avg_rating'], 1));

if ($_SESSION['user_data']) {
    $Favourite = new Favourite($Conn);
    $is_fav = $Favourite->isFavourite($recipe_id);
    //    var_dump($is_fav);
    //    exit();

    if ($is_fav) {
        $smarty->assign('is_fav', true);
    } else {
        $smarty->assign('is_fav', false);
    }
}
