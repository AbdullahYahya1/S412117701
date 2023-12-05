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
  <div class="imgContainer">
    <img class="imgAbslute" src="imgs/img.png" alt="Image">
  </div>
  <div id='light'></div>
      <?php 

      if(isset($_GET['error'])){
          echo'<div class="mycontainer">
          <div class="X">
              x
          </div>'.
          'The name or email already has an account'.
          '</div>';
      }
      ?>
    
    <div class="Maincontainer">
      <div class="x">
        <h1 class="s1">
          Sign Up
        </h1>
        <div class="section">
          <form action="/s412117701p/controlle/controlle.php" method="post">
            <p>name</p>
            <input type="text" name="PHP_AUTH_USER" required>
            <p>password</p>
            <input type="password" name="PHP_AUTH_PW" required>
            <p>email</p>
            <input type="email" name="email" required>
            <input type="submit" name='register' value="register">
          </form>
          <a href="/s412117701p/view/login">
            <p class="register">login</p>
          </a>
          <?php
          if (isset($_GET['stat'])){
            echo 'something went wrong, try again or register';
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
