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
   
    <title>Real Estate Management System|| About Us</title>
</head>

<body>

<style>


.container {
  max-width: 900px;
  display: flex;
  justify-content: space-evenly;
  margin: 0 auto;
}

.card-wrapper {
  width: 400px;
  height: 500px;
  position: relative;
}

.card {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 350px;
  height: 450px;
  transform: translate(-50%, -50%);
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 5px 18px rgba(0, 0, 0, 0.6);
  cursor: pointer;
  transition: 0.5s;
  

  
 
}
.cardimg{
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #000;
    transition: .5s;
  }
  .card:hover img {
    opacity: 0.4;
    transition: .5s;
  }

.card:hover .cardimg {
  transform: translateY(-100px);
  transition: all .9s;
}

/**** Social Icons *****/

.social-icons {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 3;
  display: flex;
  
 
}
.liicon{
    list-style: none;
}
.aicon{
    position: relative;
      display: block;
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      background: #fff;
      font-size: 23px;
      color: #333;
      font-weight: bold;
      margin: 0 6px;
      transition: .4s;
      transform: translateY(200px);
      opacity: 0;
}
.card:hover .social-icons li a {
  transform: translateY(0px);
  opacity: 1; 
}

.social-icons li a:hover {
  background: #000; 
  transition: .2s;
  
}
.fabb {
    color: #fff;
  } 
.social-icons li a .fab {
  transition: .8s;
    
 
}
.social-icons li a .fab :hover {
      transform: rotateY(360deg);
      color: #fff;
  } 
.card:hover li:nth-child(1) a {
    transition-delay: 0.1s;
}
.card:hover li:nth-child(2) a {
  transition-delay: 0.2s;
}
.card:hover li:nth-child(3) a {
  transition-delay: 0.3s;
}
.card:hover li:nth-child(4) a {
  transition-delay: 0.4s;
}

/**** Personal Details ****/

.details {
  position: absolute;
  bottom: 0;
  left: 0;
  background: #fff;
  width: 100%;
  height: 120px;
  z-index: 1;
  padding: 10px;

 
}
.h2cl {
    margin: 30px 0;
    padding: 0;
    text-align: center;
     font-size:25px;
    
  }
.titleaa {
        font-size: 15px;
        line-height: 2.5rem;
        color: #333;
        font-weight: 100;
    }
.jane {
  position: absolute;
  bottom: -120px;
  left: 0;
  opacity: 0;
  background: #fff;
  width: 100%;
  height: 120px;
  z-index: 3;
  padding: 10px;
  transition: .4s;
}

.profile-two .social-icons li a {
  border-radius: 50%;
}

.card:hover .profile-img--two {
  transform: rotateY(180deg);
}

.card:hover .jane {
  bottom: 0;
  left: 0;
  transition-delay: 0.5s;
  opacity: 1;
}




</style>
   
    <div id="wrapper" class="wrapper clearfix">
        <?php include_once 'includes/header.php'; ?>

      
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
                                    <h1>About</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">About</li>
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                       
                    </div>
                   
                </div>
              
            </div>
            
        </section>
      
    
      
        <div class="container">
    
    <div class="card-wrapper">
      
      <div class="card">
        
        <div class="cardimg">
          <img src="https://image.ibb.co/dUTfmJ/profile_img.jpg" alt="profile one">
        </div>

      <ul class="social-icons">
        <li class="liicon">
          <a class="aicon" href="">
            <i class="fab  fabb fa-facebook-f"></i>
          </a>
        </li>
        <li class="liicon">
          <a class="aicon" href="">
            <i class="fab fabb fa-instagram"></i>
          </a>
        </li>
        <li class="liicon">
          <a class="aicon" href="">
            <i class="fab fabb fa-twitter"></i>
          </a>
        </li>
      
      </ul>

      <div class="details">
        <h2 class="h2cl">Shashank Upadhyaya
          <br>
          <span class="titleaa">CSE Student</span>
        </h2>
      </div>
    </div>
  </div><!-- end box wrapper --> 
    
    
<div class="card-wrapper">
      
      <div class="card profile-two">
        
        <div class="cardimg profile-img--two">
          <img src="https://image.ibb.co/c9rY6J/profile02.jpg" alt="profile two">
        </div>

        <ul class="social-icons">
          <li class="liicon">
            <a class="aicon" href="">
              <i class="fab fabb fa-facebook-f"></i>
            </a>
          </li>
          <li class="liicon">
            <a class="aicon" href="">
              <i class="fab fabb fa-instagram"></i>
            </a>
          </li>
          <li class="liicon">
            <a class="aicon" href="">
              <i class="fab fabb fa-twitter"></i>
            </a>
          </li>
          <li class="liicon">
            <a class="aicon" href="">
              <i class="fab fabb fa-dribbble"></i>
            </a>
          </li>
        </ul>

        <div class="details jane">
            <h2 class="h2cl">Shriya Desai
              <br>
              <span class="titleaa">CSE Student</span>
            </h2>
        </div>
    </div>
 </div><!-- END box wrapper -->
     
 </div><!-- END container -->

      
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
    <script src="https://kit.fontawesome.com/3a07c9e595.js" crossorigin="anonymous"></script>
</body>

</html>