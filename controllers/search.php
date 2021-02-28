<?php 
$search_query = $_POST['query'];
$smarty->assign('query', $search_query);
$Recipe = new Recipe($Conn);
$recipes = $Recipe->searchRecipes($search_query);
$smarty->assign('recipes', $recipes);
