<?php
session_start();
error_reporting(0);
include 'includes/dbconnection.php';
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
        <?php include_once 'includes/header.php'; ?>
      
        <section id="heroSearch" class="hero-search mtop-100 pt-0 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="slider--content">
                            <div class="text-center">
                                <h1>Find Your Perfect Home</h1>
                            </div>
                            <form class="mb-0" method="post" name="search" action="property-search.php">
                                <div class="form-box search-properties">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="city" id="city">
                                        <option value="">Select City</option>
                                        <?php
                                        $query = mysqli_query(
                                            $con,
                                            'select distinct City from  tblproperty'
                                        );
                                        while (
                                            $row = mysqli_fetch_array($query)
                                        ) { ?>
                  <option value="<?php echo $row['City']; ?>"><?php echo $row[
    'City'
]; ?></option>
                  <?php }
                                        ?>
                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="type" id="type" required="true">
                                        <option value="">Select Property Type</option>
                                        <?php
                                        $query1 = mysqli_query(
                                            $con,
                                            'select * from tblpropertytype'
                                        );
                                        while (
                                            $row1 = mysqli_fetch_array($query1)
                                        ) { ?>      
                  <option value="<?php echo $row1[
                      'PropertType'
                  ]; ?>"><?php echo $row1['PropertType']; ?></option>
                  <?php }
                                        ?>
                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                      
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <div class="form-group">
                                                <div class="select--box">
                                                    <i class="fa fa-angle-down"></i>
                                                    <select name="status" id="status" required="true">
                                        <option value="">Select Any Status</option>
                                        <?php
                                        $query2 = mysqli_query(
                                            $con,
                                            'select distinct Status from  tblproperty'
                                        );
                                        while (
                                            $row2 = mysqli_fetch_array($query2)
                                        ) { ?>
                                        <option value="<?php echo $row2[
                                            'Status'
                                        ]; ?>"><?php echo $row2[
    'Status'
]; ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                     
                                        <div class="col-xs-12 col-sm-6 col-md-3">
                                            <input type="submit" value="Search" name="search" class="btn btn--primary btn--block">
                                        </div>
                                      
                                      
                                    </div>
                                 
                                </div>
                          
                            </form>
                        </div>
                    </div>
               
                </div>
             
            </div>
            <div class="carousel slider-navs" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800">
              
                <div class="slide--item bg-overlay bg-overlay-dark3">
                    <div class="bg-section">
                        <img src="assets/images/slider/slide-bg/3.jpg" alt="background">
                    </div>
                </div>
              
                <div class="slide--item bg-overlay bg-overlay-dark3">
                    <div class="bg-section">
                        <img src="assets/images/slider/slide-bg/1.jpg" alt="background">
                    </div>
                </div>
              
                <div class="slide--item bg-overlay bg-overlay-dark3">
                    <div class="bg-section">
                        <img src="assets/images/slider/slide-bg/3.jpg" alt="background">
                    </div>
                </div>
            
            </div>
        </section>
      
        <section id="properties-carousel" class="properties-carousel pt-90 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="heading heading-2 text-center mb-70">
                            <h2 class="heading--title">Latest Properties</h2>
                            <p class="heading--desc">Find Your Future Home</p>
                        </div>
                      
                    </div>
                 
                </div>
          
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
                           
                            <?php
                            $query = mysqli_query(
                                $con,
                                'select * from tblproperty order by rand() limit 9'
                            );
                            while ($row = mysqli_fetch_array($query)) { ?>
                            <div class="property-item">
                                <div class="property--img">
                                    <a href="single-property-detail.php?proid=<?php echo $row[
                                        'ID'
                                    ]; ?>">
                        <img src="propertyimages/<?php echo $row[
                            'FeaturedImage'
                        ]; ?>" alt="<?php echo $row[
    'PropertyTitle'
]; ?>" width='380' height='300'>
                        <span class="property--status"><?php echo $row[
                            'Status'
                        ]; ?></span>
                        </a>
                                </div>
                                <div class="property--content">
                                    <div class="property--info">
                                        <h5 class="property--title"><a href="single-property-detail.php?proid=<?php echo $row[
                                            'ID'
                                        ]; ?>">
    <?php echo $row['PropertyTitle']; ?></a></h5>
                                        <p class="property--location"><?php echo $row[
                                            'Address'
                                        ]; ?>&nbsp;
<?php echo $row['City']; ?>&nbsp;
<?php echo $row['State']; ?>&nbsp;  
<?php echo $row['Country']; ?></p>
                                        <p class="property--price"><?php echo $row[
                                            'RentorsalePrice'
                                        ]; ?></p>
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
                                            <li><span class="feature">Pool:</span><span class="feature-num"><?php echo $row[
                                                'Pool'
                                            ]; ?></span></li>
                                        </ul>
                                    </div>
                                  
                                </div>
                            </div>
                            <?php }
                            ?>


                        </div>
                    
                    </div>
                  
                </div>
             
            </div>
      
        </section>
        <div class="bodysec">
        <figure class="snip1157">
  <blockquote>REMS is an amazing platform to list properties. I am very happy.
    <div class="arrow"></div>
  </blockquote>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample3.jpg" alt="sq-sample3" />
  <div class="author">
    <h5>Pelican Steve <span> </span></h5>
  </div>
</figure>
<figure class="snip1157 hover">
  <blockquote>Very happy with the service. Very professional.
    <div class="arrow"></div>
  </blockquote>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample27.jpg" alt="sq-sample27" />
  <div class="author">
    <h5>Max Conversion<span></span></h5>
  </div>
</figure>
<figure class="snip1157">
  <blockquote>Admins are very helpful. They helped a lot with my issues and got it fixed very soon.
    <div class="arrow"></div>
  </blockquote>
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sq-sample17.jpg" alt="sq-sample17" />
  <div class="author">
    <h5>Eleanor Faint<span></span></h5>
  </div>
</figure>
</div>
        <div class="background">
    <div class="container1">
      <div class="screen">
       
        <div class="screen-body">
          <div class="screen-body-item left">
            <div class="app-title">
              <span>CONTACT</span>
              <span>US</span>
            </div>
            <div class="app-contact">CONTACT INFO : +91 9111450451</div>
          </div>
          <div class="screen-body-item">
            <div class="app-form">
              <div class="app-form-group">
                <input class="app-form-control" placeholder="NAME" value="Shriya Desai">
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="EMAIL">
              </div>
              <div class="app-form-group">
                <input class="app-form-control" placeholder="CONTACT NO">
              </div>
              <div class="app-form-group message">
                <input class="app-form-control" placeholder="MESSAGE">
              </div>
              <div class="app-form-group buttons">
                <button class="app-form-button">CANCEL</button>
                <button class="app-form-button">SEND</button>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
  

     
       <?php include_once 'includes/footer.php'; ?>
    </div>
   
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>
