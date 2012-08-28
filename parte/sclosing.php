<?php
session_start();
$p=0;
$tem=array();
define("USER_HOME_DIR", "/home/stud/s3338229");
require(USER_HOME_DIR . "/php/Smarty-3.1.11/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/templates";
$smarty->compile_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/templates_c";
$smarty->cache_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/cache";
$smarty->config_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/configs";

   $smarty->assign('are', $_SESSION['winename']);
   include 'tet.php';
   session_destroy();
   $smarty->display('home3.tpl');  

?>


