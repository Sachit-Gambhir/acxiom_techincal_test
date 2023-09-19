<!DOCTYPE html>
<?php 
session_start();
include("functions/functions.php");
include("includes/db.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CAPO's Event Solutions</title>
</head>
<body>
    <!--Navbar Starts Here-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="font-size:21px;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src=images/logo_n.jpg style="height:100px;" /></a>
        <div class="d-flex">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"><i class="fas fa-home"></i>&nbsp;</a>
              </li>
              <li class="nav-item">
                <?php
					        if(isset($_SESSION['USER_NAME'])){
						        echo" <a class='nav-link active' href='user/my_acc.php'><h4 style='color:yellow;text-decoration:underline;'>Hi! &nbsp;".$_SESSION['USER_NAME'].'(My Account)'."</h4></a>";
					        }
					        else {
						        echo"<a class='nav-link' href='user/login.php'>Login</a>";
					        }
				        ?>
				      </li>
              <li class="nav-item">
                <?php
					        if(isset($_SESSION['USER_NAME'])){
						        echo" <a class='nav-link active' href='logout.php'>Logout</a>";
					        }
                ?>      
              </li>
              <li><a class='nav-link' href='vendors.php'>Vendors</a></li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
            </ul>
           </div>
          </div>
        </div>
      </nav>
      <!--Navbar Ends Here--->
       <!----Platterly Logo -->
    <div class="log-cont">
        <div class="log-cld">
            <img src="images/logo_s.jpeg" alt="">
        </div>
    </div>
    <div class="page-wrapper">
    <!--------------Carousel Starts Here-------->
    <div class="carousel-wrapper">
    <div class="slideContainer">
        <div class="Slide">
        <a target="_blank"><img src="images/0.jpeg" /></a>
        <div class="mySlides">
            <a target="_blank" href="vendors.php"> <div class="Caption">VENDORS</div></a>
        </div>
      </div>  
        <div class="Slide">
          <a target="_blank"><img src="images/1.jpeg" /></a>
          <div class="mySlides">
            <a href="#"> <div class="Caption">Catering</div></a>
          </div>
          </div>
          <div class="Slide">
            <a target="_blank"><img src="images/2.jpg" /></a>
            <div class="mySlides">
              <a href="#"><div class="Caption">Lighting</div></a>
            </div>
          </div>
          <div class="Slide">
          <a target="_blank"><img src="images/3.jpg" /></a>
              <div class="mySlides">
              <a href="#"><div class="Caption">Florists</div></a>
              </div>
          </div>
          <div class="Slide">
          <a target="_blank"><img src="images/4.jpg" /></a>
            <div class="mySlides">
            <a href="#"><div class="Caption">Decorators</div></a>
            </div>
        </div>
          <a class="prevBtn">❮</a>
          <a class="nextBtn">❯</a>
      </div>
      <br />
      <div style="text-align:center; margin-top:-25px; padding-top: 15px; height:50px; background-color: rgb(196, 230, 230);">
          <span class="Navdot" onclick="currentSlide(1)"></span>
          <span class="Navdot" onclick="currentSlide(2)"></span>
          <span class="Navdot" onclick="currentSlide(3)"></span>
          <span class="Navdot" onclick="currentSlide(4)"></span>
          <span class="Navdot" onclick="currentSlide(5)"></span>
      </div>
      <script>
          document.querySelector(".prevBtn").addEventListener("click", () => {
              changeSlides(-1);
          });
          document.querySelector(".nextBtn").addEventListener("click", () => {
              changeSlides(1);
          });
          var slideIndex = 1;
          showSlides(slideIndex);

          function changeSlides(n) {
              showSlides((slideIndex += n));
          }

          function currentSlide(n) {
              showSlides((slideIndex = n));
          }

          function showSlides(n) {
              var i;
              var slides = document.getElementsByClassName("Slide");
              var dots = document.getElementsByClassName("Navdot");
              if (n > slides.length) {
                  slideIndex = 1;
              }
              if (n < 1) {
                  slideIndex = slides.length;
              }
              Array.from(slides).forEach(item => (item.style.display = "none"));
              Array.from(dots).forEach(
                  item => (item.className = item.className.replace(" selected", ""))
              );
              slides[slideIndex - 1].style.display = "block";
              dots[slideIndex - 1].className += " selected";
          }
      </script>
      <br></br>
    </div>
    <!-----------------------Carousel Ends------------------------------>


    <!---CONTENT---------->
    
    <div class="content clearfix">
     <!------ Main-content --------->
     <div class="main-content">
     <!-------- CATERERS ----------->
     <h1>Caterers</h1>
            <div class="post1">
            <?php getCaterer(); ?>
            </div>
    
      <!-------- LIGHTING ----------->
      <h1>Lighting</h1>
     <div class="post1">
        <?php  getLight();?>
     </div>

     <!-------- FLORISTS ----------->
     <h1>Florists</h1>
     <div class="post1">
     <?php  getFlorist(); ?>
     </div>

     <!-------- DECORATORS ----------->
     <h1>Decorators</h1>
            <div class="post1">
            <?php getDecor(); ?>
            </div>
     </div>                   
    </div> 
   
  </div>
  <!----- // Page Wrapper (end)------->
  <!---------------------------Footer Starts------------------------------->
   <div class="footer">
    <!------------------ Start of content class ------------>
  
             <div class="footer-content">
                 <!--------- 3 Sections of the footer
  
             First section About ---------->
                 <div class="footer-section about">
                     <h1 class="logo-text" style="text-align: left">CAPO's Event Solutions</h1><br><br>
                     <p> <b>NEW DELHI, INDIA</b> </p>
  
                     <div class="contact">
                         <p> Phone: +91 999 XXX XXXX </p>
                         <p>Email: &nbsp; infoCAPO@XXXX.com </p>
                     </div>
                     <div class="socials">
                         <a href="#"><i class= "fab fa-facebook"></i></a>
                         <a href="#"><i class= "fab fa-twitter"></i></a>
                         <a href="#"><i class= "fab fa-instagram"></i></a>
                         <a href="#"><i class= "fab fa-skype"></i></a>
                         <a href="#"><i class= "fab fa-youtube"></i></a>
                     </div>
                 </div>
  
                 <!---------Second Section Useful Links ------------->
  
                 <div class="footer-section links">
                     <h2> Quick Links </h2>
                     <br> </br>
                     <ul>
                         <a href="index.php">
                             <li>Home</li>
                         </a>
                         <a href="user/login.php">
                             <li>User Login</li>
                         </a>
                         <a href="vendors.php">
                             <li>Vendors</li>
                         </a>
                         <a href="vendor/login.php">
                             <li>Vendor Panel</li>
                         </a>
                     </ul>
                 </div>
  
                 <!--------- Third section  Subscribe us-------------->
                 <div class="footer-section subscibe">
                     <h2>New Users</h2> <br>
                     <p> Subscribe below using email-id </p>
                     <form action="subscribe.html" method="post">
                         <input type="email" name="email" class="text-input sub-input" placeholder="Your emaii-id">
                         <button type="button" class="btn-big">Subscribe</button>
  
                     </form>
                 </div>
             </div>
             <!---------- End of Content class -------------->
  
             <!-------------Bottom copyright information-------->
  
             <div class="footer-bottom">
                 &copy; CAPO's Event Solutions 2023 All Rights Reserved
             </div>
     
  
     <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i><i class="icofont-simple-up"></i></a>
  
     <!---------------------------Footer Ends----------------------->
  
</body>
</html>