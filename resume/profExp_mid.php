<?php
session_start();
$conn=mysqli_connect("localhost","root","","resume");
if(mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();

}
else
{
$exp_id=$_SESSION['id'];
$pname = $_POST["pname"];
$cname = $_POST["cname"];
$smonth = $_POST["smonth"];
$syear = $_POST["syear"];
$emonth = $_POST["emonth"];
$eyear = $_POST["eyear"];
$prof_des = $_POST["prof_des"];

// Insert data into the "workexp" table
$sql = "INSERT INTO workexp (exp_id,pname, cname, smonth, syear, emonth, eyear, prof_des)
VALUES ('$exp_id', '$pname', '$cname', '$smonth', '$syear', '$emonth', '$eyear', '$prof_des')";


    if ($conn->query($sql) === TRUE) {
        header('location:skill.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>