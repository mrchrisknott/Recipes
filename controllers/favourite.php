<?php
$Favourite = new Favourite($Conn);
$user_favs = $Favourite->getAllFavouritesForUser();
$smarty->assign('user_favs', $user_favs);
