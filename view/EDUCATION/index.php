<?php
session_start(); 
if(! isset($_SESSION['name'])){
    header('Location:'.'view/login'); 
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/s412117701p/style.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Education</title>
  </head>
  <body>
  <div id="light"></div>

    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="Maincontainer">
      <header id="header">
        <div class="container">
          <h4>Abdullah</h4>

          <a href="/s412117701p">
            <p>About Me</p>
          </a>
          <p>Experience</p>
          <a href="">
            <p class="currentPage">Education</p>
          </a>
          <a href="/s412117701p/view/CERTIFICATIONS">
            <p>Certfifactions</p>
          </a>
          <a href="/s412117701p/view/Projects">
            <p >Projects</p>
          </a>
          <p>Contact Me</p>
          <p>
           <a href="../../controlle/controlle.php?action=logout">Logout</a>;
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
          <div class="subeducation">
            <div class="edc-img">
              <img class="edcimg" src="edcimg" alt="" />
              <p class="edc1">Bachelor Computer-Science</p>
            </div>
            <p class="edc1-2">Qassim University</p>
            <p class="edc1-2">2020-Present</p>
            <div class="trig1"></div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="app.js"></script>
  </body>
</html>
