<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    
  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
 
    <title>REMS</title>
</head>

<body>
    
    <div id="wrapper" class="wrapper clearfix">
         <?php include_once('includes/header.php');?>

      
        <section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            <div class="bg-section">
                <img src="assets/images/page-titles/1.jpg" alt="Background" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>Contact</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Contact</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      
                    </div>
                
                </div>
           
            </div>
        
        </section>
      
        <section id="contact" class="contact contact-1">
            <div class="container">
                <div class="row">
                    <?php

                    
$ret=mysqli_query($con,"select * from tblpage where PageType='contactus'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="heading heading-2 mb-55">
                            <h2 class="heading--title">Get In Touch</h2>
                        </div>
                        <div class="contact-panel">
                            <h3>Address</h3>
                            <p><?php  echo $row['PageDescription'];?></p>
                        </div>
                     
                        <div class="contact-panel">
                            <h3>Phone:</h3>
                            
                            <p>+<?php  echo $row['MobileNumber'];?></p>
                        </div>
                     
                        <div class="contact-panel">
                            <h3>Email:</h3>
                            <p><?php  echo $row['Email'];?></p>
                        </div>
                    
                    </div>
               

                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-1 bg-white p-30 bg-white">
                    
                        <div class="about--img"><img class="img-responsive" src="assets/images/about/images.jpg" width="2000" height="2000" alt="about img"></div>
                    </div>
                   
                </div>
               <?php } ?>
            </div>
        </section>
      
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Join our professional team & agents to start selling your house</h3>
                       <a href="contact.php" class="btn btn--primary">Contact</a>
                    </div>
                
                </div>
              
            </div>
         
        </section>
      
        <?php include_once('includes/footer.php');?>
    </div>
   
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="assets/js/plugins/jquery.gmap.min.js"></script>
    <script>
        $('#googleMap').gMap({
            address: "121 King St,Melbourne, Australia",
            zoom: 12,
            maptype: 'ROADMAP',
            markers: [{
                address: "Melbourne, Australia",
                maptype: 'ROADMAP',
                icon: {
                    image: "assets/images/gmap/marker1.png",
                    iconsize: [52, 75],
                    iconanchor: [52, 75]
                }
            }]
        });

    </script>
    <script src="assets/js/map-custom.js"></script>
</body>

</html>
