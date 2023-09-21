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

    <section class="form">
        <br><br><br>
        <h1 style="color: black;" class="text-center justify-content-center">Key Skills</h1>
        <h4 class="text-center justify-content-center">Add relevant professional key skills and proficiencies.</h4>
        <br><br>
        <div class="container">

            <form action="skill_mid.php" method="post">
                <div class="row justify-content-md-center">
                    <div class="col-md-12">
                        <div class="row justify-content-md-center">
                            <div class="col-md-4 text-center">
                             
                            </div>
                        </div>
                        <div class="row justify-content-md-center">
                            <div class="col-md-8">
                                <label for="Description">Add Your Skill</label>
                                <textarea name="skill" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <br>
                        
                        
                    </div>
                    <br>
                </div>
                
                <br><br>
                <div class="row justify-content-md-center">
                    <div class="col-md-4 text-center"></div>
                    <div class="col-md-2 text-center">
                        <button  id="btn_sub" value="Login" class="btn btn-outline-primary btn-lg" style="width: 100%;"><a href="dashbord.php">Skip</a>
                            
                          </button>
                    </div>
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
                    <script>document.write(new Date().getFullYear());</script> All rights reserved |
                    made with 🖤 by
                    Aadarsh, Sailee, Simran
                </p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>