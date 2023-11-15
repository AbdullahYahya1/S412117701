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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <link
      rel="stylesheet"
      href="/s412117701p/style.css"
    />
    <link
      rel="stylesheet"
      href="style.css"
    />
    <title>Education</title>
  </head>
  <body>
  <div id="light"></div>
    <div class="circle circle4"></div>
    <div class="Maincontainer">
      <header id="header">
        <div class="container">
          <h4>Abdullah</h4>

          <a href="/s412117701p">
            <p>About Me</p>
          </a>
          <p>Experience</p>
          <a href="../../view/EDUCATION/">
            <p>Education</p>
          </a>
          <a href="">
            <p class="currentPage">Certfifactions</p>
          </a>
          <a href="../../view/Projects">
            <p >Projects</p>
          </a>
          <a href="../../view/CONTACTME/">
            <p>Contact Me</p>
          </a>
          <p>
          <a href="../../controlle/controlle?action=logout">Logout</a>
          
          </p>

        </div>
      </header>

      <div class="section" id="">
        <h1 class="CERTI_title">CERTIFICATIONS</h1>

        <div class="CERTIFelements">



        <div class="CERTIF_Container ">
          <div class="CERTIF_Container_Flex left1">
            <div>
              <svg
                width="100"
                height="88"
                viewBox="0 0 100 88"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <ellipse
                  cx="50"
                  cy="44"
                  rx="50"
                  ry="44"
                  fill="url(#paint0_linear_15_200)"
                />
                <path
                  d="M82 44.7019C82.0022 42.1475 81.3853 39.632 80.2042 37.379C79.0231 35.126 77.3143 33.2052 75.2296 31.7872C73.1449 30.3692 70.7489 29.498 68.2544 29.2508C65.7598 29.0036 63.244 29.3882 60.9304 30.3704C58.6168 31.3526 56.577 32.9019 54.9922 34.8809C53.4074 36.8598 52.3267 39.207 51.8461 41.7141C51.3655 44.2211 51.4998 46.8103 52.2371 49.2517C52.9745 51.693 54.292 53.911 56.0727 55.7086V72.2761C56.0726 72.5698 56.1462 72.8587 56.2864 73.1153C56.4267 73.3719 56.6289 73.5877 56.874 73.7422C57.1191 73.8967 57.3988 73.9849 57.6867 73.9982C57.9746 74.0116 58.2611 73.9497 58.5189 73.8185L66.7818 69.6077L75.0447 73.8185C75.2793 73.9377 75.5379 73.9996 75.8 73.9995C76.1138 74 76.4215 73.9104 76.6877 73.741C76.933 73.5868 77.1355 73.3713 77.2761 73.1149C77.4166 72.8585 77.4906 72.5698 77.4909 72.2761V55.7086C78.9201 54.2696 80.0547 52.5557 80.8287 50.6662C81.6028 48.7768 82.0009 46.7494 82 44.7019ZM54.9454 44.7019C54.9454 42.3159 55.6396 39.9835 56.9402 37.9997C58.2408 36.0158 60.0894 34.4695 62.2522 33.5565C64.415 32.6434 66.7949 32.4045 69.091 32.87C71.387 33.3355 73.496 34.4844 75.1514 36.1716C76.8067 37.8587 77.934 40.0082 78.3907 42.3484C78.8475 44.6885 78.613 47.1141 77.7172 49.3185C76.8213 51.5228 75.3042 53.4069 73.3577 54.7325C71.4113 56.0581 69.1228 56.7656 66.7818 56.7656C63.6426 56.7656 60.632 55.4946 58.4122 53.2322C56.1925 50.9698 54.9454 47.9014 54.9454 44.7019ZM74.1091 69.4871L67.5371 66.138C67.3025 66.0186 67.044 65.9565 66.7818 65.9565C66.5197 65.9565 66.2611 66.0186 66.0265 66.138L59.4545 69.4871V58.2851C61.6987 59.5455 64.2194 60.2066 66.7818 60.2066C69.3442 60.2066 71.8649 59.5455 74.1091 58.2851V69.4871ZM50.4364 63.0847C50.4364 63.5418 50.2582 63.9801 49.9411 64.3033C49.624 64.6265 49.1939 64.8081 48.7455 64.8081H23.9455C22.8991 64.8081 21.8955 64.3844 21.1556 63.6303C20.4157 62.8762 20 61.8533 20 60.7868V24.0212C20 22.9547 20.4157 21.9319 21.1556 21.1778C21.8955 20.4237 22.8991 20 23.9455 20H73.5454C74.5918 20 75.5954 20.4237 76.3353 21.1778C77.0752 21.9319 77.4909 22.9547 77.4909 24.0212C77.4909 24.4783 77.3128 24.9167 76.9956 25.2399C76.6785 25.5631 76.2485 25.7446 75.8 25.7446C75.3515 25.7446 74.9214 25.5631 74.6043 25.2399C74.2872 24.9167 74.1091 24.4783 74.1091 24.0212C74.1091 23.8689 74.0497 23.7228 73.944 23.615C73.8383 23.5073 73.6949 23.4468 73.5454 23.4468H23.9455C23.796 23.4468 23.6526 23.5073 23.5469 23.615C23.4412 23.7228 23.3818 23.8689 23.3818 24.0212V60.7868C23.3818 60.9392 23.4412 61.0853 23.5469 61.1931C23.6526 61.3008 23.796 61.3613 23.9455 61.3613H48.7455C49.1939 61.3613 49.624 61.5429 49.9411 61.8661C50.2582 62.1893 50.4364 62.6276 50.4364 63.0847ZM45.9273 46.9997C45.9273 47.4568 45.7491 47.8952 45.432 48.2184C45.1149 48.5416 44.6848 48.7231 44.2364 48.7231H32.9636C32.5152 48.7231 32.0851 48.5416 31.768 48.2184C31.4509 47.8952 31.2727 47.4568 31.2727 46.9997C31.2727 46.5427 31.4509 46.1043 31.768 45.7811C32.0851 45.4579 32.5152 45.2764 32.9636 45.2764H44.2364C44.6848 45.2764 45.1149 45.4579 45.432 45.7811C45.7491 46.1043 45.9273 46.5427 45.9273 46.9997ZM45.9273 37.8083C45.9273 38.2654 45.7491 38.7038 45.432 39.027C45.1149 39.3502 44.6848 39.5317 44.2364 39.5317H32.9636C32.5152 39.5317 32.0851 39.3502 31.768 39.027C31.4509 38.7038 31.2727 38.2654 31.2727 37.8083C31.2727 37.3513 31.4509 36.9129 31.768 36.5897C32.0851 36.2665 32.5152 36.085 32.9636 36.085H44.2364C44.6848 36.085 45.1149 36.2665 45.432 36.5897C45.7491 36.9129 45.9273 37.3513 45.9273 37.8083Z"
                  fill="black"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_15_200"
                    x1="11.5"
                    y1="8.5"
                    x2="61.5"
                    y2="58.5"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop
                      stop-color="#2954A3"
                      stop-opacity="0.93"
                    />
                    <stop
                      offset="0.862928"
                      stop-color="#B84ACA"
                    />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="textC">
              <p>Professional</p>
              <p>Computer Science for Python Programming</p>
              <ul>
                <li>
                  <a href="https://credentials.edx.org/credentials/4adb96ddea0f40609fe628820f77e9dc/">Show</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="CERTIF_Container ">
          <div class="CERTIF_Container_Flex right1">
            <div>
              <svg
                width="100"
                height="88"
                viewBox="0 0 100 88"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <ellipse
                  cx="50"
                  cy="44"
                  rx="50"
                  ry="44"
                  fill="url(#paint0_linear_15_200)"
                />
                <path
                  d="M82 44.7019C82.0022 42.1475 81.3853 39.632 80.2042 37.379C79.0231 35.126 77.3143 33.2052 75.2296 31.7872C73.1449 30.3692 70.7489 29.498 68.2544 29.2508C65.7598 29.0036 63.244 29.3882 60.9304 30.3704C58.6168 31.3526 56.577 32.9019 54.9922 34.8809C53.4074 36.8598 52.3267 39.207 51.8461 41.7141C51.3655 44.2211 51.4998 46.8103 52.2371 49.2517C52.9745 51.693 54.292 53.911 56.0727 55.7086V72.2761C56.0726 72.5698 56.1462 72.8587 56.2864 73.1153C56.4267 73.3719 56.6289 73.5877 56.874 73.7422C57.1191 73.8967 57.3988 73.9849 57.6867 73.9982C57.9746 74.0116 58.2611 73.9497 58.5189 73.8185L66.7818 69.6077L75.0447 73.8185C75.2793 73.9377 75.5379 73.9996 75.8 73.9995C76.1138 74 76.4215 73.9104 76.6877 73.741C76.933 73.5868 77.1355 73.3713 77.2761 73.1149C77.4166 72.8585 77.4906 72.5698 77.4909 72.2761V55.7086C78.9201 54.2696 80.0547 52.5557 80.8287 50.6662C81.6028 48.7768 82.0009 46.7494 82 44.7019ZM54.9454 44.7019C54.9454 42.3159 55.6396 39.9835 56.9402 37.9997C58.2408 36.0158 60.0894 34.4695 62.2522 33.5565C64.415 32.6434 66.7949 32.4045 69.091 32.87C71.387 33.3355 73.496 34.4844 75.1514 36.1716C76.8067 37.8587 77.934 40.0082 78.3907 42.3484C78.8475 44.6885 78.613 47.1141 77.7172 49.3185C76.8213 51.5228 75.3042 53.4069 73.3577 54.7325C71.4113 56.0581 69.1228 56.7656 66.7818 56.7656C63.6426 56.7656 60.632 55.4946 58.4122 53.2322C56.1925 50.9698 54.9454 47.9014 54.9454 44.7019ZM74.1091 69.4871L67.5371 66.138C67.3025 66.0186 67.044 65.9565 66.7818 65.9565C66.5197 65.9565 66.2611 66.0186 66.0265 66.138L59.4545 69.4871V58.2851C61.6987 59.5455 64.2194 60.2066 66.7818 60.2066C69.3442 60.2066 71.8649 59.5455 74.1091 58.2851V69.4871ZM50.4364 63.0847C50.4364 63.5418 50.2582 63.9801 49.9411 64.3033C49.624 64.6265 49.1939 64.8081 48.7455 64.8081H23.9455C22.8991 64.8081 21.8955 64.3844 21.1556 63.6303C20.4157 62.8762 20 61.8533 20 60.7868V24.0212C20 22.9547 20.4157 21.9319 21.1556 21.1778C21.8955 20.4237 22.8991 20 23.9455 20H73.5454C74.5918 20 75.5954 20.4237 76.3353 21.1778C77.0752 21.9319 77.4909 22.9547 77.4909 24.0212C77.4909 24.4783 77.3128 24.9167 76.9956 25.2399C76.6785 25.5631 76.2485 25.7446 75.8 25.7446C75.3515 25.7446 74.9214 25.5631 74.6043 25.2399C74.2872 24.9167 74.1091 24.4783 74.1091 24.0212C74.1091 23.8689 74.0497 23.7228 73.944 23.615C73.8383 23.5073 73.6949 23.4468 73.5454 23.4468H23.9455C23.796 23.4468 23.6526 23.5073 23.5469 23.615C23.4412 23.7228 23.3818 23.8689 23.3818 24.0212V60.7868C23.3818 60.9392 23.4412 61.0853 23.5469 61.1931C23.6526 61.3008 23.796 61.3613 23.9455 61.3613H48.7455C49.1939 61.3613 49.624 61.5429 49.9411 61.8661C50.2582 62.1893 50.4364 62.6276 50.4364 63.0847ZM45.9273 46.9997C45.9273 47.4568 45.7491 47.8952 45.432 48.2184C45.1149 48.5416 44.6848 48.7231 44.2364 48.7231H32.9636C32.5152 48.7231 32.0851 48.5416 31.768 48.2184C31.4509 47.8952 31.2727 47.4568 31.2727 46.9997C31.2727 46.5427 31.4509 46.1043 31.768 45.7811C32.0851 45.4579 32.5152 45.2764 32.9636 45.2764H44.2364C44.6848 45.2764 45.1149 45.4579 45.432 45.7811C45.7491 46.1043 45.9273 46.5427 45.9273 46.9997ZM45.9273 37.8083C45.9273 38.2654 45.7491 38.7038 45.432 39.027C45.1149 39.3502 44.6848 39.5317 44.2364 39.5317H32.9636C32.5152 39.5317 32.0851 39.3502 31.768 39.027C31.4509 38.7038 31.2727 38.2654 31.2727 37.8083C31.2727 37.3513 31.4509 36.9129 31.768 36.5897C32.0851 36.2665 32.5152 36.085 32.9636 36.085H44.2364C44.6848 36.085 45.1149 36.2665 45.432 36.5897C45.7491 36.9129 45.9273 37.3513 45.9273 37.8083Z"
                  fill="black"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_15_200"
                    x1="11.5"
                    y1="8.5"
                    x2="61.5"
                    y2="58.5"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop
                      stop-color="#2954A3"
                      stop-opacity="0.93"
                    />
                    <stop
                      offset="0.862928"
                      stop-color="#B84ACA"
                    />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="textC">
              <p>Front-end Development</p>
              <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JS</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="CERTIF_Container">
          <div class="CERTIF_Container_Flex left2">
            <div>
              <svg
                width="100"
                height="88"
                viewBox="0 0 100 88"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <ellipse
                  cx="50"
                  cy="44"
                  rx="50"
                  ry="44"
                  fill="url(#paint0_linear_15_200)"
                />
                <path
                  d="M82 44.7019C82.0022 42.1475 81.3853 39.632 80.2042 37.379C79.0231 35.126 77.3143 33.2052 75.2296 31.7872C73.1449 30.3692 70.7489 29.498 68.2544 29.2508C65.7598 29.0036 63.244 29.3882 60.9304 30.3704C58.6168 31.3526 56.577 32.9019 54.9922 34.8809C53.4074 36.8598 52.3267 39.207 51.8461 41.7141C51.3655 44.2211 51.4998 46.8103 52.2371 49.2517C52.9745 51.693 54.292 53.911 56.0727 55.7086V72.2761C56.0726 72.5698 56.1462 72.8587 56.2864 73.1153C56.4267 73.3719 56.6289 73.5877 56.874 73.7422C57.1191 73.8967 57.3988 73.9849 57.6867 73.9982C57.9746 74.0116 58.2611 73.9497 58.5189 73.8185L66.7818 69.6077L75.0447 73.8185C75.2793 73.9377 75.5379 73.9996 75.8 73.9995C76.1138 74 76.4215 73.9104 76.6877 73.741C76.933 73.5868 77.1355 73.3713 77.2761 73.1149C77.4166 72.8585 77.4906 72.5698 77.4909 72.2761V55.7086C78.9201 54.2696 80.0547 52.5557 80.8287 50.6662C81.6028 48.7768 82.0009 46.7494 82 44.7019ZM54.9454 44.7019C54.9454 42.3159 55.6396 39.9835 56.9402 37.9997C58.2408 36.0158 60.0894 34.4695 62.2522 33.5565C64.415 32.6434 66.7949 32.4045 69.091 32.87C71.387 33.3355 73.496 34.4844 75.1514 36.1716C76.8067 37.8587 77.934 40.0082 78.3907 42.3484C78.8475 44.6885 78.613 47.1141 77.7172 49.3185C76.8213 51.5228 75.3042 53.4069 73.3577 54.7325C71.4113 56.0581 69.1228 56.7656 66.7818 56.7656C63.6426 56.7656 60.632 55.4946 58.4122 53.2322C56.1925 50.9698 54.9454 47.9014 54.9454 44.7019ZM74.1091 69.4871L67.5371 66.138C67.3025 66.0186 67.044 65.9565 66.7818 65.9565C66.5197 65.9565 66.2611 66.0186 66.0265 66.138L59.4545 69.4871V58.2851C61.6987 59.5455 64.2194 60.2066 66.7818 60.2066C69.3442 60.2066 71.8649 59.5455 74.1091 58.2851V69.4871ZM50.4364 63.0847C50.4364 63.5418 50.2582 63.9801 49.9411 64.3033C49.624 64.6265 49.1939 64.8081 48.7455 64.8081H23.9455C22.8991 64.8081 21.8955 64.3844 21.1556 63.6303C20.4157 62.8762 20 61.8533 20 60.7868V24.0212C20 22.9547 20.4157 21.9319 21.1556 21.1778C21.8955 20.4237 22.8991 20 23.9455 20H73.5454C74.5918 20 75.5954 20.4237 76.3353 21.1778C77.0752 21.9319 77.4909 22.9547 77.4909 24.0212C77.4909 24.4783 77.3128 24.9167 76.9956 25.2399C76.6785 25.5631 76.2485 25.7446 75.8 25.7446C75.3515 25.7446 74.9214 25.5631 74.6043 25.2399C74.2872 24.9167 74.1091 24.4783 74.1091 24.0212C74.1091 23.8689 74.0497 23.7228 73.944 23.615C73.8383 23.5073 73.6949 23.4468 73.5454 23.4468H23.9455C23.796 23.4468 23.6526 23.5073 23.5469 23.615C23.4412 23.7228 23.3818 23.8689 23.3818 24.0212V60.7868C23.3818 60.9392 23.4412 61.0853 23.5469 61.1931C23.6526 61.3008 23.796 61.3613 23.9455 61.3613H48.7455C49.1939 61.3613 49.624 61.5429 49.9411 61.8661C50.2582 62.1893 50.4364 62.6276 50.4364 63.0847ZM45.9273 46.9997C45.9273 47.4568 45.7491 47.8952 45.432 48.2184C45.1149 48.5416 44.6848 48.7231 44.2364 48.7231H32.9636C32.5152 48.7231 32.0851 48.5416 31.768 48.2184C31.4509 47.8952 31.2727 47.4568 31.2727 46.9997C31.2727 46.5427 31.4509 46.1043 31.768 45.7811C32.0851 45.4579 32.5152 45.2764 32.9636 45.2764H44.2364C44.6848 45.2764 45.1149 45.4579 45.432 45.7811C45.7491 46.1043 45.9273 46.5427 45.9273 46.9997ZM45.9273 37.8083C45.9273 38.2654 45.7491 38.7038 45.432 39.027C45.1149 39.3502 44.6848 39.5317 44.2364 39.5317H32.9636C32.5152 39.5317 32.0851 39.3502 31.768 39.027C31.4509 38.7038 31.2727 38.2654 31.2727 37.8083C31.2727 37.3513 31.4509 36.9129 31.768 36.5897C32.0851 36.2665 32.5152 36.085 32.9636 36.085H44.2364C44.6848 36.085 45.1149 36.2665 45.432 36.5897C45.7491 36.9129 45.9273 37.3513 45.9273 37.8083Z"
                  fill="black"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_15_200"
                    x1="11.5"
                    y1="8.5"
                    x2="61.5"
                    y2="58.5"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop
                      stop-color="#2954A3"
                      stop-opacity="0.93"
                    />
                    <stop
                      offset="0.862928"
                      stop-color="#B84ACA"
                    />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="textC">
              <p>Front-end Development</p>
              <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JS</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="CERTIF_Container">
          <div class="CERTIF_Container_Flex right2">
            <div>
              <svg
                width="100"
                height="88"
                viewBox="0 0 100 88"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <ellipse
                  cx="50"
                  cy="44"
                  rx="50"
                  ry="44"
                  fill="url(#paint0_linear_15_200)"
                />
                <path
                  d="M82 44.7019C82.0022 42.1475 81.3853 39.632 80.2042 37.379C79.0231 35.126 77.3143 33.2052 75.2296 31.7872C73.1449 30.3692 70.7489 29.498 68.2544 29.2508C65.7598 29.0036 63.244 29.3882 60.9304 30.3704C58.6168 31.3526 56.577 32.9019 54.9922 34.8809C53.4074 36.8598 52.3267 39.207 51.8461 41.7141C51.3655 44.2211 51.4998 46.8103 52.2371 49.2517C52.9745 51.693 54.292 53.911 56.0727 55.7086V72.2761C56.0726 72.5698 56.1462 72.8587 56.2864 73.1153C56.4267 73.3719 56.6289 73.5877 56.874 73.7422C57.1191 73.8967 57.3988 73.9849 57.6867 73.9982C57.9746 74.0116 58.2611 73.9497 58.5189 73.8185L66.7818 69.6077L75.0447 73.8185C75.2793 73.9377 75.5379 73.9996 75.8 73.9995C76.1138 74 76.4215 73.9104 76.6877 73.741C76.933 73.5868 77.1355 73.3713 77.2761 73.1149C77.4166 72.8585 77.4906 72.5698 77.4909 72.2761V55.7086C78.9201 54.2696 80.0547 52.5557 80.8287 50.6662C81.6028 48.7768 82.0009 46.7494 82 44.7019ZM54.9454 44.7019C54.9454 42.3159 55.6396 39.9835 56.9402 37.9997C58.2408 36.0158 60.0894 34.4695 62.2522 33.5565C64.415 32.6434 66.7949 32.4045 69.091 32.87C71.387 33.3355 73.496 34.4844 75.1514 36.1716C76.8067 37.8587 77.934 40.0082 78.3907 42.3484C78.8475 44.6885 78.613 47.1141 77.7172 49.3185C76.8213 51.5228 75.3042 53.4069 73.3577 54.7325C71.4113 56.0581 69.1228 56.7656 66.7818 56.7656C63.6426 56.7656 60.632 55.4946 58.4122 53.2322C56.1925 50.9698 54.9454 47.9014 54.9454 44.7019ZM74.1091 69.4871L67.5371 66.138C67.3025 66.0186 67.044 65.9565 66.7818 65.9565C66.5197 65.9565 66.2611 66.0186 66.0265 66.138L59.4545 69.4871V58.2851C61.6987 59.5455 64.2194 60.2066 66.7818 60.2066C69.3442 60.2066 71.8649 59.5455 74.1091 58.2851V69.4871ZM50.4364 63.0847C50.4364 63.5418 50.2582 63.9801 49.9411 64.3033C49.624 64.6265 49.1939 64.8081 48.7455 64.8081H23.9455C22.8991 64.8081 21.8955 64.3844 21.1556 63.6303C20.4157 62.8762 20 61.8533 20 60.7868V24.0212C20 22.9547 20.4157 21.9319 21.1556 21.1778C21.8955 20.4237 22.8991 20 23.9455 20H73.5454C74.5918 20 75.5954 20.4237 76.3353 21.1778C77.0752 21.9319 77.4909 22.9547 77.4909 24.0212C77.4909 24.4783 77.3128 24.9167 76.9956 25.2399C76.6785 25.5631 76.2485 25.7446 75.8 25.7446C75.3515 25.7446 74.9214 25.5631 74.6043 25.2399C74.2872 24.9167 74.1091 24.4783 74.1091 24.0212C74.1091 23.8689 74.0497 23.7228 73.944 23.615C73.8383 23.5073 73.6949 23.4468 73.5454 23.4468H23.9455C23.796 23.4468 23.6526 23.5073 23.5469 23.615C23.4412 23.7228 23.3818 23.8689 23.3818 24.0212V60.7868C23.3818 60.9392 23.4412 61.0853 23.5469 61.1931C23.6526 61.3008 23.796 61.3613 23.9455 61.3613H48.7455C49.1939 61.3613 49.624 61.5429 49.9411 61.8661C50.2582 62.1893 50.4364 62.6276 50.4364 63.0847ZM45.9273 46.9997C45.9273 47.4568 45.7491 47.8952 45.432 48.2184C45.1149 48.5416 44.6848 48.7231 44.2364 48.7231H32.9636C32.5152 48.7231 32.0851 48.5416 31.768 48.2184C31.4509 47.8952 31.2727 47.4568 31.2727 46.9997C31.2727 46.5427 31.4509 46.1043 31.768 45.7811C32.0851 45.4579 32.5152 45.2764 32.9636 45.2764H44.2364C44.6848 45.2764 45.1149 45.4579 45.432 45.7811C45.7491 46.1043 45.9273 46.5427 45.9273 46.9997ZM45.9273 37.8083C45.9273 38.2654 45.7491 38.7038 45.432 39.027C45.1149 39.3502 44.6848 39.5317 44.2364 39.5317H32.9636C32.5152 39.5317 32.0851 39.3502 31.768 39.027C31.4509 38.7038 31.2727 38.2654 31.2727 37.8083C31.2727 37.3513 31.4509 36.9129 31.768 36.5897C32.0851 36.2665 32.5152 36.085 32.9636 36.085H44.2364C44.6848 36.085 45.1149 36.2665 45.432 36.5897C45.7491 36.9129 45.9273 37.3513 45.9273 37.8083Z"
                  fill="black"
                />
                <defs>
                  <linearGradient
                    id="paint0_linear_15_200"
                    x1="11.5"
                    y1="8.5"
                    x2="61.5"
                    y2="58.5"
                    gradientUnits="userSpaceOnUse"
                  >
                    <stop
                      stop-color="#2954A3"
                      stop-opacity="0.93"
                    />
                    <stop
                      offset="0.862928"
                      stop-color="#B84ACA"
                    />
                  </linearGradient>
                </defs>
              </svg>
            </div>
            <div class="textC">
              <p>Front-end Development</p>
              <ul>
                <li>HTML</li>
                <li>CSS</li>
                <li>JS</li>
              </ul>
            </div>
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
