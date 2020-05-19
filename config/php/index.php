<?php
$con = mysql_connect("mariadb","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
// some code
mysql_select_db("my_db", $con);
$result = mysql_query("SELECT * FROM customer");
while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br />";
  }  
mysql_close($con);
