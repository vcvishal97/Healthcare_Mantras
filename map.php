<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 400px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 28.7041, lng: 77.1025};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1hNCH5EApMxjEGL9uMNS7slINCqV-n1A&callback=initMap">
    </script>
	
	<br>
	<br>
	<br>
	<br>
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d28022.00948131355!2d77.16074434950889!3d28.607240285627835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shospitals+in+delhi!5e0!3m2!1sen!2sin!4v1498720863601" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <iframe src="https://www.google.com/maps/d/embed?mid=1dRKAWBVQIVNC73GUi2Q-QhoVgq4" width="100%" height="480"></iframe>
  
  <script>
  navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };</script>
	  
	  
	  <br>
	  <br>
	  <br>
	  <br>
	
	<iframe=  width="100%" height="250" style="margin:100px;"
  src="https://www.google.com/maps/embed/v1/search?key=AIzaSyA1tm8rAvwrMFSH7ialhLlC2z8lLYhvSpo&q=all+hospitals+in+delhi" allowfullscreen>
</iframe>
  </body>
</html>