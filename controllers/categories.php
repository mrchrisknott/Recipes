<?php
$Category = new Category($Conn);
$categories = $Category->getAllCategories();

$smarty->assign('categories', $categories);
