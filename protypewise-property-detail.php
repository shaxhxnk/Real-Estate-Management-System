<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>REMS</title>
</head>

<body>
  
    <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1 header-light header-fixed">
   <?php include_once 'includes/header.php'; ?>

        </header>
      
        <?php include_once 'includes/header-search.php'; ?>
    
       
               
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="properties-filter clearfix">
                                  
                                    
                                    <div class="view--type pull-right">
                                        <a id="switch-list" href="#" class=""><i class="fa fa-th-list"></i></a>
                                        <a id="switch-grid" href="#" class="active"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="properties properties-grid">
                           

<?php
$protypeid = $_GET['protypeid'];
$query = mysqli_query(
    $con,
    "select * from tblproperty where Type='$protypeid'"
);
$num = mysqli_num_rows($query);
while ($row = mysqli_fetch_array($query)) { ?>

                                <div class="col-xs-12 col-sm-6 col-md-6">
                                 
                                    <div class="property-item">
                                        <div class="property--img">
<a href="single-property-detail.php?proid=<?php echo $row['ID']; ?>">
<img src="propertyimages/<?php echo $row[
    'FeaturedImage'
]; ?>" alt="property image" class="img-responsive" >
                                </a>
<span class="property--status"><?php echo $row['Status']; ?></span>
 </div>
 <div class="property--content">
<div class="property--info">
 <h5 class="property--title">
<a href="single-property-detail.php?proid=<?php echo $row['ID']; ?>">
    <?php echo $row['PropertyTitle']; ?></a></h5>
<p class="property--location"><?php echo $row['Address']; ?>&nbsp;
<?php echo $row['City']; ?>&nbsp;
<?php echo $row['State']; ?>&nbsp;  
<?php echo $row['Country']; ?></p>
<p class="property--price"><?php echo $row['RentorsalePrice']; ?></p>
 </div>
                                        
<div class="property--features">
<ul class="list-unstyled mb-0">
<li><span class="feature">Beds:</span><span class="feature-num"><?php echo $row[
    'Bedrooms'
]; ?></span></li>
<li><span class="feature">Baths:</span><span class="feature-num"><?php echo $row[
    'Bathrooms'
]; ?></span></li>
<li><span class="feature">Area:</span><span class="feature-num"><?php echo $row[
    'Area'
]; ?></span></li>
</ul>
</div>
                                            
                                        </div>
                                    </div>
                                </div>
<?php }
?>

                             
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-50">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                        </a>
                                    </li>
                                </ul>
                            </div>
                        
                        </div>
                       
                    </div>
               
                </div>
          
            </div>
         
        </section>
   

  
        <section id="cta" class="cta cta-1 text-center bg-overlay bg-overlay-dark pt-90">
            <div class="bg-section"><img src="assets/images/cta/bg-1.jpg" alt="Background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <h3>Join our professional team & agents to start selling your house</h3>
                        <a href="#" class="btn btn--primary">Contact</a>
                    </div>
                
                </div>
             
            </div>
         
        </section>
     
     
         <?php include_once 'includes/footer.php'; ?>
    </div>
  
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true&amp;key=AIzaSyCiRALrXFl5vovX0hAkccXXBFh7zP8AOW8"></script>
    <script src="assets/js/plugins/jquery.gmap.min.js"></script>
    <script src="assets/js/map-addresses.js"></script>
    <script src="assets/js/map-custom.js"></script>
</body>

</html>
