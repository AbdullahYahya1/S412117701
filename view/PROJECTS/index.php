<?php
session_start(); 
if(! isset($_SESSION['name'])){
    header('Location:'.'../login'); 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/s412117701p/style.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Education</title>
  </head>
  <body>
  <div id="light"></div>

    <?php 
      
        require_once('../../addionals/left_bar.html');
    ?>
    <!-- <div class="circle circle1"></div>
    <div class="circle circle2"></div> -->
    <div class="Maincontainer">
      <header id="header">
        <div class="container">
          <h4>Abdullah</h4>

          <a href="/s412117701p">
            <p>About Me</p>
          </a>
          <p>Experience</p>
          <a href="/s412117701p/view/Education">
            <p >Education</p>
          </a>
          <a href="/s412117701p/view/CERTIFICATIONS">
            <p>Certfifactions</p>
          </a>
          <a href="/s412117701p/view/Projects">
          <p class="currentPage">Projects</p>
          </a>
          <a href="/s412117701p/view/CONTACTME">
          <p>Contact Me</p>
          </a>
          <p>
          <a href="../../controlle/controlle.php?action=logout">Logout</a>;
          </p>
      </div>
      </header>

    <h1 class="porjects">PROJECTS</h1>


  <div class="slider-container">
    <div class="slide-wrapper">
      <div class="slide">
        <div class='rel'>
          <img src="imgs/project1.jpg" alt="pro1">
          <p class='projectTitlename'>Project 1 Description</p>
        </div>
      </div>



      <div class="slide">
        <div class='rel'>
          <img src="imgs/project1.jpg" alt="pro3">
          <p class='projectTitlename'>Project 3 Description</p>
        </div>
      </div>




      <div class="slide">
        <div class='rel'>
          <img src="imgs/project1.jpg" alt="pro3">
          <p class='projectTitlename'>Project 3 Description</p>
        </div>
      </div>

      <!-- Add more slides as needed -->
    </div>

    <button class="navigation-btn prev-btn" onclick="prevSlide()">❮</button>
    <button class="navigation-btn next-btn" onclick="nextSlide()">❯</button>
  </div>


  <div class="padding">
    </div>

  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="app.js"></script>
    
  </body>
</html>
