<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=FALSE"></script>
	<script type="text/javascript">
	  function initialize() {

	  	var styles = [
					  {
					    "featureType": "landscape",
					    "elementType": "geometry",
					    "stylers": [
					      { "color": "#717074" }
					    ]
					  },{
					    "featureType": "road",
					    "elementType": "geometry",
					    "stylers": [
					      { "color": "#afafaf" }
					    ]
					  },{
					    "featureType": "water",
					    "elementType": "geometry",
					    "stylers": [
					      { "color": "#afafaf" }
					    ]
					  },{
					    "featureType": "poi",
					    "elementType": "geometry",
					    "stylers": [
					      { "color": "#808080" }
					    ]
					  },{
					    "featureType": "road",
					    "elementType": "labels.text.fill",
					    "stylers": [
					      { "color": "#2a2723" }
					    ]
					  }
					];

	  	var styledMap = new google.maps.StyledMapType(styles, {name: "Gmap stylée"});
	  	var myLatlng = new google.maps.LatLng(45.476746, -73.59226);


	    var mapOptions = {
	      center: myLatlng,
	      zoom: 16,
	      disableDefaultUI: true,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    var map = new google.maps.Map(document.getElementById("map-canvas"),
	        mapOptions);
	    var image = '/img/icon_mappin.png';
	    var marker = new google.maps.Marker({
		    position: myLatlng,
		    title:"Business name, 1001 Rue Lenoir, Suite B-521, Montréal",
		    icon: image
		});

		marker.setMap(map);
	    map.mapTypes.set('map_style', styledMap);
		map.setMapTypeId('map_style');
		var infowindow = new google.maps.InfoWindow({
			content: "BUSINESS NAME, 1001 Rue Lenoir, Suite B-521, Montréal",
			size: new google.maps.Size(100, 100)
		});

		google.maps.event.addListener(marker, 'click', function(){
			infowindow.open(map,marker);
		});
	  }
	  google.maps.event.addDomListener(window, 'load', initialize);
	</script>