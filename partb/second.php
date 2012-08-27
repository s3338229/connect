<?php
include("conn.php");
$wname="%".$_GET['wname']."%";
$var="%".$_GET['var']."%";
$wnryname=$_GET['wnryname'];
$rgn=$_GET['rgn'];
$lyr=$_GET['lyr'];
$uyr=$_GET['uyr'];
$ldcr=$_GET['ldcr'];
$udcr=$_GET['udcr'];
$wo=$_GET['wo'];
$ws=$_GET['ws'];
$f=1;
$result1= mysql_query("SELECT DISTINCT  wine_name,variety,year,winery_name,region_name,cost,price,SUM(qty),qty*price,on_hand FROM wine 
JOIN winery ON wine.winery_id = winery.winery_id 
JOIN region ON region.region_id = winery.region_id 
JOIN wine_variety ON wine_variety.wine_id = wine.wine_id 
JOIN grape_variety ON grape_variety.variety_id = wine_variety.variety_id 
JOIN inventory ON inventory.wine_id = wine.wine_id 
JOIN items ON items.wine_id = wine.wine_id
WHERE wine_name LIKE
CASE
WHEN '$wname' LIKE ''
THEN wine_name
ELSE '$wname'
END
AND
variety LIKE 
CASE
WHEN '$var' LIKE ''
THEN variety
ELSE '$var'
END
AND
year BETWEEN '$lyr' AND '$uyr'
AND
winery_name LIKE
CASE
WHEN '$wnryname' LIKE ''
THEN winery_name
ELSE '$wnryname'
END
AND
region_name LIKE
CASE
WHEN '$rgn' LIKE 'All'
THEN region_name
ELSE '$rgn'
END
AND
cost BETWEEN
CASE
WHEN '$ldcr' LIKE ''
THEN '0'
ELSE '$ldcr' 
END
AND
CASE
WHEN '$udcr' LIKE ''
THEN '10000'
ELSE '$udcr'
END
AND
qty LIKE
CASE
WHEN '$wo' LIKE ''
THEN qty
ELSE '$wo'
END
AND
on_hand >
CASE
WHEN '$ws' Like ''
THEN '0'
ELSE '$ws'
END
GROUP BY wine_name HAVING SUM(qty) > '$wo'

");
  if(lyr>=uyr)
     {
       echo "invalid year";
     }
  else if(ldcr >=udcr)
     {
       echo "invaid cost";
     }
   else
     {
     echo "<table border='1'>   
    <tr>
      <th>wine name</th>
      <th>variety</th>
      <th>year</th>
      <th>winery_name</th>
      <th>region_name</th>
      <th>cost</th>
     <th>price</th>
      <th>quantity</th>
      <th>Total sales revenue</th>
      
    </tr>";
    while ($row = mysql_fetch_array($result1))
   {
      echo "<tr>";
      echo "<td>" . $row['wine_name'] . "</td>";
      echo "<td>" . $row['variety'] . "</td>";
       echo "<td>" . $row['year'] . "</td>";
      echo "<td>" . $row['winery_name'] . "</td>";
       echo "<td>" . $row['region_name'] . "</td>";
      echo "<td>" . $row['cost'] . "</td>";
       echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['SUM(qty)'] . "</td>";
        echo "<td>" . $row['qty*price'] . "</td>";
         
   }
    
 }
?>
