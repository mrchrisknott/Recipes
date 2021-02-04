<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
require_once(__DIR__.'/includes/boot.include.php');
if($_GET['p']) {
    //
    // This array should be populated with those pages that should only be accessible to a signed in 'member'
    $secure_pages = array('account');
    if (in_array($_GET['p'], $secure_pages)) {
        if(!$_SESSION['is_loggedin']) {
            header("Location: index.php?p=login");
            exit();
        }
    }
    $smarty->assign('view_name',$_GET['p']);
    require_once('controllers/'.$_GET['p'].'.php');
    $smarty->display('pages/'.$_GET['p'].'.tpl');
}else{
    $smarty->assign('view_name', 'home');
    require_once('controllers/home.php');
    $smarty->display('pages/home.tpl');
}