<?php include("header.php");?>
<?php
$con=mysql_connect("127.0.0.1","root");
if (!$con){
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("WEBTEC" ,$con);
$sql="SELECT * FROM WEBTEC.Weather_Info;";

$result = mysql_query($sql);
echo "<script type='text/javascript' src='js/jquery.tablesorter.js'></script>";
echo "<script type='text/javascript'>$(document).ready(function(){ $('#myTable').tablesorter(sortList: [[0,0]] );});</script>";

echo "<table class='table table-striped table-condensed tablesorter'>
<tr>
<th>wind strength</th>
<th>wind direction</th>
<th>air pressure</th>
<th>temperature</th>
<th>clouds</th>
<th>rain</th>
<th>wave_hight</th>
<th>wave_direction</th>
<th>time</th>
<th>date</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['wind_strength'] . "</td>";
  echo "<td>" . $row['wind_direction'] . "</td>";
  echo "<td>" . $row['air_pressure'] . "</td>";
  echo "<td>" . $row['temperature'] .$row['temperature_scales']. "</td>";
  echo "<td>" . $row['clouds'] . "</td>";
  echo "<td>" . $row['rain'] . "</td>";
  echo "<td>" . $row['wave_hight'] . "</td>";
  echo "<td>" . $row['wave_direction'] . "</td>";
  echo "<td>" . $row['time'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
<?php include("footer.php");?>