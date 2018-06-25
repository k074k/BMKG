<div class="container">
    <div class="container"  style="margin-bottom: 80px; margin-top: 70px">
        <div class="row">
          <!--Tabel Kiri -->
            <div class="col-lg-4">
                <ul class="nav nav-tabs" style="margin-top:25px">
                    <li class="active">
                        <a data-toggle="tab" href="#Gempa" style="font-size: 12px; font-weight: bold">Gempa Terakhir</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="Gempa" class="tab-pane fade in active">
                        <div style="margin-top:10px; background-color:white; height: 400px; box-shadow: 1px 1px 3px grey;" class="col-lg-12">
                          <nav style="width:100%;height:100%;overflow: auto;" >
                            <ul class="list-group" style="margin-top: 5%;">
                              <?php error_reporting(0); ?>
                              <?php $i=10; ?>
                              <?php foreach ($tb_gempa as $i) { ?>
                                <li class="list-group-item"><span class="badge"><?php echo $i->Magnitude ?>SR</span><?php echo $i->Keterangan;?></li>
                                <?php if ($i == 10) {
                                  break;
                                } else {
                                  $i++;
                                }
                                 ?>
                              <?php } ?>
                            </ul>
                          </nav>
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
                  <script>
                    function initMap() {
                      var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 8,
                        center: {lat:-8.0014771, lng: 114.6530128},
                      });
                      var image = '<?php echo base_url('assets/img/earthquake.png') ?>';

                      <?php foreach($tb_gempa as $t) {?>
                      var secretMessages = ['<?php echo $t->Keterangan ?>'];
                      for (var i = 0; i < secretMessages.length; ++i) {
                        var marker = new google.maps.Marker({
                          position: {
                            lat: <?php echo $t->Lintang ?>,
                            lng: <?php echo $t->Bujur ?>
                          },
                          map: map,
                          icon:image
                        });
                        attachSecretMessage(marker, secretMessages[i]);
                      }
                      <?php }?>
                    }

                    // Attaches an info window to a marker with the provided message. When the
                    // marker is clicked, the info window will open with the secret message.
                    function attachSecretMessage(marker, secretMessage) {
                      var infowindow = new google.maps.InfoWindow({
                        content: secretMessage
                      });

                      marker.addListener('click', function() {
                        infowindow.open(marker.get('map'), marker);
                      });
                    }
                  </script>

                  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcZJ8zBcGKVDzLH2fcwflexue9ZoiIoCY&callback=initMap"></script>
                  <div id="map" style="margin-top:10px; height: 400px; box-shadow: 1px 1px 3px grey; padding: 0px 0px 0px 0px" class="col-lg-12"></div>
            </div>
            <!--//Tabel Kanan -->
        </div>
    </div>
</div>
