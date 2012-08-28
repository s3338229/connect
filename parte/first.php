<?php
session_start();
include 'testpdo.php';
if($_GET['procid'])
{
$_SESSION['procid']=$_GET['procid'];
}
if(!$_SESSION['flag'])
{
$_SESSION['winename']=array();
}
define("USER_HOME_DIR", "/home/stud/s3338229");
require(USER_HOME_DIR . "/php/Smarty-3.1.11/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/templates";
$smarty->compile_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/templates_c";
$smarty->cache_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/cache";
$smarty->config_dir = USER_HOME_DIR . "/php/Smarty-Work-Dir/configs";

   //include("conn.php");
   // $dd = mysql_connect('yallara.cs.rmit.edu.au:51784', 'root', '2615347');
   // mysql_select_db("winestore", $dd) or die(mysql_error())


     foreach($db->query($data) as $row)
    {

        
       $temp[]= $row[0];
        

    }
  
   $smarty->assign('arr', $temp); 


    
     foreach($db->query($dat)as $rw)
    {

        
        $temp1[]=$rw[0];
        

    }

    $smarty->assign('arrr', $temp1);
  



     foreach($db->query($das)as $rw)
    {

        $temp2[]=$rw[0];

    }
    $smarty->assign('arrrr', $temp2);
  



     foreach($db->query($dae)as $rw)
    {

        
        $temp3[]=$rw[0];
        

    }
   $smarty->assign('arrrrr', $temp3);

$smarty->display('home.tpl');
?>
 
