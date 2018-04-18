<div class="container">
    <div class="container"  style="margin-bottom: 80px; margin-top: 70px">
        <div class="row">
          <!--Tabel Kiri -->
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
                        <div style="margin-top:10px; background-color:white; height: 400px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                        </div>
                    </div>
                    <div id="Gempa2" class="tab-pane fade">
                        <div style="margin-top:10px; background-color:white; height: 400px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                        </div>
                    </div>
                </div>
            </div>
            <!--//Tabel Kiri -->

            <!--Tabel Kanan -->
            <div class="col-lg-8">
                <ul class="nav nav-tabs" style="margin-top: 25px">
                    <li class="active" style="font-size: 12px; font-weight: bold"><a>Peta Gempabumi</a></li>
                </ul>
                  <!--Maps-->
                  <?php $m=date("m");?>
                  <script>
                    var citymap = {
                      <?php foreach($tb_gempa as $t) {?>
                        req<?php echo $t->IDGempa  ?>: {
                          center: {lat: <?php echo $t->Lintang ?>, lng: <?php echo $t->Bujur ?>},
                            <?php if ($t->Magnitude<=3) {
                              $p=10000;
                            }elseif ($t->Magnitude<=6) {
                              $p=25000;
                            }elseif ($t->Magnitude>6) {
                              $p=50000;
                            }?>
                          population:<?php echo $p ?>
                        },
                      <?php }?>
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
                          <?php if ($t->Magnitude>=300){
                            $c='#00FF00';
                          } elseif ($t->Magnitude>60||$t->Magnitude<300) {
                            $c='#FFFF00';
                          }elseif ($t->Magnitude<60) {
                            $c= '#FF0000';
                          }?>
                          fillColor:'<?php echo $c?>',
                          fillOpacity: 0.5,
                          map: map,
                          center: citymap[city].center,
                          radius: Math.sqrt(citymap[city].population) * 100
                        });
                      }
                    }
                  </script>
                  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcZJ8zBcGKVDzLH2fcwflexue9ZoiIoCY&callback=initMap"></script>
                  <div id="map" style="margin-top:10px; height: 400px; box-shadow: 1px 1px 3px grey; padding: 0px 0px 0px 0px" class="col-lg-12"></div>
            </div>
            <!--//Tabel Kanan -->
        </div>
    </div>
</div>
