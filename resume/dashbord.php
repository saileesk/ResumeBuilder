<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- fontawesome -->
    <script
      src="https://kit.fontawesome.com/aedf0d4db2.js"
      crossorigin="anonymous"
    ></script>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Roboto&display=swap"
      rel="stylesheet"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Roboto&display=swap");
    </style>
    <?php session_start();?>
  </head>
  <script>
      
          <?php 
          if(isset($_SESSION['msg']))
          {
          ?>
             var msg= '<?php echo $_SESSION["msg"];?>';
          <?php
          unset($_SESSION['msg']);
          }
          ?>
            alert(msg);    
</script>

  <body>
    <div>
      <nav class="navbar navbar-expand-lg">
        <div class="container container-fluid">
                <a class="navbar-brand" href="dashbord.php">
            <img src="./img/Logo.png" alt="Resume-Builder" />
            <p>
            <?php
                   if(isset($_SESSION['user']))
                   {
                    echo 'Welcome '.$_SESSION["user"];
                   } 
            ?>
            </p>
          </a>
          
          <span class="">
            <div
              class="collapse navbar-collapse d-flex"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="dashbord.php"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./logout.php">Log Out</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./ContactUs.php">Contact Us</a>
                </li>

              </ul>
            </div>
          </span>
        </div>
      </nav>
    </div>
    <section class="home_banner_area">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="banner_content">
                <h3 class="text-uppercase">Create</h3>
                <h1 class="text-uppercase">Your Own Resume</h1>
                <div class="d-flex align-items-center">
                <a
                class="btn btn-outline-dark btn-lg"
                href="education.php"
                ><span>Complete My Profile</span></a
              >&nbsp;&nbsp;
              <a
                class="btn btn-dark btn-lg"
                href="template.php"
                ><span>Create My Resume</span></a
              >
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="home_right_img">
                <img class="" src="./img/Home_right.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="about_area section_gap about">
      <br /><br /><br /><br /><br /><br />
      <div class="container">
        <div class="row justify-content-start align-items-center">
          <div class="col-lg-5">
            <div class="about_img">
              <img class="" src="img/about.png" alt="" />
            </div>
          </div>

          <div class="offset-lg-1 col-lg-5">
            <div class="main_title text-left">
              <h1
                style="
                  color: rgb(21, 21, 21);
                  font-family: 'Roboto', sans-serif;
                "
              >
                Land your dream job with BuildResume <br />
                state-of-the-art builder.
              </h1>
              <br />
              <h4>
                Save time with our easy 3-step resume builder. <br />
                No more writer’s block or formatting difficulties in Word.
                <br />
                Rapidly make a perfect resume employers love.
              </h4>
              <hr />
              <a
                class="btn btn-outline-dark btn-lg"
                
                href="resume_download.php"
                ><span>Create My Resume</span></a
              >
            </div>
          </div>
        </div>
      </div>
      <br /><br /><br /><br /><br />
    </section>
    <section>
      <br /><br /><br /><br /><br /><br />
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-2 text-center"></div>
          <div class="col-md-4 text-center">
            <br /><br /><br /><br /><br /><br />
            <h1><b>Real-time & interactive document preview.</b></h1>
            <h4>
              Our smart preview function lets you see what your document looks
              like as you’re creating it. <br />
              The final result will be exactly what you want. To the letter.
            </h4>
          </div>
          <div class="col-md-4"><img src="./img/5052521.jpg" alt="" /></div>
          <div class="col-md-2"></div>
          <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
        </div>
      </div>
    </section>

    <footer class="footer_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="footer_top flex-column">
              <div class="footer_logo">
                <a href="./index.html">
                  <img src="img/logo.png" alt="" />
                </a>
                <h4>Follow Me</h4>
              </div>
              <div class="footer_social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row footer_bottom justify-content-center">
          <p class="col-lg-8 col-sm-12 footer-text">
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            All rights reserved | made with 🖤 by Sailee Kadam
          </p>
        </div>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
