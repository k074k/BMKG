<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/java.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/highcharts.js'); ?>"></script>
<script src="<?php echo base_url('assets/modules/series-label.js'); ?>"></script>
<script src="<?php echo base_url('code/modules/exporting.js'); ?>"></script>
<link href="<?php echo base_url('assets/img/icon.png') ?>" type="icon/x-image" rel="shortcut icon">
<div class="panel panel-default">
	<div class="panel-heading">Highcharts Codeigniter</div>
		<div class="panel-body">
			<div class="form-group">    
				<div class="col-md-12">
				
					<div id="grafik"></div>
					
				</div>
			</div>  		
	    </div>
</div>
<script type="text/javascript">
            Highcharts.chart('grafik', {
                title: {
   					text: 'Grafik Statistik pengunjung',
					x: -20
  				},
                subtitle: {
   					text: 'Count visitor',
   					x: -20
  				},
                xAxis: {
                	categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des']
                },
                yAxis: {
                    title: {
                        text: 'Kelembapan(%)'
                    }
                },

                series: [{
                    name: 'Installation',
                    data: [<?php foreach ($jan as $key) {
                    	echo sprintf('%.1f', (round($key->Bln,1,PHP_ROUND_HALF_UP))).",";
                    } ?>
                    <?php foreach ($feb as $key) {
                    	echo sprintf('%.1f', (round($key->Bln,1,PHP_ROUND_HALF_UP))).",";
                    } ?>
                    <?php foreach ($mar as $key) {
                    	echo sprintf('%.1f', (round($key->Bln,1,PHP_ROUND_HALF_UP))).",";
                    } ?>
                    ]
                }]
            });
		</script>
-->
<?php
$monthData = [];

$_tmpMonth = '';

foreach ($Iklim as $key) {
	if($key->BulanIklim != $_tmpMonth)	{
		$_tmpMonth = $_val->BulanIklim;
	}

	$monthData[$_tmpMonth][] = array(
		""
	);
}
?>