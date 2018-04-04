<div class="container-fliud">
    <div class="container">
        <div class="row" style="margin-top: 80px;">
            <div class="col-lg-4">
                <ul class="nav nav-tabs" style="margin-top:25px">
                    <li class="active">
                        <a data-toggle="tab" href="#Gempa" style="font-size: 12px; font-weight: bold">Gempabumi M ≥ 5.0</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#Gempa2" style="font-size: 12px; font-weight: bold">Gempabumi Dirasakan</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="Gempa" class="tab-pane fade in active">
                        <div style="margin-top:10px; background-color:white; height: 300px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                        </div>
                    </div>
                    <div id="Gempa2" class="tab-pane fade">
                        <div style="margin-top:10px; background-color:white; height: 300px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-8">
                <ul class="nav nav-tabs" style="margin-top: 25px">
                    <li class="active" style="font-size: 12px; font-weight: bold"><a>Peta Gempabumi</a></li>
                </ul>
                  <!--Maps-->
                  <div id="map"></div>
                  <script>
                    // This example creates circles on the map, representing populations in North
                    // America.

                    // First, create an object containing LatLng and population for each city.
                    var citymap = {
                      chicago: {
                        center: {lat: -8.650000, lng: 115.216667},
                        population: 563300
                      }
                    };

                    function initMap() {
                      // Create the map.
                      var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 8,
                        center: {lat:-8.0014771, lng: 114.6530128},
                        mapTypeId: 'terrain'
                      });

                      // Construct the circle for each value in citymap.
                      // Note: We scale the area of the circle based on the population.
                      for (var city in citymap) {
                        // Add the circle for this city to the map.
                        var cityCircle = new google.maps.Circle({
                          strokeColor: '#FF0000',
                          strokeOpacity: 0.1,
                          strokeWeight: 2,
                          fillColor: '#FF0000',
                          fillOpacity: 0.20,
                          map: map,
                          center: citymap[city].center,
                          radius: Math.sqrt(citymap[city].population) * 100
                        });
                      }
                    }
                  </script>
                  <script async defer
                  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcZJ8zBcGKVDzLH2fcwflexue9ZoiIoCY&callback=initMap">
                  </script>
            </div>
        </div>
    </div>
</div>
