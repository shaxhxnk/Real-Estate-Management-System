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
   <?php include_once('includes/header.php');?>

        </header>
        
        <?php include_once('includes/header-search.php');?>
       
        <section id="properties-grid" style="margin-top:-10%">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4">
                   

                        <div class="widget widget-property">
                           
                            <div class="widget--title">
                                <h5>Property Type</h5>
                            </div>

                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <?php
$query3=mysqli_query($con,"select distinct Type from  tblproperty");
while($row3=mysqli_fetch_array($query3))
{
?>
                                    <li>
                                        <a href="protypewise-property-detail.php?protypeid=<?php echo $row3['Type'];?>"><?php echo $row3['Type'];?></a>


                                    </li>
                                    <?php } ?>
                                   
                                </ul>
                            </div>
                        </div>
                        
                     
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Property Status</h5>
                            </div>
                            <div class="widget--content">
                                <?php
$query4=mysqli_query($con,"select distinct Status from  tblproperty");
while($row4=mysqli_fetch_array($query4))
{
?>
                                <ul class="list-unstyled mb-0">
                                    <li>
                                       <a href="statuswise-property-detail.php?stproid=<?php echo $row4['Status'];?>"><?php echo $row4['Status'];?></a>
                                    </li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                        </div>
                     
                        <div class="widget widget-property">
                            <div class="widget--title">
                                <h5>Property By City</h5>
                            </div>
                            <div class="widget--content">
                                <ul class="list-unstyled mb-0">
                                    <?php
$query5=mysqli_query($con,"select distinct City from  tblproperty");
while($row5=mysqli_fetch_array($query5))
{
?>
                                    <li>
                                       <a href="citywise-property-detail.php?cityproid=<?php echo $row5['City'];?>"><?php echo $row5['City'];?></a>
                                    </li>
                                    
                                    <?php } ?>
                                   
                                </ul>
                            </div>
                        </div>
                      
                    </div>
                
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
$city=$_POST['city'];
$type=$_POST['type'];
$status=$_POST['status'];
$query=mysqli_query($con,"select tblproperty.*,tblcountry.CountryName,tblstate.StateName from tblproperty join tblcountry on tblcountry.ID=tblproperty.Country join tblstate on tblstate.ID=tblproperty.State where(tblproperty.City='$city' and tblproperty.Type='$type' and tblproperty.Status='$status')");
$num=mysqli_num_rows($query);
if($num>0){
while($row=mysqli_fetch_array($query))
{
?>

                                <div class="col-xs-12 col-sm-6 col-md-6" width='300' height='300'>
                                  
                                    <div class="property-item">
                                        <div class="property--img">
<a href="single-property-detail.php?proid=<?php echo $row['ID'];?>">
<img src="propertyimages/<?php echo $row['FeaturedImage'];?>" alt="<?php echo $row['PropertyTitle'];?>"  width='380' height='300'>
                                </a>
<span class="property--status"><?php echo $row['Status'];?></span>
 </div>
 <div class="property--content">
<div class="property--info">
 <h5 class="property--title">
<a href="single-property-detail.php?proid=<?php echo $row['ID'];?>">
    <?php echo $row['PropertyTitle'];?></a></h5>
<p class="property--location"><?php echo $row['Address'];?>&nbsp;
<?php echo $row['City'];?>&nbsp;
<?php echo $row['StateName'];?>&nbsp;  
<?php echo $row['CountryName'];?></p>
<p class="property--price"><?php echo $row['RentorsalePrice'];?></p>
 </div>
                                           
<div class="property--features">
<ul class="list-unstyled mb-0">
<li><span class="feature">Beds:</span><span class="feature-num"><?php echo $row['Bedrooms'];?></span></li>
<li><span class="feature">Baths:</span><span class="feature-num"><?php echo $row['Bathrooms'];?></span></li>
<li><span class="feature">Area:</span><span class="feature-num"><?php echo $row['Area'];?></span></li>
</ul>
</div>
                                         
                                        </div>
                                    </div>
                                </div>
<?php }} else{ ?>

           <h2 align="center" style="color:red">No Record found</h2>

           <?php }?>                  
                            </div>
                     
                            
                        </div>
                      
                    </div>
                
                </div>
             
            </div>
           
        </section>
       
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
  
   
       <?php include_once('includes/footer.php');?>
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
