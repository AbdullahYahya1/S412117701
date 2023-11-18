<?php
session_start(); 
if(! isset($_SESSION['name'])){
    header('Location:'.'view/login'); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<div id="light"></div>
    <?php 
    
    if(isset($_GET['state'])){
        echo'<div class="mycontainer">
        <div class="X">
            x
        </div>'.
        $_GET['state'].
        '</div>';
    }
    
    ?>
    <?php 
    $filePath =  '/addionals/left_bar.html';
    require_once(__DIR__ . $filePath);

    ?>
    <div class='Maincontainer'>

        <header id='header'>
            <div class="container">
                <h4>
                    Abdullah
                </h4>
                <a href="">
                    <p class="currentPage">
                        About Me 
                    </p>
                </a>
                <p >
                    Experience
                </p>
                <a href='view/EDUCATION'>
                <p>
                    Education
                </p>
                </a>
                <a href="view/CERTIFICATIONS">
                    <p>
                        Certfifactions
                    </p>
                </a>
                <a href="view/Projects">
                    <p >Projects</p>
                  </a>
                <a href="view/Contactme">
                  <p>
                Contact Me
                </p>
                </a>

                <p>
                    <a href="controlle/controlle.php?action=logout">Logout</a>;
                </p>

            </div>
        </header>

        <img src="img1.png" class="img1">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>


        <div class="section section1"id='section1'>
            <div class="sec1C">
                <p class='name'>
                    I'm Abdullah Yahya
                </p>
                <p class="job">
                    Problem Solver & Web Developer
                </p>
                <p class="interest">
                    I am intersted in solving any kind of problems
                    & I like learning new Stuff   
                </p>

                <div class="buttons_div">
                    <button> share Prtfolio</button>
                    <button> Download CV</button>
                </div>
            </div>
        </div>


        <div class="sectionSep sectionSep1">
                <hr>
        </div>



    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="app.js"></script>

</body>
</html>


