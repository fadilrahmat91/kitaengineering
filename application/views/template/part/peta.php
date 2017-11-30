

  
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
		var pos={lat: 3.528333, lng: 98.619756};
        map = new google.maps.Map(document.getElementById('map'), {
          center:pos,
          zoom: 15
        });
		 var marker = new google.maps.Marker({
          position: pos,
          map: map
        });
		
      }
	 
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0w6PGjF4BIYc999YEWGoiC5OSnrM12QU&callback=initMap&region=id"
    async defer></script>
  