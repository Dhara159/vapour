
<?php
  session_start();
  if (!isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == FALSE) 
  {
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 23.022505, lng: 72.571362},
          zoom: 15
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var lat = position.coords.latitude
            var lng = position.coords.longitude
            $.ajax({
	        	type:'POST',
	        	url:'getlocation.php',
	        	data:'latitude='+lat+'&longitude='+lng,
	        	success:function(msg)
	        	{
	            	if(msg)
	            	{ 		
	               		var marker = new google.maps.Marker({
          					position: pos,
	          				map: map,
          					title: "User's Location"
        				});
        				var locations = [
            				["Janta Garage",23.074768,72.535598],
            				["Mili Garagae",23.069196,72.511212],
            				["JLo Garagae", 23.067314,72.556714]];
        				var marker, i
						for (i = 0; i < locations.length + 1 ; i++)
 						{
 							// alert(locations[i][0])
 							var address = locations[i][0]
 							var lat = locations[i][1]
 							var long = locations[i][2]
 							latlngset = new google.maps.LatLng(lat, long);
  							var marker = new google.maps.Marker({  
          						map: map , position: latlngset  
        					});
  							var content = "<h3><b>"+address+"</b></h3>"
        					map.setCenter(marker.getPosition())
	  						var infowindow = new google.maps.InfoWindow()
							google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
    								return function() {
	        							infowindow.setContent(content);
        								infowindow.open(map,marker);
            							map.setCenter(pos);
    								};
							})(marker,content,infowindow));  
  						}
	            	}
	            	else
	            	{
	                	alert('Not Available');
	            	}
	        	}
	    	});
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhwtAm6mHy6brN3IeEOLIpbxIwE3cTwK4&callback=initMap">
    </script>
    
  </body>
</html>