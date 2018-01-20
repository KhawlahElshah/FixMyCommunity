 
 

 <div id="showmap"></div>

<script>
//var locations= '<?php echo $locations ?>';

var locations = [
@foreach($locations as $location)
  [{{$location->lat}}, {{$location->lng}}], //YOU NEED A COMMA TO SEPARATE EACH ELEMENT
@endforeach
];


</script>
  
      
     <script type="text/javascript" src="/js/showmap.js"></script>
    {{--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7BEKc2Jcft1RWKVsGXqz7iPGQuheSgko&callback=initMap">  --}}
    </script>