<div class="container" style="margin-top: 70px">
    <div class="col-lg-12" style="margin-left: 3%">
        <div class="row">
            <h3>Meteorologi</h3>
        </div>
    </div>
</div>

<div class="col-lg-12" style="background-color: white; margin-top: 25px; box-shadow: 1px 1px 1px;">
<div class="container">
    <div class="col-lg-12" style="margin-bottom: 65px; margin-top: 3%">
        <ul class="nav nav-tabs" style="margin-top:25px; margin-bottom: 3%">
          <li class="active">
            <a data-toggle="tab" href="#data" style="font-size: 12px; font-weight: bold">Data</a>
          </li>
          <li >
            <a data-toggle="tab" href="#alat" style="font-size: 12px; font-weight: bold">Alat</a>
          </li>
          <li>
            <a data-toggle="tab" href="#metodologi" style="font-size: 12px; font-weight: bold">Metodologi</a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="data" class="tab-pane fade in active">
            <div class="row">
              <!--Grafik-->
              <div class="col-lg-4">
                <div id="grafik" style="margin-top: 5%"></div>
              </div>
              <!--Peta-->
              <div class="col-lg-8">
                <script>
                function initMap() {
                  var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 8,
                    center: {lat:-8.0014771, lng: 114.6530128},
                  });

                  var secretMessages = 'Denpasar, 5 SR ,100m';
                  var image = '<?php echo base_url('assets/icon/iconStorm.png'); ?>';
                  var marker = new google.maps.Marker({
                    position: {
                      lat: -8.6769762 ,
                      lng: 115.2096427
                    },
                    map: map,
                    icon:image
                  });
                  attachSecretMessage(marker, secretMessages);
                }
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
              <div id="map" style="margin-top:10px; height: 400px; box-shadow: 1px 1px 3px grey; "></div>
            </div>
          </div>
        </div>
        <!--Metodelogi-->
        <div id="metodologi" class="tab-pane fade" style="padding-bottom: 5%">
          <div class="panel panel-default" >
            <div class="panel-body">
              1. HXAV = Rata-rata Kelembaban Max (AVG Of Max)
              <br>
              <br>
              2. HNAV = Rata-rata Kelembaban Min (AVG Of Min)
              <br>
              <br>
              3. HAV = Rata-rata Kelembaban  (Average Of AVG)
              <br>
              <br>
              4. HXAbs = Kelembaban Maximum Tertinggi (Max(Terhadap jumlah data))
              <br>
              <br>
              5. HNAbs = Kelembaban Minimum Terendah (Min(Terhadap jumlah data))
            </div>
          </div>
        </div>
        <!--Alat-->
        <div id="alat" class="tab-pane fade">

        </div>
      </div>
      <script type="text/javascript">
        Highcharts.chart('grafik', {
        chart: {
          type: 'column'
        },
        title: {
          text: 'Data Petir'
        },
        subtitle: {
          text: 'Stasiun Geofisika Sanglah'
        },
        xAxis: {
          type: 'category'
        },
        yAxis: {
          title: {
            text: 'Petir(%)'
          }
        },
        legend: {
          enabled: false
        },
        plotOptions: {
          series: {
            borderWidth: 0,
            dataLabels: {
              enabled: true,
              format: '{point.y:.1f}%'
            }
          }
        },
        tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b><br/>'
        },

        "series": [
          {
            "name": "Data Petir",
            "colorByPoint": true,
            "data": [
              {
                "name": "CG++",
                "y": 62.74
              },
              {
                "name": "CG--",
                "y": 10.57
              },
              {
                "name": "CLD",
                "y": 7.23
              },
              {
                "name": "SUM",
                "y": 5.58
              }
            ]
          }
        ]
      });
    </script>
    </div>
</div>
</div>
