<!--header-->
<!DOCTYPE html>
<html lang="en">
<head>
    <head> 
        <!-- Theme Made By www.w3schools.com - No Copyright --> 
        <title>Stasiun Geofisika Sanglah</title>  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/java.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/highcharts.js'); ?>"></script>
        <script src="<?php echo base_url('assets/modules/series-label.js'); ?>"></script>
        <script src="<?php echo base_url('code/modules/exporting.js'); ?>"></script>
        <link href="<?php echo base_url('assets/img/icon.png') ?>" type="icon/x-image" rel="shortcut icon">
 
          <!-- CSS Map dan Grafik--> 
          <style type="text/css"> 
            #map { 
              height: 100%; 
              width:100%; 
              margin-top: 10px;
            }
              
            #container {
	           min-width: 310px;
	           max-width: 800px;
	           height: 400px;
	           margin: 0 auto
            } 
          </style>
    </head>

    <body style="background-color: #f1f1f1; background: url('<?php echo base_url('assets/img/bg.jpg'); ?>'); width: 100%">

           <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white; margin: 0 0 0 0; box-shadow: 0px 0px 5px;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand" style="padding-top: 10px;">
                        <ul>
                        <span> 
                            <a href="<?php echo base_url(''); ?>">
                                <img src="<?php echo base_url('assets/img/logo.png') ?>" width="30px">
                            </a>
                        </span> 
                        <span class="hidden-xs hidden-md" style="font-weight:bold; color:black; font-size: 14px" >
                            STASIUN GEOFISIKA SANGLAH
                        </span> 
                        </ul>
                    </div> 
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right" style="font-size: 12px; font-weight: bold;">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">PROFILE<span class="sr-only">(current)</span>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="font-size: 14px">
                                <li><a href="<?php echo base_url('profile'); ?>">Sejarah</a></li>
                                <li><a href="<?php echo base_url('profile/visidanmisi'); ?>">Visi dan Misi</a></li>
                                <li><a href="<?php echo base_url('profile/struktur'); ?>">Struktur Organisasi</a></li> 
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('meteorologi'); ?>">METEOROLOGI</a></li>
                        <li><a href="<?php echo base_url('klimatologi'); ?>">KLIMATOLOGI</a></li>
                        <li><a href="<?php echo base_url('geofisika'); ?>">GEOFISIKA</a></li>
                        <li><a href="<?php echo base_url('publikasi/layananOnline'); ?>">LAYANAN ONLINE</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="">PUBLIKASI
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="font-size: 14px">
                                <li><a href="<?php echo base_url('publikasi'); ?>">Buletin</a></li>
                                <li><a href="<?php echo base_url('publikasi/artikel'); ?>">Artikel</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> <!-- /.navbar-collapse -->
            </div>
        </nav>
        
<!--/.header-->
