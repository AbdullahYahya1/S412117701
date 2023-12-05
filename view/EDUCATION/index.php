<?php
session_start();
if (!isset($_SESSION['name'])) {
  header('Location:' . 'view/login');
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
  <script src="app.js"></script>

  <title>Education</title>
</head>

<body>    
<div id="light"></div>

  <?php     
      require_once('../../addionals/left_bar.html');
  ?>

  <div class="circle circle1"></div>
  <div class="circle circle2"></div>
  <div class="Maincontainer">
    <header id="header">
      <div class="container">
      <h4 id="animatedText">
        <span>A</span><span>b</span><span>d</span><span>u</span><span>l</span><span>l</span><span>a</span><span>h</span>
      </h4>

        <a href="/s412117701p">
          <p>About Me</p>
        </a>
        <a href="">
          <p class="currentPage">Education</p>
        </a>
        <a href="../../view/CERTIFICATIONS">
          <p>Certfifactions</p>
        </a>
        <a href="../../view/Projects">
          <p>Projects</p>
        </a>
        <a href="../../view/contactme">
          <p>Contact Me</p>
        </a>
        <p>
          <a href="../../controlle/controlle.php?action=logout">Logout</a>
        </p>
      </div>
    </header>

    <div class="section section2" id="section2">
      <div class="sec2C">
        <h1 class="education">EDUCATION</h1>
        <div class="subeducation">
          <div class="edc-img">
            <img class="edcimg" src="edcimg" alt="" />
            <p class="edc1">Bachelor Computer-Science</p>
          </div>
          <p class="edc1-2">Qassim University</p>
          <p class="edc1-2">2020-Present</p>
        </div>

      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</body>

</html>