// var map;

// //var markers = document.getElementById("locations"); //this should dump a javascript array object which does not need any extra interperting.
// // var markers= <?php echo json_encode($php_variable); ?>
// alert(markers);
// var marks = []; //just incase you want to be able to manipulate this later

// function initMap() {
//     var uluru = {lat: 32.885353, lng: 13.180161};
//      map = new google.maps.Map(document.getElementById('showmap'), {
//       zoom: 10,
//       center: uluru
//     });


var map;
//var marker = false;

      function initMap() {
        var uluru = {lat: 32.885353, lng: 13.180161};
         map = new google.maps.Map(document.getElementById('showmap'), {
          zoom: 10,
          center: uluru
        });
    

       
          
// var lat = parseFloat(locations[0]);
// var lon = parseFloat(locations[1]);

for (i = 0; i < locations.length; i++) {
    var location = new google.maps.LatLng(locations[i][0], locations[i][1]);

    var marker = new google.maps.Marker({
        position: location,
        map: map,
    }); 
}

}
      

google.maps.event.addDomListener(window, "load", initMap);

// function markerLocation(){
//     //Get location.
//     var currentLocation = marker.getPosition();
//     //Add lat and lng values to a field that we can save.
//     document.getElementById('lat').value = currentLocation.lat(); //latitude
//     document.getElementById('lng').value = currentLocation.lng();
        


//         //Listen for any clicks on the map.
//     google.maps.event.addListener(map, 'click', function(event) {                
//         //Get the location that the user clicked.
//         var clickedLocation = event.latLng;
//         //If the marker hasn't been added.
//         if(marker === false){
//             //Create the marker.
//             marker = new google.maps.Marker({
//                 position: clickedLocation,
//                 map: map,
//                 draggable: true //make it draggable
//             });
//             //Listen for drag events!
//             google.maps.event.addListener(marker, 'dragend', function(event){
//                 markerLocation();
//             });
//         } else{
//             //Marker has already been added, so just change its location.
//             marker.setPosition(clickedLocation);
//         }
//         //Get the marker's location.
//         markerLocation();
//     });



//       }
// function markerLocation(){
//     //Get location.
//     var currentLocation = marker.getPosition();
//     //Add lat and lng values to a field that we can save.
//     document.getElementById('lat').value = currentLocation.lat(); //latitude
//     document.getElementById('lng').value = currentLocation.lng();
        
      
      // google.maps.event.addDomListener(window, 'load', initMap);