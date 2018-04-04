<!--header-->
<!DOCTYPE html>
<html lang="en">
<head>
    <head> 
        <!-- Theme Made By www.w3schools.com - No Copyright --> 
        <title>Stasiun Geofisika Sanglah</title>  
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-hover-dropdown/2.2.1/bootstrap-hover-dropdown.min.js"></script> 
         
 
        <!-- BootStrap dan JavaScript Offline --> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>"> 
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>"> 
        <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script> 
        <script src="<?php echo base_url('assets/js/npm.js'); ?> "></script> 
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?> "></script> 
         
 
          <!-- CSS --> 
          <style> 
            #map { 
              height: 100%; 
              width:100%; 
              margin-top: 10px; 
            } 
          </style>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="60" style="background-color: #f1f1f1">
        
        <nav class="navbar navbar-default navbar-fixed-top" style="background-color:white">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" style="margin-top: 25px;">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand" style="height: 80px">
                        <span>
                            <img src="<?php echo base_url('assets/img/logo.png') ?>" width="50px">
                        </span>
                        <span class="hidden-xs hidden-md" style="font-weight:bold; color:black; font-size: 15px" >STASIUN GEOFISIKA SANGLAH</span>
                    </div>
                </div>
                
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right" style="font-size:12px; padding-top:15px">
                        <li class="dropdown">
                            <a style="font-weight:bold; color:black" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="false">
                            PROFILE <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu" style="margin-top: 15px; width: 215px;">
                                <li><a tabindex="-1" href="#">My Account</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#">Change Email</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#">Change Password</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="#">Logout</a></li>
                            </ul>
                        </li>
                        <li><a href="#portfolio" style="font-weight:bold; color:black">METEOROLGI</a></li>
                        <li><a href="#pricing" style="font-weight:bold; color:black">KLIMATOLOGI</a></li>
                        <li><a href="#contact"style="font-weight:bold; color:black">PUBLIKASI</a></li>
                        <li><a href="#contact" style="font-weight:bold; color:black">LAYANAN ONLINE</a></li>
                        <li><a href="#contact" style="font-weight:bold; color:black">ARTIKEL</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
<!--//header-->
