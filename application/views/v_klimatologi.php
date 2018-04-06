<div class="container">
    <div class="container"  style="margin-bottom: 80px; margin-top: 70px">
        <div class="row" style="margin-top: 25px">
          <!--Tabel Kiri -->
            <div class="col-lg-4">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#CurahHujan" style="font-size: 12px; font-weight: bold">Perkiraan Curah Hujan</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="CurahHujan" class="tab-pane fade in active">
                        <div style="margin-top:10px; background-color:white; height: 150px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                        </div>
                    </div>
                </div>
                
                <ul class="nav nav-tabs" >
                    <li class="active">
                        <a data-toggle="tab" href="#SifatHujan" style="font-size: 12px; font-weight: bold; margin-top:50px">Perkiraan Curah Hujan</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="SifatHujan" class="tab-pane fade in active">
                        <div style="margin-top:10px; background-color:white; height: 150px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                        </div>
                    </div>
                </div>
            </div>
            <!--//Tabel Kiri -->
            
            <!--Tabel Kanan -->
            <div class="col-lg-8">
                <ul class="nav nav-tabs" >
                    <li class="active" style="font-size: 12px; font-weight: bold"><a>Peta Klimatologi</a></li>
                </ul>
                <div id="map" style="margin-top:10px; height: 400px; box-shadow: 1px 1px 3px grey; padding: 0px 0px 0px 0px" class="col-lg-12">
                  <!--Maps-->
                  <script>
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

                      for (var city in citymap) {
                        var cityCircle = new google.maps.Circle({
                          strokeColor: '#FF0000',
                          strokeOpacity: 0.1,
                          strokeWeight: 2,
                          fillColor: '#FF0000',
                          fillOpacity: 0.35,
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
            <!--//Tabel Kanan -->
        </div>
    </div>
</div>