<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="template.css" />
    <?php session_start();?>
</head>

<script type="text/javascript"> window.onload = function () { window.print() } </script>
<body>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <?php
    $conn=mysqli_connect("localhost","root","","resume");
    if(mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    
    }
                   $id=$_SESSION['id'];
                   $sql = "SELECT * FROM user WHERE id='$id'";
                   $result = $conn->query($sql);
                   $row = $result->fetch_assoc();
            ?>
    <div class="container">
        <div class="header">
            <div class="full-name">
                <span class="first-name">
                    <?php
                   if(isset($_SESSION['user']))
                   {
                    echo $_SESSION["user"];
                   } 
            ?>
                </span>
                <span class="last-name">
                    <?php
                   $resume = "RESUME\n\n";
                   echo $row["lname"] ."\n";
            ?>
                </span>
            </div>
            <div class="contact-info"><br><br>
                <span class="email">Email: </span>
                <span class="email-val">
                    <?php
                   $resume = "RESUME\n\n";
                   echo $row["email"] ."\n";
            ?>
                </span>
                <span class="separator"></span>
                <span class="phone">Phone: </span>
                <span class="phone-val">
                    <?php
                   $resume = "RESUME\n\n";
                   echo $row["phone"] ."\n";
            ?>
                </span><br>
                <span class="separator"></span>
                <span class="email">Address: </span>
                <span class="email-val">
                    <?php
$sql = "SELECT * FROM address WHERE add_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row["address"] .' '.$row["city"].' '. $row["state"].' '.$row["pin"]. "\n\n";
      ?>
                </span>
            </div>
            <div class="about">
                <span class="position">Front-End Developer </span>
                <span class="desc">
                Web development fresher seeking for an opportunity to contribute to the organisation. 
                I'm an dedicated web developer who promise to use my skills and knowledge in web development,while constantly expanding my knowledge in dynamic and innovative work environment. 
                I'm willing to engage with talented team of professionals to create a meaningful and impactful web solutions.
                </span>
            </div>
        </div>
        <div class="details">
            <div class="section">
                <div class="section__title">Experience</div>
                <div class="section__list">
                    <div class="section__list-item">
                        <div class="left">
                            <?php $sql = "SELECT * FROM workexp WHERE exp_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 ?>
                            <div class="addr">
                                <?php echo $row["cname"] ?>
                            </div>
                            <div class="duration">
                                <?php echo $row["smonth"] ?>
                                <?php echo $row["syear"] ?> TO
                                <?php echo $row["emonth"] ?>
                                <?php echo $row["eyear"] ?>
                            </div>
                        </div>
                        <div class="right">
                            <div class="name">
                                <?php echo $row["pname"] ?>
                            </div>
                            <div class="desc">
                                <?php $row["prof_des"] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section">
                <?php
    $sql = "SELECT * FROM education WHERE e_id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
                <div class="section__title">Education</div>
                <div class="section__list">
                    <div class="section__list-item">
                        <div class="left">
                            <div class="name">
                                <?php echo $row["degree"] ?>
                            </div>
                            <div class="addr">
                                <?php echo $row["sname"] ?>
                            </div>
                            <div class="duration">
                                <?php echo $row["smonth"]?>
                                <?php echo $row["syear"] ?> To
                                <?php echo $row["emonth"]?>
                                <?php echo $row["eyear"] ?>
                            </div>
                        </div>
                        <div class="right">
                            <div class="name">
                                <?php echo $row["slocation"] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section__title">Skills</div>
                <div class="skills">
                    <div class="skills__item">
                        <div class="left">
                            <div class="name">
                                <?php $sql = "SELECT * FROM skill WHERE s_id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row["skill"] . "\n"; ?>
                            </div>
                        </div>
                        <?php $file = fopen("resume.txt","w");
fwrite($file, $resume);
fclose($file);
$conn->close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>