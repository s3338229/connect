<?php

define("USER_HOME_DIR", "/home/stud/s3338229");
require(USER_HOME_DIR . "/php/Smarty-3.1.11/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/templates";
$smarty->compile_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/templates_c";
$smarty->cache_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/cache";
$smarty->config_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/configs";

   include("conn.php");
   // $dd = mysql_connect('yallara.cs.rmit.edu.au:51784', 'root', '2615347');
   // mysql_select_db("winestore", $dd) or die(mysql_error());
    $data = mysql_query("SELECT region_name FROM region");
    $dat = mysql_query("SELECT variety FROM grape_variety");
    $das = mysql_query("SELECT DISTINCT year FROM wine ORDER BY year ASC");
    $dae = mysql_query("SELECT DISTINCT year FROM wine ORDER BY year DESC");



     while($row = mysql_fetch_row($data))
    {

        
       $temp[]= $row[0];
        

    }
  
   $smarty->assign('arr', $temp); 


    
     while($rw = mysql_fetch_row($dat))
    {

        
        $temp1[]=$rw[0];
        

    }

    $smarty->assign('arrr', $temp1);
  



     while($rw = mysql_fetch_row($das))
    {

        $temp2[]=$rw[0];

    }
    $smarty->assign('arrrr', $temp2);
  



     while($rw = mysql_fetch_array($dae))
    {

        
        $temp3[]=$rw[0];
        

    }
   $smarty->assign('arrrrr', $temp3);

$smarty->display('home.tpl');
?>
  
