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

    <!-- <div class="circle circle1"></div>
    <div class="circle circle2"></div> -->
    <div class="Maincontainer">
      <div class="x">
        <h1 class="s1">
          Sign In
        </h1>
        <div class="section" >
          <form action="/s412117701p/controlle/controlle.php" method="post">
            <p>name</p>
            <input type="text" name="PHP_AUTH_USER" >
            <p>password</p>
            <input type="password" name="PHP_AUTH_PW" >
            <input type="submit" name='login' value="login">
          </form>
          <a class="register" href="/s412117701p/view/register">
            <p >register</p>
          </a>
          <?php
          if (isset($_GET['stat'])){
            echo 'somthing went wrong try again or register';
          }
          ?>
        </div>

    </div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="app.js"></script>
    
  </body>
</html>
