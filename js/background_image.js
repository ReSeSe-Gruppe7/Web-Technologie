

// -----------------------------------------------------------------------------------------------------------------//
// Background Image

$(document).ready(function() {
	  // Handler for .ready() called.

	var time=10000;
	var image=new Array();
	image[0]="url(../img/bodypicture.jpg)";
	image[1]="url(../img/bodypicture_abend.jpg)";
	image[2]="url(../img/bodypicture_nachts.jpg)";
  image[3]="url(../img/herbst.jpg)";


	var tmp ="0";

	function changePIC(){

	document.getElementById('body').style.background=image[tmp];
	//$('#body').css("background-picture", picture[tmp]);
var now = new Date();
var hrs = now.getHours(); 

if (hrs >  0) tmp = 2; // REALLY early
if (hrs >  6) tmp = 3;      // After 6am
if (hrs > 12) tmp = 0;    // After 12pm
if (hrs > 17) tmp = 1;      // After 5pm
if (hrs > 22) tmp = 1;        // After 10pm


	//tmp++;
	if(tmp == image.length){
		tmp=0;
	}
  document.body.style.backgroundSize = '100% 200%';
	document.body.style.backgroundRepeat = 'no-repeat';


/*
	for (var i = 0; i < images.length; i++) {
	    var image = images[i],
	        width = String(image.currentStyle.width);

	    if (width.indexOf('%') == -1) {
	        continue;
	    }

	    image.origWidth = image.offsetWidth;
	    image.origHeight = image.offsetHeight;

	    imgCache.push(image);
	    c.ieAlpha(image);
	    image.style.width = width;
	}
*/

	setTimeout(changePIC,time);

	}

	changePIC();
});

// -----------------------------------------------------------------------------------------------------------------//
// MAP
var map;

function initialize() {
  var mapOptions = {
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        //content: 'Location found using HTML5.'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}

//google.maps.event.addDomListener(window, 'load', initialize);

// -----------------------------------------------------------------------------------------------------------------//
// Weathermap

function init() {
  //Center of map
  var lat = 7486473; 
  var lon = 4193332;
  var lonlat = new OpenLayers.LonLat(lon, lat);
        var map = new OpenLayers.Map("basicMap");
  // Create overlays
  //  OSM
        var mapnik = new OpenLayers.Layer.OSM();
  // Stations
  var stations = new OpenLayers.Layer.Vector.OWMStations("Stations");
  // Current weather
  var city = new OpenLayers.Layer.Vector.OWMWeather("Weather");
  //Addind maps
  map.addLayers([mapnik, stations, city]);
  map.setCenter( lonlat, 10 );
}