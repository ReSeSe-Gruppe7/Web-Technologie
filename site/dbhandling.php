<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $con=mysql_connect("127.0.0.1","root");
if (!$con)
  {die('Failed to connect to MySQL: ' . mysqli_connect_error());}
  
  mysql_select_db("WEBTEC" ,$con);
$sql="INSERT INTO Weather_Info (wind_strength,wind_direction,air_pressure,temperature,temperature_scales,clouds,rain,wave_hight,wave_direction,time,date)
VALUES
('$_POST[windstrength]','$_POST[winddirection]','$_POST[pressure]','$_POST[temperature]','$_POST[temperature_scales]','$_POST[clouds]','$_POST[rain]','$_POST[wave_hight]','$_POST[wave_direction]','$_POST[observationtime]','$_POST[observationdate]')";

if (!mysql_query($sql,$con))
  {
  die('Error:'. mysql_error());
  }else{
  	echo '<script type="text/javascript">alert("You successfully added a new Item to the Db");window.history.back(); </script>';
  }
mysql_close($con);
header("Location:enterform.php"); 
exit();
}
?>
