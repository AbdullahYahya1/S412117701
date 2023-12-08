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
    <link rel="stylesheet" href="/s412117701/style.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <title>Education</title>
  </head>
  <body>
  <div class="circle circle1"></div>
  <div class="circle circle2"></div>

  <div id="light"></div>

    <?php 
      
        require_once('../../addionals/left_bar.html');
    ?>
    <!-- <div class="circle circle1"></div>
    <div class="circle circle2"></div> -->
    <div class="Maincontainer">
      <header id="header">
        <div class="container">
        <h4 id="animatedText">
                    <span>A</span><span>b</span><span>d</span><span>u</span><span>l</span><span>l</span><span>a</span><span>h</span>
                </h4>
          <a href="/s412117701">
            <p>About Me</p>
          </a>
          <a href="/s412117701/view/Education">
            <p >Education</p>
          </a>
          <a href="/s412117701/view/CERTIFICATIONS">
            <p>Certfifactions</p>
          </a>
          <a href="/s412117701/view/Projects">
          <p class="currentPage">Projects</p>
          </a>
          <a href="/s412117701/view/CONTACTME">
          <p>Contact Me</p>
          </a>
          <p>
          <a href="../../controlle/controlle.php?action=logout">Logout</a>;
          </p>
      </div>
      </header>

    <h1 class="porjects">PROJECTS</h1>


    <div id="slider-container" class="slider-container">
    <div id="slide-wrapper" class="slide-wrapper">
      <!-- Slides will be dynamically added here -->

    </div>
  </div>
  
  <div class="padding">
    </div>

  </div>
    <script src="app.js"></script>
    
    <?php 
        require_once('../../addionals/footer.html');
    ?>

  </body>
</html>
