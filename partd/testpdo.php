<?php
  define('DB_HOST', 'yallara.cs.rmit.edu.au');
  define('DB_PORT', '51784'); // CHANGE THIS
  define('DB_NAME', 'winestore');
  define('DB_USER', 'root'); // CHANGE THIS
  define('DB_PW',   '2615347'); // CHANGE THIS
  
    $db = new PDO(
      "mysql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME,
      DB_USER,
      DB_PW);
    
    $data = "SELECT region_name FROM region";
    $dat =  "SELECT variety FROM grape_variety";
    $das = "SELECT DISTINCT year FROM wine ORDER BY year ASC";
    $dae = "SELECT DISTINCT year FROM wine ORDER BY year DESC";
    
?>
