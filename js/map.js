
$(document).ready(function() {
 initializeMap();
// alert("long: "+formatCoordinate("47°34.45‘N 009°59.99‘E", "long"));
//alert("lat: "+formatCoordinate("47°34.45‘N 009°59.99‘E", "lat"));
});
var currentPositionMarkerImage = new google.maps.MarkerImage('../img/icons/boat.png',
    new google.maps.Size(50, 50), //size
    new google.maps.Point(0, 0),  //origin point
    new google.maps.Point(25, 40)  //offset point
);

var temporaryMarkerImage = new google.maps.MarkerImage('../img/icons/cross_hair.png',
    new google.maps.Size(43, 43), //size
    new google.maps.Point(0, 0),  //origin point
    new google.maps.Point(22, 22)  //offset point
);

var fixedMarkerImage = new google.maps.MarkerImage('../img/icons/flag6.png',
    new google.maps.Size(40, 40), //size
    new google.maps.Point(0, 0),  //origin point
    new google.maps.Point(9, 32)  //offset point
);

var routeMarkerImage = new google.maps.MarkerImage('../img/icons/flag4.png',
    new google.maps.Size(40, 40), //size
    new google.maps.Point(0, 0),  //origin point
    new google.maps.Point(7, 34)  //offset point
);

var distanceMarkerImage = new google.maps.MarkerImage('../img/icons/flag5.png',
    new google.maps.Size(40, 40), //size
    new google.maps.Point(0, 0),  //origin point
    new google.maps.Point(7, 34)  //offset point
);

var destinationMarkerImage = new google.maps.MarkerImage('../img/icons/destination.png',
    new google.maps.Size(28, 31), //size
    new google.maps.Point(0, 0),  //origin point
    new google.maps.Point(7, 9)  //offset point
);

function MarkerWithInfobox(marker, infobox, counter) {
    this.reference = marker;
    this.infobox = infobox;
    this.counter = counter;
}
function initializeMap() {
    var mapTypeIds = ["roadmap", "satellite", "OSM"];
        var mapOptions = {
          center: new google.maps.LatLng(47.65,9.20),
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP, 
          mapTypeControlOptions: {
            mapTypeIds: mapTypeIds
        },       
        disableDefaultUI: true,
        mapTypeControl: true};

        var map = new google.maps.Map(document.getElementById("map_canvas"),mapOptions);


    currentPosition = new google.maps.LatLng(47.65,9.20)

    var currentMarkerOptions = {
        position: currentPosition,
        map: map,
        icon: currentPositionMarkerImage
    }
    currentPositionMarker = new google.maps.Marker(currentMarkerOptions);

    // set map types
    map.mapTypes.set("OSM", new google.maps.ImageMapType({
        getTileUrl: function (coord, zoom) {
            return "http://tile.openstreetmap.org/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
        tileSize: new google.maps.Size(256, 256),
        name: "OpenStreetMap",
        maxZoom: 18
    }));

    google.maps.event.addListener(currentPositionMarker, 'position_changed', function () {
        
        if (followCurrentPosition) {
            map.setCenter(currentPositionMarker.getPosition());
        }
        
        if (currentMode == MODE.NAVIGATION) {
            updateNavigation(currentPositionMarker.position, destinationMarker.position);
        }
    });

    map.overlayMapTypes.push(new google.maps.ImageMapType({
        getTileUrl: function (coord, zoom) {
            return "http://tiles.openseamap.org/seamark/" + zoom + "/" + coord.x + "/" + coord.y + ".png";
        },
       tileSize: new google.maps.Size(256, 256),
        name: "OpenSeaMap",
        maxZoom: 18
    }));

    overlay.draw = function () { };
    overlay.setMap(map);

    // click on map
    google.maps.event.addListener(map, 'click', function (event) {

        // handler for default mode
        if (currentMode == MODE.DEFAULT) {
            setTemporaryMarker(event.latLng);
        } else if (currentMode == MODE.ROUTE || currentMode == MODE.DISTANCE) {
            addRouteMarker(event.latLng);
        }
    });

    google.maps.event.addListener(map, 'center_changed', function () {
        if (followCurrentPosition && !noToggleOfFollowCurrentPositionButton) {
            toggleFollowCurrentPosition();
        } else {
            noToggleOfFollowCurrentPositionButton = false;
        }
    });

      }

function formatCoordinate(val, type) {
    var value = val.toString();

    if (/e.*/.test(value)) {
        value = "0";
    }

    value = value.replace(/\./, '\u00B0');

    value = value.replace(/[\u00B0].*/, function (s) {
        s = s.replace(/[\u00B0]/, '0.');
        s = parseFloat(s) * 60;
        s = s.toString();
        if (s.indexOf('.') == -1)
            s += ".";
        while (s.length < 5)
            s += "0";
        for (var j = s.indexOf('.') ; j < 2; j++)
            s = '0' + s;
        return '\u00B0' + s.substr(0, 5);
    });

    if (!/[\u00B0]/.test(value)) {
        value = value + "\u00B000.00";
    }

    value = value.replace(/.*[\u00B0]/, function (s) {
        var negative = false;
        if (s.substr(0, 1) == '-') {
            s = s.substring(1);
            negative = true;
        }
        var j = 3;
        if (type == "long")
            j++;

        for (var i = 0; s.length < j; i++)
            s = "0" + s;
        if (negative)
            s = "-" + s;

        return s;
    });


    if (type == "lat") {
        if (value.substr(0, 1) == "-") {
            value = value.substr(1);
            value = value + "\u2032S";
        } else {
            value = value + "\u2032N";
        }
        value = "Lat " + value;
    } else { // type == "long"
        if (value.substr(0, 1) == "-") {
            value = value.substr(1);
            value = value + "\u2032W";
        } else {
            value = value + "\u2032E";
        }
        value = "Long " + value;
    }

    return value;
}