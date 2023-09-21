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
 
<body>
    <div>
        <nav class="navbar navbar-expand-lg">
            <div class="container container-fluid">
            <a class="navbar-brand" href="dashbord.php">
                <img src="./img/Logo.png" alt="Resume-Builder">
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
                    <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="dashbord.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Log Out</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="ContactUs.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </span>
            </div>
        </nav>
    </div>

    <div class="container">
    <section class="form">
        <br><br><br>
        <h1 style="color: black;" class="text-center justify-content-center">Personal Info</h1>
        <h4 class="text-center justify-content-center">Include at minimum your email and phone number.</h4>
        <br><br>

            <form action="pdetails_mid.php" method="post">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <div class="row justify-content-md-center">
                            <div class="col-md-4 text-center">
                             
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-4">
                                <label for="fname" >First Name</label>
                                <input type="text" class="form-control" name="fname" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Enter first name" />
                            </div>
                            <div class="col-md-4">
                                <label for="lname">Last Name</label>
                                <input type="text" class="form-control" name="lname" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Enter last name" />
                            </div>
                        </div>
                        <!-- <input style="width: 300px;" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
              
                    </div>
                    <br>
                    <div class="col-md-12">
                        <br>
                        <div class="row justify-content-md-center">
                            <div class="col-md-4">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Enter email" />
                            </div>
                            <div class="col-md-4">
                                <label for="phone">Phone Number</label>
                                <input type="text" class="form-control" name="phone" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Enter phone number" />
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <br>
                        
                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Enter Address" />
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-md-center">
                            <div class="col-md-3">
                                <label for="City">City</label>
                                <input type="text" class="form-control" name="city" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Enter City" />
                            </div>
                            <div class="col-md-3">
                                <label for="state">State</label>
                                <input type="text" class="form-control" name="state" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Enter State" />
                            </div>
                            <div class="col-md-3">
                                <label for="pin">Pin Code</label>
                                <input type="text" class="form-control" name="pin" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="Enter pin number" />
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                
                <br><br>
                <div class="row justify-content-md-center">
                    <div class="col-md-4 text-center"></div>
                    <div class="col-md-2 text-center">
                        <button type="submit" id="btn_sub" value="Login" class="btn btn-info btn-lg" style="width: 100%;">Continue
                          </button>
                    </div>
                    <div class="col-md-4"></div>
                    <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                </div>
        </div>
        </form>
        </div>
        <br><br><br><br><br><br><br>
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