<?php include("header.php"); ?>
<?php include("dbhandling.php"); ?>
<script type="text/javascript" src="js/enterform.js"></script>
  <div id="content">
				<div class="span10">
				<table id="enterform" class="table">
					<form action="dbhandling.php" method="post">
					<tr><td>wind strength (Beaufort skala)</td><td><select name="windstrength" id="windstrength"size="0">
	     										<option>0 - 0,2</option>
	      										<option>0,3 - 1,5</option>
	      										<option>1,6 - 3,3</option>
	      										<option>3,4 - 5,4</option>
	      										<option>5,5 - 7,9</option>
	      										<option>8,0 - 10,7</option>
	      										<option>10,8 - 13,8</option>
	      										<option>13,9 - 17,1</option>
	      										<option>17,2 - 20,7</option>
	      										<option>20,8 - 24,4</option>
	      										<option>24,5 - 28,4</option>
	      										<option>28,5 - 32,6</option>
	      										<option>> 32,6</option>
	      									</select></td></tr>
					<tr><td>wind direction</td><td><select name="winddirection" id="winddirection" size="0">
	     										<option>N = 0º or 360º</option>
	      										<option>NNE = 22.5º</option>
	      										<option>NE = 45º</option>
	      										<option>ENE = 67.5º</option>
	      										<option>E = 90º</option>
	      										<option>ESE = 112.5º</option>
	      										<option>SE = 135º</option>
	      										<option>SSE = 157.5º</option>
	      										<option>S = 180º</option>
	      										<option>SSW = 202.5º</option>
	      										<option>SW = 225º</option>
	      										<option>WSW = 247.5º</option>
	      										<option>W = 270º</option>
	      										<option>WNW = 292.5º</option>
	      										<option>NW = 315º</option>
	      										<option>NNW = 337.5º</option>
	      										<option>N = 360º or 0º</option>
	      									</select></td></tr>
					<tr><td>air pressure</td><td><input type="text" id="pressure" name="pressure"/></td></tr>
					<tr><td>temperature</td><td><input type="number" min="-60" max="60" name="temperature" id="temperature" />
						<select name="temperature_scales" size="0">
	     										<option>ºC</option>
	      										<option>ºF</option></select></td></tr>
					<tr><td>clouds</td><td><select name="clouds" size="0">
	     										<option>Yes</option>
	      										<option>No</option></select></td></tr>
					<tr><td>rain</td><td><select name="rain" size="0">
	     										<option>Yes</option>
	      										<option>No</option></select></td></tr>
					<tr><td>wave hight</td><td><input type="text" name="wave_hight" id="wave"/></td></tr>
					<tr><td>wave direction</td><td><input type="text" name="wave_direction"/></td></tr>
					<tr><td>time</td><td><input type="time" name="observationtime"></td></tr>
					<tr><td>Date</td><td><input type="date" name="observationdate"></td></tr>
					<tr><td></td><td><button type="submit"> send </button></td></tr>
					</form>
				</table>
				</div>
<?php include("footer.php"); ?> 
