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
                    <div class="col-lg-3">
                        <form role="form">
                            <div class="form-group">
                                <select class="form-control" name="tahun">
                                    <option>---- Pilih Tahun ----</option>
                                    <?php 
                                    $year = date('Y'); 
                                    for ($i = 1994; $i <= $year; $i++)  {
                                    ?>
                                    <option><?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div id="grafik" style="margin-top: 5%; margin-bottom: 5%"></div>
                </div>
                <div id="metodologi" class="tab-pane fade" style="padding-bottom: 5%">
                    <div class="panel panel-default" >
                        <div class="panel-body">
                            SUM (Jumlah penguapan dalam sebulan/jumlah hari dalam sebulan(sum (n)/(n)))
                        </div>
                    </div>
                </div>
                <div id="alat" class="tab-pane fade">
                    <div class="col-lg-12" style="margin-bottom: 5%">
                        <h2><hr><center>Panci Penguapan</center><hr></h2><br>
                        <div class="col-lg-12">
                            <center>
                                <img src="<?php echo base_url('assets/img/alat/pancipenguapan.jpg') ?>" class="img-responsive">
                            </center>
                        </div>
                    </div>
                </div>
            </div> 

        <script type="text/javascript">
            Highcharts.chart('grafik', {
                title: {
                    text: 'GRAFIK PERBANDINGAN PENGUAPAN RATA-RATA TAHUN 2018 TERHADAP RATA-RATANYA'
                },
                subtitle: {
                    text: 'Stasiun Geofisika Sanglah'
                },
                yAxis: {
                    title: {
                        text: 'Values'
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle'
                },
                plotOptions: {
                    series: {
                        label: {
                            connectorAllowed: false
                        },
                        pointStart: 2010
                    }
                },

                series: [{
                    name: 'Installation',
                    data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
                }, {
                    name: 'Manufacturing',
                    data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
                }, {
                    name: 'Sales & Distribution',
                    data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
                }, {
                    name: 'Project Development',
                    data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
                }, {
                    name: 'Other',
                    data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
                }],

                responsive: {
                    rules: [{
                        condition: {
                            maxWidth: 500
                        },
                        chartOptions: {
                            legend: {
                                layout: 'horizontal',
                                align: 'center',
                                verticalAlign: 'bottom'
                            }
                        }
                    }]
                }
            });
		</script>
    </div>
</div>
</div>
