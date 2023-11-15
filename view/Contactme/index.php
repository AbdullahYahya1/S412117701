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
  <script src="https://kit.fontawesome.com/4438f26b8e.js" crossorigin="anonymous"></script>
  
  <title>Contact Me</title>
</head>

<body>
  <div id="light"></div>

  <div class="circle c1"></div>
  <div class="circle c2"></div>

  <div class="Maincontainer">
    <header id="header">
      <div class="container">
        <h4>Abdullah</h4>

        <a href="/s412117701p">
          <p>About Me</p>
        </a>
        <p>Experience</p>
        <a href="/s412117701p/view/Education">
          <p>Education</p>
        </a>
        <a href="/s412117701p/view/CERTIFICATIONS">
          <p>Certfifactions</p>
        </a>
        <a href="/s412117701p/view/Projects">
          <p>Projects</p>
        </a>
        <a href="">
          <p class="currentPage">Contact Me</p>
        </a>
        <p>
          <a href="../../controlle/controlle.php?action=logout">Logout</a>;
        </p>
      </div>
    </header>

    <div class="section ">
      <h1 class='contMe'>Contact me</h1>
      <div class='massagecontainer'>

        <div class='ms1'>
          <form class="formMessage" action="/s412117701p/controlle/controlle.php" method="post">
            <p>Send me a message</p>
            <textarea name="message"></textarea>
            <input type="submit" value="Send message">
          </form>
        </div>
        <div class='ms2'>
          <p class="h">Get in touch</p>
          <p class="contms2">
            I’m very approachable and would love to speak to you.
            Feel free to call, send me an email. Follow me in social media or simply complete the enquiry form.
          </p>
          <div>
          <i class="fa-solid fa-phone fa-2xl"></i>
            0532432602
          </div>
          <div>
          <i class="fa-regular fa-envelope fa-2xl"></i>
            RagheedAlmasry@gmail.com
          </div>
          <div>
          <i class="fa-brands fa-github fa-2xl" ></i>
            @Ragheed
          </div>
          <div>
          <i class="fa-brands fa-linkedin fa-2xl" ></i>
            @Ragheed
          </div>
          <div>
          <i class="fa-brands fa-x-twitter fa-2xl" ></i>
          @Ragheed
        </div>
        </div>
      </div>


    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="app.js"></script>
</body>

</html>