<?php 
$recipe_id = $_GET['id'];
$Recipe = new Recipe($Conn);
$recipe_data = $Recipe->getRecipe($recipe_id);
$smarty->assign('recipe', $recipe_data);