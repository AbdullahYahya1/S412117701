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
  <link rel="stylesheet" href="/s412117701/style.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://kit.fontawesome.com/4438f26b8e.js" crossorigin="anonymous"></script>

  <title>Contact Me</title>
</head>

<body>
  <div id="light"></div>
  <?php

  require_once('../../addionals/left_bar.html');
  ?>
  <div class="circle c1"></div>
  <div class="circle c2"></div>

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
          <p>Education</p>
        </a>
        <a href="/s412117701/view/CERTIFICATIONS">
          <p>Certfifactions</p>
        </a>
        <a href="/s412117701/view/Projects">
          <p>Projects</p>
        </a>
        <a href="">
          <p class="currentPage">Contact Me</p>
        </a>
        <p>
          <a href="../../controlle/controlle.php?action=logout">Logout</a>
        </p>
      </div>
    </header>

    <div class="section ">
      <h1 class='contMe'>Contact me</h1>
      <div class='massagecontainer'>

        <div class='ms1'>
          <form class="formMessage" action="/s412117701/controlle/controlle.php" method="post">
            <p>Send me a message</p>
            <textarea name="message" required></textarea>
            <div>
            <input type="submit" value="Send message">
            <label class='public'>
              public?
              <input class='showit' type="checkbox" name="showit">
            </label>
            </div>
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
            050 738 6853
          </div>
          <div>
            <a href="mailto:abdullahyahyaalshami2001@gmail.com">
              <i class="fa-regular fa-envelope fa-2xl"></i>
              abdullahyahyaalshami2001@gmail.com</a>
          </div>
          <div>
            <a href="https://github.com/AbdullahYahya1">

              <i class="fa-brands fa-github fa-2xl"></i>
              @AbdullahYahya1
            </a>
          </div>
          <div>
            <a href="https://linkedin.com/in/abdullah-yahya-6a371027a">

              <i class="fa-brands fa-linkedin fa-2xl"></i>
              @abdullah-yahya-6a371027a
            </a>
          </div>
          <div>
            <a href="https://twitter.com/AbdullahY261090">
              <i class="fa-brands fa-x-twitter fa-2xl"></i>
              @AbdullahY261090
            </a>
          </div>
        </div>
      </div>


      <?php

require_once(__DIR__ . '/../../controlle/controlle.php');        
if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}
if($_SESSION['id']==1){
$authController = new AuthController();
foreach ($authController->messages() as $messageArray) {
    $res = $authController->getemail($messageArray['user_id']);
    if ($res && $row = $res->fetch_assoc()) {
        $email = $row['email'];
        echo '<form action="/s412117701/controlle/controlle.php" method="post">'
        .'<div class ="comments">' .'<div> <div class="email">' .$email . '</div> <div>' . $messageArray['message'] .' </div> </div>'. 
        '<input type="submit" value="delete" name="delete">'.
        '<input type="hidden" name="id"'.'value='.$messageArray["id"].'>'.
        '</div>'.
        '</form>';
    } else {
        echo "Error fetching email for user ID: " . $messageArray['user_id'] . '<br>';
    }
}
}else{
$authController = new AuthController();
foreach ($authController->messages() as $messageArray) {
    $res = $authController->getemail($messageArray['user_id']);
    if (($res && $row = $res->fetch_assoc())&& $messageArray['public']) {
        echo '<form action="/s412117701/controlle/controlle.php" method="post">'
        .'<div class ="comments">' .'<div><div>' . $messageArray['message'] .' </div> </div>'. 
        '<input type="hidden" name="id"'.'value='.$messageArray["id"].'>'.
        '</div>'.
        '</form>';
    }
}
}
?>
    </div>


    
  </div>
 


  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="app.js"></script>



 





</body>

</html>
