<?php
   include("conn.php");
   // $dd = mysql_connect('yallara.cs.rmit.edu.au:51784', 'root', '2615347');
   // mysql_select_db("winestore", $dd) or die(mysql_error());
    $data = mysql_query("SELECT region_name FROM region");
    $dat = mysql_query("SELECT variety FROM grape_variety");
    $das = mysql_query("SELECT DISTINCT year FROM wine ORDER BY year ASC");
    $dae = mysql_query("SELECT DISTINCT year FROM wine ORDER BY year DESC");
?>

<html>
<title> assignment1</title>
<head>
</head>
<body>

<form action="second.php" method="GET">
  wine name:&nbsp &nbsp &nbsp &nbsp
<input type="text" name="wname" /><br/>
  winery name:<input type="text" name="wnryname" /><br />
region:
<select name="rgn">
<?php


     while($row = mysql_fetch_array($data))
    {

        echo "<option>";
        echo $row[region_name];
        echo "</option>";

    }
  ?>
  </select><br/>
variety:
<select name="var">
<?php

    
     while($rw = mysql_fetch_array($dat))
    {

        echo "<option>";
        echo $rw[variety];
        echo "</option>";

    }
?>
  </select><br/>
lower bount:
<select name="lyr">
<?php


     while($rw = mysql_fetch_array($das))
    {

        echo "<option>";
        echo $rw[year];
        echo "</option>";

    }
?>
  </select><br/>
upper bound:
<select name="uyr">
<?php


     while($rw = mysql_fetch_array($dae))
    {

        echo "<option>";
        echo $rw[year];
        echo "</option>";

    }
?>
  </select><br/>



  minimum number of wines in stock: <input type="text" name="ws" /><br />
  minimum number of wines ordered: <input type="text" name="wo" /><br />
 dollar cost range: <input type="text" name="ldcr" />to <input type="text" name="udcr" />
<input type="submit" value="search">
</form>
</body>
</html>
