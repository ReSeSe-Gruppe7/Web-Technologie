<?php include("_includes/header.php"); ?>
<?php include("dbhandling.php"); ?>
<script type="text/javascript" src="../js/enterform.js"></script>
<div style="padding: 20px"></div>
<div class="tabbable tabs-left">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#WeatherInfo" data-toggle="tab">Enter weather info</a></li>
                <li><a href="#ValidateCoordinates" data-toggle="tab">Validate Coordinates</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="WeatherInfo">
                  <div id="container">
					<form class="form-horizontal" id="weatherinfoform" action="dbhandling.php" method="post">
  						<div class="control-group">
    						<label class="control-label">wind strength (Beaufort skala)</label>
    					<div class="controls">
      						<select name="windstrength" id="windstrength"size="0">
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
	      									</select>
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label">wind direction</label>
    					<div class="controls">
      						<select name="winddirection" id="winddirection" size="0">
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
	      									</select>
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label">air pressure</label>
    					<div class="controls">
      						<input type="text" id="pressure" name="pressure"/>
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label" >temperature</label>
    					<div class="controls">
      						<input type="number" min="-60" max="60" name="temperature" id="temperature" />
						<select name="temperature_scales" size="0">
	     										<option>ºC</option>
	      										<option>ºF</option></select>
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label">clouds</label>
    					<div class="controls">
      						<select name="clouds" size="0">
	     										<option>Yes</option>
	      										<option>No</option></select>
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label" for="inputEmail">rains</label>
    					<div class="controls">
      						<select name="rain" size="0">
	     										<option>Yes</option>
	      										<option>No</option></select>
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label" >wave hight</label>
    					<div class="controls">
      						<input type="text" name="wave_hight" id="wave"/>
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label" for="inputEmail">wave direction</label>
    					<div class="controls">
      						<input type="text" name="wave_direction"/>
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label" >time</label>
    					<div class="controls">
      						<input type="time" name="observationtime">
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label" >date</label>
    					<div class="controls">
      						<input type="date" name="observationdate">
    					</div>
  						</div>
  						<div class="control-group">
    						<label class="control-label" ></label>
    					<div class="controls">
      						<button type="submit"> send </button>
    					</div>
  						</div>
  					</form>
				</div>
                </div>
                <div class="tab-pane" id="ValidateCoordinates">
                  <div class="container">
                  	<form class="form-horizontal">
                  		<div class="control-group">
    						<label class="control-label" >Coordinates</label>
    					<div class="controls">
      						<input type="text" id="coordintate_Input" name="coordinate"> <button class="btn btn-primary" id="validateCoordinate" type="button">validate</button>
    					</div>
                  	</form>
                  </div>
                </div>
              </div>
            </div>



  
<?php include("_includes/footer.php"); ?> 
