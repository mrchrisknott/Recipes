<?php 
// Begin by storing the category ID defined in the URL:
$cat_id = $_GET['id'];
//
$Recipe = new Recipe($Conn);
$recipes = $Recipe->getAllRecipesForCategory($cat_id);
//
$smarty->assign('recipes', $recipes);
// the following added for step 13 activity 16
$Category = new Category($Conn);
$category = $Category->getCategory($cat_id);
$smarty->assign('category', $category);

